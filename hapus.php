<?php 
   require_once('../../_header.php');
   if (isset($_GET['id_cs'])) {
      $id_cs = $_GET['id_cs'];
   
      if (del_cs($id_cs) > 0) {
?>
         <div class="alert">
            <div class="box">
               <img src="<?=url('_assets/img/berhasil.png')?>" height="68" alt="alert sukses">
               <p>Paket Berhasil Di Ubah</p>
               <button onclick="redirectToPktCs()" class="btn-alert">Ok</button>
            </div>
         </div>
<?php
      }
   }
?>

<script>
   function redirectToPktCs() {
      window.location.href = "http://localhost:8080/BreezyWash&Fold/paket/pkt_cs/pkt_cs.php";
   }
</script>
