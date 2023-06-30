<?php require_once('../../_header.php') ?>

<?php if (isset($_POST['tambah'])) : ?>
   <?php if (add_cs($_POST) > 0) : ?>
      <div class="alert">
         <div class="box">
            <img src="<?=url('_assets/img/berhasil.png')?>" height="68" alt="alert sukses">
            <p>Paket Berhasil Di Ubah</p>
            <button onclick="redirectToPktCs()" class="btn-alert">Ok</button>
         </div>
      </div>
   <?php endif; ?>
<?php endif; ?>

<script>
   function redirectToPktCs() {
      window.location.href = "http://localhost:8080/BreezyWash&Fold/paket/pkt_cs/pkt_cs.php";
   }
</script>

   <div id="tambah_cs" class="main-content">
      <div class="container">
         <div class="baris">
            <div class="col mt-2">
               <div class="card">
                  <div class="card-title card-flex">
                     <div class="card-col">
                        <h2>Tambah Paket Cuci Satuan</h2>	
                     </div>
                     <div class="card-col txt-right">
                        <a href="<?=url('paket/pkt_cs/pkt_cs.php')?>" class="btn-xs bg-primary">Kembali</a>
                     </div>
                  </div>

                  <div class="card-body">
                     <form action="" method="post" class="form-input">
                        <div class="form-grup">
                           <label for="nama">Nama Paket</label>
                           <input type="text" name="nama_cs" placeholder="Nama paket" autocomplete="off" id="nama" required>
                        </div>

                        <div class="form-grup">
                           <label for="wk">Waktu Kerja</label>
                           <input type="text" name="waktu_kerja_cs" placeholder="Durasi Kerja" autocomplete="off" id="wk" required>
                        </div>

                        <div class="form-grup">
                           <label for="berat">Satuan Min (Pcs)</label>
                           <input type="number" name="kuantitas_cs" placeholder="Jumlah pakaian" autocomplete="off" id="berat" required>
                        </div>

                        <div class="form-grup">
                           <label for="tarif">Tarif</label>
                           <input type="text" name="tarif_cs" placeholder="Harga Paket" autocomplete="off" id="tarif" required>
                        </div>

                        <div class="form-grup">
                           <label for="ket_cs">Keterangan</label>
                           <input type="text" name="keterangan_cs" value="-" placeholder="Keterangan (optional)" autocomplete="off" id="ket_cs">
                        </div>

                        <div class="form-grup ">
                           <button type="submit" class="mt-1" name="tambah">Tambah</button>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>

   <?php 