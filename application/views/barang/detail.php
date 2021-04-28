<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Detail Data Barang
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?= $barang['name']; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?= $barang['kode_barang']; ?></h6>
                    <a href="<?= base_url(); ?>Barang" class="btn btn-primary">Kembali</a>
                </div>
            </div>

        </div>
    </div>
</div>