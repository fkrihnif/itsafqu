<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Contract;
use App\Models\Order;
use App\Models\Reception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class MyOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $order = Order::where('users_id', Auth::user()->id)->with(['web_template', 'video_template', 'image_template'])->orderBy('id', 'DESC')->get();
        return view('pages.users.myorders', compact('order'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $item = Order::with(['contracts', 'receptions'])->findOrFail($id);

        return view('pages.users.editorders', ['item' => $item]);
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
        $validation = Validator::make($request->all(), [
            "nama_lengkap_pria" => "required",
            "nama_panggilan_pria" => "required",
            "nama_lengkap_pria" => "required",
            "ayah_pria" => "required",
            "ibu_pria" => "required",
            "nama_lengkap_pr" => "required",
            "nama_panggilan_pr" => "required",
            "ayah_pr" => "required",
            "ibu_pr" => "required",
            "tanggal_akad" => "required",
            "tempat_akad" => "required",
            "alamat_akad" => "required",
            "tanggal_resepsi" => "required",
            "tempat_resepsi" => "required",
            "alamat_resepsi" => "required",
            "link_map" => "required",
        ])->validate();

        $order = Order::findOrFail($id);
        $order->nama_lengkap_pria = $request->nama_lengkap_pria;
        $order->nama_panggilan_pria = $request->nama_panggilan_pria;
        $order->ayah_pria = $request->ayah_pria;
        $order->ibu_pria = $request->ibu_pria;
        $order->nama_lengkap_pr = $request->nama_lengkap_pr;
        $order->nama_panggilan_pr = $request->nama_panggilan_pr;
        $order->ayah_pr = $request->ayah_pr;
        $order->ibu_pr = $request->ibu_pr;
        $order->update();

        $akad = Contract::where('orders_id', $id)->first();
        $akad->tanggal_akad = $request->tanggal_akad;
        $akad->tempat_akad = $request->tempat_akad;
        $akad->alamat_akad = $request->alamat_akad;
        $akad->jam_akad = $request->jam_akad;
        $akad->update();

        $resepsi = Reception::where('orders_id', $id)->first();
        $resepsi->tanggal_resepsi = $request->tanggal_resepsi;
        $resepsi->tempat_resepsi = $request->tempat_resepsi;
        $resepsi->alamat_resepsi = $request->alamat_resepsi;
        $resepsi->link_map = $request->link_map;
        $resepsi->jam_resepsi = $request->jam_resepsi;
        $resepsi->update();

        return redirect()->route('pesanan-ku.index')->with('status', 'Data Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order = Order::findOrFail($id);
        $order->delete();

        $akad = Contract::where('orders_id', $id);
        $akad->delete();

        $resepsi = Reception::where('orders_id', $id);
        $resepsi->delete();

        return redirect()->route('pesanan-ku.index')->with('status', 'Order Berhasil Dihapus!');
    }
}
