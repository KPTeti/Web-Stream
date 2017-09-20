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
      <title>Assurance Menu</title>
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
            <h2> Layanan Pengisian Assurance </h2>
          </div></section>

          <form class="form-basic" name="form" id="form" method="POST" action="insert_assurance.php">
            <h4 class="text-center">Isikan data sesuai dengan form di bawah ini</h4>
            <div class="form-group">
              <label for="text-input" class="control-label">Nama Teknisi</label>
              <input type="text" name="Nama_Teknisi" class="form-control" id="Nama_Teknisi" placeholder="Masukan Nama Teknisi" required="">
            </div>
            <div class="form-group">
              <label for="text-input" class="control-label">Kode QR Port</label>
              <input type="text" name="Kode_QR_Port" class="form-control" id="Kode_QR_Port" placeholder="Masukan kode QR Port" required="">
            </div>
            <div id="umpanbalik"></div>
            <script type="text/javascript">
                $(document).ready(function(){
                  $('#umpanbalik').load('cekAssurance.php').show();

                  $('#Kode_QR_Port').keyup(function() {
                    //$('#umpanbalik').append('d');
                    $.post("cekAssurance.php",
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
              <label>A</label>
              <input type="text" class="form-control" value="" name="odp2" id="odp2" onblur="combine()" required="">
            </div>

            <div class="form-group col-sm-3">
              <label>B</label>
              <input type="text" class="form-control" value="" name="odp3" id="odp3" onblur="combine()" required="">
            </div>

            <div class="form-group col-sm-3">
              <label>C</label>
              <input type="text" class="form-control" value="" name="odp4" id="odp4" onblur="combine()" required="">
            </div>

            <input type="text" name="Nama_ODP" class="form-control" id="Nama_ODP" readonly=readonly required="">
      </div>
    </div>

         <script type = "text/javascript">
          function combine() {
            var odpcomb1 = document.form.odp1.value;
            var odpcomb2 = document.form.odp2.value;
            var odpcomb3 = document.form.odp3.value;
            var odpcomb4 = document.form.odp4.value;
            var combination = odpcomb1 + "-" + odpcomb2 + "-" + odpcomb3 + "/" + odpcomb4;
            document.form.Nama_ODP.value = combination;
          }
         </script>

            <div class="form-group">
              <label for="text-input" class="control-label">Port ODP</label>
              <input type="text" name="Port_ODP" class="form-control" id="Port_ODP" placeholder="Masukan port ODP" required="">
            </div>
            <div class="form-group">
              <label for="text-input" class="control-label">Nomor Service</label>
              <input type="number" name="No_Service" class="form-control" id="No_Service" placeholder="Masukan nomor service" required="">
            </div>
            <div class="form-group">
              <label for="text-input" class="control-label">SN ONT</label>
              <input type="text" name="SN_ONT" class="form-control" id="SN_ONT" placeholder="Masukan SN ONT" required="">
            </div>
            <div class="form-group">
              <label class="control-label">Catatan:</label>
              <p class="form-static-control">Harap periksa kembali data yang sudah Anda masukan. Form tidak boleh ada yang kosong.</p>
            </div>
            <div class="form-group">
              <input type="button" name="btn" value="Submit" id="submitBtn" data-toggle="modal" data-target="#confirm-submit" class="btn btn-success btn-block" />
            </div>
           <div class>
              <a href="logout.php">
                  <button type="button" class="btn btn-warning">Logout</button>
              </a>
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

          <script type="text/javascript">
          $('#submitBtn').click(function() {
            $('#nama_teknisi').text($('#Nama_Teknisi').val());
            $('#qr_port').text($('#Kode_QR_Port').val());
            $('#nama_odp').text($('#Nama_ODP').val());
            $('#port_odp').text($('#Port_ODP').val());
            $('#nomor_service').text($('#No_Service').val());
            $('#sn_ont').text($('#SN_ONT').val());
          });

            $('#submit').click(function () {
            /* when the submit button in the modal is clicked, submit the form */
            alert('Data berhasil dikirim');
            $('#form').submit();
        });
          </script>
          <script src="main.js"></script>
          <script src="assets/js/jquery.min.js"></script>
          <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        </body>

        </html>
