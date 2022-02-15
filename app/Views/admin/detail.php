<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="mt-2">Detail Obat</h2>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="/img/<?= $obat['sampul']; ?>" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $obat['nama_obat']; ?></h5>
                            <p class="card-text"><b>Harga : </b>Rp<?= $obat['harga']; ?></p>
                            <p class="card-text"><?= $obat['deskripsi']; ?></p>
                            <p class="card-text"><small class="text-muted"><b>Jenis : </b><?= $obat['jenis_obat']; ?></small></p>

                            <a href="" class="btn btn-warning">Edit</a>

                            <form action="" method="POST" class="d-inline">
                                <?= csrf_field(); ?>
                                <input type="hidden" name="_method" id="" value="DELETE">
                                <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin ?')">Delete</button>
                            </form>
                            <br><br>
                            <a href="/admin">Kembali ke Daftar Komik</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>