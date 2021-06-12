@extends('ticket.layouts.app')

@section('title', 'Detail')

@section('container')

<style>

</style>

<div class="container my-4">
    <div class="card" >
        <img src="{{ asset('img/ticket/'.$ticket->gambar)}}" class="card-img-top" alt="...">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="title"><strong>{{$ticket->nama}}</strong></h1>
                    <p class="jadwal"><strong class="orange">{{$ticket->hari}}</strong>{{$ticket->tanggal}}</p>
                    <p class="orange"><strong>{{$ticket->jam_mulai}} - {{$ticket->jam_selesai}}</strong></p>
                </div>
                <div class="col-lg-6">
                    <p class="text-decoration-line-through orange text-end diskon"><strong>{{$ticket->harga}}</strong></p>
                    <h3 class="text-end text-right"><strong>Rp.20.000,-</strong></h3>
                </div>
            </div>
            <p class="card-text desc"><strong>{{$ticket->desc}}</strong></p>
            <a href="#" class="btn btn-success float-end">Booking Ticket</a>
        </div>
    </div>
</div>














@endsection