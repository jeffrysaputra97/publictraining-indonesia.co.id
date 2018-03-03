<?php
    require_once "core/init.php";

    if (isset($_POST['signin'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $login_result = check_user_data($email, $password);

        if (mysqli_num_rows($login_result) > 0) {
            $_SESSION['login_user'] = mysqli_fetch_assoc($login_result);
            header('Location: jadwal_regular_program.php'); //harusnya login itu redirect ke beranda
        } else {
            echo "<script>alert('Email atau password tidak dikenali!');</script>";
        }
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
              				<a class="nav-link" href="#">Beranda</a>
            			</li>
            			<li class="nav-item">
              				<a class="nav-link" href="#">Profil</a>
            			</li>
            			<li class="nav-item">
              				<a class="nav-link active" href="#">Edukasi</a>
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
  	<div class="container-fluid">
    	<div class="row full-giveMargin full-givePadding">
			<div class="col-md-12 recolor">
				<div class="recolor">
						<div class="content-header header2">Public Training Indonesia</div>
						<div class="login-center">
							<form class="form-horizontal" action="login.php" method="POST">
								<div class="form-group">
									<label for="inputEmail3" class="col-sm-2 control-label">Email</label>
									<div class="col-sm-4">
								  	<input type="email" class="form-control" id="inputEmail3" name="email" placeholder="Email" required>
									</div>
							  	</div>
							  	<div class="form-group">
									<label for="inputPassword3" class="col-sm-2 control-label">Password</label>
									<div class="col-sm-4">
								  		<input type="password" class="form-control" id="inputPassword3" name="password" placeholder="Password" required>
									</div>
							  	</div>
							  	<div class="form-group">
									<div class="col-sm-offset-2 col-sm-4">
								  		<button type="submit" class="btn btn-default btn-md btn-block " name="signin" value="signin">Sign in</button>
									</div>
							  	</div>
								<div class="form-group">
									<div class="col-sm-offset-2 col-sm-4">
										<label for="" class=" link-white"><a href="#">Daftar Masuk</a></label><!--Arahkan ke form registrasi-->
										<label for="" class=" link-white"><a href="#">Saya tidak bisa mengakses akun saya</a></label>
									</div>
							  	</div>

							</form>
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
