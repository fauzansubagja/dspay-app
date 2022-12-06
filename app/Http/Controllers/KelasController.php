<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $kelas = Kelas::all();
        return view('admin.manajemen.kelas.index', compact('kelas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.manajemen.kelas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_kelas' => 'required',
        ]);

        $input = $request->all();
        Kelas::create($input);

        return redirect('/management/kelas')->with('success', 'Data Berhasil Di Tambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function show(Kelas $kelas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function edit(Kelas $kelas, $id)
    {
        return view('admin.manajemen.kelas.edit', [
            'kelas' => $kelas
        ]);
        // $kelas = Kelas::findOrFail($id);
        // return view('admin.manajemen.kelas.edit', compact('kelas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $kelas)
    {
        $request->validate([
            'nama_kelas' => 'required',
        ]);

        $input = $request->all();
        $kelas->update($input);

        return redirect('/management/kelas')->with('success', 'Data Berhasil Di Edit!');
        // Validasi
        // $validated = $request->validate([
        //     'nama_kelas' => 'required',
        // ]);

        // $kelas = Kelas::findOrFail($id);
        // $kelas->nama_kelas = $request->nama_kelas;
        // $kelas->save();
        // return redirect()->route('admin.manajemen.kelas.index')
        //     ->with('success', 'Data berhasil diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kelas  $kelas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kelas $kelas)
    {
        $kelas = Kelas::find($kelas->id_kelas);

        Kelas::where("id_kelas", $kelas->id_kelas)->delete();
        return redirect('/management/kelas')->with('delete', 'Data Berhasil Di Hapus!');
    }
}