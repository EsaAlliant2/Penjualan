@extends('layout.app')

@section('title')
    pembelian
@endsection

@section('content')
<div class="card mt-3">
    <div class="card-header">
        <div class="card-title">
            <h5>tambah pembelian</h5>

            <button type="button" class="btn btn-success btn-sm float-end"
            data-bs-toggle="modal" data-bs-target="#modalTambah"><i class="fa fa-plus"></i></
            button>
        </div>
    </div>
</div>

<div class="card-body">
<table class="table table-striped">
  <thead>
    <tr>
        <th style="width:5%">No</th>
        <th>jumlah</th>
        <th>harga</th>
        <th>barang</th>
        <th style="width: 10%">aksi</th>
    </tr>
  </thead>

  <tbody>
    @foreach ($pembelian as $item)
    <tr>
        <td>{{ $loop->iteration}}</td>
        <td>{{ $item->jumlah}}</td>
        <td>{{ $item->harga}}</td>
        <td>{{ $item->barang_id}}</td>
        <td>
            <a href="/pembelian/{{$item->id}}/edit" class=" btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
            <!-- <form action="{{route('pembelian.destroy',$item->id)}}" method ="POST">
              @csrf
              @method('delete')
              <button class="btn btn-sm btn-danger" type="submit"><i class="fa-solid fa-trash"></i></button>
            </form> -->
            <a href="/pembelian/{{$item->id}}/hapus" class=" btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></a>
        </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>

<!-- Modal -->
<div class="modal fade" id="modalTambah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Tambah pembelian</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{route('pembelian.store')}}" method="POST">
          @csrf
          <div class="form-group mb-3">
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama" 
            class="form-control @error('nama') is-invalid @enderror">
            @error('nama')
              <div class="text-danger">
                {{ $message }}
               </div>
             @enderror
          </input>
          </div>

          <div class="form-group mb-3">
            <label for="jumlah">jumlah</label>
            <input type="number" name="jumlah" id="jumlah" 
            class="form-control @error('jumlah') is-invalid @enderror">
            @error('jumlah')
              <div class="text-danger">
                {{ $message }}
               </div>
             @enderror
          </input>
          </div>

          <div class="form-group mb-3">
            <label for="harga">harga</label>
            <input type="text" name="harga" id="harga" 
            class="form-control @error('harga') is-invalid @enderror">
            @error('harga')
              <div class="text-danger">
                {{ $message }}
               </div>
             @enderror
          </input>
          </div>

          <div class="form-group mb-3">
            <label for="barang_id">barang_id</label>
            <input type="text" name="barang_id" id="barang_id" 
            class="form-control @error('barang_id') is-invalid @enderror">
          </input>
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
@endsection