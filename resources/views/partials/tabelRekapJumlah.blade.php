<div class="card mt-4">
  <div class="card-body">
    <h5 class="card-title">{{ $titleTableJumlah }}</h5>

    <!-- Table with stripped rows -->
    <table class="table datatable overflow">
      <thead>      
      <tr> 
          {{-- @for ($i = 1; $i <= 5; $i++)
              @if ($i == 1) 
                  <th scope="col" class="x" data-sortable="false">Sumber Dana</th>
              @else
                  <th scope="col" data-sortable="false">Sumber Dana</th>
              @endif
              <th scope="col" data-sortable="false">Jumlah Judul</th>
          @endfor --}}
          <th>Sumber Dana</th>
          <th>Jumlah {{ $title }} 2024</th>
          <th>Jumlah {{ $title }} 2023</th>
          <th>Jumlah {{ $title }} 2022</th>
          <th>Jumlah {{ $title }} 2021</th>
          <th>Jumlah {{ $title }} 2020</th>
      </tr>                
      </thead>
      <tbody>
        <tr>
          <td>Pemberi Dana A</td>
          <td>10</td>
          <td>10</td>
          <td>10</td>
          <td>10</td>
          <td>10</td>
        </tr>
        <tr>
          <td>Pemberi Dana B</td>
          <td>1</td>
          <td>1</td>
          <td>1</td>
          <td>1</td>
          <td>1</td>
        </tr>
        <tr>
          <td>Pemberi Dana C</td>
          <td>8</td>
          <td>8</td>
          <td>8</td>
          <td>8</td>
          <td>8</td>
        </tr>        
        <tr>
          <td>Pemberi Dana D</td>
          <td>5</td>
          <td>5</td>
          <td>5</td>
          <td>5</td>
          <td>5</td>
        </tr>        
      </tbody>
    </table>
    <!-- End Table with stripped rows -->

  </div>
</div>