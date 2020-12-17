<?php
include "../../lib/koneksi.php";
include "../header.php";
?>


<?php

$id_admin = $_GET['id_admin'];

$sql =  "SELECT * FROM tbl_admin WHERE id_admin = '$id_admin'";
$result = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_array($result);

$nama =$data['nama_admin'];
$username = $data['username'];
$password =$data['password'];

?>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
   
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h4>Form Edit Admin</h4>
                  <div class="card-header-action">
                    <a href="main.php" class="btn btn-danger">Kembali <i class="fas fa-chevron-right"></i></a>
                  </div>
                </div>
                <div class="card-body p-0">

                  <form action="aksi_edit.php" method="POST">
                    <div class="card-body">
                    <input type="hidden" name="id_admin" value="<?php echo $data['id_admin']; ?>">
                      <div class="form-group">
                        <label>Nama Admin</label>
                        <input type="text" class="form-control" required="" name = "nama" value="<?php echo $nama; ?>">
                      </div>
                     
                      <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" required="" name="username" value="<?php echo $username; ?>">
                      </div>
                      <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" required="" name="password" value="<?php echo $password; ?>">
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