<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;

class HomeController extends Controller
{
    public function index()
    {
        $tickets = Ticket::all();
        $randoms = Ticket::all()->random(3);

        return view ('ticket.index', compact('randoms', 'tickets'));
    }

    public function detail($id)
    {
        $ticket = Ticket::where('id', $id)->first();
        return view ('ticket.detail', compact('ticket'));
    }
}
