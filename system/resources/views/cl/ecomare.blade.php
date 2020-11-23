<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/d0ee1fa2b0.js" crossorigin="anonymous"></script>  
<link rel="stylesheet" type="text/css" href="views/style.css">
    <title>Sugoi Store</title>
  </head>
  <body>

		<nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
			<div class="container">

		  <a class="navbar-brand font-weight-bold" href="#">SUGOI STORE</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav ml-auto mr-4">
		      <li class="nav-item active">
		        <a class="nav-link" href="Home">Beranda <span class="sr-only">(current)</span></a>
		      </li>
		           <li class="nav-item active">
		        <a class="nav-link" href="#">Hubungi Kami <span class="sr-only">(current)</span></a>
		      </li>
		         <li class="nav-item active">
		        <a class="nav-link" href="{{url('log')}}">Bantuan Login <span class="sr-only">(current)</span></a>
		      </li>
		    
		    
		    </ul>
		    <form class="form-inline my-2 my-lg-0">
		      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
		      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
		    </form>
		    <div class="icon">
		    	<h5>
		    		<i class="fas fa-cart-plus ml-3 mr-3"></i>
		    		<i class="fas fa-envelope mr-3"></i>
		    		<i class="fas fa-bell mr-3"></i>
		    		<i class="far fa-user"></i>
		    	</h5>
		    </div>
		  </div>
		  </div>
		</nav>
		<br>
		<br>
		<br>
		<br>
		 <div class="row">
          <div class="col-md-2">
            <div class="card">
              <div class="card-header">
                 Filter
              </div>
              <div class="col-md-10">
                <form action="{{url('Home/produk')}}" method="post"">
                  @csrf
                  <div class="form-group">
                    <label for="" class="control-label">Nama</label>
                    <input type="text" class="form-control" name="nama" value="{{$nama ?? ""}}">
                  </div>
                  <div class="form-group">
                    <label for="" class="control-label">Stok</label>
                    <input type="text" class="form-control" name="stok" value="{{$stok ?? ""}}">
                  </div>
                  <div class="form-group">
                    <label for="" class="control-label">Harga Min</label>
                    <input type="text" class="form-control" name="harga_min" value="{{$harga_min ?? ""}}">
                  </div>
                  <div class="form-group">
                    <label for="" class="control-label">Harga Max </label>
                    <input type="text" class="form-control" name="harga_max" value="{{$harga_max ?? ""}}">
                  </div>
                  <button class="btn btn-warning float-right"> <i class="fa fa-search"></i> Filter</button>
                </form>
              </div>
            </div>
          </div>
		<div class="col-md-10">
			<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
			  	<div class="carousel-inner">
			    	<div class="carousel-item active">
			      		<img src="public/slide2.jpg" class="d-block w-100" alt="...">
			    	</div>
			    	<div class="carousel-item">
			      		<img src="public/slide1.jpg" class="d-block w-100" alt="...">
			    	</div>
				    <div class="carousel-item">
				    	<img src="public/slide3.jpg" class="d-block w-100" alt="...">
				    </div>
			  	</div>
			  	<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
				    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
			  	</a>
			  	<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
				    <span class="carousel-control-next-icon" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
			  	</a>
			</div>

			<h4 class="text-center font-weight-bold m-4">PRODUK TERBARU</h4>
				 <div class="container">
                      <div class="row">
                        <div class="col-md-12 mt-5">
                          <div class="card">
                            <div class="card-header">
                                Data Produk
                      </div>
                      <div class="card-bdoy">
                        <table class="table">
                            <thead>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Harga</th>
                                <th>Stok</th>
                            </thead>
                            <tbody>
                                @foreach($list_produk as $produk)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$produk->nama}}</td>
                                    <td>{{$produk->harga}}</td>
                                    <td>{{$produk->stok}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                  </div>
                </div>

			 <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy;Sugoi Store 2020</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>

			
			

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>