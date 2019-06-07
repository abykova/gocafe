 <?php 
use yii\helpers\Html;
use yii\bootstrap\Modal;
use yii\widgets\ActiveForm;
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
	            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>About</span></p>
	            <h1 class="mb-3 bread">About Us</h1>
	            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
				

                    

	          </div>
	        </div>
				</div>
			</section>
			<section class="ftco-section-no-padding bg-light">
				<div class="hero-wrap">
					<div class="overlay"></div>
					<div class="d-flex">
						<div class="author-image text img p-md-5 ftco-animate" style="background-image: url(app/images/author.jpg);">
							
						</div>
						<div class="author-info text p-4 mt-5 mb-5 ftco-animate">
							<div class="desc">

								<h1 class="mb-4">Почему онлайн-бронирование выгодно для вас?</h1>
								<p class="mb-4">Вы получаете гостей из числа посетителей нашего сайта.</p>
								<ul class="mb-4">
									<li>Вы получаете гостей из числа посетителей нашего сайта.</li>
									<li>Мы примем заявку на бронь столика, согласуем время брони с вами — и принимайте гостя!</li>
								</ul>
								<ul class="ftco-social mt-3">
		              <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
		              <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
		              <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
		            </ul>
	            </div>
						</div>
					</div>
				</div>
			</section>
			<section class="ftco-section">

	    </section>



  </body>
</html>