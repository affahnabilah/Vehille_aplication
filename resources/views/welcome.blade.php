@extends('template.main')

@push('css')
    <link rel="stylesheet" href="{{ asset('/') }}plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">

    <link rel="stylesheet" href="{{ asset('/') }}plugins/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="{{ asset('/') }}plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
@endpush

@section('buttonHeader')
    <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#modal-create">
        <i class="fas fa-plus"></i> Tambah Pengajuan
    </button>@extends('template.main')
@section('title', 'Car')
@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">@yield('title')</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active">@yield('title')</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <div class="text-right">
                <div class="">
                  <a href="/print" target="blank" class="btn btn-primary mr-1"><i class="fa-solid fa-print"></i>
                    Print
                    car</a>
                  <a href="/car/create" class="btn btn-success"><i class="fa-solid fa-plus"></i> Add
                    car</a>
                </div>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-striped table-bordered table-hover text-center"
                style="width: 100%">
                <thead>
                  <tr>
                                <th>No</th>
                                <th>Bagian</th>
                                <th>Nama Peminta</th>
                                <th>Pimpinan</th>
                                <th>Pelaksana</th>
                                <th>Tujuan</th>
                                <th>Tanggal</th>
                                <th>Status</th>
                                <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($car as $data)
                  <tr>
                                    <td>{{ $loop->index+1}}</td>
                                    <td>{{ $data->bagian}}</td>
                                    <td>{{ $data->nama_peminta}}</td>
                                    <td>{{ $data->pimpinan1}}</td>
                                    <td>{{ $data->pelaksana1}}</td>
                                    <td>{{ $data->tanggal}}</td>
                                    <td>{{ $data->tujuan}}</td>
                                    <td>
                                        @if ($data->status == 'waiting')
                                            <span class="badge badge-warning">Menunggu</span>
                                        @elseif ($data->status == 'approval')
                                            <span class="badge badge-primary">Diterima</span>
                                        @else
                                            <span class="badge badge-danger">Ditolak</span>
                                        @endif
                                    </td>
                    <td>
                    <form class="d-inline" action="/car/{{ $data->id_car }}/edit" method="GET">
                        <button type="submit" class="btn btn-warning btn-sm mr-1" style="color: white;">
                          <i class="fa-solid fa-pen"></i> Edit
                        </button>
                      </form>
                      <form class="d-inline" action="/car/{{ $data->id_car }}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger btn-sm" id="btn-delete"><i
                            class="fa-solid fa-trash-can"></i> Delete
                        </button>
                      </form>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content -->
    </div>
  </div>
</div>

