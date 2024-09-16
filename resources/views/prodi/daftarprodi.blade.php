@extends('layouts.main')

@container('container')
<main id="main" class="main">
    <div class="container py-5">
        <h1 class="display-4 text-center mb-4">Daftar Program Studi</h1>
        
        <p class="lead text-center mb-5">
            Pilih program studi untuk melihat penelitian, pengabdian, dan publikasi terkait.
            <br>Temukan karya ilmiah dan kegiatan akademik sesuai bidang minat Anda.
        </p>

        <!-- Search Bar -->
        <div class="mb-4 d-flex justify-content-center">
            <div class="input-group w-50">
              <!-- Input Search dengan Ikon Pencarian di Kiri -->
              <span class="input-group-text bg-light border-end-0">
                <i class="bi bi-search"></i>
              </span>
              <input id="prodiSearch" class="form-control border-start-0" placeholder="Cari Program Studi..." type="search" name="search">
              <!-- Tombol Cari -->
              <button class="btn btn-primary" type="button" id="searchButton">Cari</button>
            </div>
          </div>
          

        @if(count($prodis) > 0)
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4" id="prodiList">
                @foreach($prodis as $prodi)
                    <div class="col prodi-item">
                        <div class="card h-100 shadow-sm hover-card">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title fs-5 mb-3">{{ $prodi['Prodi'] }}</h5>
                                <a href="{{ route('prodi.detailprodi', ['kode_prodi' => $prodi['kode_prodi']]) }}" class="btn btn-outline-primary mt-auto">Lihat Detail</a>
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

<script>
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('prodiSearch');
    const searchButton = document.getElementById('searchButton');
    const prodiItems = document.querySelectorAll('.prodi-item');

    function performSearch() {
        const searchTerm = searchInput.value.toLowerCase().trim();
        
        prodiItems.forEach(item => {
            const prodiName = item.querySelector('.card-title').textContent.toLowerCase();
            
            if (searchTerm.length >= 2 && prodiName.includes(searchTerm)) {
                item.style.display = '';
            } else if (searchTerm.length < 2) {
                item.style.display = '';
            } else {
                item.style.display = 'none';
            }
        });
    }

    if (searchInput && searchButton) {
        searchButton.addEventListener('click', performSearch);
        searchInput.addEventListener('keyup', function(event) {
            if (event.key === 'Enter') {
                event.preventDefault();
                performSearch();
            }
        });
        searchInput.addEventListener('input', performSearch);
    }
});
</script>
@endcontainer
