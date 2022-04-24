<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;


class HomeController extends Controller
{
    /**
     * @return View
     *
     **/
    function index(): View
    {
        return view('home.index');
    }
}
