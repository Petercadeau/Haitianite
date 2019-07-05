<?php
	include "php/conexion.php";

	$sql = "SELECT * FROM publicaciones";
	$stmt = sqlsrv_query( $conn, $sql );

	if( $stmt === false) {
    	die( print_r( sqlsrv_errors(), true) );
	}

	
    /*	echo $row['pub_cat'].", ".$row['pub_img'].".jpg<br />";*/
	

?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Haitianite | Acceuil</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="RanGO Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="plugins/slick-1.8.0/slick.css">
<link href="plugins/icon-font/styles.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
<link rel="icon" type="image/png" href="images/LogoHaiti.png" />
</head>

<body>

	<!-- Commentaires-->
								<div class="modal1" id="modal1">
									<div class="cerrar" id="btn_cerrar">X</div>
									<div class="modal1_content">
									<div class="imagen_pub">
										<img src="images/armsOfHaiti.png">
									</div>

									<div>
										<span>J'aime</span><span>Commentaire</span>
									</div>

									<div class="content_pub_and_comment">
										<form>											
											<input class="comment_input" type="text" name="" required="" placeholder="Commenter">
											<button class="button_comment" type="submit">Commenter</button>
										</form>
									</div>
								</div>

								<div class="icon-times modal__boton" id="modal__boton"></div>
							</div>
								<!--Fin de commentaires-->

