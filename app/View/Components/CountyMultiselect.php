<?php

namespace App\View\Components;

use App\Models\County;
use Illuminate\Http\Request;
use Illuminate\View\Component;

class CountyMultiselect extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->options = County::whereIn('state_id', $request->input('s') ?? [1])
            ->get()->mapWithKeys(fn ($m) => [$m->id => $m->county.' ('.$m->zip.')'])->all();
        $this->selected = $request->input('c') ?? [];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.county-multiselect')
            ->with('fieldname', 'c[]')
            ->with('selected', $this->selected)
            ->with('options', $this->options);
    }
}
