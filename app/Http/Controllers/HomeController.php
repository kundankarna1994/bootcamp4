<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * HomeController
 */
class HomeController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
     */
    public function index()
    {
        return view("home");
    }
}
