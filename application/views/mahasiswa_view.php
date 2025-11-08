<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Mahasiswa oleh Muhammad Nizar - 2310010247</title>
  <style>
    body {
      font-family: 'Poppins', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(to right, #e8f5e9, #e3f2fd);
      margin: 0;
      padding: 0;
      color: #333;
    }

    h1 {
      text-align: center;
      background-color: #a5d6a7;
      color: #2e7d32;
      padding: 20px 0;
      margin: 0;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
      font-weight: 600;
      letter-spacing: 0.5px;
    }

    .container {
      width: 90%;
      max-width: 900px;
      margin: 40px auto;
      background: #fffdf9;
      border-radius: 14px;
      box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
      padding: 30px;
    }

    .tambah-btn {
      display: inline-block;
      background-color: #81c784;
      color: white;
      text-decoration: none;
      padding: 10px 20px;
      border-radius: 8px;
      transition: background-color 0.3s ease, transform 0.2s ease;
      margin-bottom: 15px;
      font-weight: 500;
    }

    .tambah-btn:hover {
      background-color: #66bb6a;
      transform: scale(1.03);
    }

    a.cetak-btn {
      display: inline-block;
      background-color: #90caf9;
      color: white;
      text-decoration: none;
      padding: 10px 20px;
      border-radius: 8px;
      margin-left: 10px;
      transition: background-color 0.3s ease, transform 0.2s ease;
      font-weight: 500;
    }

    a.cetak-btn:hover {
      background-color: #64b5f6;
      transform: scale(1.03);
    }

    table {
      width: 100%;
      border-collapse: collapse;
      text-align: left;
      margin-top: 10px;
      border-radius: 10px;
      overflow: hidden;
    }

    thead {
      background-color: #c8e6c9;
      color: #2e7d32;
    }

    th, td {
      padding: 12px 15px;
    }

    tbody tr:nth-child(even) {
      background-color: #f9fbe7;
    }

    tbody tr:nth-child(odd) {
      background-color: #f1f8e9;
    }

    tbody tr:hover {
      background-color: #e8f5e9;
    }

    a.action-btn {
      text-decoration: none;
      color: white;
      padding: 6px 12px;
      border-radius: 5px;
      transition: all 0.3s ease;
      font-size: 0.9em;
    }

    .edit-btn {
      background-color: #4fc3f7;
    }

    .edit-btn:hover {
      background-color: #29b6f6;
    }

    .hapus-btn {
      background-color: #f48fb1;
    }

    .hapus-btn:hover {
      background-color: #ec407a;
    }

    .aksi {
      display: flex;
      gap: 8px;
    }

    /* Animasi lembut saat hover baris */
    tbody tr {
      transition: background-color 0.3s ease;
    }
  </style>
</head>

<body>
  <h1>Selamat Datang di Web Muhammad Nizar</h1>

  <div class="container">
    <a href="<?php echo site_url('mahasiswa/tambah') ?>" class="tambah-btn">+ Tambah Mahasiswa</a>
    <a href="<?php echo site_url('mahasiswa/cetak') ?>" class="cetak-btn">Cetak</a>

    <table>
      <thead>
        <tr>
          <th>NO</th>
          <th>NIM</th>
          <th>Nama</th>
          <th>Program Studi</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $no = 1;
        foreach ($mahasiswa as $row) {
        ?>
          <tr>
            <td><?= $no++; ?></td>
            <td><?= $row->NIM; ?></td>
            <td><?= $row->nama_mhs; ?></td>
            <td><?= $row->nama_prodi; ?></td>
            <td class="aksi">
              <a href="<?php echo site_url('mahasiswa/edit/' . $row->id_mahasiswa) ?>" class="action-btn edit-btn">Edit</a>
              <a href="<?php echo site_url('mahasiswa/hapus/' . $row->id_mahasiswa) ?>" class="action-btn hapus-btn" onclick="return confirm('Yakin ingin menghapus data?')">Hapus</a>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</body>

</html>
