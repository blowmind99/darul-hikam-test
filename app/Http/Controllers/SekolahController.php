<?php

namespace App\Http\Controllers;

use App\Models\Sekolah;
use App\Models\Yayasan;
use Exception;
use Illuminate\Http\Request;

class SekolahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $yayasan = Yayasan::all();
        $sekolah = Sekolah::with('yayasan')->get();
        return view('sekolah.index', compact('sekolah', 'yayasan'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'yayasan_id' => 'required'
        ]);

        try {

            Sekolah::create([
                'nama' => $request->nama,
                'yayasan_id' => $request->yayasan_id,
                'alamat' => $request->alamat,
                'telepon' => $request->telepon,
                'kepala_sekolah' => $request->kepala_sekolah
            ]);

            return redirect()->back()
                ->with('success','Sekolah berhasil ditambahkan');

        } catch (Exception $e) {

            return redirect()->back()
                ->with('error','Sekolah gagal ditambahkan');
        }

    }


    public function update(Request $request, Sekolah $sekolah)
    {
        $request->validate([
            'nama' => 'required',
            'yayasan_id' => 'required'
        ]);

        try {

            $sekolah->update([
                'nama' => $request->nama,
                'yayasan_id' => $request->yayasan_id,
                'alamat' => $request->alamat,
                'telepon' => $request->telepon,
                'kepala_sekolah' => $request->kepala_sekolah
            ]);

            return redirect()->back()
                ->with('success','Sekolah berhasil diupdate');

        } catch (Exception $e) {

            return redirect()->back()
                ->with('error','Sekolah gagal diupdate');
        }
    }

    public function destroy(Sekolah $sekolah)
    {
        try {

        $sekolah->delete();

        return redirect()->back()
            ->with('success','Sekolah berhasil dihapus');

        } catch (Exception $e) {

            return redirect()->back()
                ->with('error','Sekolah gagal dihapus');
        }
    }

}
