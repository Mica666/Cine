<?php

namespace App\Http\Controllers;

use App\Models\Combo;
use Illuminate\Http\Request;

class ComboController extends Controller
{
    public function index(){
        $combos = Combo::all();
        return view('Combo.index', compact('combos'));

}
}
