<!DOCTYPE HTML>
<!--
	Phantom by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Mathematics for Programmers - The Resource Guide</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
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
								<a href="index.html" class="logo">
									<span class="symbol"><img src="images/logo.svg" alt="" /></span><span class="title">The Resource Guide</span>
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
							<li><a href="index.html">HOME</a></li>
							<li><a href="about.html">ABOUT US</a></li>
							<li><a href="math.html">MATHEMATICS</a></li>
<!--
							<li><a href="generic.html">Consequat dolor</a></li>
							<li><a href="elements.html">Elements</a></li>
-->
						</ul>
					</nav>

				<!-- Main -->
					<div id="main">
						<div class="inner">
							<h1 class="copy">Mathematics for Programmers</h1>
							<!-- <span class="image main"><img src="images/pic13.jpg" alt="" /></span> -->
							<h2>Online tutorial</h2>
                            <ul>
                             <a href="https://www.youtube.com/playlist?list=PL2_aWCzGMAwLL-mEB4ef20f3iqWMGWa25" target="_blank"><li>My Code School</li></a>
                             <a href="https://www.youtube.com/watch?v=2SpuBqvNjHI" target="_blank"><li>Free Code Camp (Sets and Logic)</li></a>

                             </ul>
                             
                           
                             <h2>Articles</h2>
                            <ul>
                                <a href="https://www.geeksforgeeks.org/math-in-competitive-programming/" target="_blank"><li>Geeks For Geeks</li></a>

                            </ul>
							

                            
                
               
       
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
									<li><a href="#" class="icon solid style2 fa-envelope"><span class="label">Email</span></a></li>
								</ul>
							</section>
							<ul class="copyright">
								<li>&copy; All rights reserved</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
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

	</body>
</html>