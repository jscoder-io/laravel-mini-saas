<?php

namespace App\View\Components;

use Illuminate\Http\Request;
use Illuminate\View\Component;

class BathroomConditionSelect extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->options = [
            1 => 'Like New',
            2 => 'Average',
            3 => 'Needs Work',
        ];
        $this->selected = $request->input('b') ?? '';
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.bathroom-condition-select')
            ->with('text', 'Bathroom Condition')
            ->with('fieldname', 'b')
            ->with('selected', $this->selected)
            ->with('options', $this->options);
    }
}
