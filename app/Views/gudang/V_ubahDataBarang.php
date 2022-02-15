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
            <h4 class="card-title">Ubah Data Barang</h4>
            <form class="forms-sample" action="<?= base_url() ?>/gudang/updateBarang/<?= $barang['id']; ?>"
              method="POST">
              <?= csrf_field(); ?>
              <input type="hidden" name="id" required autocomplete="off" value="<?= $barang['id']; ?>">
              <div class="form-group">
                <label for="exampleInputNamaBarang">Nama Barang</label>
                <input name="nama_barang" type="text" class="form-control" id="exampleInputNamaBarang" required
                  autocomplete="off" value="<?= $barang['nama_barang']; ?>" placeholder="Nama Barang">
              </div>
              <div class="form-group">
                <label for="exampleInputTipe">Tipe</label>
                <input name="tipe" type="text" class="form-control" id="exampleInputTipe" required 
                autocomplete="off" value="<?= $barang['tipe']; ?>" placeholder="Tipe">
              </div>
              <div class="form-group">
                <label for="exampleInputSatuan">Satuan</label>
                <input name="satuan" type="text" class="form-control" id="exampleInputSatuan" required
                  autocomplete="off" value="<?= $barang['satuan']; ?>" placeholder="Satuan">
              </div>
              <div class="form-group">
                <label for="exampleInputKuantitas">Kuantitas</label>
                <input name="kuantitas" type="number" class="form-control" id="exampleInputKuantitas" required
                  autocomplete="off" value="<?= $barang['kuantitas']; ?>" placeholder="Kuantitas">
              </div>
              <button type="submit" class="btn btn-primary mr-2">Ubah</button>
              <a type="button" class="btn btn-light" href="<?= base_url('gudang/kelolaInventaris'); ?>">Kembali</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection() ?>