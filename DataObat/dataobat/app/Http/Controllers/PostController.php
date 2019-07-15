<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use Validator;
use App\Post;

class PostController extends Controller
{
    public function index(){
    	$title="Ini Halaman Obat";
        $post = Post::where('deleted', '=', 'TIDAK')->get();
    	return view('post.index',['title' => $title, 'post' => $post]);
    }

    public function create(){
    	$title="Tambah Data Obat";
    	return view('post.create', compact('title'));

        
    }

    public function store(Request $request){

        $this->validate($request,[
            'nama'=>'required|min:5',
            'stok'=>'numeric',
            'harga'=>'required',
            'jo'=>'required',
            'bobot'=>'required',
        ]);

        $post = new \App\Post;
        $post->nama = $request->nama;
        $post->stok = $request->stok;
        $post->harga = $request->harga;
        $post->jo = $request->jo;
        $post->bobot = $request->bobot;


        $post->save();
        return redirect('post');
    }

    public function edit($id){
    	$title = "Edit Data Obat";
    	$post = Post::findOrFail($id);
    	return view('post.edit',['title' => $title, 'post' => $post]);
    }

    public function update($id, Request $request){

        $this->validate($request,[
            'nama'=>'required|min:5',
            'stok'=>'numeric',
            'harga'=>'required',
            'jo'=>'required',
            'bobot'=>'required',
        ]);

        $post= Post::findOrFail($id);
        $post->update($request->all());
        return redirect('post');
    }
    public function hapus($id){
        DB::table('post')
            ->where('id', $id)
            ->update(['deleted'=>'IYA']);
        return redirect('post');
    }
}
