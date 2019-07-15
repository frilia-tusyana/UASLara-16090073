<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use Validator;
use App\Penghasilan;

class PenghasilanController extends Controller
{
    public function index(){
    	$title="Ini Halaman Penghasilan";
        $penghasilan = Penghasilan::where('deleted', '=', 'TIDAK')->get();
    	return view('penghasilan.index',['title' => $title, 'penghasilan' => $penghasilan]);
    }

    public function create(){
    	$title="Tambah Data Penghasilan";
    	return view('penghasilan.create', compact('title'));
    }

    public function store(Request $request){

        $this->validate($request,[
            'date'=>'required',
            'jumlah'=>'required',
        ]);

        $penghasilan = new \App\Penghasilan;
        $penghasilan->date = $request->date;
        $penghasilan->jumlah = $request->jumlah;

        $penghasilan->save();
        return redirect('penghasilan');
    }

    public function edit($id){
    	$title = "Edit Penghasilan";
    	$penghasilan = Penghasilan::findOrFail($id);
    	return view('penghasilan.edit',['title' => $title, 'penghasilan' => $penghasilan]);
    }

    public function update($id, Request $request){

        $this->validate($request,[
            'date'=>'required',
            'jumlah'=>'required',
        ]);
        
        $penghasilan= Penghasilan::findOrFail($id);
        $penghasilan->update($request->all());
        return redirect('penghasilan');
    }

    public function hapus($id){
        DB::table('penghasilan')
            ->where('id', $id)
            ->update(['deleted'=>'IYA']);
    	return redirect('penghasilan');
    }
}
