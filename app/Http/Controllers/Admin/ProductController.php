<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\InvitationType;
use App\Models\Template;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $templates = Template::orderBy('id', 'DESC')->get();
        return view('pages.admin.produk.index', [
            'templates' => $templates
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types = InvitationType::all();
        return view('pages.admin.produk.create', [
            'types' => $types
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation = \Validator::make($request->all(), [
            "invitation_types_id" => "required",
            "nama" => "required",
            "harga" => "required",
            "deskripsi" => "required",
        ])->validate();

        $product = new Template();

        $product->invitation_types_id = $request->get('invitation_types_id');
        $product->nama = $request->get('nama');
        $product->harga = $request->get('harga');
        $product->deskripsi = $request->get('deskripsi');
        $product->link = $request->get('link');

        if ($request->file("thumbnail")) {
            $thumbnail_file = $request->file('thumbnail')->store('thumbnail', 'public');
            $product->thumbnail = $thumbnail_file;
        };

        $product->save();

        return redirect()->route('produk.index')->with('status', 'Produk Berhasil Dibuat!');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
