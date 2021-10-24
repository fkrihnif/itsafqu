<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Package;
use App\Models\VideoTemplate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductVideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videos = VideoTemplate::orderBy('id', 'DESC')->get();
        return view('pages.admin.produk-video.index', compact('videos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() //buat web
    {
        $packages = Package::all();
        return view('pages.admin.produk-video.create', [
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
        $validation = Validator::make($request->all(), [
            "packages_id" => "required",
            "nama" => "required",
            "harga" => "required",
            "deskripsi" => "required",
        ])->validate();
        $product = new VideoTemplate();

        $product->packages_id = $request->get('packages_id');
        $product->nama = $request->get('nama');
        $product->harga = $request->get('harga');
        $product->deskripsi = $request->get('deskripsi');
        $product->link = 'http://www.youtube.com/watch?v='.$request->get('link');
        $product->kode = '';

        if ($request->file("thumbnail")) {
            $thumbnail_file = $request->file('thumbnail')->store('thumbnail_video', 'public');
            $product->thumbnail = $thumbnail_file;
        };

        $product->save();


        $string = "V0";
        $string .= $product->id;

        $input_kode = VideoTemplate::findOrFail($product->id);
        $input_kode->kode = $string;
        $input_kode->update();

        return redirect()->route('produk-video.index')->with('status', 'Produk Berhasil Dibuat!');
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
        $item = VideoTemplate::findOrFail($id);
        $packages = Package::all();
        return view('pages.admin.produk-video.edit', ['item' => $item, 'packages' => $packages]);
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
        $product = VideoTemplate::findOrFail($id);

        $validation = Validator::make($request->all(), [
            "packages_id" => "required",
            "nama" => "required",
            "harga" => "required",
            "deskripsi" => "required",
        ])->validate();
        $product->packages_id = $request->get('packages_id');
        $product->nama = $request->get('nama');
        $product->harga = $request->get('harga');
        $product->deskripsi = $request->get('deskripsi');
        $product->link = 'http://www.youtube.com/watch?v='.$request->get('link');

        if ($request->file('thumbnail')) {
            if ($product->thumbnail && file_exists(storage_path('app/public/thumbnail_video' . $product->thumbnail))) {
                \Storage::delete('public/thumbnail_video' . $product->thumbnail);
            }
            $thumbnail_file = $request->file('thumbnail')->store('thumbnail_video', 'public');
            $product->thumbnail = $thumbnail_file;
        }

        $product->update();

        return redirect()->route('produk-video.index')->with('status', 'Data successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = VideoTemplate::findOrFail($id);
        $product->delete();

        return redirect()->route('produk-video.index')->with('status', 'Data successfully deleted');
    }
}
