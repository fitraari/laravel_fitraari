<?php

namespace App\Http\Controllers;

use App\Models\Hospital;
use Illuminate\Http\Request;

class HospitalController extends Controller
{
    public function index()
    {
        return view('home', [
            'title' => 'Hospital',
            'hospitals' => Hospital::paginate(10),
            'no' => 1
        ]);
    }
}
