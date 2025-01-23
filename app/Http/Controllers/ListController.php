<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListController extends Controller
{
    //atribut
    //method

    //tampil list
    public function index(){
        return view('layouts.index');
    }

    //tambah list
    public function tambah(){
        $judul = "dashboard";
        return view('task.dashboard',['data' => $judul]);
    }

    //proses masukan ke database
    public function store(){}

    // untuk menghapus list
    public function hapus(){}


}
