<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Detail Data Pemesanan
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?= $mahasiswa['nama']; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?= $mahasiswa['no_hp']; ?></h6>
                    <h6 class="card-text"><?= $mahasiswa['waktu']; ?></h6>
                    <h6 class="card-text"><?= $mahasiswa['jenis']; ?></h6>
                    <h6 class="card-text"><?= $mahasiswa['lokasi']; ?></h6>
                    <a href="<?= base_url(); ?>mahasiswa" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        
        </div>
    </div>
</div>