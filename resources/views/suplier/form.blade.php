@extends('layout.app')

@section('title')
    suplier
@endsection
@section('content')
<div class="card mt-3">
    <div class="card-header">
        <div class="card-title">
            <h5>Edit suplier</h5>

            <div class="card-body">
            <form action="{{route('suplier.update', $suplier->id)}}" method="POST">
          @csrf
          @method('PUT')
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama" value="{{$suplier->nama}}" class="form-control
            @error('nama') is-invalid @enderror">
            @error('nama')
            <div class="text-danger">
                {{ $message }}
            </div>
            @enderror

            <label for="telepon">telepon</label>
            <input type="text" name="telepon" id="telepon" value="{{$suplier->telepon}}" class="form-control
            @error('telepon') is-invalid @enderror">
            @error('telepon')
            <div class="text-danger">
                {{ $message }}
            </div>
            @enderror

            <label for="alamat">alamat</label>
            <input type="text" name="alamat" id="alamat" value="{{$suplier->alamat}}" class="form-control
            @error('alamat') is-invalid @enderror">
            @error('alamat')
            <div class="text-danger">
                {{ $message }}
            </div>
            @enderror
          </div>

          
          
          
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-success">Simpan</button>
        </div>
      </form>
            </div>
        </div>
    </div>
</div>
@endsection