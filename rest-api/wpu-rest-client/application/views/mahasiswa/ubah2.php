<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Ubah KKN
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $mahasiswa['id']; ?>">
                        <div class="form-group">
                            <label for="nama">nama</label>
                            <input type="text" name="nama" class="form-control" id="nama" value="<?= $mahasiswa['nama']; ?>">
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="no_hp">no_hp</label>
                            <input type="text" name="no_hp" class="form-control" id="no_hp" value="<?= $mahasiswa['no_hp']; ?>">
                            <small class="form-text text-danger"><?= form_error('no_hp'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="tanggal">tanggal</label>
                            <input type="text" name="tanggal" class="form-control" id="tanggal" value="<?= $mahasiswa['tanggal']; ?>">
                            <small class="form-text text-danger"><?= form_error('tanggal'); ?></small>
                        </div>
                        <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>