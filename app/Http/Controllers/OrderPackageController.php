<?php

namespace App\Http\Controllers;

use App\Models\Contract;
use Illuminate\Http\Request;
use App\Models\ImageTemplate;
use App\Models\User;
use App\Models\VideoTemplate;
use App\Models\WebTemplate;
use App\Models\LoveStory;
use App\Models\Order;
use App\Models\Reception;
use Carbon\Carbon;  //cabon utk format tanggal bawaan laravel
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;

class OrderPackageController extends Controller
{
    public function daftar(Request $request, $id)
    {
        $id_kode = $id;
        return view('pages.landing.formPaket1', compact('id_kode'));
    }

    public function daftarStore(Request $request, $id)
    {
        $validation = Validator::make($request->all(), [
            "name" => "required",
            "username" => "required|unique:users,username",
            "email" => "required|unique:users,email",
            "no_hp" => "required|unique:users,no_hp",
            "password" => "min:8|required_with:password_confirmation|same:password_confirmation",
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

        return redirect()->route('orderPaket', ['id_kode' => $id_kode]);
    }

    public function orderPaket(Request $request, $id)
    {
        $id_kode = $id;

        if ($id_kode == 'standar') {
            $webs = WebTemplate::where('packages_id', 1)->get();
            $images = '';
            $videos = '';
        } else if ($id_kode == 'premium') {
            $images = ImageTemplate::with(['image_galleries'])->where('packages_id', '<>', 3)->get();
            $videos = '';
            $webs = WebTemplate::where('packages_id', '<>', 3)->get();
        } else if ($id_kode == 'eksklusif') {
            $images = ImageTemplate::with(['image_galleries'])->get();
            $videos = VideoTemplate::all();
            $webs = WebTemplate::all();
        }

        return view('pages.landing.formPaket2', compact('id_kode', 'images', 'videos', 'webs'));
    }

    public function orderPaketStore(Request $request, $id)
    {
        $validation = Validator::make($request->all(), [
            "users_id" => "required",
            "web" => "required",
        ])->validate();

        $item = new Order;
        $item->users_id = $request->get('users_id');
        $item->image_templates_id = $request->get('image');
        $item->web_templates_id = $request->get('web');
        $item->video_templates_id = $request->get('video');
        $item->nama_lengkap_pria = '';
        $item->nama_panggilan_pria = '';
        $item->ayah_pria = '';
        $item->ibu_pria = '';
        $item->nama_lengkap_pr = '';
        $item->nama_panggilan_pr = '';
        $item->ayah_pr = '';
        $item->ibu_pr = '';
        $item->url = '';

        if ($id == 'standar') {
            $kode = 'S';
        } else if ($id == 'premium') {
            $kode = 'P';
        } else if ($id == 'eksklusif') {
            $kode = 'E';
        }

        $string2 = Carbon::now('Asia/Jakarta')->format('His');
        $string1 = $kode . $string2;
        $kode_pesanan = $string1;
        $item->kode_pesanan = $kode_pesanan;
        $item->save();

        return redirect()->route('formPaket', ['id_kode' => $kode_pesanan]);
    }

    public function formPaket(Request $request, $id)
    {
        $id_kode = $id;
        return view('pages.landing.formPaket3', compact('id_kode'));
    }

    public function formPaketStore(Request $request, $id)
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

        $cek_type = $id;
        $get_order_id = Order::where('kode_pesanan', $id)->first()->id;
        $order = Order::findOrFail($get_order_id);

        $cek_paket = mb_substr($id, 0, 1);
        if ($cek_paket == 'S') {
            $harga = 75000;
        } else if ($cek_paket == 'P') {
            $harga = 100000;
        } else if ($cek_paket == 'E') {
            $harga = 200000;
        }
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
        if ($request->file("foto_laki")) {
            $foto_laki = $request->file('foto_laki')->store('foto_pengantin', 'public');
            $order->foto_laki = $foto_laki;
        };
        if ($request->file("foto_pr")) {
            $foto_pr = $request->file('foto_pr')->store('foto_pengantin', 'public');
            $order->foto_pr = $foto_pr;
        };

        //deadline pembayaran
        $deadline = $deadline_save->format('d M Y, H:i\ '); //Besok 13:20, 02 Oct 2020

        $order->update();

        $akad = new Contract();
        $akad->orders_id = $get_order_id;
        $akad->tanggal_akad = $request->tanggal_akad;
        $akad->tempat_akad = $request->tempat_akad;
        $akad->alamat_akad = $request->alamat_akad;
        $akad->jam_akad = $request->jam_akad;
        $akad->save();

        $resepsi = new Reception();
        $resepsi->orders_id = $get_order_id;
        $resepsi->tanggal_resepsi = $request->tanggal_resepsi;
        $resepsi->tempat_resepsi = $request->tempat_resepsi;
        $resepsi->alamat_resepsi = $request->alamat_resepsi;
        $resepsi->link_map = $request->link_map;
        $resepsi->jam_resepsi = $request->jam_resepsi;
        $resepsi->save();

        //cerita cinta
        if ($cek_paket != 'S') {
            $request->validate([
                'moreFields.*.tanggal' => 'required',
                'moreFields.*.judul' => 'required',
                'moreFields.*.cerita' => 'required',
            ]);

            foreach ($request->moreFields as $key => $value) {
                $value['orders_id'] = $order->id;
                LoveStory::create($value);
            }
        }


        //buat pesan email
        $get_email = User::where('id', $request->users_id)->first()->email;
        $get_name = User::where('id', $request->users_id)->first()->name;
        $email_admin = 'itsafqubuntal27@gmail.com';

        $data = array('name' => $get_name, 'price' => $harga, 'deadline' => $deadline, 'kode_pesanan' => $id);

        // Mail::send('pages.landing.mailordercustomer', $data, function ($message) use ($get_email) {
        //     $message->to($get_email, 'Halo Kak')->subject('Silahkan Lanjutkan pembayaran Anda');
        //     $message->from(env('MAIL_USERNAME'), 'Admin ITSAFQU');
        // });

        // Mail::send('pages.landing.mailorderadmin', $data, function ($message) use ($email_admin) {
        //     $message->to($email_admin, 'Halo Kak')->subject('Ada Orderan Masok woyy!!');
        //     $message->from(env('MAIL_USERNAME'), 'Admin ITSAFQU');
        // });

        return redirect()->route('linkPaket', ['kode_pesanan' => $id]);
    }

    public function linkPaket(Request $request, $kode_pesanan)
    {
        $kode_pesanan = $kode_pesanan;
        return view('pages.landing.formPaket4', compact('kode_pesanan'));
    }

    public function linkPaketStore(Request $request, $kode_pesanan)
    {
        $validation = Validator::make($request->all(), [
            "url" => "required|unique:orders,url",
        ])->validate();

        $order = Order::where('kode_pesanan', $kode_pesanan)->first();
        $cek_paket = mb_substr($kode_pesanan, 0, 1);
        if ($cek_paket != 'P') {
            $order->url_subdomain = $request->url;
            $order->update();
        } else {
            $order->url = $request->url;
            $order->update();
        }
        $url = $request->url;

        $get_deadline = Order::where('kode_pesanan', $kode_pesanan)->first()->deadline;
        $deadline = $get_deadline;

        $cek_type = mb_substr($kode_pesanan, 0, 1);
        if ($cek_type == 'S') {
            $harga = 75000;
        } else if ($cek_type == 'P') {
            $harga = 100000;
        } else if ($cek_type == 'E') {
            $harga = 200000;
        }

        return view('pages.landing.pembayaranPaket', compact('deadline', 'harga', 'kode_pesanan', 'url'));
    }
}
