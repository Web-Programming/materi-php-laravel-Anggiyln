<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FakultasController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     protected $fakultas = [
        [
            'id' => 1,
            'nama' => 'Fakultas Ilmu Komputer & Rekayasa',
            'gambar' => '.jpg',
            'deskripsi' => 'Fakultas ini berfokus pada teknologi komputer, sistem informasi, dan inovasi digital.'
        ],
        [
            'id' => 2,
            'nama' => 'Fakultas Ekonomi & Bisnis',
            'gambar' => 'mdpkampus.jpg',
            'deskripsi' => 'Fakultas ini berfokus pada pengembangan kewirausahaan dan pemahaman ekonomi global.'
        ],
    ];


    public function index()
{
    $fakultas = [
        [
            'id' => 1,
            'nama' => 'Fakultas Ilmu Komputer & Rekayasa',
            'gambar' => 'blabla.jpg',
            'deskripsi' => 'Fakultas ini berfokus pada teknologi komputer, sistem informasi, dan inovasi digital.'
        ],
        [
            'id' => 2,
            'nama' => 'Fakultas Ekonomi & Bisnis',
            'gambar' => 'yayaya.jpg',  // Menambahkan gambar
            'deskripsi' => 'Fakultas ini berfokus pada pengembangan kewirausahaan dan pemahaman ekonomi global.'
        ]
    ];

    return view('fakultas.index', compact('fakultas'));
}

    /**
     * Show the form for creating a new resource.
     */

     public function createForm()
     {
         return view('fakultas.create');
     }

    public function create(Request $request)
    {
        $newFakultas = [
            'id' => count($this->fakultas) + 1,
            'nama' => $request->input('nama')
        ];

        array_push($this->fakultas, $newFakultas);

        return redirect()->route('fakultas.index');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function detail($id)
    {
        $fakultas = null;
        foreach ($this->fakultas as $fakultasItem) {
            if ($fakultasItem['id'] == $id) {
                $fakultas = $fakultasItem;
                break;
            }
        }

        if (!$fakultas) {
            return redirect()->route('fakultas.index')->with('error', 'Fakultas tidak ditemukan');
        }

        return view('fakultas.detail', ['fakultas' => $fakultas]);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
        // Cari data berdasarkan ID dan hapus dari array
        foreach ($this->fakultas as $key => $fakultas) {
            if ($fakultas['id'] == $id) {
                unset($this->fakultas[$key]);
                break;
            }
        }

        // Redirect ke halaman fakultas dengan pesan sukses
        return redirect()->route('fakultas.index')->with('success', 'Fakultas berhasil dihapus');
    }
}
