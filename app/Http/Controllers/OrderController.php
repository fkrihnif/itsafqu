<?php

namespace App\Http\Controllers;

use App\Models\Contract;
use Illuminate\Http\Request;
use App\Models\ImageTemplate;
use App\Models\User;
use App\Models\VideoTemplate;
use App\Models\WebTemplate;
use App\Models\Order;
use App\Models\Reception;
use Carbon\Carbon;  //cabon utk format tanggal bawaan laravel
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;

class OrderController extends Controller
{

    public function formDaftar(Request $request, $id)
    {
        $id_kode = $id;
        return view('pages.landing.form1', compact('id_kode'));
    }

    public function daftar(Request $request, $id)
    {
        $validation = Validator::make($request->all(), [
            "name" => "required",
            "username" => "required|unique:users,username",
            "email" => "required|unique:users,email",
            "no_hp" => "required|unique:users,no_hp",
            "password" => "min:8|required_with:password_confirmation|same:password_confirmation| unique:users,password",
            "password_confirmation" => "min:8"
        ])->validate();


        $item = new User();
        $item->name = $request->get('name');
        $item->username = $request->get('username');
        $item->email = $request->get('email');
        $item->no_hp = $request->get('no_hp');
        $item->password = Hash::make($request['password']);

        $item->save();
        $id_kode = $id;
        Auth::login($item);

        return redirect()->route('order', ['id_kode' => $id_kode]);
    }

    public function order(Request $request, $id)
    {
        $id_kode = $id;
        //cek type paket undangan masing2
        $cek = $id;
        $cek_type = mb_substr($cek, 0, 1);

        if ($cek_type == 'G') {
            $get_id = ImageTemplate::where('kode', $cek)->first()->id;
            //get type paket
            $package = ImageTemplate::where('kode', $cek)->first()->packages_id;
        } else if ($cek_type == 'V') {
            $get_id = VideoTemplate::where('kode', $cek)->first()->id;
            //get type paket
            $package = VideoTemplate::where('kode', $cek)->first()->packages_id;
        } else if ($cek_type == 'W') {
            $get_id = WebTemplate::where('kode', $cek)->first()->id;
            //get type paket
            $package = WebTemplate::where('kode', $cek)->first()->packages_id;
        }
        return view('pages.landing.form2', compact('id_kode', 'package', 'cek_type'));
    }

