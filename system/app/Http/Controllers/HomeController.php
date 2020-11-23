<?php

namespace App\Http\Controllers;

use App\Models\Produk;

class HomeController extends Controller{


	function index(){
		$data['list_produk'] = Produk::all();
		return view('cl.ecomare', $data);
	}

	function dataProduk(){
		$produk = new Produk;
        $produk->nama = request('nama');
        $produk->harga = request('harga');
        $produk->berat = request('berat');
        $produk->stok = request('stok');
        $produk->deskripsi = request('deskripsi');
        $produk->save();

        return redirect('cl.ecomare');
	}

	function showIndex(){
		return view('index');
	}


	function showlog(){
		return view('log');
	}

	function showproduk(){
		return view('produk');
	}

}