<?php

namespace App\Http\Controllers;

use App\Models\Lists;
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

        return view('Task.dashboard');
    }

    //tambah list
    public function tambah(){
        // $judul = "dashboard";
        // return view('task.dashboard',['data' => $judul]);
    }

    //proses masukan ke database
    // public function store(){
    //     $daftar = new Lists;
    //         $daftar->nama = "tugas selvi";
    //     $daftar->save();

        // Lists::create([
        //     "nama => 'tugas selvi'
        // ]);
    }

    // // untuk menghapus list
    // public function hapus($id){
    //     $data = Lists::find($id);

    //     $data->delete();
    // }


// }
