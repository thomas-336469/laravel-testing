<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persoon;

class PersoonController extends Controller
{
    public function index()
    {
        $persoons = Persoon::all();

        return view('persoon.index', ['persoons' => $persoons]);
    }
}
