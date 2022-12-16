<?php

namespace App\View\Components;

use Illuminate\Http\Request;
use Illuminate\View\Component;

class YardConditionSelect extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->options = [
            1 => 'Lush',
            2 => 'Sparse',
            3 => 'No Landscaping',
            4 => 'No Yard',
        ];
        $this->selected = $request->input('y') ?? '';
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.yard-condition-select')
            ->with('text', 'Yard Condition')
            ->with('fieldname', 'y')
            ->with('selected', $this->selected)
            ->with('options', $this->options);
    }
}
