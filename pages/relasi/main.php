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
          <h4>Data Hubungan</h4>
          <div class="card-header-action">
            <a href="form_tambah.php" class="btn btn-danger">Tambah Relasi <i class="fas fa-chevron-right"></i></a>
          </div>
        </div>
        <div class="card-body p-0">
          <div class="table-responsive table-invoice">
            <table class="table table-striped">
              <tr>
                <th>Kerusakan</th>
                <th>Gejala</th>
                <th>Action</th>
              </tr>
              <?php
              $QueryRelasi =  mysqli_query($koneksi, "SELECT * FROM tbl_rule tr INNER JOIN tbl_kerusakan tk ON tr.maka = tk.kode_kerusakan");
              while ($data = mysqli_fetch_array($QueryRelasi)) {
              ?>
                <tr>
                  <td><?php echo $data['nama_kerusakan']; ?></td>
                  <td><?php echo str_replace("AND", ", ", $data['jika']); ?></td>

                  <td>
                    <a href="form_edit.php?id_rule=<?= $data['id_rule']; ?>" class="btn btn-icon btn-primary">
                      <i class="far fa-edit"></i>
                    </a>
                    <a href="hapus.php?id_rule=<?= $data['id_rule']; ?>" class="btn btn-icon btn-danger">
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