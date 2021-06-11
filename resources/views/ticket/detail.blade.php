@extends('ticket.layouts.app')

@section('title', 'Detail')

@section('container')

<style>

</style>

<div class="container my-4">
    <div class="card" >
        <img src="{{asset('img/ticket/1.jpg')}}" class="card-img-top" alt="...">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="title"><strong>Vehicula sed ut at</strong></h1>
                    <p class="jadwal"><strong class="orange">Senin</strong> 15-12-2020</p>
                    <p class="orange"><strong>18 : 00 - 23 : 00</strong></p>
                </div>
                <div class="col-lg-6">
                    <p class="text-decoration-line-through orange text-end diskon"><strong>Rp.50.000,-</strong></p>
                    <h3 class="text-end text-right"><strong>Rp.20.000,-</strong></h3>
                </div>
            </div>
            <p class="card-text desc"><strong>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, placeat? Iste, accusantium! Harum velit obcaecati laudantium ullam, odio vitae corrupti reprehenderit quaerat necessitatibus repellendus eligendi ipsam libero expedita assumenda! Exercitationem. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut assumenda ea obcaecati esse architecto at consequatur, sequi sit? Molestiae vitae accusantium quam aperiam reprehenderit provident? Temporibus iste cum quaerat eligendi. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nam corrupti eaque, nisi dolores quidem commodi repellat excepturi, voluptate a blanditiis libero molestiae necessitatibus nemo id. Tempore nobis doloribus ab ullam! </strong></p>
            <a href="#" class="btn btn-success float-end">Booking Ticket</a>
        </div>
    </div>
</div>














@endsection