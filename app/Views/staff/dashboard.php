<?= $this->extend('template/header') ?>

<?= $this->section('content') ?>

    <?= $this->include('template/navbar') ?>

<div class="container-fluid page-body-wrapper">
	<div class="main-panel">
		<div class="content-wrapper">
			<div class="row">
				<div class="col-sm-6 mb-4 mb-xl-0">
					<div class="d-lg-flex align-items-center">
						<div>
							<h3 class="text-dark font-weight-bold mb-2">Hi, welcome back!</h3>
							<h6 class="font-weight-normal mb-2">Last login was 23 hours ago. View details</h6>
						</div>
						<div class="ml-lg-5 d-lg-flex d-none">
								<button type="button" class="btn bg-white btn-icon">
									<i class="mdi mdi-view-grid text-success"></i>
							</button>
								<button type="button" class="btn bg-white btn-icon ml-2">
									<i class="mdi mdi-format-list-bulleted font-weight-bold text-primary"></i>
								</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<?= $this->endSection() ?>