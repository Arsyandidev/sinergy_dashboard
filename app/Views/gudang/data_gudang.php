<?= $this->extend('template/header') ?>

<?= $this->section('content') ?>

<?= $this->include('template/navbar') ?>

<div class="container-fluid page-body-wrapper">
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row ${1| ,row-cols-2,row-cols-3, auto,justify-content-md-center,|}">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <!-- data -->
                            <div class="row ${1| ,row-cols-2,row-cols-3, auto,justify-content-md-center,|}">
                                <?php foreach ($barang as $brg) : ?>
                                <div class="col-lg-3">
                                    <div class="card text-dark bg-white mb-3" style="max-width: auto; overflow-x:auto">
                                        <div class="card-header bg-success"></div>
                                        <div class="card-body p-3">
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td class="align-baseline font-weight-bold">
                                                            <h1><?= $brg['kuantitas']; ?></h1>
                                                        </td>
                                                        <td class="align-text-bottom"><?= $brg['satuan']; ?></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <p class="card-text"><?= $brg['nama_barang']; ?> | </p>
                                                        </td>
                                                        <td>
                                                            <p class="card-text"><?= $brg['tipe']; ?></p>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                            <!-- end content of data -->
                        </div>
                        <div class="row ${1| ,row-cols-2,row-cols-3, auto,justify-content-md-center,|}">
                            <div class="col mt-0">
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
        </div>
    </div>
</div>

<?= $this->endSection() ?>