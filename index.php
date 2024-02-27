<!DOCTYPE html>
<html>
<head>
	<title>Rajutan</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<style>
		body{
			font-family: Montserrat;
			font-size: 18px;
		}
	  /* Make the image fully responsive */
		.carousel-inner img {
		    width: 100%;
		    height: 50%;
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
	        		<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
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
	</nav>
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
		    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
	    	<div class="carousel-item active">
	      		<img class="d-block w-100" src="images/slider.jpg" alt="First slide">
	    	</div>
	    	<div class="carousel-item">
	      		<img class="d-block w-100" src="images/edz-norton-9rStyyFGKQA-unsplash.jpg" alt="Second slide">
	    	</div>
	    	<div class="carousel-item">
	      		<img class="d-block w-100" src="images/karen-penroz-06ZTGDcAQFs-unsplash.jpg" alt="Third slide">
	    	</div>
	  	</div>
	  	<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
	    	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    	<span class="sr-only">Previous</span>
	  	</a>
	  	<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
	    	<span class="carousel-control-next-icon" aria-hidden="true"></span>
	    	<span class="sr-only">Next</span>
	  	</a>
	</div>
	<br>	<br>	
	<div class="container">	
		<div class="card">
		  	<div class="card-header" style="background-color: #B5CDA3;">
		    	<h3>Sejarah Rajutan	</h3>
		  	</div>
		  	<div class="card-body">
	    		<h5 class="card-title">Rajutan adalah</h5>
	    		<p class="card-text">Merajut dan merenda, serupa namun tak sama. Kedua kegiatan ini sama-sama menautkan benang, namun menggunakan teknik dan alat yang berbeda sehingga memberikan hasil akhir yang berbeda pula. Dalam bahasa Inggris, rajut berasal dari kata knit sedangkan renda dari kata crochet.

Apa yang membedakan antara merajut dan merenda? Perbedaan pertama adalah alat yang digunakan memang berbeda. Jarum dan aksesoris yang digunakan saat merajut berbeda dengan jarum untuk merenda. Kemudian caranya juga berbeda. Dalam satu tusukan saat merenda akan mengkaitkan lebih banyak benang dibanding merajut. Karena itu hasil akhir merajut dan merenda akan berbeda. Hasil akhir merenda akan lebih kaku dibanding merajut karena jumlah kaitan benang yang lebih banyak dalam satu tusukan.</p>
	  		</div>
		</div>
	</div>	<br>	<br>	<br>	
	<h2 align="center">	Tutorial Merajut </h2>
	<div class="container">
		<div class="row">	
			<?php 
            include "koneksi.php";
            $tutor = mysqli_query($koneksi, "SELECT tutorial.*, gambar.* FROM tutorial JOIN gambar ON gambar.id_tutorial=tutorial.id_tutorial LIMIT 3");
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