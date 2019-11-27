<?php

	include "../../core/config.php";
	include "../../core/produitOps.php";

	$P = new produitOps();
	$liste = $P->getProduits();

?>

<!DOCTYPE html>
<head>
	<!-- set the encoding of your site -->
	<meta charset="utf-8">
	<!-- set the viewport width and initial-scale on mobile devices -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- set the price table -->
	<meta name="Petshop" content="yes">
	<!-- set the HandheldFriendly -->
	<meta name="HandheldFriendly" content="True">
	<!-- set the price table style -->
	<meta name="Petshop" content="black">
	<!-- set the description -->
	<meta name="description" content="Petshop HTML5 Template">
	<title>Petshop HTML5 Template</title>
	<!-- include the site stylesheet -->
	<link href="https://fonts.googleapis.com/css?family=Dosis:400,500,600%7CNunito:400,600,700" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/icon-fonts.css">
	<link rel="stylesheet" type="text/css" href="css/plugins.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="wrapper">
		<header id="header">
			<div class="header-area container">
				<div class="row">
					<div class="col-xs-12 hidden visible-xs">
						<ul class="list-unstyled social-network text-center">
							<li><a href="mailto:petty@support.com"><i class="icon-message" aria-hidden="true"></i></a></li>
							<li><a href="tell:1345678000"><i class="icon-phone-call" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="icon-user" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="icon-cart" aria-hidden="true"></i></a></li>
						</ul>
					</div>
					<div class="col-xs-12 col-sm-6 hidden-xs">
						<ul class="list-unstyled contact-info">
							<li>
								<a href="mailto:petty@support.com" class="icon pull-left"><i class="icon-message"></i></a>
								<div class="align-left pull-left hidden-xs">
									<strong>Mail us:</strong>
									<a href="mailto:petty@support.com">petty@support.com</a>
								</div>
							</li>
							<li>
								<a href="tell:1345678000" class="icon pull-left"><i class="icon-phone-call"></i></a>
								<div class="align-left pull-left hidden-xs">
									<strong>Call us:</strong>
									<a href="tell:1345678000">(+1) 345 678 000</a>
								</div>
							</li>
						</ul>
					</div>
					<div class="col-xs-12 col-sm-6 hidden-xs">
						<div class="social-list">
							<ul class="list-unstyled social-network">
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
							</ul>
							<ul class="list-unstyled account-cart">
								<li><a href="#"><i class="icon-user"></i><span class="hidden-xs">Account</span></a></li>
								<li><a href="#"><i class="icon-cart"></i><span class="hidden-xs">Cart</span></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="logo pull-left hidden visible-xs">
							<a href="index.php"><img class="img-responsive" src="images/logo.png" alt="PetShop"></a>
						</div>
						<a href="#" class="nav-opener pull-right hidden visible-xs"><i class="fa fa-bars"></i></a>
						<nav id="nav">
							<ul class="list-unstyled text-uppercase menu-left">
								<li><a href="index.php">home</a></li>
								<li>
									<a href="javascript:void(0);">pages <i class="fa fa-angle-down"></i></a>
									<ul class="list-unstyled text-uppercase dropdown">
										<li><a href="services.html">services</a></li>
										<li><a href="aboutus.html">about us</a></li>
										<li><a href="gallery.html">Gallery</a></li>
										<li><a href="404page.html">404 page</a></li>
									</ul>
								</li>
								<li>
									<a href="javascript:void(0);">shop <i class="fa fa-angle-down"></i></a>
									<ul class="list-unstyled text-uppercase dropdown">
										<li><a href="shop.html">Shop</a></li>
										<li><a href="shop-detail.html">Shop Detail</a></li>
										<li><a href="cart.html">Cart</a></li>
										<li><a href="checkout.html">Checkout</a></li>
									</ul>
								</li>
								<li class="logo hidden-xs"><a href="index.php"><img class="img-responsive" src="images/logo.png" alt="PetShop"></a></li>
								<li class="mar-zero">
									<a href="javascript:void(0);">blog</a>
									<ul class="list-unstyled text-uppercase dropdown">
										<li><a href="blog-standard.html">Blog Standard</a></li>
										<li><a href="single-blog.html">Single Blog</a></li>
									</ul>
								</li>
								<li><a href="contact-us.html">contact us</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</header>
		<main id="main">
			<section class="main-slider">
				<div class="slide bg-full text-center overlay" style="background-image:url(images/img01.jpg);">
					<div class="caption">
						<h1>We will take care of <br class="hidden-xs">your pets</h1>
						<a href="contact-us.html" class="btn-primary text-uppercase text-center lg-round">contact us</a>
					</div>
				</div>
			</section>
			<section class="shop-sec container">
				<div class="row">
					<div class="col-xs-12">
						<div class="product-block">
							<?php
								foreach($liste as $row){
									if(!$row['qntProduit'])
										echo '<div class="product-col sold-item">';
									else
										echo '<div class="product-col">';
							?>
							<div class="img-holder">
								<img src="<?php echo $row['imgProduit']; ?>" alt="food-img" class="img-responsive">
								<span class="sale-item">Sale!</span>
								<div class="over-holder">
								</div>
							</div>
							<div class="descrip">
								<h3 class="heading2"><?php echo $row['libProduit']; ?></h3> 
								<span class="price"><?php echo $row['prixProduit']; ?> tnd</span>		
							</div>
								<div class="text-center">
									<a href="cart.html" class="btn-primary lg-round text-uppercase">Ajouter au <i class="icon-cart"></i></a>
								</div>
							</div>
							<?php } ?>
						</div>
					</div>
				</div>
			</section>
			<section class="feature-sec bg-full overlay" style="background-image:url(images/img16.jpg); ">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-4">
							<div class="feature-col">
								<span class="icon round"><i class="icon-bookmark"></i></span>
								<h3 class="heading2">Quality &amp; Caring</h3>
								<p>It is a long established fact that a reader <br class="hidden-xs"> distracted by the readable content</p>
							</div>
						</div>
						<div class="col-xs-12 col-sm-4">
							<div class="feature-col">
								<span class="icon round"><i class="icon-shield"></i></span>
								<h3 class="heading2">Insured &amp; Checked</h3>
								<p>It is a long established fact that a reader <br class="hidden-xs"> distracted by the readable content </p>
							</div>
						</div>
						<div class="col-xs-12 col-sm-4">
							<div class="feature-col">
								<span class="icon round"><i class="icon-home"></i></span>
								<h3 class="heading2">Free Home Consulting</h3>
								<p>It is a long established fact that a reader <br class="hidden-xs"> distracted by the readable content </p>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="gallery-sec container">
				<div class="row">
					<header class="col-xs-12 header text-center">
						<h1 class="heading text-uppercase">our gallery</h1>
						<span class="icon"><i class="icon-bone"></i></span>
					</header>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<div class="image-holder overlay">
							<img src="images/img17.jpg" alt="image description" class="img-responsive">
							<a href="#" class="icon lg-round text-center"><i class="fa fa-search" aria-hidden="true"></i></a>
						</div>
						<div class="image-holder overlay">
							<img src="images/img18.jpg" alt="image" class="img-responsive">
							<a href="#" class="icon lg-round text-center"><i class="fa fa-search" aria-hidden="true"></i></a>
						</div>
						<div class="image-holder overlay">
							<img src="images/img19.jpg" alt="image" class="img-responsive">
							<a href="#" class="icon lg-round text-center"><i class="fa fa-search" aria-hidden="true"></i></a>
						</div>
						<div class="image-holder overlay">
							<img src="images/img20.jpg" alt="image" class="img-responsive">
							<a href="#" class="icon lg-round text-center"><i class="fa fa-search" aria-hidden="true"></i></a>
						</div>
						<div class="image-holder overlay col-holder">
							<img src="images/img21.jpg" alt="image" class="img-responsive">
							<a href="#" class="icon lg-round text-center"><i class="fa fa-search" aria-hidden="true"></i></a>
						</div>
					</div>
				</div>
			</section>
			<section class="testimonail-sec bg-full" style="background-image:url(images/img22.jpg);">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<div class="testimonail-slider">
								<blockquote class="slide text-center">
									<span class="icon"><i class="icon-comment"></i></span>
									<q>It is a long established fact that a reader will be distracted by the readable content of <br class="hidden-xs"> when looking at its layout the point of using Lorem Ipsum is that it has a more-or-less normal<br class="hidden-xs"> opposed to using content here its making it look like readable.</q>
									<cite class="name">- Christiana Doe -</cite>
								</blockquote>
								<blockquote class="slide text-center">
									<span class="icon"><i class="icon-comment"></i></span>
									<q>It is a long established fact that a reader will be distracted by the readable content of <br class="hidden-xs"> when looking at its layout the point of using Lorem Ipsum is that it has a more-or-less normal<br class="hidden-xs"> opposed to using content here its making it look like readable.</q>
									<cite class="name">- Christiana Doe -</cite>
								</blockquote>
								<blockquote class="slide text-center">
									<span class="icon"><i class="icon-comment"></i></span>
									<q>It is a long established fact that a reader will be distracted by the readable content of <br class="hidden-xs"> when looking at its layout the point of using Lorem Ipsum is that it has a more-or-less normal<br class="hidden-xs"> opposed to using content here its making it look like readable.</q>
									<cite class="name">- Christiana Doe -</cite>
								</blockquote>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="blog-sec container">
				<div class="row">
					<header class="col-xs-12 header text-center">
						<h1 class="heading text-uppercase">our blog</h1>
						<span class="icon"><i class="icon-bone"></i></span>
					</header>
				</div>
				<div class="row">
					<div class="col-sx-12 col-sm-4">
						<div class="blog-col text-center">
							<div class="img-holder overlay">
								<img src="images/img23.jpg" alt="image" class="img-responsive">
								<a href="#" class="icon round"><i class="fa fa-search" aria-hidden="true"></i></a>
								<time class="text-uppercase date" datetime="2018-02-03 20:00">mar 18</time>
							</div>
							<ul class="comment-list list-unstyled">
								<li><i class="fa fa-comment-o" aria-hidden="true"></i> 34 Comments / </li>
								<li>by <a href="#"> Admin</a></li>
							</ul>
							<h4><a href="single-blog.html"> All this mistaken idea of denouncing pleasure and praise pain</a></h4>
						</div>
					</div>
					<div class="col-sx-12 col-sm-4">
						<div class="blog-col text-center">
							<div class="img-holder overlay">
								<img src="images/img24.jpg" alt="image" class="img-responsive">
								<a href="#" class="icon round"><i class="fa fa-search" aria-hidden="true"></i></a>
								<time class="text-uppercase date" datetime="2018-02-03 20:00">nov 26</time>
							</div>
							<ul class="comment-list list-unstyled">
								<li><i class="fa fa-comment-o" aria-hidden="true"></i> 16 Comments /</li> 
								<li>by <a href="#"> Admin</a></li>
							</ul>	
							<h4><a href="single-blog.html"> But because occasionally circumstan occur in which toil and pain</a></h4>
						</div>
					</div>
					<div class="col-sx-12 col-sm-4">
						<div class="blog-col text-center">
							<div class="img-holder overlay">
								<img src="images/img25.jpg" alt="image" class="img-responsive">
								<a href="#" class="icon round"><i class="fa fa-search" aria-hidden="true"></i></a>
								<time class="text-uppercase date" datetime="2018-02-03 20:00">dec 04</time>
							</div>
							<ul class="comment-list list-unstyled">
								<li><i class="fa fa-comment-o" aria-hidden="true"></i> 23 Comments / </li>
								<li>by <a href="#"> Admin</a> </li>
							</ul>
							<h4><a href="single-blog.html"> There anyone who loves or pursues or desires to obtain pain of itself</a></h4>
						</div>
					</div>
				</div>
			</section>
			<section class="callout" style="background-image:url(images/img26.jpg);">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-6">
							<h2>Get 50% offer for all pet products</h2>
						</div>
						<div class="col-xs-12 col-sm-6">
							<a class="btn-primary text-uppercase text-center lg-round" href="#">coupon code : PETTY1234</a>
						</div>
					</div>
				</div>
			</section>
		</main>
		<footer id="footer">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-4 abt-txt">
						<div class="footer-logo">
							<a href="#"><img src="images/footer-logo.png" alt="Pet Shop" class="img-responsive"></a>
						</div>
						<p>It is a long established fact that a reader <br class="hidden-xs">distracted by the readable content</p>
						<ul class="contact-list list-unstyled">
							<li><span class="icon"><i class="fa fa-map-signs" aria-hidden="true"></i></span> No: 801, petty shop, Australia.</li>
							<li><a href="mailto:pettyshop@mail.com"><span class="icon"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>pettyshop@mail.com</a></li>
							<li><a href="#"><span class="icon"><i class="fa fa-phone" aria-hidden="true"></i></span> (+23) 900 8990 000 </a></li>
						</ul>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-2">
						<h3>Information</h3>
						<ul class="info-list list-unstyled">
							<li><a href="#"><span class="icon"><i class="fa fa-angle-right" aria-hidden="true"></i></span>Pet Adoption</a></li>
							<li><a href="#"><span class="icon"><i class="fa fa-angle-right" aria-hidden="true"></i></span>Active Dogs</a></li>
							<li><a href="#"><span class="icon"><i class="fa fa-angle-right" aria-hidden="true"></i></span>Pet Daycare</a></li>
							<li><a href="#"><span class="icon"><i class="fa fa-angle-right" aria-hidden="true"></i></span>Dog Training</a></li>
							<li><a href="#"><span class="icon"><i class="fa fa-angle-right" aria-hidden="true"></i></span>Pet Helpcare</a></li>
						</ul>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-3">
						<h3>Instagram</h3>
						<ul class="insta-list list-unstyled">
							<li><a href="#"><img src="images/img27.jpg" alt="footer-img" class="img-responsive"></a></li>
							<li><a href="#"><img src="images/img28.jpg" alt="footer-img" class="img-responsive"></a></li>
							<li><a href="#"><img src="images/img29.jpg" alt="footer-img" class="img-responsive"></a></li>
							<li><a href="#"><img src="images/img30.jpg" alt="footer-img" class="img-responsive"></a></li>
							<li><a href="#"><img src="images/img31.jpg" alt="footer-img" class="img-responsive"></a></li>
							<li><a href="#"><img src="images/img32.jpg" alt="footer-img" class="img-responsive"></a></li>
						</ul>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-3">
						<h3>Newsletter</h3>
						<div class="newsletter">
							<p>It is a long established fact that a by <br class="hidden-xs">the readable content</p>
							<form class="newsletter-form" action="#">
								<fieldset>
									<input class="form-control" placeholder="Email" type="email">
									<button class="submit-btn round" type="submit"><i class="fa fa-arrow-right" aria-hidden="true"></i></button>
								</fieldset>
							</form>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>
	<script src="js/jquery.js"></script>
	<script src="js/plugins.js"></script>
	<script src="js/jquery.main.js"></script>
</body>

<!-- Mirrored from htmlbeans.com/html/petshop/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Nov 2019 02:00:56 GMT -->
</html>