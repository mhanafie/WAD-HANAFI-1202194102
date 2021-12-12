@extends('layouts.main')

@section('container')
    @if (count($patients)===0)

    <div style="text-align: center; margin-top: 3rem;">
        <p class="text-muted mb-2" style="font-size: small">There is no data....</p>
        <a class="btn btn-primary btn-sm" href="/patient/vaccine">Register Patient</a>
    </div>

    @elseif (count($patients)>0)

    <div class="container-sm">
        <h3 class="p-4" style="text-align: center">List Patient</h3>
        <a href="/patient/vaccine" class="btn btn-primary">Add Patient</a>
        <table class="table table-primary table-sm table-striped mt-3" style="border: 1px solid black;">
            <thead>
              <tr>
                <th scope="col" style="border-top: 1px solid black; border-bottom: 1px solid black;">#</th>
                <th scope="col" style="border-top: 1px solid black; border-bottom: 1px solid black;">Vaccine</th>
                <th scope="col" style="border-top: 1px solid black; border-bottom: 1px solid black;">Name</th>
                <th scope="col" style="border-top: 1px solid black; border-bottom: 1px solid black;">NIK</th>
                <th scope="col" style="border-top: 1px solid black; border-bottom: 1px solid black;">Alamat</th>
                <th scope="col" style="border-top: 1px solid black; border-bottom: 1px solid black;">No Hp</th>
                <th scope="col" style="border-top: 1px solid black; border-bottom: 1px solid black;">Action</th>
              </tr>
            </thead>
            <tbody>

                <?php $n = 1; ?>
                @foreach ($patients as $patient)

                <tr>
                    <th scope="row" style="border-top: 1px solid black; border-bottom: 1px solid black;">{{$n++;}}</th>
                    <td style="border-top: 1px solid black; border-bottom: 1px solid black;">{{$patient->vaccine_id}}</td>
                    <td style="border-top: 1px solid black; border-bottom: 1px solid black;">{{$patient->name}}</td>
                    <td style="border-top: 1px solid black; border-bottom: 1px solid black;">{{$patient->nik}}</td>
                    <td style="border-top: 1px solid black; border-bottom: 1px solid black;">{{$patient->alamat}}</td>
                    <td style="border-top: 1px solid black; border-bottom: 1px solid black;">{{$patient->no_hp}}</td>
                    <td style="border-top: 1px solid black; border-bottom: 1px solid black;">
                        <div class="row">
                            <div class="col px-1" style="flex-grow: 0;">
                                <form action="{{ route('patient.edit',$patient->id) }}" method="GET">
                                    <button type="submit">edit</button>
                                </form>
                            </div>
                            <div class="col px-1" style="flex-grow: 0;">
                                <form action="{{ route('patient.drop',$patient->id) }}" method="GET">
                                    @csrf
                                    <button type="submit">delete</button>
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