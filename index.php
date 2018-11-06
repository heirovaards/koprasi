<?php
$rootfolder= $_SERVER['DOCUMENT_ROOT'];
$prjectfolder = "koprasi";
include($rootfolder.'/'.$prjectfolder.'/php/connection.php');

$sql = "SELECT * FROM transaksi ORDER BY tanggal DESC LIMIT 5";
$qry = mysql_query($sql);
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Area | Dashboard</title>
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
          <a class="navbar-brand" href="#">Koprasi</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Dashboard</a></li>
            <li><a href="nasabah.php">Pages</a></li>
            <li><a href="transaksi.php">Transaksi</a></li>
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
            <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard</h1>
          </div>
          <div class="col-md-2">
            <div class="dropdown create">
              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Transaksi
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <li><a type="button" data-toggle="modal" data-target="#setoran">Setoran</a></li>
                <li><a type="button" data-toggle="modal" data-target="#penarikan">Penarikan</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </header>

    <section id="breadcrumb">
      <div class="container">
        <ol class="breadcrumb">
          <li class="active">Dashboard</li>
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
                <h3 class="panel-title">Website Overview</h3>
              </div>
              <div class="panel-body">
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-user" aria-hidden="true"></span> 12</h2>
                    <h4>Nasabah</h4>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> 200</h2>
                    <h4>Transaksi</h4>
                  </div>
                </div>
              </div>
              </div>

              <!-- Latest Users -->
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="panel-title">Transaksi Terakhir</h3>
                </div>
                <div class="panel-body">
                  <table class="table table-striped table-hover">
                      <tr>
                        <th>Name</th>
                        <th>Rekening</th>
                        <th>Jenis</th>
                        <th>Jumlah</th>
                      </tr>
                      <?php
                      while ($data = mysql_fetch_assoc($qry)) {
                       ?>
                       <tr>
                         <td><?php echo $data['Nama']; ?></td>
                         <td><?php echo $data['rekening']; ?></td>
                         <td><?php echo $data['jenis']; ?></td>
                         <td><?php echo $data['Jumlah']; ?></td>

                       </tr>
                       <?php
                         }
                        ?>
                    </table>
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
    <div class="modal fade" id="setoran" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form id="setoran" action="php/setoran.php" method="post">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Setoran</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label>Nama</label>
          <input name="name" type="text" class="form-control" placeholder="Nama Nasabah" required>
        </div>
        <div class="form-group">
          <label>Rekening</label>
          <input name="account" type="text" class="form-control" placeholder="Nomer Rekening" required>
        </div>
        <div class="form-group">
          <label>Jumlah</label>
          <input name="ammount" type="text" class="form-control" placeholder="Jumlah" required>
        </div>
        <div class="form-group">
          <label>Nominal</label>
          <input name="nominal" type="text" class="form-control" placeholder="Nominal" required>
        </div>
        <div class="form-group">
          <label>Teller</label>
          <input name="teller" type="text" class="form-control" placeholder="Nama Teller" required>
        </div>
        <div class="form-group">
          <label>Keterangan</label>
          <textarea name="editor1" class="form-control" placeholder="Keterangan"></textarea>
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

<!-- Add Page -->
<div class="modal fade" id="penarikan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog" role="document">
<div class="modal-content">
  <form id="penarikan" action="php/penarikan.php" method="post">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h4 class="modal-title" id="myModalLabel">Penarikan</h4>
  </div>
  <div class="modal-body">
    <div class="form-group">
      <label>Nama</label>
      <input name="name" type="text" class="form-control" placeholder="Nama Nasabah" required>
    </div>
    <div class="form-group">
      <label>Rekening</label>
      <input name="account" type="text" class="form-control" placeholder="Nomer Rekening" required>
    </div>
    <div class="form-group">
      <label>Jumlah</label>
      <input name="ammount" type="text" class="form-control" placeholder="Jumlah" required>
    </div>
    <div class="form-group">
      <label>Nominal</label>
      <input name="nominal" type="text" class="form-control" placeholder="Nominal" required>
    </div>
    <div class="form-group">
      <label>Teller</label>
      <input name="teller" type="text" class="form-control" placeholder="Nama Teller" required>
    </div>
    <div class="form-group">
      <label>Keterangan</label>
      <textarea name="editor2" class="form-control" placeholder="Keterangan"></textarea>
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
     CKEDITOR.replace( 'editor2' );
 </script>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
