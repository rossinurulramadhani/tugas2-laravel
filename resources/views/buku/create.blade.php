@extends('layouts.master')
@section('h1', 'Create Buku')
@section('title', 'buku')
@section('content')
    <div class="content-wrapper">
        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Form Buku</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="{{ route('buku.store') }}" method="POST">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="kode_buku">Kode Buku</label>
                                        <input class="form-control" type="text" name="kode_buku" id="kode_buku"
                                            placeholder="Input kode">
                                    </div>
                                    <div class="form-group">
                                        <label for="judul_buku">Judul</label>
                                        <input class="form-control" type="text" name="judul_buku" id="judul_buku"
                                            placeholder="Input judul">
                                    </div>
                                    <div class="form-group">
                                        <label for="penulis_buku" name="penulis_buku" id="penulis_buku">Penulis</label>
                                        <input class="form-control" type="text" name="penulis_buku" id="penulis_buku"
                                            placeholder="Input nama penulis">
                                    </div>
                                    <div class="form-group">
                                        <label for="penerbit_buku" name="penerbit_buku" id="penerbit_buku">Penerbit</label>
                                        <input class="form-control" type="text" name="penerbit_buku" id="penerbit_buku"
                                            placeholder="Input nama penerbit">
                                    </div>
                                    <div class="form-group">
                                        <label for="tahun_penerbit" name="tahun_penerbit" id="tahun_penerbit">Tahun Terbit</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                            </div>
                                            <input class="form-control" type="number" name="tahun_penerbit" id="tahun_penerbit" placeholder="Input tahun">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="stok_buku" name="stok_buku" id="stok_buku">Stok Buku</label>
                                        <input class="form-control" type="number" name="stok_buku"
                                            id="stok_buku"placeholder="Input angka">
                                    </div>
                                    <div class="form-group">
                                        <label for="rak">Rak</label>
                                        <select name="rak_id" id="rak" class="form-control">
                                            <option disabled selected>--Pilih Salah Satu--</option>
                                            @forelse ($rak as $key => $value)
                                                <option value="{{ $value->id }}">{{ $value->nama_rak }}</option>
                                            @empty
                                                <option disabled>--Data Masih Kosong--</option>
                                            @endforelse
                                        </select>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.content -->
        </div>
    </div>
@endsection

</html>