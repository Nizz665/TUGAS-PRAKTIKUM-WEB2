<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Mahasiswa oleh Muhammad Nizar - 2310010247</title>
  <style>
    body {
      font-family: 'Poppins', 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(135deg, #e8f5e9, #e3f2fd);
      margin: 0;
      padding: 0;
      color: #333;
    }

    h1 {
      text-align: center;
      background-color: #a5d6a7;
      color: #1b5e20;
      padding: 20px 0;
      margin: 0;
      font-weight: 600;
      letter-spacing: 0.5px;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
    }

    .container {
      width: 90%;
      max-width: 520px;
      margin: 50px auto;
      background: #ffffff;
      border-radius: 14px;
      box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
      padding: 30px 35px;
      transition: transform 0.2s ease;
    }

    .container:hover {
      transform: scale(1.01);
    }

    form {
      display: flex;
      flex-direction: column;
    }

    label {
      font-weight: 600;
      margin-bottom: 6px;
      color: #2e7d32;
    }

    input[type="text"],
    select {
      padding: 10px;
      border-radius: 8px;
      border: 1px solid #cfd8dc;
      margin-bottom: 18px;
      font-size: 1em;
      background-color: #f9fbe7;
      transition: all 0.3s ease;
    }

    input[type="text"]:focus,
    select:focus {
      border-color: #81c784;
      background-color: #ffffff;
      outline: none;
      box-shadow: 0 0 6px rgba(129, 199, 132, 0.4);
    }

    select {
      appearance: none;
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%232e7d32' viewBox='0 0 24 24'%3E%3Cpath d='M7 10l5 5 5-5z'/%3E%3C/svg%3E");
      background-repeat: no-repeat;
      background-position: right 10px center;
      background-size: 20px;
    }

    input[type="submit"] {
      background-color: #64b5f6;
      color: white;
      font-weight: 600;
      padding: 12px;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      transition: all 0.3s ease;
      letter-spacing: 0.3px;
    }

    input[type="submit"]:hover {
      background-color: #42a5f5;
      transform: scale(1.03);
    }

    .back-btn {
      display: block;
      margin-top: 20px;
      text-decoration: none;
      color: white;
      background-color: #f48fb1;
      padding: 10px 20px;
      border-radius: 8px;
      text-align: center;
      transition: all 0.3s ease;
      font-weight: 500;
    }

    .back-btn:hover {
      background-color: #ec407a;
      transform: scale(1.03);
    }
  </style>
</head>

<body>
  <h1>Form Edit Mahasiswa</h1>

  <div class="container">
    <form action="<?php echo site_url('mahasiswa/perbaharui/' . $mahasiswa->id_mahasiswa) ?>" method="post">
      <label for="nim">NIM</label>
      <input type="text" name="nim" id="nim" value="<?php echo $mahasiswa->NIM ?>" required>

      <label for="nama_mhs">Nama Mahasiswa</label>
      <input type="text" name="nama_mhs" id="nama_mhs" value="<?php echo $mahasiswa->nama_mhs ?>" required>

      <label for="id_prodi">Program Studi</label>
      <select name="id_prodi" id="id_prodi" required>
        <option value="" disabled>-- Pilih Program Studi --</option>
        <?php foreach ($program_studi as $prodi) : ?>
          <option value="<?= $prodi->id_prodi; ?>" <?php if ($prodi->id_prodi == $mahasiswa->id_prodi) echo 'selected'; ?>>
            <?= $prodi->nama_prodi; ?>
          </option>
        <?php endforeach; ?>
      </select>

      <input type="submit" value="Perbaharui">
    </form>

    <a href="<?= site_url('mahasiswa') ?>" class="back-btn">← Kembali ke Data Mahasiswa</a>
  </div>
</body>

</html>
