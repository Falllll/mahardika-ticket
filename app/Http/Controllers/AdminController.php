<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Models\User;

class AdminController extends Controller
{
    public function index ()
    {
        return view ('admin.index');
    }

    public function ticket ()
    {
        $i = 0;
        $i++;
        $tickets = Ticket::paginate(10);
        return view ('admin.ticket', compact('tickets','i'));
    }

    public function user ()
    {
        $i = 0;
        $i++;
        $users = User::paginate(10);
        return view ('admin.user', compact('users','i'));
    }

    public function create ()
    {
        return view ('admin.create');
    }

    public function store (Request $request)
    {
        $nm = $request->gambar;
        $namafile = time() . rand(100, 999) . "." . $nm->getClientOriginalExtension();

        $date =  date('y-m-d', strtotime($request->tanggal));
        // Simpan data ke table Ticket
        $ticket = new Ticket;
        $ticket->nama = $request->nama;
        $ticket->hari = $request->hari;
        $ticket->tanggal = $date;
        $ticket->jam_mulai = $request->jam_mulai;
        $ticket->jam_selesai = $request->jam_selesai;
        $ticket->harga = $request->harga;
        $ticket->stok = $request->stok;
        $ticket->desc = $request->desc;
        $ticket->gambar = $namafile;
        $nm->move(public_path() . '/img/ticket', $namafile);
        $ticket->save();

        return redirect ('/ticket');
    }

    public function edit($id)
    {
        $ticket = Ticket::find($id);
        return view('admin.edit', compact('ticket'));
    }

    public function update (Request $request, $id)
    {
        $ubah = Ticket::findorfail($id);

        $awal = $ubah->gambar;

        if ($request['gambar'] != null) {

            $request->gambar->move(public_path() . '/img/ticket', $awal);
        }

        $ticket = [
            'nama' => $request['nama'],
            'hari' => $request['hari'],
            'tanggal' => $request['tanggal'],
            'jam_mulai' => $request['jam_mulai'],
            'jam_selesai' => $request['jam_selesai'],
            'harga' => $request['harga'],
            'stok' => $request['stok'],
            'desc' => $request['desc'],
            'gambar' => $awal,

        ];
        $ubah->update($ticket);
        return redirect ('/ticket');
    }

    public function destroy($id)
    {
        $Ticket = Ticket::find($id);
        $Ticket->delete();
        return redirect('/ticket');
    }

    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('/user');
    }
}
