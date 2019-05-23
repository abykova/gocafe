<?php
use yii\bootstrap\Modal;

?>

<body>
<div id="colorlib-page">
    <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
    <aside id="colorlib-aside" role="complementary" class="js-fullheight text-center">
        <h1 id="colorlib-logo"><a href="index.html"><span class="flaticon-camera"></span>Go Cafe</a></h1>
        <nav id="colorlib-main-menu" role="navigation">
            <ul>
                <li class="colorlib-active"><a href="index.html">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><input placeholder="заведение">filter</input></li>
                <li><input placeholder="время работы">filter</input></li>
                <li><input placeholder="кухня">filter</input></li>
            </ul>
            <ul class="tagcloud">
                <a href="#" class="tag-cloud-link">кухня</a>
                <a href="#" class="tag-cloud-link">время</a>
                <a href="#" class="tag-cloud-link">праздник</a>
                <a href="#" class="tag-cloud-link">акции</a>
                <a href="#" class="tag-cloud-link">суши</a>
                <a href="#" class="tag-cloud-link">хуюши</a>
                <a href="#" class="tag-cloud-link">leaves</a>
                <a href="#" class="tag-cloud-link">food</a>
            </ul>
        </nav>

        <div class="colorlib-footer">
            <h3>Follow Us Here!</h3>
            <div class="d-flex justify-content-center">
                <ul class="d-flex align-items-center">
                    <li class="d-flex align-items-center jusitfy-content-center"><a href="#"><i
                                    class="icon-facebook"></i></a></li>
                    <li class="d-flex align-items-center jusitfy-content-center"><a href="#"><i
                                    class="icon-twitter"></i></a></li>
                    <li class="d-flex align-items-center jusitfy-content-center"><a href="#"><i
                                    class="ifigurefigurefigurcon-instagram"></i></a></li>
                    <li class="d-flex align-items-center jusitfy-content-center"><a href="#"><i
                                    class="icon-linkedin"></i></a></li>
                </ul>
            </div>
        </div>
    </aside>
    <div id="colorlib-main">
        <section class="ftco-section-2">
            <div class="photograhy">
                <div class="row no-gutters">



                    <div class="col-md-4 ftco-animate">

						<?php

						Modal::begin([
							'header' => '<h2>Hello world</h2>',
							'toggleButton' => ['label' => 'click me'],
// 'footer' => 'Низ окна',
						]);

						echo 'Say hello...';

						Modal::end();
						?>

                        <a href="images/image_1.jpg"
                           class="photography-entry img image-popup d-flex justify-content-center align-items-center"
                           style="background-image: url(images/image_1.jpg);">
                            <div class="overlay"></div>
                            <div class="text text-center">
                                <h3>Work 01</h3>
                                <span class="tag">Model</span>
                            </div>
                        </a>
                    </div>



                    <div class="col-md-4 ftco-animate">
                        <a href="images/image_2.jpg"
                           class="photography-entry img image-popup d-flex justify-content-center align-items-center"
                           style="background-image: url(images/image_2.jpg);">
                            <div class="overlay"></div>
                            <div class="text text-center">
                                <h3>Work 02</h3>
                                <span class="tag">Nature</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 ftco-animate">
                        <a href="images/image_3.jpg"
                           class="photography-entry img image-popup d-flex justify-content-center align-items-center"
                           style="background-image: url(images/image_3.jpg);">
                            <div class="overlay"></div>
                            <div class="text text-center">
                                <h3>Work 03</h3>
                                <span class="tag">Fashion</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 ftco-animate">
                        <a href="images/image_4.jpg"
                           class="photography-entry img image-popup d-flex justify-content-center align-items-center"
                           style="background-image: url(images/image_4.jpg);">
                            <div class="overlay"></div>
                            <div class="text text-center">
                                <h3>Work 04</h3>
                                <span class="tag">Travel</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 ftco-animate">
                        <a href="images/image_5.jpg"
                           class="photography-entry img image-popup d-flex justify-content-center align-items-center"
                           style="background-image: url(images/image_5.jpg);">
                            <div class="overlay"></div>
                            <div class="text text-center">
                                <h3>Work 05</h3>
                                <span class="tag">Travel</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 ftco-animate">
                        <a href="images/image_6.jpg"
                           class="photography-entry img image-popup d-flex justify-content-center align-items-center"
                           style="background-image: url(images/image_6.jpg);">
                            <div class="overlay"></div>
                            <div class="text text-center">
                                <h3>Work 06</h3>
                                <span class="tag">Travel</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 ftco-animate">
                        <a href="images/image_7.jpg"
                           class="photography-entry img image-popup d-flex justify-content-center align-items-center"
                           style="background-image: url(images/image_7.jpg);">
                            <div class="overlay"></div>
                            <div class="text text-center">
                                <h3>Work 07</h3>
                                <span class="tag">Fashion, Model</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 ftco-animate">
                        <a href="images/image_8.jpg"
                           class="photography-entry img image-popup d-flex justify-content-center align-items-center"
                           style="background-image: url(images/image_8.jpg);">
                            <div class="overlay"></div>
                            <div class="text text-center">
                                <h3>Work 08</h3>
                                <span class="tag">Nature</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 ftco-animate">
                        <a href="images/image_9.jpg"
                           class="photography-entry img image-popup d-flex justify-content-center align-items-center"
                           style="background-image: url(images/image_9.jpg);">
                            <div class="overlay"></div>
                            <div class="text text-center">
                                <h3>Work 09</h3>
                                <span class="tag">Technology</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 ftco-animate">
                        <a href="images/image_10.jpg"
                           class="photography-entry img image-popup d-flex justify-content-center align-items-center"
                           style="background-image: url(images/image_10.jpg);">
                            <div class="overlay"></div>
                            <div class="text text-center">
                                <h3>Work 10</h3>
                                <span class="tag">Model</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 ftco-animate">
                        <a href="images/image_11.jpg"
                           class="photography-entry img image-popup d-flex justify-content-center align-items-center"
                           style="background-image: url(images/image_11.jpg);">
                            <div class="overlay"></div>
                            <div class="text text-center">
                                <h3>Work 11</h3>
                                <span class="tag">Fashion</span>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 ftco-animate">
                        <a href="images/image_12.jpg"
                           class="photography-entry img image-popup d-flex justify-content-center align-items-center"
                           style="background-image: url(images/image_12.jpg);">
                            <div class="overlay"></div>
                            <div class="text text-center">
                                <h3>Work 12</h3>
                                <span class="tag">Photography</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>

    </div>
</div>

<div id="ftco-loader" class="show fullscreen">
    <svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00"/>
    </svg>
</div>

<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/jquery.timepicker.min.js"></script>
<script src="js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="js/google-map.js"></script>
<script src="js/main.js"></script>

</body>
