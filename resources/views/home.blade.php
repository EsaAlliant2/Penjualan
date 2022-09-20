@extends('layout.app')

@section('title')
    home
@endsection

@section('content')
        <div class="row g-2 text-center">
            <div class="col-3 text-light">
            <a class="nav-link text-light" href="/barang">
                <div class="p-3 border bg-danger rounded mt-3">{{$barang->count()}} barang<i 
                class="fa fa-boxes"></i></div></a>
            </div>

            <div class="col-3 text-light">
            <a class="nav-link text-light" href="/kategori">
                <div class="p-3 border bg-warning rounded mt-3">{{$kategori->count()}} Kategori <i 
                class="fa fa-tag"></i></div></a>
            </div>

            <div class="col-3 text-light">
            <a class="nav-link text-light" href="/suplier">
                <div class="p-3 border bg-success rounded mt-3">{{$suplier->count()}} suplier <i 
                class="fa fa-truck"></i></div></a>
            </div>

            <div class="col-3 text-light">
                <div class="p-3 border bg-primary rounded mt-3">  member <i 
                class="fa fa-users"></i></div>
            </div>

            <div class="col-3 text-light">
            <a class="nav-link text-light" href="/pembeli">
                <div class="p-3 border bg-danger rounded mt-3">{{$pembeli->count()}} pembeli <i 
                class="fa fa-bag-shopping"></i></div></a>
            </div>

            <div class="col-3 text-light">
                <div class="p-3 border bg-primary rounded mt-3"> {{$penjualan->count()}} penjualan <i 
                class="fa fa-store"></i></div>
            </div>
        </div>
@endsection