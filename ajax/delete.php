<?php
require '../functions.php';
if (hapus($_GET) > 0) {
    echo "
    <script>Swal.fire('Terhapus', 'Data berhasil di hapus', 'success')</script>
    ";
} else {
    echo "
    <script>Swal.fire('Gagal Terhapus', 'Data Gagal di hapus', 'error')</script>
    ";
}
$query = "SELECT * FROM anggota";
$semuaAnggota = query($query);
?>
<table id="example2" class="mt-3 table  table-hover">
    <thead>
        <tr>
            <th>Nama Lengkap</th>
            <th>Nim</th>
            <th>Angkatan</th>
            <th>Departemen</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($semuaAnggota as $anggota) : ?>
            <tr>
                <td><?= $anggota["nama"]; ?></td>
                <td><?= $anggota["nim"]; ?>
                </td>
                <td><?= $anggota["angkatan"]; ?></td>
                <td><?= $anggota["departemen"]; ?></td>
                <td class="text-right py-0 align-middle">
                    <div class="btn-group btn-group-sm">
                        <a href="edit.php?id=<?= $anggota['id'] ?>" class="btn btn-info"><i class="fas fa-pencil-alt"></i></a>
                        <a href="delete.php?id=<?= $anggota['id'] ?>" class=" btn btn-danger hapus"><i class=" fas fa-trash"></i></a>
                    </div>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
