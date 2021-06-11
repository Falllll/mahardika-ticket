@extends('layouts.app')

@section('title' , 'User')

@section('container')
<!-- Main Container -->
<div class="main-content">
    <section class="section">
        <h1 class="section-header">
            <div>User</div>
        </h1>

        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-12">
                    <div class="card">

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered ">
                                    <tr>
                                        <th>No</th>
                                        <th>Email</th>
                                        <th>Nama</th>
                                        <th>Aksi</th>
                                    </tr>
                                    {{-- @foreach ($users as $user) --}}
                                    <tr>

                                        <td style="vertical-align: middle;">#</td>
                                        <td style="vertical-align: middle;">#</td>
                                        <td style="vertical-align: middle;">#</td>

                                        <td style="width: 120px;text-align: center;vertical-align: middle; ">
                                            <form action="#" method="post">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-sm btn-primary btn-circle" onclick="return confirm('anda yakin ingin menghapus data?');"><span class="far fa-trash-alt"></span></button>
                                                <!-- <input type="submit" class="btn btn-danger btn-sm" value="Delete" onclick="return confirm('anda yakin ingin menghapus data?');"> -->
                                            </form>

                                        </td>
                                    </tr>
                                    {{-- @endforeach --}}


                                </table>
                            </div>
                        </div>


                        @endsection