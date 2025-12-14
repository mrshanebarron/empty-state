<?php

namespace MrShaneBarron\empty-state\View\Components;

use Illuminate\View\Component;

class empty-state extends Component
{
    public function __construct()
    {
        //
    }

    public function render()
    {
        return view('ld-empty-state::components.empty-state');
    }
}
