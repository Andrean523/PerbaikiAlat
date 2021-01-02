 <?php
  include "lib/koneksi.php";
  include "header.php";
  ?>

 <!-- Main Content -->
 <div class="main-content">
   <section class="section">

     <div class="section-body">
       <h2 class="section-title">Pertanyaan Gejala</h2>
       <p class="section-lead">
         <?php
          session_start();
          echo "<p>Hallo " . $_SESSION['nama'] . " dari " . $_SESSION['perusahaan'] . "</p>";
          ?>
       </p>
       <div class="card ">
         <div class="card-body">
           <h3 align="center">
             Pilih pertanyaan dibawah sesuai gejala yang terjadi
           </h3>
           <center>
             <form class="col-6" method="POST" action="proses.php">
               <div>
                 <?php
                  $query = mysqli_query($koneksi, "SELECT * FROM tbl_gejala ORDER BY kode_gejala ASC");
                  $no = 0;
                  while ($data = mysqli_fetch_array($query)) {
                    $a = $data['kode_gejala'];
                    $no++;
                  ?>
                   <div class="input-group mb-3">
                     <div class="input-group-prepend">
                       <div class="input-group-text">
                         <input type="checkbox" aria-label="Checkbox for following text input" value="<?= $data['kode_gejala'] ?>" name="cek[]">
                       </div>
                     </div>
                     <input type="text" class="form-control" aria-label="Text input with checkbox" readonly value="<?php echo $data['nama_gejala']; ?>">
                   </div>
                 <?php
                  }
                  ?>
               </div>
               <input type="submit" class="btn btn-primary btn-lg btn-block" name="proses" value="Cek Kerusakan">
             </form>
           </center>
         </div>
         <div class="card-footer bg-whitesmoke">
           This is card footer
         </div>
       </div>
     </div>
   </section>
 </div>

 <?php
  include "footer.php";
  ?>