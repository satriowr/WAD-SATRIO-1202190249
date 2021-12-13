<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vaccines;
use App\Models\patients;
use DB;

class patientController extends Controller
{
    public function listVaksin(){
        $dataVaksin = vaccines::all();
        return view('Patient.listVaccines', compact('dataVaksin'));
    }

    public function index(){
        $dataPasien = patients::all();
        return view('Patient.patient', compact('dataPasien'));
    }


    public function registerPatient($id){
        $dataVaksin = DB::table('vaccines')->where('id',$id)->delete();
        //dd($dataVaksin);
        return view('patient.registerPatient', compact('dataVaksin'));
    }

    public function postPatient(Request $request){
        $getData = $request->all();

        if($request->file('image')) {
            $getData['image_ktp'] = $request->file('image_ktp')->store('images_ktp');
        }

        //dd($getData);

        patients::create($getData);

        $dataPasien = patients::all();
        return view('Patient.patient', compact('dataPasien'));

    }

    public function deletePatient($id){
        DB::table('patients')->where('id',$id)->delete();

        $dataPasien = patients::all();
        return view('patient.patient', compact('dataPasien'));
    }

    public function editPatient($id){
        $dataPasien = patients::where('id',$id)->get();
        //dd($data);
        return view('patient.editPatient', compact('dataPasien'));
    }

    public function postEdit(Request $request, $id){
        $getData = $request->all();

        if($request->file('image')) {
            $getData['image'] = $request->file('image')->store('images');
        }

        patients::find($id)->update($getData);

        return redirect('/patient');
    }
}
