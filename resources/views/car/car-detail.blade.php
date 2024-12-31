@extends('template.main')
@section('title', 'Detail Car')
@section('content')

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">@yield('title')</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item"><a href="/car">Mobil</a></li>
                        <li class="breadcrumb-item active">@yield('title')</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="text-right mb-3">
    <a href="{{ route('car.print', $car->id) }}" target="_blank" class="btn btn-primary">
        <i class="fa-solid fa-print"></i> Print Here
    </a>
</div>

    <div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <center>
                        <h3 class="card-title font-weight-bold">IZIN MENINGGALKAN EMPLASMEN MENGGUNAKAN MOBIL DINAS PG KEDAWOENG</h3>
                    </center>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">

                                <p><strong>No. Urut:</strong> {{ $car->id }}</p>
                                <p><strong>Bagian:</strong> {{ $car->bagian }}</p>
                                <p><strong>Nama Peminta:</strong> Raharno Arif Gunadi </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <p><strong>Nama Pengikut:</strong></p>
                                <!-- Anda bisa menambahkan nama pengikut di sini jika ada -->
                            </div>
                            <div class="col-md-4">
                                <p><strong>A. Pimpinan:</strong></p>
                                <p><strong>Pimpinan 1:</strong> {{ $car->pimpinan1 }}</p>
                                <p><strong>Pimpinan 2:</strong> {{ $car->pimpinan2 }}</p>
                                <p><strong>Pimpinan 3:</strong> {{ $car->pimpinan3 }}</p>
                                <p><strong>Pimpinan 4:</strong> {{ $car->pimpinan4 }}</p>
                                <p><strong>Pimpinan 5:</strong> {{ $car->pimpinan5 }}</p>
                            </div>
                            <div class="col-md-4">
                                <p><strong>B. Pelaksana:</strong></p>
                                <p><strong>Pelaksana 1:</strong> {{ $car->pelaksana1 }}</p>
                                <p><strong>Pelaksana 2:</strong> {{ $car->pelaksana2 }}</p>
                                <p><strong>Pelaksana 3:</strong> {{ $car->pelaksana3 }}</p>
                                <p><strong>Pelaksana 4:</strong> {{ $car->pelaksana4 }}</p>
                                <p><strong>Pelaksana 5:</strong> {{ $car->pelaksana5 }}</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <p><strong>Tujuan:</strong> {{ $car->tujuan }}</p>
                                <p><strong>Keperluan:</strong> {{ $car->keperluan }}</p>
                                <p><strong>Tanggal:</strong> {{ $car->tanggal }}</p>
                                <p><strong>Jam Berangkat:</strong> {{ $car->jam_berangkat }}</p>
                                <p><strong>Jam Kembali:</strong> {{ $car->jam_kembali }}</p>
                            </div>
                        </div>

                        <div class="signature-section" style="margin-top: 30px;">
                            <div class="row justify-content-end">
                                <div class="col-md-4 text-center d-flex flex-column align-items-center">
                                    <p><strong>Disetujui</strong></p>
                                    <p><strong>Manager Tanaman</strong></p>
                                    <div style="border-top: 1px solid #000; width: 200px; margin: 20px auto;"></div>
                                    <p>{{ $car->manager_tanaman }}</p>
                                </div>
                                <div class="col-md-4 text-center d-flex flex-column align-items-center">
                                    <p><strong>Mengetahui</strong></p>
                                    <p><strong>Manager AKU & Umum</strong></p>
                                    <div style="border-top: 1px solid #000; width: 200px; margin: 20px auto;"></div>
                                    <p>{{ $car->manager_AKU_dan_umum }}</p>
                                </div>
                                <div class="col-md-4 text-center d-flex flex-column align-items-center">
                                    <p><strong>Peminta</strong></p>
                                    <p style="margin-top: 10px;">
                                    @if ($car->status == 'waiting')
                                        <span class="status-waiting">Menunggu</span>
                                    @elseif ($car->status == 'approval')
                                        <span class="status-approval">Diterima</span>
                                    @else
                                        <span class="status-rejected">Ditolak</span>
                                    @endif
                                </p>
                                    <div style="border-top: 1px solid #000; width: 200px; margin: 20px auto;"></div>
                                    <p>{{ $car->nama_peminta }}</p>
                                </div>
                            </div>
                        </div>
                    </div> <!-- End of card-body -->
                </div> <!-- End of card -->
            </div> <!-- End of col-md-12 -->
        </div> <!-- End of row -->
    </div> <!-- End of container-fluid -->
