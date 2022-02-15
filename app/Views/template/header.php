<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= $title; ?></title>
    <!-- base:css -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/vendors/base/vendor.bundle.base.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="<?= base_url() ?>/assets/images/favicon.png" />
  </head>
<body>

<?= $this->renderSection('content') ?>

<footer class="footer">
  <div class="footer-wrap">
    <div class="d-sm-flex justify-content-center justify-content-sm-between">
      <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © CV. Sinergy Dhawali Primeson
        2020</span>
      <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">sdp@sinergydep.co.id</span>
    </div>
  </div>
</footer>
<!-- partial -->
</div>
<!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- base:js -->
<script src="<?= base_url() ?>/assets/vendors/base/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="<?= base_url() ?>/assets/js/template.js"></script>
<!-- endinject -->
<!-- plugin js for this page -->
<!-- End plugin js for this page -->
<script src="<?= base_url() ?>/assets/vendors/chart.js/Chart.min.js"></script>
<script src="<?= base_url() ?>/assets/vendors/progressbar.js/progressbar.min.js"></script>
<script src="<?= base_url() ?>/assets/vendors/chartjs-plugin-datalabels/chartjs-plugin-datalabels.js"></script>
<script src="<?= base_url() ?>/assets/vendors/justgage/raphael-2.1.4.min.js"></script>
<script src="<?= base_url() ?>/assets/vendors/justgage/justgage.js"></script>
<!-- Custom js for this page-->
<script src="<?= base_url() ?>/assets/js/dashboard.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.js"></script>
<script>
$(function(){

    <?php if(session()->has("success")) { ?>
        Swal.fire({
            icon: 'success',
            title: 'Great!',
            text: '<?= session("success") ?>'
        })
    <?php } ?>
});
</script>
<!-- End custom js for this page-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>