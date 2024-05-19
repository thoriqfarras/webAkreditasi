<!-- Default Card -->
<div class="card-filter">
    <div class="card-body">
      <h5 class="card-title">Filter Pencarian</h5>
      <div class="col">
        <div class="col mb-3">
          <div class="col">
            <div class="col">
              <label class="col-sm-8 col-form-label">Tahun Awal</label>
              <div class="col-sm-10">
                <select class="form-select" aria-label="Default select example">
                  <option selected value="">--</option> <!-- Default option -->
                  @foreach ($tahun as $index => $year)
                      <option value="{{ $index }}">{{ $year }}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="col">
              <label class="col-sm-8 col-form-label">Tahun Akhir</label>
              <div class="col-sm-10">
                <select class="form-select" aria-label="Default select example">
                  <option selected value="">--</option> <!-- Default option -->
                  @foreach ($tahun as $index => $year)
                      <option value="{{ $index }}">{{ $year }}</option>
                  @endforeach
                </select>
              </div>
            </div>
          </div>
        </div>
        <div class="col mb-3">
          <label class="col-sm-2 col-form-label">Prodi</label>
          <div class="col-sm-10">
            <select class="form-select" aria-label="Default select example">
                <option selected value="">--</option> <!-- Default option -->
                @foreach ($prodi as $index => $major)
                    <option value="{{ $index }}">{{ $major }}</option>
                @endforeach
            </select>
          </div>
        </div>
        <div class="col mb-3">
          <label class="col-sm-2 col-form-label">Dosen</label>
          <div class="col-sm-10">
            <select class="form-select" aria-label="Default select example">
              <option selected value="">--</option> <!-- Default option -->
              @foreach ($dosen as $index => $lecturer)
                  <option value="{{ $index }}">{{ $lecturer }}</option>
              @endforeach
            </select>
          </div>
        </div>
      </div>
    </div>
  </div><!-- End Default Card -->