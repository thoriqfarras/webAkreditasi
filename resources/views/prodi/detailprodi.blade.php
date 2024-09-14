@extends('layouts.main')

@container('container')
<main id="main" class="main">
    <div class="pagetitle d-flex justify-content-between align-items-center">
        <div>
            <h1>Detail Program Studi</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('prodi.daftarprodi') }}">Program Studi</a></li>
                    <li class="breadcrumb-item active">{{ $prodi->nama_prodi }}</li>
                </ol>
            </nav>
        </div>
        <a href="{{ route('prodi.daftarprodi') }}" class="btn btn-outline-primary">
            <i class="bi bi-arrow-left me-1"></i> Kembali ke Daftar
        </a>
    </div>

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $prodi->nama_prodi }}</h5>
                        
                        <nav>
                            <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="nav-penelitian-tab" data-bs-toggle="tab" data-bs-target="#nav-penelitian" type="button" role="tab" aria-controls="nav-penelitian" aria-selected="true">Penelitian</button>
                                <button class="nav-link" id="nav-pengabdian-tab" data-bs-toggle="tab" data-bs-target="#nav-pengabdian" type="button" role="tab" aria-controls="nav-pengabdian" aria-selected="false">Pengabdian</button>
                                <button class="nav-link" id="nav-publikasi-tab" data-bs-toggle="tab" data-bs-target="#nav-publikasi" type="button" role="tab" aria-controls="nav-publikasi" aria-selected="false">Publikasi</button>
                            </div>
                        </nav>

                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-penelitian" role="tabpanel" aria-labelledby="nav-penelitian-tab">
                                <h6>Penelitian</h6>
                                <!-- Isi dengan konten penelitian -->
                            </div>

                            <div class="tab-pane fade" id="nav-pengabdian" role="tabpanel" aria-labelledby="nav-pengabdian-tab">
                                <h6>Pengabdian</h6>
                                <!-- Isi dengan konten pengabdian -->
                            </div>

                            <div class="tab-pane fade" id="nav-publikasi" role="tabpanel" aria-labelledby="nav-publikasi-tab">
                                <h6>Publikasi</h6>
                                <!-- Isi dengan konten publikasi -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endcontainer
