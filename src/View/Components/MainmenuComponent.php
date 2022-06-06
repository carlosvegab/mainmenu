<?php

namespace Cvega\Mainmenu\View\Components;

use Illuminate\View\Component;

class MainmenuComponent extends Component
{
    public $main_menu;

    public function __construct($main_menu)
    {
        $this->main_menu = $main_menu;
    }

    public function render()
    {
        return view('mainmenu::components.mainmenu');
    }
}

