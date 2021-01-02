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
            <a href="laporan.php" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Laporan <i class="fas fa-chevron-right"></i></a>
          </div>
        </div>
        <div class="card-body p-0">
          <div class="table-responsive table-invoice">
            <table class="table table-striped">
              <tr>
                <th>Nama User</th>
                <th>Perusahaan</th>
              </tr>
              <?php
              $QueryUser =  mysqli_query($koneksi, "SELECT * FROM tbl_user");
              while ($row = mysqli_fetch_array($QueryUser)) {
              ?>
                <tr>
                  <td><?= $row['nama_user']; ?></td>
                  <td><?= $row['perusahaan']; ?></td>
                  <td>
                  </td>
                </tr>
              <?php } ?>
            </table>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="myModal">Laporan sesuai tanggal</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="laporan.php" method="post" enctype="multipart/form-data" role="form">
            <div class="modal-body">
              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Tanggal Awal</label>
                <input type="date" name="tanggalawal" class="form-control" id="input-ame" placeholder="" autofocus>
              </div>

              <div class="form-group">
                <label for="recipient-name" class="col-form-label">Tanggal Akhir</label>
                <input type="date" name="tanggalakhir" class="form-control" id="input-ame" placeholder="" autofocus>
              </div>

            </div>
            <div class="modal-footer">
              <button type="submit" class="btn btn-info">Lanjut ></button>
            </div>
          </form>
        </div>

      </div>
    </div>
    <!-- Modal -->
    <?php
    include "../footer.php";
    ?>