<?php include "views/layouts/navbar.php"; ?>

<div class="page-content">
    <h2 align="center">➕ Tambah Data Merk</h2>

    <form method="POST" class="form-box">
        <label>Nama Merk:</label>
        <input type="text" name="merk" required>

        <label>Nama Perusahaan:</label>
        <input type="text" name="nama_perusahaan" required>

        <div class="button-group">
            <button type="submit" class="btn-simpan">Simpan</button>
            <a href="?c=merk&a=index" class="btn-batal">Batal</a>
        </div>
    </form>
</div>

<style>
    body { font-family: Arial, sans-serif; background-color: #f8fafc; margin: 0; }
    .page-content { margin-top: 70px; display: flex; flex-direction: column; align-items: center; }

    h2 { color: #0a3d62; margin-bottom: 20px; }

    .form-box {
        background: white;
        padding: 25px 30px;
        border-radius: 10px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        width: 350px;
    }

    label { display: block; font-weight: bold; margin-top: 10px; color: #333; }
    input { width: 100%; padding: 8px; margin-top: 5px; border-radius: 5px; border: 1px solid #ccc; }

    .button-group { margin-top: 20px; text-align: center; }
    .btn-simpan, .btn-batal {
        padding: 8px 16px;
        border: none;
        border-radius: 5px;
        color: white;
        cursor: pointer;
        text-decoration: none;
    }
    .btn-simpan { background: #28a745; }
    .btn-batal { background: #dc3545; }
    .btn-simpan:hover, .btn-batal:hover { opacity: 0.85; }
</style>
