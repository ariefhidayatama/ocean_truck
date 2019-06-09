<style>
    .img-client{
        width: 250px;
        height: 170px;
    }
</style>
<div role="main" class="main">
				<div class="slider-container rev_slider_wrapper">
					<div id="revolutionSlider" class="slider rev_slider" data-plugin-revolution-slider data-plugin-options="{'delay': 9000, 'gridwidth': 1170, 'gridheight': 500, 'disableProgressBar': 'on'}">
						<ul>
							<?php foreach ($slider as $key => $value) { ?>
							<li data-transition="fade">
								<img src="<?= base_url();?>assets/upload/image/<?= $value->gambar ?>"  
									alt="<?= $value->judul ?>"
									data-bgposition="center center" 
									data-bgfit="cover" 
									data-bgrepeat="no-repeat" 
									class="rev-slidebg">
							</li>
							<?php } ?>
						</ul>
					</div>
				</div>
				<div class="home-intro" id="home-intro">
					<div class="container">
							<div class="col-md-12">
								<p>
								<em>PT. INDONESIA OCEAN TRUCK </em> has a strong custom clearence power in Indonesia major trading 
								<span>independent insurance survey company, shipping agent, so as to comprehensive escort the performing on the whole project</span>
								</p>
							</div>
					</div>
				</div>
				
			<div class="container">
				
				<div class="featured-boxes">
					<div class="row center">
						<h2>Our <strong>Services</strong></h2>
						<hr class="tall">
					</div>
						<div class="row">
							<div class="col-md-3 col-sm-6">
								<div class="featured-box featured-box-primary featured-box-effect-1">
									<div class="box-content">
										<i class="icon-featured fa fa-ship"></i>
										<h4 class="text-uppercase">SHIPPING</h4>
										<p>Shipping agency for vessel’s procedures of entry/ exit the port and cargo’s handling permission at port, vessel maintenance and crew management.</p>
										<p><a href="/" class="lnk-primary learn-more">Read More <i class="fa fa-angle-right"></i></a></p>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="featured-box featured-box-secondary featured-box-effect-1">
									<div class="box-content">
										<i class="icon-featured fa fa-file-text"></i>
										<h4 class="text-uppercase">CUSTOM CLEARANCE</h4>
										<p>Custom declaration/ clearance/ import permit application in the most mainly port of Indonesia. The advantage areas including North Sumatra /North and Southeast Sulawesi/ Maluku islands/ West Papua/ East Kalimantan.</p>
										<p><a href="/" class="lnk-secondary learn-more">Read more <i class="fa fa-angle-right"></i></a></p>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="featured-box featured-box-tertiary featured-box-effect-1">
									<div class="box-content">
										<i class="icon-featured fa fa-gift"></i>
										<h4 class="text-uppercase">LOGISTIC</h4>
										<p>Port to door service for project cargo (especially equipment, steel structure and engineering vehicle etc.) transport between Indonesia islands by barge/LCT/trailers.</p>
										<p><a href="/" class="lnk-tertiary learn-more">Read more <i class="fa fa-angle-right"></i></a></p>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="featured-box featured-box-quaternary featured-box-effect-1">
									<div class="box-content">
										<i class="icon-featured fa fa-users"></i>
										<h4 class="text-uppercase">STEVEDORING</h4>
										<p>Qualified harbor and material for loading and unloading between vessel/barge/trailer, even directly by special vehicles, and the work for inland haulage</p>
										<p><a href="/" class="lnk-quaternary learn-more">Read more <i class="fa fa-angle-right"></i></a></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				
				</div>
				
				<section class="section section-default section-with-mockup mb-none">
					<div class="container">
					<div class="row center">
						<h2>Our <strong>Services</strong></h2>
						<hr class="tall">
					</div>
						<div class="row">
							<div class="col-md-6">
								<div class="feature-box feature-box-style-2 reverse mb-xl appear-animation" data-appear-animation="fadeInLeft" data-appear-animation-delay="300">
									<div class="feature-box-icon">
										<i class="fa fa-ship"></i>
									</div>
									<div class="feature-box-info">
										<h4 class="mb-sm">SHIPPING</h4>
										<p class="mb-lg">Shipping agency for vessel’s procedures of entry/ exit the port and cargo’s handling permission at port, vessel maintenance and crew management.</p>
									</div>
								</div>
								<div class="feature-box feature-box-style-2 reverse mt-xl appear-animation" data-appear-animation="fadeInLeft" data-appear-animation-delay="600">
									<div class="feature-box-icon">
										<i class="fa fa-ship"></i>
									</div>
									<div class="feature-box-info">
										<h4 class="mb-sm">CUSTOM CLEARANCE</h4>
										<p class="mb-lg">Custom declaration/ clearance/ import permit application in the most mainly port of Indonesia. The advantage areas including North Sumatra /North and Southeast Sulawesi/ Maluku islands/ West Papua/ East Kalimantan.</p>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="feature-box feature-box-style-2 mb-xl appear-animation" data-appear-animation="fadeInRight" data-appear-animation-delay="300">
									<div class="feature-box-icon">
										<i class="fa fa-ship"></i>
									</div>
									<div class="feature-box-info">
										<h4 class="mb-sm">LOGISTIC</h4>
										<p class="mb-lg">Port to door service for project cargo (especially equipment, steel structure and engineering vehicle etc).</p>
									</div>
								</div>
								<div class="feature-box feature-box-style-2 mt-xl appear-animation" data-appear-animation="fadeInRight" data-appear-animation-delay="600">
									<div class="feature-box-icon">
										<i class="fa fa-ship"></i>
									</div>
									<div class="feature-box-info">
										<h4 class="mb-sm">STEVEDORING</h4>
										<p class="mb-lg">Qualified harbor and material for loading and unloading between vessel/barge/trailer, even directly by special vehicles, and the work for inland haulage</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				
				<section class="section section-custom-map">
					<section class="section section-default section-footer">
						<div class="container">
							<div class="row">
								<div class="col-md-6">
									<div class="recent-posts mb-xl">
										<h2>Latest <strong>Blog</strong> Posts</h2>
										<div class="row">
											<div class="owl-carousel owl-theme mb-none" data-plugin-options="{'items': 1}">
												<div>
													<div class="col-md-6">
														<article>
															<div class="date">
																<span class="day">15</span>
																<span class="month">Jan</span>
															</div>
															<h4 class="heading-primary"><a href="blog-post.html">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h4>
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat libero. <a href="/" class="read-more">read more <i class="fa fa-angle-right"></i></a></p>
														</article>
													</div>
													<div class="col-md-6">
														<article>
															<div class="date">
																<span class="day">15</span>
																<span class="month">Jan</span>
															</div>
															<h4 class="heading-primary"><a href="blog-post.html">Lorem ipsum dolor</a></h4>
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat. <a href="/" class="read-more">read more <i class="fa fa-angle-right"></i></a></p>
														</article>
													</div>
												</div>
												<div>
													<div class="col-md-6">
														<article>
															<div class="date">
																<span class="day">12</span>
																<span class="month">Jan</span>
															</div>
															<h4 class="heading-primary"><a href="blog-post.html">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h4>
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat libero. <a href="/" class="read-more">read more <i class="fa fa-angle-right"></i></a></p>
														</article>
													</div>
													<div class="col-md-6">
														<article>
															<div class="date">
																<span class="day">11</span>
																<span class="month">Jan</span>
															</div>
															<h4 class="heading-primary"><a href="blog-post.html">Lorem ipsum dolor</a></h4>
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <a href="/" class="read-more">read more <i class="fa fa-angle-right"></i></a></p>
														</article>
													</div>
												</div>
												<div>
													<div class="col-md-6">
														<article>
															<div class="date">
																<span class="day">15</span>
																<span class="month">Jan</span>
															</div>
															<h4 class="heading-primary"><a href="blog-post.html">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></h4>
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat libero. <a href="/" class="read-more">read more <i class="fa fa-angle-right"></i></a></p>
														</article>
													</div>
													<div class="col-md-6">
														<article>
															<div class="date">
																<span class="day">15</span>
																<span class="month">Jan</span>
															</div>
															<h4 class="heading-primary"><a href="blog-post.html">Lorem ipsum dolor</a></h4>
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat. <a href="/" class="read-more">read more <i class="fa fa-angle-right"></i></a></p>
														</article>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<h2><strong>What</strong> Client’s Say</h2>
									<div class="row">
										<div class="owl-carousel owl-theme mb-none" data-plugin-options="{'items': 1}">
											<div>
												<div class="col-md-12">
													<div class="testimonial testimonial-primary">
														<blockquote>
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat.  Donec hendrerit vehicula est, in consequat.  Donec hendrerit vehicula est, in consequat.</p>
														</blockquote>
														<div class="testimonial-arrow-down"></div>
														<div class="testimonial-author">
															<div class="testimonial-author-thumbnail img-thumbnail">
																<img src="img/clients/client-1.jpg" alt="">
															</div>
															<p><strong>John Smith</strong><span>CEO & Founder - Okler</span></p>
														</div>
													</div>
												</div>
											</div>
											<div>
												<div class="col-md-12">
													<div class="testimonial testimonial-primary">
														<blockquote>
															<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat.</p>
														</blockquote>
														<div class="testimonial-arrow-down"></div>
														<div class="testimonial-author">
															<div class="testimonial-author-thumbnail img-thumbnail">
																<img src="img/clients/client-1.jpg" alt="">
															</div>
															<p><strong>John Smith</strong><span>CEO & Founder - Okler</span></p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
				</section>

				
				<div class="container">
				<section class="section section-default section-with-mockup mb-none">
						<div class="col-md-12">
							<div class="owl-carousel owl-theme" data-plugin-options="{'items': 4, 'margin': 20, 'loop': false}">
							
								<?php foreach ($client as $clients) { ?>
								<div class="portfolio-item">
									<a href="#popupProject" data-portfolio-on-modal>
										<span class="thumb-info thumb-info-lighten">
											<span class="thumb-info-wrapper">
												<img alt="" class="img-responsive img-client" src="<?= base_url('assets/upload/image/'.$clients->gambar)?> ">
											</span>
										</span>
									</a>
								</div>
								<?php } ?>

							</div>
						</div>
				</section>
				</div>
			</div>