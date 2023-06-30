<?php 
   require_once('../_header.php');
   $ck_number = $_GET['or_ck_number'];
?>

<?php if (del_or_ck($ck_number) > 0) : ?>
   <div class="alert">
      <div class="box">
         <img src="<?=url('_assets/img/berhasil.png')?>" height="68" alt="alert sukses">
         <p>Paket Berhasil Diubah</p>
         <button onclick="redirectToHome()" class="btn-alert">Ok</button>
      </div>
   </div>
<?php endif; ?>

<script>
   function redirectToHome() {
      window.location.href = "http://localhost:8080/BreezyWash&Fold/";
   }
</script>
