<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // halaman utama
        // return 'halaman utama';
        $nama = "Nasywa";
        $namaBelakang = "Nur Nafilah";
        return view('user.index', compact('nama', 'namaBelakang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // halaman untuk menambahkan data
        // return 'halaman menambahkan data';
        $nama = "Nasywa";
        $namaBelakang = "Nur Nafilah";
        return view('user.create', compact('nama', 'namaBelakang'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // proses menambahkan data

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // halaman menampilkan data by $id
        // return 'halaman menampilkan data';
        // $id = "Nasywa";
        $namaBelakang = "Nur Nafilah";
        return view('user.show', compact('id', 'namaBelakang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // halaman edit data by $id
        $nama = "Nasywa";
        $namaBelakang = "Nur Nafilah";
        return view('user.edit', compact('nama', 'namaBelakang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // proses edit data by $id
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // proses hapus data by $id
    }
}
