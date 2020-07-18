<?= $this->extend('template/layout'); ?>

<?= $this->section('content'); ?>
<div class="container mt-3">
    <form method="post" action="tambah-kehadiran" enctype="multipart/form-data">
        <div class="form-group row">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama anda">
            </div>
        </div>
        <div class="form-group row">
            <label for="telp" class="col-sm-2 col-form-label">Telepon</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="telp" name="telp" placeholder="Masukkan Telepon anda">
            </div>
        </div>
        <div class="form-group row">
            <label for="email" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="email" name="email" placeholder="Masukkan Email anda">
            </div>
        </div>
        <div class="form-group row">
            <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
            <div class="col-sm-4">
                <input type="file" class="form-control-file" id="gambar" name="gambar">
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-6">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </form>
</div>

<?= $this->endSection(); ?>