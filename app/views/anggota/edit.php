<?php include __DIR__ . '/../templates/header.php'; ?>
<?php include __DIR__ . '/../templates/sidebar.php'; ?>

<h2>Edit Anggota</h2>

<form method="POST" action="?action=update&id=<?= intval($data['id']) ?>">
    Nomor Anggota: <input type="text" name="nomor_anggota" value="<?= htmlspecialchars($data['nomor_anggota'], ENT_QUOTES, 'UTF-8') ?>"><br>
    Nama: <input type="text" name="nama" value="<?= htmlspecialchars($data['nama'], ENT_QUOTES, 'UTF-8') ?>"><br>
    Alamat: <textarea name="alamat"><?= htmlspecialchars($data['alamat'], ENT_QUOTES, 'UTF-8') ?></textarea><br>
    Telepon: <input type="text" name="telepon" value="<?= htmlspecialchars($data['telepon'], ENT_QUOTES, 'UTF-8') ?>"><br>
    Email: <input type="email" name="email" value="<?= htmlspecialchars($data['email'], ENT_QUOTES, 'UTF-8') ?>"><br>
    Tanggal Daftar: <input type="date" name="tanggal_daftar" value="<?= htmlspecialchars($data['tanggal_daftar'], ENT_QUOTES, 'UTF-8') ?>"><br>
    Status:
    <select name="status">
        <option value="aktif" <?= $data['status']=="aktif"?"selected":"" ?>>aktif</option>
        <option value="nonaktif" <?= $data['status']=="nonaktif"?"selected":"" ?>>nonaktif</option>
    </select><br>

    <button type="submit">Update</button>
</form>

<?php include __DIR__ . '/../templates/footer.php'; ?>