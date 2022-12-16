<?php

namespace App\View\Components;

use Illuminate\Http\Request;
use Illuminate\View\Component;

class SellingTimeframeSelect extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->options = [
            1 => 'ASAP',
            2 => '2-4 Weeks',
            3 => '4-6 Weeks',
            4 => '6+ Weeks',
            5 => 'Just Browsing',
        ];
        $this->selected = $request->input('t') ?? '';
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.selling-timeframe-select')
            ->with('text', 'Selling Timeframe')
            ->with('fieldname', 't')
            ->with('selected', $this->selected)
            ->with('options', $this->options);
    }
}
