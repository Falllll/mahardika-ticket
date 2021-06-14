@extends('admin.layouts.app')

@section('title' , 'Ubah Data')

@section('container')
<!-- Main Container -->
<div class="main-content">
    <section class="section">
        <h1 class="section-header">
            <div>Ubah Daftar Ticket</div>
        </h1>

        <!-- Page Content -->
        <div class="content">
            <form action="{{url ('/ticket',$ticket->id)}}" method="post" enctype="multipart/form-data">
                @method('PUT')
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">

                            <div class="block-content">
                                <div class="form-group">
                                    <label for="nama"><strong>Nama Ticket</strong></label>
                                    <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan Nama Ticket" required value="{{$ticket->nama}}">
                                </div>
                                <div class="form-group">
                                    <select name="hari" class="form-control" required value="{{$ticket->hari}}">
                                        <option value="{{$ticket->hari}}">Pilih Hari</option>
                                        <option value="Senin">Senin</option>
                                        <option value="Selasa">Selasa</option>
                                        <option value="Rabu">Rabu</option>
                                        <option value="Kamis">Kamis</option>
                                        <option value="Jum'at">Jum'at</option>
                                        <option value="Sabtu">Sabtu</option>
                                        <option value="Minggu">Minggu</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <fieldset>
                                        <label for="tanggal">Tanggal Event:</label>
                                        <input name="tanggal" type="date" class="form-control datepicker" id="tanggal" placeholder="Pilih tanggal..." value="{{$ticket->tanggal}}">
                                    </fieldset>
                                </div>
                                <div class="form-group">
                                    <label for="jam_mulai">Jam Mulai</label>
                                    <input type="time" name="jam_mulai" id="jam_mulai" class="form-control" required value="{{$ticket->jam_mulai}}">
                                </div>
                                <div class="form-group">
                                    <label for="jam_selesai">Jam Selesai</label>
                                    <input type="time" name="jam_selesai" id="jam_selesai" class="form-control" required value="{{$ticket->jam_selesai}}">
                                </div>
                                <div class="form-group">
                                    <label for="harga"><strong>Harga</strong></label>
                                    <input type="number" name="harga" id="harga" class="form-control" placeholder="Masukkan Harga" required value="{{$ticket->harga}}">
                                </div>
                                <div class="form-group">
                                    <label for="diskon"><strong>Harga Diskon</strong></label>
                                    <input type="number" name="diskon" id="diskon" class="form-control" placeholder="Masukkan diskon" required value="{{$ticket->diskon}}">
                                </div>
                                <div class="form-group">
                                    <label for="stok"><strong>Stok</strong></label>
                                    <input type="number" name="stok" id="stok" class="form-control" placeholder="Masukkan Stok" required value="{{$ticket->stok}}">
                                </div>
                                <label for="desc"><strong>Deskripsi Event</strong></label>
                                <div class="form-group">
                                    <textarea type="text" name="desc" id="desc" cols="70%" rows="3" placeholder="Deskripsi Event" required>{{$ticket->nama}}</textarea>
                                </div>
                                <label for="gambar">Pilih Foto</label>
                                <div class="form-group">
                                    <input type="file" name="gambar" id="gambar" class="dropify" data-height="190">
                                </div>
                                <div class="form-group">
                                    <img src="{{ asset('img/ticket/'.$ticket->gambar)}}" height="10%" width="30%" alt="">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-sm btn-primary btn-circle " style="float:left"><span class="fas fa-plus"> </span> Ubah Data</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>



        </div>
        <section>
            <!-- END Page Content -->
</div>
<!-- END Main Container -->
@endsection