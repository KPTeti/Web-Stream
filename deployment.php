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
          <div id="branding">
            <a href="index.php">
              <img src="img\telkom.png" style="width:250px;height: auto; padding: 15px;">
            </a>
          </div>
    </header>

    <section id="headtext">
      <div class="container">
        <h2> Layanan Pengisian Deployment </h2>
      </div></section>

      <form class="form-basic" name="form" id="form" method="POST" action="insert_deployment.php">
        <h4 class="text-center">Isikan data sesuai dengan form di bawah ini</h4>
        <div class="form-group">
          <label for="text-input" class="control-label">Nama Teknisi</label>
          <input type="text" name="Nama_Teknisi" class="form-control" id="Nama_Teknisi" placeholder="Masukan Nama Teknisi" required>
        </div>
        <div class="form-group">
          <label for="text-input" class="control-label">Kode QR ODP</label>
          <input type="text" name="Kode_QR_ODP" class="form-control" id="Kode_QR_ODP" placeholder="Masukan kode QR Port" required>
          <div id="umpanbalik"></div>
        </div>
        

        <script type="text/javascript">
        $(document).ready(function(){
          $('#umpanbalik').load('cekDeployment.php').show();

          $('#Kode_QR_Port').keyup(function() {
            //$('#umpanbalik').append('d');
            $.post("cekDeployment.php",
            {kode_qr: $('#Kode_QR_Port').val()},
            function(response){
              $('#umpanbalik').html(response);
            });
          });
        });
        </script>

        <div class="form-group">
          <label for="text-input" class="control-label">Nama ODP</label>

          <div class="form-group">
            <div class="form-group col-sm-3">
              <label>ODP</label>
              <input type="text" class="form-control" value="ODP" name="odp1" id="odp1" onblur="combine()" readonly=readonly>
            </div>

            <div class="form-group col-sm-3">
              <label>STO</label>
              <select class="form-control" name="odp2" id="odp2" onblur="combine()" required>
                  <option value="BBS">BBS</option>
                  <option value="BTL">BTL</option>
                  <option value="KEN">GOD</option>
                  <option value="KBU">KBU</option>
                  <option value="KEN">KEN</option>
                  <option value="KEN">KGD</option>
                  <option value="KEN">KLS</option>
                  <option value="PGR">PGR</option>
                  <option value="KEN">PKM/KLU</option>
                  <option value="KEN">SMN</option>
                  <option value="PGR">WNS</option>
                  <option value="KEN">WTS</option>
              </select>
            </div>

            <div class="form-group col-sm-3">
              <label>ODC</label>
              <input type="number" min="0" class="form-control" value="" name="odp3" id="odp3" onblur="combine()" required>
            </div>

            <div class="form-group col-sm-3">
              <label>/--</label>
              <input type="number" min="0" class="form-control" value="" name="odp4" id="odp4" onblur="combine()" required>
            </div>

            <input type="text" name="Nama_ODP" class="form-control" id="Nama_ODP" readonly=readonly>
          </div>
        </div>

        <script type = "text/javascript">
         function combine() {
           var odp1 = document.form.odp1.value;
           var odp2 = document.form.odp2.value;
           var odp3 = document.form.odp3.value;
           var odp4 = document.form.odp4.value;
           var combination = odp1 + "-" + odp2 + "-" + odp3 + "/" + odp4;
           document.form.Nama_ODP.value = combination;
         }
        </script>

        <div class="form-group">
          <label for="text-input" class="control-label">Kapasitas ODP</label>
          <input type="number" name="Kapasitas_ODP" class="form-control" id="Kapasitas_ODP" placeholder="Masukan kapasitas ODP" required>
        </div>
        <div class="form-group">
          <label for="text-input" class="control-label">Status Port</label>
          <select class="form-control" name="Status_Port" id="Status_Port" placeholder="Status Port" required>
            <option value="Kosong">Kosong</option>
            <option value="Isi">Isi</option>
          </select>
        </div>
        <div class="form-group">
          <label for="text-input" class="control-label">Koordinat ODP</label>
          <input type="text" name="Koordinat_ODP" class="form-control" id="Koordinat_ODP" placeholder="Masukan koordinat ODP" required>
        </div>
        <div class="form-group">
          <label class="control-label">Catatan:</label>
          <p class="form-static-control">Harap periksa kembali data yang sudah Anda masukan. Form tidak boleh ada yang kosong.</p>
        </div>
        <div class="form-group">
          <button type="button" id="myBtn" class="btn btn-success btn-block">Submit</button>
        </div>
        <div>
          <a href="logout.php">
            <button type="button" class="btn btn-warning">Logout</button>
          </a>
        </div>
      </form>

      <!-- Modal HTML -->
      <div id="myModal" class="modal fade" tabindex="-1" role="dialog">
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
                    <th>Kode QR ODP: </th>
                    <td id="qr_port"></td>
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


      <script>
      $(function(){
        $("#myBtn").click(function(){
          var form = $("#form");
          form.validate();
          if (form.valid()) {
            $("#myModal").modal();
            $('#nama_teknisi').text($('#Nama_Teknisi').val());
            $('#qr_port').text($('#Kode_QR_ODP').val());
            $('#nama_odp').text($('#Nama_ODP').val());
            $('#kapasitas_odp').text($('#Kapasitas_ODP').val());
            $('#status_port').text($('#Status_Port').val());
            $('#port_odp').text($('#Port_ODP').val());
            $('#koordinat_odp').text($('#Koordinat_ODP').val());
            $('#submit').click(function () {
              /* when the submit button in the modal is clicked, submit the form */
              alert('Data berhasil dikirim');
              $('#form').submit();
            });
          } else {
            alert("Mohon data dilengkapi");
          }
        });
      });
      </script>
      <script src="main.js"></script>
      <script src="assets/js/jquery.min.js"></script>
      <script src="assets/bootstrap/js/bootstrap.min.js"></script>
      <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.js"></script>
    </body>

    </html>
