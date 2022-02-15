<?= $this->extend('template/header') ?>

<?= $this->section('content') ?>

    <?= $this->include('template/navbar') ?>

    <?= d($show) ?>
    <div class="container-fluid page-body-wrapper">
	    <div class="main-panel">
		    <div class="content-wrapper">
                <div class="row">
                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                        <h4 class="card-title">Detail Pengajuan</h4>
                        <form class="forms-sample">
                            <div class="form-group">
                            <label for="exampleInputUsername1">Nama Proyek</label>
                            <input type="text" class="form-control" value="<?= $show[0]['proyek'] ?>" disabled>
                            </div>
                            <div class="form-group">
                            <label for="exampleInputEmail1">Lokasi Proyek</label>
                            <input type="text" class="form-control" value="<?= $show[0]['lokasi'] ?>" disabled>
                            </div>
                            <div class="form-group">
                            <label for="exampleInputPassword1">Waktu Berangkat</label>
                            <input type="text" class="form-control" value="<?= $show[0]['w_berangkat'] ?>" disabled>
                            </div>
                            <div class="form-group">
                            <label for="exampleInputConfirmPassword1">Confirm Password</label>
                            <input type="text" class="form-control" value="<?= $show[0]['w_pulang'] ?>" disabled>
                            </div>
                        </form>
                        </div>
                    </div>
                    </div>
                    <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                        <h4 class="card-title">Detail Pendanaan</h4>
                        <form class="forms-sample">
                            <div class="form-group row">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Transport</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-primary text-white">Rp</span>
                                        </div>
                                        <input type="text" class="form-control" value="<?= $show[0]['transport'] ?>" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Tol</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-primary text-white">Rp</span>
                                        </div>
                                        <input type="text" class="form-control" value="<?= $show[0]['tol'] ?>" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Parkir</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-primary text-white">Rp</span>
                                        </div>
                                        <input type="text" class="form-control" value="<?= $show[0]['parkir'] ?>" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Makan</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-primary text-white">Rp</span>
                                        </div>
                                        <input type="text" class="form-control" value="<?= $show[0]['makan'] ?>" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Lainnya</label>
                                <div class="col-sm-9">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text bg-primary text-white">Rp</span>
                                        </div>
                                        <input type="text" class="form-control" value="<?= $show[0]['lainnya'] ?>" disabled>
                                    </div>
                                    <input type="text" class="form-control" value="<?= $show[0]['keterangan'] ?>" disabled>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            <button class="btn btn-light">Cancel</button>
                        </form>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?= $this->endSection() ?>