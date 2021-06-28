<?php

namespace App\Http\Controllers;

use App\Biaya;
use Illuminate\Http\Request;

class BiayaController extends Controller
{
    public function index()
    {
        $biaya = Biaya::all();// select * from biaya
        return view('biaya.index', compact('biaya'));
    }

    public function create()
    {
        return 'halo ini method create';
    }
}
