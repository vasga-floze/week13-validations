<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Bienvenido') }}
        </h2>
</x-slot>

<!DOCTYPE HTML>
<html>

<head>
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link href='//fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link href="css/slider.css" rel="stylesheet" type="text/css" media="all" />
	<script src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="js/camera.min.js"></script>
	<script type="text/javascript">
		jQuery(function () {
			jQuery('#camera_wrap_1').camera({
				height: '500px',
				pagination: false,
			});
		});
	</script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1200);
			});
		});
	</script>
</head>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <h1>
            <div class="bottom-grid2 bottom-mid">
					<p class="text-center">Universidad Gerardo Barrios</p>
					<div class="gallery">
						<ul>
							<li><a href="images/slider1.jpg"><img src="images/slider1.jpg" alt=""></a></li>
							<li><a href="images/slider3.jpg"><img src="images/slider3.jpg" alt=""></a></li>
							<li><a href="images/slider2.jpg"><img src="images/slider2.jpg" alt=""></a></li>
							<div class="clear"> </div>
						</ul><br>
					</div>
					<!--gallery -->
					<script src="js/jquery.chocolat.js"></script>
					<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen">
					<!--light-box-files -->
					<script type="text/javascript">
						$(function () {
							$('.gallery a').Chocolat();
						});
					</script>
					<!-- //gallery -->
				</div> 
            </h1>
            </div>
        </div>
    </div>
</x-app-layout>