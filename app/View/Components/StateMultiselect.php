<?php

namespace App\View\Components;

use App\Models\State;
use Illuminate\Http\Request;
use Illuminate\View\Component;

class StateMultiselect extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->options = State::get()->mapWithKeys(fn ($m) => [$m->id => $m->name.' ('.$m->code.')'])->all();
        $this->selected = $request->input('s') ?? [];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.state-multiselect')
            ->with('fieldname', 's[]')
            ->with('selected', $this->selected)
            ->with('options', $this->options);
    }
}
