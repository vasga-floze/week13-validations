<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Welcome</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta tag Keywords -->
	<!--/Style-CSS -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!--//Style-CSS -->
	<!-- font-awesome-icons -->
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- //font-awesome-icons -->
</head>

<body>
	<section class="w3l-error-61-404">
		<div class="error-61-mian">
			<div class="wrapper">
				<div class="errors-16-top">
					<div class="errors-16-info">
						<h3>Welcome</h3>
						<div class="d-flex error-page-form">
							<button type="submit">
                                <a href="{{ route('login') }}" class="btn brk-btn">
							    Login
						        </a>
                            </button>
                            <span>&nbsp;</span>
                            <button type="submit">
                                <a href="{{ route('register') }}" class="btn brk-btn">
							    Register
						        </a>
                            </button>
                        </div>
					</div>

				</div>
				<div class="copyright-footer">
					<div class="copy-right">
						<p>© 2020 | Programación Computacional IV</p>
					</div>
				</div>
			</div>
		</div>
	</section>

</body>

</html>





