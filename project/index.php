<?php

function get($table)
{
    $connection = mysqli_connect("localhost","root","","kimit");

    $query = mysqli_query($connection,"SELECT * FROM `$table`");

    return  mysqli_fetch_all($query,MYSQLI_ASSOC);
}

$reviews = get("review");
$service = get("service");






?>
<!DOCTYPE HTML>
<html lang="en-US">


<!-- Mirrored from html.ditsolution.net/constre/constre3/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Dec 2023 11:41:58 GMT -->
<head>
	<meta charset="UTF-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Consen - IT Startup HTML5 Template</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Favicon -->
	<link rel="icon" type="image/png" sizes="56x56" href="assets/images/fav-icon/icon.png">
	<!-- bootstrap CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css" media="all">
	<!-- carousel CSS -->
	<link rel="stylesheet" href="assets/css/owl.carousel.min.css" type="text/css" media="all">
	<!-- animate CSS -->
	<link rel="stylesheet" href="assets/css/animate.css" type="text/css" media="all">
	<!-- animated-text CSS -->
	<link rel="stylesheet" href="assets/css/animated-text.css" type="text/css" media="all">
	<!-- font-awesome CSS -->
	<link rel="stylesheet" href="assets/css/all.min.css" type="text/css" media="all">
	<!-- font-flaticon CSS -->
	<link rel="stylesheet" href="assets/css/flaticon.css" type="text/css" media="all">
	<!-- theme-default CSS -->
	<link rel="stylesheet" href="assets/css/theme-default.css" type="text/css" media="all">
	<!-- meanmenu CSS -->
	<link rel="stylesheet" href="assets/css/meanmenu.min.css" type="text/css" media="all">
	<!-- transitions CSS -->
	<link rel="stylesheet" href="assets/css/owl.transitions.css" type="text/css" media="all">
	<!-- venobox CSS -->
	<link rel="stylesheet" href="venobox/venobox.css" type="text/css" media="all">
	<!-- bootstrap icons -->
	<link rel="stylesheet" href="assets/css/bootstrap-icons.css" type="text/css" media="all">
	<!-- Main Style CSS -->
	<link rel="stylesheet" href="assets/css/style.css" type="text/css" media="all">
	<!-- responsive CSS -->
	<link rel="stylesheet" href="assets/css/responsive.css" type="text/css" media="all">
	<!-- modernizr js -->
	<script src="assets/js/vendor/modernizr-3.5.0.min.js"></script>
</head>

