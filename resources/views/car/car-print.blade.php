<!DOCTYPE html>
<html>

<head>
  <title>Data Izin meninggalkan Emplasmen Menggunkan mobil Dinas</title>
  <style>
  body {
    font-family: Arial, sans-serif;
  }

  table {
    width: 100%;
    border-collapse: collapse;
  }

  table,
  th,
  td {
    border: 1px solid black;
  }

  th,
  td {
    padding: 8px;
    text-align: center;
  }

  th {
    background-color: #f2f2f2;
  }
  </style>
</head>

<body>
  <h1>Data Pengaju</h1>
  <table>
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
      </tr>
    </thead>
    <tbody>
      @foreach ($t_mobil as $data)
      <tr>
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
                                    <td>{{ $data->tujuan}}</td>
                                    <td>{{ $data->keperluan}}</td>
                                    <td>{{ $data->tanggal}}</td>
                                    <td>{{ $data->jam_berangkat}}</td>
                                    <td>{{ $data->jam_kembali}}</td>
                                    <td>{{ $data->jenis_kendaraan}}</td>
                                    <td>{{ $data->nopol}}</td>
                                    <td>{{ $data->pengemudi}}</td>
                                    <td>{{ $data->estimasi_bbm}}</td>
                                    <td>{{ $data->estimasi_tol}}</td>
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
</body>

</html>