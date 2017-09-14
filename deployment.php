<?php
session_start();
$state = $_SESSION['state'];
if ($state != "login") {
  header('Location: index_login.php');
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Deployment Menu</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/styles.css">
  <link rel="stylesheet" href="css/style-click.css">
  <script type="js/jquery.min"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <body>
    <header>
      <div class="container">
        <div id="branding">
          <a href="index.php">
            <img src="https://www.nyse.com/publicdocs/nyse/events/images/TLK_WEB_1920.png" style="width:250px;height:145px;">
          </a>
        </div>
      </div>
    </header>

    <section id="headtext">
      <div class="container">
        <h2> Layanan Pengisian Deployment </h2>
      </div></section>

      <form class="form-basic" id="form" method="POST" action="insert_deployment.php">
        <h4 class="text-center">Isikan data sesuai dengan form di bawah ini</h4>
        <div class="form-group">
          <label for="text-input" class="control-label">Nama Teknisi</label>
          <select class="form-control" name="Nama_Teknisi" id="Nama_Teknisi" required="">
            <option value="">Nama Teknisi</option>
            <option value="amija1">AMIJA1</option>
            <option value="amija2">AMIJA2</option>
          </select>
        </div>
        <div class="form-group">
        <label for="text-input" class="control-label">Kode Angka QR</label>
        <input type="text" name="Kode_Angka_QR" class="form-control" id="Kode_Angka_QR" placeholder="Masukan kode angka QR" required="">
    </div>
    <div class="form-group">
        <label for="text-input" class="control-label">Nama ODP</label>
        <input type="text" name="Nama_ODP" class="form-control" id="Nama_ODP" placeholder="Masukan nama ODP" required="">
    </div>
    <div class="form-group">
        <label for="text-input" class="control-label">Kapasitas ODP</label>
        <input type="number" name="Kapasitas_ODP" class="form-control" id="Kapasitas_ODP" placeholder="Masukan kapasitas ODP" required="">
    </div>
    <div class="form-group">
        <label for="text-input" class="control-label">Status Port</label>
        <select class="form-control" name="Status_Port" id="Status_Port" required="">
            <option value="">Status Port</option>
            <option value="amija1">Kosong</option>
            <option value="amija2">Isi</option>
        </select>
    </div>
    <div class="form-group">
        <label for="text-input" class="control-label">Port ODP Input</label>
        <input type="text" name="Port_ODP" class="form-control" id="Port_ODP" placeholder="Masukan port ODP" required="">
    </div>
    <div class="form-group">
        <label for="text-input" class="control-label">Koordinat ODP</label>
        <input type="text" name="Koordinat_ODP" class="form-control" id="Koordinat_ODP" placeholder="Masukan koordinat ODP" required="">
    </div>
    <div class="form-group">
        <label class="control-label">Catatan:</label>
        <p class="form-static-control">Harap periksa kembali data yang sudah Anda masukan. Form tidak boleh ada yang kosong.</p>
    </div>
        <div class="form-group">
          <input type="button" name="btn" value="Submit" id="submitBtn" data-toggle="modal" data-target="#confirm-submit" class="btn btn-success btn-block" />
        
        </div>
      </form>

      <!-- Modal HTML -->
      <div id="confirm-submit" class="modal fade" tabindex="-1" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title">Konfirmasi</h4>
            </div>
            <div class="modal-body">
              <p>Apakah data yang diisikan sudah benar?</p>
              <table class="table">
                <p class="text-warning"><small>
                  <tr>
                    <th>Nama Teknisi: </th>
                    <td id="nama_teknisi"></td>
                  </tr>
                  <tr>
                    <th>Kode Angka QR: </th>
                    <td id="kode_angka"></td>
                  </tr>
                  <tr>
                    <th>Nama ODP: </th>
                    <td id="nama_odp"></td>
                  </tr>
                    <tr>
                    <th>Kapasitas ODP: </th>
                    <td id="kapasitas_odp"></td>
                  </tr>
                    <tr>
                    <th>Status Port: </th>
                    <td id="status_port"></td>
                  </tr>
                  <tr>
                    <th>Port ODP Input: </th>
                    <td id="port_odp"></td>
                  </tr>
                  <tr>
                    <th>Koordinat ODP: </th>
                    <td id="koordinat_odp"></td>
                  </tr>

                </small></p>
              </table>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
              <button type="button" class="btn btn-primary" id="submit">Submit</button>
            </div>
          </div>
        </div>
      </div>

      <footer>
        <p> Telekomunikasi Indonesia, Copyright ©2017 </p>
      </footer>

           <script type="text/javascript">
      $('#submitBtn').click(function() {
        $('#nama_teknisi').text($('#Nama_Teknisi').val());
        $('#kode_angka').text($('#Kode_Angka_QR').val());
        $('#nama_odp').text($('#Nama_ODP').val());
        $('#kapasitas_odp').text($('#Kapasitas_ODP').val());
          $('#status_port').text($('#Status_Port').val());
        $('#port_odp').text($('#Port_ODP').val());
        $('#koordinat_odp').text($('#Koordinat_ODP').val());
      });
          
        $('#submit').click(function () {
        /* when the submit button in the modal is clicked, submit the form */
        alert('submitting');
        $('#form').submit();
    });
      </script>
      <script src="main.js"></script>
      <script src="assets/js/jquery.min.js"></script>
      <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    </body>

    </html>
