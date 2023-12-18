<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mobil;

class MobilController extends Controller
{

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'tahun' => 'required|integer',
            'bbm' => 'required',
            'km' => 'required|integer',
            'transmisi' => 'required',
            'cc' => 'required|integer',
            'lokasi' => 'required',
            'penjual' => 'required',
            'telepon' => 'required',
            'harga' => 'required',
            'gambar' => 'required|file|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $image = $request->file('gambar');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move('uploads/', $imageName);

        $mobil = new Mobil;
        $mobil->nama = $request->nama;
        $mobil->tahun = $request->tahun;
        $mobil->bbm = $request->bbm;
        $mobil->km = $request->km;
        $mobil->transmisi = $request->transmisi;
        $mobil->cc = $request->cc;
        $mobil->lokasi = $request->lokasi;
        $mobil->penjual = $request->penjual;
        $mobil->telepon = $request->telepon;
        $mobil->harga = $request->harga;
        $mobil->gambar = $imageName;

        $mobil->save();

        return redirect('/form-mobil')->with('success', 'Data Mobil berhasil ditambahkan.');
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'tahun' => 'required|integer',
            'bbm' => 'required',
            'km' => 'required|integer',
            'transmisi' => 'required',
            'cc' => 'required|integer',
            'lokasi' => 'required',
            'penjual' => 'required',
            'telepon' => 'required',
            'harga' => 'required',
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
        $mobil->nama = $request->nama;
        $mobil->tahun = $request->tahun;
        $mobil->bbm = $request->bbm;
        $mobil->km = $request->km;
        $mobil->transmisi = $request->transmisi;
        $mobil->cc = $request->cc;
        $mobil->lokasi = $request->lokasi;
        $mobil->penjual = $request->penjual;
        $mobil->telepon = $request->telepon;
        $mobil->harga = $request->harga;
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
