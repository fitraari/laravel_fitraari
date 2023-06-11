<?php

namespace App\Http\Controllers;

use App\Models\Hospital;
use Illuminate\Http\Request;

class DashboardHospitalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.hospital.index', [
            'title' => 'Rumah Sakit',
            'hospitals' => Hospital::search(request('search'))->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.hospital.create', [
            'title' => 'Tambah Data Rumah Sakit'
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
            'email' => 'required|email:dns|max:255',
            'telepon' => 'required|numeric|digits_between:10,13'
        ]);

        Hospital::create($validatedData);

        return redirect('/dashboard/hospital/create')->with('success', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hospital  $hospital
     * @return \Illuminate\Http\Response
     */
    public function show(Hospital $hospital)
    {
        return view('dashboard.hospital.show', [
            'title' => $hospital->nama,
            'patients' => $hospital->patients,
            'hospitals' => Hospital::all()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hospital  $hospital
     * @return \Illuminate\Http\Response
     */
    public function edit(Hospital $hospital)
    {
        return view('dashboard.hospital.edit', [
            'title' => 'Ubah Data Rumah Sakit',
            'hospital' => $hospital
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hospital  $hospital
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hospital $hospital)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'alamat' => 'required|max:255',
            'email' => 'required|email:dns|max:255',
            'telepon' => 'required|numeric|digits_between:10,13'
        ]);

        Hospital::where('id', $hospital->id)->update($validatedData);

        return redirect("/dashboard/hospital/$hospital->id/edit")->with('success', 'Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hospital  $hospital
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hospital $hospital)
    {
        Hospital::destroy($hospital->id);

        return redirect('/dashboard/hospital')->with('success', 'Data berhasil dihapus!');
    }
}
