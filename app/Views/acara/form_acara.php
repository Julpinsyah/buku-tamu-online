<?= $this->extend('template/layout'); ?>

<?= $this->section('content'); ?>
<div class="container mt-3">
    <form method="post" action="tambah-acara">
        <div class="form-group row">
            <label for="nama_acara" class="col-sm-2 col-form-label">Nama Acara</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="nama_acara" name="nama_acara" placeholder="Masukkan nama acara" autofocus>
            </div>
        </div>
        <div class="form-group row">
            <label for="waktu" class="col-sm-2 col-form-label">Waktu</label>
            <div class="col-sm-6">
                <input type="date" class="form-control" id="waktu" name="waktu" placeholder="Masukkan waktu acar">
            </div>
        </div>
        <div class="form-group row">
            <label for="tempat" class="col-sm-2 col-form-label">Tempat</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="tempat" name="tempat" placeholder="Masukkan tempat">
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-6">
                <button type="submit" class="btn btn-primary">Simpan Acara</button>
            </div>
        </div>
    </form>
</div>

<?= $this->endSection(); ?>