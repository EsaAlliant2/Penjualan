@extends('layout.app')

@section('title')
    home
@endsection

@section('content')
        <div class="row g-2 text-center">
            <div class="col-3">
                <div class="p-3 border bg-light mt-3">10 barang<i 
                class="fa fa-boxes"></i></div>
            </div>

            <div class="col-3">
                <div class="p-3 border bg-light mt-3">Kategori <i 
                class="fa fa-tag"></i></div>
            </div>

            <div class="col-3 text-light">
                <div class="p-3 border bg-success mt-3">5 suplier <i 
                class="fa fa-truck"></i></div>
            </div>

            <div class="col-3 text-light">
                <div class="p-3 border bg-success mt-3"> 100 member <i 
                class="fa fa-users"></i></div>
            </div>

            <div class="col-3 text-light">
                <div class="p-3 border bg-success mt-3"> pembeli <i 
                class="fa fa-bag-shopping"></i></div>
            </div>

            <div class="col-3 text-light">
                <div class="p-3 border bg-success mt-3"> penjual <i 
                class="fa fa-"></i></div>
            </div>
        </div>
@endsection