<?php

namespace App\View\Components;

use Illuminate\Http\Request;
use Illuminate\View\Component;

class StatusMultiselect extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->options = [
            1 => 'HOT',
            2 => 'NEW',
            3 => 'Clearance',
        ];
        $this->selected = $request->input('st') ?? [];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.status-multiselect')
            ->with('fieldname', 'st[]')
            ->with('selected', $this->selected)
            ->with('options', $this->options);
    }
}
