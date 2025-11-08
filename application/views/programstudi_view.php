<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Program Studi oleh Muhammad Nizar - 2310010247</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #f8f9fa, #e9ecef);
            color: #333;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #0078D7;
            color: white;
            text-align: center;
            padding: 1.5rem 0;
            box-shadow: 0 2px 6px rgba(0,0,0,0.2);
        }

        h1 {
            margin: 0;
            font-size: 1.8rem;
        }

        main {
            padding: 2rem;
            max-width: 900px;
            margin: auto;
        }

        a.tambah-btn {
            display: inline-block;
            background-color: #28a745;
            color: white;
            padding: 10px 16px;
            text-decoration: none;
            border-radius: 6px;
            font-weight: 500;
            transition: 0.3s;
        }

        a.tambah-btn:hover {
            background-color: #218838;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 1.5rem;
            background: white;
            box-shadow: 0 2px 6px rgba(0,0,0,0.1);
            border-radius: 8px;
            overflow: hidden;
        }

        th, td {
            padding: 12px 16px;
            text-align: left;
        }

        thead {
            background-color: #0078D7;
            color: white;
        }

        tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tbody tr:hover {
            background-color: #e8f0fe;
        }

        .aksi a {
            text-decoration: none;
            padding: 6px 12px;
            border-radius: 4px;
            font-size: 0.9rem;
            transition: 0.2s;
        }

        .aksi a:first-child {
            background-color: #ffc107;
            color: black;
        }

        .aksi a:first-child:hover {
            background-color: #e0a800;
        }

        .aksi a:last-child {
            background-color: #dc3545;
            color: white;
        }

        .aksi a:last-child:hover {
            background-color: #c82333;
        }
    </style>

    <script>
        // Fungsi untuk menampilkan pop-up konfirmasi
        function confirmDelete(event, url) {
            event.preventDefault(); // Mencegah link langsung berjalan
            if (confirm("Apakah Anda yakin ingin menghapus data ini?")) {
                window.location.href = url; // Jika dikonfirmasi, arahkan ke URL hapus
            }
        }
    </script>
</head>
<body>

<header>
    <h1>Selamat Datang di Web Muhammad Nizar</h1>
</header>

<main>
    <a href="<?php echo site_url('programstudi/tambah') ?>" class="tambah-btn">+ Tambah Program Studi</a>

    <table>
        <thead>
            <tr>
                <th>NO</th>
                <th>KODE PRODI</th>
                <th>NAMA PRODI</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($program_studi as $row) { ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $row->kode_prodi ?></td>
                    <td><?php echo $row->nama_prodi ?></td>
                    <td class="aksi">
                        <a href="<?php echo site_url('programstudi/edit/' . $row->id_prodi) ?>">Edit</a>
                        <a href="#" onclick="confirmDelete(event, '<?php echo site_url('programstudi/hapus/' . $row->id_prodi) ?>')">Hapus</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</main>

</body>
</html>
