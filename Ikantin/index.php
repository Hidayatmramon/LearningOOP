<?php

include 'fungsi.php';
$jumlah = new Jumlah();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ikantin Wikrama</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>

<body>
  <nav class="navbar-inverse" role="navigation">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
          <span class="sr-only"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#"><i class="fa fa-shopping-cart"></i> ikantin Wikrama</a>
      </div>
      <div class="collapse navbar-collapse" id="navbar">
        <ul class="nav navbar-nav">
          <li class="active"><a href="index.php"><i class="fa fa-home"></i> Beranda</a></li>
          <li><a href="#" data-toggle="modal" data-target="#buy"><i class="fa fa-shopping-cart"></i> Beli</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#"></a></li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container" style="margin-top: 50px;">
    <div class=" panel-success">
      <div class="panel-body bg-primary">
        <div class="container">
        </div>
        <h1><i class="fa fa-shopping-cart"></i> Selamat datang di ikantin wikrama</h1>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-body">
        <div class="container">
          <div class="col-md-10">
            <h4>Klik disini untuk pembelian <button type="button" class="btn btn-success" name="button" data-toggle="modal" data-target="#buy">
                <i class="fa fa-shopping-cart"></i> Beli</button></h4>
          </div>
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-body">
        <div class="container">
          <?php
          if (isset($_POST['check'])) {
            $jmlbakso = $_POST['bakso'];
            $jmlPc = $_POST['bakwan'];
            if ($jmlbakso == null) {
              $jumlah->getJumlah(0, $jmlPc);
            } elseif ($jmlPc == null) {
              $jumlah->getJumlah($jmlbakso, 0);
            } else {
              $jumlah->getJumlah($jmlbakso, $jmlPc);
            }
            $jumlah->setHarga();
            $jumlah->cetakStruk();
          }
          ?>
        </div>
      </div>
    </div>
  </div>
  <br>
  <br>
  <div class="modal fade" id="buy" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header bg-danger" style="border-radius: 5px 5px 0px 0px;"> <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id="">Form Pembelian</h4>
        </div>
        <div class="modal-body">
          <form class="form-group" action="" method="post">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-cutlery"></i></span>
              <input type="number" class="form-control" name="bakwan" id="bakwan" placeholder="Masukkan Jumlah Bakwan Yang Dibeli ">
            </div>
            <br>
            <div class=" input-group">
              <span class="input-group-addon"><i class="fa fa-cutlery"></i></span>
              <input type="number" class="form-control" name="bakso" id="bakso" placeholder="Masukkan Jumlah Bakso Yang Dibeli ">
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" id="btnbakso" onclick="Onlybakso()" class="btn btn-success" style="float:left;">Bakwan</button>
          <button type="button" id="btnbakwan" onclick="Onlybakwan()" class="btn btn-success" style="float:left;">Bakso</button> 
          <button type="button" onclick="Keduanya()" class="btn btn-success" style="float:left;"> Bakwan & Bakso</button> 
          <button type="button" onclick="exit()" class="btn btn-default" data-dismiss="modal"><i class="fa fa-close"></i> Close</button> 
          <button type="submit" class="btn btn-primary" name="check"><i class="fa fa-check"></i> Cek Total</button>
          </form>
        </div>
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>

</html>
<script>
  function Onlybakso() {

    document.getElementById("bakso").readonly = false;
    document.getElementById("bakwan").readonly = true;

    document.getElementById("btnbakwan").disabled = false;

    document.getElementById("btnbakso").disabled = true;

  }

  function Onlybakwan() {

    document.getElementById("bakso").readonly = true;
    document.getElementById("bakwan").readonly = false;

    document.getElementById("btnbakwan").disabled = true;
    document.getElementById("btnbakso").disabled = false;

  }

  function Keduanya() {

    document.getElementById("bakso").readonly = false;

    document.getElementById("bakwan").readonly = false;

    document.getElementById("btnbakwan").disabled = false;
    document.getElementById("btnbakso").disabled = false;

  }

  function exit() {

    document.getElementById("bakso").readonly = true;

    document.getElementById("bakwan").readonly = true;

  }
</script>

>