 <?php
  include "lib/koneksi.php";
  include "header.php";
  ?>
 <script>
   function myFunction() {
     window.print();
   }
 </script>


 <!-- Main Content -->
 <div class="main-content">
   <section class="section">
     <div class="section-body">
       <h2 class="section-title">Hasil Diagnosa</h2>
       <p class="section-lead">
         <?php
          session_start();
          echo "<p>Hallo " . $_SESSION['nama'] . " dari " . $_SESSION['perusahaan'] . "</p>";
          ?>
       </p>
       <div class="card ">
         <div class="card-body">
           <center>
             <div class="row">
               <div class="col-lg-12">
                 <h2>Hasil Diagnosa</h2>
                 <table class="table table-bordered table-hover">
                   <tr>
                     <th>Gejala yang terjadi :</th>
                     <td>
                       <?php
                        $gejalaarray = $_POST['cek'];
                        $gejala = implode("AND", $gejalaarray);

                        $query = mysqli_query($koneksi, "SELECT * FROM tbl_rule WHERE jika = '$gejala'");
                        $cekkerusakan = mysqli_num_rows($query);
                        if ($cekkerusakan > 0) {
                          foreach ($gejalaarray as $value) {
                            $namagejala = mysqli_query($koneksi, "SELECT * FROM tbl_gejala WHERE kode_gejala = '$value'");
                            while ($gejalakerusakan = mysqli_fetch_array($namagejala)) {
                              echo $gejalakerusakan['nama_gejala'];
                              echo "<br>";
                            }
                          }
                        } else {
                          echo "Kerusakan Tidak Ditemukan karena keterbatasan data";
                        } ?>
                     </td>
                   </tr>
                   <tr>
                     <th>Kerusakan :</th>
                     <td>
                       <?php
                        $gejalaarray = $_POST['cek'];
                        $gejala = implode("AND", $gejalaarray);

                        $query = mysqli_query($koneksi, "SELECT * FROM tbl_rule WHERE jika = '$gejala'");
                        $cekkerusakan = mysqli_num_rows($query);
                        if ($cekkerusakan > 0) {
                          foreach ($gejalaarray as $value) {
                            $namagejala = mysqli_query($koneksi, "SELECT * FROM tbl_gejala WHERE kode_gejala = '$value'");
                            while ($gejalakerusakan = mysqli_fetch_array($namagejala)) {
                            }
                          }
                          $maka = mysqli_fetch_array($query)['maka'];
                          $kerusakan = mysqli_query($koneksi, "SELECT * FROM tbl_kerusakan WHERE kode_kerusakan = '$maka'");
                          $datakerusakan = mysqli_fetch_array($kerusakan);
                          echo $datakerusakan['nama_kerusakan'];
                        } else {
                          echo "Kerusakan Tidak Ditemukan karena keterbatasan data";
                        } ?>
                     </td>
                   </tr>
                   <tr>
                     <th>Solusi Perbaikan :</th>
                     <td>
                       <?php
                        $gejalaarray = $_POST['cek'];
                        $gejala = implode("AND", $gejalaarray);

                        $query = mysqli_query($koneksi, "SELECT * FROM tbl_rule WHERE jika = '$gejala'");
                        $cekkerusakan = mysqli_num_rows($query);
                        if ($cekkerusakan > 0) {
                          foreach ($gejalaarray as $value) {
                            $namagejala = mysqli_query($koneksi, "SELECT * FROM tbl_gejala WHERE kode_gejala = '$value'");
                            while ($gejalakerusakan = mysqli_fetch_array($namagejala)) {
                            }
                          }
                          $maka = mysqli_fetch_array($query)['maka'];
                          $kerusakan = mysqli_query($koneksi, "SELECT * FROM tbl_kerusakan WHERE kode_kerusakan = '$maka'");
                          $datakerusakan = mysqli_fetch_array($kerusakan);
                          echo $datakerusakan['solusi_kerusakan'];
                        } else {
                          echo "Kerusakan Tidak Ditemukan karena keterbatasan data";
                        } ?>
                     </td>
                   </tr>
                 </table>
                 <a class="btn btn-sm btn-danger" href="question.php"> Mulai Lagi </a>
                 <button class="btn btn-sm btn-primary" href="#" onclick="myFunction()"> Cetak </button>
               </div>
             </div>
           </center>
         </div>
       </div>
     </div>
   </section>
 </div>

 <?php
  include "footer.php";
  ?>



 <!-- Cara Perhitungan -->

 <!-- <?php
      $gejalaarray = $_POST['cek'];
      $gejala = implode("AND", $gejalaarray);

      $query = mysqli_query($koneksi, "SELECT * FROM tbl_rule WHERE jika = '$gejala'");
      $cekkerusakan = mysqli_num_rows($query);
      if ($cekkerusakan > 0) {
        foreach ($gejalaarray as $value) {
          $namagejala = mysqli_query($koneksi, "SELECT * FROM tbl_gejala WHERE kode_gejala = '$value'");
          while ($gejalakerusakan = mysqli_fetch_array($namagejala)) {
            echo $gejalakerusakan['nama_gejala'];
            echo "<br>";
          }
        }
        $maka = mysqli_fetch_array($query)['maka'];
        $kerusakan = mysqli_query($koneksi, "SELECT * FROM tbl_kerusakan WHERE kode_kerusakan = '$maka'");
        $datakerusakan = mysqli_fetch_array($kerusakan);
        echo $datakerusakan['nama_kerusakan'];
        echo "<br>";
        echo $datakerusakan['solusi_kerusakan'];
      } else {
        echo "Kerusakan Tidak Ditemukan";
      }
      ?>  -->