@endsection

    <div class="modal fade" id="modal-create">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Tambah Pengajuan</h4>
                </div>
                <a href="/car/create" class="btn btn-success"><i class="fa-solid fa-plus"></i> Add
                    car</a>
                    @csrf

                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Bagian</label>
                                    <input type="text" name="bagian" class="form-control" placeholder="bagian" value="">
                                </div>
                            </div>
                        </div>

                                        <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="nama_peminta">Nama Peminta</label>
                                            <input type="text" name="nama_peminta" class="form-control" placeholder="Nama peminta" value="" required>
                                        </div>
                                        </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="pimpinan1">Pimpinan1</label>
                                            <input type="text" name="pimpinan1" class="form-control" placeholder="Pimpinan1" value="" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="pimpinan2">Pimpinan2</label>
                                            <input type="text" name="pimpinan2" class="form-control" placeholder="Pimpinan2" value="">
                                        </div>

                                        <div class="form-group">
                                            <label for="pimpinan3">Pimpinan3</label>
                                            <input type="text" name="pimpinan3" class="form-control" placeholder="Pimpinan3" value="">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="pimpinan4">Pimpinan4</label>
                                            <input type="text" name="pimpinan4" class="form-control" placeholder="Pimpinan4" value="">
                                        </div>

                                        <div class="form-group">
                                            <label for="pimpinan5">Pimpinan5</label>
                                            <input type="text" name="pimpinan5" class="form-control" placeholder="Pimpinan5" value="">
                                        </div>

                                        <div class="form-group">
                                            <label for="pelaksana1">Pelaksana1</label>
                                            <input type="text" name="pelaksana1" class="form-control" placeholder="Pelaksana1" value="" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="pelaksana2">Pelaksana2</label>
                                            <input type="text" name="pelaksana2" class="form-control" placeholder="Pelaksana2" value="">
                                        </div>

                                        <div class="form-group">
                                            <label for="pelaksana3">Pelaksana3</label>
                                            <input type="text" name="pelaksana3" class="form-control" placeholder="Pelaksana3" value="">
                                        </div>

                                        <div class="form-group">
                                            <label for="pelaksana4">Pelaksana4</label>
                                            <input type="text" name="pelaksana4" class="form-control" placeholder="pelaksana4" value="">
                                        </div>

                                        <div class="form-group">
                                            <label for="pelaksana5">Pelaksana5</label>
                                            <input type="text" name="pelaksana5" class="form-control" placeholder="Pelaksana5" value="">
                                        </div>

                                        <div class="form-group">
                                            <label for="tujuan">Tujuan</label>
                                            <input type="text" name="tujuan" class="form-control @error('tujuan') is-invalid @enderror" id="tujuan" placeholder="Tujuan" value="{{old('tujuan')}}" required>
                                            @error('tujuan')
                                            <span class="invalid-feedback text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="keperluan">Keperluan</label>
                                            <input type="text" name="keperluan" class="form-control" placeholder="Keperluan" value="" required>
                                            </div>

                                        <div class="form-group">
                                            <label for="tanggal">Tanggal</label>
                                            <input type="date" name="tanggal" class="form-control" placeholder="tanggal" value="" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="jam_berangkat">Jam Berangkat</label>
                                            <input type="time" name="jam_berangkat" class="form-control" placeholder="Jam Berangkat" value="" required>
                                        </div>
                                        
                                       
                                        <div class="form-group">
                                            <label for="jam_kembali">Jam Kembali</label>
                                            <input type="time" name="jam_kembali" class="form-control" placeholder="Jam Kembali" value="" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="jenis_kendaraan">Jenis Kendaraan</label>
                                            <input type="text" name="jenis_kendaraan" class="form-control" placeholder="Jenis Kendaraan" value="" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="nopol">Nopol</label>
                                            <input type="text" name="nopol" class="form-control" placeholder="Nopol" value="" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="pengemudi">Pengemudi</label>
                                            <input type="text" name="pengemudi" class="form-control" placeholder="Pengemudi" value="" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="estimasi_bbm">Estimasi BBM</label>
                                            <input type="text" name="estimasi_bbm" class="form-control" placeholder="estimasi bbm" value="" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="estimasi_tol">Estimasi Tol</label>
                                            <input type="text" name="estimasi_tol" class="form-control" placeholder="estimasi tol" value="" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="manager_AKU_dan_umum">Manager AKU dan Umum</label>
                                            <input type="text" name="manager_AKU_dan_umum" class="form-control" placeholder="manager AKU dan umum" value="" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="manager_tanaman">Manager Tanaman</label>
                                            <input type="text" name="manager_tanaman" class="form-control" placeholder="Manager tanaman" value="" required>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                            <tr>
                                <th>No</th>
                                <th>Bagian</th>
                                <th>Nama Peminta</th>
                                <th>Pimpinan</th>
                                <th>Pelaksana</th>
                                <th>Tanggal</th>
                                <th>Tujuan</th>
                                <th>Status</th>
                                <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($barang as $car)
                  <tr>
                                    <td>{{ $loop->index+1}}</td>
                                    <td>{{ $car->bagian}}</td>
                                    <td>{{ $car->nama_peminta}}</td>
                                    <td>{{ $car->pimpinan1}}</td>
                                    <td>{{ $car->pelaksana1}}</td>
                                    <td>{{ $car->tanggal}}</td>
                                    <td>{{ $car->tujuan}}</td>
                                    <>
                                        @if ($car->status == 'waiting')
                                            <span class="badge badge-warning">Menunggu</span>
                                        @elseif ($car->status == 'approval')
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
@endsection

@push('js')
    <script src="{{ asset('/') }}plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ asset('/') }}plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{ asset('/') }}plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{ asset('/') }}plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="{{ asset('/') }}plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="{{ asset('/') }}plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>


    <script src="{{ asset('/') }}plugins/jquery-validation/jquery.validate.min.js"></script>
    <script src="{{ asset('/') }}plugins/jquery-validation/additional-methods.min.js"></script>
    <script src="{{ asset('/') }}plugins/select2/js/select2.full.min.js"></script>
    <script src="{{ asset('/') }}plugins/sweetalert2/sweetalert2.min.js"></script>

    <script src="{{ asset('/') }}plugins/moment/moment.min.js"></script>
    <script src="{{ asset('/') }}plugins/daterangepicker/daterangepicker.js"></script>

    <script>
        $(document).ready(function() {
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })
            $('#reservation').daterangepicker();
            $('#customCheckbox1').click(function() {
                $('#last-mount-date-input').prop("disabled", this.checked).val("156289");
            });

            $('#quickForm').validate({
                rules: {
                    name: {
                        required: true,
                    },
                    email: {
                        required: true,
                    },
                    role: {
                        required: true,
                    },
                    password: {
                        required: true,
                    },
                },
                messages: {
                    name: {
                        required: "Tidak Boleh Kosong",
                    },
                    email: {
                        required: "Tidak Boleh Kosong",
                    },
                    role: {
                        required: "Tidak Boleh Kosong",
                    },
                    password: {
                        required: "Tidak Boleh Kosong",
                    },
                },
                errorElement: 'span',
                errorPlacement: function(error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                }
            });
        });
    </script>
@endpush
