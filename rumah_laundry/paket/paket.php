<?php require_once('../_header.php'); ?>
   
<div id="paket" class="main-content">
   <div class="container">
      <div class="baris">
         <div class="col mt-2">
            <div class="card">
               <div class="card-title card-flex">
                  <div class="card-col">
                     <h2>Daftar Paket Tersedia</h2>	
						</div>
						
						<div class="card-col txt-right">
							<a href="<?=url()?>" class="btn-xs bg-primary">Kembali</a>
						</div>
               </div>

               <div class="card-body mt-2">
                  <div class="col">
							<div class="container-paket">
								<div class="col-paket">
									<a href="<?=url('paket/pkt_ck/pkt_ck.php')?>" class="paket">
										<img src="<?=url('_assets/img/karpet.JPEG')?>" alt="cuci komplit" width="160">
										<h4>Daftar Paket Cuci Karpet</h4>
									</a>
								</div>

								<div class="col-paket">
									<a href="<?=url('paket/pkt_dc/pkt_dc.php')?>" class="paket">
										<img src="<?=url('_assets/img/karpet masjid.png')?>" alt="paket karpet masjid" width="160">
										<h4>paket cuci karpet masjid</h4>
									</a>
								</div>

								<div class="col-paket">
									<a href="<?=url('paket/pkt_cs/pkt_cs.php')?>" class="paket">
										<img src="<?=url('_assets/img/AC.PNG')?>" alt="cuci Ac" width="160">
										<h4>Daftar Paket Cuci Ac</h4>
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

<?php require_once('../_footer.php'); ?>