<!DOCTYPE html>
<html>

<head>
  <title>Surat Izin Menggunakan Mobil Dinas</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 20px;
    }

    h1 {
      text-align: center;
    }

    .header {
      text-align: center;
      margin-bottom: 20px;
    }

    .date {
      text-align: right;
      margin-bottom: 20px;
    }

    .recipient {
      margin-bottom: 20px;
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
      text-align: center;
      overflow: hidden; /* Menghindari teks meluap */
      text-overflow: ellipsis; /* Menampilkan elipsis jika teks terlalu panjang */
      white-space: nowrap; /* Mencegah teks membungkus */
    }

    th {
      background-color: #f2f2f2;
      font-size: 6pt; /* Mengatur ukuran font untuk header tabel */
    }

    td {
      font-size: 5pt; /* Ukuran font untuk sel data */
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
    .status-waiting {
      background-color: yellow !important; /* Kuning */
      color: black !important; /* Warna teks */
    }

    .status-approval {
      background-color: blue !important; /* Biru */
      color: white !important; /* Warna teks */
    }

    .status-rejected {
      background-color: red !important; /* Merah */
      color: white !important; /* Warna teks */
    }
  }
</style>
</head>

<body>
  <div class="header">
    <h1>Surat Izin Menggunakan Mobil Dinas</h1>
  </div>

  <div class="date">
    <p>{{ date('d F Y') }}</p> <!-- Tanggal saat ini -->
  </div>

  <div class="recipient">
    <p>Kepada Yth,</p>
    <p>Nama Penerima</p>
    <p>Jabatan Penerima</p>
    <p>Alamat Penerima</p>
  </div>

  <p>Dengan hormat,</p>
  <p>Berikut adalah data pengajuan izin Menggunakan Mobil Dinas PG Kedawoeng:</p>

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
      </tr>
    </thead>
    <tbody>
      @foreach ($cars as $data)
      <tr>
        <td>{{ $loop->index + 1 }}</td>
        <td>{{ $data->bagian }}</td>
        <td>{{ $data->nama_peminta }}</td>
        <td>{{ $data->pimpinan }}</td>
        <td>{{ $data->pelaksana }}</td>
        <td>{{ $data->tujuan }}</td>
        <td>{{ $data->keperluan }}</td>
        <td>{{ $data->tanggal }}</td>
        <td>{{ $data->jam_berangkat }}</td>
        <td>{{ $data->jam_kembali }}</td>
      </tr>
      </tr>
      @endforeach
    </tbody>
  </table>

  <table>
    <thead>
      <tr>
        <th>Jenis Kendaraan</th>
        <th>Nopol</th>
        <th>Pengemudi</th>
        <th>Estimasi BBM</th>
        <th>Estimasi Tol</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($cars as $data)
      <tr>
        <td>{{ $data->jenis_kendaraan }}</td>
        <td>{{ $data->nopol }}</td>
        <td>{{ $data->pengemudi }}</td>
        <td>{{ $data->estimasi_bbm }}</td>
        <td>{{ $data->estimasi_tol }}</td>
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

  

  <div class="footer">
    <p>Manager AKU dan Umum</p>
    <p>____________________</p> <!-- Garis untuk tanda tangan -->
    <p>Nama Manager</p>
    <img src="" style="width: 150px; height: auto;" /> <!-- Gambar tanda tangan -->
  </div>
</body>

</html>