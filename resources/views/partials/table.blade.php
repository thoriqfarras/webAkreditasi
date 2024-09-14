<div class="card mt-4">
    <div class="card-body">
      <h5 class="card-title">{{ $tableName }}</h5>

      <!-- Table with stripped rows -->
      <table class="table datatable overflow">
        <thead>
          <tr>
            @if(!empty($mainData) && count($mainData) > 0)
              @foreach ($mainData[0] as $key => $value)
                <th>{{ $key }}</th>  
              @endforeach
              <th scope="col" rowspan="2" data-sortable="false">File Laporan</th>
            @else
              <th>Tidak ada data</th>
            @endif
          </tr>
        </thead>
        <tbody>
          @if(!empty($mainData) && count($mainData) > 0)
            @foreach ($mainData as $research)
              <tr>
                <td>
                  @foreach ($research['Nama Dosen'] as $dosen)
                    {{ $dosen }}
                    @if (! $loop->last)
                      ,
                    @endif
                  @endforeach
                </td>
                <td>
                  @if(isset($research['Nama Mahasiswa']) && is_array($research['Nama Mahasiswa']))
                    @foreach ($research['Nama Mahasiswa'] as $mahasiswa)
                      {{ $mahasiswa }}@if(!$loop->last),@endif
                    @endforeach
                  @else
                    -
                  @endif
                </td>
                <td>{{ $research['Prodi'] }}</td>
                <td>{{ $research['Judul'] }}</td>
                <td>{{ $research['Skema/Sumber Dana'] }}</td>
                <td>{{ $research['Dana'] }}</td>
                <td>{{ $research['Tahun'] }}</td>
                <td>
                  <button class="btn btn-sm btn-outline-primary">
                    <i class="bi bi-download me-1"></i>Download
                  </button>
                </td>               
              </tr>
            @endforeach
          @else
            <tr>
              <td colspan="8" class="text-center">Data tidak ditemukan</td>
            </tr>
          @endif
        </tbody>
      </table>
      <!-- End Table with stripped rows -->

    </div>
  </div>