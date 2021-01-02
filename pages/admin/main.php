<?php
include "../../lib/koneksi.php";
include "../header.php";
?>
<!-- Main Content -->
<div class="main-content">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4>Data Admin</h4>
          <div class="card-header-action">
            <a href="form_tambah_admin.php" class="btn btn-danger">Tambah Admin <i class="fas fa-chevron-right"></i></a>
          </div>
        </div>
        <div class="card-body p-0">
          <div class="table-responsive table-invoice">
            <table class="table table-striped">
              <tr>
                <th>Nama</th>
                <th>Username</th>
                <th>Password</th>
                <th>Action</th>
              </tr>
              <?php
              $QueryAdmin =  mysqli_query($koneksi, "SELECT * FROM tbl_admin");
              while ($data = mysqli_fetch_array($QueryAdmin)) {
              ?>
                <tr>
                  <td><?php echo $data['nama_admin']; ?></td>
                  <td><?php echo $data['username']; ?></td>
                  <td><?php echo $data['password']; ?></td>
                  <td>
                    <a href="form_edit_admin.php?id_admin=<?= $data['id_admin']; ?>" class="btn btn-icon btn-primary">
                      <i class="far fa-edit"></i>
                    </a>
                    <a href="hapus.php?id_admin=<?= $data['id_admin']; ?>" class="btn btn-icon btn-danger">
                      <i class="fas fa-times"></i>
                    </a>
                  </td>
                </tr>
              <?php } ?>
            </table>
          </div>
        </div>
      </div>
    </div>
    <?php
    include "../footer.php";
    ?>