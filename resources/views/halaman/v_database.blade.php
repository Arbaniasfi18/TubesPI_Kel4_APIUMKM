@extends('template.v_navbar')

@section('content')

<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css"> -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
<section>
  <div class="container mt-5">
    <div class="card">
        <div class="card-header text-white">
            UMKM di Kota Medan
        </div>
        <div class="card-body">
            <div class="row">
                <div class="card-title text-center border-bottom border-secondary pb-3" style="color:#000000;">
                 
                  @if(isset($total_umkm))
                    <h1>{{ $total_umkm }}</h1>
                  @else
                    <h1>54</h1>
                  @endif

                    <p>Jumlah data UMKM di Kota Medan (21 Kecamatam)</p>
                </div>
            </div>
            <div class="row mt-3">
            <canvas id="bar-chart" width="800" height="450"></canvas>
            </div>
            </div>
        </div>

        <div class="row mt-5">
            <table id="example" class="table table-bordered border border-dark" style="width:100%;">
                <thead style="background-color: #2AA165;">
                    <tr>
                        <th>NO</th>
                        <th>Nama Kecamatan</th>
                        <th>Sandang</th>
                        <th>Pangan</th>
                        <th>Papan</th>
                    </tr>
                </thead>
                <tbody>

                  @if (isset($umkms))
                    @foreach ($umkms as $umkm)
                    @php
                      $lowercase = strtolower($umkm['kecamatan']);
                      $explode = explode(' ', $lowercase);
                      $slug = implode('-', $explode);
                    @endphp
                      <tr>
                        <td onClick="top.location.href='{{ route('statistik', ['kecamatan' => $slug]) }}'">{{ $umkm['id'] }}</td>
                        <td onClick="top.location.href='{{ route('statistik', ['kecamatan' => $slug]) }}'">{{ $umkm['kecamatan'] }}</td>
                        <td onClick="top.location.href='{{ route('statistik', ['kecamatan' => $slug]) }}'">{{ $umkm['sandang'] }}</td>
                        <td onClick="top.location.href='{{ route('statistik', ['kecamatan' => $slug]) }}'">{{ $umkm['pangan'] }}</td>
                        <td onClick="top.location.href='{{ route('statistik', ['kecamatan' => $slug]) }}'">{{ $umkm['papan'] }}</td>
                      </tr>

                    @endforeach
                  @else
                    <tr>
                      <td onClick="top.location.href='{{ route('statistik') }}'">1</td>
                      <td onClick="top.location.href='{{ route('statistik') }}'">No Data</td>
                      <td onClick="top.location.href='{{ route('statistik') }}'">0</td>
                      <td onClick="top.location.href='{{ route('statistik') }}'">0</td>
                      <td onClick="top.location.href='{{ route('statistik') }}'">0</td>
                    </tr>
                  @endif


                </tbody>
                {{-- <tfoot>
                    <tr>
                        <th>NO</th>
                        <th>Nama Kecamatan</th>
                        <th>Sandang</th>
                        <th>Pangan</th>
                        <th>Papan</th>
                    </tr>
                </tfoot> --}}
            </table>
        </div>

  </div>
</section>

<script src='https://cdn.jsdelivr.net/npm/chart.js'></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>

  <script>
        $(document).ready(function () {
        $('#example').DataTable();
    });
  </script>

<script>

new Chart(document.getElementById("bar-chart"), {
    type: 'bar',
    data: {
      labels: [
      "Medan Amplas", 
      "Medan Area", 
      "Medan Barat",
      "Medan Baru",
      "Medan Belawan",
      "Medan Deli",
      "Medan Denai",
      "Medan Helvetia",
      "Medan Johor",
      "Medan Kota",
      "Medan Labuhan",
      "Medan Maimun",
      "Medan Marelan", 
      "Medan Perjuangan",
      "Medan Petisah",
      "Medan Polonia",
      "Medan Selayang",
      "Medan Sunggal",
      "Medan Tembung",
      "Medan Timur",
      "Medan Tuntungan" 
    ],
      datasets: [
        {
          label: "Jumlah UMKM",
          backgroundColor: [
            "#58C477", 
            "#FCB52B",
            "#43B9C0",
            "#0000FF",
            "#8A2BE2",
            "#A52A2A",
            "#DEB887",
            "#5F9EA0",
            "#7FFF00",
            "#D2691E",
            "#FF7F50",
            "#DC143C",
            "#00FFFF",
            "#008B8B",
            "#B8860B",
            "#556B2F",
            "#8FBC8F",
            "#483D8B",
            "#F08080",
            "#90EE90",
            "#FFA07A",
            "#20B2AA"
          ],
          data: [
            {{ $Medan_Amplas }},
            {{ $Medan_Area }},
            {{ $Medan_Barat }},
            {{ $Medan_Baru }},
            {{ $Medan_Belawan }},
            {{ $Medan_Deli }},
            {{ $Medan_Denai }},
            {{ $Medan_Helvetia }},
            {{ $Medan_Johor }},
            {{ $Medan_Kota }},
            {{ $Medan_Labuhan }},
            {{ $Medan_Maimun }},
            {{ $Medan_Marelan }},
            {{ $Medan_Perjuangan }},
            {{ $Medan_Petisah }},
            {{ $Medan_Polonia }},
            {{ $Medan_Selayang }},
            {{ $Medan_Sunggal }},
            {{ $Medan_Tembung }},
            {{ $Medan_Timur }},
            {{ $Medan_Tuntungan }},
          ]
        }
      ]
    },
    options: {
      legend: { display: false },
      title: {
        display: true,
        text: 'Jumlah UMKM  berdasarkan Kecamatan',
        fontColor: '#000000'
      }
    }
});
    </script>


@endsection