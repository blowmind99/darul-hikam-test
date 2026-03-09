<?php

namespace App\Http\Controllers;

use App\Models\Yayasan;
use Illuminate\Http\Request;

class YayasanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $yayasan = Yayasan::all();
        return view('yayasan.index', compact('yayasan'));
    }

    public function create()
    {
        return view('yayasan.create');
    }

    public function store(Request $request)
    {
        try {

            $request->validate([
                'nama'=>'required',
                'alamat'=>'required',
                'telepon'=>'required'
            ]);

            Yayasan::create($request->all());

            return redirect()->route('yayasan.index')
                ->with('success','Data yayasan berhasil ditambahkan');

        } catch (\Exception $e) {

            return redirect()->route('yayasan.index')
                ->with('error','Data yayasan gagal ditambahkan');

        }
    }


    public function update(Request $request, Yayasan $yayasan)
    {
        try {

                $request->validate([
                    'nama'=>'required',
                    'alamat'=>'required',
                    'telepon'=>'required'
                ]);

                $yayasan->update($request->all());


                return redirect()->route('yayasan.index')
                    ->with('success','Data yayasan berhasil di update');

            } catch (\Exception $e) {

                return redirect()->route('yayasan.index')
                    ->with('error','Data yayasan gagal ditambahkan');

            }
    }

    public function destroy(Yayasan $yayasan)
    {
        try {

            $yayasan->delete();

            return redirect()->route('yayasan.index')
                ->with('success','Data yayasan berhasil dihapus');

        } catch (\Exception $e) {

            return redirect()->route('yayasan.index')
                ->with('error','Data yayasan gagal dihapus');

        }

    }

}
