<?= $this->extend('template/layout'); ?>

<?= $this->section('head'); ?>
<link rel="stylesheet" href="kehadiran.css">
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>
<div class="container">
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Acara</th>
                <th scope="col">Waktu</th>
                <th scope="col">Tempat</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td><a class="btn btn-info" href="#">Edit</a>
                    <a class="btn btn-danger" href="#">Hapus</a></td>
            </tr>
        </tbody>
    </table>

</div>
<?= $this->endSection(); ?>