    public function orderStore(Request $request, $id)
    {
        $validation = Validator::make($request->all(), [
            "users_id" => "required",
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

        $cek = $id;
        $cek_type = mb_substr($cek, 0, 1);

        $order = new Order();
        if ($cek_type == 'G') {
            $get_id = ImageTemplate::where('kode', $cek)->first()->id;
            $order->image_templates_id = $get_id;
            //get harga
            $harga = ImageTemplate::where('kode', $cek)->first()->harga;
            //membuat kode pesanan
            $string2 = Carbon::now('Asia/Jakarta')->format('His');
            $string1 = "G" . $string2;
            $kode_pesanan = $string1;
            $order->kode_pesanan = $kode_pesanan;
        } else if ($cek_type == 'V') {
            $get_id = VideoTemplate::where('kode', $cek)->first()->id;
            $order->video_templates_id = $get_id;
            //get harga
            $harga = VideoTemplate::where('kode', $cek)->first()->harga;
            //membuat kode pesanan
            $string2 = Carbon::now('Asia/Jakarta')->format('His');
            $string1 = "V" . $string2;
            $kode_pesanan = $string1;
            $order->kode_pesanan = $kode_pesanan;
        } else if ($cek_type == 'W') {
            $get_id = WebTemplate::where('kode', $cek)->first()->id;
            $order->web_templates_id = $get_id;
            //get harga
            $harga = WebTemplate::where('kode', $cek)->first()->harga;
            //membuat kode pesanan
            $string2 = Carbon::now('Asia/Jakarta')->format('His');
            $string1 = "W" . $string2;
            $kode_pesanan = $string1;
            $order->kode_pesanan = $kode_pesanan;
        }
        $order->users_id = $request->users_id;
        $order->nama_lengkap_pria = $request->nama_lengkap_pria;
        $order->nama_panggilan_pria = $request->nama_panggilan_pria;
        $order->ayah_pria = $request->ayah_pria;
        $order->ibu_pria = $request->ibu_pria;
        $order->nama_lengkap_pr = $request->nama_lengkap_pr;
        $order->nama_panggilan_pr = $request->nama_panggilan_pr;
        $order->ayah_pr = $request->ayah_pr;
        $order->ibu_pr = $request->ibu_pr;
        $order->url = '';
        $now = Carbon::now('Asia/Jakarta');
        $deadline_save = $now->add('3 day');
        $order->deadline = $deadline_save;

        //deadline pembayaran
        $deadline = $deadline_save->format('d M Y, H:i\ '); //Besok 13:20, 02 Oct 2020

        $order->save();

        $akad = new Contract();
        $akad->orders_id = $order->id;
        $akad->tanggal_akad = $request->tanggal_akad;
        $akad->tempat_akad = $request->tempat_akad;
        $akad->alamat_akad = $request->alamat_akad;
        $akad->jam_akad = $request->jam_akad;
        $akad->save();

        $resepsi = new Reception();
        $resepsi->orders_id = $order->id;
        $resepsi->tanggal_resepsi = $request->tanggal_resepsi;
        $resepsi->tempat_resepsi = $request->tempat_resepsi;
        $resepsi->alamat_resepsi = $request->alamat_resepsi;
        $resepsi->link_map = $request->link_map;
        $resepsi->jam_resepsi = $request->jam_resepsi;
        $resepsi->save();


        //buat pesan email
        $get_email = User::where('id', $request->users_id)->first()->email;
        $get_name = User::where('id', $request->users_id)->first()->name;
        $email_admin = 'itsafqubuntal27@gmail.com';

        $data = array('name' => $get_name, 'price' => $harga, 'deadline' => $deadline, 'kode_pesanan' => $kode_pesanan);

        Mail::send('pages.landing.mailordercustomer', $data, function ($message) use ($get_email) {
            $message->to($get_email, 'Halo Kak')->subject('Silahkan Lanjutkan pembayaran Anda');
            $message->from(env('MAIL_USERNAME'), 'Admin ITSAFQU');
        });

        Mail::send('pages.landing.mailorderadmin', $data, function ($message) use ($email_admin) {
            $message->to($email_admin, 'Halo Kak')->subject('Ada Orderan Masok woyy!!');
            $message->from(env('MAIL_USERNAME'), 'Admin ITSAFQU');
        });

        if ($cek_type === 'W') {
            return redirect()->route('link', ['kode_pesanan' => $kode_pesanan]);
        } else {
            return view('pages.landing.pembayaran', compact('deadline', 'harga', 'kode_pesanan', 'cek_type'));
        }
    }

    public function link(Request $request, $kode_pesanan)
    {
        $kode_pesanan = $kode_pesanan;
        return view('pages.landing.formlink', compact('kode_pesanan'));
    }

    public function linkStore(Request $request, $kode_pesanan)
    {
        $validation = Validator::make($request->all(), [
            "url" => "required|unique:orders,url",
        ])->validate();

        $order = Order::where('kode_pesanan', $kode_pesanan)->first();
        $order->url = $request->url;
        $order->update();

        $url = $request->url;

        $get_deadline = Order::where('kode_pesanan', $kode_pesanan)->first()->deadline;
        $deadline = $get_deadline;

        $cek = $kode_pesanan;
        $cek_type = mb_substr($kode_pesanan, 0, 1);

        if ($cek_type == 'W') {
            //get harga
            $get_id = Order::where('kode_pesanan', $kode_pesanan)->first()->web_templates_id;
            $harga = WebTemplate::where('id', $get_id)->first()->harga;
        }

        return view('pages.landing.pembayaran', compact('deadline', 'harga', 'kode_pesanan', 'url', 'cek_type'));
    }

    public function show($link)
    {
        if (url()->current() == 'http://127.0.0.1:8000/login') {
            return view('auth.login');
        } elseif (url()->current() == 'http://127.0.0.1:8000/register') {
            return view('auth.register');
        }

        //jika dia blm bayar atau deadline sudah expired maka tdk bisa buka linknya, else bisa buka
        $deadline = Order::where('url', $link)->first()->deadline;
        $current_date = date('Y-m-d H:i:s');
        if ($deadline < $current_date) {
            abort(403, 'Maaf Undangan Website Anda Sudah Expired :(');
        }

        //ambil data order, akad, resepsi
        $order_id = Order::where('url', $link)->first()->id;

        $order = Order::where('url', $link)->firstOrFail();

        $akad = Contract::where('orders_id', $order_id)->firstOrFail();
        $resepsi = Reception::where('orders_id', $order_id)->firstOrFail();

        //ambil id template web
        $get_id = Order::where('url', $link)->first()->web_templates_id;

        $template = WebTemplate::where('id', $get_id)->firstOrFail();

        $a = 'pages.landing.templateWebUser.';
        $a .= $template->link;

        return view($a, compact('order', 'akad', 'resepsi'));
    }
}
