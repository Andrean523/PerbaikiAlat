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
          <h4>Data Kerusakan</h4>
          <div class="card-header-action">
            <a href="form_tambah.php" class="btn btn-danger">Tambah Kerusakan <i class="fas fa-chevron-right"></i></a>
          </div>
        </div>
        <div class="card-body p-0">
          <div class="table-responsive table-invoice">
            <table class="table table-striped">
              <tr>
                <th>Kode Kerusakan</th>
                <th>Nama Kerusakan</th>
                <th width="45%">Solusi Kerusakan</th>
                <th>Action</th>
              </tr>
              <?php
              $QueryKerusakan =  mysqli_query($koneksi, "SELECT * FROM tbl_kerusakan");
              while ($data = mysqli_fetch_array($QueryKerusakan)) {
              ?>
                <tr>
                  <td><?php echo $data['kode_kerusakan']; ?></td>
                  <td><?php echo $data['nama_kerusakan']; ?></td>
                  <td><?php echo $data['solusi_kerusakan']; ?></td>

                  <td>
                    <a href="form_edit.php?id_kerusakan=<?= $data['id_kerusakan']; ?>" class="btn btn-icon btn-primary">
                      <i class="far fa-edit"></i>
                    </a>
                    <a href="hapus.php?id_kerusakan=<?= $data['id_kerusakan']; ?>" class="btn btn-icon btn-danger">
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