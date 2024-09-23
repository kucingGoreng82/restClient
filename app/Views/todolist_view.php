<!DOCTYPE html>
<html lang="en">
<head>
    <title>Input Kegiatan</title>
</head>
<body>
    <form action="/todolist/simpan" method="post">
        <?= csrf_field() ?>
        <label for="kegiatan">Masukkan Kegiatan :</label>
        <br><input type="text" name="kegiatan" id="kegiatan">
        <input type="submit" value="Simpan">
    </form>

    <h2>Daftar Kegiatan</h2>
    <ol>
        <?php if(!empty($daftarKegiatan) && is_array($daftarKegiatan)) : ?>
            <?php foreach ($daftarKegiatan as $keg) : ?>
                <li>
                    <?= $keg['kegiatan'] ?>
                    <a href="/todolist/selesai/<?= $keg['idKegiatan'] ?>">selesai</a>&nbsp;
                    <a href="/todolist/hapus/<?= $keg['idKegiatan'] ?>">hapus</a>
                </li>
            <?php endforeach ?>
        <?php else : ?>
            <li>Kosong</li>
        <?php endif ?>
    </ol>
</body>
</html>