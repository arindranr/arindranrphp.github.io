<?php include('../config/functions.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav>
        <div class="nabar-brand">
            <img src="../images/logo.png" alt="">
        </div>
        <div class="navbar-text">
            <a href="../index.php">Keluar Halaman Admin</a>
        </div>
    </nav>
    <div class="main">
        <div class="menu">
            <a href="index.php">Daftar Bus</a>
            <a href="tambah-data.php">Tambah Data</a>
        </div>
        <div class="content">
            <h1>Data Bus Tersedia</h1>
            <div class="scroll">
                <table>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Bus</th>
                            <th>Fasilitas</th>
                            <th>Jumlah Unit</th>
                            <th>Harga Sewa</th>
                            <th>Gambar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach (getDataBus() as $bus): ?>
                            <?php $fasilitas = explode(",", $bus['fasilitas']); ?>
                            <tr>
                                <td>
                                    <?= $no++ ?>
                                </td>
                                <td>
                                    <?= $bus['nama_bus'] ?>
                                </td>
                                <td>
                                    <?php foreach ($fasilitas as $f): ?>
                                        <?= "- $f<br>" ?>
                                    <?php endforeach; ?>
                                </td>
                                <td>
                                    <?= $bus['jumlah_unit'] ?>
                                </td>
                                <td>
                                    <?= $bus['harga_sewa'] ?>
                                </td>
                                <td>
                                    <img src="gambar-upload/<?= $bus['gambar'] ?>" alt="">
                                </td>
                                <td class="aksi">
                                    <div class="aksii">
                                        <a href="update-data.php?id=<?= $bus['id'] ?>">Edit</a>
                                        <a href="../config/functions.php?idHapus=<?= $bus['id'] ?>"
                                            onclick="return confirm('yakin ingin menghapus?')">Hapus</a>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>