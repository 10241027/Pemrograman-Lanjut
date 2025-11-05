<?php include "views/layouts/navbar.php"; ?>
<?php
require_once "models/Merk.php";
$merkModel = new Merk();
$merks = $merkModel->getAll();
?>

<div class="page-content">
    <h2 align="center">➕ Tambah Data Motor</h2>

    <form method="POST" class="form-box">
        <label>Nama Motor:</label>
        <input type="text" name="nama_motor" required>

        <label>Merk:</label>
        <select name="merk_id" required>
            <option value="">-- Pilih Merk --</option>
            <?php foreach ($merks as $m): ?>
                <option value="<?= $m['id_merk'] ?>"><?= $m['merk'] ?></option>
            <?php endforeach; ?>
        </select>

        <label>Tahun Produksi:</label>
        <input type="number" name="tahun_produksi" required>

        <label>Harga:</label>
        <input type="number" name="harga" required>

        <label>Diskon (%):</label>
        <input type="number" name="diskon" required>

        <div class="button-group">
            <button type="submit" class="btn-simpan">Simpan</button>
            <a href="?a=daftar" class="btn-batal">Batal</a>
        </div>
    </form>
</div>

<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f8fafc;
        margin: 0;
    }

    .page-content {
        margin-top: 80px;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    h2 {
        color: #0a3d62;
        margin-bottom: 25px;
        text-align: center;
    }

    .form-box {
        background: #fff;
        padding: 25px 30px;
        border-radius: 12px;
        box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        width: 360px;
    }

    label {
        display: block;
        margin-top: 12px;
        font-weight: bold;
        color: #333;
    }

    input, select {
        width: 100%;
        padding: 8px 10px;
        margin-top: 6px;
        border: 1px solid #ccc;
        border-radius: 6px;
        font-size: 14px;
        box-sizing: border-box;
        transition: 0.2s ease;
    }

    input:focus, select:focus {
        border-color: #007bff;
        outline: none;
        box-shadow: 0 0 4px rgba(0,123,255,0.3);
    }

    .button-group {
        margin-top: 20px;
        text-align: center;
    }

    .btn-simpan, .btn-batal {
        display: inline-block;
        padding: 8px 16px;
        border: none;
        border-radius: 6px;
        font-size: 14px;
        cursor: pointer;
        text-decoration: none;
        color: white;
        transition: 0.2s ease;
    }

    .btn-simpan {
        background-color: #28a745;
        margin-right: 10px;
    }

    .btn-batal {
        background-color: #dc3545;
    }

    .btn-simpan:hover {
        background-color: #218838;
    }

    .btn-batal:hover {
        background-color: #c82333;
    }
</style>
