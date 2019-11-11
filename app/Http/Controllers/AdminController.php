<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\admin;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = admin::paginate(10);
        return view("pages.admin.list",compact("data"));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("pages.admin.form");
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
            'nama' => 'required|max:50',
            'alamat' => 'required|max:50',
            'telepon' => 'required|max:25'
        ]);
        admin::create($request->except("_token"));
        $request->session()->flash("info","Berhasil Tambah Data Pemilik Kost");
        return redirect()->route("admin.index");
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = admin::find($id);
        return view("pages.admin.form",compact("data"));
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
            'nama' => 'required|max:50',
            'alamat' => 'required|max:50',
            'telepon' => 'required|max:25'
        ]);
        admin::where("id",$id)
                ->update($request->except(["_token","_method"]));
        $request->session()->flash("info","Berhasil Rubah Data Pemilik Kost");
        return redirect()->route("admin.index");
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        admin::destroy($id);
        return redirect()->route("admin.index")
            ->with("info","Berhasil Hapus Data admin");
    }
}