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
                        <a href="{{url('/create')}}" class="btn btn-primary"><span class="fa fa-plus"></span> Add New</a>
                    </div>
                    <div class="card">

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered ">
                                    <tr>
                                        <th>No</th>
                                        <th>Gambar</th>
                                        <th>Nama</th>
                                        <th>Hari</th>
                                        <th>tanggal</th>
                                        <th>Jam</th>
                                        <th>Harga</th>
                                        <th>Stok</th>
                                        <th>Desc</th>
                                        <th>Aksi</th>
                                    </tr>
                                    @foreach ($tickets as $ticket)
                                    <tr>

                                        <td style="vertical-align: middle;">{{$i++}}</td>
                                        <td style="vertical-align: middle;">
                                            <img src="{{asset('img/ticket/'. $ticket->gambar)}}" width="120" alt="Ticket">
                                        </td>
                                        <td style="vertical-align: middle;">{{$ticket->nama}}</td>
                                        <td style="vertical-align: middle;">{{$ticket->hari}}</td>
                                        <td style="vertical-align: middle;">{{$ticket->tanggal}}</td>
                                        <td style="vertical-align: middle;">{{$ticket->jam_mulai}} - {{$ticket->jam_selesai}}</td>
                                        <td style="vertical-align: middle;">{{$ticket->harga}}</td>
                                        <td style="vertical-align: middle;">{{$ticket->stok}}</td>
                                        <td style="vertical-align: middle;">{{$ticket->desc}}</td>
                                        <td style="width: 120px;text-align: center;vertical-align: middle; ">

                                            <a href="/edit/{{$ticket->id}}" class="btn btn-sm btn-primary btn-circle " style="float:left"><i class="far fa-edit"></i></a>
                                            <form action="/ticket/{{$ticket->id}}" method="post">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-sm btn-primary btn-circle" style="float:right" onclick="return confirm('anda yakin ingin menghapus data?');"><span class="far fa-trash-alt"></span></button>
                                                <!-- <input type="submit" class="btn btn-danger btn-sm" value="Delete" onclick="return confirm('anda yakin ingin menghapus data?');"> -->
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach


                                </table>
                            </div>
                        </div>


                        @endsection