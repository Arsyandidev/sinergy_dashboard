<?= $this->extend('template/header') ?>

<?= $this->section('content') ?>

<?= $this->include('template/navbar') ?>

\<div class="container-fluid page-body-wrapper">
  <div class="main-panel">
    <div class="content-wrapper">
      <!-- main content -->
      <div class="card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Ubah Data Barang</h4>
            <label for="exampleInputSatuan">Nama Barang</label>
            <form class="forms-sample" action="<?= base_url('/gudang/updateDetailBarang/') ?>"
              method="POST">
              <?= csrf_field(); ?>
              <input type="hidden" name="id" required autocomplete="off" value="<?= $barang['id']; ?>">
              <div class="input-group mb-3">
                <div class="dropdown">
                  <!-- <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Nama Barang</button> -->
                  <select class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                    aria-expanded="false" name="nama_barang">
                    <div class="dropdown-menu">
                      <option class="dropdown-item text-left" value="<?= $barang['nama_barang']; ?>">
                        <?= $barang['nama_barang']; ?></option>
                      <?php foreach($nama_barang as $n_brg): ?>
                      <option class="dropdown-item text-left" value="<?= $n_brg; ?>"><?= $n_brg; ?></option>
                      <?php endforeach; ?>
                    </div>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label for="exampleInputTipe">Tipe</label>
                <div class="input-group mb-3">
                  <div class="dropdown">
                    <!-- <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Nama Barang</button> -->
                    <select class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                      aria-expanded="false" name="satuan">
                      <div class="dropdown-menu">
                        <option class="dropdown-item text-left" value="<?= $barang['tipe']; ?>">
                          <?= $barang['tipe']; ?></option>
                        <?php foreach($satuans as $satuan): ?>
                        <option class="dropdown-item text-left" value="<?= $satuan; ?>"><?= $satuan; ?></option>
                        <?php endforeach; ?>
                      </div>
                    </select>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="exampleInputSatuan">Satuan</label>
                <div class="input-group mb-3">
                  <div class="dropdown">
                    <!-- <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Nama Barang</button> -->
                    <select class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                      aria-expanded="false" name="tipe" required>
                      <div class="dropdown-menu">
                        <option class="dropdown-item text-left" value="<?= $barang['satuan']; ?>">
                          <?= $barang['satuan']; ?></option>
                        <?php foreach($tipes as $tipe): ?>
                        <option class="dropdown-item text-left" value="<?= $tipe; ?>"><?= $tipe; ?></option>
                        <?php endforeach; ?>
                      </div>
                    </select>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="exampleInputKuantitas">Kuantitas</label>
                <input name="kuantitas" type="number" class="form-control" id="exampleInputKuantitas" required
                  autocomplete="off" value="<?= $barang['kuantitas']; ?>" placeholder="Kuantitas">
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