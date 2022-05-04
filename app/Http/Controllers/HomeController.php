<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Contracts\View\View;


class HomeController extends Controller
{
    /**
     * @return View
     *
     **/
    function index(): view
    {

        return view('home.index');


    }

}
