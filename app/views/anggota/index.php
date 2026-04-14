<?php include __DIR__ . '/../templates/header.php'; ?>
<?php include __DIR__ . '/../templates/sidebar.php'; ?>

<div class="container-fluid">

<h1 class="h3 mb-4 text-gray-800">Data Anggota</h1>

<a href="?action=create" class="btn btn-primary mb-3">Tambah</a>

<div class="card shadow">
<div class="card-body">

<table class="table table-bordered" id="dataTable">
<thead>
<tr>
    <th>No</th>
    <th>Nomor Anggota</th>
    <th>Nama</th>
    <th>Telepon</th>
    <th>Email</th>
    <th>Status</th>
    <th>Aksi</th>
</tr>
</thead>

<tbody>
<?php $no=1; while($row=$data->fetch_assoc()): ?>
<tr>
    <td><?= $no++ ?></td>
    <td><?= htmlspecialchars($row['nomor_anggota'], ENT_QUOTES, 'UTF-8') ?></td>
    <td><?= htmlspecialchars($row['nama'], ENT_QUOTES, 'UTF-8') ?></td>
    <td><?= htmlspecialchars($row['telepon'], ENT_QUOTES, 'UTF-8') ?></td>
    <td><?= htmlspecialchars($row['email'], ENT_QUOTES, 'UTF-8') ?></td>
    <td><?= htmlspecialchars($row['status'], ENT_QUOTES, 'UTF-8') ?></td>
    <td>
        <a href="?action=edit&id=<?= intval($row['id']) ?>" class="btn btn-warning btn-sm">Edit</a>
        <a href="?action=delete&id=<?= intval($row['id']) ?>" class="btn btn-danger btn-sm">Hapus</a>
    </td>
</tr>
<?php endwhile; ?>
</tbody>
</table>

</div>
</div>

</div>

<script>
$(document).ready(function() {
    $('#dataTable').DataTable();
});
</script>

<?php include __DIR__ . '/../templates/footer.php'; ?>