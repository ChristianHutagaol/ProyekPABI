<?php

namespace App\Http\Controllers;

use App\Models\Ulasan;
use Faker\Factory as Faker;
use Illuminate\Http\Request;

class UlasanController extends Controller
{
    public function ulasan($id)
    {
        $hasil = Ulasan::find($id);
        $ulasan = Ulasan::all();
        return view('ulasan', ['hasil' => $hasil, 'ulasan' => $ulasan, 'id' => $id]);
    }
    public function insertData(Request $req, $id)
    {
        $faker = Faker::create();
        $hasil = Ulasan::find($id);
        $user = new Ulasan();
        $user->nama = $req->nama;
        $user->ulasan = $req->ulasan;
        $user->id_konten = $id;
        $user->profile_photo = $faker->imageUrl($width = 50, $height = 50);
        $user->save();
        return redirect()->route('ulasan', ['id' => $id]);
    }
}
