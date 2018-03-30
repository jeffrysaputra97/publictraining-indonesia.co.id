<?php
    require_once "core/init.php";

    if(isset($_POST['signupButton'])){
    	register_user($_POST['email'],$_POST['password'],$_POST['fullname'],$_POST['phone'],$_POST['address'],$_POST['gender'],$_POST['birthplace'],$_POST['birthdate'],$_POST['education'],$_POST['major'],$_POST['institute'],$_POST['position'],$_POST['company'],$_POST['year'],$_POST['twitter'],$_POST['instagram'],$_POST['linkedin'],$_POST['line'],$_POST['facebook']);
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign Up</title>
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
        						<a href="login.php"><button type="button" class="btn btn-primary"><span class="glyphicon glyphicon-lock"></span> &nbsp;Log In</button></a>
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
  	<div class="container-fluid">
    	<div class="row full-giveMargin full-givePadding">
			<div class="col-md-12 content-background">
				<div class="content-background">
						<div class="signup-center">
							<form action="signup.php" method="post"class="form-horizontal blue-text">
								<div class="form-group">
									<label for="inputEmail" class="col-sm-3 control-label">Email</label>
									<div class="col-sm-6">
								  	    <input type="email" class="form-control" name="email" id="inputEmail" placeholder="Email" required>
									</div>
							  	</div>
							  	<div class="form-group">
									<label for="inputPassword" class="col-sm-3 control-label">Password</label>
									<div class="col-sm-6">
								  		<input type="password" class="form-control" name="password" id="inputPassword" placeholder="Password (min. 6 karakter)" pattern=".{6,}" title="Panjang password minimal 6 karakter">
									</div>
							  	</div>
								<div class="form-group">
									<label for="inputFullName" class="col-sm-3 control-label">Full Name</label>
									<div class="col-sm-6">
								  	    <input type="text" class="form-control" name="fullname" id="inputFullName" placeholder="Full Name" required>
									</div>
							  	</div>

								<div class="form-group">
									<label for="inputHp" class="col-sm-3 control-label">No. HP</label>
									<div class="col-sm-6">
								  		<input type="text" class="form-control" id="inputHp" name="phone" placeholder="No. Hp" required>
									</div>
							  	</div>
								<div class="form-group">
									<label for="inputAlamat" class="col-sm-3 control-label">Alamat</label>
									<div class="col-sm-6">
								  		<input type="text" class="form-control" id="inputAlamat" name="address" placeholder="Alamat" required>
										<select name="optionKota" class="form-control" required>
										  <option>Jakarta</option>
										  <option>Bandung</option>
										</select>
									</div>
							  	</div>
								<div class="form-group">
									<label for="inputHp" class="col-sm-3 control-label">Jenis Kelamin</label>
									&nbsp;&nbsp;&nbsp;
									<label class="radio-inline">
									  <input type="radio" name="gender" id="inlineRadio1" value="option1" required> Laki-laki
									</label>
									<label class="radio-inline">
									  <input type="radio" name="gender" id="inlineRadio2" value="option2" required> Perempuan
									</label>
							  	</div>
								<div class="form-group">
									<label for="inputTL" class="col-sm-3 control-label">Tempat Lahir</label>
									<div class="col-sm-6">
								  		<input type="text" class="form-control" id="inputTL" name="birthplace" placeholder="Tempat Lahir">
									</div>
							  	</div>
								<div class="form-group">
									<label for="inputTgL" class="col-sm-3 control-label">Tanggal Lahir</label>
									<div class="col-sm-6">
								  		<input type="date" class="form-control" id="inputTgL"
								  		name="birthdate" required>
									</div>
							  	</div>
								<div class="form-group">
									<label for="inputPendidikan1" class="col-sm-3 control-label">Pendidikan Terakhir</label>
									<div class="col-sm-6">
								  		<input type="text" class="form-control" id="inputPendidikan1"
								  		name="education" placeholder="Jenjang" required>
										<input type="text" class="form-control" id="inputPendidikan2"
										name="major" placeholder="Jurusan" required>
										<input type="text" class="form-control" id="inputPendidikan3"
										name="institute" placeholder="Sekolah/Universitas/Instansi" required>
									</div>
							  	</div>
								<div class="form-group">
									<label for="inputPekerjaan1"
									class="col-sm-3 control-label">Pekerjaan Terakhir</label>
									<div class="col-sm-6">
								  		<input type="text" class="form-control" id="inputPekerjaan1" name="position" placeholder="Posisi">
										<input type="text" class="form-control" id="inputPekerjaan2" name="company" placeholder="Instansi/Perusahaan">
										<input type="text" class="form-control" id="inputPekerjaan3" name="year" placeholder="Tahun">
										<div class="checkbox">
											<label>
												<input type="checkbox" id="x" onClick="belumKerja(this);"> Saya belum pernah bekerja
											</label>
										</div>
									</div>
							  	</div>
								<div class="form-group">
									<label for="inputSocial1" class="col-sm-3 control-label">Social Media *</label>
									<div class="col-sm-2">
								  		<input type="text" class="form-control" id="inputSocial1" name="line" placeholder="LINE">
										<input type="text" class="form-control" id="inputSocial2"
										name="instagram" placeholder="Instagram">
									</div>
									<div class="col-sm-2">
								  		<input type="text" class="form-control" id="inputSocial3"
								  		name="twitter" placeholder="Twitter">
										<input type="text" class="form-control" id="inputSocial4"
										name="facebook" placeholder="Facebook">
									</div>
									<div class="col-sm-2">
								  		<input type="text" class="form-control" id="inputSocial5"
								  		name="linkedin" placeholder="Linkedin">
									</div>


							  	</div>
								<div class="form-group">
									<label for="inputImage" class="col-sm-3 control-label">Unggah Pas Foto</label>
									<div class="col-sm-6">
								  		<input id="inputImage" type="file" class="file">
									</div>
							  	</div>
								<div class="form-group">
									<div class="col-sm-offset-3 col-sm-6">
										<div class="checkbox">
											<label>
												<input type="checkbox"> Saya menyetujui kententuan dan syarat yang berlaku
											</label>
										</div>
									</div>
								</div>
							  	<div class="form-group">
									<div class="col-sm-offset-3 col-sm-6">
								  		<button type="submit" name="signupButton" class="btn btn-primary btn-md btn-block ">Sign Up</button>
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

	<script type="text/javascript">
        function belumKerja(checkbox) {
            if(checkbox.checked) {
                document.getElementById('inputPekerjaan1').readOnly = true;
        		document.getElementById('inputPekerjaan2').readOnly = true;
        		document.getElementById('inputPekerjaan3').readOnly = true;
            }
            else {
                document.getElementById('inputPekerjaan1').readOnly = false;
        		document.getElementById('inputPekerjaan2').readOnly = false;
        		document.getElementById('inputPekerjaan3').readOnly = false;
            }
        }
</script>
  </body>
</html>
