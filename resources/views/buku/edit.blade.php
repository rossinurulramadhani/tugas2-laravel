@extends('layouts.master')
@section('h1', 'Edit Buku')
@section('title', 'buku')
@section('content')
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-warning">
                        <div class="card-header">
                            <h3 class="card-title">Form Buku</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('buku.update', $buku->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="kode_buku">Kode Buku</label>
                                    <input class="form-control @error('kode_buku') is-invalid @enderror" type="text"
                                        name="kode_buku" id="kode_buku" placeholder="Input kode"
                                        value="{{ $buku->kode_buku }}">
                                </div>
                                @error('kode_buku')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="judul_buku">Judul</label>
                                    <input class="form-control @error('judul_buku') is-invalid @enderror" type="text"
                                        name="judul_buku" id="judul_buku" placeholder="Input judul"
                                        value="{{ $buku->judul_buku }}">
                                </div>
                                @error('judul_buku')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="penulis_buku" name="penulis_buku" id="penulis_buku">Penulis</label>
                                    <input class="form-control @error('penulis_buku') is-invalid @enderror" type="text"
                                        name="penulis_buku" id="penulis_buku" placeholder="Input nama penulis"
                                        value="{{ $buku->penulis_buku }}">
                                </div>
                                @error('penulis_buku')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="penerbit_buku" name="penerbit_buku" id="penerbit_buku">Penerbit</label>
                                    <input class="form-control @error('penerbit_buku') is-invalid @enderror" type="text"
                                        name="penerbit_buku" id="penerbit_buku" placeholder="Input nama penerbit"
                                        value="{{ $buku->penerbit_buku }}">
                                </div>
                                @error('penerbit_buku')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="tahun_penerbit" name="tahun_penerbit" id="tahun_penerbit">Tahun Terbit</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                        </div>
                                        <input class="form-control @error('tahun_penerbit') is-invalid @enderror"
                                            type="number" name="tahun_penerbit" id="tahun_penerbit" placeholder="Input tahun"
                                            value="{{ $buku->tahun_penerbit }}">
                                    </div>
                                </div>
                                @error('tahun_penerbit')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="stok_buku" name="stok_buku" id="stok_buku">Stok Buku</label>
                                    <input class="form-control @error('stok_buku') is-invalid @enderror" type="number"
                                        name="stok_buku" id="stok_buku" placeholder="Input angka"
                                        value="{{ $buku->stok_buku }}">
                                </div>
                                @error('stok_buku')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="rak">Rak</label>
                                    <select name="rak_id" id="rak"
                                        class="custom-select  @error('rak_id') is-invalid @enderror">
                                        @forelse ($rak as $key => $value)
                                            <option value="{{ $value->id }}">{{ $value->nama_rak }}</option>
                                        @empty
                                            <option selected disabled>--Data Masih Kosong--</option>
                                        @endforelse
                                    </select>
                                </div>
                                @error('rak_id')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="card-footer">
                                <button type="update" class="btn btn-warning">Update</button>
                                <input type="button" class="btn btn-warning" value="Back" onclick="history.back()">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.content -->
    </div>
@endsection

</html>