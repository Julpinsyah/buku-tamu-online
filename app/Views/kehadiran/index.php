<?= $this->extend('template/layout'); ?>

<?= $this->section('head'); ?>
<link rel="stylesheet" href="acara.css">
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>
<div class="container">
    <a href="/form-kehadiran" class="btn btn-primary my-3">Tambah Data</a>
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Gambar</th>
                <th scope="col">Nama</th>
                <th scope="col">Telp</th>
                <th scope="col">Email</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>@mdo</td>
                <td><a class="btn btn-info" href="#">Edit</a>
                    <a href="#" class="btn btn-danger">Hapus</a></td>
            </tr>
        </tbody>
    </table>
</div>

<?= $this->endSection(); ?>