<body>
	<!-- loder -->
	<div class="loader-wrapper">
		<div class="loader"></div>
		<div class="loder-section left-section"></div>
		<div class="loder-section right-section"></div>
	</div>

	<!--==================================================-->
	<!-- Start Curser Section Here -->
	<!--==================================================-->
	<div class="curser"></div>
	<div class="curser2"></div>
	<!--==================================================-->
	<!-- Ends Curser Section Here -->
	<!--==================================================-->


	<!--==================================================-->
	<!-- Start consen Main Menu Area -->
	<!--==================================================-->
	<div id="sticky-header" class="consen_nav_manu">
		<div class="container">
			<div class="navs-manu">
				<div class="row align-items-center">
					<div class="col-lg-3">
						<div class="logo">
							<a class="logo_img" href="index-2.html" title="consen">
								<img src="assets/images/logo.png" alt="logo">
							</a>
							<a class="main_sticky" href="index-2.html" title="consen">
								<img src="assets/images/logo.png" alt="logo">
							</a>
						</div>
					</div>
					<div class="col-lg-9">
						<nav class="consen_menu">
							<ul class="nav_scroll">
								<li><a href="index-2.html">Home <span><i class="bi bi-plus"></i></span></a>
									<ul class="sub-menu">
										<li><a href="https://html.ditsolution.net/constre/constre/">Home Version 01</a></li>
										<li><a href="https://html.ditsolution.net/constre/constre2/">Home Version 02</a></li>
										<li><a href="index.html">Home Version 03</a></li>
										<li><a href="https://html.ditsolution.net/constre/constre4/">Home Version 04</a></li>
										<li><a href="https://html.ditsolution.net/constre/constre5/">Home Version 05</a></li>
										<li><a href="https://html.ditsolution.net/constre/constre6/">Home Version 06</a></li>
										<li><a href="https://html.ditsolution.net/constre/constre2/index-2.html">Home Version 07</a></li>
										<li><a href="https://html.ditsolution.net/constre/constre7/">Home Version 08 <span>New</span></a></li>
									</ul>
								</li>
								<li><a href="#">Company <span><i class="bi bi-plus"></i></span></a>
									<ul class="sub-menu">
										<li><a href="about.html">About Us</a></li>
										<li><a href="service.html">Our Service</a></li>
										<li><a href="team.html">Our Team</a></li>
										<li><a href="pricing.html">Pricing</a></li>
										<li><a href="404.html">404</a></li>
										<li><a href="contact.html">Contact Us</a></li>
									</ul>
								</li>
								<li><a href="#">Services <span><i class="bi bi-plus"></i></span></a>
									<ul class="sub-menu">
										<li><a href="service.html">Our Service</a></li>
										<li><a href="service-details.html">Service Details</a></li>
									</ul>
								</li>
								<li><a href="#">Portfolio <span><i class="bi bi-plus"></i></span></a>
									<ul class="sub-menu">
										<li><a href="portfolio.html">Portfolio</a></li>
										<li><a href="portfolio-details.html">Portfolio Details</a></li>
									</ul>
								</li>
								<li><a href="#">News <span><i class="bi bi-plus"></i></span></a>
									<ul class="sub-menu">
										<li><a href="blog-grid.html">Blog Gird</a></li>
										<li><a href="blog-list.html">Blog List</a></li>
										<li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
										<li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
										<li><a href="blog-details.html">Blog Details</a></li>
									</ul>
								</li>
								<li><a href="contact.html">Contact</a></li>
							</ul>
							<div class="search-box-btn search-box-outer">
								<i class="bi bi-search"></i>
							</div>
							<div class="header-button">
							<a href="contact.html"> Get In Touch <i class="bi bi-arrow-right"></i> </a>
						</div>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- consen Mobile Menu Area -->
	<div class="mobile-menu-area sticky d-sm-block d-md-block d-lg-none ">
		<div class="mobile-menu">
			<nav class="consen_menu">
				<ul class="nav_scroll">
					<li><a href="index-2.html">Home <span><i class="bi bi-plus"></i></span></a>
						<ul class="sub-menu">
							<li><a href="https://html.ditsolution.net/constre/constre/">Home Version 01</a></li>
							<li><a href="https://html.ditsolution.net/constre/constre2/">Home Version 02</a></li>
							<li><a href="index.html">Home Version 03</a></li>
							<li><a href="https://html.ditsolution.net/constre/constre4/">Home Version 04</a></li>
							<li><a href="https://html.ditsolution.net/constre/constre5/">Home Version 05</a></li>
							<li><a href="https://html.ditsolution.net/constre/constre6/">Home Version 06</a></li>
							<li><a href="https://html.ditsolution.net/constre/constre2/index-2.html">Home Version 07</a></li>
							<li><a href="https://html.ditsolution.net/constre/constre7/">Home Version 08 <span>New</span></a></li>
						</ul>
					</li>
					<li><a href="#">Company <span><i class="bi bi-plus"></i></span></a>
						<ul class="sub-menu">
							<li><a href="about.html">About Us</a></li>
							<li><a href="service.html">Our Service</a></li>
							<li><a href="team.html">Our Team</a></li>
							<li><a href="pricing.html">Pricing</a></li>
							<li><a href="404.html">404</a></li>
							<li><a href="contact.html">Contact Us</a></li>
						</ul>
					</li>
					<li><a href="#">Services <span><i class="bi bi-plus"></i></span></a>
						<ul class="sub-menu">
							<li><a href="service.html">Our Service</a></li>
							<li><a href="service-details.html">Service Details</a></li>
						</ul>
					</li>
					<li><a href="#">Portfolio <span><i class="bi bi-plus"></i></span></a>
						<ul class="sub-menu">
							<li><a href="portfolio.html">Portfolio</a></li>
							<li><a href="portfolio-details.html">Portfolio Details</a></li>
						</ul>
					</li>
					<li><a href="#">News <span><i class="bi bi-plus"></i></span></a>
						<ul class="sub-menu">
							<li><a href="blog-grid.html">Blog Gird</a></li>
							<li><a href="blog-list.html">Blog List</a></li>
							<li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
							<li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
							<li><a href="blog-details.html">Blog Details</a></li>
						</ul>
					</li>
					<li><a href="contact.html">Contact</a></li>
				</ul>
			</nav>
		</div>
	</div>
	<!--==================================================-->
	<!-- End consen Main Menu Area -->
	<!--==================================================-->



	<!--==================================================-->
	<!-- Start consen slider Area -->
	<!--==================================================-->
	<div class="hero-slide owl-carousel">
		<div class="slider-area d-flex align-items-center">
			<div class="container">
				<div class="row hero-bg align-items-center">
					<div class="col-lg-12">
						<div class="slider-content wow fadeInLeft animated">
							<h3> HOME SERVICES </h3>
							<h1> The Epitome High-Quality </h1>
							<h1> Roofing <span>Solution</span> </h1>
						</div>
						<div class="hero-description">
							<p>When you call the professional roofing contractors at Roofio Roofing, you can be sure you’re receiving the ultimate service for your roof. </p>
						</div>
						<div class="hero-button hero">
							<a href="#"> Learn More <i class="bi-arrow-right"></i> </a>
						</div>
						<div class="video-icon-cda">
							<a class="video-vemo-icon venobox vbox-item" data-vbtype="youtube" data-autoplay="true"
							href="https://youtu.be/BS4TUd7FJSg"><i class="bi bi-pause-circle-fill"></i></a>
						</div>
					</div>
					<!-- slider shape -->
					<div class="slider-shape">
						<div class="slider-shape-thumb">
							<img src="assets/images/slider/hero-shp.png" alt="">
						</div>
						<div class="slider-shape-thumb2">
							<img src="assets/images/slider/hero-shp.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="slider-area d-flex align-items-center">
			<div class="container">
				<div class="row hero-bg align-items-center">
					<div class="col-lg-12">
						<div class="slider-content wow fadeInLeft animated">
							<h3> HOME SERVICES </h3>
							<h1> The Epitome High-Quality </h1>
							<h1> Roofing <span>Solution</span> </h1>
						</div>
						<div class="hero-description">
							<p>When you call the professional roofing contractors at Roofio Roofing, you can be sure you’re receiving the ultimate service for your roof. </p>
						</div>
						<div class="hero-button hero">
							<a href="#"> Learn More <i class="bi-arrow-right"></i> </a>
						</div>
						<div class="video-icon-cda">
							<a class="video-vemo-icon venobox vbox-item" data-vbtype="youtube" data-autoplay="true"
							href="https://youtu.be/BS4TUd7FJSg"><i class="bi bi-pause-circle-fill"></i></a>
						</div>
						
					</div>
					<!-- slider shape -->
					<div class="slider-shape">
						<div class="slider-shape-thumb wow fadeInUp animated">
							<img src="assets/images/slider/hero-shp.png" alt="">
						</div>
						<div class="slider-shape-thumb2">
							<img src="assets/images/slider/hero-shp.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="slider-area d-flex align-items-center">
			<div class="container">
				<div class="row hero-bg align-items-center">
					<div class="col-lg-12">
						<div class="slider-content wow fadeInLeft animated">
							<h3> HOME SERVICES </h3>
							<h1> The Epitome High-Quality </h1>
							<h1> Roofing <span>Solution</span> </h1>
						</div>
						<div class="hero-description">
							<p>When you call the professional roofing contractors at Roofio Roofing, you can be sure you’re receiving the ultimate service for your roof. </p>
						</div>
						<div class="hero-button hero">
							<a href="#"> Learn More <i class="bi-arrow-right"></i> </a>
						</div>
						<div class="video-icon-cda">
							<a class="video-vemo-icon venobox vbox-item" data-vbtype="youtube" data-autoplay="true"
							href="https://youtu.be/BS4TUd7FJSg"><i class="bi bi-pause-circle-fill"></i></a>
						</div>
						
					</div>
					<!-- slider shape -->
					<div class="slider-shape">
						<div class="slider-shape-thumb wow fadeInUp animated">
							<img src="assets/images/slider/hero-shp.png" alt="">
						</div>
						<div class="slider-shape-thumb2">
							<img src="assets/images/slider/hero-shp.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--==================================================-->
	<!--End consen slider Area  -->
	<!--==================================================-->



	<!--==================================================-->
	<!-- Start Consen Feature Area -->
	<!--==================================================-->
	<div class="about-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="about-thumb wow fadeInLeft">
						<img src="assets/images/about/about.png" alt="">
					</div>
				</div>
				<div class="col-lg-6">
					<div class="consen-section-title style-two wow fadeInRight">
						 <h4>Aout Us</h4>
						<h2> Our Dedication to Exceptional </h2>
						<h2> Roofing <span>Services</span> </h2>
						<p>Leverage agile frameworks to provide a robust synopsis for high level the overviews. Iterative approaches to corpordate strategy data fogster to collaborative in thinking to empowerment collaborative thinking.</p>
					</div>
					<div class="row wow fadeInUp">					
						<div class="col-lg-6">
							<div class="about-item">
								<div class="about-icon">
									<img src="assets/images/about/item.png" alt="">
								</div>
								<div class="about-content">
									<h4>Commercial Roofing</h4>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="about-item">
								<div class="about-icon">
									<img src="assets/images/about/item2.png" alt="">
								</div>
								<div class="about-content">
									<h4> Residential Roofing </h4>
								</div>
							</div>
						</div>
						<div class="about-desc">
							<p>Corporate strategy frameworks to provide a robust synopsis for high level overviews. Iterative approaches to data foster to collaboorative in thinking to the  empowerment Welcome the corporate strategy.</p>
						</div>
						<div class="about-last-child">
							<div class="constre-btn abt">
								<a href="#">Read More <i class="bi bi-arrow-right"></i></a>
							</div>
							<div class="signeture">
								<img src="assets/images/about/signeture.png" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--==================================================-->
	<!-- End Consen Feature Area -->
	<!--==================================================-->


	<!--==================================================-->
	<!-- Start consen feature Area -->
	<!--==================================================-->
	<div class="service-section">
		<div class="container">
			<div class="row align-items-center mb-60">
				<div class="col-lg-12">
					<div class="consen-section-title white text-center wow fadeInUp">
						<h4>Our Services</h4>
						<h2> Leading the Way in Roof Repair</h2>
						<h2>and Re-Roofing</h2>
					</div>
				</div>
			</div>
			<div class="row">
                <?php foreach($service as $s){ ?>
				<div class="col-lg-3 col-md-6">
					<div class="single-service-box wow fadeInLeft">
						<div class="service-icon">
							<img src="assets/images/resource/srvc1.png" alt="">
						</div>
						<div class="service-content">
							<h3><?= $s['title'] ?></h3>
							<p><?= $s['description'] ?></p>
						</div>
						<div class="serivce-thumb">
							<img src="<?= $s['img'] ?>" alt="">
							<div class="service-share-icn">
								<a href="#"><i class="bi bi-arrow-right"></i></a>
							</div>
						</div>
					</div>
				</div>
                <?php } ?>
			</div>
		</div>
	</div>
	<!--==================================================-->
	<!-- End consen feature Area -->
	<!--==================================================-->


	<!--==================================================-->
	<!--  Start  Counter Section -->
	<!--===================================================-->
	<div class="counter-section">
		<div class="container">
			<div class="counter-container">
				<div class="row cntr-bg">
					<div class="col-md-6 col-lg-3">
						<div class="counter-single-item-inner wow fadeInLeft">
							<div class="counter-content">
								<div class="counter-text">
									<h1><span class="counter">914</span></h1>
									<span>+</span>
								</div>
								<div class="counter-title">
									<h4>Work</h4>
									<h3>Total Projects</h3>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3">
						<div class="counter-single-item-inner wow fadeInUp">
							<div class="counter-content">
								<div class="counter-text">
									<h1><span class="counter">124</span></h1>
									<span>K</span>
								</div>
								<div class="counter-title">
									<h4>Memeber</h4>
									<h3>Qualified Worker</h3>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3">
						<div class="counter-single-item-inner wow fadeInDown">
							<div class="counter-content">
								<div class="counter-text">
									<h1><span class="counter">75</span></h1>
									<span>K</span>
									
								</div>
								<div class="counter-title">
									<h4>Satisfy</h4>
									<h3>Get Awards</h3>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3">
						<div class="counter-single-item-inner wow fadeInRight">
							<div class="counter-content">
								<div class="counter-text">
									<h1><span class="counter">85</span></h1>
									<span>K</span>
								</div>
								<div class="counter-title">
									<h4>Client</h4>
									<h3>Satisfied Clients</h3>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--==================================================-->
	<!-- Start Video Section -->
	<!--===================================================-->


	<!--==================================================-->
	<!-- Start Video Section -->
	<!--===================================================-->
	<div class="project-section">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-7 col-md-6">
					<div class="consen-section-title style-two mb-60 pb-10">
						<h4>LETEST PROJECT</h4>
						<h2> Our Latest Completed and</h2>
						<h2>Running <span>Projects</span>.</h2>
					</div>
				</div>
				<div class="col-lg-5 col-md-6">
					<div class="constre-btn text-right">
						<a href="#">View All Projects <i class="bi bi-arrow-right"></i></a>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row ">
				<div class="col-lg-3 col-md-6">
					<div class="single-project-box wow fadeInLeft">
						<div class="project-box-inner">
							<div class="project-thumb">
								<img src="assets/images/resource/project.jpg" alt="">
							</div>
							<div class="project-content">
								<h4>Metal Roofing</h4>
								<h3>Resort Rooftop Repair</h3>
								<a class="prjct-btn" href="portfolio-details.html">VIEW DETAILS <i class="bi bi-arrow-right"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="single-project-box wow fadeInUp">
						<div class="project-box-inner">
							<div class="project-thumb">
								<img src="assets/images/resource/project2.jpg" alt="">
							</div>
							<div class="project-content">
								<h4>Metal Roofing</h4>
								<h3>Resort Rooftop Repair</h3>
								<a class="prjct-btn" href="portfolio-details.html">VIEW DETAILS <i class="bi bi-arrow-right"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="single-project-box wow fadeInUp">
						<div class="project-box-inner">
							<div class="project-thumb">
								<img src="assets/images/resource/project3.jpg" alt="">
							</div>
							<div class="project-content">
								<h4>Metal Roofing</h4>
								<h3>Resort Rooftop Repair</h3>
								<a class="prjct-btn" href="portfolio-details.html">VIEW DETAILS <i class="bi bi-arrow-right"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="single-project-box wow fadeInRight">
						<div class="project-box-inner">
							<div class="project-thumb">
								<img src="assets/images/resource/project4.jpg" alt="">
							</div>
							<div class="project-content">
								<h4>Metal Roofing</h4>
								<h3>Resort Rooftop Repair</h3>
								<a class="prjct-btn" href="portfolio-details.html">VIEW DETAILS <i class="bi bi-arrow-right"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--==================================================-->
	<!-- End Consen Video Area -->
	<!--==================================================-->




	<!--==================================================-->
	<!--  Start  Counter Section -->
	<!--===================================================-->
	<div class="choose-us-section">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-1"></div>
				<div class="col-lg-4 pr-0 pl-0">
					<div class="form-contact-box wow fadeInLeft">
						<div class="form-content">
							<h4>Book Roof solutions</h4>
						</div>
						<form action="https://formspree.io/f/myyleorq" method="POST" id="dreamit-form">
							<div class="row">
								<div class="col-lg-12">
									<div class="form_box">
										<input type="text" name="name" placeholder="Write Your Name">
									</div>
								</div>
								<div class="col-lg-12">
									<div class="form_box">
										<input type="email" name="email" placeholder="Email Address">
									</div>
								</div>
								<div class="col-lg-12">
									<div class="form_box">
										<input type="text" name="phone" placeholder="Inspection Date">
									</div>
								</div>
								<div class="col-lg-12">
									<div class="form_box">
										<input type="text" name="phone" placeholder="Your Location">
									</div>
								</div>
								<div class="col-lg-12">
									<div class="quote_button">
										<button class="btn" type="submit"> Make an Appointment </button>
									</div>
								</div>
							</div>
						</form>
						<div id="status"></div>
					</div>
				</div>
				<div class="col-lg-1"></div>
				<div class="col-lg-6">
					<div class="consen-section-title white">
						<h4> Contact Us </h4>
						<h2> Delivering Unrivaled Quality </h2>
						<h2>for Any <span>Structure.</span></h2>
						<p> Quality roofing should be durable, able to withstand severe winds, resist UV rays and Fire prevent leaks and pooling  diverting  from the home.. </p>
					</div>
					<div class="row wow fadeInRight">
						<div class="col-lg-6">
							<div class="choose-us-item">
								<div class="choose-icon">
									<img src="assets/images/resource/item1.png" alt="">
								</div>
								<div class="choose-content">
									<h4>Roofing Warranty </h4>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="choose-us-item">
								<div class="choose-icon">
									<img src="assets/images/resource/item2.png" alt="">
								</div>
								<div class="choose-content">
									<h4>Great Responsible</h4>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="choose-us-item">
								<div class="choose-icon">
									<img src="assets/images/resource/item3.png" alt="">
								</div>
								<div class="choose-content">
									<h4>Professional Workers</h4>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="choose-us-item">
								<div class="choose-icon">
									<img src="assets/images/resource/item4.png" alt="">
								</div>
								<div class="choose-content">
									<h4>High Quality Materials</h4>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="choose-shape wow fadeInDown">
					<img src="assets/images/resource/choose-shp.jpg" alt="">
				</div>	
			</div>
		</div>
	</div>


	<!--==================================================-->
	<!-- Start consen Testimonial Area -->
	<!--==================================================-->
	<div class="testimonial-section">
		<div class="container">
			<div class="row ">
				<div class="col-lg-12">
					<div class="consen-section-title style-two text-center pb-60">
						<h4> Testimonials </h4>
						<h2> Consen Trusted Customers </h2>
						<h2> Awesome <span> Reviews </span></h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="testimonial_list owl-carousel">

                    <?php foreach($reviews as $review){ ?>
                            <?php if($review['status'] == 1){ ?>
                                    <div class="col-lg-12">
						<div class="testi-single-box wow fadeInLeft">
							<div class="testimonial-content">
								<ul class="testi-rating">
									<li><i class="bi bi-star-fill"></i></li>
									<li><i class="bi bi-star-fill"></i></li>
									<li><i class="bi bi-star-fill"></i></li>
									<li><i class="bi bi-star-fill"></i></li>
									<li><i class="bi bi-star-fill"></i></li>
								</ul>
								<div class="quote-icon">
									<i class="bi bi-quote"></i>
								</div>
								<div class="testi-title">
									<h3><?= $review['title']; ?></h3>
								</div>
								<div class="testimonial-desc">
									<p><?= $review['description']; ?></p>
								</div>
							</div>
							<div class="testi-people-info">
								<div class="people-thumb">
									<img width="100px" height="100px" src="<?= $review['img']; ?>" alt="">
								</div>
								<div class="people-title">
									<h4><?= $review['name']; ?></h4>
									<h6><?= $review['user_title']; ?></h6>
								</div>
							</div>
						</div>
					</div>
                            <?php } ?>
			        <?php } ?>

				</div>
			</div>
		</div>
	</div>
	<!--==================================================-->
	<!-- End consen Testimonial Area -->
	<!--==================================================-->


	<!--==================================================-->
	<!-- Start Consen Process Area -->
	<!--==================================================-->

	<div class="team-section">
		<div class="container">
			<div class="row mb-60">
				<div class="col-lg-12">
					<div class="consen-section-title white">
						<h4>GREAT TEAM</h4>
						<h2> Meet Our Professional</h2>
						<h2>Team <span>Member</span></h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="team-single-box wow fadeInLeft">
						<div class="team-thumb">
							<img src="assets/images/resource/team.jpg" alt="">
							<div class="team-share-icn">
								<span> <i class="bi bi-share"></i></span>
							</div>
							<div class="team-social-icon">
								<ul>
									<li> <a href="#"><i class="fab fa-facebook-f"></i></a> </li>
									<li> <a href="#"><i class="bi bi-twitter"></i></a> </li>
									<li> <a href="#"><i class="bi bi-dribbble"></i></a> </li>
									<li> <a href="#"><i class="bi bi-instagram"></i></a> </li>
								</ul>
							</div>
						</div>
						<div class="team-content">	
							<h4>Founder CEO</h4>
							<h3>Mehedi Hassan</h3>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="team-single-box wow fadeInDown">
						<div class="team-thumb">
							<img src="assets/images/resource/team2.jpg" alt="">
							<div class="team-share-icn">
								<span> <i class="bi bi-share"></i></span>
							</div>
							<div class="team-social-icon">
								<ul>
									<li> <a href="#"><i class="fab fa-facebook-f"></i></a> </li>
									<li> <a href="#"><i class="bi bi-twitter"></i></a> </li>
									<li> <a href="#"><i class="bi bi-dribbble"></i></a> </li>
									<li> <a href="#"><i class="bi bi-instagram"></i></a> </li>
								</ul>
							</div>
						</div>
						<div class="team-content">	
							<h4>Senior Worker</h4>
							<h3>Christopher Jhon</h3>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="team-single-box wow fadeInUp">
						<div class="team-thumb">
							<img src="assets/images/resource/team3.jpg" alt="">
							<div class="team-share-icn">
								<span> <i class="bi bi-share"></i></span>
							</div>
							<div class="team-social-icon">
								<ul>
									<li> <a href="#"><i class="fab fa-facebook-f"></i></a> </li>
									<li> <a href="#"><i class="bi bi-twitter"></i></a> </li>
									<li> <a href="#"><i class="bi bi-dribbble"></i></a> </li>
									<li> <a href="#"><i class="bi bi-instagram"></i></a> </li>
								</ul>
							</div>
						</div>
						<div class="team-content">	
							<h4>CEO at Moroste</h4>
							<h3>Karikoka Ahli</h3>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="team-single-box wow fadeInRight">
						<div class="team-thumb">
							<img src="assets/images/resource/team4.jpg" alt="">
							<div class="team-share-icn">
								<span> <i class="bi bi-share"></i></span>
							</div>
							<div class="team-social-icon">
								<ul>
									<li> <a href="#"><i class="fab fa-facebook-f"></i></a> </li>
									<li> <a href="#"><i class="bi bi-twitter"></i></a> </li>
									<li> <a href="#"><i class="bi bi-dribbble"></i></a> </li>
									<li> <a href="#"><i class="bi bi-instagram"></i></a> </li>
								</ul>
							</div>
						</div>
						<div class="team-content">	
							<h4>Regular Customer</h4>
							<h3>Dickerson MH</h3>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!--==================================================-->
	<!-- End Consen Process Area -->
	<!--==================================================-->



	<!--==================================================-->
	<!-- Start Blog Section -->
	<!--===================================================-->
	<div class="blog-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="consen-section-title wow fadeInDown text-center style-two mb-60">
						<h4>LETEST PROJECT</h4>
						<h2> Latest News & Updates</h2>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row ">
				<div class="col-lg-4">
					<div class="single-blog-box wow fadeInLeft">
						<div class="blog-box-inner">
							<div class="blog-thumb">
								<img src="assets/images/resource/blog3.jpg" alt="">
								<div class="blog-date">
									<span>15 <br> APRIL</span>
								</div>
								<div class="blog-content2">
									<h4>COMMERCIAL</h4>
									<h3>Protecting your home From damaging leaks.</h3>
								</div>
							</div>
							<div class="blog-content">
								<h4>COMMERCIAL</h4>
								<h3>Protecting your home From damaging leaks.</h3>
								<div class="blg-btn">
									<a href="blog-details.html">READ MORE <i class="bi bi-arrow-right"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="single-blog-box wow fadeInUp">
						<div class="blog-box-inner">
							<div class="blog-thumb">
								<img src="assets/images/resource/blog2.jpg" alt="">
								<div class="blog-date">
									<span>15 <br> APRIL</span>
								</div>
								<div class="blog-content2">
									<h4>REPAIR</h4>
									<h3>Protecting your home From damaging leaks.</h3>
								</div>
							</div>
							<div class="blog-content">
								<h4>COMMERCIAL</h4>
								<h3>People Choose us For Our Quality of Works</h3>
								<div class="blg-btn">
									<a href="blog-details.html">READ MORE <i class="bi bi-arrow-right"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="single-blog-box wow fadeInRight">
						<div class="blog-box-inner">
							<div class="blog-thumb">
								<img src="assets/images/resource/blog.jpg" alt="">
								<div class="blog-date">
									<span>15 <br> APRIL</span>
								</div>
								<div class="blog-content2">
									<h4>COMMERCIAL</h4>
									<h3>Protecting your home From damaging leaks.</h3>
								</div>
							</div>
							<div class="blog-content">
								<h4>RESIDENTAL</h4>
								<h3>Essential Steps Safeguard Your Home.</h3>
								<div class="blg-btn">
									<a href="blog-details.html">READ MORE <i class="bi bi-arrow-right"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--==================================================-->
	<!-- End Consen Blog Area -->
	<!--==================================================-->





	<div class="call-to-action">
		<div class="container">
			<div class="row subscribe-bg align-items-center">
				<div class="col-lg-7 col-md-6">
					<div class="call-content wow fadeInUp animated">
						<h3>NEED ANY HELF ?</h3>
						<h1>Excellence Roofing Services</h1>
					</div>
				</div>
				<div class="col-lg-5 col-md-6">
					<div class="call-btn text-right wow fadeInDown animated">
						<a href="#">Make Appoinment <i class="bi bi-arrow-right"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	

