<?php include "views/layouts/navbar.php"; ?>

<div class="page-content">
    <h2 align="center">🏍️ Daftar Motor di Dealer</h2>
    <div style="text-align:center; margin-bottom: 20px;">
        <a href="index.php?c=motor&a=create" class="btn-tambah">➕ TAMBAH MOTOR</a>
    </div>

    <table>
        <tr>
            <th>ID</th>
            <th>Nama Motor</th>
            <th>Merk</th>
            <th>Tahun Produksi</th>
            <th>Harga</th>
            <th>Diskon</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($motors as $m): ?>
        <tr>
            <td><?= $m['id_motor'] ?></td>
            <td><?= $m['nama_motor'] ?></td>
            <td><?= $m['merk'] ?></td>
            <td><?= $m['tahun_produksi'] ?></td>
            <td><?= number_format($m['harga'], 0, ',', '.') ?></td>
            <td><?= $m['diskon'] ?>%</td>
            <td>
                <a class="button edit" href="?a=edit&id=<?= $m['id_motor'] ?>">Edit</a>
                <a class="button delete" href="?a=delete&id=<?= $m['id_motor'] ?>" onclick="return confirm('Yakin hapus data ini?')">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>

<style>
    body { font-family: Arial, sans-serif; background-color: #f8fafc; margin: 0; }
    .page-content { margin-top: 70px; padding-bottom: 50px; }

    h2 { color: #0a3d62; text-align: center; margin-bottom: 20px; }

    table { width: 80%; margin: 0 auto; border-collapse: collapse; box-shadow: 0 2px 8px rgba(0,0,0,0.1); background: white; border-radius: 8px; overflow: hidden; }
    th, td { padding: 12px; border: 1px solid #ddd; text-align: center; }
    th { background: #007BFF; color: white; }

    a.button { padding: 6px 14px; color: white; border-radius: 5px; text-decoration: none; font-size: 14px; }
    a.button.edit { background: #28a745; }
    a.button.delete { background: #dc3545; }
    a.button:hover { opacity: 0.8; }
</style>

<style>
.btn-tambah {
    display: inline-block;
    background-color: #000;
    color: #fff;
    padding: 10px 22px;
    border-radius: 8px;
    font-weight: bold;
    text-decoration: none;
    font-size: 15px;
    letter-spacing: 0.5px;
    transition: all 0.3s ease;
    box-shadow: 0 2px 6px rgba(0,0,0,0.15);
}

.btn-tambah:hover {
    background-color: #007bff;
    color: #fff;
    transform: scale(1.05);
    box-shadow: 0 4px 10px rgba(0,0,0,0.25);
}
</style>