<div class="super_container">
	
	<!-- Header -->

	<header class="header d-flex flex-row justify-content-end align-items-center trans_200">
		
		<!-- Logo -->
		<div class="logo mr-auto">
			<img class="img_logo" src="images/LogoHaiti.png" alt=""><a href="#">Haïti<span>anité</span></a>
		</div>

		<!-- Navigation -->
		<nav class="main_nav justify-self-end text-right">
			<ul>
				<li class="active"><a href="/">Acceuil</a></li>
				<li><a href="about.html">About Us</a></li>
				<li><a href="services.html">Services</a></li>
				<li><a href="portfolio.html">Portfolio</a></li>
				<li><a href="blog.html">Blog</a></li>
				<li><a href="contact.html">Contact</a></li>
				<li><a href="login.html">Connecter</a></li>
			</ul>
			
			<!-- Search -->
			<div class="search">
				<div class="search_content d-flex flex-column align-items-center justify-content-center">
					<div class="search_button d-flex flex-column align-items-center justify-content-center">
						<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
							width="18px" height="18px" viewBox="0 0 100 100" enable-background="new 0 0 100 100" xml:space="preserve">
							<g>
								<g>
									<path class="search_path" fill="#FFFFFF" d="M89.354,10.609c-14.144-14.146-37.157-14.146-51.301,0c-6.852,6.853-10.625,15.964-10.625,25.655
										c0,8.829,3.132,17.174,8.87,23.771l-4.32,4.321l-4.402-4.403c-0.482-0.482-1.137-0.754-1.819-0.754s-1.337,0.271-1.819,0.754
										L3.31,80.584c-2.148,2.147-3.331,5.004-3.331,8.042s1.183,5.895,3.331,8.042C5.457,98.817,8.313,100,11.35,100
										c3.038,0,5.894-1.184,8.041-3.331l20.627-20.631c0.482-0.482,0.753-1.137,0.753-1.819s-0.271-1.337-0.753-1.819l-4.403-4.403
										l4.322-4.322c6.795,5.902,15.28,8.855,23.766,8.855c9.289,0,18.579-3.537,25.65-10.61c6.852-6.853,10.625-15.963,10.625-25.654
										C99.979,26.573,96.205,17.462,89.354,10.609z M15.753,93.029c-1.176,1.177-2.739,1.824-4.403,1.824
										c-1.663,0-3.227-0.648-4.403-1.824c-1.176-1.176-1.823-2.74-1.823-4.403s0.647-3.228,1.824-4.403L18.458,72.71l8.805,8.807
										L15.753,93.029z M30.902,77.878l-8.805-8.807l3.659-3.66l8.806,8.808L30.902,77.878z M85.715,58.28
										c-12.137,12.14-31.886,12.14-44.023,0c-5.88-5.881-9.118-13.699-9.118-22.016c0-8.316,3.238-16.135,9.118-22.016
										c6.069-6.069,14.041-9.104,22.012-9.104c7.972,0,15.943,3.035,22.013,9.104c5.88,5.881,9.117,13.699,9.117,22.016
										S91.596,52.399,85.715,58.28z"></path>
								</g>
							</g>
							<g>
								<g>
									<path class="search_path" fill="#FFFFFF" d="M81.47,18.495c-9.797-9.798-25.736-9.798-35.533,0c-9.796,9.798-9.796,25.741,0,35.539
										c4.898,4.898,11.333,7.349,17.766,7.349c6.435,0,12.868-2.45,17.767-7.349l0,0C91.266,44.235,91.266,28.293,81.47,18.495z
										 M77.831,50.395c-7.79,7.791-20.466,7.791-28.256,0c-7.79-7.792-7.79-20.469,0-28.261c3.896-3.896,9.011-5.843,14.128-5.843
										c5.116,0,10.233,1.948,14.128,5.843C85.621,29.925,85.621,42.603,77.831,50.395z"></path>
								</g>
							</g>
							<g>
								<g>
									<path class="search_path" fill="#FFFFFF" d="M73.283,26.683c-5.282-5.283-13.877-5.283-19.16,0c-1.004,1.005-1.004,2.634,0,3.639
										c1.005,1.005,2.634,1.005,3.639,0c3.276-3.276,8.607-3.276,11.884,0c0.502,0.503,1.16,0.754,1.818,0.754
										c0.659,0,1.317-0.251,1.819-0.754C74.288,29.317,74.288,27.688,73.283,26.683z"></path>
								</g>
							</g>
						</svg>
					</div>

					<form id="search_form" class="search_form bez_1">
						<input type="search" class="search_input bez_1" placeholder="Rechercher">
					</form>

				</div>
			</div>
		</nav>

		<!-- Hamburger -->
		<div class="hamburger_container bez_1">
			<i class="fas fa-bars trans_200"></i>
		</div>
		
	</header>

	<!-- Menu -->

	<div class="menu_container">
		<div class="menu menu_mm text-right">
			<div class="menu_close"><i class="far fa-times-circle trans_200"></i></div>
			<ul class="menu_mm">
				<li class="menu_mm active"><a href="#">Acceuil</a></li>
				<li class="menu_mm"><a href="about.html">About Us</a></li>
				<li class="menu_mm"><a href="services.html">Services</a></li>
				<li class="menu_mm"><a href="portfolio.html">Portfolio</a></li>
				<li class="menu_mm"><a href="blog.html">Blog</a></li>
				<li class="menu_mm"><a href="contact.html">Contact</a></li>
				<li><a href="login.html">Connecter</a></li>
			</ul>
		</div>
	</div>

	<!-- Home -->

	<div class="home">
		<div class="home_background_container prlx_parent">
			<div class="home_background prlx" style="background-image:url(images/drapeau.jpg)"></div>
		</div>
		
		<!-- Hero Slider -->
		<div class="hero_slider_container">
			
			<!-- Slider -->
			<div class="owl-carousel owl-theme hero_slider">

				<!-- Slider Item -->
				<div class="owl-item hero_slider_item item_1 d-flex flex-column align-items-center justify-content-center">
					<span>by</span>
					<span><img src="images/colorlib.png" alt=""></span>
					<span>GO!</span>
					<span>Get your freebie template now!</span>
				</div>

				<!-- Slider Item -->
				<div class="owl-item hero_slider_item item_1 d-flex flex-column align-items-center justify-content-center">
					<span>by</span>
					<span><img src="images/colorlib.png" alt=""></span>
					<span>GO!</span>
					<span>Get your freebie template now!</span>
				</div>

				<!-- Slider Item -->
				<div class="owl-item hero_slider_item item_1 d-flex flex-column align-items-center justify-content-center">
					<span>by</span>
					<span><img src="images/colorlib.png" alt=""></span>
					<span>GO!</span>
					<span>Get your freebie template now!</span>
				</div>

			</div>
			
			<!-- Hero Slider Navigation Left -->
			<div class="hero_slider_nav hero_slider_nav_left">
				<div class="hero_slider_prev d-flex flex-column align-items-center justify-content-center trans_200">
					<i class="fas fa-chevron-left trans_200"></i>
				</div>
			</div>

			<!-- Hero Slider Navigation Right -->
			<div class="hero_slider_nav hero_slider_nav_right">
				<div class="hero_slider_next d-flex flex-column align-items-center justify-content-center trans_200">
					<i class="fas fa-chevron-right trans_200"></i>
				</div>
			</div>

		</div>

		<div class="hero_side_text_container">
			<div class="double_arrow_container d-flex flex-column align-items-center justify-content-center">
				<div class="double_arrow nav_links" data-scroll-to=".icon_boxes">
					<i class="fas fa-chevron-left trans_200"></i>
					<i class="fas fa-chevron-left trans_200"></i>
				</div>
			</div>
			<div class="hero_side_text">
				<h2>Modern design easy to use</h2>
				<p>Maecenas id orci rutrum, vehicula nunc sit amet, fringilla ante. Nulla efficitur vitae ligula commodo varius.</p>
			</div>
		</div>
		
		<div class="next_section_scroll">
			<div class="next_section nav_links" data-scroll-to=".icon_boxes">
				<i class="fas fa-chevron-down trans_200"></i>
				<i class="fas fa-chevron-down trans_200"></i>
			</div>
		</div>
			
	</div>

	<!-- Icon Boxes -->

	<div class="icon_boxes">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<div class="icon_box_title">
						<h1>Build your entire website in minutes</h1>
					</div>
					<div class="button icon_box_button trans_200">
						<a href="#" class="trans_200">discover more</a>
					</div>
				</div>

				<div class="col-lg-4 icon_box_col">

					<!-- Icon Box Item -->
					<div class="icon_box_item">
						<h2>Great team</h2>
						<p>Etiam euismod sapien nec est tempus consequat. Nullam eget pretium mi. Curabitur rhoncus finibus quam quis sodales.</p>
					</div>

					<!-- Icon Box Item -->
					<div class="icon_box_item">
						<h2>Modern Design</h2>
						<p>Etiam euismod sapien nec est tempus consequat. Nullam eget pretium mi. Curabitur rhoncus finibus quam quis sodales.</p>
					</div>

				</div>

				<div class="col-lg-4 icon_box_col">

					<!-- Icon Box Item -->
					<div class="icon_box_item">
						<h2>Online Marketing</h2>
						<p>Etiam euismod sapien nec est tempus consequat. Nullam eget pretium mi. Curabitur rhoncus finibus quam quis sodales.</p>
					</div>

					<!-- Icon Box Item -->
					<div class="icon_box_item">
						<h2>Easy to use</h2>
						<p>Etiam euismod sapien nec est tempus consequat. Nullam eget pretium mi. Curabitur rhoncus finibus quam quis sodales.</p>
					</div>
					
				</div>
			</div>
		</div>
	</div>

	<!-- Vertical Slider Section -->

	<div class="v_slider_section">
		<div class="container fill_height">
			<div class="row fill_height">

				<div class="col-lg-6 v_slider_section_image">
					<div class="v_slider_image">						
						<img src="pub/<?php echo $row['pub_img'].'.jpg'; ?>" alt="">
					</div>
				</div>

				<div class="col-lg-5 offset-lg-1 v_slider_content d-flex flex-column justify-content-center">
					<div class="v_slider_container">

						<!-- Vertical Slider -->
						<div class="v_slider">

							<!-- Vertical Slider Item -->
							<div class="v_slider_item">
								<h1>Fast support</h1>
								<h1>to all our</h1>
								<h1>clients. Just give</h1>
								<h1>us a shout</h1>
								<p>Etiam nec odio vestibulum est mattis effic iturut magna. Pelle ntesque sit am et tellus blandit. Etiam nec odio vestibul. Etiam nec odio vestibulum est mattis effic iturut.</p>
								<div class="person d-flex flex-row">
									<div class="person_image">
										<img src="images/person_1.png" alt="">
									</div>
									<div class="person_meta">
										<div class="person_name">Michael Smith</div>
										<div class="person_title">Manager</div>
									</div>
								</div>
							</div>

							<!-- Vertical Slider Item -->
							<div class="v_slider_item">
								<h1>Fast support</h1>
								<h1>to all our</h1>
								<h1>clients. Just give</h1>
								<h1>us a shout</h1>
								<p>Etiam nec odio vestibulum est mattis effic iturut magna. Pelle ntesque sit am et tellus blandit. Etiam nec odio vestibul. Etiam nec odio vestibulum est mattis effic iturut.</p>
								<div class="person d-flex flex-row">
									<div class="person_image">
										<img src="images/person_1.png" alt="">
									</div>
									<div class="person_meta">
										<div class="person_name">Michael Smith</div>
										<div class="person_title">Manager</div>
									</div>
								</div>
							</div>

							<!-- Vertical Slider Item -->
							<div class="v_slider_item">
								<h1>Fast support</h1>
								<h1>to all our</h1>
								<h1>clients. Just give</h1>
								<h1>us a shout</h1>
								<p>Etiam nec odio vestibulum est mattis effic iturut magna. Pelle ntesque sit am et tellus blandit. Etiam nec odio vestibul. Etiam nec odio vestibulum est mattis effic iturut.</p>
								<div class="person d-flex flex-row">
									<div class="person_image">
										<img src="images/person_1.png" alt="">
									</div>
									<div class="person_meta">
										<div class="person_name">Michael Smith</div>
										<div class="person_title">Manager</div>
									</div>
								</div>
							</div>

							<!-- Vertical Slider Item -->
							<div class="v_slider_item">
								<h1>Fast support</h1>
								<h1>to all our</h1>
								<h1>clients. Just give</h1>
								<h1>us a shout</h1>
								<p>Etiam nec odio vestibulum est mattis effic iturut magna. Pelle ntesque sit am et tellus blandit. Etiam nec odio vestibul. Etiam nec odio vestibulum est mattis effic iturut.</p>
								<div class="person d-flex flex-row">
									<div class="person_image">
										<img src="images/person_1.png" alt="">
									</div>
									<div class="person_meta">
										<div class="person_name">Michael Smith</div>
										<div class="person_title">Manager</div>
									</div>
								</div>
							</div>

							<!-- Vertical Slider Item -->
							<div class="v_slider_item">
								<h1>Fast support</h1>
								<h1>to all our</h1>
								<h1>clients. Just give</h1>
								<h1>us a shout</h1>
								<p>Etiam nec odio vestibulum est mattis effic iturut magna. Pelle ntesque sit am et tellus blandit. Etiam nec odio vestibul. Etiam nec odio vestibulum est mattis effic iturut.</p>
								<div class="person d-flex flex-row">
									<div class="person_image">
										<img src="images/person_1.png" alt="">
									</div>
									<div class="person_meta">
										<div class="person_name">Michael Smith</div>
										<div class="person_title">Manager</div>
									</div>
								</div>
							</div>

							<!-- Vertical Slider Item -->
							<div class="v_slider_item">
								<h1>Fast support</h1>
								<h1>to all our</h1>
								<h1>clients. Just give</h1>
								<h1>us a shout</h1>
								<p>Etiam nec odio vestibulum est mattis effic iturut magna. Pelle ntesque sit am et tellus blandit. Etiam nec odio vestibul. Etiam nec odio vestibulum est mattis effic iturut.</p>
								<div class="person d-flex flex-row">
									<div class="person_image">
										<img src="images/person_1.png" alt="">
									</div>
									<div class="person_meta">
										<div class="person_name">Michael Smith</div>
										<div class="person_title">Manager</div>
									</div>
								</div>
							</div>

							<!-- Vertical Slider Item -->
							<div class="v_slider_item">
								<h1>Fast support</h1>
								<h1>to all our</h1>
								<h1>clients. Just give</h1>
								<h1>us a shout</h1>
								<p>Etiam nec odio vestibulum est mattis effic iturut magna. Pelle ntesque sit am et tellus blandit. Etiam nec odio vestibul. Etiam nec odio vestibulum est mattis effic iturut.</p>
								<div class="person d-flex flex-row">
									<div class="person_image">
										<img src="images/person_1.png" alt="">
									</div>
									<div class="person_meta">
										<div class="person_name">Michael Smith</div>
										<div class="person_title">Manager</div>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Services -->

	<div class="services">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title">
						<h1>RanGO. We take care of your business</h1>
						<span>Explore our services</span>
					</div>
				</div>
			</div>
		</div>

		<div class="h_slider_container services_slider_container">
			<div class="service_slider_outer">
				<!-- Services Slider -->
				<div class="owl-carousel owl-theme services_slider">

					<!--PUB-->

