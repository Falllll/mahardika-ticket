<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index ()
    {
        return view ('admin.index');
    }

    public function ticket ()
    {
        return view ('admin.ticket');
    }

    public function user ()
    {
        return view ('admin.user');
    }
}
