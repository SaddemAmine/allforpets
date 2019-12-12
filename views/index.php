<!DOCTYPE html>

<!-- Mirrored from htmlbeans.com/html/petshop/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Nov 2019 02:02:08 GMT -->
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
	<?php require_once 'process.php'; ?>
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
							<a href="index-2.html"><img class="img-responsive" src="images/logo.png" alt="PetShop"></a>
						</div>
						<a href="#" class="nav-opener pull-right hidden visible-xs"><i class="fa fa-bars"></i></a>
						<nav id="nav">
							<ul class="list-unstyled text-uppercase menu-left">
								<li><a href="index-2.html">home</a></li>
								<li>
									<a href="javascript:void(0);">pages <i class="fa fa-angle-down"></i></a>
									<ul class="list-unstyled text-uppercase dropdown">
										<li><a href="services.html">services</a></li>
										<li><a href="aboutus.html">about us</a></li>
										<li><a href="gallery.html">Gallery</a></li>
										<li><a href="404page.html">404 page</a></li>
										<li><a href="adoption.html">Adoption</a></li>
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
								<li class="logo hidden-xs"><a href="index-2.html"><img class="img-responsive" src="images/logo.png" alt="PetShop"></a></li>
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
			<section class="hero-sec bg-full" style="background-image:url(images/img33.jpg);">
				<div class="caption">
					<h1 class="heading text-center">Welcome to our adoption area</h1>
				</div>
			</section>
			</br>
			</br>
			<section>
            <?php
            if(isset($_SESSION['message'])):
            ?>
             <div class="alert alert-<?=$_SESSION['msg_type']?>">
             	<?php
             	echo $_SESSION['message'];
             	unset($_SESSION['message']); 
             	?>
             </div>
             <?php endif ?>
         </section>
			<section>
				<div class="container">
		<?php
          $mysqli = new mysqli('localhost', 'root', '', 'web_database') or die(mysqli_error($mysqli));
          $result = $mysqli->query("SELECT * FROM condidats") or die($mysqli->error);
          //pre_r($result);
          ?>
          <div class="row justify-content-center">
             <table class="table"> 
               <thead>
                 <tr>
                   <th>Nom</th>
                   <th>Prenom</th>
                   <th>Nom Animal</th>
                   <th>Adresse mail</th>
                   <th>Numéro de téléphone</th>
                   <th>Motivations</th>
                   <th colspan="6">Action</th> 
                 </tr>
               </thead>
               <?php
               while ($row = $result->fetch_assoc()): 
               ?>
               <tr>
                 <td><?php echo $row['nom']; ?></td>
                 <td><?php echo $row['prenom']; ?></td>
                 <td><?php echo $row['nom_animal']; ?></td>
                 <td><?php echo $row['adresse_mail']; ?></td>
                 <td><?php echo $row['telephone']; ?></td>
                 <td><?php echo $row['lettre_motivation']; ?></td>
                 <td>
                 	<a href="index.php?edit=<?php echo $row['id_condidat'];?>" class="btn btn-info">Edit</a>
                 	<a href="process.php?delete=<?php echo $row['id_condidat'];?>" class="btn btn-danger">Delete</a>
                 </td>
               </tr>
             <?php endwhile; ?>
             </table>
           </div>
          <?php
           function pre_r($array)
           {
            echo '<pre>';
            print_r($array);
            echo "</pre>"; 
           } 
		?>
		<section>
			<center>
				<form action="" method="POST" enctype="multipart/form-data">
				<table>
					<thead>
						<tr>
							<th>image</th>
							<th>Nom</th>
							<th>date de naissance</th>
							<th>race</th>
							<th>sexe</th>
						</tr>
					</thead>
					<?php
					$connexion = mysqli_connect("localhost","root","");
					$db = mysqli_select_db($connexion,'web_database');
					$query = "SELECT * FROM 'animaux'";
					$query_run = mysqli_query($connexion,$query);
					while($row = mysqli_fetch_array($query_run))
					{
						?>
						<tr>
							<td> <?php echo '<img src="data:image;base64,'.base64_encode($row['img']).'" alt="image" style="width: 100px; height: 100px;">'?> </td>
							<td> <?php echo $row['nom']?></td>
							<td> <?php echo $row['date_naissance']?></td>
							<td> <?php echo $row['race']?></td>
							<td> <?php echo $row['sexe']?></td>
						</tr>
						<?php
					}
					?>
				</table>
			</form>
			</center>
		</section>
			</section>
		</div>
			<section class="contact-sec container">
				<div class="row">
					<div class="col-xs-12 col-sm-8">
						<h2 class="heading heading-dark">Fill out the form</h2>
						<form class="contact-form" action="process.php" method="POST" id="formulaire">
							<fieldset>
								<input type="hidden" name="id_condidat" value="<?php echo $id_condidat; ?>">
								<div class="form-group">
									<div class="col">
										<input class="form-control lg-round" placeholder="First Name" type="text" name="nom" value="<?php echo $nom; ?>"id="nom">
									</div>
									<div class="col">
										<input class="form-control lg-round" placeholder="Last Name" type="text" name="prenom" value="<?php echo $prenom; ?>"id="prenom">
									</div>
								</div>
								<div class="form-group"> 
									<div class="col">
										<input class="form-control lg-round" placeholder="E-mail" type="email" name="adresse_mail" value="<?php echo $adresse_mail; ?>"id="adresse_mail">
									</div>
									<div class="col">
										<input class="form-control lg-round" placeholder="Animal name" type="text" name="nom_animal" value="<?php echo $nom_animal; ?>" id="nom_animal">
									</div>
								</div>
								<div class="form-group">
									<input class="form-control lg-round" placeholder="Mobile number" type="text" name="telephone" value="<?php echo $telephone; ?>"id="telephone">
								</div>
								<textarea class="lg-round" placeholder="Motivations" name="lettre_motivation" value="<?php echo $lettre_motivation; ?>"></textarea>
								<div class="form-group">
									<?php if($update == true): ?>
									<button type="submit" class="btn btn-info" name="update">Update</button>
									<?php else: ?>
								<button type="submit" class="btn btn-primary" name="submit">submit</button>
							<?php endif; ?>
							   </div>
							</fieldset>

						</form>
						<p style="color: red;" id="erreur"></p>
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
					<div class="col-xs-12 col-sm-4 abt-txt">
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
					<div class="col-xs-12 col-sm-2">
						<h3>Information</h3>
						<ul class="info-list list-unstyled">
							<li><a href="#"><span class="icon"><i class="fa fa-angle-right" aria-hidden="true"></i></span>Pet Adoption</a></li>
							<li><a href="#"><span class="icon"><i class="fa fa-angle-right" aria-hidden="true"></i></span>Active Dogs</a></li>
							<li><a href="#"><span class="icon"><i class="fa fa-angle-right" aria-hidden="true"></i></span>Pet Daycare</a></li>
							<li><a href="#"><span class="icon"><i class="fa fa-angle-right" aria-hidden="true"></i></span>Dog Training</a></li>
							<li><a href="#"><span class="icon"><i class="fa fa-angle-right" aria-hidden="true"></i></span>Pet Helpcare</a></li>
						</ul>
					</div>
					<div class="col-xs-12 col-sm-3">
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
					<div class="col-xs-12 col-sm-3">
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

<!-- Mirrored from htmlbeans.com/html/petshop/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Nov 2019 02:02:08 GMT -->
</html>