<?php while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) { ?>
					<!-- Services Slider Item-->
					<div class="owl-item services_item">
						<div class="services_item_inner">
							<div class="service_item_content">
								<div class="service_item_title">
									<div class="service_item_icon">
										<div data-icon="&#xe083;" class="icon"></div>
									</div>
									<h2><?php echo $row['pub_cat']."<br />"; ?></h2>
								</div>
								
								<img class="image_pub" src="pub/<?php echo $row['pub_img'].'.jpg'; ?>" alt="">
								<div class="button service_item_button trans_200 btn_pub" id="btn_pub">hola
									<!--<a href="https://www.facebook.com/456535865136665/photos/a.456540411802877/456544031802515/?type=3&theater" class="trans_200">discover more</a>-->
								</div>

								
							</div>
						</div>
					</div>				
<?php
	}
	sqlsrv_free_stmt( $stmt);
?>

				</div>

				
			
				<div class="services_slider_nav services_slider_nav_left"><i class="fas fa-chevron-left trans_200"></i></div>
				<div class="services_slider_nav services_slider_nav_right"><i class="fas fa-chevron-right trans_200"></i></div>

			</div>
		</div>
	</div>

	<!-- Features -->

	<div class="features">
		<div class="container">
			<div class="row">
				<div class="col text-center">

					<div class="section_title">
						<h1>Modern features</h1>
					</div>

				</div>
			</div>
			<div class="row features_row">

				<div class="col-lg-4 text-lg-right features_col order-lg-1 order-2">
					
					<!-- Features Item-->
					<div class="features_item">
						<h2>Responsive</h2>
						<p>Etiam nec odio vestibulum est mattis effic iturut magna. Pel lentesque sit am et tellus.</p>
					</div>

					<!-- Features Item-->
					<div class="features_item">
						<h2>Clean code</h2>
						<p>Nec odio vestibulum est mattis effic iturut magna. Pel lentesque sit am et tellus bla ndit.</p>
					</div>

				</div>

				<div class="col-lg-4 d-flex flex-column align-items-center order-lg-2 order-1">
					<div class="features_image">
						<img src="images/features.png" alt="">
					</div>
					<div class="button features_button trans_200">
						<a href="#" class="trans_200">discover more</a>
					</div>
				</div>

				<div class="col-lg-4 features_col order-lg-3 order-3">
					
					<!-- Features Item-->
					<div class="features_item">
						<h2>Retina ready</h2>
						<p>Nec odio vestibulum est mattis effic iturut magna. Pel lentesque sit am et tellus bla ndit.</p>
					</div>

					<!-- Features Item-->
					<div class="features_item">
						<h2>Great team</h2>
						<p>Etiam nec odio vestibulum est mattis effic iturut magna. Pel lentesque sit am et tellus.</p>
					</div>

					<div class="button features_button_2 trans_200">
						<a href="#" class="trans_200">discover more</a>
					</div>

				</div>
			</div>
		</div>
	</div>

	<!-- Call to action -->

	<div class="cta">
		<div class="cta_background" style="background-image:url(images/cta_background.jpg)"></div>
		
		<div class="container">
			<div class="row">
				<div class="col-lg-5 order-lg-1 order-2">
					<div class="cta_content">
						<h1>We love our customers</h1>
						<p>Cursus, enim a ultrices venenatis, ante magna varius felis, ac sodales turpis lectus a odio. Quisque facilisis lacus vitae leo tincidunt, id cursus dui blandit.</p>
					</div>
				</div>

				<div class="col-lg-6 offset-lg-1 order-lg-2 order-1">
					<div class="cta_image d-flex flex-column justify-content-end">
						<img src="images/armsOfhaiti.png" alt="image by https://unsplash.com/@heysupersimi">
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Text Line -->

	<div class="text_line">
		<div class="container">
			<div class="row">

				<div class="col-lg-5 text-lg-right text-center">
					<div class="text_line_image">
						<img src="images/line.jpg" alt="">
					</div>
				</div>

				<div class="col-lg-5 offset-lg-2">
					<div class="text_line_content">
						<h1>We integrate the future</h1>
						<p>Etiam nec odio vestibulum est mattis effic iturut magna. Pelle ntesque sit am et tellus blandit. Etiam nec odio vestibul. Etiam nec odio vestibulum est mattis effic iturut.</p>
						<div class="button text_line_button trans_200">
							<a href="#" class="trans_200">discover more</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Newsletter -->

	<div class="newsletter">
		<div class="container">
			<div class="row">
				<div class="col text-lg-center text-left">
					<div class="newsletter_content">

						<!-- Newsletter Title -->
						<div class="newsletter_title">
							<h1>Abonnez-vous à notre newsletter</h1>
							<span>Si tu ne veux pas perdre nos mise à jour, abonnez-vous!</span>
						</div>
						
						<!-- Newsletter Form -->
						<div class="newsletter_form_container">
							<form action="#">
								<div class="input-group">
									<input type="email" class="newsletter_email" placeholder="Ton addresse e-mail ici" required="required" data-error="Valid email address is required.">
									<button id="newsletter_form_submit" type="submit" class="button newsletter_submit_button trans_200" value="Submit">
										abonne-moi
									</button>
								</div>
									
							</form>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			<div class="row">
				
				<div class="col-lg-4">

					<!-- Footer Intro -->
					<div class="footer_intro">

						<!-- Logo -->
						<div class="logo footer_logo">
							<a href="#">Haïti<span>anité</span></a>
						</div>

						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vitae enim enim. Sed nec dignissim purus.</p>
						
						<!-- Social -->
						<div class="footer_social">
							<ul>
								<li><a href="#"><i class="fab fa-pinterest"></i></a></li>
								<li><a href="https://www.facebook.com/Ha%C3%AFtianit%C3%A9-456535865136665/"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="#"><i class="fab fa-twitter"></i></a></li>
								<li><a href="#"><i class="fab fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fab fa-behance"></i></a></li>
								<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
							</ul>
						</div>
						
						<!-- Copyright -->
						<div class="footer_cr"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;
