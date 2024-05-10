<div class="card mt-4">
  <div class="card-body">
    <h5 class="card-title">{{ $titleTableRekap }}</h5>

    <!-- Table with stripped rows -->
    <table class="table datatable overflow" id="tabel-rekap">
      <thead>
        <tr>
          {{-- <th scope="col" rowspan="2" data-sortable="false">No</th> --}}
          <th scope="col" rowspan="2" data-sortable="false">Nama Dosen</th>
      </tr>          
      <tr>
          @for ($i = 1; $i <= 5; $i++)
              @if ($i == 1) 
                  <th scope="col" class="x" data-sortable="false">Jumlah Judul</th>
              @else
                  <th scope="col" data-sortable="false">Jumlah Judul</th>
              @endif
              <th scope="col" data-sortable="false">Total Dana</th>
          @endfor
      </tr>                
      </thead>
      <tbody>
        <tr>
          <td>Alamsyah</td>
          <td>10</td>
          <td>Rp100.000.000</td>
          <td>8</td>
          <td>Rp100.000.000</td>
          <td>5</td>
          <td>Rp25.000.000</td>
          <td>3</td>
          <td>Rp50.000.000</td>
          <td>2</td>
          <td>Rp10.000.000</td>
        </tr>
        <tr>
          <td>Faris-Al-Hakim</td>
          <td>10</td>
          <td>Rp100.000.000</td>
          <td>8</td>
          <td>Rp100.000.000</td>
          <td>5</td>
          <td>Rp25.000.000</td>
          <td>3</td>
          <td>Rp50.000.000</td>
          <td>2</td>
          <td>Rp10.000.000</td>
        </tr>
        <tr>
          <td>Anggyi Trisnawan Putra</td>
          <td>10</td>
          <td>Rp100.000.000</td>
          <td>8</td>
          <td>Rp100.000.000</td>
          <td>5</td>
          <td>Rp25.000.000</td>
          <td>3</td>
          <td>Rp50.000.000</td>
          <td>2</td>
          <td>Rp10.000.000</td>
        </tr>
      </tbody>
    </table>
    <!-- End Table with stripped rows -->

  </div>
</div>