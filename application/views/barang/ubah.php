<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Ubah Data Barang
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $barang['item_id']; ?>">
                        <div class="form-group">
                            <label for="kode_barang">Kode Barang</label>
                            <input type="text" name="kode_barang" class="form-control" id="kode_barang" value="<?= $barang['kode_barang']; ?>">
                            <small class="form-text text-danger"><?= form_error('kode_barang'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="name">Nama</label>
                            <input type="text" name="name" class="form-control" id="name" value="<?= $barang['name']; ?>">
                            <small class="form-text text-danger"><?= form_error('name'); ?></small>
                        </div>
                        <button type="submit" name="ubah" class="btn btn-primary float-right">Edit Data</button>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>