<!--==================================================-->
<!-- Start consen Footer Middle Area -->
<!--==================================================-->
<div class="footer-section"> 
	<div class="container">
		<div class="row footer-bg">
			<div class="col-lg-3 col-md-6 pl-0">
				<div class="footer-contact-info wow fadeInLeft">
					<div class="footer-logo">
						<a href="index-2.html"><img src="assets/images/logo2.png" alt=""></a>
					</div>
					<p class="footer-desc">Together we the people achieve more than any single person could ever do alone.</p>
					<div class="footer-widget-contact">

						<div class="footer-didget-icon">
							<span><i class="bi bi-envelope"></i></span>
						</div>
						<div class="footer-widget-contact">
							<p>2390 NW 2nd Ave, Miami FL 33127, USA</p>
						</div>

						<div class="footer-didget-icon">
							<span><i class="fas fa-phone-alt"></i></span>
						</div>
						<div class="footer-widget-contact">
							<p>123-568-8858</p>
						</div>
					</div>
				</div>					
			</div>
			<div class="col-lg-3 col-md-6">

                <div class="widget-widget-nav-menu wow fadeInUp">
					<h4 class="widget-title">Our Services</h4>
					<div class="menu-quick-link-content">
						<ul class="footer-menu">
							<li><a href="#"> Single Ply Roofing </a></li>
							<li><a href="#"> Modified Roofing</a></li>
							<li><a href="#"> Built-Up Roofing </a></li>
							<li><a href="#"> Metal RoofingUs </a></li>
							<li><a href="#"> Specialty Metal </a></li>
						</ul>
					</div>
				</div>
			</div>	
			<div class="col-lg-3 col-md-6">
				<div class="widget widget-nav-menu wow fadeInUp">
					<h4 class="widget-title"> Useful Links </h4>
					<div class="menu-quick-link-content">
						<ul class="footer-menu">
							<li><a href="#"> Privacy Policy </a></li>
							<li><a href="#"> Terms and Conditions </a></li>
							<li><a href="#"> Typically Solutions </a></li>
							<li><a href="#"> Contact Us </a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div id="recent-post-widget">
					<div class="single-widget-item wow fadeInRight">
						<h4 class="widget-title">Newsletter</h4>
						<div class="contact-form-footer pt-4">	
							<div class="subscribe_form">
								<input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="Enter E-Mail">
							</div>
							<div class="send-btn">
								<button type="submit" class="btn"> Subscribe </button>
								<i class="bi bi-send"></i>
							</div>	
						</div>				
					</div>
					<div class="footer-widget-social-icon wow fadeInUp">
						<ul>
							<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
							<li><a href="#"><i class="fab fa-instagram"></i></a></li>
						</ul>
					</div>
				</div>	
			</div>
		</div>
	</div>
