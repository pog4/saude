<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Saude;

class SaudeController extends Controller
{
    public function index() {
        return view('saude');
    }

    public function imc() {
        $saude = new Saude();
        $resultadoimc = $saude->imc();
        return view('imc',compact('resultadoimc'));
    }
}
