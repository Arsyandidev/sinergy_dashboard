<?= $this->extend('template/header') ?>

<?= $this->section('content') ?>

<?= $this->include('template/navbar') ?>

<div class="container-fluid">
  <div class="card mt-3">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Form Pengajuan Operasional</h4>
        <a class="btn btn-primary btn-rounded" href="#" role="button" data-bs-toggle="modal"
          data-bs-target="#tambahOperasional">
          <i class="mdi mdi-plus mr-2"></i><span>Tambah</span></a>

        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th>Proyek</th>
                <th>Lokasi</th>
                <th>Tanggal</th>
                <th>Waktu Berangkat</th>
                <th>Waktu Pulang</th>
                <th>Aksi</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Jacob</td>
                <td>53275531</td>
                <td>12 May 2017</td>
                <td>12 May 2017</td>
                <td>12 May 2017</td>
                <td>
                  <!-- Modal Operasional -->
                  <a type="button" class="btn btn-rounded mx-1 btn-warning" role="button" data-bs-toggle="modal"
                    data-bs-target="#detailOperasional">
                    <i class="mdi mdi-pencil"></i></a>
                  <!-- Modal Hapus Pengajuan -->
                  <a type="button" class="btn btn-rounded mx-1 btn-danger" role="button" data-bs-toggle="modal"
                    data-bs-target="#hapusPengajuan">
                    <i class="bi bi-trash"></i></a>
                </td>
                <td><label class="badge badge-info">Disetujui</label></td>
              </tr>
              <tr>
                <td>Jacob</td>
                <td>53275531</td>
                <td>12 May 2017</td>
                <td>12 May 2017</td>
                <td>12 May 2017</td>
                <td>
                  <!-- Modal Operasional -->
                  <a type="button" class="btn btn-rounded mx-1 btn-warning" role="button" data-bs-toggle="modal"
                    data-bs-target="#detailOperasional">
                    <i class="mdi mdi-pencil"></i></a>
                  <!-- Modal Hapus Pengajuan -->
                  <a type="button" class="btn btn-rounded mx-1 btn-danger" role="button" data-bs-toggle="modal"
                    data-bs-target="#hapusPengajuan">
                    <i class="bi bi-trash"></i></a>
                </td>
                <td><label class="badge badge-warning">Menunggu</label></td>
              </tr>
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
          <h4 class="modal-title">Tambah Form Pengajuan Operasional</h4>
          <button type="button" class="btn btn-light" data-bs-dismiss="modal"><i class="bi bi-x-lg"></i></button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          <form class="forms-sample">
            <div class="form-group">
              <label for="exampleInputProyek">Proyek</label>
              <input type="text" class="form-control" id="exampleInputProyek" placeholder="Proyek">
            </div>
            <div class="form-group">
              <label for="exampleInputLokasi">Lokasi</label>
              <input type="text" class="form-control" id="exampleInputLokasi" placeholder="Lokasi">
            </div>
            <div class="form-group">
              <label for="exampleInputTanggal">Tanggal</label>
              <input type="date" class="form-control" id="exampleInputTanggal" placeholder="Tanggal">
            </div>
            <div class="form-group">
              <label for="exampleInputWaktuBerangkat">Waktu Berangkat</label>
              <input type="datetime-local" class="form-control" id="exampleInputWaktuBerangkat"
                placeholder="Waktu Berangkat">
            </div>
            <div class="form-group">
              <label for="exampleInputWaktuPulang">Waktu Pulang</label>
              <input type="datetime-local" class="form-control" id="exampleInputWaktuPulang" placeholder="Waktu Pulang">
            </div>
            <!-- garis -->
            <hr>
            <!-- garis -->
            <div class="form-group">
              <label for="exampleInputTransport">Transport</label>
              <input type="number" class="form-control" id="exampleInputTransport" placeholder="Transport">
            </div>
            <div class="form-group">
              <label for="exampleInputTol">Tol</label>
              <input type="number" class="form-control" id="exampleInputTol" placeholder="Tol">
            </div>
            <div class="form-group">
              <label for="exampleInputParkir">Parkir</label>
              <input type="number" class="form-control" id="exampleInputParkir" placeholder="Parkir">
            </div>
            <div class="form-group">
              <label for="exampleInputMakan">Makan</label>
              <input type="number" class="form-control" id="exampleInputMakan" placeholder="Makan">
            </div>
            <div class="form-group">
              <label for="exampleInputLainnya">Lainnya</label>
              <input type="number" class="form-control" id="exampleInputLainnya" placeholder="Lainnya">
              <input type="text" class="form-control mt-2" id="exampleInputKeterangan" placeholder="Keterangan">
            </div>
            <button type="submit" class="btn btn-primary mr-2">Kirim</button>
            <button class="btn btn-light" data-bs-dismiss="modal">Batal</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- modal detail -->
  <div class="modal fade" id="detailOperasional">
    <div class="modal-dialog">
      <div class="modal-content" style="overflow-y: auto;">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Ubah Form Pengajuan Operasional</h4>
          <button type="button" class="btn btn-light" data-bs-dismiss="modal"><i class="bi bi-x-lg"></i></button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          <form class="forms-sample">
            <div class="form-group">
              <label for="exampleInputUsername">Proyek</label>
              <input type="text" class="form-control" id="exampleInputProyek" placeholder="Proyek">
            </div>
            <div class="form-group">
              <label for="exampleInputLokasi">Lokasi</label>
              <input type="text" class="form-control" id="exampleInputLokasi" placeholder="Lokasi">
            </div>
            <div class="form-group">
              <label for="exampleInputTanggal">Tanggal</label>
              <input type="date" class="form-control" id="exampleInputTanggal" placeholder="Tanggal">
            </div>
            <div class="form-group">
              <label for="exampleInputWaktuBerangkat">Waktu Berangkat</label>
              <input type="datetime-local" class="form-control" id="exampleInputWaktuBerangkat"
                placeholder="Waktu Berangkat">
            </div>
            <div class="form-group">
              <label for="exampleInputWaktuPulang">Waktu Pulang</label>
              <input type="datetime-local" class="form-control" id="exampleInputWaktuPulang" placeholder="Waktu Pulang">
            </div>
            <!-- garis -->
            <hr>
            <!-- garis -->
            <div class="form-group">
              <label for="exampleInputTransport">Transport</label>
              <input type="number" class="form-control" id="exampleInputTransport" placeholder="Transport">
            </div>
            <div class="form-group">
              <label for="exampleInputTol">Tol</label>
              <input type="number" class="form-control" id="exampleInputTol" placeholder="Tol">
            </div>
            <div class="form-group">
              <label for="exampleInputParkir">Parkir</label>
              <input type="number" class="form-control" id="exampleInputParkir" placeholder="Parkir">
            </div>
            <div class="form-group">
              <label for="exampleInputMakan">Makan</label>
              <input type="number" class="form-control" id="exampleInputMakan" placeholder="Makan">
            </div>
            <div class="form-group">
              <label for="exampleInputLainnya">Lainnya</label>
              <input type="number" class="form-control" id="exampleInputLainnya" placeholder="Lainnya">
              <input type="text" class="form-control mt-2" id="exampleInputKeterangan" placeholder="Keterangan">
            </div>
            <button type="submit" class="btn btn-primary mr-2">Ubah</button>
            <button class="btn btn-light" data-bs-dismiss="modal">Batal</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- modal Hapus Pengajuan -->
  <div class="modal fade" id="hapusPengajuan">
    <div class="modal-dialog">
      <div class="modal-content" style="overflow-y: auto;">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Hapus Pengajuan Operasional</h4>
          <button type="button" class="btn btn-light" data-bs-dismiss="modal"><i class="bi bi-x-lg"></i></button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          <form class="forms-sample">
            <div class="form-group">
              <label for="exampleInputUsername">Yakin ingin menghapus pengajuan ?</label>
            </div>
            
            <button type="submit" class="btn btn-danger mr-2">Hapus</button>
            <button class="btn btn-light" data-bs-dismiss="modal">Batal</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection() ?>