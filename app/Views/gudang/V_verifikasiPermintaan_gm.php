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
            <h4 class="card-title">Form Permintaan Barang</h4>
            <a class="btn btn-primary btn-rounded" href="#" role="button" data-bs-toggle="modal"
              data-bs-target="#tambahOperasional">
              <i class="mdi mdi-plus mr-2"></i><span>Tambah</span></a>

            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>Proyek</th>
                    <th>Lokasi</th>
                    <th>Tanggal Pengajuan</th>
                    <th>Tanggal Pengembalian</th>
                    <th>Aksi</th>
                    <th>Status</th>
                    <th>Verifikasi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($PermintaanBarang as $Permintaan): ?>
                  <tr>
                    <td><?= $Permintaan['proyek']; ?></td>
                    <td><?= $Permintaan['lokasi']; ?></td>
                    <td><?= $Permintaan['tanggal_pengajuan']; ?></td>
                    <td><?= $Permintaan['tanggal_pengembalian']; ?></td>
                    <td>
                      <!-- Modal Detail -->
                      <a type="button" class="btn btn-rounded mx-1 btn-success" href="<?= base_url('gudang/detail')?>/<?= $Permintaan['id']; ?>">
                        <i class="bi bi-zoom-in"></i></a>
                      <!-- Modal Edit Permintaan -->
                      <?php if($Permintaan['verified_gudang'] == 1 && $Permintaan['verified_gm'] == 1 && $Permintaan['status_pengembalian'] == 1): ?>
                        <a type="button" class="btn btn-rounded mx-1 btn-warning disabled" href="<?= base_url('gudang/ubah')?>/<?= $Permintaan['id']; ?>">
                        <i class="mdi mdi-pencil"></i></a>
                      <?php else: ?>
                        <a type="button" class="btn btn-rounded mx-1 btn-warning" href="<?= base_url('gudang/ubah')?>/<?= $Permintaan['id']; ?>">
                        <i class="mdi mdi-pencil"></i></a>
                      <?php endif ?>

                      <?php if ($Permintaan['verified_gudang'] == 1 && $Permintaan['verified_gm'] == 1 && $Permintaan['status_pengembalian'] == 1): ?>
                      <!-- Modal Hapus Pengajuan -->
                        <a type="button" class="btn btn-rounded mx-1 btn-danger disabled" href="<?= base_url('gudang/hapus')?>/<?= $Permintaan['id']; ?>">
                        <i class="bi bi-clipboard-x"></i></a>
                      <?php else: ?>
                        <a type="button" class="btn btn-rounded mx-1 btn-danger" href="<?= base_url('gudang/hapus')?>/<?= $Permintaan['id']; ?>">
                        <i class="bi bi-trash"></i></a>
                      <?php endif ?>
                    </td>
                    <?php if ($Permintaan['verified_gudang'] == 0 || $Permintaan['verified_gm'] == 0) {
                      echo '<td><label class="badge badge-warning">Menunggu</label></td>';
                    } else {
                      echo '<td><label class="badge badge-info">Disetujui</label></td>';
                    }
                    ?>
                    <?php if ($Permintaan['verified_gudang'] == 0 && $Permintaan['verified_gm'] == 1 && $Permintaan['status_pengembalian'] == 0): ?>
                      <td>
                        <a type="button" class="btn btn-rounded mx-1 btn-outline-success" role="button" data-bs-toggle="modal"
                        data-bs-target="#editPermintaan">
                        <i class="bi bi-check"></i></a>
                      </td>
                      <?php elseif ($Permintaan['verified_gudang'] == 1 && $Permintaan['verified_gm'] == 1 && $Permintaan['status_pengembalian'] == 1): ?>
                        <td>
                        <a type="button" class="btn btn-rounded mx-1 btn-outline-success disabled" role="button" data-bs-toggle="modal"
                        data-bs-target="#editPermintaan">
                        <i class="bi bi-check"></i></a>
                      </td>
                    <?php endif ?>
                  </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
            <div class="row ${1| ,row-cols-2,row-cols-3, auto,justify-content-md-center,|}">
              <div class="col mt-3">
                <nav aria-label="Page navigation example">
                  <ul class="pagination justify-content-center">
                    <li class="page-item">
                      <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                      </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                      <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                      </a>
                    </li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- modal tambah -->
      <div class="modal fade" id="tambahOperasional">
        <div class="modal-dialog">
          <div class="modal-content" style="overflow-y: auto;">

            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Tambah Form Permintaan Barang</h4>
              <button type="button" class="btn btn-light" data-bs-dismiss="modal"><i class="bi bi-x-lg"></i></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
              <form class="forms-sample" action="<?= base_url('gudang/tambah/'); ?>" method="POST">
              <?= csrf_field(); ?>
                <div class="form-group">
                  <label for="exampleInputUsername">Proyek</label>
                  <input name="proyek" type="text" class="form-control" id="exampleInputProyek" required autocomplete="off" placeholder="Proyek">
                </div>
                <div class="form-group">
                  <label for="exampleInputLokasi">Lokasi</label>
                  <input name="lokasi" type="text" class="form-control" id="exampleInputLokasi" required autocomplete="off" placeholder="Lokasi">
                </div>
                <div class="form-group">
                  <label for="exampleInputTanggal">Tanggal Pengajuan</label>
                  <input name="tanggal_pengajuan" type="date" class="form-control" id="exampleInputTanggal" required autocomplete="off" placeholder="Tanggal">
                </div>
                <div class="form-group">
                  <label for="exampleInputWaktuBerangkat">Tanggal Pengembalian</label>
                  <input name="tanggal_pengembalian" type="date" class="form-control" id="exampleInputWaktuBerangkat" required autocomplete="off" placeholder="Waktu Berangkat">
                </div>
                <button type="submit" class="btn btn-primary mr-2">Kirim</button>
                <button class="btn btn-light" data-bs-dismiss="modal">Batal</button>
              </form>
            </div>
          </div>
        </div>
      </div>

      <!-- Modal Edit -->
      <div class="modal fade" id="editPermintaan">
        <div class="modal-dialog">
          <div class="modal-content" style="overflow-y: auto;">

            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Ubah Form Permintaan Barang</h4>
              <button type="button" class="btn btn-light" data-bs-dismiss="modal"><i class="bi bi-x-lg"></i></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
              <form class="forms-sample">
                <div class="form-group">
                  <label for="exampleInputUsername">Proyek</label>
                  <input type="text" class="form-control" id="exampleInputProyek" required autocomplete="off" placeholder="Proyek">
                </div>
                <div class="form-group">
                  <label for="exampleInputLokasi">Lokasi</label>
                  <input type="text" class="form-control" id="exampleInputLokasi" required autocomplete="off" placeholder="Lokasi">
                </div>
                <div class="form-group">
                  <label for="exampleInputTanggal">Tanggal Pengajuan</label>
                  <input type="date" class="form-control" id="exampleInputTanggal" required autocomplete="off" placeholder="Tanggal">
                </div>
                <div class="form-group">
                  <label for="exampleInputWaktuBerangkat">Tanggal Pengembalian</label>
                  <input type="date" class="form-control" id="exampleInputWaktuBerangkat" required autocomplete="off" placeholder="Waktu Berangkat">
                </div>
                <button type="submit" class="btn btn-primary mr-2">Ubah</button>
                <button class="btn btn-light" data-bs-dismiss="modal">Batal</button>
              </form>
            </div>
          </div>
        </div>
      </div>

      <!-- modal Hapus Permintaan -->
      <div class="modal fade" id="hapusPermintaan">
        <div class="modal-dialog">
          <div class="modal-content" style="overflow-y: auto;">

            <!-- Modal Header -->
            <div class="modal-header">
              <h4 class="modal-title">Hapus Permintaan Barang</h4>
              <button type="button" class="btn btn-light" data-bs-dismiss="modal"><i class="bi bi-x-lg"></i></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
              <form class="forms-sample">
                <div class="form-group">
                  <label for="exampleInputUsername">Yakin ingin menghapus permintaan ?</label>
                </div>

                <button type="submit" class="btn btn-danger mr-2">Hapus</button>
                <button class="btn btn-light" data-bs-dismiss="modal">Batal</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection() ?>