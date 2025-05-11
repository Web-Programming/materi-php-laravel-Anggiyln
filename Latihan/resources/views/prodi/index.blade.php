@extends('layout.master')

@section('content')
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Prodi</title>
    </head>
    <body>
        <div class="app-content-header">
     <!--begin::App Content Header-->
    <div class="app-content-header">
      <!--begin::Container-->
      <div class="container-fluid">
        <!--begin::Row-->
        <div class="row">
          <div class="col-sm-6"><h3 class="mb-0">Program Studi</h3></div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-end">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
          </div>
        </div>
        <!--end::Row-->
      </div>
      <!--end::Container-->
    </div>
    <!--end::App Content Header-->
    <!--begin::App Content-->
   <div class="app-content">
      <!--begin::Container-->
      <div class="container-fluid">
        <!--begin::Row-->
        <div class="row">
          <!--begin::Col-->
          <div class="col-lg-4 col-6">
            <!--begin::Small Box Widget 1-->
            <div class="small-box text-bg-primary">
              <div class="inner">
                <h3>Sistem Informasi</h3>
                <P>ID: 1401</P>
                <P>UKT: RP.8.000.000</P>
              </div>
              <svg
                class="small-box-icon"
                fill="currentColor"
                viewBox="0 5 24 24"
                xmlns="http://www.w3.org/2000/svg"
                aria-hidden="true"
              >
                <path
                  d="M4 4h16v2H4V4zm0 4h10v2H4V8zm0 4h16v2H4v-2zm0 4h10v2H4v-2z"
                ></path>
              </svg>
              <a
                href="#"
                class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover"
              >

              </a>
            </div>
            <!--end::Small Box Widget 1-->
          </div>
          <!--end::Col-->
          <div class="col-lg-4 col-6">
            <!--begin::Small Box Widget 2-->
            <div class="small-box text-bg-success">
              <div class="inner">
                <h3>Informatika</h3>
                <P>ID: 1402</P>
                <P>UKT: RP.8.000.000</P>
              </div>
              <svg
                class="small-box-icon"
                fill="#ADD8E6"
                viewBox="0 5 24 24"
                xmlns="http://www.w3.org/2000/svg"
                aria-hidden="true"
              >
                <path
                  d="M10 16l-4-4 4-4v8zm4-8l4 4-4 4V8z"
                ></path>
              </svg>
              <a
                href="#"
                class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover"
              >
              </a>
            </div>
            <!--end::Small Box Widget 2-->
          </div>
          <!--end::Col-->
          <div class="col-lg-4 col-6">
            <!--begin::Small Box Widget 3-->
            <div class="small-box text-bg-dark">
              <div class="inner">
                <h3>Manajemen</h3>
                <P>ID: 1301</P>
                <P>UKT: RP.8.000.000</P>
              </div>
              <svg
                class="small-box-icon"
                fill="rgb(255, 190, 200)"
                viewBox="0 5 24 24"
                xmlns="http://www.w3.org/2000/svg"
                aria-hidden="true"
              >
                <path
                  d="M3 17h2v-7H3v7zm4 0h2V7H7v10zm4 0h2v-4h-2v4zm4 0h2V9h-2v8zm4 0h2v-2h-2v2z"
                ></path>
              </svg>
              <a
                href="#"
                class="small-box-footer link-dark link-underline-opacity-0 link-underline-opacity-50-hover"
              >
              </a>
            </div>
            <!--end::Small Box Widget 3-->
          </div>
          <!--end::Col-->
          <div class="col-lg-4 col-6">
            <!--begin::Small Box Widget 4-->
            <div class="small-box text-bg-danger">
              <div class="inner">
                <h3>Akuntansi</h3>
                <P>ID: 1302</P>
                <P>UKT: RP.8.000.000</P>
              </div>
              <svg
                class="small-box-icon"
                fill="#E6E6FA"
                viewBox="0 5 24 24"
                xmlns="http://www.w3.org/2000/svg"
                aria-hidden="true"
              >
                <path
                  clip-rule="evenodd"
                  fill-rule="evenodd"
                  d="M4 4h16v16H4V4zm2 2v12h12V6H6zm2 2h2v2H8V8zm0 4h2v2H8v-2zm4-4h4v2h-4V8zm0 4h4v2h-4v-2z"
                ></path>
              </svg>
              <a
                href="#"
                class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover"
              >
              </a>
            </div>
            <!--end::Small Box Widget 4-->
          </div>
          <!--end::Col-->
          <div class="col-lg-4 col-6">
            <!--begin::Small Box Widget 3-->
            <div class="small-box text-bg-secondary">
              <div class="inner">
                <h3>Teknik Elektro</h3>
                <P>ID: 1403</P>
                <P>UKT: RP.5.000.000</P>
              </div>
              <svg
                class="small-box-icon"
                fill="orange"
                viewBox="0 5 24 24"
                xmlns="http://www.w3.org/2000/svg"
                aria-hidden="true"
              >
                <path
                  d="M13 2L3 14h7v8l10-12h-7z"
                ></path>
              </svg>
              <a
                href="#"
                class="small-box-footer link-dark link-underline-opacity-0 link-underline-opacity-50-hover"
              >
              </a>
            </div>
            <!--end::Small Box Widget 3-->
          </div>
          <!--end::Col-->
        </div>
        <!--end::Row-->
        <!--TOMBOL-->
       
        <!-- Ganti bagian tombol dan tambahkan tombol aksi -->
<div class="row mt-4">
    @foreach(['1401', '1402', '1301', '1302', '1403'] as $id)
    <div class="col-lg-4 col-6 mb-4">
        <div class="small-box text-bg-{{
            $id == '1401' ? 'primary' :
            ($id == '1402' ? 'success' :
            ($id == '1301' ? 'dark' :
            ($id == '1302' ? 'danger' : 'secondary')))
        }}">
            <div class="inner">
                <h3>{{
                    $id == '1401' ? 'Sistem Informasi' :
                    ($id == '1402' ? 'Informatika' :
                    ($id == '1301' ? 'Manajemen' :
                    ($id == '1302' ? 'Akuntansi' : 'Teknik Elektro')))
                }}</h3>
                <P>ID: {{ $id }}</P>
                <P>UKT: {{ $id == '1403' ? 'RP.5.000.000' : 'RP.8.000.000' }}</P>
            </div>
            <div class="icon">
                <i class="fas fa-{{
                    $id == '1401' ? 'laptop-code' :
                    ($id == '1402' ? 'microchip' :
                    ($id == '1301' ? 'chart-line' :
                    ($id == '1302' ? 'calculator' : 'bolt')))
                }}"></i>
            </div>
            <div class="p-3">
                <a href="{{ route('prodi.show', $id) }}" class="btn btn-sm btn-info">
                    <i class="fas fa-eye"></i> Detail
                </a>
                <a href="{{ route('prodi.delete', $id) }}" class="btn btn-sm btn-danger">
                    <i class="fas fa-trash"></i> Hapus
                </a>
            </div>
        </div>
    </div>
    @endforeach
</div>

<!-- Tombol Daftar -->
<div class="mt-3">
    <a href="{{ route('prodi.create') }}" class="btn btn-primary">
        <i class="fas fa-plus"></i> DAFTAR
    </a>
</div>
     </div>
    </body>
    </html>
@endsection
