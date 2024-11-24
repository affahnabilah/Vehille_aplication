<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Barang</title>
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Font Awesome 6 Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="/assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="/assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/assets/dist/css/adminlte.min.css">
  <style>
  body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    background-color: #f4f6f9;
  }

  .content {
    width: 100%;
    max-width: 1200px;
    padding: 20px;
    background: white;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
  }

  .btn-login {
    margin-bottom: 20px;
    display: flex;
  }
  </style>
</head>

<body>
  <a href="/login" class="btn btn-secondary mr-5"><i class="fa-solid fa-right-to-bracket"></i> Login</a>
  <div class="content mt-5">
    <div class="card">
      <div class="card-body">
        <table id="example1" class="table table-striped table-bordered table-hover text-center" style="width: 100%">
          <thead>
            <tr>
                                <th>No</th>
                                <th>Bagian</th>
                                <th>Nama Peminta</th>
                                <th>Pimpinan</th>
                                <th>Pelaksana</th>
                                <th>Tujuan</th>
                                <th>Keperluan</th>
                                <th>Tanggal</th>
                                <th>Jam Berangkat</th>
                                <th>Jam Kembali</th>
                                <th>Jenis Kendaraan</th>
                                <th>Nopol</th>
                                <th>Pengemudi</th>
                                <th>Estimasi Bbm</th>
                                <th>Estimasi Tol</th>
                                <th>Status</th>
                                <th>Note</th>
            </tr>
          </thead>
          <tbody>
          @foreach ($car as $data)
                              <td>
                                    <td>{{ $loop->index+1}}</td>
                                    <td>{{ $data->bagian}}</td>
                                    <td>{{ $data->nama_peminta}}</td>
                                    @if ($data->pimpinan == 1)
                                      1
                                    @elseif ($data->pimpinan == 2)
                                      2
                                    @elseif ($data->pimpinan == 3)
                                      3
                                    @elseif ($data->pimpinan == 4)
                                      4
                                    @elseif ($data->pimpinan == 5)
                                      5
                                    @endif
                                  </td>
                                  <td>
                                    @if ($data->pelaksana == 1)
                                      1
                                    @elseif ($data->pelaksana == 2)
                                      2
                                    @elseif ($data->pelaksana == 3)
                                      3
                                    @elseif ($data->pelaksana == 4)
                                      4
                                    @elseif ($data->pelaksana == 5)
                                      5
                                    @endif
                                    <td>{{$data->tujuan}}</td>
                                    <td>{{$data->keperluan}}</td>
                                    <td>{{$data->tanggal}}</td>
                                    <td>{{$data->jam_berangkat}}</td>
                                    <td>{{$data->jam_kembali}}</td>
                                    <td>{{$data->jenis_kendaraan}}</td>
                                    <td>{{$data->nopol}}</td>
                                    <td>{{$data->pengemudi}}</td>
                                    <td>{{$data->estimasi_bbm}}</td>
                                    <td>{{$data->estimasi_tol}}</td>
                                    <td>
                                        @if ($data->status == 'waiting')
                                            <span class="badge badge-warning">Menunggu</span>
                                        @elseif ($data->status == 'approval')
                                            <span class="badge badge-primary">Diterima</span>
                                        @else
                                            <span class="badge badge-danger">Ditolak</span>
                                        @endif
                                    </td>
                                    <td>{{$data->note}}</td>
                                    </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- jQuery -->
  <script src="/assets/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- DataTables & Plugins -->
  <script src="/assets/plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
  <script src="/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
  <script src="/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
  <script src="/assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  <script src="/assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
  <!-- AdminLTE App -->
  <script src="/assets/dist/js/adminlte.min.js"></script>
  @include('sweetalert::alert', ['cdn' => 'https://cdn.jsdelivr.net/npm/sweetalert2@9'])
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <script>
  $(document).ready(function() {
    $('#example1').DataTable({
      responsive: true
    });
  });
  </script>
</body>

</html>