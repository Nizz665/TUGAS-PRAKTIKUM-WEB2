<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cetak Data Mahasiswa oleh Muhammad Nizar - 2310010247</title>
  <style>
    body {
      font-family: 'Poppins', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(135deg, #e8f5e9, #e3f2fd);
      margin: 30px;
      color: #333;
    }

    h1 {
      text-align: center;
      color: #1b5e20;
      background-color: #a5d6a7;
      padding: 15px 0;
      border-radius: 10px;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
      margin-bottom: 30px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    th,
    td {
      padding: 12px 15px;
      text-align: left;
    }

    thead {
      background-color: #81c784;
      color: #1b5e20;
    }

    tbody tr:nth-child(even) {
      background-color: #f1f8e9;
    }

    tbody tr:hover {
      background-color: #dcedc8;
    }

    td {
      border-bottom: 1px solid #c8e6c9;
    }

    @media print {
      body {
        background: white;
        color: black;
        margin: 0;
      }

      h1 {
        box-shadow: none;
        background-color: #a5d6a7;
        color: #1b5e20;
      }

      table {
        box-shadow: none;
        border: 1px solid #c8e6c9;
      }
    }
  </style>
</head>

<body>
  <h1>Data Mahasiswa</h1>

  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>NIM</th>
        <th>Nama Mahasiswa</th>
        <th>Program Studi</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($mahasiswa as $mhs): ?>
        <tr>
          <td><?= $mhs->id_mahasiswa; ?></td>
          <td><?= $mhs->NIM; ?></td>
          <td><?= $mhs->nama_mhs; ?></td>
          <td><?= $mhs->nama_prodi; ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</body>

</html>
