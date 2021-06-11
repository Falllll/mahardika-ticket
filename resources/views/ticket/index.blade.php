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
        <div class="col-lg-4">
            <a href="#">
                <img src="{{asset('img/asset/1.png')}}" alt="best seller">
            </a>
        </div>
        <div class="col-lg-4">
            <a href="#">
                <img src="{{asset('img/asset/2.png')}}" alt="best seller">
            </a>
        </div>
        <div class="col-lg-4">
            <a href="#">
                <img src="{{asset('img/asset/3.png')}}" alt="best seller">
            </a>
        </div>
    </div>
</div>


{{-- Main Content --}}

<div class="container mb-4">
    <div class="card">
        <div class="row">
            <div class="col-lg-3">
                <img class="card-img" src="{{asset('img/ticket/1.jpg')}}" width="300" alt="Ticket">
            </div>
            <div class="col-lg-6">
                <h1 class="title"><strong>Vehicula sed ut at</strong></h1>
                <p class="jadwal"><strong class="orange">Senin</strong> 15-12-2020</p>
                <p class="orange"><strong>18 : 00 - 23 : 00</strong></p>
            </div>
            <div class="col-lg-3">
                <p class="text-decoration-line-through orange text-end diskon"><strong>Rp.50.000,-</strong></p>
                <h3 class="text-end"><strong>Rp.20.000,-</strong></h3>
            </div>
        </div>
    </div>
    
</div>
    

@endsection