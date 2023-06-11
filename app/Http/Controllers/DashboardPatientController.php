<?php

namespace App\Http\Controllers;

use App\Models\Hospital;
use App\Models\Patient;
use Illuminate\Http\Request;

class DashboardPatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.patient.index', [
            'title' => 'Pasien',
            'patients' => Patient::search(request('search'))->paginate(10),
            'hospitals' => Hospital::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.patient.create', [
            'title' => 'Tambah Data Pasien',
            'hospitals' => Hospital::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'alamat' => 'required|max:255',
            'telepon' => 'required|numeric|digits_between:10,13',
            'hospital_id' => 'required'
        ]);

        Patient::create($validatedData);

        return redirect('/dashboard/patient/create')->with('success', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function show(Patient $patient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function edit(Patient $patient)
    {
        return view('dashboard.patient.edit', [
            'title' => 'Ubah Data Pasien',
            'patient' => $patient,
            'hospitals' => Hospital::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Patient $patient)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'alamat' => 'required|max:255',
            'telepon' => 'required|numeric|digits_between:10,13',
            'hospital_id' => 'required'
        ]);

        Patient::where('id', $patient->id)->update($validatedData);

        return redirect("/dashboard/patient/$patient->id/edit")->with('success', 'Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Patient $patient)
    {
        Patient::destroy($patient->id);

        return redirect('/dashboard/patient')->with('success', 'Data berhasil dihapus!');
    }
}
