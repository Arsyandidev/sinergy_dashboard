<?= $this->extend('template/header') ?>

<?= $this->section('content') ?>

<?= $this->include('template/navbar') ?>

<div class="container-fluid">
  <div class="row ${1| ,row-cols-2,row-cols-3, auto,justify-content-md-center,|} mt-3">
    <div class="col-lg-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
              <h4 class="card-title">Profile</h4>
              <img src="<?= base_url() ?>/assets/images/faces/face4.jpg" style="width: 300px;"
                class="rounded-pill mx-auto d-block img-fluid mb-5" alt="Profile Photo">
              <div class="table-responsive mt-5">
                <table class="table">
                  <tbody>
                    <tr>
                      <td class="text-left" style="opacity: 70%;">Nama</td>
                      <td class="text-right">Nama</td>
                    </tr>
                    <tr>
                      <td class="text-left" style="opacity: 70%;">Tempat/Tanggal Lahir</td>
                      <td class="text-right">Tempat/Tanggal Lahir</td>
                    </tr>
                    <tr>
                      <td class="text-left" style="opacity: 70%;">Email</td>
                      <td class="text-right">Email</td>
                    </tr>
                    <tr>
                      <td class="text-left" style="opacity: 70%;">Departemen</td>
                      <td class="text-right">Departemen</td>
                    </tr>
                    <tr>
                      <td class="text-left" style="opacity: 70%;">Jataban</td>
                      <td class="text-right">Jataban</td>
                    </tr>
                    <tr>
                      <td class="text-left" style="opacity: 70%;">Tanda Tangan</td>
                      <td class="text-right">Tanda Tangan</td>
                    </tr>
                  </tbody>
                </table>
                  <div class="d-grid mt-3">
                    <a type="button" class="btn btn-warning btn-block" role="button" data-bs-toggle="modal"
                    data-bs-target="#editProfile"><i class="mdi mdi-pencil mr-2"></i>Ubah</a>
                  </div>
              </div>
            </div>
          </div>
    </div>
  </div>


<!-- Modal Edit Profile -->
  <div class="modal fade" id="editProfile">
    <div class="modal-dialog">
      <div class="modal-content" style="overflow-y: auto;">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Ubah Profile</h4>
          <button type="button" class="btn btn-light" data-bs-dismiss="modal"><i class="bi bi-x-lg"></i></button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          <form class="forms-sample">
            <div class="form-group">
              <label for="exampleInputNama">Nama</label>
              <input type="text" class="form-control" id="exampleInputNama" placeholder="Nama">
            </div>
            <div class="form-group">
              <label for="exampleInputTempatTanggalLahir">Tempat, Tanggal Lahir</label>
              <input type="date" class="form-control" id="exampleInputTempatTanggalLahir" placeholder="Tempat, Tanggal Lahir">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail">Email</label>
              <input type="email" class="form-control" id="exampleInputEmail" placeholder="Email">
            </div>
            <div class="form-group">
              <label for="exampleInputProfilePhoto">Foto Profil</label>
              <input type="file" class="form-control" id="exampleInputProfilePhoto" placeholder="Foto Profil">
            </div>
            <div class="form-group">
              <label for="exampleInputTtd">Tanda Tangan</label>
              <input type="file" class="form-control" id="exampleInputTtd" placeholder="Tanda Tangan">
            </div>
            <button type="submit" class="btn btn-primary mr-2">Ubah</button>
            <button class="btn btn-light" data-bs-dismiss="modal">Batal</button>
          </form>
        </div>
      </div>
    </div>
  </div>

</div>
</div>

<?= $this->endSection() ?>