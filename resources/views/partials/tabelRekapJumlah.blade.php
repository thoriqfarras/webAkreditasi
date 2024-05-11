<div class="card mt-4">
  <div class="card-body">
    <h5 class="card-title">{{ $titleTableJumlah }}</h5>

    <!-- Table with stripped rows -->
    <table class="table datatable overflow" id="tabel-jumlah-rekap">
      <thead>      
      <tr> 
          @for ($i = 1; $i <= 5; $i++)
              @if ($i == 1) 
                  <th scope="col" class="x" data-sortable="false">Sumber Dana</th>
              @else
                  <th scope="col" data-sortable="false">Sumber Dana</th>
              @endif
              <th scope="col" data-sortable="false">Jumlah Judul</th>
          @endfor
      </tr>                
      </thead>
      <tbody>
        <tr>
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