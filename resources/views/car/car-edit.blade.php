@extends('template.main')
@section('title', 'Edit Car')
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
                        <li class="breadcrumb-item"><a href="/car">Data Pengaju</a></li>
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
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="text-right">
                                <a href="/car" class="btn btn-warning btn-sm"><i class="fa-solid fa-arrow-rotate-left"></i>
                                    Back
                                </a>
                            </div>
                        </div>
                        <form class="needs-validation" novalidate action="/car/{{ $car->id_car }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                        <label for="bagian">Bagian</label>
                                            <input type="text" name="bagian" class="form-control @error('bagian') is-invalid @enderror" id="bagian" placeholder="Bagian" value="{{old('bagian')}}" required>
                                            @error('bagian')
                                            <span class="invalid-feedback text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="nama_peminta">Nama Peminta</label>
                                            <input type="text" name="nama_peminta" class="form-control @error('nama_peminta') is-invalid @enderror" id="nama_peminta" placeholder="Nama peminta" value="{{old('nama_peminta')}}" required>
                                            @error('nama_peminta')
                                            <span class="invalid-feedback text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="pimpinan">Pemakai kendaraan</label>
                                            <input type="text" name="pimpinan" class="form-control @error('pimpinan') is-invalid @enderror" id="pimpinan" placeholder="Pimpinan" value="{{old('pimpinan')}}" required>
                                            @error('pimpinan')
                                            <span class="invalid-feedback text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="pelaksana">Pelaksana</label>
                                            <input type="text" name="pelaksana" class="form-control @error('pelaksana') is-invalid @enderror" id="pelaksana" placeholder="Pelaksana" value="{{old('pelaksana')}}" required>
                                            @error('pelaksana')
                                            <span class="invalid-feedback text-danger">{{ $message }}</span>
                                            @enderror
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
                                            <input type="text" name="keperluan" class="form-control @error('keperluan') is-invalid @enderror" id="bagian" placeholder="Keperluan" value="{{old('keperluan')}}" required>
                                            @error('keperluan')
                                            <span class="invalid-feedback text-danger">{{ $message }}</span>
                                            @enderror

                                        <div class="form-group">
                                            <label for="tanggal">Tanggal</label>
                                            <input type="date" name="tanggal" class="form-control @error('tanggal') is-invalid @enderror" id="tanggal" placeholder="Tanggal" value="{{old('tanggal')}}" required>
                                            @error('tanggal')
                                            <span class="invalid-feedback text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="jam_berangkat">Jam Berangkat</label>
                                            <input type="time" name="jam_berangkat" class="form-control @error('jam_berangkat') is-invalid @enderror" id="jam_berangkat" placeholder="Jam Berangkat" value="{{old('jam_berangkat')}}" required>
                                            @error('jam_berangkat')
                                            <span class="invalid-feedback text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        </div>
                                        <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="jam_kembali">Jam Kembali</label>
                                            <input type="time" name="jam_kembali" class="form-control @error('jam_kembali') is-invalid @enderror" id="jam_kembali" placeholder="Jam Kembali" value="{{old('jam_kembali')}}" required>
                                            @error('jam_kembali')
                                            <span class="invalid-feedback text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="jenis_kendaraan">Jenis Kendaraan</label>
                                            <input type="text" name="jenis_kendaraan" class="form-control@error('jenis_kendaraan') is-invalid @enderror" id="jenis_kendaraan" placeholder="Jenis Kendaraan" value="{{old('jenis_kendaraan')}}" required>
                                            @error('jenis_kendaraan')
                                            <span class="invalid-feedback text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="nopol">Nopol</label>
                                            <input type="text" name="nopol" class="form-control @error('nopol') is-invalid @enderror" id="nopol" placeholder="Nopol" value="{{old('nopol')}}" required>
                                            @error('nopol')
                                            <span class="invalid-feedback text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="pengemudi">Pengemudi</label>
                                            <input type="text" name="pengemudi" class="form-control @error('pengemudi') is-invalid @enderror" id="pengemudi" placeholder="Pengemudi" value="{{old('pengemudi')}}" required>
                                            @error('pengemudi')
                                            <span class="invalid-feedback text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="estimasi_bbm">Estimasi BBM</label>
                                            <input type="text" name="estimasi_bbm" class="form-control @error('estimasi_bbm') is-invalid @enderror" id="estimasi_bbm" placeholder="Estimasi Bbm" value="{{old('estimasi_bbm')}}" required>
                                            @error('estimasi_bbm')
                                            <span class="invalid-feedback text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <class="form-group">
                                            <label for="estimasi_tol">Estimasi Tol</label>
                                            <input type="text" name="estimasi_tol" class="form-control @error('estimasi_tol') is-invalid @enderror" id="estimasi_tol" placeholder="Estimasi Tol" value="{{old('estimasi_tol')}}" required>
                                            @error('estimasi_tol')
                                            <span class="invalid-feedback text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <button class="btn btn-dark mr-1" type="reset"><i class="fa-solid fa-arrows-rotate"></i>
                                    Reset</button>
                                <button class="btn btn-success" type="submit"><i class="fa-solid fa-floppy-disk"></i>
                                    Save</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.content -->
            </div>
        </div>
    </div>
</div>

@endsection