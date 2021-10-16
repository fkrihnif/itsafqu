<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Package;
use App\Models\WebTemplate;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductWebController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $webs = WebTemplate::orderBy('id', 'DESC')->get();
        return view('pages.admin.produk-web.index', compact('webs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() //buat web
    {
        $packages = Package::all();
        return view('pages.admin.produk-web.create', [
            'packages' => $packages
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
            "packages_id" => "required",
            "nama" => "required",
            "harga" => "required",
            "deskripsi" => "required",
        ])->validate();
        $product = new WebTemplate();

        $product->packages_id = $request->get('packages_id');
        $product->nama = $request->get('nama');
        $product->harga = $request->get('harga');
        $product->deskripsi = $request->get('deskripsi');
        $product->link = $request->get('link');
        $product['slug'] = Str::slug($request->nama);

        if ($request->file("thumbnail")) {
            $thumbnail_file = $request->file('thumbnail')->store('thumbnail_web', 'public');
            $product->thumbnail = $thumbnail_file;
        };

        $product->save();

        return redirect()->route('produk-web.index')->with('status', 'Produk Berhasil Dibuat!');
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
        $item = WebTemplate::findOrFail($id);
        $packages = Package::all();
        return view('pages.admin.produk-web.edit', ['item' => $item, 'packages' => $packages]);
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
        $product = WebTemplate::findOrFail($id);

        $validation = \Validator::make($request->all(), [
            "packages_id" => "required",
            "nama" => "required",
            "harga" => "required",
            "deskripsi" => "required",
        ])->validate();

        $product->packages_id = $request->get('packages_id');
        $product->nama = $request->get('nama');
        $product->harga = $request->get('harga');
        $product->deskripsi = $request->get('deskripsi');
        $product->link = $request->get('link');
        $product['slug'] = Str::slug($request->nama);

        if ($request->file('thumbnail')) {
            if ($product->thumbnail && file_exists(storage_path('app/public/thumbnail_web' . $product->thumbnail))) {
                \Storage::delete('public/thumbnail_web' . $product->thumbnail);
            }
            $thumbnail_file = $request->file('thumbnail')->store('thumbnail_web', 'public');
            $product->thumbnail = $thumbnail_file;
        }

        $product->update();

        return redirect()->route('produk-web.index')->with('status', 'Data successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = WebTemplate::findOrFail($id);
        $product->delete();

        return redirect()->route('produk-web.index')->with('status', 'Data successfully deleted');
    }
}
