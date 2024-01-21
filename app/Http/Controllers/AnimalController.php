<?php

namespace App\Http\Controllers;

use id;
use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public function index(){
        $data = Animal::all();
        return view('dataanimal',compact('data'));
    }

    public function tambahanimal(){
        return view('tambahanimal');
    }

    public function insertanimal(Request $request){
        $data = Animal::create($request->all());
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotoanimal/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('animal')->with('succes','Data Berhasil di Tambahkan');
    }

    public function tampilanimal($id){
        $data = Animal::find($id);
        return view('tampilanimal',compact('data'));
    }

    public function updateanimal(Request $request, $id){
        $data = Animal::find($id);
        $data->update($request->all());
        return redirect()->route('animal')->with('succes','Data Berhasil di Edit');
    }

    public function delete($id){
        $data = Animal::find($id);
        $data->delete();
        return redirect()->route('animal');
    }
}