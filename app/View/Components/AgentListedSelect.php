<?php

namespace App\View\Components;

use Illuminate\Http\Request;
use Illuminate\View\Component;

class AgentListedSelect extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->options = [
            0 => 'No',
            1 => 'Yes',
        ];
        $this->selected = $request->input('l') ?? '';
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.agent-listed-select')
            ->with('text', 'Agent Listed Property?')
            ->with('fieldname', 'l')
            ->with('selected', $this->selected)
            ->with('options', $this->options);
    }
}
