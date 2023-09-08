@extends('layouts.master')
@section('title', 'petugas')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">petugas</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">petugas</li>
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
    <form action="">
        <label for="id_petugas">ID Petugas</label>
        <br>
        <input type="text" name="id_petugas" id="id_petugas">
        <br><br>
        <label for="nama_petugas">Nama Petugas</label>
        <br>
        <input type="text" name="nama_petugas" id="nama_petugas">
        <br><br>
        <label for="jabatan">Jabatan</label>
        <br>
        <input type="text" name="jabatan" id="jabatan">
        <br><br>
        <label for="no_telp">No. Telepon</label>
        <br>
        <input type="number" name="no_telp" id="no_telp">
        <br><br>
        <label for="alamat">Alamat</label>
        <br>
        <textarea name="alamat" id="alamat"></textarea>
        <br><br>
        <input type="submit" value="Simpan">
    </form>
</body>
</html>
@endsection