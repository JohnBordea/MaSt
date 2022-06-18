<?php
session_start();


  include("connect.php");
  include("functions_login.php");

  $user_data=check_login($con);

$_SESSION;

?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>MyStamp: Products</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	    <link rel="icon" href="images/2022-04-16 17_39_42-Canva.jpg" type="image/gif">
		<link rel="stylesheet" href="assets/css/main.css" />
        <link rel="stylesheet" href="assets/css/products.css" />
	</head>
	<body class="is-preload homepage">
		<div id="page-wrapper">

			<!-- Header -->
                <div id="header-wrapper">
                <header id="header" class="container">

                    <!-- Logo -->
                    <div id="logo">
                        <h1><a href="index.php">MyStamp</a></h1>
                    </div>

                    <!-- Nav -->
                    <nav id="nav">
                                <ul>
                                    <li><a href="index.php">Main</a></li>

                                    <li class="current"><a href="products.php">Products</a></li>
                                   <!-- <li><a href="right-sidebar.html">Right Sidebar</a></li> -->
                                    <li><a href="about_us.php">About us</a></li>

                                    <!-- Account -->
                                    <li>
                                        <a href="#">Account</a>
                                        <ul>
                                            <?php
                                            if (isset($user_data['username'])) {
                                            ?>
                                            <li><a href="profile.php">Account info</a></li>
                                            <?php
                                            }
                                            ?>
                                            
                                            <?php
                                            if (!isset($user_data['username'])) {
                                            ?>
                                            <li><a href="login.php">LOGIN & REGISTER</a></li>
                                            <?php
                                            }
                                            ?>


                                            <?php
                                            if (isset($user_data['username'])) {
                                            ?>
                                            <li><a href="logout.php">LOGOUT</a></li>
                                            <?php
                                            }
                                            ?>
                                            

                                            



                                            <!-- Unused stuff, just to be in case it will be needed in future XD -->

                                            <!--<li> 
                                                <a href="#">Phasellus consequat</a>
                                                <ul>
                                                    <li><a href="#">Lorem ipsum dolor</a></li>
                                                    <li><a href="#">Phasellus consequat</a></li>
                                                    <li><a href="#">Magna phasellus</a></li>
                                                    <li><a href="#">Etiam dolore nisl</a></li>
                                                </ul>
                                            </li>
                                        <li><a href="#">Veroeros feugiat</a></li>-->

                                            
                                        </ul>
                                    </li>
                                </ul>
                            </nav>

                    </header>
            </div>

			<!-- Banner -->
				<div id="banner-wrapper">
					<div id="banner" class="box container">
						<div class="row">
							<div class="col-12 col-12-medium">
								<h2>These are our products</h2>
							</div>
						</div>
					</div>
				</div>

            <!-- Filtering -->
			<div id="features-wrapper">
				<header id="header" class="container">
					<nav id="nav">
                    <form>
						<ul>
                       <li>
						    <select name="Country" style=" font-weight: bold">
								<option value="" disabled="" selected="">Country</option>
								<option value="Lorem ipsum dolor">Lorem ipsum dolor</option>
								<option value="Lorem ipsum dolor">Lorem ipsum dolor</option>
								<option value="Lorem ipsum dolor">Lorem ipsum dolor</option>
							</select>
						</li>
                        <li>
							<select name="Theme" style=" font-weight: bold" >
								<option value="" disabled="" selected="">Theme</option>
								<option value="Lorem ipsum dolor">Lorem ipsum dolor</option>
								<option value="Lorem ipsum dolor">Lorem ipsum dolor</option>
								<option value="Lorem ipsum dolor">Lorem ipsum dolor</option>
							</select>
						</li>
                        <li>
							<select name="Color" style=" font-weight: bold">
								<option value="" disabled="" selected="">Color</option>
								<option value="Monochrome">Monochrome</option>
								<option value="Multicolor">Multicolor</option>
							</select>
						</li>
                        <li>
							<select name="From Year" style=" font-weight: bold">
								<option value="" disabled="" selected="">From Year</option>
								<option value="1800">1800</option>
								<option value="1900">1900</option>
								<option value="2000">2000</option>
							</select>
						</li>
						<li><input type="submit" name="submit" value="Apply" style="font-weight: bold"></li>
						</ul>
                    </form>
					</nav>
				</header>
			</div>
			<!-- Features -->
			<div id="features-wrapper">
				<div class="container">
					<div class="row">
						<div class="col-4 col-12-medium">

							<!-- Box -->
								<section class="box feature">
									<a href="product_page.html?id=0" class="image featured"><img src="images/pic01.jpg" alt="" /></a>
									<div class="inner">
										<header>
											<h2>Name</h2>
											<p>Seller</p>
										</header>
										<p>Description</p>
									</div>
								</section>

						</div>
						<div class="col-4 col-12-medium">

							<!-- Box -->
								<section class="box feature">
									<a href="product_page.html?id=1" class="image featured"><img src="images/pic02.jpg" alt="" /></a>
									<div class="inner">
										<header>
											<h2>Name</h2>
											<p>Seller</p>
										</header>
										<p>Description</p>
									</div>
								</section>

						</div>
						<div class="col-4 col-12-medium">

							<!-- Box -->
								<section class="box feature">
									<a href="product_page.html?id=2" class="image featured"><img src="images/pic03.jpg" alt="" /></a>
									<div class="inner">
										<header>
											<h2>Name</h2>
											<p>Seller</p>
										</header>
										<p>Description</p>
									</div>
								</section>

						</div>
					</div>
				</div>
			</div>


       <!-- Footer -->

                <div id="footer-wrapper">
                    <footer id="footer" class="container">
                        <div class="row">
                            <div class="col-3 col-6-medium col-12-small">

                                <!-- Links -->
                                    <section class="widget links">
                                        <h3>Documentation</h3>
                                        <ul class="style2">
                                            <li><a href="Scholarly.html">Scholarly</a></li>
                                            <li><a href="#">Aliquam imperdiet suscipit odio</a></li>
                                            <li><a href="#">Sed porttitor cras in erat nec</a></li>
                                            <li><a href="#">Felis varius pellentesque potenti</a></li>
                                            <li><a href="#">Nullam scelerisque blandit leo</a></li>
                                        </ul>
                                    </section>

                            </div>
                            <div class="col-3 col-6-medium col-12-small">

                                <!-- Links -->
                                    <section class="widget links">
                                        <h3>Random Links</h3>
                                        <ul class="style2">
                                            <li><a href="#">Etiam feugiat condimentum</a></li>
                                            <li><a href="#">Aliquam imperdiet suscipit odio</a></li>
                                            <li><a href="#">Sed porttitor cras in erat nec</a></li>
                                            <li><a href="#">Felis varius pellentesque potenti</a></li>
                                            <li><a href="#">Nullam scelerisque blandit leo</a></li>
                                        </ul>
                                    </section>

                            </div>
                            <div class="col-3 col-6-medium col-12-small">

                                <!-- Links -->
                                    <section class="widget links">
                                        <h3>Random Links</h3>
                                        <ul class="style2">
                                            <li><a href="#">Etiam feugiat condimentum</a></li>
                                            <li><a href="#">Aliquam imperdiet suscipit odio</a></li>
                                            <li><a href="#">Sed porttitor cras in erat nec</a></li>
                                            <li><a href="#">Felis varius pellentesque potenti</a></li>
                                            <li><a href="#">Nullam scelerisque blandit leo</a></li>
                                        </ul>
                                    </section>

                            </div>
                            <div class="col-3 col-6-medium col-12-small">

                                <!-- Contact -->
                                    <section class="widget contact last">
                                        <h3>Contact Us</h3>
                                        <ul>
                                            <li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
                                            <li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
                                            <li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
                                            <li><a href="#" class="icon brands fa-dribbble"><span class="label">Dribbble</span></a></li>
                                            <li><a href="#" class="icon brands fa-pinterest"><span class="label">Pinterest</span></a></li>
                                        </ul>
                                        <p>1234 Fictional Str.<br />
                                        Fictional City, RO 00000<br />
                                        (505) 503-4455</p>
                                    </section>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div id="copyright">
                                    <ul class="menu">
                                        <li>&copy; MyStamp. All rights reserved</li><li>Design: <a href="about_us.html"> TeamName</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </footer>
                </div>

		<!-- Scripts -->


	</body>
</html>