<?php
    require_once "core/init.php";

    global $conn;
    if (isset($_POST['submit'])) {
        $program_id = $_POST['optionsRadios'];
        $query = "SELECT * FROM regular_program WHERE program_id = '$program_id'";
        $result = mysqli_query($conn, $query);
        $result = mysqli_fetch_assoc($result);
        $_SESSION['program'] = $result;
        $query = "SELECT sid FROM regular_program_registration WHERE program_id = '$prog_id'";
        $result = mysqli_query($conn, $query);
        $_SESSION['program']['member'] = mysqli_num_rows($result);
    } else {
        header('location: pendaftaran_regular_program_1.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Untitled Document</title>
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

        			<ul class="nav navbar-nav navbar-addMargin4 navbar-removeMargin2">
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
        						<button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-lock"></span> &nbsp;Log In</button>
        						<button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-user"></span> &nbsp;Alumni Portal</button>
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
              				<a class="nav-link" href="index.php">Beranda</a>
            			</li>
            			<li class="nav-item">
              				<a class="nav-link" href="#">Profil</a>
            			</li>
            			<li class="nav-item">
              				<a class="nav-link active" href="jadwal_executive_program.php">Edukasi</a>
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
  	<div class="nav">
		<nav class="navbar navbar-default backgroundWhite styling-menu">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#defaultNavbar1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse backgroundWhite">
					<ul class="nav navbar-nav">
						<li class="hover-grey"><a href="#" class="color-blue">Tinjauan Program</a></li>
						<li class="hover-grey"><a href="#" class="color-blue">Materi</a></li>
						<li class="hover-grey"><a href="#" class="color-blue">Executive Program</a></li>
						<li class="active hover-grey"><a href="#" class="color-blue">Regular Program (E-Learning)</a></li>
					</ul>
				</div>
				<!-- /.navbar-collapse -->
			</div>
		<!-- /.container-fluid -->
		</nav>
	</div>
	<div class="container-fluid">
		<div class="col-sm-3 col-lg-2">
      			<nav class="navbar navbar-default navbar-fixed-side recolor navResize2 removeMarginLeft">
         			<ul class="nav nav-sidebar">
            			<li class="nav-item">
              				<a class="nav-link" href="#">Informasi</a>
            			</li>
            			<li class="nav-item">
              				<a class="nav-link" href="jadwal_regular_program.php">Jadwal</a>
            			</li>
            			<li class="nav-item">
              				<a class="nav-link  active" href="pendaftaran_regular_program_1.php">Pendaftaran</a>
            			</li>
            			<li class="nav-item">
              				<a class="nav-link" href="#">Daftar Peserta</a>
            			</li>
            			<li class="nav-item">
              				<a class="nav-link" href="#">FAQ</a>
            			</li>
            			<li class="nav-item">
              				<a class="nav-link" href="#">Kontak</a>
            			</li>
						<li class="nav-item">
              				<a class="nav-link" href="#">E-Learning</a>
            			</li>
          			</ul>
        		</nav>
      		</div>
			<div class="col-md-9 col-lg-10">
				<div class="content-set">
					<div class="recolor content-header">
						<div class="header">Pendaftaran Regular Program</div>
					</div>
					<div class="content-background">
						<div class="content-form">
							<div class="form-group">
								<label for="program">Program : </label>
                                <?=$_SESSION['program']['program_name'];?>
							</div>
							<div class="form-group">
								<label for="program">Gelombang : </label>
                                <?=$_SESSION['program']['batch'];?>
							</div>
							<div class="form-group">
								<label for="program">Tanggal Mulai : </label>
                                <?=$_SESSION['program']['start_date'];?>
							</div>
							<div class="form-group">
								<label for="program">Jumlah Peserta : </label>
                                <?=$_SESSION['program']['member'];?>
							</div>
							<div class="form-group">
								<label for="program">Investasi : </label>
                                <?=$_SESSION['program']['registration_fee'];?>
							</div>
							<div class="right-button">
								<button type="submit" class="btn btn-primary">Sign Up</button>
								<a href="regular_program_registration.php"><button type="submit" class="btn btn-primary">Sign In</button></a>
							</div>
						</div>
					</div>
				</div>

			</div>
	</div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="assets/js/jquery-1.11.2.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/js/bootstrap.js"></script>
  </body>
</html>
