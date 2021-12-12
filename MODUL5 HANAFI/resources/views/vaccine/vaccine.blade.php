@extends('layouts.main')

@section('container')
    @if (count($vaccines)===0)

    <div style="text-align: center; margin-top: 3rem;">
        <p class="text-muted mb-2" style="font-size: small">There is no data....</p>
        <a class="btn btn-primary btn-sm" href="/vaccine/tambah">Add Vaccine</a>
    </div>

    @elseif (count($vaccines)>0)

    <div class="container-sm">
        <h3 class="p-4" style="text-align: center">List Vaccine</h3>
        <a href="/vaccine/tambah" class="btn btn-primary">Add Vaccine</a>
        <table class="table table-primary table-sm table-striped mt-3">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>

                <?php $n = 1; ?>
                @foreach ($vaccines as $vaccine)

                <tr>
                    <th scope="row">{{$n++;}}</th>
                    <td>{{$vaccine->name}}</td>
                    <td>{{$vaccine->price}}</td>
                    <td>
                        <div class="row">
                            <div class="col px-1" style="flex-grow: 0;">
                                <form action="{{ route('vaccine.edit',$vaccine->id) }}" method="GET">
                                    <button class="btn btn-sm btn-warning" type="submit">edit</button>
                                </form>
                            </div>
                        
                            <div class="col px-1" style="flex-grow: 0;">
                                <form action="{{route('vaccine.drop',$vaccine->id)}}" method="GET">
                                    @csrf
                                    <button class="btn btn-sm btn-danger" type="submit">delete</button>
                                </form>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
        
            </tbody>
        </table>
    </div>

    @endif

@endsection
