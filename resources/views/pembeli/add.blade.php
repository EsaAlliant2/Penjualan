@extends('layout.app')

@section('title')
    pembeli
@endsection

@section('content')
<div class="card mt-3">
    <div class="card-header">
        <div class="card-title">
            <h5>Tambah pembeli</h5>
        </div>
    </div>
    <div class="card-body">
        <form action="{{ route('pembeli.store')}}" method="POST">
        @csrf
        <div class="cool-lg-6">

            <div class="row">                                                                   
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" id="nama" value="{{ old('nama')}}" 
                        class="form-control @error ('nama') is-invalid @enderror">
                        @error('nama')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="telepon">telepon</label>
                        <input type="text" name="telepon" value="{{old('nama')}}" 
                        class="form-control @error ('telepon') is-invalid @enderror">
                        @error('telepon')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group"> 
                        <div class="form-group">
                        <label for="alamat">alamat</label>
                        <input type="text" name="alamat" value="{{old('alamat')}}" class="form-control @error ('alamat') is-invalid @enderror">
                        @error('alamat')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>

            <div class="modal-footer">
            <button class="btn btn-success" type="submit"><i class="fa fa-save"></i>Simpan</button>
            </div>
        </div>
        </form>   
    </div>
</div>
@endsection