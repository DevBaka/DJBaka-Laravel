<?php

namespace App\Controller;

use Illuminate\Contracts\View\View;

class IndexController{
    public function indexAction(): View{
        return view("index");
    }
}