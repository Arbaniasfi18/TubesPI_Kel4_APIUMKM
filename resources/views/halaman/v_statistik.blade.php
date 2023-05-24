@extends('template.v_navbar')

@section('content')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">

<section>
  <div class="container mt-5">
    <div class="card">
        @if (isset($kecamatan))
            <div class="card-header text-white">
                {{ $kecamatan }}
            </div>
        @else
            <div class="card-header text-white">
                Medan Johor
            </div>
        @endif
        <div class="card-body">
            <div class="row">
                @if (isset($data_kecamatan))
                    <div class="card-title col-md-6">
                        <h1>{{ count($data_kecamatan) }}</h1>
                        <p>Jumlah data UMKM di kecamatan {{ $kecamatan }}</p>
                        <p><a style="color:#58C477">GREEN BAR</a></br>Kategori Sandang</p>
                        <p><a style="color:#FCB52B">ORANGE BAR</a></br>Kategori Pangam</p>
                        <p><a style="color:#43B9C0">BLUE BAR</a></br>Kategori Papan</p>
                    </div>
                        <div class="col-md-6">
                            <canvas id="bar-chart" width="800" height="450"></canvas>
                        </div>
                    </div>
                @else
                    <div class="card-title col-md-6">
                        <h1>0</h1>
                        <p>Jumlah data UMKM di kecamatan {{ $kecamatan }}</p>
                        <p><a style="color:#58C477">GREEN BAR</a></br>Kategori Sandang</p>
                        <p><a style="color:#FCB52B">ORANGE BAR</a></br>Kategori Pangam</p>
                        <p><a style="color:#43B9C0">BLUE BAR</a></br>Kategori Papan</p>
                    </div>
                        <div class="col-md-6">
                            <canvas id="bar-chart" width="800" height="450"></canvas>
                        </div>
                    </div>
                @endif
            </div>
        </div>

        <!-- <div class="row mt-5">        
            <div class="col-md-11 input-group">
                <input type="text" class="form-control input-text border-dark" placeholder="Cari data apa?" aria-label="Recipient's username" aria-describedby="basic-addon2">
                <button class="btn btn-outline-dark btn-lg" type="button"><i class="bi bi-search"></i></button>
            </div>        
        </div> -->

        <div class="row mt-5 mb-5">
            <div class="col-md-3">
                <p><b>Kategori</b></p>
                <select class="form-select border-dark" aria-label="Default select example">
                    <option selected>Pilih</option>
                    <option value="1">Sandang</option>
                    <option value="2">Pangan</option>
                    <option value="3">Papan</option>
                </select>
            </div>
        </div>

     

        <table id="example" class="table table-bordered border border-dark" style="width:100%;">
        <thead style="background-color: #2AA165;">
            <tr>
                <th>NO</th>
                <th>Nama Usaha</th>
                <th>Kategori</th>
                <th>Jumlah Produk</th>
                <th>Alamat</th>
                <th>Validitas Sertifikat</th>
            </tr>
        </thead>
        <tbody>
            @if (isset($data_kecamatan))
                @foreach ($data_kecamatan as $data)
                    <tr>
                        <td onClick="top.location.href='{{ route('data_umkm', ['id' => $data->id]) }}'">{{ $data->id }}</td>
                        <td onClick="top.location.href='{{ route('data_umkm', ['id' => $data->id]) }}'">{{ $data->nama_usaha }}</td>
                        <td onClick="top.location.href='{{ route('data_umkm', ['id' => $data->id]) }}'">{{ $data->kategori_umkm }}</td>
                        <td onClick="top.location.href='{{ route('data_umkm', ['id' => $data->id]) }}'">{{ 3 }}</td>
                        <td onClick="top.location.href='{{ route('data_umkm', ['id' => $data->id]) }}'">{{ $data->alamat_usaha }}</td>
                        <td onClick="top.location.href='{{ route('data_umkm', ['id' => $data->id]) }}'">{{ $data->validitas_sertif_umkm }}</td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td>1</td>
                    <td>No data</td>
                    <td>No data</td>
                    <td>No data</td>
                    <td>No data</td>
                    <td>No data</td>
                </tr>
            @endif
        </tbody>
        <tfoot>
            <tr>
                <th>NO</th>
                <th>Nama Usaha</th>
                <th>Kategori</th>
                <th>Jumlah Produk</th>
                <th>Alamat</th>
                <th>Validitas Sertifikat</th>
            </tr>
        </tfoot>
    </table>

  </div>
</section>

<script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js'></script><script  src="{{ asset('') }}"></script>
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
      labels: ["Sandang", "Pangan", "Papan"],
      datasets: [
        {
          label: "Jumlah UMKM",
          backgroundColor: ["#58C477", "#FCB52B","#43B9C0"],
          data: [
            {{ $sandang }},
            {{ $pangan }},
            {{ $papan }}]
        }
      ]
    },
    options: {
      legend: { display: false },
      title: {
        display: true,
        text: 'Jumlah UMKM berdasarkan Kategori'
      }
    }
});
    </script>


@endsection