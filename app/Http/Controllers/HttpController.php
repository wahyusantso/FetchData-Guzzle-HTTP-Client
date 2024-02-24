<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class HttpController extends Controller
{

    //using citra cafe api
    public function index() {
        $client = new Client();
        $apiUrl = "http://192.168.106.235:8000/api/food";

        try {
            $response = $client->get($apiUrl);
            $food = json_decode($response->getBody(), true);
            dd($food);
        } catch (\Exception $e) {
            return $e;
        }
    }

    public function store(Request $request) {
        try {
            $ApiStore = "http://192.168.106.235:8000/api/food/store";
            $response = Http::post($ApiStore, [
                //key => value
                'nama_makanan' => 'Mie Pangsit',
                'keterangan' => 'Mie yang dicampuri bumbu rempah-rempah',
                'bahan_makanan' => 'Mie Instant',
                'harga' => 4000,
                'stok_makanan' => 10,
                'kategori' => 'Biasa',
            ]);
            $food = json_decode($response->getBody(), true);
            dd($food);
        } catch (\Exception $e) {
            return $e;
        }
    }
}
