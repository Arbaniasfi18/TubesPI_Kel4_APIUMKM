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
                    <h1>54</h1>
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
                    <tr>
                        <td onClick="top.location.href='{{ route('statistik') }}'">1</td>
                        <td onClick="top.location.href='{{ route('statistik') }}'">Medan Tuntungan</td>
                        <td onClick="top.location.href='{{ route('statistik') }}'">20</td>
                        <td onClick="top.location.href='{{ route('statistik') }}'">10</td>
                        <td onClick="top.location.href='{{ route('statistik') }}'">5</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th>NO</th>
                        <th>Nama Kecamatan</th>
                        <th>Sandang</th>
                        <th>Pangan</th>
                        <th>Papan</th>
                    </tr>
                </tfoot>
            </table>
        </div>

  </div>
</section>

<script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js'></script><script  src="./script.js"></script>
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
      labels: ["Medan Tuntungan", "Medan Johor", "Medan Amplas","Medan Denai","Medan Area","Medan Kota","Medan Maimun","Medan Polonia","Medan Baru","Medan Selayang","Medan Sunggal","Medan Helvetia","Medan Petisah"],
      datasets: [
        {
          label: "Jumlah UMKM",
          backgroundColor: ["#58C477", "#FCB52B","#43B9C0","#0000FF","#8A2BE2","#A52A2A","#DEB887","#5F9EA0","#7FFF00","#D2691E","#FF7F50","#DC143C","#00FFFF","#008B8B","#B8860B","#556B2F","#8FBC8F","#483D8B","#F08080","#90EE90","#FFA07A","#20B2AA"],
          data: [19,39,20,17,11,14,15,13,16,18,19,30,22]
        }
      ]
    },
    options: {
      legend: { display: false },
      title: {
        display: true,
        text: 'Jumlah UMKM berdasarkan Kecamatan',
        fontColor: '#000000'
      }
    }
});
    </script>


@endsection