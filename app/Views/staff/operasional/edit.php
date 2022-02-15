<?= $this->extend('template/header') ?>

<?= $this->section('content') ?>

<?= $this->include('template/navbar') ?>

<?= d($operasional) ?>

<div class="container-fluid page-body-wrapper">
  <div class="main-panel">
    <div class="content-wrapper">
      <!-- main content -->
      <div class="card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Ubah Form Permintaan Barang</h4>
            <form class="forms-sample" action="<?= base_url() ?>/staff/OperasionalController/update/<?= $operasional[0]['id'] ?>" method="POST">
            <?= csrf_field(); ?>
                <input type="hidden" name="id" value="<?= $operasional[0]['id'] ?>">
                <div class="form-group">
                    <label>Nama Proyek</label>
                    <input name="proyek" type="text" class="form-control" required value="<?= $operasional[0]['proyek']; ?>" placeholder="Nama Proyek">
                </div>
                <div class="form-group">
                    <label>Nama Lokasi</label>
                    <input name="lokasi" type="text" class="form-control" required value="<?= $operasional[0]['lokasi']; ?>" placeholder="Nama Lokasi">
                </div>
                <div class="form-group">
                    <label>Tanggal</label>
                    <input name="tanggal" type="text" class="form-control" required value="<?= $operasional[0]['lokasi']; ?>" placeholder="Tanggal">
                </div>
                <div class="form-group">
                    <label>Waktu Berangkat</label>
                    <input name="w_berangkat" type="date" class="form-control" required value="<?= $operasional[0]['w_berangkat']; ?>" placeholder="Waktu Berangkat">
                </div>
                <div class="form-group">
                    <label>Waktu Pulang</label>
                    <input name="w_pulang" type="date" class="form-control" required value="<?= $operasional[0]['w_pulang']; ?>" placeholder="Waktu Pulang">
                </div>
                <div class="form-group">
                    <label>Transport</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-primary text-white">Rp</span>
                        </div>
                        <input type="text" class="form-control" name="transport" value="<?= $operasional[0]['transport'] ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label>Tol</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-primary text-white">Rp</span>
                        </div>
                        <input type="text" class="form-control" name="tol" value="<?= $operasional[0]['tol'] ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label>Parkir</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-primary text-white">Rp</span>
                        </div>
                        <input type="text" class="form-control" name="parkir" value="<?= $operasional[0]['parkir'] ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label>Makan</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-primary text-white">Rp</span>
                        </div>
                        <input type="text" class="form-control" name="makan" value="<?= $operasional[0]['makan'] ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label>Lainnya</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-primary text-white">Rp</span>
                        </div>
                        <input type="text" class="form-control" name="lainnya" value="<?= $operasional[0]['lainnya'] ?>">
                    </div>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-primary text-white">Rp</span>
                        </div>
                        <input type="text" class="form-control" name="keterangan" value="<?= $operasional[0]['keterangan'] ?>">
                    </div>
                </div>
              <button type="submit" class="btn btn-primary mr-2">Ubah</button>
              <a type="button" class="btn btn-light" href="<?= base_url('gudang/permintaanBarang'); ?>">Kembali</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection() ?>