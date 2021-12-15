@extends('layouts.main')

@section('container')

    <div class="container-sm">
        <h3 class="p-4" style="text-align: center">Edit {{$vaccine->name}} Patient</h3>
        <form action="{{route('patient.replace',$id->id)}}}" method="POST" enctype="multipart/form-data">
            @csrf
            <label>Vaccine Id</label>
            <div class="input-group mb-3">
                <input type="text" class="form-control" value="{{$id->id}}" readonly>
            </div>

            <label>Patient Name</label>
            <div class="input-group mb-3">
                <input type="text" class="form-control" name="name" value="{{$id->name}}">
            </div>

            <label>NIK</label>
            <div class="input-group mb-3">
                <input type="text" class="form-control" name="nik" value="{{$id->nik}}">
            </div>

            <label>Alamat</label>
            <div class="input-group mb-3">
                <input type="text" class="form-control" name="alamat" value="{{$id->alamat}}">
            </div>

            <div class="my-3">
                <label>Image</label><br>
                <input type="file" name="image">
            </div>

            <label>No Hp</label>
            <div class="input-group mb-3">
                <input type="text" class="form-control" name="no_hp" value="{{$id->no_hp}}">
            </div>

            <button class="btn btn-primary" type="submit">Simpan</button>
        </form>
    </div>

@endsection
