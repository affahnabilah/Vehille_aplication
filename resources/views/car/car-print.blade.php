<!DOCTYPE html>
<html>

<head>
    <title>Surat Izin Menggunakan Mobil Dinas</title>
    <style>
    html>

<head>
    <title>Surat Izin Menggunakan Mobil Dinas</title>
    <style>
        /* untuk ttd bawah */
        .signature-table {
            width: 100%; /* Mengatur lebar tabel */
            border-collapse: collapse; /* Menghilangkan jarak antar sel */
            margin-top: 100px; /* Jarak atas, bisa disesuaikan */
        }

        .signature {
            text-align: center; /* Memusatkan teks di dalam setiap tanda tangan */
        }

        .signature-line {
            border-top: 1px solid #000; /* Garis tanda tangan */
            width: 200px; /* Lebar garis tanda tangan */
            margin: 50px auto 20px; /* Menambahkan margin atas 20px, bawah 10px, dan tengah */
        }

        .signature p {
            margin: 5px 0; /* Mengatur margin untuk paragraf dalam tanda tangan */
        }

        /* Menambahkan gaya untuk tabel agar terlihat lebih baik */
        .signature-table td {
            padding: 20px; /* Menambahkan padding di dalam sel */
            vertical-align: top; /* Menyelaraskan konten di bagian atas sel */
        }

        .card {
            margin-top: 20px;
        }

        .card-title {
            margin-bottom: 20px;
            font-size: 1 rem; /* Ukuran font untuk judul */
        }

        .small-text {
            font-size: 0.9rem; /* Ukuran font lebih kecil untuk teks lainnya */
            margin: 5px 0; /* Jarak antar paragraf */
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
            table-layout: fixed; /* Mengatur lebar tabel agar tetap */
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        th,
        td {
            padding: 8px;
            text-align: left; /* Mengubah ke left untuk tampilan yang lebih baik */
            overflow: hidden; /* Menghindari teks meluap */
            text-overflow: ellipsis; /* Menampilkan elipsis jika teks terlalu panjang */
            white-space: nowrap; /* Mencegah teks membungkus */
        }

        th {
            background-color: #f2f2f2;
            font-size: 8pt; /* Ukuran font untuk header tabel */
        }

        td {
            font-size: 7pt; /* Ukuran font untuk sel data */
        }

        .footer {
            margin-top: 30px;
            text-align: right;
        }

        /* Kelas untuk status */
        .status-waiting {
            background-color: yellow; /* Kuning */
            color: black; /* Warna teks */
            padding: 5px;
            border-radius: 5px; /* Membuat sudut membulat */
        }

        .status-approval {
            background-color: blue; /* Biru */
            color: white; /* Warna teks */
            padding: 5px;
            border-radius: 5px; /* Membuat sudut membulat */
        }

        .status-rejected {
            background-color: red; /* Merah */
            color: white; /* Warna teks */
            padding: 5px;
            border-radius: 5px; /* Membuat sudut membulat */
        }

        /* CSS untuk media cetak */
        @media print {
            body {
                margin: 0; /* Menghilangkan margin untuk cetakan */
                padding: 0; /* Menghilangkan padding untuk cetakan */
            }

            table {
                page-break-inside: avoid; /* Menghindari pemisahan tabel saat mencetak */
            }

            th,
            td {
                font-size: 10pt; /* Ukuran font untuk cetakan */
            }

            .header,
            .footer {
                display: none; /* Menyembunyikan header dan footer saat mencetak */
            }
        }
    </style>
</head>


<body>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <center>
                        <h3 class="card-title font-weight-bold">IZIN MENINGGALKAN EMPLASMEN MENGGUNAKAN MOBIL DINAS PG KEDAWOENG</h3>
                    </center>
                    <div class="card-body">
                    <table class="table table-bordered" style="margin-top: 20px;">
                            <tr>
                                <td><strong>No. Urut:</strong></td>
                                <td>{{ $car->id }}</td>
                            </tr>
                            <tr>
                                <td><strong>Bagian:</strong></td>
                                <td>{{ $car->bagian }}</td>
                            </tr>
                            <tr>
                                <td><strong>Nama Peminta:</strong></td>
                                <td>{{ $car->nama_peminta }}</td>
                            </tr>
                            <tr>
                                <td><strong>Nama Pengikut:</strong></td>
                                <td><!-- Anda bisa menambahkan nama pengikut di sini jika ada --></td>
                            </tr>
                            <tr>
                                <td><strong>A. Pimpinan:</strong></td>
                                <td>
                                    <p><strong>Pimpinan 1:</strong> {{ $car->pimpinan1 }}</p>
                                    <p><strong>Pimpinan 2:</strong> {{ $car->pimpinan2 }}</p>
                                    <p><strong>Pimpinan 3:</strong> {{ $car->pimpinan3 }}</p>
                                    <p><strong>Pimpinan 4:</strong> {{ $car->pimpinan4 }}</p>
                                    <p><strong>Pimpinan 5:</strong> {{ $car->pimpinan5 }}</p>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>B. Pelaksana:</strong></td>
                                <td>
                                    <p><strong>Pelaksana 1:</strong> {{ $car->pelaksana1 }}</p>
                                    <p><strong>Pelaksana 2:</strong> {{ $car->pelaksana2 }}</p>
                                    <p><strong>Pelaksana 3:</strong> {{ $car->pelaksana3 }}</p>
                                    <p><strong>Pelaksana 4:</strong> {{ $car->pelaksana4 }}</p>
                                    <p><strong>Pelaksana 5:</strong> {{ $car->pelaksana5 }}</p>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>Tujuan:</strong></td>
                                <td>{{ $car->tujuan }}</td>
                            </tr>
                            <tr>
                                <td><strong>Keperluan:</strong></td>
                                <td>{{ $car->keperluan }}</td>
                            </tr>
                            <tr>
                                <td><strong>Tanggal:</strong></td>
                                <td>{{ $car->tanggal }}</td>
                            </tr>
                            <tr>
                                <td><strong>Jam Berangkat:</strong></td>
                                <td>{{ $car->jam_berangkat }}</td>
                            </tr>
                            <tr>
                                <td><strong>Jam Kembali:</strong></td>
                                <td>{{ $car->jam_kembali }}</td>
                            </tr>
                        </tbody>
                    </table>
                
                       <table class="signature-table">
                                <tr>
                                    <td class="signature">
                                        <p><strong>Disetujui</strong></p>
                                        <p><strong>Manager Tanaman</strong></p>
                                        <div class="signature-line"></div>
                                        <p>{{ $car->manager_tanaman }}</p>
                                    </td>
                                    <td class="signature">
                                        <p><strong>Mengetahui</strong></p>
                                        <p><strong>Manager AKU & Umum</strong></p>
                                        <div style="margin-top: 15px;"> <!-- Menambahkan margin-top untuk jarak -->
                                            @if ($car->status == 'waiting')
                                                <span class="status-waiting">Menunggu</span>
                                            @elseif ($car->status == 'approval') <!-- Perbaikan dari 'waiting' menjadi 'approval' -->
                                                <span class="status-approval">Diterima</span>
                                            @else
                                                <span class="status-rejected">Ditolak</span>
                                            @endif
                                          </div>
                                        <div class="signature-line"></div>
                                        <p>{{ $car->manager_AKU_dan_umum }}</p>
                                    </td>
                                    <td class="signature">
                                        <p><strong>Peminta</strong></p>
                                        <p><strong>-</strong></p>
                                        <div class="signature-line"></div>
                                        <p>{{ $car->nama_peminta }}</p>
                                    </td>
                                </tr>
                            </table>
                                </div>
                                </div>
                        </div> <!-- End of card-body -->
                    </div> <!-- End of card -->
                </div> <!-- End of col-md-12 -->
            </div> <!-- End of row -->
        </div> <!-- End of container-fluid -->
    </div> <!-- End of content -->
</body>


    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <p>---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------</p>
                        <div class="text-left">
                            <p class="card-title font-weight-bold">PT SINERGI GULA NUSANTARA</p>
                            <p class="card-title font-weight-bold">PABRIK GULA KEDAWOENG</p>
                        </div>
                        <div class="container" style="display: flex; justify-content: center; align-items: center; margin-top: 50px;">
                            <div class="col-md-4" style="text-align: center;">
                                <p><strong>IZIN PENGUNAAN KENDARAAN</strong></p>
                            </div>
                        </div>
                            <div class="card-body">
                                <table class="table table-bordered" style="max-width: 800px; margin: auto;">
                                    <tbody>
                                    <tr>
                                        <td style="text-align: left;"><strong>Nama Pengikut:</strong></td>
                                        <td style="text-align: left;"><!-- Anda bisa menambahkan nama pengikut di sini jika ada --></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: left;"><strong>A. Pimpinan:</strong></td>
                                        <td style="text-align: left;">
                                            <p><strong>Pimpinan :</strong> {{ $car->pimpinan1 }}</p>
                                            <p><strong>Pimpinan :</strong> {{ $car->pimpinan2 }}</p>
                                            <p><strong>Pimpinan :</strong> {{ $car->pimpinan3 }}</p>
                                            <p><strong>Pimpinan :</strong> {{ $car->pimpinan4 }}</p>
                                            <p><strong>Pimpinan :</strong> {{ $car->pimpinan5 }}</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: left;"><strong>B. Pelaksana:</strong></td>
                                        <td style="text-align: left;">
                                            <p><strong>Pelaksana :</strong> {{ $car->pelaksana1 }}</p>
                                            <p><strong>Pelaksana :</strong> {{ $car->pelaksana2 }}</p>
                                            <p><strong>Pelaksana :</strong> {{ $car->pelaksana3 }}</p>
                                            <p><strong>Pelaksana :</strong> {{ $car->pelaksana4 }}</p>
                                            <p><strong>Pimpinana :</strong> {{ $car->pelaksana5 }}</p>
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
                                        <tr>
                                            <td style="text-align: left;"><strong>Jam Kembali:</strong></td>
                                            <td style="text-align: left;">{{ $car->jam_kembali }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <table class="table table-bordered" style="max-width: 800px; margin: auto; margin-top: 20px;">
                                <tbody>
                                <tr>
                                <td style="text-align: left; "><strong>Jenis Kendaraan:</strong></td>
                                <td style="text-align: left;">{{ $car->jenis_kendaraan }}</td></tr>
                                
                           
                                <tr>
                                <td style="text-align: left; "><strong>No. Polisi:</strong></td>
                                <td style="text-align: left;">{{ $car->nopol }}</td></tr>
                                <tr>
                                <td style="text-align: left; "><strong>Estimasi BBM:</strong></td>
                                <td style="text-align: left;">Rp {{ number_format($car->estimasi_bbm, 0, ',', '.') }}</td>
                            </tr>
                                <tr>
                                <td style="text-align: left; "><strong>Estimasi Tol:</strong></td>
                                <td style="text-align: left;">Rp {{ number_format($car->estimasi_tol, 0, ',', '.') }}</td> 
                            </tr>

                            <tr>
                            <td style="text-align: left; "><strong>Pengemudi:</strong></td>
                                <td style="text-align: left;">{{ $car->pengemudi }}</td>
                            </tr>

                        </tbody>
                    </table>
    
                            <table class="signature-table">
                                <tr>
                                    <td class="signature">
                                        <p><strong>Disetujui</strong></p>
                                        <p><strong>Manager Tanaman</strong></p>
                                        <div class="signature-line"></div>
                                        <p>{{ $car->manager_tanaman }}</p>
                                    </td>
                                    <td class="signature">
                                        <p><strong>Mengetahui</strong></p>
                                        <p><strong>Manager AKU & Umum</strong></p>
                                        <div style="margin-top: 15px;"> <!-- Menambahkan margin-top untuk jarak -->
                                            @if ($car->status == 'waiting')
                                                <span class="status-waiting">Menunggu</span>
                                            @elseif ($car->status == 'approval') <!-- Perbaikan dari 'waiting' menjadi 'approval' -->
                                                <span class="status-approval">Diterima</span>
                                            @else
                                                <span class="status-rejected">Ditolak</span>
                                            @endif
                                          </div>
                                        <div class="signature-line"></div>
                                        <p>{{ $car->manager_AKU_dan_umum }}</p>
                                    </td>
                                    <td class="signature">
                                        <p><strong>Peminta</strong></p>
                                        <p><strong>-</strong></p>
                                        <div class="signature-line"></div>
                                        <p>{{ $car->nama_peminta }}</p>
                                    </td>
                                </tr>
                            </table>
                                </div>
                                </div>
                            </div> <!-- End of card-body -->
                        </div> <!-- End of card -->
                    </div> <!-- End of col-md-12 -->
                </div> <!-- End of row -->
            </div> <!-- End of container-fluid -->
        </div> <!-- End of content -->
    </div>
     <!-- End of content -->
</body>

</html>