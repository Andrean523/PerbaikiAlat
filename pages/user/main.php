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
                  <h4>Data User</h4>
                  <div class="card-header-action">
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive table-invoice">
                    <table class="table table-striped">
                      <tr>
                        <th>ID User</th>
                        <th>Nama</th>
                        <th>Perusahaan</th>
                        <th>Action</th>
                      </tr>
                      <?php
                        $QueryAdmin =  mysqli_query($koneksi, "SELECT * FROM tbl_user");
                        while ($row = mysqli_fetch_array($QueryAdmin)) {
                        ?>
                      <tr>
                          <td><?= $row['id_user']; ?></td>
                          <td><?= $row['nama_user']; ?></td>
                          <td><?= $row['perusahaan']; ?></td>
                        <td>
                          <a href="#" class="btn btn-primary">Hasil Konsultasi</a>
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
