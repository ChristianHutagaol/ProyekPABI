<?php

namespace App\Http\Controllers;

use App\Models\Bali;
use Illuminate\Http\Request;

class BaliController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has("search")) {
            $data = Bali::where('nama', 'LIKE', '%' . $request->search . '%')->paginate(5);
        } else {
            $data = Bali::paginate(5);
        }

        return view('datawisata', compact('data'));
    }

    public function tambahwisata()
    {
        return view('tambahdata');

    }

    public function insertdata(Request $request)
    {

        $data = Bali::create($request->all());
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('fotowisata/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('wisata');
    }
}