<script>
	document.write(new Date().getFullYear());
</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>

					</div>

				</div>
				
				<!-- Footer Services -->
				<div class="col-lg-2">

					<div class="footer_col">
						<div class="footer_col_title">Services</div>
						<ul>
							<li><a href="#">Social media</a></li>
							<li><a href="#">Management</a></li>
							<li><a href="#">Branding</a></li>
						</ul>
					</div>
					
					<div class="footer_col">
						<div class="footer_col_title">Aditionals</div>
						<ul>
							<li><a href="#">Social media</a></li>
							<li><a href="#">Management</a></li>
							<li><a href="#">Branding</a></li>
						</ul>
					</div>

				</div>

				<!-- Footer Menu -->
				<div class="col-lg-2">

					<div class="footer_col">
						<div class="footer_col_title">Menu</div>
						<ul>
							<li><a href="#">Home</a></li>
							<li><a href="#">About us</a></li>
							<li><a href="#">Services</a></li>
							<li><a href="#">Portfolio</a></li>
							<li><a href="#">Blog</a></li>
							<li><a href="#">Contact</a></li>
							<li><a href="#">Testimonials</a></li>
						</ul>
					</div>

				</div>

				<!-- Footer About -->
				<div class="col-lg-2">

					<div class="footer_col">
						<div class="footer_col_title">About us</div>
						<ul>
							<li><a href="#">The team</a></li>
							<li><a href="#">History</a></li>
							<li><a href="#">Company</a></li>
							<li><a href="#">Support</a></li>
						</ul>
					</div>

				</div>

				<!-- Footer Community -->
				<div class="col-lg-2">

					<div class="footer_col">
						<div class="footer_col_title">Community</div>
						<ul>
							<li><a href="#">Blog</a></li>
							<li><a href="#">Forums</a></li>
							<li><a href="#">Q&A</a></li>
							<li><a href="#">Purposes</a></li>
						</ul>
					</div>

				</div>

			</div>

			<div class="row">
				<div class="col">
					<!-- Copyright -->
					<div class="footer_cr_2">2017 All rights reserved</div>
				</div>
			</div>
		</div>
	</footer>

</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/slick-1.8.0/slick.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/scrollTo/jquery.scrollTo.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/custom.js"></script>
<script type="text/javascript" src="js/modal.js"></script>
</body>

</html>
