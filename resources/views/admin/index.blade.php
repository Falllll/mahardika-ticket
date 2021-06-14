@extends('layouts.app')

@section('title' , 'Dashboard | Admin')

@section('container')

<div class="main-content">
  <section class="section">
    <h1 class="section-header">
      <div>Dashboard</div>
    </h1>
    <!-- Row -->
    <div class="row">
      <div class="col-lg-3 col-md-6 col-12">
        <div class="card card-sm-3">
          <div class="card-icon bg-primary">
            <i class="ion ion-person"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Ticket List</h4>
            </div>
            <div class="card-body">
              {{$ticket}}
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-12">
        <div class="card card-sm-3">
          <div class="card-icon bg-warning">
            <i class="fa fa-building"></i>
          </div>
          <div class="card-wrap">
            <div class="card-header">
              <h4>Pengguna</h4>
            </div>
            <div class="card-body">
              {{$user}}
            </div>
          </div>
        </div>
      </div>
      <!-- End Row -->
    </div>



  </section>

</div>

@endsection