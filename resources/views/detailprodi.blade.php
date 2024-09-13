@extends('layouts.main')

@section('container')
<main id="main" class="main">
    <div class="container py-5">
        <h1 class="display-4 text-center mb-4">Detail Program Studi: {{ $prodi['nama'] }}</h1>

        <nav>
            <div class="nav nav-tabs mb-4" id="nav-tab" role="tablist">
                <button class="nav-link active" id="nav-penelitian-tab" data-bs-toggle="tab" data-bs-target="#nav-penelitian" type="button" role="tab" aria-controls="nav-penelitian" aria-selected="true">Penelitian</button>
                <button class="nav-link" id="nav-pengabdian-tab" data-bs-toggle="tab" data-bs-target="#nav-pengabdian" type="button" role="tab" aria-controls="nav-pengabdian" aria-selected="false">Pengabdian</button>
                <button class="nav-link" id="nav-publikasi-tab" data-bs-toggle="tab" data-bs-target="#nav-publikasi" type="button" role="tab" aria-controls="nav-publikasi" aria-selected="false">Publikasi</button>
            </div>
        </nav>

        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-penelitian" role="tabpanel" aria-labelledby="nav-penelitian-tab">
                <h2 class="mb-3">Penelitian</h2>
                @if($penelitian)
                    @include('partials.table')
                @else
                    <p>Tidak ada data penelitian untuk prodi ini.</p>
                @endif
            </div>

            <div class="tab-pane fade" id="nav-pengabdian" role="tabpanel" aria-labelledby="nav-pengabdian-tab">
                <h2 class="mb-3">Pengabdian</h2>
                @if($pengabdian)
                    @include('partials.table')
                @else
                    <p>Tidak ada data pengabdian untuk prodi ini.</p>
                @endif
            </div>

            <div class="tab-pane fade" id="nav-publikasi" role="tabpanel" aria-labelledby="nav-publikasi-tab">
                <h2 class="mb-3">Publikasi</h2>
                @if($publikasi)
                @include('partials.table')
                @else
                    <p>Tidak ada data publikasi untuk prodi ini.</p>
                @endif
            </div>
        </div>
    </div>
</main>
@endsection
