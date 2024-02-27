<!DOCTYPE html>
<html>
<head>
	<title></title>
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
	      		<li class="nav-item">
	        		<a class="nav-link" href="index.php">Home </a>
	      		</li>
	      		<li class="nav-item active">
	        		<a class="nav-link" href="gallery.php">Gallery<span class="sr-only">(current)</span></a>
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
	</nav><br><br>
	<h3 align="center">Gallery Rajutan</h3>
	<div class="container">
		<div class="row">	
			<?php 
            include "koneksi.php";
            $tutor = mysqli_query($koneksi, "SELECT tutorial.*, gambar.* FROM tutorial JOIN gambar ON gambar.id_tutorial=tutorial.id_tutorial");
            // $hasil = mysqli_query($koneksi, "SELECT * FROM gambar");
            $nomor = 1;
            if(mysqli_num_rows($tutor)){
                while($rajut = mysqli_fetch_array($tutor)){
            ?>
			<div class="col-md-4">
			  	<div class="card">
			    	<img class="card-img-top" src="images/<?php echo $rajut['thumbnail']; ?>" alt="Card image" style="width:100%; height: 300px">
			    	<div class="card-body">
			      		<h4 class="card-title"><?php echo $rajut['judul']; ?></h4>
			      		<a href="detail.php?id=<?php echo $rajut['id_tutorial']; ?>" class="btn btn-primary">See Tutorial</a>
			    	</div>
			  	</div>
			  	<br>
			</div>
		<?php }} ?>
		</div>	
	</div>
	<footer style="background-color: #B5CDA3;">	
		<h6 align="center">	copyright &copy;Kerajinan Rajut 2021</h6>
	</footer>
</body>
</html>