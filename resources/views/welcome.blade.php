@section('title', 'Car')
@section('content')

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
    <div class="barangd">
      <div class="barangd-body">
        <table id="example1" class="table table-striped table-bordered table-hover text-center" style="width: 100%">
        <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Data Pengajuan</h3>
                    <div class="card-tools">
                    <button type="button" class="btn btn-primary" onclick="window.location.href='/car/add'">
    <i class="fas fa-plus"></i> Tambah Pengajuan
</button>
                    </div>
                </div>
                <div class="card-body">
                         <table id="dataTable" class="table table-bordered table-hover table-red"> <!-- Gunakan kelas kustom -->
                    <thead>
                        <tr>
                                <th>No</th>
                                <th>Bagian</th>
                                <th>Nama Peminta</th>
                                <th>Pimpinan</th>
                                <th>Pelaksana</th>
                                <th>Tanggal</th>
                                <th>Tujuan</th>
                                <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($car as $data)
                  <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td>{{ $data->bagian }}</td>
                                    <td>{{ $data->nama_peminta }}</td>
                                    <td>{{ $data->pimpinan1 }}</td>
                                    <td>{{ $data->pelaksana1 }}</td>
                                    <td>{{ $data->tanggal }}</td>
                                    <td>{{ $data->tujuan }}</td>
                                    <td>
                                        @if ($data->status == 'waiting')
                                            <span class="badge badge-warning">Menunggu</span>
                                        @elseif ($data->status == 'approval')
                                            <span class="badge badge-primary">Diterima</span>
                                        @else
                                            <span class="badge badge-danger">Ditolak</span>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for Adding New Submission -->
<<<<<<< HEAD
    <!-- Main content -->
    @section('buttonHeader')
    <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#modal-create">
        <i class="fas fa-plus"></i> Tambah Pengajuan
    </button>
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <div class="text-right">
                <a href="/car" class="btn btn-warning btn-sm"><i class="fa-solid fa-arrow-rotate-left"></i>
                  Back
                </a>
              </div>
            </div>
            <form class="needs-validation" novalidate action="/car" method="POST">
              @csrf
              <div class="card-body">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                    <label>Bagian</label>
                        <select name="bagian" class="form-control" required>
=======
    <div class="modal fade" id="modal-create">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Pengajuan</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <form class="needs-validation" novalidate action="/car" method="POST">
                     @csrf
                    <div class="modal-body">
                        <div class="form-group">
                        <label>Bagian</label>
                        <select name="bagian" class="form-control @error('bagian') is-invalid @enderror" id="bagian" required>
