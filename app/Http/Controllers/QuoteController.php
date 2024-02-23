<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class QuoteController extends Controller
{
    public function getQuote() {
        // Create a new Guzzle client instance
        $client = new Client();
        //url
        $apiUrl = "https://quote-api.dicoding.dev/list";

        try {
            $response = $client->get($apiUrl);
            $data = json_decode($response->getBody(), true);
            return view('quote', ['quoteData' => $data]);
        } catch (\Exception $e) {
            return $e;
        }
    }
}

// $response = $client->get($apiUrl);
// Hasil dari permintaan HTTP GET disimpan dalam variabel $response.
// Ini adalah respons HTTP yang berisi status respons, header, dan body respons.

// $data = json_decode($response->getBody(), true);
// - Metode getBody() dari objek respons digunakan untuk mendapatkan body respons, yang kemudian diproses sebagai data JSON.
// - Fungsi json_decode() digunakan untuk mengurai JSON yang diterima menjadi array PHP (true sebagai argumen kedua mengembalikan array asosiatif, jika tidak diberikan, akan mengembalikan objek).
// - Data yang diuraikan kemudian disimpan dalam variabel $data

// Mengurai data JSON diperlukan karena data yang diterima dari permintaan HTTP biasanya dalam format JSON, terutama ketika berkomunikasi dengan API.
