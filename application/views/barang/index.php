<div class="container">
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>

    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= base_url(); ?>barang/tambah" class="btn btn-primary">Tambah
                Data Barang</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <h3>Daftar Barang</h3>
            <?php if (empty($barang)) : ?>
                <div class="alert alert-danger" role="alert">
                    data Barang tidak ditemukan.
                </div>
            <?php endif; ?>
            <ul class="list-group">
                <?php foreach ($barang as $brg) : ?>
                    <li class="list-group-item">
                        <?= $brg['name']; ?>
                        <a href="<?= base_url(); ?>Barang/hapus/<?= $brg['item_id']; ?>" class="badge badge-danger float-right tombol-hapus">hapus</a>
                        <a href="<?= base_url(); ?>Barang/ubah/<?= $brg['item_id']; ?>" class="badge badge-success float-right">ubah</a>
                        <a href="<?= base_url(); ?>Barang/detail/<?= $brg['item_id']; ?>" class="badge badge-primary float-right">detail</a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>

</div>