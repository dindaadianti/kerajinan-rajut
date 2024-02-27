<!DOCTYPE html>
<html>
<head>
	<title>Detail</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<style type="text/css">
		body{
			font-family: Montserrat;
			font-size: 18px;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #B5CDA3;">
	  	<a class="navbar-brand" href="#">Rajutan</a>
	  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	    	<span class="navbar-toggler-icon"></span>
	  	</button>
	  	<div class="collapse navbar-collapse" id="navbarNav">
	    	<ul class="navbar-nav">
	      		<li class="nav-item active">
	        		<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
	      		</li>
	      		<li class="nav-item">
	        		<a class="nav-link" href="gallery.php">Gallery</a>
	      		</li>
	      		<li class="nav-item">
	        		<a class="nav-link" href="authentication/login.php">Login</a>
	      		</li>
	      		<form class="form-inline my-2 my-lg-0" method="GET" action="cari.php">
			     	<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="cari">
			      	<button class="btn btn-outline-primary my-2 my-sm-0" value="Cari" type="submit">Search</button>
			    </form>
	    	</ul>
	  </div>
	</nav><br><br><br>
	<div class="container">
		<div class="card">
			<?php 
            include "koneksi.php";
            $id=$_GET['id'];
            $tutor = mysqli_query($koneksi, "SELECT tutorial.*, gambar.* FROM tutorial JOIN gambar ON gambar.id_tutorial=tutorial.id_tutorial WHERE tutorial.id_tutorial='$id'");
            $tutorial = mysqli_fetch_array($tutor);
            $id=$tutorial['id_tutorial'];
            $judul = $tutorial['judul'];
            $thumbnail = $tutorial['thumbnail'];
            $deskripsi = $tutorial['deskripsi'];
            $alat_bahan = $tutorial['alat_bahan'];
            ?>
  			<div class="card-body" style="margin: 25px; text-align: center;">
  				<h4 class="card-title" align="center"><?php echo $tutorial['judul']; ?></h4> <br><br>
    			<h4>Deskripsi: </h4><br><br><?= $tutorial['deskripsi'];?><br><br>
    			<h5>Alat dan Bahan: </h5><br><br>
    			<img src="images/<?php echo $tutorial['alat_bahan'] ?>" height="200px" width="200px"><br><br>
    			<h5>Cara Membuat: </h5><br><br>
    			<div class="embed-responsive embed-responsive-16by9">
				  	<iframe class="embed-responsive-item" src="<?php echo $tutorial['video'] ?>" allowfullscreen></iframe>
				</div><br><br>
    			<h5>Hasil Rajutan: </h5><br><br>
    			<img src="images/<?php echo $tutorial['gambar'] ?>" height="200px" width="200px">
  			</div>
		</div>
	</div>	
	<footer style="background-color: #B5CDA3;">	
		<h6 align="center">	copyright &copy;Kerajinan Rajut 2021</h6>
	</footer>
</body>
</html>