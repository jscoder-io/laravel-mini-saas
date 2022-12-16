<?php

namespace App\View\Components;

use Illuminate\Http\Request;
use Illuminate\View\Component;

class SearchInput extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->value = $request->input('q') ?? null;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.search-input')
            ->with('fieldname', 'q')
            ->with('value', $this->value);
    }
}
