<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index()
    {
        $data = [
            [
                "name" => "Kuwe",
                "image" => "ikanKuwe.jpg",
                "harga" => "Rp. 55.000/kg",
            ],
            [
                "name" => "Kakap Merah",
                "image" => "kakapMerah.jpg",
                "harga" => "Rp. 55.000/kg",
            ],
            [
                "name" => "Ekor Kuning",
                "image" => "ekorKuning.jpg",
                "harga" => "Rp. 35.000/kg",
            ],
            [
                "name" => "Bentong",
                "image" => "bentong.jpeg",
                "harga" => "Rp. 35.000/kg",
            ],
            [
                "name" => "Cumi L",
                "image" => "cumi.jpg",
                "harga" => "Rp. 45.000/ 1/2kg",
            ],
            [
                "name" => "Cumi M",
                "image" => "cumi.jpg",
                "harga" => "Rp. 34.000/ 1/2kg",
            ],
            [
                "name" => "Cumi Ring",
                "image" => "cumiRing.webp",
                "harga" => "Rp. 32.000/ 1/4kg",
            ],
            [
                "name" => "Cumi Asin",
                "image" => "cumiKering.png",
                "harga" => "Rp. 32.000/ 1/4kg",
            ],
            [
                "name" => "Kerapu",
                "image" => "kerapu.jfif",
                "harga" => "Rp. 20.000/ 1/2kg",
            ],
            [
                "name" => "Selar",
                "image" => "selar.webp",
                "harga" => "Rp. 32.000/kg",
            ],
            [
                "name" => "Sebelah",
                "image" => "sebelah.jfif",
                "harga" => "Rp. 50.000/kg",
            ],
            [
                "name" => "Kurisi",
                "image" => "kurisi.jpg",
                "harga" => "Rp. 50.000/kg",
            ],
            [
                "name" => "Teri Kering",
                "image" => "ikanTeri.webp",
                "harga" => "Rp. 30.000/ 1/4kg",
            ],
            [
                "name" => "Dendeng Ikan Asin",
                "image" => "dendengIkan.png",
                "harga" => "Rp. 20.000/ 1/4kg",
            ],
        ];
        return view("home", ['datas' => $data]);
    }
}
