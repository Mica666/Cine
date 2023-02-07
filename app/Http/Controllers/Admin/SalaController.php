<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sala;


class SalaController extends Controller
{
   
    public function index()
    {
        $salas = Sala::all();
        return view('admin.Sala.index', compact('salas'));
    }


}
