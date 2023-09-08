@extends('layouts.master')
@section('title', 'buku')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Buku</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Buku</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Form Anggota</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
<body>
    <form action="{{ route('get_petugas') }}">
        <label for="kode_buku">Kode Buku</label>
        <br>
        <input type="text" name="kode_buku" id="kode_buku">
        <br><br>
        <label for="judul">Judul</label>
        <br>
        <input type="text" name="judul" id="judul">
        <br><br>
        <label for="penulis" name="penulis" id="penulis">Penulis</label>
        <br>
        <input type="text" name="penulis" id="penulis">
        <br><br>
        <label for="penerbit" name="penerbit" id="penerbit">Penerbit</label>
        <br>
        <input type="text" name="penerbit" id="penerbit">
        <br><br>
        <label for="tahun_terbit" name="tahun_terbit" id="tahun_terbit">Tahun Terbit</label>
        <br>
        <input type="number" name="tahun_terbit" id="tahun_terbit">
        <br><br>
        <label for="stok" name="stok" id="stok">Stok Buku</label>
        <br>
        <input type="number" name="stok" id="stok">
        <br><br>
        <input type="submit" value="Next">
    </form>
</body>
@endsection 