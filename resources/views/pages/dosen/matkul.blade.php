@extends('layouts.dosen')
@section('title', 'Mata Kuliah Anda')
@section('status-beasiswa', 'active')
@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h4>Table Head Options</h4>
            </div>
            <div class="card-body">
                <div class="section-title mt-0">Light</div>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Mata kuliah</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data->matkul as $row)
                        <tr>
                            <th scope="row">{{$loop->index}}</th>
                            <td>{{$row->matkul->nama}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection