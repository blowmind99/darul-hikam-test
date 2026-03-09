<?php

namespace App\Http\Controllers;

use App\Models\Sekolah;
use App\Models\Yayasan;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $yayasan = Yayasan::latest()->take(5)->get();
        $sekolah = Sekolah::with('yayasan')->latest()->take(5)->get();

        return view('dashboard', compact('yayasan', 'sekolah'));
    }

}
