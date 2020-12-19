@extends('layouts.mahasiswa')
@section('title', 'Halaman Mahasiswa')
@section('status-beasiswa', 'active')
@section('content')

<div class="section-header">
    <h1>Mahasiswa</h1>
</div>
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="hero bg-primary text-white">
                    <div class="hero-inner">
                        <h2>Selamat Datang, {{Auth::user()->name}}</h2>
                        <p class="lead">Halaman ini adalah dashboard Sistem Presensi</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection