<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mobil;

class MobilController extends Controller
{
    public function cars()
    {
        $cars = Mobil::all();

        return view('pages.cars', compact('cars'));
    }

    public function cardetails($id)
    {
        $car = Mobil::findOrFail($id);
        return view('pages.car-details', compact('car'));
    }

    public function home()
    {
        $mobilList = Mobil::latest()->take(3)->get();
        return view('pages.home', compact('mobilList'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'type' => 'required',
            'nama' => 'required',
            'warna' => 'required',
            'tahun' => 'required|integer',
            'kursi' => 'required|integer',
            'pintu' => 'required|integer',
            'bbm' => 'required',
            'km' => 'required|integer',
            'transmisi' => 'required',
            'cc' => 'required|integer',
            'power' => 'required',
            'lokasi' => 'required',
            'penjual' => 'required',
            'telepon' => 'required',
            'harga' => 'required',
            'description' => 'required',
            'gambar' => 'required|file|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $image = $request->file('gambar');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move('uploads/', $imageName);

        $mobil = new Mobil;
        $mobil->type = $request->type;
        $mobil->nama = $request->nama;
        $mobil->warna = $request->warna;
        $mobil->tahun = $request->tahun;
        $mobil->kursi = $request->kursi;
        $mobil->pintu = $request->pintu;
        $mobil->bbm = $request->bbm;
        $mobil->km = $request->km;
        $mobil->transmisi = $request->transmisi;
        $mobil->cc = $request->cc;
        $mobil->power = $request->power;
        $mobil->lokasi = $request->lokasi;
        $mobil->penjual = $request->penjual;
        $mobil->telepon = $request->telepon;
        $mobil->harga = $request->harga;
        $mobil->description = $request->description;
        $mobil->gambar = $imageName;

        $mobil->save();

        return redirect('/form-mobil')->with('success', 'Data Mobil berhasil ditambahkan.');
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'type' => 'required',
            'nama' => 'required',
            'warna' => 'required',
            'tahun' => 'required|integer',
            'kursi' => 'required|integer',
            'pintu' => 'required|integer',
            'bbm' => 'required',
            'km' => 'required|integer',
            'transmisi' => 'required',
            'cc' => 'required|integer',
            'power' => 'required',
            'lokasi' => 'required',
            'penjual' => 'required',
            'telepon' => 'required',
            'harga' => 'required',
            'description' => 'required',
            'gambar' => 'required|file|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $mobil = Mobil::findOrFail($id);

        if ($request->hasFile('gambar')) {
            // Check if the old file exists before deleting it
            if (file_exists(public_path('uploads/' . $mobil->gambar))) {
                unlink(public_path('uploads/' . $mobil->gambar));
            }

            $image = $request->file('gambar');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move('uploads/', $imageName);

            $mobil->gambar = $imageName;
        }

        // Update other fields
        $mobil->type = $request->type;
        $mobil->nama = $request->nama;
        $mobil->warna = $request->warna;
        $mobil->tahun = $request->tahun;
        $mobil->kursi = $request->kursi;
        $mobil->pintu = $request->pintu;
        $mobil->bbm = $request->bbm;
        $mobil->km = $request->km;
        $mobil->transmisi = $request->transmisi;
        $mobil->cc = $request->cc;
        $mobil->power = $request->power;
        $mobil->lokasi = $request->lokasi;
        $mobil->penjual = $request->penjual;
        $mobil->telepon = $request->telepon;
        $mobil->harga = $request->harga;
        $mobil->description = $request->description;
        $mobil->gambar = $imageName;
        $mobil->save();

        return redirect('/form-mobil')->with('success', 'Data Mobil berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $mobil = Mobil::findOrFail($id);
        $mobil->delete();

        return redirect('/form-mobil')->with('success', 'Data Mobil berhasil dihapus.');
    }
}
