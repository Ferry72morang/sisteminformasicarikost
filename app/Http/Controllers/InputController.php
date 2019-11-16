<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Input;
class InputController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Input::paginate(10);
        return view("pages.input.list",compact("data"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("pages.input.form");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'idk' => 'required|max:8',
            'alamat' => 'required|max:50',
            'kdpos' => 'required|max:50',
            'klasifikasi' => 'required|max:25',
            'fasilitas' => 'required|max:25',
            'ukuran' => 'required|max:25',
            'luas' => 'required|max:25',
            'idn' => 'required|max:25',
            'harga' => 'required|max:25',
            'gambar' => 'required|max:25'
        ]);
        Input::create($request->except("_token"));
        $request->session()->flash("info","Berhasil Tambah Data Kost");
        return redirect()->route("input.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Input::find($id);
        return view("pages.input.form",compact("data"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $request->validate([
            'idk' => 'required|max:8',
            'alamat' => 'required|max:50',
            'kdpos' => 'required|max:50',
            'klasifikasi' => 'required|max:25',
            'fasilitas' => 'required|max:25',
            'ukuran' => 'required|max:25',
            'luas' => 'required|max:25',
            'idn' => 'required|max:25',
            'harga' => 'required|max:25',
            'gambar' => 'required|max:25'
        ]);
        Input::where("id",$id)
                ->update($request->except(["_token","_method"]));
        $request->session()->flash("info","Berhasil Rubah Data Kost");
        return redirect()->route("input.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Input::destroy($id);
        return redirect()->route("input.index")
            ->with("info","Berhasil Hapus Data kost");
    }
}
