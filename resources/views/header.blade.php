<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{  asset('css/style.css') }}">
	<link rel="stylesheet"  href="{{ asset('css/bootstrap-theme.css') }}">
	<script  src="{{  asset('js/jquery.js') }}"></script>
	<script  src="{{  asset('js/bootstrap.min.js') }}"></script>
    <title>Laravel Toko Roti</title>
</head>
<body>
    <div class="container-fluid">
		<div class="row top">
			<center>
				<div class="col-md-4" style="padding: 3px;">
					<span> <i class="glyphicon glyphicon-earphone"></i> +6285884703267</span>
				</div>


				<div class="col-md-4"  style="padding: 3px;">
					<span><i class="glyphicon glyphicon-envelope"></i>bakerybreadhouse@gmail.com</span>
				</div>


				<div class="col-md-4"  style="padding: 3px;">
					<span>bakery bread house</span>
				</div>
			</center>
		</div>
	</div>

    <nav class="navbar navbar-default" style="padding: 5px;">
		<div class="container">

			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#" style="color:#FDCE87;"><b>BAKERY-BREAD HOUSE</b></a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="{{ route('home') }}">Home</a></li>
					<li><a href="{{ route('produk') }}">Produk</a></li>
					<li><a href="{{ route('tentang-kami') }}">Tentang Kami</a></li>
					<li><a href="{{  route('manual-aplikasi')}}">Manual Aplikasi</a></li>
                    <a href="{{ route('keranjang.index') }}">Keranjang</a>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
							<path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
						  </svg>Akun <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="user_login.php">login</a></li>
                            <li><a href="register.php">Register</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="bi bi-person-fill"></i><span class="caret"></span></a>
                        <ul class="dropdown-menu">
                        </ul>
                    </li>
                </ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>
</body>
</html>