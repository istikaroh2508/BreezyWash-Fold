<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <meta name="description" content="">
   <meta name="author" content="">
   <title>Laporan Laundry Cuci Komplit</title>
   <style>
      @media print {
         /* Aturan CSS khusus untuk mode cetak */
         h2 {
            font-size: 24px;
         }
         table {
            font-size: 16px;
         }
         body {
            background-color: #ffffff;
         }
      }
      .container {
         width: 80%;
         margin: 0 auto;
      }

      .header {
         background-color: orange;
         color: black;
         padding: 20px;
         text-align: center;
      }

      table {
         width: 100%;
         border-collapse: collapse;
      }

      table th,
      table td {
         padding: 8px;
         border: 1px solid #000;
      }

      .footer {
         text-align: right;
         margin-top: 50px;
      }
   </style>
</head>

<body>
   <div class="container">
      <div class="header">
         <h2>Laporan Laundry Cuci Komplit</h2>
      </div>

      <br>
      <table>
         <thead>
            <tr>
               <th>No</th>
               <th>No. Order</th>
               <th>Pelanggan</th>
               <th>Tanggal Masuk</th>
               <th>Jenis Paket</th>
               <th>Total</th>
            </tr>
         </thead>
         <tbody>
         <?php
            $koneksi = mysqli_connect("localhost", "root", "", "laundry");

            $sql_tampil = "SELECT * FROM tb_riwayat_ck ORDER BY tgl_msk ASC";
            $query_tampil = mysqli_query($koneksi, $sql_tampil);
            $no = 1;
            $total = 0; // Inisialisasi variabel total
            while ($data = mysqli_fetch_array($query_tampil, MYSQLI_ASSOC)) {
               $total += $data['total']; // Menambahkan total pada setiap iterasi
         ?>
               <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $data['or_number']; ?></td>
                  <td><?php echo $data['pelanggan']; ?></td>
                  <td><?php echo $data['tgl_msk']; ?></td>
                  <td><?php echo $data['j_paket']; ?></td>
                  <td><?php echo $data['total']; ?></td>
               </tr>
         <?php
               $no++;
            }
         ?>
         </tbody>
         <tfoot>
            <tr>
               <td colspan="5" align="center"><strong>Total</strong></td>
               <td colspan="2"><strong><?php echo $total; ?></strong></td>
            </tr>
         </tfoot>
      </table>
      <div class="footer">
         <b>Kudus, <?php echo date("d-m-Y"); ?></b>
         <br><br><br><br>
         <u>BreezyWash&Fold</u>
      </div>
   </div>
   <script>
      // Perintah untuk mencetak di browser
      window.print();
   </script>
</body>

</html>
