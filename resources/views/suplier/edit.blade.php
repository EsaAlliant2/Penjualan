@extends('layout.app')

@section('title')
    suplier
@endsection

@section('content')
<div class="card mt-3">
    <div class="card-header">
        <div class="card-title">
            <h5>Tambah suplier</h5>
        </div>
    </div>
    <div class="card-body">
        <form action="{{ route('suplier.store', $suplier->id)}}" method="POST">
        @csrf
        @method('PUT')
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" id="nama" value="{{ $suplier->nama }}" class="form-control @error ('nama') is-invalid @enderror">
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
                        <input type="number" name="telepon" value="{{$suplier->telepon}}" 
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
                        <label for="alamat">alamat</label>
                        <input type="text" name="alamat" id="alamat" value="{{$suplier->alamat}}" 
                        class="form-control @error ('alamat') is-invalid @enderror">
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
        </form>   
    </div>
</div>
@endsection