</div>	
<div class="footer-bottom-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="footer-bottom-content">
					<div class="footer-bottom-content-copy">
						<p>Copyright © 2023 <span>Costre</span> all rights reserved. Design By Dream IT.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>	
<!--==================================================-->
<!-- End consen Footer Middle Area -->
<!--==================================================-->



<!--==================================================-->
<!-- Start Search Popup Area -->
<!--==================================================-->
<div class="search-popup">
	<button class="close-search style-two"><i class="fas fa-window-close"></i></button>
	<button class="close-search"><i class="fas fa-arrow-up"></i></button>
	<form method="post" action="#">
		<div class="form-group">
			<input type="search" name="search-field" value="" placeholder="Search Here" required="">
			<button type="submit"><i class="fa fa-search"></i></button>
		</div>
	</form>
</div>
<!--==================================================-->
<!-- Start Search Popup Area -->
<!--==================================================-->




	<!--==================================================-->
	<!-- Start scrollup section Section -->
	<!--==================================================-->
		<div class="prgoress_indicator active-progress">
			<svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
			<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 270.456;"></path>
			</svg>
		</div>
	<!--==================================================-->
	<!-- Start scrollup section Section -->
	<!--==================================================-->

	<!-- jquery js -->
	<script src="assets/js/vendor/jquery-3.6.2.min.js"></script>
	<!-- bootstrap js -->
	<script src="assets/js/bootstrap.min.js"></script>
	<!-- carousel js -->
	<script src="assets/js/owl.carousel.min.js"></script>
	<!-- counterup js -->
	<script src="assets/js/jquery.counterup.min.js"></script>
	<!-- waypoints js -->
	<script src="assets/js/waypoints.min.js"></script>
	<!-- wow js -->
	<script src="assets/js/wow.js"></script>
	<!-- imagesloaded js -->
	<script src="assets/js/imagesloaded.pkgd.min.js"></script>
	<!-- venobox js -->
	<script src="venobox/venobox.js"></script>

	<!--  animated-text js -->
	<script src="assets/js/animated-text.js"></script>
	<!-- venobox min js -->
	<script src="venobox/venobox.min.js"></script>
	<!-- isotope js -->
	<script src="assets/js/isotope.pkgd.min.js"></script>
	<!-- jquery meanmenu js -->
	<script src="assets/js/jquery.meanmenu.js"></script>

	<!-- jquery scrollup js -->
	<script src="assets/js/jquery.scrollUp.js"></script>
	<!-- theme js -->
	<script src="assets/js/theme.js"></script>
	<!-- barfiller -->
	<script src="assets/js/jquery.barfiller.js"></script>
</body>


<!-- Mirrored from html.ditsolution.net/constre/constre3/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Dec 2023 11:42:24 GMT -->
</html>