<?php

namespace App\Livewire\Sales\Document;

use Livewire\Component;
use Modules\Sales\Models\Document;

class EditDocument extends Component
{
    public $open = false;

    public $document, $name, $serie;

    protected $rules = [
        'name' => 'required',
        'serie' => 'required',
    ];

    public function mount(Document $document)
    {
        $this->document = $document;
        $this->name  = $document->name;
        $this->serie = $document->serie;
    }
    
    public function render()
    {
        return view('livewire.sales.document.edit-document');
    }

    public function update()
    {
        $this->validate();

        $document = Document::find($this->document->id);
        $document->name = $this->name;
        $document->serie = $this->serie;
        $document->update();

        $this->reset(['open']);

        $this->dispatch('render')->to('sales.document.list-documents'); 
    }
}
