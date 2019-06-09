<footer id="footer">
	<div class="container">
		<div class="row">
			<div class="footer-ribbon">
				<span>Indonesia Ocean Truck</span>
			</div>
			<div class="col-md-5">
				<div class="newsletter">
					<h4>Newsletter</h4>
					<p>Keep up on our always evolving product features and technology. Enter your e-mail and subscribe to our newsletter.</p>

					<div class="alert alert-success hidden" id="newsletterSuccess">
						<strong>Success!</strong> You've been added to our email list.
					</div>

					<div class="alert alert-danger hidden" id="newsletterError"></div>

					<form id="newsletterForm" action="php/newsletter-subscribe.php" method="POST">
						<div class="input-group">
							<input class="form-control" placeholder="Email Address" name="newsletterEmail" id="newsletterEmail" type="text">
							<span class="input-group-btn">
								<button class="btn btn-default" type="submit">Go!</button>
							</span>
						</div>
					</form>
				</div>
			</div>
			<div class="col-md-5">
				<div class="contact-details">
					<h4>Head Office</h4>
					<ul class="contact">
						<li><p><i class="fa fa-map-marker"></i> <?= $konfigurasi->alamat?></p></li>
						<li><p><i class="fa fa-phone"></i> <?= $konfigurasi->telepon?></p></li>
						<li><p><i class="fa fa-envelope"></i> <?= $konfigurasi->email?></p></li>
						<li><p><i class="fa fa-clock-o"></i> <?= $konfigurasi->jam_kantor?></p></li>
					</ul>
				</div>
			</div>
			<div class="col-md-2">
				<h4>Follow Us</h4>
				<ul class="social-icons">
					<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
					<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
					<li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="footer-copyright">
		<div class="container">
			<div class="row">
				<!-- <div class="col-md-1">
					<a href="index.html" class="logo">
						<img alt="Porto Website Template" class="img-responsive" src="<?= base_url() ?>assets/porto/logo-footer.png">
					</a>
				</div> -->
				<div class="col-md-7">
					<p>©2019 Indonesia Ocean Truck, All rights reserved</p>
				</div>
				<div class="col-md-4">
					<nav id="sub-menu">
						<ul>
							<li><a href="page-faq.html">FAQ's</a></li>
							<li><a href="sitemap.html">Sitemap</a></li>
							<li><a href="contact-us.html">Contact</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
	</div>
</footer>

		<!-- Vendor -->
		<script src="<?= base_url() ?>assets/porto/vendor/jquery/jquery.min.js"></script>
		<script src="<?= base_url() ?>assets/porto/vendor/jquery.appear/jquery.appear.min.js"></script>
		<script src="<?= base_url() ?>assets/porto/vendor/jquery.easing/jquery.easing.min.js"></script>
		<script src="<?= base_url() ?>assets/porto/vendor/jquery-cookie/jquery-cookie.min.js"></script>
		<script src="<?= base_url() ?>assets/porto/vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="<?= base_url() ?>assets/porto/vendor/common/common.min.js"></script>
		<script src="<?= base_url() ?>assets/porto/vendor/jquery.validation/jquery.validation.min.js"></script>
		<script src="<?= base_url() ?>assets/porto/vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js"></script>
		<script src="<?= base_url() ?>assets/porto/vendor/jquery.gmap/jquery.gmap.min.js"></script>
		<script src="<?= base_url() ?>assets/porto/vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
		<script src="<?= base_url() ?>assets/porto/vendor/isotope/jquery.isotope.min.js"></script>
		<script src="<?= base_url() ?>assets/porto/vendor/owl.carousel/owl.carousel.min.js"></script>
		<script src="<?= base_url() ?>assets/porto/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
		<script src="<?= base_url() ?>assets/porto/vendor/vide/vide.min.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="<?= base_url() ?>assets/porto/js/theme.js"></script>
		
		<!-- Current Page Vendor and Views -->
		<script src="<?= base_url() ?>assets/porto/vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
		<script src="<?= base_url() ?>assets/porto/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
		<script src="<?= base_url() ?>assets/porto/vendor/circle-flip-slideshow/js/jquery.flipshow.min.js"></script>
		<script src="<?= base_url() ?>assets/porto/js/views/view.home.js"></script>
		
		<!-- Theme Custom -->
		<script src="<?= base_url() ?>assets/porto/js/custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="<?= base_url() ?>assets/porto/js/theme.init.js"></script>

		<script src="<?= base_url() ?>assets/porto/js/examples/examples.gallery.js"></script>

		<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		
			ga('create', 'UA-12345678-1', 'auto');
			ga('send', 'pageview');
		</script>
		 -->

	</body>
</html>