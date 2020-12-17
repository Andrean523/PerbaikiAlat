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
                  <h4>Data Gejala</h4>
                  <div class="card-header-action">
                    <a href="form_tambah.php" class="btn btn-danger">Tambah Gejala <i class="fas fa-chevron-right"></i></a>
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive table-invoice">
                    <table class="table table-striped">
                      <tr>
                        <th>ID Gejala</th>
                        <th>Inisial Gejala</th>
                        <th>Nama Gejala</th>
                        <th>Action</th>
                      </tr>
                      <?php
                        $QueryGejala =  mysqli_query($koneksi, "SELECT * FROM tbl_gejala");
                        while ($data = mysqli_fetch_array($QueryGejala)) {
                        ?>
                      <tr>
                          <td><?php echo $data['id_gejala']; ?></td>
                          <td><?php echo $data['kode_gejala']; ?></td>
                          <td><?php echo $data['nama_gejala']; ?></td>
                        <td>
                          <a href="form_edit.php?id_gejala=<?= $data['id_gejala']; ?>" class="btn btn-primary">Edit</a>
                           <a href="hapus.php?id_gejala=<?= $data['id_gejala']; ?>" class="btn btn-primary">Hapus</a>
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
