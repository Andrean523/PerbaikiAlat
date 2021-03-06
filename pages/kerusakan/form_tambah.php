<?php
include "../../lib/koneksi.php";
include "../header.php";
?>

<!-- Main Content -->
<div class="main-content">
  <section class="section">

    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header">
            <h4>Form Tambah Kerusakan</h4>
            <div class="card-header-action">
              <a href="main.php" class="btn btn-danger">Kembali <i class="fas fa-chevron-right"></i></a>
            </div>
          </div>
          <div class="card-body p-0">

            <form action="simpan_kerusakan.php" method="POST">
              <div class="card-body">

                <div class="form-group">
                  <label>Kode Kerusakan</label>
                  <input type="text" class="form-control" required="" name="kode">
                </div>

                <div class="form-group">
                  <label>Nama Kerusakan</label>
                  <input type="text" class="form-control" required="" name="nama">
                </div>

                <div class="form-group">
                  <label>Solusi</label>
                  <input type="text" class="form-control" required="" name="solusi">
                </div>

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