<?php

namespace App\Livewire\Sales\Document;

use Livewire\Component;
use Modules\Sales\Models\Document;

class ListDocuments extends Component
{
    public $search;

    protected $listeners = ['render' => 'render'];

    public function render()
    {
        $documents = Document::where('name', 'like', '%'.$this->search.'%')
            ->orWhere('serie', 'like', '%'.$this->search.'%')
            ->get();

        return view('livewire.sales.document.list-documents', compact('documents'));
    }
}
