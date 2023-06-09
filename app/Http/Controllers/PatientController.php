<?php

namespace App\Http\Controllers;

use App\Models\Hospital;
use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index()
    {
        return view('patient', [
            'title' => 'Patient',
            'patients' => Patient::paginate(10),
            'hospitals' => Hospital::all(),
            'no' => 1
        ]);
    }
}
