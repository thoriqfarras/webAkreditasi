<section class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">{{ $titleTableRekap }}</h5>
            <p>Di bawah ini adalah tabel yang menampilkan rekap data penelitian selama lima tahun terakhir:</p>
            
            <label for="rowCount" class="mb-4">Tampilkan:</label>
              <select id="rowCount" onchange="changeRowCount()">
                <option value="5">5</option>
                <option value="10">10</option>
                <option value="15">15</option>
              </select>
            
            <!-- Bordered Table -->
            <div class="overflow-x-scroll mb-3">
              <table id="myTable" class="table datatable table-bordered text-center f-flex text-nowrap">
                <thead class="flex-column">
                  <tr>
                    <th scope="col" rowspan="2" class="align-middle">No</th>
                    <th scope="col" rowspan="2" class="align-middle">Nama Dosen</th>
                    @for ($i = $currentYear; $i >=0; $i--)
                      @if($i >= ($currentYear-4))
                        <th colspan="3" scope="colgroup">{{ $i }}</th>
                      @endif
                    @endfor
                </tr>          
                  <tr>
                    @for ($i = 1; $i <= 5; $i++)
                        <th scope="col">Jumlah Judul</th>
                        <th scope="col">Sumber Dana</th>
                        <th scope="col">Total Dana</th>
                    @endfor
                </tr>                
                </thead>
                <tbody class="flex-column text-nowrap">
                  <tr>
                    <th scope="row">1</th>
                    <td>Brandon Jacob</td>
                    <td>5</td>
                    <td>Kemendikbud</td>
                    <td>5,000,000</td>
                    <td>5</td>
                    <td>Kemendikbud</td>
                    <td>5,000,000</td>
                    <td>5</td>
                    <td>Kemendikbud</td>
                    <td>5,000,000</td>
                    <td>5</td>
                    <td>Kemendikbud</td>
                    <td>5,000,000</td>
                    <td>5</td>
                    <td>Kemendikbud</td>
                    <td>5,000,000</td>  
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Brandon Jacob</td>
                    <td>5</td>
                    <td>Kemendikbud</td>
                    <td>5,000,000</td>
                    <td>5</td>
                    <td>Kemendikbud</td>
                    <td>5,000,000</td>
                    <td>5</td>
                    <td>Kemendikbud</td>
                    <td>5,000,000</td>
                    <td>5</td>
                    <td>Kemendikbud</td>
                    <td>5,000,000</td>
                    <td>5</td>
                    <td>Kemendikbud</td>
                    <td>5,000,000</td>  
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Brandon Jacob</td>
                    <td>5</td>
                    <td>Kemendikbud</td>
                    <td>5,000,000</td>
                    <td>5</td>
                    <td>Kemendikbud</td>
                    <td>5,000,000</td>
                    <td>5</td>
                    <td>Kemendikbud</td>
                    <td>5,000,000</td>
                    <td>5</td>
                    <td>Kemendikbud</td>
                    <td>5,000,000</td>
                    <td>5</td>
                    <td>Kemendikbud</td>
                    <td>5,000,000</td>  
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td>Brandon Jacob</td>
                    <td>5</td>
                    <td>Kemendikbud</td>
                    <td>5,000,000</td>
                    <td>5</td>
                    <td>Kemendikbud</td>
                    <td>5,000,000</td>
                    <td>5</td>
                    <td>Kemendikbud</td>
                    <td>5,000,000</td>
                    <td>5</td>
                    <td>Kemendikbud</td>
                    <td>5,000,000</td>
                    <td>5</td>
                    <td>Kemendikbud</td>
                    <td>5,000,000</td>  
                  </tr>
                  <tr>
                    <th scope="row">5</th>
                    <td>Brandon Jacob</td>
                    <td>5</td>
                    <td>Kemendikbud</td>
                    <td>5,000,000</td>
                    <td>5</td>
                    <td>Kemendikbud</td>
                    <td>5,000,000</td>
                    <td>5</td>
                    <td>Kemendikbud</td>
                    <td>5,000,000</td>
                    <td>5</td>
                    <td>Kemendikbud</td>
                    <td>5,000,000</td>
                    <td>5</td>
                    <td>Kemendikbud</td>
                    <td>5,000,000</td>  
                  </tr>
                  <tr>
                    <th scope="row">6</th>
                    <td>Brandon Jacob</td>
                    <td>5</td>
                    <td>Kemendikbud</td>
                    <td>5,000,000</td>
                    <td>5</td>
                    <td>Kemendikbud</td>
                    <td>5,000,000</td>
                    <td>5</td>
                    <td>Kemendikbud</td>
                    <td>5,000,000</td>
                    <td>5</td>
                    <td>Kemendikbud</td>
                    <td>5,000,000</td>
                    <td>5</td>
                    <td>Kemendikbud</td>
                    <td>5,000,000</td>  
                  </tr>
                  <tr>
                    <th scope="row">7</th>
                    <td>Brandon Jacob</td>
                    <td>5</td>
                    <td>Kemendikbud</td>
                    <td>5,000,000</td>
                    <td>5</td>
                    <td>Kemendikbud</td>
                    <td>5,000,000</td>
                    <td>5</td>
                    <td>Kemendikbud</td>
                    <td>5,000,000</td>
                    <td>5</td>
                    <td>Kemendikbud</td>
                    <td>5,000,000</td>
                    <td>5</td>
                    <td>Kemendikbud</td>
                    <td>5,000,000</td>  
                  </tr>
                  <tr>
                    <th scope="row">8</th>
                    <td>Brandon Jacob</td>
                    <td>5</td>
                    <td>Kemendikbud</td>
                    <td>5,000,000</td>
                    <td>5</td>
                    <td>Kemendikbud</td>
                    <td>5,000,000</td>
                    <td>5</td>
                    <td>Kemendikbud</td>
                    <td>5,000,000</td>
                    <td>5</td>
                    <td>Kemendikbud</td>
                    <td>5,000,000</td>
                    <td>5</td>
                    <td>Kemendikbud</td>
                    <td>5,000,000</td>  
                  </tr>
                  <tr>
                    <th scope="row">9</th>
                    <td>Brandon Jacob</td>
                    <td>5</td>
                    <td>Kemendikbud</td>
                    <td>5,000,000</td>
                    <td>5</td>
                    <td>Kemendikbud</td>
                    <td>5,000,000</td>
                    <td>5</td>
                    <td>Kemendikbud</td>
                    <td>5,000,000</td>
                    <td>5</td>
                    <td>Kemendikbud</td>
                    <td>5,000,000</td>
                    <td>5</td>
                    <td>Kemendikbud</td>
                    <td>5,000,000</td>  
                  </tr>
                  <tr>
                    <th scope="row">10</th>
                    <td>Brandon Jacob</td>
                    <td>5</td>
                    <td>Kemendikbud</td>
                    <td>5,000,000</td>
                    <td>5</td>
                    <td>Kemendikbud</td>
                    <td>5,000,000</td>
                    <td>5</td>
                    <td>Kemendikbud</td>
                    <td>5,000,000</td>
                    <td>5</td>
                    <td>Kemendikbud</td>
                    <td>5,000,000</td>
                    <td>5</td>
                    <td>Kemendikbud</td>
                    <td>5,000,000</td>  
                  </tr>
                  <tr>
                    <th scope="row">11</th>
                    <td>Brandon Jacob</td>
                    <td>5</td>
                    <td>Kemendikbud</td>
                    <td>5,000,000</td>
                    <td>5</td>
                    <td>Kemendikbud</td>
                    <td>5,000,000</td>
                    <td>5</td>
                    <td>Kemendikbud</td>
                    <td>5,000,000</td>
                    <td>5</td>
                    <td>Kemendikbud</td>
                    <td>5,000,000</td>
                    <td>5</td>
                    <td>Kemendikbud</td>
                    <td>5,000,000</td>  
                  </tr>
                  <tr>
                    <th scope="row">12</th>
                    <td>Brandon Jacob</td>
                    <td>5</td>
                    <td>Kemendikbud</td>
                    <td>5,000,000</td>
                    <td>5</td>
                    <td>Kemendikbud</td>
                    <td>5,000,000</td>
                    <td>5</td>
                    <td>Kemendikbud</td>
                    <td>5,000,000</td>
                    <td>5</td>
                    <td>Kemendikbud</td>
                    <td>5,000,000</td>
                    <td>5</td>
                    <td>Kemendikbud</td>
                    <td>5,000,000</td>  
                  </tr>
                  <tr>
                    <th scope="row">13</th>
                    <td>Brandon Jacob</td>
                    <td>5</td>
                    <td>Kemendikbud</td>
                    <td>5,000,000</td>
                    <td>5</td>
                    <td>Kemendikbud</td>
                    <td>5,000,000</td>
                    <td>5</td>
                    <td>Kemendikbud</td>
                    <td>5,000,000</td>
                    <td>5</td>
                    <td>Kemendikbud</td>
                    <td>5,000,000</td>
                    <td>5</td>
                    <td>Kemendikbud</td>
                    <td>5,000,000</td>  
                  </tr>
                  <tr>
                    <th scope="row">14</th>
                    <td>Brandon Jacob</td>
                    <td>5</td>
                    <td>Kemendikbud</td>
                    <td>5,000,000</td>
                    <td>5</td>
                    <td>Kemendikbud</td>
                    <td>5,000,000</td>
                    <td>5</td>
                    <td>Kemendikbud</td>
                    <td>5,000,000</td>
                    <td>5</td>
                    <td>Kemendikbud</td>
                    <td>5,000,000</td>
                    <td>5</td>
                    <td>Kemendikbud</td>
                    <td>5,000,000</td>  
                  </tr>
                  <tr>
                    <th scope="row">15</th>
                    <td>Brandon Jacob</td>
                    <td>5</td>
                    <td>Kemendikbud</td>
                    <td>5,000,000</td>
                    <td>5</td>
                    <td>Kemendikbud</td>
                    <td>5,000,000</td>
                    <td>5</td>
                    <td>Kemendikbud</td>
                    <td>5,000,000</td>
                    <td>5</td>
                    <td>Kemendikbud</td>
                    <td>5,000,000</td>
                    <td>5</td>
                    <td>Kemendikbud</td>
                    <td>5,000,000</td>  
                  </tr>
                  <tr>
                    <th scope="row">16</th>
                    <td>Brandon Jacob</td>
                    <td>5</td>
                    <td>Kemendikbud</td>
                    <td>5,000,000</td>
                    <td>5</td>
                    <td>Kemendikbud</td>
                    <td>5,000,000</td>
                    <td>5</td>
                    <td>Kemendikbud</td>
                    <td>5,000,000</td>
                    <td>5</td>
                    <td>Kemendikbud</td>
                    <td>5,000,000</td>
                    <td>5</td>
                    <td>Kemendikbud</td>
                    <td>5,000,000</td>  
                  </tr>
                  <tr>
                    <th scope="row">17</th>
                    <td>Brandon Jacob</td>
                    <td>5</td>
                    <td>Kemendikbud</td>
                    <td>5,000,000</td>
                    <td>5</td>
                    <td>Kemendikbud</td>
                    <td>5,000,000</td>
                    <td>5</td>
                    <td>Kemendikbud</td>
                    <td>5,000,000</td>
                    <td>5</td>
                    <td>Kemendikbud</td>
                    <td>5,000,000</td>
                    <td>5</td>
                    <td>Kemendikbud</td>
                    <td>5,000,000</td>  
                  </tr>
                  <tr>
                    <th scope="row">18</th>
                    <td>Brandon Jacob</td>
                    <td>5</td>
                    <td>Kemendikbud</td>
                    <td>5,000,000</td>
                    <td>5</td>
                    <td>Kemendikbud</td>
                    <td>5,000,000</td>
                    <td>5</td>
                    <td>Kemendikbud</td>
                    <td>5,000,000</td>
                    <td>5</td>
                    <td>Kemendikbud</td>
                    <td>5,000,000</td>
                    <td>5</td>
                    <td>Kemendikbud</td>
                    <td>5,000,000</td>  
                  </tr>
                  <tr>
                    <th scope="row">19</th>
                    <td>Brandon Jacob</td>
                    <td>5</td>
                    <td>Kemendikbud</td>
                    <td>5,000,000</td>
                    <td>5</td>
                    <td>Kemendikbud</td>
                    <td>5,000,000</td>
                    <td>5</td>
                    <td>Kemendikbud</td>
                    <td>5,000,000</td>
                    <td>5</td>
                    <td>Kemendikbud</td>
                    <td>5,000,000</td>
                    <td>5</td>
                    <td>Kemendikbud</td>
                    <td>5,000,000</td>  
                  </tr>
                  <tr>
                    <th scope="row">20</th>
                    <td>Brandon Jacob</td>
                    <td>5</td>
                    <td>Kemendikbud</td>
                    <td>5,000,000</td>
                    <td>5</td>
                    <td>Kemendikbud</td>
                    <td>5,000,000</td>
                    <td>5</td>
                    <td>Kemendikbud</td>
                    <td>5,000,000</td>
                    <td>5</td>
                    <td>Kemendikbud</td>
                    <td>5,000,000</td>
                    <td>5</td>
                    <td>Kemendikbud</td>
                    <td>5,000,000</td>  
                  </tr>
                  <tr>
                    <th scope="row">21</th>
                    <td>Brandon Jacob</td>
                    <td>5</td>
                    <td>Kemendikbud</td>
                    <td>5,000,000</td>
                    <td>5</td>
                    <td>Kemendikbud</td>
                    <td>5,000,000</td>
                    <td>5</td>
                    <td>Kemendikbud</td>
                    <td>5,000,000</td>
                    <td>5</td>
                    <td>Kemendikbud</td>
                    <td>5,000,000</td>
                    <td>5</td>
                    <td>Kemendikbud</td>
                    <td>5,000,000</td>  
                  </tr>
                </tbody>
              </table>
            </div>  
            <!-- End Bordered Table -->
            <!-- Container untuk menampilkan navigasi halaman -->
          <div id="pagination"></div>

          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End of Recap Table -->

 <script>
  function changeRowCount() {
      var rowCount = parseInt(document.getElementById("rowCount").value);
      var table = document.getElementById("myTable");
      var tbody = table.getElementsByTagName("tbody")[0];
      var rows = tbody.getElementsByTagName("tr");
      var totalRows = rows.length;
  
      var totalPages = Math.ceil(totalRows / rowCount);
  
      var paginationHTML = "<label for='page'>Halaman:</label>";
      paginationHTML += "<select id='page' onchange='changePage()'>";
      for (var i = 1; i <= totalPages; i++) {
          paginationHTML += "<option value='" + i + "'>" + i + "</option>";
      }
      paginationHTML += "</select>";
      document.getElementById("pagination").innerHTML = paginationHTML;
  
      changePage();
  }
  

  //kode tampilan baris
  function changePage() {
      var currentPage = parseInt(document.getElementById("page").value);
      var rowCount = parseInt(document.getElementById("rowCount").value);
      var table = document.getElementById("myTable");
      var tbody = table.getElementsByTagName("tbody")[0];
      var rows = tbody.getElementsByTagName("tr");
  
      var startIndex = (currentPage - 1) * rowCount;
      var endIndex = Math.min(startIndex + rowCount, rows.length);
  
      for (var i = 0; i < rows.length; i++) {
          rows[i].style.display = "none";
      }
  
      for (var i = startIndex; i < endIndex; i++) {
          rows[i].style.display = "";
      }
  }
  
  changeRowCount();
  </script>