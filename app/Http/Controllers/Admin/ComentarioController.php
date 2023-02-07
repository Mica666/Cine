<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comentario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ComentarioController extends Controller
{
 
    public function index()
    {
        $comentarios = Comentario::all();
        return view('admin.Comentario.index', compact('comentarios'));
    }


}
