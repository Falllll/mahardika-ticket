@extends('ticket.layouts.app')

@section('title' , 'Mahardika Ticket')

@section('container')



{{-- Head --}}
<div class="bg-img auto mb-4">
    <div class="row">
        <div class="col-12 pb-4">
            <div class="pt-5">
                <h1 class="text-center head"><strong>Best Seller</strong></h1>
            </div>
        </div>
        @foreach ($randoms as $random)
        <div class="col-lg-4">
            <a href="{{url('detail')}}/{{$random->id}}">
                <img src="{{ asset('img/ticket/'.$random->gambar)}}" alt="best seller">
            </a>
        </div>
        @endforeach
        
    </div>
</div>


{{-- Main Content --}}

@foreach ($tickets as $ticket)
<div class="container mb-4">
    <div class="card">
        <div class="row">
            <div class="col-lg-3">
                <img class="card-img" src="{{ asset('img/ticket/'.$ticket->gambar)}}" width="300" alt="Ticket">
            </div>
            <div class="col-lg-6">
                <a href="{{url('detail')}}/{{$ticket->id}}">
                    <h1 class="title"><strong>{{$ticket->nama}}</strong></h1>
                </a>
                <p class="jadwal"><strong class="orange">{{$ticket->hari}}</strong> {{$ticket->tanggal}}</p>
                <p class="orange"><strong>{{$ticket->jam_mulai}} - {{$ticket->jam_selesai}}</strong></p>
            </div>
            <div class="col-lg-3">
                <p class="text-decoration-line-through orange text-end diskon"><strong>{{number_format($ticket->harga)}}</strong></p>
                <h3 class="text-end"><strong>{{number_format($ticket->harga)}}</strong></h3>
            </div>
        </div>
    </div>
</div>
@endforeach

    

    

@endsection