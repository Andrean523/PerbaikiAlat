<?php
include "../../lib/koneksi.php";
include "../header.php";
?>


<?php

$id_kerusakan = $_GET['id_kerusakan'];

$sql =  "SELECT * FROM tbl_kerusakan WHERE id_kerusakan = '$id_kerusakan'";
$result = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_array($result);

$kode = $data['kode_kerusakan'];
$nama = $data['nama_kerusakan'];
$solusi = $data['solusi_kerusakan'];

?>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
   
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h4>Form Edit kerusakan</h4>
                  <div class="card-header-action">
                    <a href="main.php" class="btn btn-danger">Kembali <i class="fas fa-chevron-right"></i></a>
                  </div>
                </div>
                <div class="card-body p-0">

                  <form action="aksi_edit.php" method="POST">
                    <div class="card-body">
                    <input type="hidden" name="id_kerusakan" value="<?php echo $data['id_kerusakan']; ?>">

                      <div class="form-group">
                        <label>Kode kerusakan</label>
                        <input type="text" class="form-control" required="" readonly name="kode" value="<?php echo $kode; ?>">
                      </div>

                      <div class="form-group">
                        <label>Nama kerusakan</label>
                        <input type="text" class="form-control" required="" name="nama" value="<?php echo $nama; ?>">
                      </div>

                      <div class="form-group">
                        <label>Solusi kerusakan</label>
                        <input type="text" class="form-control" required="" name="solusi" value="<?php echo $solusi; ?>">
                      </div>
                      
                    </div>
                    <div class="card-footer text-right">
                      <button class="btn btn-primary" type ="submit">Submit</button>
                    </div>
                  </form> 
            
              </div>
            </div>
            
          </div>
  
        </section>
      </div>


<?php
include "../footer.php";
?>