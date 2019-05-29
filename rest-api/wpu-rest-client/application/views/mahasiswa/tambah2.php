<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Tambah Data KKN
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="npm">NPM</label>
                            <input type="text" name="npm" class="form-control" id="npm">
                            <small class="form-text text-danger"><?= form_error('npm'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="lokasi">Lokasi</label>
                            <input type="text" name="lokasi" class="form-control" id="lokasi">
                            <small class="form-text text-danger"><?= form_error('lokasi'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="kelompok">kelompok</label>
                            <input type="text" name="kelompok" class="form-control" id="kelompok">
                            <small class="form-text text-danger"><?= form_error('kelompok'); ?></small>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>