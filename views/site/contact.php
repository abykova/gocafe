<?php 

use yii\helpers\Html;
 ?>
<body>

	<div id="colorlib-page">
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
		<aside id="colorlib-aside" role="complementary" class="js-fullheight text-center">
			<h1 id="colorlib-logo"><?= Html::a('<span class="flaticon-camera"></span>Go Cafe',['site/index']) ?></h1>
			<nav id="colorlib-main-menu" role="navigation">
				<ul>
					<li><?= Html::a('Home',['site/index']) ?></li>
					<li><?= Html::a('About',['site/about']) ?></li>
					<li class="colorlib-active"><?= Html::a('Contact',['site/contact']) ?></li>
				</ul>
			</nav>

			<div class="colorlib-footer">
				<h3>Follow Us Here!</h3>
				<div class="d-flex justify-content-center">
					<ul class="d-flex align-items-center">
						<li class="d-flex align-items-center jusitfy-content-center"><a href="#"><i class="icon-facebook"></i></a></li>
						<li class="d-flex align-items-center jusitfy-content-center"><a href="#"><i class="icon-twitter"></i></a></li>
						<li class="d-flex align-items-center jusitfy-content-center"><a href="#"><i class="icon-instagram"></i></a></li>
						<li class="d-flex align-items-center jusitfy-content-center"><a href="#"><i class="icon-linkedin"></i></a></li>
					</ul>
				</div>
			</div>
		</aside> <!-- END COLORLIB-ASIDE -->
		<div id="colorlib-main">
			<section class="ftco-section bg-light ftco-bread">
				<div class="container">
					<div class="row no-gutters slider-text align-items-center">
	          <div class="col-md-9 ftco-animate">
	            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Contact Us</span></p>
	            <h1 class="mb-3 bread">Contact Us</h1>
	            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
	          </div>
	        </div>
				</div>
			</section>
			<section class="ftco-section contact-section">
	      <div class="container">
	        <div class="row d-flex mb-5 contact-info">
	          <div class="col-md-12 mb-4">
	            <h2 class="h3">Contact Information</h2>
	          </div>
	          <div class="w-100"></div>
	          <div class="col-md-3 d-flex">
	          	<div class="info bg-light p-4">
		            <p><span>Address:</span> 198 West 21th Street, Suite 721 New York NY 10016</p>
		          </div>
	          </div>
	          <div class="col-md-3 d-flex">
	          	<div class="info bg-light p-4">
		            <p><span>Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
		          </div>
	          </div>
	          <div class="col-md-3 d-flex">
	          	<div class="info bg-light p-4">
		            <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@yoursite.com</a></p>
		          </div>
	          </div>
	          <div class="col-md-3 d-flex">
	          	<div class="info bg-light p-4">
		            <p><span>Website</span> <a href="#">yoursite.com</a></p>
		          </div>
	          </div>
	        </div>
	        <div class="row block-9">
	          <div class="col-md-6 order-md-last d-flex">
	            <form action="#" class="bg-light p-5 contact-form">
	              <div class="form-group">
	                <input type="text" class="form-control" placeholder="Your Name">
	              </div>
	              <div class="form-group">
	                <input type="text" class="form-control" placeholder="Your Email">
	              </div>
	              <div class="form-group">
	                <input type="text" class="form-control" placeholder="Subject">
	              </div>
	              <div class="form-group">
	                <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
	              </div>
	              <div class="form-group">
	                <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
	              </div>
	            </form>
	          
	          </div>

	          <div class="col-md-6 d-flex">
	          	<div id="map" class="bg-light"></div>
	          </div>
	        </div>
	      </div>
	    </section>




    
  </body>
</html>