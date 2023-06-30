<?php 
require_once('_header.php'); 
?>

<div id="paket" class="main-content">
	<div class="container">
		<div class="baris">
			<div class="col mt-2">
				<div class="card">
					<div class="card-title card-flex">
						<div class="card-col">
							<h2>Laporan Bulanan</h2>
						</div>

						<div class="card-col txt-right">
							<a href="<?= url() ?>" class="btn-xs bg-primary">Kembali</a>
						</div>
					</div>

					<div class="card-body mt-2">
						<div class="col">
							<div class="container-paket">
								<div class="col-paket">
									<a href="<?= url('laporan_ck.php') ?>" class="paket">
										<img src="<?= url('_assets/img/cuci_komplit.png') ?>" alt="cuci komplit"
											width="160">
										<h4>Daftar Paket Cuci Komplit</h4>
									</a>
								</div>

								<div class="col-paket">
									<a href="<?= url('laporan_cs.php') ?>" class="paket">
										<img src="<?= url('_assets/img/kemeja_2.png') ?>" alt="cuci satuan" width="160">
										<h4>Daftar Paket Cuci Satuan</h4>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php