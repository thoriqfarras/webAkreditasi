@extends('layouts.main')

@section('container')
<main id="main" class="main">
    <div class="container py-3">
        <h1 class="display-4 text-center mb-4">Daftar Program Studi</h1>
        
        <p class="lead text-center mb-5">
            Pilih program studi untuk melihat penelitian, pengabdian, dan publikasi terkait.
            <br>Temukan karya ilmiah dan kegiatan akademik sesuai bidang minat Anda.
        </p>

        @if(count($prodis) > 0)
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                @foreach($prodis as $prodi)
                    <div class="col">
                        <div class="card h-100 shadow-sm">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title fs-5 mb-3">{{ $prodi['nama'] }}</h5>
                                <a href="{{ route('detailprodi', ['id' => $prodi['id']]) }}" class="btn btn-primary mt-auto">Lihat Detail</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <p class="text-center fs-5">Tidak ada program studi yang tersedia.</p>
        @endif
    </div>
</main>
@endsection
