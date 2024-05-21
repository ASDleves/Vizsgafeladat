<?php

namespace App\Http\Controllers;

use App\Models\Tema;
use Illuminate\Http\Request;

class TemakController extends Controller
{
    public function index()
    {

        return Tema::all();
    }
}
