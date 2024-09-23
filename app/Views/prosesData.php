<!DOCTYPE html>
<html lang="en">
<head>
    <title>Status Kelulusan Mahasiswa</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        a {
            display: block;
            margin-top: 20px;
            text-decoration: none;
            color: #007BFF;
        }
        a:hover {
            color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php if ($status === 'Lulus'): ?>
            <h2>Status Kelulusan Mahasiswa</h2>
            <p>Mahasiswa dengan nama <strong><?= htmlspecialchars($nama) ?></strong> 
            NIM <strong><?= htmlspecialchars($nim) ?></strong> berhasil menyelesaikan 
            studi S1 dengan hasil yang memuaskan.</p>
        <?php else: ?>
            <h2>Status Kelulusan Mahasiswa</h2>
            <p>Mahasiswa dengan nama <strong><?= htmlspecialchars($nama) ?></strong> 
            NIM <strong><?= htmlspecialchars($nim) ?></strong> dengan berat hati kami 
            nyatakan anda tidak berhasil menyelesaikan studi S1.</p>
        <?php endif; ?>
        <a href="/loginMahasiswa">Kembali ke Halaman Input</a>
    </div>
</body>
</html>