</div> <!-- End of content -->
                                    
 <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                    <p>---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>
                   <center>
                        <p class="card-title font-weight-bold">PT SINERGI GULA NUSANTARA</p>
                    </center>
                    <center>
                        <p class="card-title font-weight-bold">PABRIK GULA KEDAWOENG</p>
                    </center>
                    <head>
                        <meta charset="UTF-10">
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                        <title>Judul Geser ke Kanan</title>
                        <style>
                            .container {
                                text-align: right; /* Menggeser teks ke kanan */
                                margin-top: 50px; /* Jarak atas (opsional) */
                            }
        
                        </style>
                    </head>
                    <body>
                    <div class="container">
    <div class="col-md-4">
        <p><strong>IZIN PENGUNAAN KENDARAAN</strong></p>
    </div>
    <div class="card-body">
        <table class="table table-bordered" style="max-width: 800px; margin: auto;">
            <tbody>
                <tr>
                    <td style="text-align: left;"><strong>No. Urut:</strong></td>
                    <td style="text-align: left;">{{ $car->id }}</td>
                </tr>
                <tr>
                    <td style="text-align: left;"><strong>Bagian:</strong></td>
                    <td style="text-align: left;">{{ $car->bagian }}</td>
                </tr>
                <tr>
                    <td style="text-align: left;"><strong>Nama Peminta:</strong></td>
                    <td style="text-align: left;"> Raharno Arif Gunadi</td>
                </tr>
                <tr>
                    <td style="text-align: left;"><strong>Nama Pengikut:</strong></td>
                    <td style="text-align: left;"><!-- Anda bisa menambahkan nama pengikut di sini jika ada --></td>
                </tr>
                <tr>
                    <td style="text-align: left;"><strong>A. Pimpinan:</strong></td>
                    <td style="text-align: left;">
                        <p><strong>Pimpinan 1:</strong> {{ $car->pimpinan1 }}</p>
                        <p><strong>Pimpinan 2:</strong> {{ $car->pimpinan2 }}</p>
                        <p><strong>Pimpinan 3:</strong> {{ $car->pimpinan3 }}</p>
                        <p><strong>Pimpinan 4:</strong> {{ $car->pimpinan4 }}</p>
                        <p><strong>Pimpinan 5:</strong> {{ $car->pimpinan5 }}</p>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: left;"><strong>B. Pelaksana:</strong></td>
                    <td style="text-align: left;">
                        <p><strong>Pelaksana 1:</strong> {{ $car->pelaksana1 }}</p>
                        <p><strong>Pelaksana 2:</strong> {{ $car->pelaksana2 }}</p>
                        <p><strong>Pelaksana 3:</strong> {{ $car->pelaksana3 }}</p>
                        <p><strong>Pelaksana 4:</strong> {{ $car->pelaksana4 }}</p>
                        <p><strong>Pimpinan 5:</strong> {{ $car->pelaksana5 }}</p>
                    </td>
                </tr>
                <tr>
                    <td style="text-align: left;"><strong>Tujuan:</strong></td>
                    <td style="text-align: left;">{{ $car->tujuan }}</td>
                </tr>
                <tr>
                    <td style="text-align: left;"><strong>Keperluan:</strong></td>
                    <td style="text-align: left;">{{ $car->keperluan }}</td>
                </tr>
                <tr>
                    <td style="text-align: left;"><strong>Tanggal:</strong></td>
                    <td style="text-align: left;">{{ $car->tanggal }}</td>
                </tr>
                <tr>
                    <td style="text-align: left;"><strong>Jam Berangkat:</strong></td>
                    <td style="text-align: left;">{{ $car->jam_berangkat }}</td>
                </tr>
            </tbody>
        </table>

        <table class="table table-bordered" style="max-width: 800px; margin: auto; margin-top: 20px;">
            <tbody>
            <tr>
            <td style="text-align: left; width: 35%;"><strong>Jenis Kendaraan:</strong></td>
            <td style="text-align: left;">{{ $car->jenis_kendaraan }}</td>
            <td style="text-align: left; width: 35%;"><strong>Estimasi BBM:</strong></td>
            <td style="text-align: left;">Rp {{ number_format($car->estimasi_bbm, 0, ',', '.') }}</td>
        <tr>
            <td style="text-align: left; width: 35%;"><strong>No. Polisi:</strong></td>
            <td style="text-align: left;">{{ $car->nopol }}</td>
            <td style="text-align: left; width: 35%;"><strong>Estimasi Tol:</strong></td>
            <td style="text-align: left;">Rp {{ number_format($car->estimasi_tol, 0, ',', '.') }}</td>
        </tr>
                <tr>
                <td style="text-align: left;"><strong>Pengemudi:</strong></td>
                    <td style="text-align: left;">{{ $car->pengemudi }}</td>
                </tr>
            </tbody>
        </table>

        <div class="signature-section" style="margin-top: 50px;">
            <div class="row justify-content-end">
                <div class="col-md-4 text-center d-flex flex-column align-items-center">
                    <p><strong>Disetujui</strong></p>
                    <p><strong>Manager Tanaman</strong></p>
                    <div style="border-top: 1px solid #000; width: 200px; margin: 20px auto;"></div>
                    <p>{{ $car->manager_tanaman }}</p>
                </div>
                <div class="col-md-4 text-center d-flex flex-column align-items-center">
                    <p><strong>Mengetahui</strong></p>
                    <p><strong>Manager AKU & Umum</strong></p>
                    <div style="border-top: 1px solid #000; width: 200px; margin: 20px auto;"></div>
                    <p>{{ $car->manager_AKU_dan_umum }}</p>
                </div>
                <div class="col-md-4 text-center d-flex flex-column align-items-center">
                    <p><strong>Peminta</strong></p>
                    <p><strong>-</strong></p>
                    <div style="border-top: 1px solid #000; width: 200px; margin: 20px auto;"></div>
                    <p>{{ $car->nama_peminta }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
        </div>
    </div>
</div>
                                    <hr>
                                    <div class="card-footer text-right"> <!-- Atau gunakan text-end untuk Bootstrap 5 -->
                                        <a href="{{ route('car.index') }}" class="btn btn-primary">Kembali</a>
                                    </div>
                                </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection