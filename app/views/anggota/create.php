<?php include __DIR__ . '/../templates/header.php'; ?>
<?php include __DIR__ . '/../templates/sidebar.php'; ?>

<div class="container-fluid">
<h1 class="h3 mb-4">Tambah Anggota</h1>

<div class="card shadow">
<div class="card-body">

<form method="POST" action="?action=store">

<div class="form-group">
<label>Nomor Anggota</label>
<input type="text" name="nomor_anggota" class="form-control">
</div>

<div class="form-group">
<label>Nama</label>
<input type="text" name="nama" class="form-control" required>
</div>

<div class="form-group">
<label>Alamat</label>
<textarea name="alamat" class="form-control"></textarea>
</div>

<div class="form-group">
<label>Telepon</label>
<input type="text" name="telepon" class="form-control">
</div>

<div class="form-group">
<label>Email</label>
<input type="email" name="email" class="form-control" required>
</div>

<div class="form-group">
<label>Tanggal Daftar</label>
<input type="date" name="tanggal_daftar" class="form-control">
</div>

<div class="form-group">
<label>Status</label>
<select name="status" class="form-control">
    <option value="aktif">Aktif</option>
    <option value="nonaktif">Nonaktif</option>
</select>
</div>

<button class="btn btn-success">Simpan</button>

</form>

</div>
</div>
</div>

<?php include __DIR__ . '/../templates/footer.php'; ?>