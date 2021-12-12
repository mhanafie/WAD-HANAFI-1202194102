<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\patients;
use App\Models\Vaccines;

class PatientsController extends Controller
{

    public function index()
    {
        $patients = patients::all();
        $page = [
            "pos" => "patient",
            "title" => "Website Vaksin - patient",
            "patients" => $patients
        ];
        return view('patient/patient', $page);
    }

    public function tambah(Vaccines $vaccine)
    {
        $vaccine = Vaccines::find($vaccine->id);
        $page = [
            "pos" => "patient",
            "title" => "Website Vaksin - patient",
            "vaccineName" => $vaccine->name,
            "id" => $vaccine->id,
            "vaccine" => $vaccine
        ];
        return view('patient/Input', $page);
    }

    public function add($id, Request $request)
    {
        $image = time().'.'.$request->image->extension();
        $request->image->move(public_path('image/patients'), $image);

        $patient = new patients();
        $patient->vaccine_id = $id;
        $patient->name = $request->name;
        $patient->nik = $request->nik;
        $patient->alamat = $request->alamat;
        $patient->image_ktp = $image;
        $patient->no_hp = $request->no_hp;

        $patient->save();
        return redirect(route('patient.index'));
    }

    public function edit($id)
    {
        $patient = patients::find($id);
        $vaccine = Vaccines::find($patient->vaccine_id);
        $page = [
            "pos" => "patient",
            "title" => "Website Vaksin - patient",
            "id" => $patient,
            "vaccine" => $vaccine
        ];
        return view('patient/Edit', $page);
    }

    public function replace($id, Request $request)
    {
        $vaccine = Vaccines::find($id);
        $patient = new patients();
        $patient->vaccine_id = $vaccine->id;
        $patient->name = $request->name;
        $patient->nik = $request->nik;
        $patient->alamat = $request->alamat;
        $patient->no_hp = $request->no_hp;
        $patient->save();
        return redirect(route('patient.index'));
    }

    public function drop($id)
    {
        $patient = patients::find($id);
        $patient->delete();
        return redirect(route('patient.index'));
    }
}
