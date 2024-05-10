<div class="card mt-4">
    <div class="card-body">
      <h5 class="card-title">{{ $tableName }}</h5>

      <!-- Table with stripped rows -->
      <table class="table datatable">
        <thead>
          <tr>
            @foreach ($mainData[0] as $key => $value)
              <th>{{ $key }}</th>  
            @endforeach
            <th>File Laporan</th>
          </tr>
        </thead>
        <tbody>
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
                @foreach ($research['Nama Mahasiswa'] as $mahasiswa)
                  {{ $mahasiswa }}
                  @if (! $loop->last)
                    ,
                  @endif
                @endforeach
              </td>
              <td>{{ $research['Judul Penelitian'] }}</td>
              <td>{{ $research['Skema/Sumber Dana'] }}</td>
              <td>{{ $research['Dana'] }}</td>
              <td>{{ $research['Tahun'] }}</td>
              <td><button class="btn btn-primary">Download</button></td>              
            </tr>
          @endforeach
        </tbody>
      </table>
      <!-- End Table with stripped rows -->

    </div>
  </div>