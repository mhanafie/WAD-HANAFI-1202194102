@extends('layouts.main')

@section('container')

<div class="container-sm">
    <h3 class="p-4" style="text-align: center">List Vaccine</h3>
    
    <div class="row">

    @foreach ($vaccines as $vaccine)

        <div class="col-sm-4 my-2">
            <div class="card" style="height: 350px">
                <img src="/image/vaccines/{{$vaccine->image}}" class="card-img-top" alt="vaccine" height="160px">
                <div class="card-body p-2">
                    <h5 class="card-title mb-0">{{$vaccine->name}}</h5>
                    <p class="text-muted" style="font-size: small">{{$vaccine->price}}</p>
                    <p class="card-text" style="font-size: small">{{$vaccine->description}}</p>
                    
                </div>
                <div class="card-footer p-2">
                    <form action="/patient/vaccine/{{ $vaccine->id }}" method="GET">
                        <button type="submit" class="btn btn-sm btn-primary w-100">Vaccine Now</button>
                    </form>
                </div>
            </div>
        </div>

    @endforeach

    </div>  

</div>
     
@endsection