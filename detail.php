<?php
$rootfolder= $_SERVER['DOCUMENT_ROOT'];
$prjectfolder = "koprasi";
include($rootfolder.'/'.$prjectfolder.'/php/connection.php');

$id=$_GET['post'];
$sql = "SELECT * FROM transaksi WHERE rekening = '$id'";
$qry = mysql_query($sql);

$sqljan = "SELECT * FROM transaksi WHERE MONTH(tanggal) = 1 AND rekening = '$id' ORDER BY saldo_akhir asc LIMIT 1";
$qryjan = mysql_query($sqljan);
$minjan = mysql_fetch_assoc($qryjan);
$saldojan = $minjan['saldo_akhir'];
$bungajan = $saldojan * 0.005;

$sqlfeb = "SELECT * FROM transaksi WHERE MONTH(tanggal) = 2 AND rekening = '$id' ORDER BY saldo_akhir asc LIMIT 1";
$qryfeb = mysql_query($sqlfeb);
$minfeb = mysql_fetch_assoc($qryfeb);
$saldofeb = $minfeb['saldo_akhir'];
$bungafeb = $saldofeb * 0.005;

$sqlmar = "SELECT * FROM transaksi WHERE MONTH(tanggal) = 3 AND rekening = '$id' ORDER BY saldo_akhir asc LIMIT 1";
$qrymar = mysql_query($sqlmar);
$minmar = mysql_fetch_assoc($qrymar);
$saldomar = $minmar['saldo_akhir'];
$bungamar = $saldomar * 0.005;

$sqlapr = "SELECT * FROM transaksi WHERE MONTH(tanggal) = 4 AND rekening = '$id' ORDER BY saldo_akhir asc LIMIT 1";
$qryapr = mysql_query($sqlapr);
$minapr = mysql_fetch_assoc($qryapr);
$saldoapr = $minapr['saldo_akhir'];
$bungaapr = $saldoapr * 0.005;

$sqlmei = "SELECT * FROM transaksi WHERE MONTH(tanggal) = 5 AND rekening = '$id' ORDER BY saldo_akhir asc LIMIT 1";
$qrymei = mysql_query($sqlmei);
$minmei = mysql_fetch_assoc($qrymei);
$saldomei = $minmei['saldo_akhir'];
$bungamei = $saldomei * 0.005;

$sqljun = "SELECT * FROM transaksi WHERE MONTH(tanggal) = 6 AND rekening = '$id' ORDER BY saldo_akhir asc LIMIT 1";
$qryjun = mysql_query($sqljun);
$minjun = mysql_fetch_assoc($qryjun);
$saldojun = $minjun['saldo_akhir'];
$bungajun = $saldojun * 0.005;

$sqljul = "SELECT * FROM transaksi WHERE MONTH(tanggal) = 7 AND rekening = '$id' ORDER BY saldo_akhir asc LIMIT 1";
$qryjul = mysql_query($sqljul);
$minjul = mysql_fetch_assoc($qryjul);
$saldojul = $minjul['saldo_akhir'];
$bungajul = $saldojul * 0.005;

$sqlagt = "SELECT * FROM transaksi WHERE MONTH(tanggal) = 8 AND rekening = '$id' ORDER BY saldo_akhir asc LIMIT 1";
$qryagt = mysql_query($sqlagt);
$minagt = mysql_fetch_assoc($qryagt);
$saldoagt = $minagt['saldo_akhir'];
$bungaagt = $saldoagt * 0.005;

$sqlsep = "SELECT * FROM transaksi WHERE MONTH(tanggal) = 9 AND rekening = '$id' ORDER BY saldo_akhir asc LIMIT 1";
$qrysep = mysql_query($sqlsep);
$minsep = mysql_fetch_assoc($qrysep);
$saldosep = $minsep['saldo_akhir'];
$bungasep = $saldosep * 0.005;


$sqloct = "SELECT * FROM transaksi WHERE MONTH(tanggal) = 10 AND rekening = '$id' ORDER BY saldo_akhir asc LIMIT 1";
$qryoct = mysql_query($sqloct);
$minoct = mysql_fetch_assoc($qryoct);
$saldoct = $minoct['saldo_akhir'];
$bungaoct = $saldoct * 0.005;

$sqlnov = "SELECT * FROM transaksi WHERE MONTH(tanggal) = 11 AND rekening = '$id' ORDER BY saldo_akhir asc LIMIT 1";
$qrynov = mysql_query($sqlnov);
$minnov = mysql_fetch_assoc($qrynov);
$saldonov = $minnov['saldo_akhir'];
$bunganov = $saldonov * 0.005;

$sqldec = "SELECT * FROM transaksi WHERE MONTH(tanggal) = 12 AND rekening = '$id' ORDER BY saldo_akhir asc LIMIT 1";
$qrydec = mysql_query($sqldec);
$mindec = mysql_fetch_assoc($qrydec);
$saldodec = $mindec['saldo_akhir'];
$bungadec = $saldodec * 0.005;

