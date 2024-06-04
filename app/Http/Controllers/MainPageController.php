<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Core\MainPageHelper;

class MainPageController extends Controller
{
    //
    public function main_page(){
        return (new MainPageHelper)->helper();
    }
}
