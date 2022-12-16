<?php

namespace App\View\Components;

use Illuminate\Http\Request;
use Illuminate\View\Component;

class MortgageSelect extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->options = [
            1 => 'No',
            2 => 'Yes. Payment up to date',
            3 => 'Yes. I\'m behind payment',
        ];
        $this->selected = $request->input('m') ?? '';
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.mortgage-select')
            ->with('text', 'Mortgage')
            ->with('fieldname', 'm')
            ->with('selected', $this->selected)
            ->with('options', $this->options);
    }
}
