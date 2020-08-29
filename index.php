<!DOCTYPE HTML>

<html>
	<head>
	    
		<title>The Resource Guide</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="The Resource Guide is a collection of some of the best Computer Science and Mathematics resources for beginners on the internet.">
		
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="inner">

							<!-- Logo -->
								<a href="index.php" class="logo">
                                    <span class="symbol"><img src="images/logo.svg" alt="logo" /></span><span class="title">The Resource Guide</span>
								</a>

							<!-- Nav -->
								<nav>
									<ul>
										<li><a href="#menu">Menu</a></li>
									</ul>
								</nav>

						</div>
					</header>

				<!-- Menu -->
					<nav id="menu">
						<h2>Menu</h2>
						<ul>
							<li><a href="index.php">HOME</a></li>
							<li><a href="about.php">ABOUT US</a></li>
							<li><a href="math.php">MATHEMATICS</a></li>
<!--
							<li><a href="generic.html">Consequat dolor</a></li>
							<li><a href="elements.html">Elements</a></li>
-->
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">
						<div class="inner">
							<header>
								<h1>An almirah of Computer Science resources for beginners.</h1>
								
							</header>
							<section class="tiles">
							<article class="style1">
									<span class="image">
										<img src="images/pic07.jpg" alt="" />
									</span>
									<a href="absolutebeg.php">
										<h2>ABSOLUTE BEGINNER</h2>
										<div class="content">
										</div>
									</a>
								</article>


								<article class="style1">
									<span class="image">
										<img src="images/pic01.jpg" alt="" />
									</span>
									<a href="python.php">
										<h2>PYTHON</h2>
										<div class="content">
										</div>
									</a>
								</article>
								<article class="style2">
									<span class="image">
										<img src="images/pic12.jpg" alt="" />
									</span>
									<a href="c.php">
										<h2>C</h2>
										<div class="content">
											
										</div>
									</a>
								</article>
								<article class="style2">
									<span class="image">
										<img src="images/pic02.jpg" alt="" />
									</span>
									<a href="cpp.php">
										<h2>C++</h2>
										<div class="content">
											
										</div>
									</a>
								</article>
								<article class="style3">
									<span class="image">
										<img src="images/pic03.jpg" alt="" />
									</span>
									<a href="java.php">
										<h2>JAVA</h2>
										<div class="content">
										</div>
									</a>
								</article>
								<article class="style4">
									<span class="image">
										<img src="images/pic04.jpg" alt="" />
									</span>
									<a href="javascript.php">
										<h2>JAVASCRPIT</h2>
										<div class="content">
										</div>
									</a>
								</article>
								<article class="style5">
									<span class="image">
										<img src="images/pic05.jpg" alt="" />
									</span>
									<a href="ds.php">
										<h2>DATA STRUCTURES</h2>
										<div class="content">
										</div>
									</a>
								</article>
								<article class="style6">
									<span class="image">
										<img src="images/pic06.jpg" alt="" />
									</span>
									<a href="algo.php">
										<h2>ALGORITHMS</h2>
										<div class="content">
										</div>
									</a>
								</article>

								<article class="style2">
									<span class="image">
										<img src="images/pic07.jpg" alt="" />
									</span>
									<a href="practiceplat.php">
										<h2>PRACTICE PLATFORMS</h2>
										<div class="content">
											
										</div>
									</a>
								</article>
								<article class="style3">
									<span class="image">
										<img src="images/pic08.jpg" alt="" />
									</span>
									<a href="solved.php">
										<h2>SOLVED PROBLEMS</h2>
										<div class="content">
										</div>
									</a>
								</article>

								<article class="style1">
									<span class="image">
										<img src="images/pic09.jpg" alt="" />
									</span>
									<a href="oop.php">
										<h2>OBJECT ORIENTED PROGRAMMING</h2>
										<div class="content">
										</div>
									</a>
								</article>
								<article class="style5">
									<span class="image">
										<img src="images/pic10.jpg" alt="" />
									</span>
									<a href="dp.php">
										<h2>DYNAMIC PROGRAMMING</h2>
										<div class="content">
										</div>
									</a>
								</article>
								 <article class="style6">
									<span class="image">
										<img src="images/pic11.jpg" alt="" />
									</span>
									<a href="mathforprog.php">
										<h2>MATHEMATICS FOR PROGRAMMERS</h2>
										<div class="content">
										</div>
									</a>
								</article>
								<article class="style4">
									<span class="image">
										<img src="images/pic12.jpg" alt="" />
									</span>
									<a href="webdev.php">
										<h2>WEB DEVELOPMENT</h2>
										<div class="content">
										</div>
									</a>
								</article>


							</section>
						</div>
					</div>

				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							<section>
								<h2>Get in touch</h2>
								<form method="post" action="mailer.php" id="form">
                                    <?php
                                    if(($_GET['success'] == 1)) {
                                        echo "<div class=\"form-messages success\">Thank you! Your message has been sent.</div>";

                                    }
                                    if(($_GET['success'] == -1)) {
                                        echo "<div class=\"form-messages error\">Oops! Something went wrong. Please try again.</div>";
                                    }
									
									
                                    ?>


									<div class="fields">
										<div class="field half">
											<input type="text" name="name" id="name" placeholder="Your Name" required/>
										</div>
										<div class="field half">
											<input type="email" name="email" id="email" placeholder="Your Email" required/>
										</div>
										<div class="field">
											<textarea name="message" id="message" placeholder="Type Message" required></textarea>
										</div>
									</div>
									<ul class="actions">
										<li><input type="submit" value="Send" class="primary" /></li>
									</ul>
								</form>
							</section>
							<section>
								<h2>CONNECT</h2>
								<ul class="icons">
									<li><a href="https://www.linkedin.com/in/simran-mahindrakar-3105671a9/" class="icon brands style2 fa-linkedin"><span class="label">LinkedIn</span></a></li>
									<li><a href="https://github.com/simranmahindrakar" class="icon brands style2 fa-github"><span class="label">GitHub</span></a></li>
								</ul>
							</section>
							<ul class="copyright">
								<li>&copy;All rights reserved</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
							</ul>
						</div>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5f49f8c19a03ed2d"></script>


	</body>
</html>