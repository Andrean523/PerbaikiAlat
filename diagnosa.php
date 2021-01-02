<?php
include "lib/koneksi.php";
include "header.php";
?>



<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <div class="row">
      <div class="col-lg-12">
        <div class="section-body">
          <h2 class="section-title">Halaman Diagnosa</h2>
          <p class="section-lead">This page is just an example for you to create your own page.</p>
          <div class="card">
            <div class="card-header">
              <h4>Diagnosa</h4>
              <div class="card-header-action">
                <a href="form_tambah_user.php" class="btn btn-danger" data-toggle="modal" data-target="#myModal">Mulai Diagnosa <i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
            <div class="card-body">
              LLorem Ipsum is simply dummy text of the printing and typesetting industry.
              Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
              when an unknown printer took a galley of type and scrambled it to make a type specimen book.
              It has survived not only five centuries, but also the leap into electronic typesetting,
              remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets
              containing Lorem Ipsum passages, and more recently with
              desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </div>
            <div class="card-footer bg-whitesmoke">
              This is card footer
            </div>
          </div>
        </div>
      </div>
  </section>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="myModal">Identitas User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="simpan_user.php" method="post" enctype="multipart/form-data" role="form">
        <div class="modal-body">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nama Lengkap</label>
            <input type="text" name="nama" class="form-control" id="input-ame" placeholder="" required autofocus>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Perusahaan</label>
            <input type="text" name="perusahaan" class="form-control" placeholder="" required>
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
include "footer.php";
?>