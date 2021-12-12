<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\vaccines;
use DB;

class vaccineController extends Controller
{
    public function addVaccine(){
        $dataVaksin = vaccines::all();
        return view('Vaccine.vaccine', compact('dataVaksin'));
    }

    public function index(){
        return view('Vaccine.addVaccine');
    }

    public function store(Request $request){

        $getData = $request->validate([
            'name' => 'required|max:255',
            'price' => 'required|max:255',
            'description' => 'required',
            'image' => 'image',
        ]);

        //return $request->file('image')->store('images');
        //ddd($request);

        if($request->file('image')) {
            $getData['image'] = $request->file('image')->store('images');
        }
        
        vaccines::create($getData);


        $dataVaksin = Vaccines::all();
        return view('Vaccine.vaccine', compact('dataVaksin'));
    }

    public function deleteVaccine($id){
        DB::table('vaccines')->where('id',$id)->delete();

        $dataVaksin = Vaccines::all();
        return view('Vaccine.vaccine', compact('dataVaksin'));
    }

    public function editVaccine($id){
        $dataVaksin = DB::table('vaccines')->where('id',$id)->get();
        //dd($dataVaksin);
        return view('Vaccine.editVaccine', compact('dataVaksin'));
    }

    public function postEdit(Request $request){
        DB::table('vaccines')->where('id',$request->id)->update([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
            'image' => $request->image,
        ]);

        return redirect('/vaccine');
    }
}
