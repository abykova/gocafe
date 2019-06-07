  <?php 
  use yii\bootstrap\Modal;
use yii\widgets\ActiveForm;
use yii\helpers\Html;
  ?>
  <body>

	<div id="colorlib-page">
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
		<aside id="colorlib-aside" role="complementary" class="js-fullheight text-center">
			<h1 id="colorlib-logo"><a href="index.html"><span class="flaticon-camera"></span>Go Cafe</a></h1>
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
	            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span class="mr-2"></span> <span>Кабинет</span></p>
	            <h1 class="mb-3 bread">Название заведения</h1>
	            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
	          </div>
	        </div>
				</div>
			</section>
			<section class="ftco-section">
	    	<div class="container">
	    		<div class="row">
	    			<div class="col-lg-8 ftco-animate">
	            <div class="mb-8 font-weight-bold ">
	            	 
					
	            	<table class="table">
	            		<thead>
		            		<tr>
		            			<th class=" ">Имя</th>
		            			<th class=" ">Телефон</th>
		            			<th class=" ">Текст</th>
		            			
		            		</tr>
	            		</thead>
	            		<tbody>
	            			<?php foreach ($cats as $cat ):?>
	            		<tr>
	            			<td><?php echo $cat->name ?></td>
	            			<td><?php echo $cat->tell ?></td>
	            			<td><?php echo $cat->text ?></td>
	            		</tr>
	            		<?php endforeach;  ?>
	            		</tbody>
	            	</table>
	            	
	            </div>
	            

	          </div> <!-- .col-md-8 -->
	    			<div class="col-lg-4 sidebar ftco-animate bg-light">
	            <div class="sidebar-box">
	              <form action="#" class="search-form">
	                <div class="form-group">
	                  <span class="icon icon-search"></span>
	                  <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
	                </div>
	              </form>
	            </div>
	            <div class="sidebar-box ftco-animate">
	            	<h3 class="sidebar-heading">Возможности</h3>
	              <ul class="categories">
	                <li><a href="#">Создать карту заведения </a></li>
	                <li><a href="#">Бронь </a></li>
	                <li><a href="#">Редактировать контакты </a></li>
	                <li><a href="#">Редактировать время работы </a></li>
	                <li><a href="#">Редактировать меню </a></li>
	                <li><a href="#">Редактировать информацию </a></li>
	              </ul>
	            </div>

							<div class="sidebar-box subs-wrap img" style="background-image: url(app/images/bg_1.jpg);">
								<div class="overlay"></div>
								<h3 class="mb-4 sidebar-heading">Newsletter</h3>
								<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia</p>
	              <form action="#" class="subscribe-form">
	                <div class="form-group">
	                  <input type="text" class="form-control" placeholder="Email Address">
	                  <input type="submit" value="Subscribe" class="mt-2 btn btn-white submit">
	                </div>
	              </form>
	            </div>

	            <div class="sidebar-box ftco-animate">
	              <h3 class="sidebar-heading">Paragraph</h3>
	              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut.</p>
	            </div>
	          </div><!-- END COL -->
	    		</div>
	    	</div>
	    </section>
		</div>
	</div>



    
  </body>
</html>