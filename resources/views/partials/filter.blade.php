<!-- Default Card -->
<div class="card-filter">
    <div class="card-body">
      <h5 class="card-title">Filter Pencarian</h5>
      <div class="col">
        <div class="col mb-3">
          <div class="col">

            {{-- Form input tahun awal  --}}
            <div class="col">
              <label class="col-sm-8 col-form-label">Tahun Awal</label>
              <div class="col-sm-10">
                <select id="formTahunAwal" class="form-select" aria-label="Default select example">
                  <option selected value="">--</option> 
                  @foreach ($tahun as $index => $year)
                      <option value="{{ $year }}">{{ $year }}</option>
                  @endforeach
                </select>
              </div>
            </div>

            {{-- Form input tahun akhir --}}
            <div class="col">
              <label class="col-sm-8 col-form-label">Tahun Akhir</label>
              <div class="col-sm-10">
                <select id="formTahunAkhir" class="form-select" aria-label="Default select example">
                  <option selected value="">--</option> 
                  @foreach ($tahun as $index => $year)
                      <option value="{{ $year }}">{{ $year }}</option>
                  @endforeach
                </select>
              </div>
            </div>
          </div>
        </div>

        {{-- Form input prodi --}}
        <div class="col mb-3">
          <label class="col-sm-2 col-form-label">Prodi</label>
          <div class="col-sm-10">
            <select id="formProdi" class="form-select" aria-label="Default select example">
                <option selected value="">--</option> 
                @foreach ($prodi as $index => $major)
                    <option value="{{ $major }}">{{ $major }}</option>
                @endforeach
            </select>
          </div>
        </div>

        {{-- Form input dosen --}}
        <div class="col mb-3">
          <label class="col-sm-2 col-form-label">Dosen</label>
          <div class="col-sm-10">
            <select id="formDosen" class="form-select" aria-label="Default select example">
              <option selected value="">--</option> 
              @foreach ($dosen as $index => $lecturer)
                  <option value="{{ $lecturer }}">{{ $lecturer }}</option>
              @endforeach
            </select>
          </div>
        </div>

        <div>
          <button id="formButton" type="button" class="btn btn-primary mt-3">Cari</button>
        </div>
      </div>
    </div>
  </div><!-- End Default Card -->