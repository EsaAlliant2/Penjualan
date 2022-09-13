@extends('layout.app')

@section('title')
    pembelian
@endsection
@section('content')
<div class="card mt-3">
    <div class="card-header">
        <div class="card-title">
            <h5> pembelian</h5>

            <div class="card-body">
            <form action="{{route('pembelian.update', $pembelian->id)}}" method="POST">
          @csrf
          @method('PUT')
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama" value="{{$pembelian->nama}}" class="form-control
            @error('nama') is-invalid @enderror">
            @error('nama')
            <div class="text-danger">
                {{ $message }}
            </div>
            @enderror

            <label for="jumlah">jumlah</label>
            <input type="text" name="jumlah" id="jumlah" value="{{$pembelian->jumlah}}" class="form-control
            @error('jumlah') is-invalid @enderror">
            @error('jumlah')
            <div class="text-danger">
                {{ $message }}
            </div>
            @enderror

            <label for="harga">harga</label>
            <input type="text" name="harga" id="harga" value="{{$pembelian->harga}}" class="form-control
            @error('harga') is-invalid @enderror">
            @error('harga')
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