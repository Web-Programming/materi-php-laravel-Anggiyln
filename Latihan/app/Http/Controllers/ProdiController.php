<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     */


    public function index()
    {
        return view('prodi.index');

    }

    public function create()
    {
         return view ("prodi.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
         // Data hardcoded sesuai dengan index
         $prodiData = [
            '1401' => ['name' => 'Sistem Informasi', 'ukt' => 'RP.8.000.000'],
            '1402' => ['name' => 'Informatika', 'ukt' => 'RP.8.000.000'],
            '1301' => ['name' => 'Manajemen', 'ukt' => 'RP.8.000.000'],
            '1302' => ['name' => 'Akuntansi', 'ukt' => 'RP.8.000.000'],
            '1403' => ['name' => 'Teknik Elektro', 'ukt' => 'RP.5.000.000'],
        ];

        $prodi = [
            'id' => $id,
            'name' => $prodiData[$id]['name'] ?? 'Tidak Ditemukan',
            'ukt' => $prodiData[$id]['ukt'] ?? '-'
        ];

        return view('prodi.detail', compact('prodi'));
    }

    // Menampilkan form delete
    public function delete($id)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
         // Ini hanya simulasi, tidak benar-benar menghapus data
         return redirect()->route('prodi.index')
         ->with('success', 'Program studi berhasil dihapus (simulasi)');
    }
}
