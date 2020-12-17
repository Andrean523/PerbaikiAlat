<?php
include "../../lib/koneksi.php";
include "../header.php";
?>


<?php

$id_gejala = $_GET['id_gejala'];

$sql =  "SELECT * FROM tbl_gejala WHERE id_gejala = '$id_gejala'";
$result = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_array($result);

$inisial =$data['kode_gejala'];
$nama =$data['nama_gejala'];

?>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
   
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h4>Form Edit gejala</h4>
                  <div class="card-header-action">
                    <a href="main.php" class="btn btn-danger">Kembali <i class="fas fa-chevron-right"></i></a>
                  </div>
                </div>
                <div class="card-body p-0">

                  <form action="aksi_edit.php" method="POST">
                    <div class="card-body">
                    <input type="hidden" name="id_gejala" value="<?php echo $data['id_gejala']; ?>">
                      <div class="form-group">
                        <label>Inisial Gejala</label>
                        <input type="text" class="form-control" required="" name = "inisial" value="<?php echo $inisial; ?>">
                      </div>
                     
                      <div class="form-group">
                        <label>Nama Gejala</label>
                        <input type="text" class="form-control" required="" name="nama" value="<?php echo $nama; ?>">
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