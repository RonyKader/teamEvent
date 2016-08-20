
	<!--  footer start   -->
	<footer id="footer">
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="row">
							<div class="f-widget">
								<a href="index.html" class="footer-logo"><img src="<?php echo base_url();?>assets/images/footer-logo.png" alt="Logo"></a>
								<div class="excerpt">
									Professionally engineer competitive paradigms rather ethical strategic theme areas. Completely cultivate technically sound initiatives via  sound niche markets. Holisticly matrix opportunities without resource sucking best practices. 
								</div>
								<ul class="social-media">
										<li><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
										<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
										<li><a href="#"><i class="fa fa-camera"></i></a></li>
									</ul>
							</div><!-- /.f-widget -->
						</div><!-- /.row -->
					</div><!-- /.col-md-4 -->

					<div class="col-md-4">
							<div class="f-widget">
								<h3 class="widget-title">Popular Post</h3>
								<ul class="small-post-list">
									<li class="small-post-item">
										<a href="#" class="post-thumb">
											<img src="<?php echo base_url();?>assets/images/homepage1/footer/thumb/01.jpg" alt="thumb">
										</a>
										<span class="content">
											<a href="blog-single.html" class="title">Monotonectally develop seamless e-business.</a>
											<span class="meta-post">
												<span class="date"><i class="fa fa-calendar"></i>Jan 03, 2016</span>
												<a href="#" class="comment"><i class="fa fa-comment"></i>09 Comment</a>
											</span>
										</span>
									</li>

									<li class="small-post-item">
										<a href="#" class="post-thumb">
											<img src="<?php echo base_url();?>assets/images/homepage1/footer/thumb/02.jpg" alt="thumb">
										</a>
										<span class="content">
											<a href="blog-single.html" class="title">Monotonectally develop seamless e-business.</a>
											<span class="meta-post">
												<span class="date"><i class="fa fa-calendar"></i>Jan 03, 2016</span>
												<a href="#" class="comment"><i class="fa fa-comment"></i>09 Comment</a>
											</span>
										</span>
									</li>

									<li class="small-post-item">
										<a href="#" class="post-thumb">
											<img src="<?php echo base_url();?>assets/images/homepage1/footer/thumb/03.jpg" alt="thumb">
										</a>
										<span class="content">
											<a href="blog-single.html" class="title">Monotonectally develop seamless e-business.</a>
											<span class="meta-post">
												<span class="date"><i class="fa fa-calendar"></i>Jan 03, 2016</span>
												<a href="#" class="comment"><i class="fa fa-comment"></i>09 Comment</a>
											</span>
										</span>
									</li>
								</ul>
							</div><!-- /.f-widget -->
					</div><!-- /.col-md-4 -->

					<div class="col-md-4">
						<div class="row">
							<div class="f-widget">
								<h3 class="widget-title">Tags</h3>
								<ul class="tag">
									<li><a href="#">Design</a></li>
									<li><a href="#">HTML5</a></li>
									<li><a href="#">CSS3</a></li>
									<li><a href="#">Web Design</a></li>
									<li><a href="#">WordPress</a></li>
									<li><a href="#">Photoshop</a></li>
									<li><a href="#">Illustrator</a></li>
									<li><a href="#">UI/UX</a></li>
									<li><a href="#">Photography</a></li>
									<li><a href="#">CSS3</a></li>
									<li><a href="#">HTML5</a></li>
									<li><a href="#">Design</a></li>
									<li><a href="#">Photography</a></li>
								</ul>
							</div><!-- /.f-widget -->
						</div><!-- /.row -->
					</div><!-- /.col-md-4 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</div><!-- /.footer-top -->
		<div class="footer-bottom">
			<p>Copyright &copy; 2016. Design and Development by <a href="www.chefonline.co.uk">ChefOnline</a></p>
		</div>
	</footer>
	<!--  footer end   -->
	<script type='text/javascript' src="<?php echo base_url();?>/assets/js/jquery-1.10.2.min.js"></script>
    <script type='text/javascript' src='<?php echo base_url();?>/assets/js/bootstrap.min.js'></script>
    <script type="text/javascript" src="<?php echo base_url();?>/assets/js/bootstrap-datepicker.js"></script>
	<script type='text/javascript' src='<?php echo base_url();?>/assets/js/plugins.js'></script>
	<script type='text/javascript' src='<?php echo base_url();?>/assets/js/countdown.js'></script>
	<script type="text/javascript" src="http://www.maps.google.com/maps/api/js?sensor=true"></script>
	<script type='text/javascript' src='<?php echo base_url();?>/assets/js/gmaps.js'></script>
	<script type='text/javascript' src='<?php echo base_url();?>/assets/js/modernizr.js'></script>
	<script type='text/javascript' src='<?php echo base_url();?>/assets/js/functions.js'></script>
	<script type='text/javascript' src='<?php echo base_url();?>/assets/js/custom.js'></script>

	<script type='text/javascript'>
    
         map = new GMaps({
                el: '#map',
                zoom: 3,
                lat: 46.4731014,
                lng: -26.735611,
                zoomControl : true,
                scrollwheel: false,
                zoomControlOpt: {
                    style : 'SMALL',
                    position: 'TOP_LEFT'
                },
                panControl : false,
                streetViewControl : false,
                mapTypeControl: false,
                overviewMapControl: false
              });

         map.addMarker({
                lat: 41.449401,
                lng: 0.658446,
                title: 'WebCode',
                icon: "<?php echo base_url();?>assets/images/mapicon.png"
              });

         countdown_init();
    </script>

   <script type="text/javascript">
	   	jQuery(document).ready(function(){
	       $('#he').datepicker();
	   	});
   </script>

</body>
</html>