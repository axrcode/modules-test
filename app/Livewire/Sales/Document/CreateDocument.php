<?php

namespace App\Livewire\Sales\Document;

use Livewire\Component;
use Modules\Sales\Models\Document;

class CreateDocument extends Component
{
    public $open = false;

    public $name, $serie;

    protected $rules = [
        'name' => 'required',
        'serie' => 'required',
    ];

    public function render()
    {
        return view('livewire.sales.document.create-document');
    }

    public function save()
    {
        $this->validate();

        $document = new Document;
        $document->name = $this->name;
        $document->serie = $this->serie;
        $document->save();

        $this->reset(['open', 'name', 'serie']);

        $this->dispatch('render')->to('sales.document.list-documents'); 
    }
}
