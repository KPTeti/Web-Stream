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
  <title>Migration Menu</title>
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
        <h2> Layanan Pengisian Migration </h2>
      </div></section>

      <form class="form-basic" name="form" id="form" method="POST" action="insert_migration.php">
        <h4 class="text-center">Isikan data sesuai dengan form di bawah ini</h4>
        <div class="form-group">
        <label for="text-input" class="control-label">Nama Teknisi</label>
        <input type="text" name="Nama_Teknisi" class="form-control" id="Nama_Teknisi" placeholder="Masukan Nama Teknisi" required="">
    </div>
        <div class="form-group">
          <label for="text-input" class="control-label">Kode QR Port</label>
          <input type="text" name="Kode_QR_Port" class="form-control" id="Kode_QR_Port" placeholder="Masukan kode QR Port" required="">
          <div id="umpanbalik"></div>
    </div>
    
    <script type="text/javascript">
      $(document).ready(function(){
        $('#umpanbalik').load('cekMigration.php').show();

        $('#Kode_QR_Port').keyup(function() {
          //$('#umpanbalik').append('d');
          $.post("cekMigration.php",
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
              <input type="text" class="form-control" value="" name="odp3" id="odp3" onblur="combine()" required="">
            </div>

            <div class="form-group col-sm-3">
              <label>/--</label>
              <input type="text" class="form-control" value="" name="odp4" id="odp4" onblur="combine()" required="">
            </div>

            <input type="text" name="Nama_ODP" class="form-control" id="Nama_ODP" readonly=readonly >
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
          <label for="text-input" class="control-label">Port ODP</label>
          <input type="text" name="Port_ODP" class="form-control" id="Port_ODP" placeholder="Masukan port ODP" required="">
        </div>
        <div class="form-group">
                  <label for="text-input" class="control-label">Nomor Service</label>

                  <div class="form-group">
                        <div class="form-group col-sm-3">
                            <input type="text" class="form-control" value="0274" name="no_telpon1" id="no_telpon1" onblur="combine_no()" readonly=readonly>
                        </div>
                        <div class="form-group col-sm-9">
                            <input type="text" class="form-control" value="" name="no_telpon2" id="no_telpon2" onblur="combine_no()" required="">
                        </div>
                        <input type="text" name="No_Service" class="form-control" id="No_Service" readonly=readonly >
                </div>
                </div>

                <script>
                  function combine_no() {
                    var no_telpon1 = document.form.no_telpon1.value;
                    var no_telpon2 = document.form.no_telpon2.value;
                    var no_service = no_telpon1 + "-" + no_telpon2;
                    document.form.No_Service.value = no_service;
                  }
                </script>

        <div class="form-group">
          <label for="text-input" class="control-label">SN ONT</label>
          <input type="text" name="SN_ONT" class="form-control" id="SN_ONT" placeholder="Masukan SN ONT" required="">
        </div>
        <div class="form-group">
          <label class="control-label">Catatan:</label>
          <p class="form-static-control">Harap periksa kembali data yang sudah Anda masukan. Form tidak boleh ada yang kosong.</p>
        </div>
        <div class="form-group">
          <button type="button" id="myBtn" class="btn btn-success btn-block">Submit</button>
        </div>
        <!--
        <div class="form-group">
          <input type="button" name="btn" value="Submit" id="submitBtn" data-toggle="modal" data-target="#confirm-submit" class="btn btn-success btn-block" />
        </div>
      -->
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
                    <th>Kode Angka QR: </th>
                    <td id="qr_port"></td>
                  </tr>
                  <tr>
                    <th>Nama ODP: </th>
                    <td id="nama_odp"></td>
                  </tr>
                  <tr>
                    <th>Port ODP: </th>
                    <td id="port_odp"></td>
                  </tr>
                  <tr>
                    <th>Nomor Service: </th>
                    <td id="nomor_service"></td>
                  </tr>
                  <tr>
                    <th>SN ONT: </th>
                    <td id="sn_ont"></td>
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
            $('#qr_port').text($('#Kode_QR_Port').val());
            $('#nama_odp').text($('#Nama_ODP').val());
            $('#port_odp').text($('#Port_ODP').val());
            $('#nomor_service').text($('#No_Service').val());
            $('#sn_ont').text($('#SN_ONT').val());
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
