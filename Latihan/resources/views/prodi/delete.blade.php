@extends('layout.master')

@section('title', 'Hapus Prodi')

@section('content')
<div class="card">
    <div class="card-header bg-danger">
        <h3 class="card-title">Konfirmasi Hapus</h3>
    </div>
    <div class="card-body">
        <p>Apakah Anda yakin ingin menghapus data prodi <strong>Teknik Informatika</strong>?</p>
        <form action="{{ url('/prodi/1') }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Ya, Hapus</button>
            <a href="{{ url('/prodi') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>
@endsection
