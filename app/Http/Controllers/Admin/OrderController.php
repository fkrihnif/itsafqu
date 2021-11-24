<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Reception;
use App\Models\Contract;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::orderBy('id', 'DESC')->get();
        return view('pages.admin.order.index', compact('orders'));
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
        $item = Order::findOrFail($id);
        return view('pages.admin.order.edit', ['item' => $item]);
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
        $order = Order::findOrFail($id);

        $order->status = $request->get('status');
        if ($request->get('status') == 'Dibayar') {
            $now = Carbon::now('Asia/Jakarta');
            $deadline_add = $now->add('60 day');
            $order->deadline = $deadline_add;

            //buat kirim email ke pelanggan klau ganti status ke "dibayar", jika sudah ada templatenya tinggal uncomment
            // $get_user_id = Order::where('id', $id)->first()->users_id;
            // $get_email = User::where('id', $get_user_id)->first()->email;
            // $get_name = User::where('id', $get_user_id)->first()->name;
            // $kode_pesanan = Order::where('id', $id)->first()->kode_pesanan;
            // $data = array('name' => $get_name, 'kode_pesanan' => $kode_pesanan);

            // Mail::send('pages.landing.mailordercustomer', $data, function ($message) use ($get_email) {
            //     $message->to($get_email, 'Halo Kak')->subject('Pembayaran Sudah Diterima');
            //     $message->from(env('MAIL_USERNAME'), 'Admin ITSAFQU');
            // });
        }
        $order->is_aktif = $request->get('is_aktif');

        $order->update();
        return redirect()->route('order.index')->with('status', 'Data successfully updated');
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

        return redirect()->route('order.index')->with('status', 'Order Berhasil Dihapus!');
    }
}
