<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Program Studi oleh Muhammad Nizar - 2310010247</title>
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
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
        }

        h1 {
            margin: 0;
            font-size: 1.8rem;
        }

        main {
            max-width: 600px;
            margin: 3rem auto;
            background-color: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        label {
            font-weight: 600;
            margin-bottom: 0.3rem;
        }

        input[type="text"] {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 1rem;
            width: 100%;
        }

        .button-group {
            display: flex;
            justify-content: space-between;
            margin-top: 1rem;
        }

        input[type="submit"],
        .back-btn {
            display: inline-block;
            padding: 10px 20px;
            border: none;
            border-radius: 6px;
            font-size: 1rem;
            cursor: pointer;
            font-weight: 500;
            transition: 0.3s;
            text-decoration: none;
            text-align: center;
        }

        input[type="submit"] {
            background-color: #28a745;
            color: white;
        }

        input[type="submit"]:hover {
            background-color: #218838;
        }

        .back-btn {
            background-color: #dc3545;
            color: white;
        }

        .back-btn:hover {
            background-color: #c82333;
        }
    </style>
</head>

<body>
    <header>
        <h1>Form Tambah Program Studi</h1>
    </header>

    <main>
        <form action="<?= site_url('programstudi/simpan') ?>" method="post">
            <div>
                <label for="kode_prodi">KODE PRODI</label>
                <input type="text" name="kode_prodi" required>
            </div>

            <div>
                <label for="nama_prodi">Nama Prodi</label>
                <input type="text" name="nama_prodi" required>
            </div>

            <div class="button-group">
                <a href="<?= site_url('programstudi') ?>" class="back-btn">Kembali</a>
                <input type="submit" value="Simpan">
            </div>
        </form>
    </main>
</body>

</html>
