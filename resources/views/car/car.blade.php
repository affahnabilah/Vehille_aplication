@extends('template.main')
@section('title', 'Digital submission')
@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-20" style="font-family: 'Century schoolbook', sans-serif;">@yield('title')</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          
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
            <!-- /.card-header -->
            <div class="card-body">
              <div class="table-responsive"> <!-- Tambahkan div ini -->
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

    
    <form class="d-inline" action="{{ route('car.detail', ['id' => $data->id]) }}" method="GET">
  <button type="submit" class="btn btn-info btn-sm mr-1">
    <i class="fa-solid fa-eye"></i> Detail
  </button>
</form>
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