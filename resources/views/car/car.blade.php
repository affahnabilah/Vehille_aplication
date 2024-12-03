@extends('template.main')
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
                    <th></th>
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
                    <td>
                      <a href="#" data-toggle="collapse" data-target="#collapse-{{ $data->id }}">
                        <i class="fa-solid fa-plus"></i>
                      </a>
                    </td>
    <td>{{ $loop->index + 1 }}</td>
    <td>{{ $data->bagian }}</td>
    <td>{{ $data->nama_peminta }}</td>
    <td>{{ $data->pimpinan1 }}</td>
    <td>{{ $data->pelaksana1 }}</td>
    <td>{{ $data->tujuan }}</td>
    <td>{{ $data->tanggal }}</td>
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
  
        <form class="d-inline" action="/car/{{ $data->id }}/edit" method="GET">
                        <button type="submit" class="btn btn-warning btn-sm mr-1" style="color: white;">
                          <i class="fa-solid fa-pen"></i> Edit
                        </button>
                      </form>
        <!-- Form untuk delete -->
        <form class="d-inline" action="{{ route('car.destroy', $data->id) }}" method="POST">
        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger btn-sm" id="btn-delete"><i
                            class="fa-solid fa-trash-can"></i> Delete
                            </button>
        </form>
    </td>
</tr>
<tr id="collapse-{{ $data->id }}" class="collapse">
                    <td colspan="10">
                        <div>
                            <strong>Detail:</strong>
                             @if ($data->pimpinan2)
                    <p>pimpinan2: {{ $data->pimpinan2 }}</p>
                @endif
                @if ($data->pimpinan3)
                    <p>pimpinan3: {{ $data->pimpinan3 }}</p>
                @endif
                @if ($data->pimpinan4)
                    <p>Pimpinan4: {{ $data->pimpinan4 }}</p>
                @endif
                @if ($data->pimpinan5)
                    <p>pimpinan5: {{ $data->pimpinan5 }}</p>
                @endif
                             @if ($data->pelaksana2)
                    <p>pelaksana2: {{ $data->pelaksana2 }}</p>
                @endif
                @if ($data->pelaksana3)
                    <p>pelaksana3: {{ $data->pelaksana3 }}</p>
                @endif
                @if ($data->pelaksana4)
                    <p>pelaksana4: {{ $data->pelaksana4 }}</p>
                @endif
                @if ($data->pelaksana5)
                    <p>pelaksana5: {{ $data->pelaksana5 }}</p>
                @endif
                            <p>keperluan: {{ $data->keperluan }}</p>
                            <p>jam berangkat: {{ $data->jam_berangkat }}</p>
                            <p>jam kembali: {{ $data->jam_kembali }}</p>
                            <p>jenis kendaraan: {{ $data->jenis_kendaraan }}</p>
                            <p>nopol: {{ $data->nopol }}</p>
                            <p>pengemudi: {{ $data->pengemudi }}</p>
                            <p>estimasi_bbm: Rp {{ number_format($data->estimasi_bbm, 0, ',', '.') }}</p>
                            <p>estimasi_tol: Rp {{ number_format($data->estimasi_tol, 0, ',', '.') }}</p>
                            <p>manager_AKU_umum: {{ $data->manager_AKU_umum }}</p>
                            <p>manager_tanaman: {{ $data->manager_tanaman }}</p>
                            <p>Status: {{ $data->status }}</p>
                        </div>
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