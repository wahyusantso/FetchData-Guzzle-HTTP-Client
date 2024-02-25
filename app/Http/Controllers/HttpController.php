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
        $apiUrl = "xxxxxxx:8000/api/food";

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
            $ApiStore = "xxxxxxxx:8000/api/food/store";
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

    public function update(Request $request)
    {
        $client = new Client();
        $apiUpdate = "xxxxxxx:8000/api/food/update/21";
        try {
            $response = $client->request('POST', $apiUpdate, [
                'json' => [
                    //key => value
                    'nama_makanan' => 'Mie Pangsit Kuningan Indah',
                    'keterangan' => 'Mie yang dicampuri bumbu rempah-rempah',
                    'bahan_makanan' => 'Mie Instant',
                    'harga' => 20000,
                    'stok_makanan' => 10,
                    'kategori' => 'Biasa'
                ]
            ]);
            $food = json_decode($response->getBody(), true);
            dd($food);
        } catch (\Exception $e) {
            return $e;
        }
    }

    public function delete()
    {
        $client = new Client();
        $apiUpdate = "xxxxxx:8000/api/food/delete/21";
        try {
            $response = $client->request('POST', $apiUpdate);
            $food = json_decode($response->getBody(), true);
            dd($food);
        } catch (\Exception $e) {
            return $e;
        }
    }
}
//untuk jenis method post atau put tergantung support api yang disediakan.
