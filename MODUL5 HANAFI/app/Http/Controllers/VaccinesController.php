<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vaccines;

class VaccinesController extends Controller
{

    public function index()
    {
        $vaccines = Vaccines::all();
        $page = [
            "pos" => "vaccine",
            "title" => "Website Vaksin - vaccine",
            "vaccines" => $vaccines
        ];
        return view('vaccine/vaccine', $page);
    }

    public function tambah()
    {
        $page = [
            "pos" => "vaccine",
            "title" => "Website Vaksin - vaccine"
        ];
        return view('vaccine/Input', $page);
    }

    public function add(Request $request)
    {
        $image = time() . '.' . $request->image->extension();
        $request->image->move(public_path('image/vaccines'), $image);

        $Vaccine = new Vaccines();
        $Vaccine->name = $request->name;
        $Vaccine->price = $request->price;
        $Vaccine->description = $request->description;
        $Vaccine->image = $image;

        $Vaccine->save();
        return redirect(route('vaccine.index'));
    }

    public function edit($id)
    {
        $VaccineId = Vaccines::find($id);
        $page = [
            "pos" => "vaccine",
            "title" => "Website Vaksin - vaccine",
            "id" => $VaccineId
        ];
        return view('vaccine/Edit', $page);
    }

    public function replace($id, Request $request)
    {
        $VaccineUpdate = Vaccines::find($request->id);
        $VaccineUpdate->name = $request->name;
        $VaccineUpdate->price = $request->price;
        $VaccineUpdate->description = $request->description;

        $VaccineUpdate->save();
        return redirect(route('vaccine.index'));
    }

    public function drop($id)
    {
        $Vaccine = Vaccines::find($id);
        return redirect(route('vaccine.index'));
    }

    public function pilih()
    {
        $vaccines = Vaccines::all();
        $page = [
            "pos" => "patient",
            "title" => "Website Vaksin - patient",
            "vaccines" => $vaccines
        ];
        return view('patient/ListVaccine', $page);
    }

}
