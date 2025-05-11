@extends('layout.master')

@section('content')
<div class="app-content-header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h3 class="mb-0">Detail Program Studi</h3>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-end">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Detail Prodi</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="small-box bg-info">
            <div class="inner">
                <h3>{{ $prodi['name'] }}</h3>
                <p>ID: {{ $prodi['id'] }}</p>
                <p>UKT: {{ $prodi['ukt'] }}</p>
            </div>
            <div class="icon">
                <i class="fas fa-{{
                    $prodi['id'] == '1401' ? 'laptop-code' :
                    ($prodi['id'] == '1402' ? 'microchip' :
                    ($prodi['id'] == '1301' ? 'chart-line' :
                    ($prodi['id'] == '1302' ? 'calculator' : 'bolt')))
                }}"></i>
            </div>
        </div>
    </div>

<div class="app-content">
    <div class="container-fluid">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Informasi Program Studi</h3>
                <div class="card-tools">
                    <a href="{{ route('prodi.index') }}" class="btn btn-sm btn-secondary">
                        <i class="fas fa-arrow-left"></i> Kembali
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>Sistem Informasi</h3>
                                <p>ID: 1401</p>
                                <p>UKT: RP.8.000.000</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-laptop-code"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="info-box bg-gradient-success">
                            <span class="info-box-icon"><i class="fas fa-info-circle"></i></span>
                            <div class="info-box-content">
                                <span class="info-box-text">Status</span>
                                <span class="info-box-number">Aktif</span>
                                <div class="progress">
                                    <div class="progress-bar" style="width: 100%"></div>
                                </div>
                                <span class="progress-description">
                                    Terdaftar sejak 2020
                                </span>
                            </div>
                        </div>
                        <div class="mt-3">
                            <a href="#" class="btn btn-warning">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                            <a href="{{ route('prodi.delete') }}" class="btn btn-danger ml-2">
                                <i class="fas fa-trash"></i> Hapus
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
