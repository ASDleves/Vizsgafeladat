<?php

namespace App\Http\Controllers;

use App\Models\Szavak;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SzavakController extends Controller
{
    public function index()
    {

        return Szavak::all();
    }
public function szavaktemakkal($request)
    {
        $temaid = $request->input('temaid');
        return request()->all();
    }

}
