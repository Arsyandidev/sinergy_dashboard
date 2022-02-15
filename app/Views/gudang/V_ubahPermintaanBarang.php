<?= $this->extend('template/header') ?>

<?= $this->section('content') ?>

<?= $this->include('template/navbar') ?>

<div class="container-fluid page-body-wrapper">
  <div class="main-panel">
    <div class="content-wrapper">
      <!-- main content -->
      <div class="card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Ubah Form Permintaan Barang</h4>
            <form class="forms-sample" action="<?= base_url() ?>/gudang/update/<?= $permintaan['id']; ?>" method="POST">
            <?= csrf_field(); ?>
            <input type="hidden" name="id" required autocomplete="off" value="<?= $permintaan['id']; ?>">
              <div class="form-group">
                <label for="exampleInputUsername">Proyek</label>
                <input name="proyek" type="text" class="form-control" id="exampleInputProyek" required autocomplete="off" value="<?= $permintaan['proyek']; ?>">
              </div>
              <div class="form-group">
                <label for="exampleInputLokasi">Lokasi</label>
                <input name="lokasi" type="text" class="form-control" id="exampleInputLokasi" required autocomplete="off" value="<?= $permintaan['lokasi']; ?>">
              </div>
              <div class="form-group">
                <label for="exampleInputTanggal">Tanggal Pengajuan</label>
                <input name="tanggal_pengajuan" type="date" class="form-control" id="exampleInputTanggal"
                  required autocomplete="off" value="<?= $permintaan['tanggal_pengajuan']; ?>">
              </div>
              <div class="form-group">
                <label for="exampleInputTanggalPengembalian">Tanggal Pengembalian</label>
                <input name="tanggal_pengembalian" type="date" class="form-control" id="exampleInputTanggalPengembalian"
                  required autocomplete="off" value="<?= $permintaan['tanggal_pengembalian']; ?>">
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