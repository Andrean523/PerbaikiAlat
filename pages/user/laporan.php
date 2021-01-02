<?php
include "../../lib/koneksi.php";
?>

<!DOCTYPE html>
<html>

<head>
    <!-- Load file CSS Bootstrap offline -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="js/jquery-3.4.1.js"></script>
    <script src="datepicker/js/bootstrap-datepicker.js"></script>
    <link rel="stylesheet" href="datepicker/css/datepicker.css">
</head>

<?php
$tgl_awal = date('Y-m-d', strtotime($_POST["tanggalawal"]));
$tgl_akhir = date('Y-m-d', strtotime($_POST["tanggalakhir"]));
$sql = mysqli_query($koneksi, "select * from tbl_user where tanggal between '" . $tgl_awal . "' and '" . $tgl_akhir . "' ORDER BY tanggal asc");
$jumlah = mysqli_num_rows($sql);
if ($jumlah > 0) { ?>

    <div class="row">
        <div class="col-md-12">
            <center>

                <body>
                    <div class="container">
                        <br>
                        <h4>Data Berdasarkan Tanggal</h4>
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal</th>
                                    <th>Nama User</th>
                                    <th>Perusahaan</th>
                                </tr>
                            </thead>
                            <?php
                            $no = 0;
                            while ($data = mysqli_fetch_array($sql)) {
                                $no++;
                            ?>
                                <tbody>
                                    <tr>
                                        <td style="text-align:center"><?php echo $no; ?></td>
                                        <td><?php echo date('d-m-Y', strtotime($data["tanggal"]));   ?></td>
                                        <td><?php echo $data["nama_user"];   ?></td>
                                        <td><?php echo $data["perusahaan"];   ?></td>
                                    </tr>
                                </tbody>
                        <?php }
                        } else {
                            echo "<script> 
                            alert('Data Kosong');
                            window.location='main.php'; 
                            </script>";
                        }
                        ?>
                        </table>
                        <button class="btn btn-warning btn-icon icon-left" href="#" target='_blank' onclick="window.print()"><i class="fas fa-print"></i> Print</button>
                    </div>
                </body>
            </center>
        </div>
    </div>

</html>

<style>
    h1 {
        font-family: sans-serif;
    }

    table {
        font-family: Arial, Helvetica, sans-serif;
        font-size: 12px;
        color: #666;
        text-shadow: 1px 1px 0px #fff;
        background: #eaebec;
        border: #ccc 1px solid;
    }

    table th {
        padding: 15px 35px;
        border-left: 1px solid #e0e0e0;
        border-bottom: 1px solid #e0e0e0;
        background: #ededed;
    }

    table th:first-child {
        border-left: none;
    }

    table tr {
        text-align: center;
        padding-left: 20px;
    }

    table td:first-child {
        text-align: left;
        border-left: 0;
    }

    table td {
        padding: 5px;
        border-top: 1px solid #ffffff;
        border-bottom: 1px solid #e0e0e0;
        border-left: 1px solid #e0e0e0;
        background: #fafafa;
        background: -webkit-gradient(linear, left top, left bottom, from(#fbfbfb), to(#fafafa));
        background: -moz-linear-gradient(top, #fbfbfb, #fafafa);
    }

    table tr:last-child td {
        border-bottom: 0;
    }

    table tr:last-child td:first-child {
        -moz-border-radius-bottomleft: 3px;
        -webkit-border-bottom-left-radius: 3px;
        border-bottom-left-radius: 3px;
    }

    table tr:last-child td:last-child {
        -moz-border-radius-bottomright: 3px;
        -webkit-border-bottom-right-radius: 3px;
        border-bottom-right-radius: 3px;
    }

    table tr:hover td {
        background: #f2f2f2;
        background: -webkit-gradient(linear, left top, left bottom, from(#f2f2f2), to(#f0f0f0));
        background: -moz-linear-gradient(top, #f2f2f2, #f0f0f0);
    }
</style>