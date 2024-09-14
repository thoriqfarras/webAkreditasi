<!-- Default Card -->
<div class="card shadow-sm border-0 mb-4">
    <div class="card-body">
        <h5 class="card-title text-primary mb-3"><i class="bi bi-funnel-fill me-2"></i>Filter Pencarian</h5>
        <form>
            <div class="row g-3">
                <div class="col-md-6 col-lg-3">
                    <label for="tahunAwal" class="form-label">Tahun Awal</label>
                    <select id="tahunAwal" class="form-select" aria-label="Pilih Tahun Awal">
                        <option selected>--Pilih Tahun--</option>
                        <option value="2024">2024</option>
                        <option value="2025">2025</option>
                        <option value="2026">2026</option>
                        <option value="2027">2027</option>
                        <option value="2028">2028</option>
                        <option value="2029">2029</option>
                        <option value="2030">2030</option>
                        
                        {{-- @foreach($years as $year)
                            <option value="{{ $year }}">{{ $year }}</option>
                        @endforeach --}}
                    </select>
                </div>
                <div class="col-md-6 col-lg-3">
                    <label for="tahunAkhir" class="form-label">Tahun Akhir</label>
                    <select id="tahunAkhir" class="form-select" aria-label="Pilih Tahun Akhir">
                        <option selected>--Pilih Tahun--</option>
                        <option value="2024">2024</option>
                        <option value="2025">2025</option>
                        <option value="2026">2026</option>
                        <option value="2027">2027</option>
                        <option value="2028">2028</option>
                        <option value="2029">2029</option>
                        <option value="2030">2030</option>
                        
                        {{-- @foreach($years as $year)
                            <option value="{{ $year }}">{{ $year }}</option>
                        @endforeach --}}
                    </select>
                </div>
                <div class="col-md-6 col-lg-3">
                    <label for="prodi" class="form-label">Program Studi</label>
                    <select id="prodi" class="form-select" aria-label="Pilih Program Studi">
                        <option selected>--Pilih Prodi--</option>
                        
                    </select>
                </div>
                <div class="col-md-6 col-lg-3">
                    <label for="sumberDana" class="form-label">Sumber Dana</label>
                    <select id="sumberDana" class="form-select" aria-label="Pilih Sumber Dana">
                        <option selected>--Pilih Sumber Dana--</option>
                        <option value="1">Internal</option>
                        <option value="2">Eksternal</option>
                        <option value="3">Hibah</option>
                    </select>
                </div>
            </div>
            <div class="d-flex justify-content-end mt-4">
                <button type="submit" class="btn btn-primary"><i class="bi bi-search me-2"></i>Cari</button>
            </div>
        </form>
    </div>
</div><!-- End Default Card -->