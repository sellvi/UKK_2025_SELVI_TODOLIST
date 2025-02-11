<?php

namespace App\Http\Controllers;

use App\Models\Lists;
use App\Models\Task;
use Illuminate\Http\Request;

class ListController extends Controller
{
    //atribut
    //method

    //tampil list
    public function index(){

        // $judul = "dashboard";
        // $list = Lists::all();

        // return $list;

        return view('layouts.index');
    }

    //tambah list
    public function tambah(){
        // $judul = "dashboard";
        // return view('task.dashboard',['data' => $judul]);
    }

    //proses masukan ke database
    public function store(Request $request){

        // return "ada di method store";
        //cara1
        $daftar = new Lists;
            $daftar->nama = $request->nama_list;
        
            $daftar->save();

            return redirect()->back();

            //cara2
        // Lists::create([
        //     "nama => 'tugas selvi'
        // ]);
    }

    public function show($id){
        // Lists::where('id',$id);

        $list = Lists::find($id);


        if(!$list){
            return redirect("/tampil");
        }
        // return view('Task.index',["data"=>$list]);
        $task = Task::where("id_list", $id)->get();

        return view("Task.index",["data" => $list, "todo" => $task,'id_list'=>$list->id]);
    }

    // untuk menghapus list
    public function hapus($id){
        $data = Lists::find($id);
        // $dsta = Task::where();
        $data->delete();
        return redirect()->back();
    }


}
