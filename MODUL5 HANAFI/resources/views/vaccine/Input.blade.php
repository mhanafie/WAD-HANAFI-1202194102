@extends('layouts.main')

@section('container')

    <div class="container-sm">
        <h3 class="p-4" style="text-align: center">Input Vaccine</h3>
        <form action="{{route('vaccine.add')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <label>Vaccine Name</label>
            <div class="input-group mb-3">
                <input type="text" class="form-control" name="name">
            </div>

            <label>Price</label>
            <div class="input-group mb-3">
                <span class="input-group-text">Rp</span>
                <input type="number" class="form-control" name="price">
            </div>

            <label>Description</label>
            <div class="input-group">
                <textarea class="form-control" name="description"></textarea>
            </div>

            <div class="my-3">
                <label>Image</label><br>
                <input type="file" name="image">
            </div>
            <button class="btn btn-primary" type="submit">Tambah</button>
        </form>
    </div>

@endsection
