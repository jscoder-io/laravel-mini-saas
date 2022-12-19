<?php

namespace App\Http\Livewire;

use App\Models\Lead;
use Livewire\Component;

class Leads extends Component
{
    private $leads;

    public function mount()
    {
        $this->leads = Lead::latest()->paginate(10);
    }

    public function search()
    {
        //$this->skipRender();
        $this->leads = Lead::latest()->paginate(10);
    }

    public function render()
    {
        return view('livewire.leads')
            ->with('leads', $this->leads)
            ->layout('layouts.base');
    }
}
