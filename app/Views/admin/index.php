<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-10">
            <h2 class="my-3">Selamat Datang!</h2>
            <h3 class="text-center">Daftar Obat</h3>
            <?php if (session()->getFlashdata('Pesan')) : ?>
                <div class="alert alert-info" role="alert">
                    <?= session()->getFlashdata('Pesan'); ?>
                </div>
            <?php endif ?>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col" class="text-center">Nama Obat</th>
                        <th scope="col" class="text-center">Jenis Obat</th>
                        <th scope="col" class="text-center">Harga</th>
                        <th scope="col" class="text-center">Deskripsi</th>
                        <th scope="col" class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($obat as $data) : ?>
                        <tr>
                            <th scope="row"><?= $no++; ?></th>
                            <td><?= $data['nama_obat']; ?></td>
                            <td><?= $data['jenis_obat']; ?></td>
                            <td>Rp<?= $data['harga']; ?></td>
                            <td><?= $data['deskripsi']; ?></td>
                            <td><a href="/admin/detail/<?= $data['id_obat']; ?>" class="btn btn-info">Detail</a></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>