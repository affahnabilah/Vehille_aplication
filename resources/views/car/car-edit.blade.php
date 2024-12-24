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
                        <li class="breadcrumb-item"><a href="/car">Car</a></li>
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
                        <form class="needs-validation" novalidate action="/car/{{ $car->id }}" method="POST">
                            @csrf
                            @method('PUT') <!-- Menambahkan method PUT untuk update -->
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="bagian">Bagian</label>
                                            <select name="bagian" class="form-control @error('bagian') is-invalid @enderror" id="bagian" required>
                                                <option value="" disabled>Pilih Bagian</option>
                                                <option value="Tanaman" {{ old('bagian', $car->bagian) == 'Tanaman' ? 'selected' : '' }}>Tanaman</option>
                                                <option value="AKU" {{ old('bagian', $car->bagian) == 'AKU' ? 'selected' : '' }}>AKU</option>
                                                <option value="Teknik" {{ old('bagian', $car->bagian) == 'Teknik' ? 'selected' : '' }}>Teknik</option>
                                                <option value="QE" {{ old('bagian', $car->bagian) == 'QE' ? 'selected' : '' }}>QE</option>
                                                <option value="AK" {{ old('bagian', $car->bagian) == 'AK' ? 'selected' : '' }}>AK</option>
                                                <!-- Tambahkan opsi lain sesuai kebutuhan -->
                                            </select>
                                            @error('bagian')
                                            <span class="invalid-feedback text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="nama_peminta">Nama Peminta</label>
                                            <input type="text" name="nama_peminta" class="form-control @error('nama_peminta') is-invalid @enderror" id="nama_peminta" placeholder="Nama Peminta" value="{{ old('nama_peminta', $car->nama_peminta) }}" required>
                                            @error('nama_peminta')
                                            <span class="invalid-feedback text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="pimpinan1">Pimpinan1</label>
                                    <input type="text" name="pimpinan1" class="form-control @error('pimpinan1') is-invalid @enderror" id="pimpinan1" placeholder="Pimpinan1" value="{{ old('pimpinan1', $car->pimpinan1) }}" required>
                                    @error('pimpinan1')
                                    <span class="invalid-feedback text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="pimpinan2">Pimpinan2</label>
                                    <label for="pimpinan2">Pimpinan2</label>
                                    <input type="text" name="pimpinan2" class="form-control @error('pimpinan2') is-invalid @enderror" id="pimpinan2" placeholder="Pimpinan2" value="{{ old('pimpinan2', $car->pimpinan2) }}">
                                    @error('pimpinan2')
                                    <span class="invalid-feedback text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="pimpinan3">Pimpinan3</label>
                                    <input type="text" name="pimpinan3" class="form-control @error('pimpinan3') is-invalid @enderror" id="pimpinan3" placeholder="Pimpinan3" value="{{ old('pimpinan3', $car->pimpinan3) }}">
                                    @error('pimpinan3')
                                    <span class="invalid-feedback text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="pimpinan4">Pimpinan4</label>
                                    <input type="text" name="pimpinan4" class="form-control @error('pimpinan4') is-invalid @enderror" id="pimpinan4" placeholder="Pimpinan4" value="{{ old('pimpinan4', $car->pimpinan4) }}">
                                    @error('pimpinan4')
                                    <span class="invalid-feedback text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="pimpinan5">Pimpinan5</label>
                                    <input type="text" name="pimpinan5" class="form-control @error('pimpinan5') is-invalid @enderror" id="pimpinan5" placeholder="Pimpinan5" value="{{ old('pimpinan5', $car->pimpinan5) }}">
                                    @error('pimpinan5')
                                    <span class="invalid-feedback text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="pelaksana1">Pelaksana1</label>
                                    <input type="text" name="pelaksana1" class="form-control @error('pelaksana1') is-invalid @enderror" id="pelaksana1" placeholder="Pelaksana1" value="{{ old('pelaksana1', $car->pelaksana1) }}" required>
                                    @error('pelaksana1')
                                    <span class="invalid-feedback text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="pelaksana2">Pelaksana2</label>
                                    <input type="text" name="pelaksana2" class="form-control @error('pelaksana2') is-invalid @enderror" id="pelaksana2" placeholder="Pelaksana2" value="{{ old('pelaksana2', $car->pelaksana2) }}">
                                    @error('pelaksana2')
                                    <span class="invalid-feedback text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="pelaksana3">Pelaksana3</label>
                                    <input type="text" name="pelaksana3" class="form-control @error('pelaksana3') is-invalid @enderror" id="pelaksana3" placeholder="Pelaksana3" value="{{ old('pelaksana3', $car->pelaksana3) }}">
                                    @error('pelaksana3')
                                    <span class="invalid-feedback text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="pelaksana4">Pelaksana4</label>
                                    <input type="text" name="pelaksana4" class="form-control @error('pelaksana4') is-invalid @enderror" id="pelaksana4" placeholder="Pelaksana4" value="{{ old('pelaksana4', $car->pelaksana4) }}">
                                    @error('pelaksana4')
                                    <span class="invalid-feedback text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="pelaksana5">Pelaksana5</label>
                                    <label for="pelaksana5">Pelaksana5</label>
                                    <input type="text" name="pelaksana5" class="form-control @error('pelaksana5') is-invalid @enderror" id="pelaksana5" placeholder="Pelaksana5" value="{{ old('pelaksana5', $car->pelaksana5) }}">
                                    @error('pelaksana5')
                                    <span class="invalid-feedback text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="tujuan">Tujuan</label>
                                    <input type="text" name="tujuan" class="form-control @error('tujuan') is-invalid @enderror" id="tujuan" placeholder="Tujuan" value="{{ old('tujuan', $car->tujuan) }}" required>
                                    @error('tujuan')
                                    <span class="invalid-feedback text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="keperluan">Keperluan</label>
                                    <input type="text" name="keperluan" class="form-control @error('keperluan') is-invalid @enderror" id="keperluan" placeholder="Keperluan" value="{{ old('keperluan', $car->keperluan) }}" required>
                                    @error('keperluan')
                                    <span class="invalid-feedback text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="tanggal">Tanggal</label>
                                    <input type="date" name="tanggal" class="form-control @error('tanggal') is-invalid @enderror" id="tanggal" placeholder="Tanggal" value="{{ old('tanggal', $car->tanggal) }}" required>
                                    @error('tanggal')
                                    <span class="invalid-feedback text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="jam_berangkat">Jam Berangkat</label>
                                    <input type="time" name="jam_berangkat" class="form-control @error('jam_berangkat') is-invalid @enderror" id="jam_berangkat" placeholder="Jam Berangkat" value="{{ old('jam_berangkat', $car->jam_berangkat) }}" required>
                                    @error('jam_berangkat')
                                    <span class="invalid-feedback text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="jam_kembali">Jam Kembali</label>
                                    <input type="time" name="jam_kembali" class="form-control @error('jam_kembali') is-invalid @enderror" id="jam_kembali" placeholder="Jam Kembali" value="{{ old('jam_kembali', $car->jam_kembali) }}" required>
                                    @error('jam_kembali')
                                    <span class="invalid-feedback text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="jenis_kendaraan">Jenis Kendaraan</label>
                                    <input type="text" name="jenis_kendaraan" class="form-control @error('jenis_kendaraan') is-invalid @enderror" id="jenis_kendaraan" placeholder="Jenis Kendaraan" value="{{ old('jenis_kendaraan', $car->jenis_kendaraan) }}" required>
                                    @error('jenis_kendaraan')
                                    <span class="invalid-feedback text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="nopol">Nopol</label>
                                    <input type="text" name="nopol" class="form-control @error('nopol') is-invalid @enderror" id="nopol" placeholder="Nopol" value="{{ old('nopol', $car->nopol) }}" required>
                                    @error('nopol')
                                    <span class="invalid-feedback text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="pengemudi">Pengemudi</label>
                                    <input type="text" name="pengemudi" class="form-control @error('pengemudi') is-invalid @enderror" id="pengemudi" placeholder="Pengemudi" value="{{ old('pengemudi', $car->pengemudi) }}" required>
                                    @error('pengemudi')
                                    <span class="invalid-feedback text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="estimasi_bbm">Estimasi BBM</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Rp</span>
                                        </div>
                                        <input type="text" name="estimasi_bbm" class="form-control @error('estimasi_bbm') is-invalid @enderror" id="estimasi_bbm" placeholder="Estimasi BBM" value="{{ old('estimasi_bbm', $car->estimasi_bbm) }}" required>
                                        @error('estimasi_bbm')
                                        <span class="invalid-feedback text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="estimasi_tol">Estimasi e-Tol</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Rp</span>
                                        </div>
                                        <input type="text" name="estimasi_tol" class="form-control @error('estimasi_tol') is-invalid @enderror" id="estimasi_tol" placeholder="Estimasi Tol" value="{{ old('estimasi_tol', $car->estimasi_tol) }}" required>
                                        @error('estimasi_tol')
                                        <span class="invalid-feedback text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="manager_AKU_dan_umum">Manager AKU dan Umum</label>
                                    <input type="text" name="manager_AKU_dan_umum" class="form-control @error('manager_AKU_dan_umum') is-invalid @enderror" id="manager_AKU_dan_umum" placeholder="Manager AKU dan Umum" value="{{ old('manager_AKU_dan_umum', $car->manager_AKU_dan_umum) }}" required>
                                    @error('manager_AKU_dan_umum')
                                    <span class="invalid-feedback text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="manager_tanaman">Manager Tanaman</label>
                                    <input type="text" name="manager_tanaman" class="form-control @error('manager_tanaman') is-invalid @enderror" id="manager_tanaman" placeholder="Manager Tanaman" value="{{ old('manager_tanaman', $car->manager_tanaman) }}" required>
                                    @error('manager_tanaman')
                                    <span class="invalid-feedback text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <button class="btn btn-dark mr-1" type="reset"><i class="fa-solid fa-arrows-rotate"></i>
                                    Reset</button>
                                <button class="btn btn-success" type="submit"><i class="fa-solid fa-floppy-disk"></i>
                                    Edit</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.content -->
            </div>
        </div>
    </div>
</div>
</div>

@endsection