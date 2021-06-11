@extends('layouts.app')

@section('title' , 'Ticket')

@section('container')
<!-- Main Container -->
<div class="main-content">
    <section class="section">
        <h1 class="section-header">
            <div>Ticket</div>
        </h1>

        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-12">
                    <div class="block-options p-3">
                        <a href="{{url('/create/menu')}}" class="btn btn-primary"><span class="fa fa-plus"></span> Add New</a>
                    </div>
                    <div class="card">

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered ">
                                    <tr>
                                        <th>No</th>
                                        <th>Gambar</th>
                                        <th>Name</th>
                                        <!-- <th>Time</th> -->
                                        <th>Deskripsi</th>
                                        <th>Harga</th>

                                        <th>Aksi</th>
                                    </tr>
                                    {{-- @foreach ($menus as $menu) --}}
                                    <tr>

                                        <td style="vertical-align: middle;">#</td>
                                        <td style="vertical-align: middle;">
                                            <img src="#" width="120" alt="Foto makanan">
                                        </td>
                                        <td style="vertical-align: middle;">#</td>
                                        <td style="width: 350px;vertical-align: middle;">#</td>
                                        <td style="vertical-align: middle;">#</td>


                                        <td style="width: 120px;text-align: center;vertical-align: middle; ">

                                            <a href="#/edit" class="btn btn-sm btn-primary btn-circle " style="float:left"><i class="far fa-edit"></i></a>
                                            <form action="#" method="post">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-sm btn-primary btn-circle" style="float:right" onclick="return confirm('anda yakin ingin menghapus data?');"><span class="far fa-trash-alt"></span></button>
                                                <!-- <input type="submit" class="btn btn-danger btn-sm" value="Delete" onclick="return confirm('anda yakin ingin menghapus data?');"> -->
                                            </form>
                                        </td>
                                    </tr>
                                    {{-- @endforeach --}}


                                </table>
                            </div>
                        </div>


                        @endsection