<?php

namespace Cvega\Mainmenu\Http\Controllers;

use Cvega\Mainmenu\Models\Mainmenu;

class MainmenuController extends Controller
{
    public $main_menu;

    public function __construct($current_id = 0, $current_sub_id = 0)
    {
        $this->main_menu = Mainmenu::where("parent_id", "=", 0)
            ->orderby("order", "ASC")
            ->get()
            ->toArray();

        foreach ($this->main_menu as &$m)
        {
            if ($m['id'] == $current_id) {
                $m['active'] = true;
            } else $m['active'] = false;
            $m["submenu"] = Mainmenu::where("parent_id", "=", $m['id'])
                ->orderby("order", "ASC")
                ->get()
                ->toArray();
        }
    }
}