>>>>>>> 39e0ae9804688250ad747f984f3bdef28b6c32f7
                            <option value="" disabled selected>Pilih Bagian</option>
                            <option value="Tanaman">Tanaman</option>
                            <option value="AKU">AKU</option>
                            <option value="Teknik">Teknik</option>
                            <option value="QE">QE</option>
                            <option value="AK">AK</option>
                            <!-- Tambahkan opsi lain sesuai kebutuhan -->
                        </select>
                    </div>
                        <div class="form-group">
                            <label>Nama Peminta</label>
                            <input type="text" name="nama_peminta" class="form-control @error('nama_peminta') is-invalid @enderror" id="nama_peminta" placeholder="Nama peminta" value="{{old('nama_peminta')}}" required>
                        </div>
                        <div class="form-group">
                            <label>Pimpinan 1</label>
                            <input type="text" name="pimpinan1" class="form-control @error('pimpinan1') is-invalid @enderror" id="pimpinan1" placeholder="Pimpinan1" value="{{old('pimpinan1')}}" required>
                        </div>
                        <div class="form-group">
                            <label>Pimpinan 2 </label>
                            <input type="text" name="pimpinan2" class="form-control @error('pimpinan2') is-invalid @enderror" id="pimpinan2" placeholder="Pimpinan2" value="{{old('pimpinan2')}}">
                        </div>
                        <div class="form-group">
                            <label>Pimpinan 3 </label>
                            <input type="text" name="pimpinan3" class="form-control @error('pimpinan3') is-invalid @enderror" id="pimpinan3" placeholder="Pimpinan3" value="{{old('pimpinan3')}}" >
                        </div>
                        <div class="form-group">
                            <label>Pimpinan 4</label>
                            <input type="text" name="pimpinan4" class="form-control @error('pimpinan4') is-invalid @enderror" id="pimpinan4" placeholder="Pimpinan4" value="{{old('pimpinan4')}}" >
                        </div>
                        <div class="form-group">
                            <label>Pimpinan 5</label>
                            <input type="text" name="pimpinan5" class="form-control @error('pimpinan5') is-invalid @enderror" id="pimpinan5" placeholder="Pimpinan5" value="{{old('pimpinan5')}}" >
                        </div>
                        <div class="form-group">
                            <label>Pelaksana 1</label>
                            <input type="text" name="pelaksana1" class="form-control @error('pelaksana1') is-invalid @enderror" id="pelaksana1" placeholder="Pelaksana1" value="{{old('pelaksana1')}}" required>
                        </div>
                        <div class="form-group">
                            <label>Pelaksana 2</label>
                            <input type="text" name="pelaksana2" class="form-control @error('pelaksana2') is-invalid @enderror" id="pelaksana2" placeholder="Pelaksana2" value="{{old('pelaksana2')}}">
                        </div>
                        <div class="form-group">
                            <label>Pelaksana 3</label>
                            <input type="text" name="pelaksana3" class="form-control @error('pelaksana3') is-invalid @enderror" id="pelaksana3" placeholder="Pelaksana3" value="{{old('pelaksana3')}}">
                        </div>
                        <div class="form-group">
                            <label>Pelaksana 4</label>
                            <input type="text" name="pelaksana4" class="form-control @error('pelaksana4') is-invalid @enderror" id="pelaksana4" placeholder="Pelaksana4" value="{{old('pelaksana4')}}">
                        </div>
                        <div class="form-group">
                            <label>Pelaksana 5</label>
                            <input type="text" name="pelaksana5" class="form-control @error('pelaksana5') is-invalid @enderror" id="pelaksana5" placeholder="Pelaksana5" value="{{old('pelaksana5')}}">
                        </div>
                        <div class="form-group">
                            <label>Tujuan</label>
                            <input type="text" name="tujuan" class="form-control @error('tujuan') is-invalid @enderror" id="tujuan" placeholder="Tujuan" value="{{old('tujuan')}}" required>
                        </div>
                        <div class="form-group">
                            <label>Keperluan</label>
                            <input type="text" name="keperluan" class="form-control @error('keperluan') is-invalid @enderror" id="bagian" placeholder="Keperluan" value="{{old('keperluan')}}" required>
                        </div>
                        <div class="form-group">
                            <label>Tanggal</label>
                            <input type="date" name="tanggal" class="form-control @error('tanggal') is-invalid @enderror" id="tanggal" placeholder="Tanggal" value="{{old('tanggal')}}" required>
                        </div>
                        <div class="form-group">
                            <label>Jam Berangkat</label>
                            <input type="time" name="jam_berangkat" class="form-control @error('jam_berangkat') is-invalid @enderror" id="jam_berangkat" placeholder="Jam Berangkat" value="{{old('jam_berangkat')}}" required>
                        </div>
                        <div class="form-group">
                            <label>Jam Kembali</label>
                            <input type="time" name="jam_kembali" class="form-control @error('jam_kembali') is-invalid @enderror" id="jam_kembali" placeholder="Jam Kembali" value="{{old('jam_kembali')}}" required>
                        </div>
                        <div class="form-group">
                            <label>Jenis Kendaraan</label>
                            <input type="text" name="jenis_kendaraan" class="form-control @error('jenis_kendaraan') is-invalid @enderror" id="jenis_kendaraan" placeholder="Jenis Kendaraan" value="{{old('jenis_kendaraan')}}" required>
                        </div>
                        <div class="form-group">
                            <label>Nopol</label>
                            <input type="text" name="nopol" class="form-control @error('nopol') is-invalid @enderror" id="nopol" placeholder="Nopol" value="{{old('nopol')}}" required>
                        </div>
                        <div class="form-group">
                            <label>Pengemudi</label>
                            <input type="text" name="pengemudi" class="form-control @error('pengemudi') is-invalid @enderror" id="pengemudi" placeholder="Pengemudi" value="{{old('pengemudi')}}" required>
                        </div>
                        <div class="form-group">
                            <label>Estimasi BBM</label>
                            <input type="text" name="estimasi_bbm" class="form-control @error('estimasi_bbm') is-invalid @enderror" id="estimasi_bbm" placeholder="Estimasi Bbm" value="{{old('estimasi_bbm')}}" required>
                        </div>
                        <div class="form-group">
                            <label>Estimasi Tol</label>
                            <input type="text" name="estimasi_tol" class="form-control @error('estimasi_tol') is-invalid @enderror" id="estimasi_tol" placeholder="Estimasi Tol" value="{{old('estimasi_tol')}}" required>
                        </div>
                        <div class="form-group">
                            <label>Manager AKU dan Umum</label>
                            <input type="text" name="manager_AKU_dan_umum" class="form-control @error('manager_AKU_dan_umum') is-invalid @enderror" id="manager_AKU_dan_umum" placeholder="Manager Aku dan Umum" value="{{old('manager_AKU_dan_umum')}}" required>
                        </div>
                        <div class="form-group">
                            <label>Manager Tanaman</label>
                            <input type="text" name="manager_tanaman" class="form-control @error('manager_tanaman') is-invalid @enderror" id="manager_tanaman" placeholder= "Manager tanaman" value="{{old('manager_tanaman')}}" required>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                <button class="btn btn-dark mr-1" type="reset"><i class="fa-solid fa-arrows-rotate"></i>
                  Batal</button>
                <button class="btn btn-success" type="submit"><i class="fa-solid fa-floppy-disk"></i>
                  Save</button>
              </div>
                </form>
            </div>
        </div>
    </div>
<<<<<<< HEAD
  </div>
  @endsection

=======
>>>>>>> 39e0ae9804688250ad747f984f3bdef28b6c32f7

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