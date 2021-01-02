<?php
include "../../lib/koneksi.php";
include "../header.php";
?>


<?php

$id_rule = $_GET['id_rule'];
$sql =  "SELECT * FROM tbl_rule WHERE id_rule = '$id_rule'";
$result = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_array($result);


?>

<!-- Main Content -->
<div class="main-content">
  <section class="section">

    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4>Form Edit Relasi</h4>
            <div class="card-header-action">
              <a href="main.php" class="btn btn-danger">Kembali <i class="fas fa-chevron-right"></i></a>
            </div>
          </div>
          <div class="card-body p-0">

            <form action="aksi_edit.php" method="POST">
              <div class="card-body">
                <input type="hidden" name="id_rule" value="<?php echo $data['id_rule']; ?>">

                <div class="form-group">
                  <label>Nama Kerusakan</label>
                  <select class="form-control" name="kode_kerusakan">
                    <option>Pilih Kerusakan</option>
                    <?php
                    include "../../lib/koneksi.php";
                    $Querykota = mysqli_query($koneksi, "SELECT * FROM tbl_kerusakan ORDER BY nama_kerusakan ASC");
                    while ($kode_kerusakan = mysqli_fetch_array($Querykota)) {
                    ?>
                      <option value="<?= $kode_kerusakan['kode_kerusakan']; ?>"><?= $kode_kerusakan['nama_kerusakan']; ?></option>
                    <?php } ?>
                  </select>
                </div>
                <label>Nama Gejala</label>
                <div>
                  <?php
                  $query = mysqli_query($koneksi, "SELECT * FROM tbl_gejala ORDER BY kode_gejala ASC");
                  while ($data = mysqli_fetch_array($query)) {
                    $a = $data['kode_gejala'];
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
                <div class="card-footer text-right">
                  <button class="btn btn-primary">Submit</button>
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