@extends('layout.app')

@section('title')
    suplier
@endsection

@section('content')
<div class="card mt-3">
    <div class="card-header">
        <div class="card-title">
            <h5>Data suplier</h5>

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
        <th>nama</th>
        <th>telepon</th>
        <th>alamat</th>
        <th style="width: 10%">aksi</th>
    </tr>
  </thead>

  <tbody>
    @foreach ($suplier as $item)
    <tr>
        <td>{{ $loop->iteration}}</td>
        <td>{{ $item->nama}}</td>
        <td>{{ $item->telepon}}</td>
        <td>{{ $item->alamat}}</td>
        <td>
            <a href="/suplier/{{$item->id}}/edit" class=" btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>
            <!-- <form action="{{route('suplier.destroy',$item->id)}}" method ="POST">
              @csrf
              @method('delete')
              <button class="btn btn-sm btn-danger" type="submit"><i class="fa-solid fa-trash"></i></button>
            </form> --> 
            <a href="/suplier/{{$item->id}}/hapus" class=" btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></a>
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
        <h5 class="modal-title" id="staticBackdropLabel">Tambah suplier</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{route('suplier.store')}}" method="POST">
          @csrf
          <div class="form-group mb-3">
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama" 
            class="form-control @error('nama') is-invalid @enderror">
          </input>
          </div>

          <div class="form-group mb-3">
            <label for="telepon">Telepon</label>
            <input type="text" name="telepon" id="telepon" 
            class="form-control @error('telepon') is-invalid @enderror">
          </input>
          </div>

          <div class="form-group mb-3">
            <label for="alamat">Alamat</label>
            <textarea name="alamat" id="alamat" cols="30" rows="10" class="form-control @error('nama') is-invalid @enderror"></textarea>
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