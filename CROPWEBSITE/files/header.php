<!DOCTYPE HTML>
<html>

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


	<head>
		<title>CROP</title>
		<link rel="stylesheet" type="text/css" href="files/style.css"/>
	</head>
	
	<body>



	<div id="header">
		<div id="nav">
			<div id="navText">
				<ul>
                    <li> <a href="#header">Intro</a></li>
					<li><a href="#content1">The product</a></li>
					<li><a href="#content2">How it works</a></li>
					<li><a href="#content3">Why</a></li>
					<li><a href="#content4">About us</a></li>
				</ul>
			</div>
		</div>
	</div>
	
	

	
	<!-- Vanaf hier begint pagina -->