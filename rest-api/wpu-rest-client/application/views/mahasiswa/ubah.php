<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Form Ubah Data Mahasiswa
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $mahasiswa['id']; ?>">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" id="nama" value="<?= $mahasiswa['nama']; ?>">
                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="no_hp">no_hp</label>
                            <input type="text" name="no_hp" class="form-control" id="no_hp" value="<?= $mahasiswa['no_hp']; ?>">
                            <small class="form-text text-danger"><?= form_error('no_hp'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="jenis">jenis</label>
                            <input type="text" name="jenis" class="form-control" id="jenis" value="<?= $mahasiswa['jenis']; ?>">
                            <small class="form-text text-danger"><?= form_error('jenis'); ?></small>
                        </div>
                        <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>