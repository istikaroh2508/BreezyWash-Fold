<?php 
require_once('../../_header.php'); 
$no_cs = $_GET['or_cs_number'];
$data = query("SELECT * FROM tb_order_cs WHERE or_cs_number = '$no_cs'")[0];
//var_dump($data);
?>

<?php if (isset($_POST['bayar_cs'])) : ?>
   <script>
      window.location.href = "http://localhost:8080/BreezyWash&Fold/detail_order/detail_cs/bayar.php?or_cs_number=<?=$no_cs?>";
   </script>
<?php endif ?>

<div id="detail_or_cs" class="main-content">
   <div class="container">
      <div class="baris">
         <div class="col mt-2">
            <div class="card-md">
               <div class="card-title card-flex">
                  <div class="card-col">
                     <h2>Detail Order</h2>
                  </div>

                  <div class="card-col txt-right">
                     <h3 class="no-order"><small>No Order : </small><?= $data['or_cs_number']?></h3>
                  </div>
               </div>

               <div class="card-body">
                  <form action="" method="post">
                     <input type="hidden" name="or_cs_number" value="<?=$data['or_cs_number']?>">
                     <div class="jdl-or">
                        <h4>Customer</h4>
                     </div>
                     <table class="tb-detail_customer">
                        <tr>
                           <th>Nama</th>
                           <td><?=$data['nama_pel_cs']?></td>
                        </tr>

                        <tr>
                           <th>Nomor Telepon</th>
                           <td><?=$data['no_telp_cs']?></td>
                        </tr>

                        <tr>
                           <th>Alamat</th>
                           <td>
                              <textarea name="alamat_cs" disabled class="txt-area">
                                 <?=$data['alamat_cs']?>
                              </textarea>
                           </td>
                        </tr>

                        <tr>
                           <th>Order Masuk</th>
                           <td><?=$data['tgl_masuk_cs']?></td>
                        </tr>

                        <tr>
                           <th>Diambil Pada</th>
                           <td><input type="text" name="tgl_keluar_cs" disabled value="<?=$data['tgl_keluar_cs']?>"></td>
                        </tr>

                        <tr>
                           <th>Durasi Kerja</th>
                           <td><?=$data['wkt_krj_cs']?></td>
                        </tr>

                        <tr>
                           <th>Jenis Paket</th>
                           <td>
                              <?php
                              $jenis_paket_cs = explode(", ", $data['jenis_paket_cs']);
                              foreach ($jenis_paket_cs as $jenis) {
                                 echo $jenis . "<br>";
                              }
                              ?>
                           </td>
                        </tr>
                     </table>

                     <div class="mt-1"></div>

                     <div class="jdl-or">
                        <h4>Order</h4>
                     </div>

                     <table class="tb-detail_order">
                        <tr>
                           <th>Jumlah (Pcs)</th>
                           <th>Harga Per-Pcs</th>
                           <th>Total Bayar</th>
                        </tr>

                        <?php
                        $jml_pcs = explode(", ", $data['jml_pcs']);
                        $harga_perpcs = explode(", ", $data['harga_perpcs']);
                        $tot_bayar = explode(", ", $data['tot_bayar']);
                        for ($i = 0; $i < count($jml_pcs); $i++) {
                           echo '
                              <tr>
                                 <td>'.$jml_pcs[$i].'</td>
                                 <td>Rp. '.$harga_perpcs[$i].'</td>
                                 <td>Rp. '.$tot_bayar[$i].'</td>
                              </tr>
                           ';
                        }
                        ?>
                     </table>

                     <div class="details">
                        <h4 class="mb-01">Keterangan:</h4>
                        <p class="lead">
                           <textarea name="keterangan_cs" disabled class="txt-area">
                              <?=$data['keterangan_cs']?>
                           </textarea>
                        </p>
                     </div>

                     <div class="form-footer_detail">
                        <div class="buttons">
                           <button type="submit" name="bayar_cs" class="btn-sm bg-primary">Bayar Sekarang</button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<?php