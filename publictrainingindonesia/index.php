<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome to PTI!</title>
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
  </head>
  <body style="padding-top: 70px">
    <nav class="navbar navbar-default navbar-rePaint">
      <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#topFixedNavbar1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
      </div>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="topFixedNavbar1">
            <ul class="nav navbar-nav">
                <li><a href="#"><img src="assets/picture/logo/rindo_putih.png" alt="Placeholder image" width="154" height="154" class="img-responsive navbar-removeMargin"></a></li>
                <li><a href="#"><img src="assets/picture/logo/PTI.png" alt="Placeholder image" width="105" height="103" class="img-responsive"></a></li>

              <ul class="nav navbar-nav navbar-right navbar-addMargin4 navbar-removeMargin2">
                  <li><a href="#"><img src="assets/picture/logo/pin.png" alt="Placeholder image" width="67" height="95" class="img-responsive navbar-addMargin"></a></li>
                  <li><a href="#"><img src="assets/picture/logo/logo_ac.png" alt="Placeholder image" width="58" height="70" class="img-responsive navbar-addMargin"></a></li>
                  <li><a href="#"><img src="assets/picture/logo/LOGO_Internal_Audit.png" alt="Placeholder image" width="164" height="38" class="img-responsive navbar-addMargin"></a></li>
                  <li>
              <form class="navbar-form navbar-right" role="search">
                      <div class="form-group">
                          <input type="text" class="form-control navbar-addMargin" placeholder="Search">
                      </div>
                        <button type="submit" class="btn btn-default navbar-addMargin2">Submit</button>
                    </form>
                  </li>
                  <li> &nbsp; &nbsp;</li>
                  <li class="navbar-addMargin3">
              <div>
                        <?php
                            if (isset($_SESSION['login_user'])) {
                        ?>
                                <a href="logout.php"><button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-lock"></span> &nbsp;Log Out</button></a>
                        <?php
                            } else {
                        ?>
                                <a href="login.php"><button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-lock"></span> &nbsp;Log In</button></a>
                                <button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-user"></span> &nbsp;Alumni Portal</button>
                        <?php
                            }
                        ?>
                  </div>
                </li>
              </ul>
            </ul>
          </div>
        <!-- /.navbar-collapse -->
      </div>
    <!-- /.container-fluid -->
    </nav>
    <div class="container-fluid">
      <div class="row removeMargin">
      <div class="col-sm-3 col-lg-2">
            <nav class="navbar navbar-default navbar-fixed-side recolor navResize">
              <ul class="nav nav-sidebar">
                  <li class="nav-item">
                      <a class="nav-link active" href="index.php">Beranda</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#">Profil</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="jadwal_executive_program.php">Edukasi</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#">Riset & Pengembangan</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#">Berita & Acara</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#">Unduh</a>
                  </li>
                  <li class="nav-item">
                      <a class="nav-link" href="#">Galeri</a>
                  </li>
                </ul>
            </nav>
          </div>
      <div class="col-md-9 col-lg-10">
          <div id="carousel1" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner" role="listbox">
              <div class="item active">
              <img src="assets/picture/trainning.jpg" alt="First slide image" width="4880" height="1768">
            </div>
                <div class="item">
              <img src="assets/picture/trainning.jpg" alt="Second slide image" width="4880" height="1768">
                </div>
                <div class="item">
              <img src="assets/picture/trainning.jpg" alt="Third slide image" width="4880" height="1768">
                </div>
            </div>
        </div>
      </div>
        </div>
  </div>

  <div class="col-md3-3 col-lg-6 setBoxPotition1">
      <ul class="nav nav-tabs square-padding blue-background">
          <li role="presentation" class="active"><a style="color : #3894D2;" href="#">Katalog</a></li>
          <li role="presentation"><a href="#">Berita</a></li>
        </ul>
    </div>

  <div class="col-md3-3 col-lg-4 setBoxPotition2">
      <div class="blue-background headerStyle"> PENDAFTARAN REGULAR PROGRAM </div>
      <form class="formStyle">
          <div class="form-group">
            <label for="program">Program</label>
            <!-- Split button -->
            <div class="btn-group space">
                <button type="button" class="btn btn-default">Program</button>
                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="caret"></span>
                  <span class="sr-only">Toggle Dropdown</span>
                </button>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
            </div>
          </div>
          <a href="pendaftaran_regular_program_1.php"><button type="button" class="btn btn-primary marginCheck" name="register" value="register">Daftar</button></a>
      </form>
      <div class="marginCheck"><a href="jadwal_regular_program.php"> Lihat Semua Program </a></div>
    </div>

  <div class="col-md3-3 col-lg-4 setBoxPotition3">
    <div class="blue-background headerStyle"> PUBLIC TRAINING INDONESIA </div>
        <div class="subHeaderStyle"> PENDAFTARAN PUBLIC TRAINING </div>
          <form>
            <div class="form-group">
              <label for="program">Program</label>
                <!-- Split button -->
                <div class="btn-group space">
                  <button type="button" class="btn btn-default">Program</button>
                  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="caret"></span>
                <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="#">Separated link</a></li>
                  </ul>
                </div>
            </div>
            <div class="form-group">
                <label for="program">Program</label>
                <!-- Split button -->
                <div class="btn-group space">
                  <button type="button" class="btn btn-default">Kota</button>
                  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <span class="caret"></span>
                      <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <ul class="dropdown-menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Separated link</a></li>
                  </ul>
                </div>
            </div>
            <a href="pendaftaran_executive_program_1.php" type="submit" class="btn btn-primary marginCheck">Daftar</a>
          </form>
          <div class="marginCheck"><a href="jadwal_executive_program.php"> Lihat Semua Program </a></div>
      </div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="assets/js/jquery-1.11.2.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.js"></script>
  </body>
</html>
