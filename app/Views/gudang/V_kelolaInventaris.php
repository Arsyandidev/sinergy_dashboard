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
            <h4 class="card-title">Detail Form Permintaan Barang</h4>
            <a class="btn btn-primary btn-rounded" href="#" role="button" data-bs-toggle="modal"
              data-bs-target="#tambahDetailPermintaan">
              <i class="mdi mdi-plus mr-2"></i><span>Tambah</span></a>
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>Nama Barang</th>
                    <th>Tipe</th>
                    <th>Satuan</th>
                    <th>Kuantitas</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($barang as $brg): ?>
                  <tr>
                    <td><?= $brg['nama_barang']; ?></td>
                    <td><?= $brg['tipe']; ?></td>
                    <td><?= $brg['satuan']; ?></td>
                    <td><?= $brg['kuantitas']; ?></td>
                    <td>
                        <a type="button" class="btn btn-rounded mx-1 btn-warning" href="<?= base_url('gudang/ubahBarang')?>/<?= $brg['id']; ?>">
                        <i class="mdi mdi-pencil"></i></a>
                        <a type="button" class="btn btn-rounded mx-1 btn-danger" href="<?= base_url('gudang/hapusBarang')?>/<?= $brg['id']; ?>">
                        <i class="bi bi-trash"></i></a>
                    </td>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>

            <!-- modal tambah -->
            <div class="modal fade" id="tambahDetailPermintaan">
              <div class="modal-dialog">
                <div class="modal-content" style="overflow-y: auto;">

                  <!-- Modal Header -->
                  <div class="modal-header">
                    <h4 class="modal-title">Tambah Form Permintaan Barang</h4>
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal"><i
                        class="bi bi-x-lg"></i></button>
                  </div>

                  <!-- Modal body -->
                  <div class="modal-body">
                    <form class="forms-sample" action="<?= base_url('gudang/tambahBarang/'); ?>" method="POST">
                      <?= csrf_field(); ?>
                      <div class="form-group">
                        <label for="exampleInputNamaBarang">Nama Barang</label>
                        <input name="nama_barang" type="text" class="form-control" id="exampleInputNamaBarang" required
                          autocomplete="off" placeholder="Nama Barang">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputTipe">Tipe</label>
                        <input name="tipe" type="text" class="form-control" id="exampleInputTipe" required
                          autocomplete="off" placeholder="Tipe">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputSatuan">Satuan</label>
                        <input name="satuan" type="text" class="form-control" id="exampleInputSatuan" required
                          autocomplete="off" placeholder="Satuan">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputKuantitas">Kuantitas</label>
                        <input name="kuantitas" type="number" class="form-control" id="exampleInputKuantitas" required
                          autocomplete="off" placeholder="Kuantitas">
                      </div>
                      <button type="submit" class="btn btn-primary mr-2">Kirim</button>
                      <button class="btn btn-light" data-bs-dismiss="modal">Batal</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<?= $this->endSection() ?>