<!DOCTYPE HTML>
<html>

<!-- Javascript voor smooth scrolling menu -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>
	$(function() {
		$('a[href*="#"]:not([href="#"])').click(function() {
			if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
				var target = $(this.hash);
				target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
				if (target.length) {
					$('html, body').animate({
						scrollTop: target.offset().top
					}, 1000);
					return false;
				}
			}
		});
	});
</script>


	<!-- Paginatitel, stylesheet linken -->
	<head>
		<title>CROP</title>
		<link rel="stylesheet" type="text/css" href="files/style.css"/>
	</head>
	
	<body> <!-- Body start hier, sluit in footer -->

	<div id="header"> <!-- Navigatiemenu -->
		<div id="nav">
			<div id="navText">
				<ul>
                    <li> <a href="#header" class="myButton">Intro</a></li>
					<li><a href="#content1" class="myButton">The product</a></li>
					<li><a href="#content2" class="myButton">How it works</a></li>
					<li><a href="#content3" class="myButton">Why</a></li>
					<li><a href="#content4" class="myButton">About us</a></li>
				</ul>
			</div>
		</div>
	</div>
	
	

	
	<!-- Vanaf hier begint pagina -->