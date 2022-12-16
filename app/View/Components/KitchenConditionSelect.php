<?php

namespace App\View\Components;

use Illuminate\Http\Request;
use Illuminate\View\Component;

class KitchenConditionSelect extends Component
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
        $this->selected = $request->input('k') ?? '';
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.kitchen-condition-select')
            ->with('text', 'Kitchen Condition')
            ->with('fieldname', 'k')
            ->with('selected', $this->selected)
            ->with('options', $this->options);
    }
}
