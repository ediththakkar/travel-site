<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Edith Thakkar PWP</title>

		<!--BOOTSTRAP CSS-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

		<!--jQuery first, then popper.js, then Bootstrap JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" type="text/javascript"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

		<!-- jQuery Form, Additional Methods, Validate -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.81/baguetteBox.min.js"></script>

		<!-- Google reCAPTCHA -->
		<script src='https://www.google.com/recaptcha/api.js'></script>

		<!--favicon-->
		<link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
		<link rel="manifest" href="images/site.webmanifest">
		<link rel="mask-icon" href="images/safari-pinned-tab.svg" color="#0a6cd9">
		<meta name="msapplication-TileColor" content="#2d89ef">
		<meta name="theme-color" content="#ffffff">

		<!--Fonts-->
		<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

		<!-- Linked CSS stylesheet-->
		<link type="text/css" href="css/style.css" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.81/baguetteBox.min.css">

		<!-- JavaScript Form Validator -->
		<script src="js/form-validate.js"></script>
	</head>
	<body>

		<!--Navigation Bar-->
		<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
			<div class="container-fluid">
				<a class="nav-brand" href="#"><img src="images/LogoMakr_7iiiAg%20copy2.png" alt="logo"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse"
						  data-target="#navbarResponsive">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarResponsive">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active">
							<a class="nav-link" href="#home">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#aboutus">About Us</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#travel">Travel</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#contactus">Contact Us</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>

		<!--Entered div id so navbar for home would work-->
		<div id="home"></div>
		<!--Carousel-->
		<div id="carouselExampleFade" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img class="d-block w-100" src="carousel/resort.jpg" alt="First slide">
					<div class="carousel-caption d-none d-md-block lead">
					<h1>Welcome</h1>
					<p>Unleash your inner travel spirit</p>
					</div>
				</div>

				<div class="carousel-item">
					<img class="d-block w-100" src="carousel/lake.jpg" alt="Second slide">
					<div class="carousel-caption d-none d-md-block lead">
						<h2>My soul is from elsewhere, I'm sure of that & I intend to End up there.</h2>
						<p>-Rumi</p>
					</div>
				</div>

				<div class="carousel-item">
					<img class="d-block w-100" src="carousel/menton-old-town-harbour-entrance-lighthouse-161098.jpg" alt="Third slide">
					<div class="carousel-caption d-none d-md-block lead">
						<h2>I was not Born for one corner. The whole world is my native land.</h2>
						<p>-Seneca</p>
					</div>
				</div>

			<div class="carousel-item">
				<img class="d-block w-100" src="carousel/mountains.jpg" alt="Fourth slide">
				<div class="carousel-caption d-none d-md-block lead">
					<h2>I travel not to cross countries off a list, but to ignite passionate affairs with destinations.</h2>
					<p>-Cultureur</p>
				</div>
			</div>

			<div class="carousel-item">
				<img class="d-block w-100" src="carousel/ocean.jpg" alt="Fifth slide">
				<div class="carousel-caption d-none d-md-block lead">
					<h2>The journey of a thousand miles begins with a single step.</h2>
					<p>-Lao Tzu</p>
				</div>
			</div>

			<div class="carousel-item">
				<img class="d-block w-100" src="carousel/pexels-photo-457937.jpg" alt="Sixth slide">
				<div class="carousel-caption d-none d-md-block lead">
					<h2>-Euripides</h2>
					<p>Experience, travel these are as education in themselves.</p>
				</div>
			</div>
			</div>
		</div>
	</body>

	<!--About Us section-->
	<div id="aboutus" class="container-fluid bg bg-info">
		<div class="row">
			<div class="col m-5">
		<h1>ABOUT US</h1>
		<p>Travel Track was created with an idea of coming up with ways for travelers to get recommendations to fuel their travel desires. Not only are they recommended places to travel to but are also given resources to help them manage their travels more easily</p>

		<p>Travel track founders Edith Thakkar, and Vishal Thakkar created travel track as a way to help travelers find resources for traveling abroad such as accommodation suggestions, travel ideas, and so forth.</p>
		<p>We have traveled to various parts of the world ranging from North America, South America, Middle east, and Asia.</p>
		<p>
			We invite you to contact us to assist you in finding resources for your next trip.
		</p>
			</div>
			</div>
			</div>

			<!--Travel section-->
	<div id="travel" class="container-fluid bg bg-warning">
		<div class="row">
		<div class="col m-5">
		<h1>SUGGESTED PLACES TO VISIT</h1>
		<p>Where would you like to travel to?</p>

			<h3>INDIA:</h3>
			<h3>USA:</h3>
			<h3>MEXICO:</h3>
			<h3>CANADA:</h3>
			<h3>UAE:</h3>

		</div>
	</div>
	</div>

		<!--Places to visit-->
		<section>
			<div class="container">
				<div class="col gallery-container text-center">
					<h1>Places to Visit</h1>
					<p class="page-description text-center">Europe-North America-South America-Asia</p>
					<div class="tz-gallery">
						<div class="row mb-3">
							<div class="col-md-6">
								<h3>Europe</h3>
								<div class="card">
									<a class="lightbox" href="images/europe-travel-landmarks-vector-illustration-74315910.jpg">
										<img src="images/europe-travel-landmarks-vector-illustration-74315910.jpg" alt="Europe" class="card-img-top">
									</a>
								</div>
							</div>

							<div class="col-md-6">
								<h3>North America</h3>
								<div class="card">
									<a class="lightbox" href="images/vector-north-america-travel-flat-format-eps-colors-49842440.jpg">
										<img src="images/vector-north-america-travel-flat-format-eps-colors-49842440.jpg" alt="North America" class="card-img-top">
									</a>
								</div>
							</div>

							<div class="col-md-6">
								<h3>South America</h3>
								<div class="card">
									<a class="lightbox" href="images/vector-south-america-travel-latin-set-cultural-flat-color-eps-49988656.jpg">
										<img src="images/vector-south-america-travel-latin-set-cultural-flat-color-eps-49988656.jpg" alt="South Amercica" class="card-img-top">
									</a>
								</div>
							</div>

							<div class="col-md-6">
								<h3>Asia</h3>
								<div class="card">
									<a class="lightbox" href="images/935380352.jpg">
										<img src="images/935380352.jpg" alt="Asia" class="card-img-top">
									</a>
								</div>
							</div>
					</div>

				</div>
				</div>

			</div>
		</section>

	<!--Contact Us section-->
	<div id="contactus" class="container-fluid bg-info text-light">
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6">
				<h3>Contact Us:</h3>
				<form id="contact-form" action="php/mailer.php" method="post">
					<div class="form-group">
						<label for="name">Name <span class="text-danger">*</span></label>
						<div class="input-group">
							<div class="input-group-prepend">
							<span class="input-group-text">
								<i class="fa fa-user" aria-hidden="true"></i>
							</span>
							</div>
							<input type="text" class="form-control" id="name" name="name" placeholder="Name">
						</div>

					<div class="form-group">
						<label for="email">Email <span class="text-danger">*</span></label>
						<div class="input-group">
							<div class="input-group-prepend">
							<span class="input-group-text">
								<i class="fa fa-envelope" aria-hidden="true"></i>
							</span>
							</div>
							<input type="email" class="form-control" id="email" name="email" placeholder="Email">
						</div>
					</div>

					<div class="form-group">
						<label for="subject">Subject</label>
						<div class="input-group">
							<div class="input-group-prepend">
							<span class="input-group-text">
								<i class="fas fa-pencil-alt" aria-hidden="true"></i>
							</span>
							</div>
							<input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
						</div>
					</div>

					<div class="form-group">
						<label for="message">Message <span class="text-danger">*</span></label>
						<div class="input-group">
							<div class="input-group-prepend">
							<span class="input-group-text">
								<i class="fa fa-comment" aria-hidden="true"></i>
							</span>
							</div>
							<textarea class="form-control" rows="5" id="message" name="message" placeholder="(2000 characters max)"></textarea>
						</div>
						</div>
					</div>

				<!-- reCAPTCHA -->
				<div class="g-recaptcha" data-sitekey="6Lenq1sUAAAAAIX3drXmxeD6xRdyCn3NZextzU0P"></div>

				<!-- Buttons -->
				<button class="btn btn-primary" type="submit"><i class="fa fa-paper-plane"></i> Send</button>
				<button class="btn btn-danger" type="reset"><i class="fa fa-ban"></i> Reset</button>
			</form>
		</div>
		<div class="col-md-3"></div>
	</div>
</div>


	<!--Error sucess output-->
							<div class="row">
								<div class="col-xs-12">
									<div id="output-area"></div>
								</div>
							</div>
</html>
