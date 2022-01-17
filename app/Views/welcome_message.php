<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php base_url()?>css/header.css">
	<link rel="stylesheet" href="<?php base_url()?>css/konten.css">
	<link rel="stylesheet" href="<?php base_url()?>css/footer.css">
	<title>soffa</title>
</head>
<body>
	<header>
		<nav class="navbar">
			<div class="brand">
				<a href="#" >soffa</a>
			</div>	
			<a href="" class="toggleButton">
				<span class="bar"></span>
				<span class="bar"></span>
				<span class="bar"></span>
			</a>
			<div class="navbarLinks">
				<ul>	
					<!-- <li><a href="">Forum</a></li> -->
					<li><a href="">Store</a></li>
				</ul>
			</div>
		</nav>
	</header>
	
	<section>
		<div class="sideMenu">
			<ul>
				<li>
					<span>change background</span>
					<ul class="menu">
						<li><button id="1" onclick="cekPilBg(this)">1</button></li>
						<li><button id="2" onclick="cekPilBg(this)">2</button></li>
						<li><button id="3" onclick="cekPilBg(this)">3</button></li>
						<!-- <li><button id="4" onclick="bgPil(this.id)">4</button></li> -->
					</ul>
				</li>
				<!-- <li>
					<a href="">time management</a>

				</li> -->
				<li>
					<span>sound</span>
					<ul class="menu">
						<li><button id="1" onclick="cekPilSound(this)">bird</button></li>
						<li><button id="2" onclick="cekPilSound(this)">wave</button></li>
					</ul>
				</li>
			</ul>
		</div>
	</section>
	
	<footer>
		<p>copyright &copy; soffa</p>
	</footer>
	<script defer src="<?php base_url() ?>js/script.js"></script>
</body>
</html>