<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
  protected $mahasiswa = [
        [
            'id' => 1,
            'nama' => 'Mahasiswa Fakultas Ilmu Komputer & Rekayasa',
            'gambar' => 'mahasiswa4.jpeg',
            'deskripsi' => 'Mereka memiliki latar belakang pendidikan magister dan doktor di bidang Informatika, Sistem Informasi, Teknik Elektro, dan bidang terkait lainnya. Selain aktif dalam kegiatan akademik, dosen FIKR juga rutin melakukan riset, publikasi ilmiah, serta terlibat dalam pengembangan sistem teknologi baik di dalam maupun luar kampus.'
        ],
        [
            'id' => 2,
            'nama' => 'Mahasiswa Fakultas Ekonomi & Bisnis',
            'gambar' => 'mahasiswa5.jpg',
            'deskripsi' => 'Mereka tidak hanya mengajar, tetapi juga aktif memberikan pelatihan, seminar kewirausahaan, serta menjadi konsultan bisnis di berbagai lembaga dan UMKM.'
        ],
    ];


    public function index()
{
    $mahasiswa = [
        [
            'id' => 1,
            'nama' => 'Mahasiswa Fakultas Ilmu Komputer & Rekayasa',
            'gambar' => 'mahasiswa2.jpg',
            'deskripsi' => 'Mahasiswa Fakultas Ilmu Komputer & Rekayasa di Universitas Multi Data Palembang merupakan tenaga pengajar yang berkompeten di bidang teknologi informasi, rekayasa, dan komputer.'
        ],
        [
            'id' => 2,
            'nama' => 'Mahasiswa Fakultas Ekonomi & Bisnis',
            'gambar' => 'mahasiswa3.jpg',  // Menambahkan gambar
            'deskripsi' => 'Mahasiswa Fakultas Ekonomi & Bisnis di Universitas Multi Data Palembang adalah akademisi dan praktisi ekonomi serta bisnis yang memiliki pengalaman dalam bidang manajemen, akuntansi, perpajakan, hingga bisnis digital.'
        ]
    ];

    return view('mhs.index', compact('mahasiswa'));
}

    /**
     * Show the form for creating a new resource.
     */

     public function createForm()
     {
         return view('mhs.create');
     }

    public function create(Request $request)
    {
        $newmahasiswa = [
            'id' => count($this->mahasiswa) + 1,
            'nama' => $request->input('nama')
        ];

        array_push($this->mahasiswa, $newmahasiswa);

        return redirect()->route('mhs.index');
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
        $mahasiswa = null;
        foreach ($this->mahasiswa as $mahasiswaItem) {
            if ($mahasiswaItem['id'] == $id) {
                $mahasiswa = $mahasiswaItem;
                break;
            }
        }

        if (!$mahasiswa) {
            return redirect()->route('mhs.index')->with('error', 'Mahasiswa tidak ditemukan');
        }

        return view('mhs.detail', ['mahasiswa' => $mahasiswa]);
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
        foreach ($this->mahasiswa as $key => $mahasiswa) {
            if ($mahasiswa['id'] == $id) {
                unset($this->mahasiswa[$key]);
                break;
            }
        }

        // Redirect ke halaman fakultas dengan pesan sukses
        return redirect()->route('mhs.index')->with('success', 'Mahasiswa berhasil dihapus');
    }
}