$sum = $bungajan+$bungafeb+$bungamar+$bungaapr+$bungamei+$bungajun+$bungajul+$bungaagt+$bungasep+$bungaoct+$bunganov+$bungadec;

 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Area | Posts</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
  </head>
  <body>

    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">koprasi</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Dashboard</a></li>
            <li><a href="nasabah.php">Nasabah</a></li>
            <li class="active"><a href="posts.html">Transaksi</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Welcome, Brad</a></li>
            <li><a href="login.html">Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Transaksi</h1>
          </div>
          <div class="col-md-2">
          </div>
        </div>
      </div>
    </header>

    <section id="breadcrumb">
      <div class="container">
        <ol class="breadcrumb">
          <li><a href="index.php">Dashboard</a></li>
          <li class="active">Transaksi</li>
        </ol>
      </div>
    </section>

    <section id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="list-group">
              <a href="index.html" class="list-group-item active main-color-bg">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard
              </a>
              <a href="nasabah.php" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Nasabah <span class="badge">12</span></a>
              <a href="transaksi.php" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Transaksi <span class="badge">200</span></a>
            </div>

          </div>

          <div class="col-md-9">
            <!-- Website Overview -->
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Transaksi rekening : <?php echo $id; ?></h3>
              </div>
              <div class="panel-body">
                <br>
                <table class="table table-striped table-hover">
                      <tr>
                        <th>Nama</th>
                        <th>Jumlah</th>
                        <th>Nominal</th>
                        <th>Tanggal</th>
                        <th>Teller</th>
                        <th>Rekening</th>
                        <th>Jenis Transaksi</th>
                        <th>Saldo Awal</th>
                        <th>Saldo Akhir</th>
                        <th>Keterangan</th>
                        <th></th>
                      </tr>
                      <?php
                      while ($data = mysql_fetch_assoc($qry)) {
                       ?>
                       <tr>
                         <td><?php echo $data['Nama']; ?></td>
                         <td><?php echo $data['Jumlah']; ?></td>
                         <td><?php echo $data['Nominal']; ?></td>
                         <td><?php echo $data['tanggal']; ?></td>
                         <td><?php echo $data['teller']; ?></td>
                         <td><?php echo $data['rekening']; ?></td>
                         <td><?php echo $data['jenis']; ?></td>
                          <td><?php echo $data['saldo_awal']; ?></td>
                          <td><?php echo $data['saldo_akhir']; ?></td>
                          <td><?php echo $data['keterangan']; ?></td>

                       </tr>
                       <?php
                         }
                        ?>
                    </table>
              </div>
              </div>

              <div class="panel panel-default">
                <div class="panel-heading main-color-bg">
                  <h3 class="panel-title">Bunga rekening : <?php echo $id; ?></h3>
                </div>
                <div class="panel-body">
                  <br>
                  <table class="table table-striped table-hover">
                        <tr>
                          <th>Bulan</th>
                          <th>Saldo Terendah</th>
                          <th>Bunga</th>
                          <th></th>
                        </tr>
                        <tr>
                          <td>Januari</td>
                          <td><?php echo $saldojan  ?></td>
                          <td><?php echo $bungajan  ?></td>
                        </tr>
                        <tr>
                          <td>Februari</td>
                          <td><?php echo $saldofeb  ?></td>
                          <td><?php echo $bungafeb ?></td>
                        </tr>
                        <tr>
                          <td>Maret</td>
                          <td><?php echo $saldomar  ?></td>
                          <td><?php echo $bungamar  ?></td>
                        </tr>
                        <tr>
                          <td>April</td>
                          <td><?php echo $saldoapr  ?></td>
                          <td><?php echo $bungaapr  ?></td>
                        </tr>
                        <tr>
                          <td>Mei</td>
                          <td><?php echo $saldomei  ?></td>
                          <td><?php echo $bungamei  ?></td>
                        </tr>
                        <tr>
                          <td>Juni</td>
                          <td><?php echo $saldojun  ?></td>
                          <td><?php echo $bungajun  ?></td>
                        </tr>
                        <tr>
                          <td>Juli</td>
                          <td><?php echo $saldojul  ?></td>
                          <td><?php echo $bungajul  ?></td>
                        </tr>
                        <tr>
                          <td>Agustus</td>
                          <td><?php echo $saldoagt  ?></td>
                          <td><?php echo $bungaagt  ?></td>
                        </tr>
                        <tr>
                          <td>September</td>
                          <td><?php echo $saldosep  ?></td>
                          <td><?php echo $bungasep  ?></td>
                        </tr>
                        <tr>
                          <td>Oktober</td>
                          <td><?php echo $saldoct  ?></td>
                          <td><?php echo $bungaoct  ?></td>
                        </tr>
                        <tr>
                          <td>November</td>
                          <td><?php echo $saldonov  ?></td>
                          <td><?php echo $bunganov  ?></td>
                        </tr>
                        <tr>
                          <td>Desember</td>
                          <td><?php echo $saldodec  ?></td>
                          <td><?php echo $bungadec  ?></td>
                        </tr>
                        <tr>
                          <td>Total Bunga</td>
                          <td><?php echo $sum; ?></td>
                            <form id="bunga" method="post" action="php/bunga.php">
                              <input name="ammount" type="hidden" value="<?php echo  $sum ?>">
                              <input name="account" type="hidden" value="<?php echo  $id ?>">
                              <td><button type="submit">submit</button></td>
                            </form>
                        </tr>
                      </table>
                </div>
                </div>
          </div>


          </div>

        </div>
      </div>
    </section>

    <footer id="footer">
      <p>Copyright Heirovaards, &copy; 2018</p>
    </footer>

    <!-- Modals -->

    <!-- Add Page -->
    <div class="modal fade" id="addPage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form>
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add Page</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label>Page Title</label>
          <input type="text" class="form-control" placeholder="Page Title">
        </div>
        <div class="form-group">
          <label>Page Body</label>
          <textarea name="editor1" class="form-control" placeholder="Page Body"></textarea>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox"> Published
          </label>
        </div>
        <div class="form-group">
          <label>Meta Tags</label>
          <input type="text" class="form-control" placeholder="Add Some Tags...">
        </div>
        <div class="form-group">
          <label>Meta Description</label>
          <input type="text" class="form-control" placeholder="Add Meta Description...">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </form>
    </div>
  </div>
</div>

  <script>
     CKEDITOR.replace( 'editor1' );
 </script>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
