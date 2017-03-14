<?php require("php/config.php");?>
<!DOCTYPE html>

<html lang="en-US">
<head>
    <?php require("pages/head.php");?>
</head>

<body class="page-sub-page page-about-us">
<!-- Wrapper -->
<div class="wrapper">
<!-- Header -->
	<?php //require("pages/header/about-us-header.php");
		if(!isset($_SESSION["username"]))
			require("pages/header/about-us-header-without-login.php");
		else
			require("pages/header/about-us-header.php");
	?>
<!-- end Header -->

<!-- Breadcrumb -->
<div class="container">
    <ol class="breadcrumb">
        <li><a href="index.php">Home</a></li>
        <li class="active">About Us</li>
    </ol>
</div>
<!-- end Breadcrumb -->

<!-- Page Content -->
<div id="page-content">
    <div class="container">
        <div class="row">
            <!--MAIN Content-->
            <div class="col-md-8">
                <div id="page-main">
                    <section id="about">
                        <header><h1>About Us</h1></header>
                        <img src="assets/img/about-us-head-img.jpg">
                        <h2>Mission & Purpose</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse et urna fringilla,
                            volutpat elit non, tristique Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer leo lorem,
                            vehicula eget ligula et, malesuada pharetra est. Etiam diam metus, luctus eu commodo quis, condimentum
                            eu mauris. Suspendisse potenti. Curabitur et mauris laoreet lorem pellentesque volutpat. Sed bibendum,
                            tortor in ornare sodales, sem augue suscipit tortor, auctor placerat nisi justo vel mauris. In convallis
                            nunc nunc, in tincidunt leo volutpat et. Donec in consequat lorem.
                        </p>
                        <h2>Bold History that Fuels the Future</h2>
                        <p>
                            Aenean volutpat aliquet diam, id venenatis nisi faucibus sit amet. In hac habitasse platea dictumst.
                            Integer vel sem est. Nulla pharetra, justo vitae placerat dapibus, dui massa pellentesque magna, a
                            sagittis magna lorem a massa. Integer convallis augue eu felis euismod, vel iaculis velit pretium.
                            Nam et diam ut sem aliquet ultrices non eu ante.lectus. Nam blandit odio nisl, ac malesuada lacus
                            fermentum sit amet. Vestibulum vitae aliquet felis, ornare feugiat elit. Nulla varius condimentum
                            elit, sed pulvinar leo sollicitudin vel.
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse et urna fringilla,
                            volutpat elit non, tristique Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer leo lorem,
                            vehicula eget ligula et, malesuada pharetra est. Etiam diam metus, luctus eu commodo quis, condimentum
                            eu mauris. Suspendisse potenti.
                        </p>
                        <h2>Gallery</h2>
                        <div>
                            <ul class="gallery-list">
                                <li><a href="assets/img/gallery-big-image.jpg" class="image-popup"><img src="assets/img/image-01.jpg" alt=""></a></li>
                                <li><a href="assets/img/gallery-big-image.jpg" class="image-popup"><img src="assets/img/image-02.jpg" alt=""></a></li>
                                <li><a href="assets/img/gallery-big-image.jpg" class="image-popup"><img src="assets/img/image-03.jpg" alt=""></a></li>
                                <li><a href="assets/img/gallery-big-image.jpg" class="image-popup"><img src="assets/img/image-04.jpg" alt=""></a></li>
                                <li><a href="assets/img/gallery-big-image.jpg" class="image-popup"><img src="assets/img/image-05.jpg" alt=""></a></li>
                                <li><a href="assets/img/gallery-big-image.jpg" class="image-popup"><img src="assets/img/image-06.jpg" alt=""></a></li>
                                <li><a href="assets/img/gallery-big-image.jpg" class="image-popup"><img src="assets/img/image-07.jpg" alt=""></a></li>
                                <li><a href="assets/img/gallery-big-image.jpg" class="image-popup"><img src="assets/img/image-08.jpg" alt=""></a></li>
                                <li><a href="assets/img/gallery-big-image.jpg" class="image-popup"><img src="assets/img/image-09.jpg" alt=""></a></li>
                                <li><a href="assets/img/gallery-big-image.jpg" class="image-popup"><img src="assets/img/image-10.jpg" alt=""></a></li>
                                <li><a href="assets/img/gallery-big-image.jpg" class="image-popup"><img src="assets/img/image-11.jpg" alt=""></a></li>
                                <li><a href="assets/img/gallery-big-image.jpg" class="image-popup"><img src="assets/img/image-12.jpg" alt=""></a></li>
                                <li><a href="assets/img/gallery-big-image.jpg" class="image-popup"><img src="assets/img/image-13.jpg" alt=""></a></li>
                                <li><a href="assets/img/gallery-big-image.jpg" class="image-popup"><img src="assets/img/image-14.jpg" alt=""></a></li>
                            </ul>
                            <a href="" class="read-more">Go to Gallery</a>
                        </div>
                        <h2>Research</h2>
                        <p>
                            Sed bibendum, tortor in ornare sodales, sem augue suscipit tortor, auctor placerat nisi justo vel mauris.
                            In convallis nunc nunc, in tincidunt leo volutpat et. Donec in consequat lorem.
                        </p>
                        <ul class="element-framed">
                            <li>Aenean volutpat aliquet diam, id venenatis nisi faucibus sit amet. In hac habitasse platea dictumst</li>
                            <li>Integer vel sem est. Nulla pharetra, justo vitae placerat dapibus, dui massa pellentesque magn</li>
                            <li>Sagittis magna lorem a massa. Integer convallis augue eu felis euismod, vel iaculis velit pretium</li>
                            <li>Nam et diam ut sem aliquet ultrices non eu ante</li>
                        </ul>
                    </section>
                </div><!-- /#page-main -->
            </div><!-- /.col-md-8 -->

            <!--SIDEBAR Content-->
            <div class="col-md-4">
                <div id="page-sidebar" class="sidebar">
                    <aside class="news-small" id="news-small">
                        <header>
                            <h2>Related News</h2>
                        </header>
							<?php require("pages/news.php");?>
                        <a href="" class="read-more">All News</a>
                    </aside><!-- /.news-small -->
                    <aside id="newsletter">
                        <header>
                            <h2>Newsletter</h2>
                            <div class="section-content">
                                <div class="newsletter">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Your e-mail">
                                    <span class="input-group-btn">
                                        <button type="submit" class="btn"><i class="fa fa-angle-right"></i></button>
                                    </span>
                                    </div><!-- /input-group -->
                                </div><!-- /.newsletter -->
                                <p class="opacity-50">Ut tincidunt, quam in tincidunt vestibulum, turpis ipsum porttitor nisi, et fermentum augue
                                    lit eu neque. In at tempor dolor, sit amet dictum lacus. Praesent porta orci eget laoreet ultrices.
                                </p>
                            </div><!-- /.section-content -->
                        </header>
                    </aside><!-- /.newsletter -->
                    <aside id="our-professors">
                        <header>
                            <h2>Our Professors</h2>
                        </header>
                        <div class="section-content">
                            <div class="professors">
                                <article class="professor-thumbnail">
                                    <figure class="professor-image"><a href="member-detail.html"><img src="assets/img/professor.jpg" alt=""></a></figure>
                                    <aside>
                                        <header>
                                            <a href="member-detail.html">Prof. Mathew Davis</a>
                                            <div class="divider"></div>
                                            <figure class="professor-description">Applied Science and Engineering</figure>
                                        </header>
                                        <a href="member-detail.html" class="show-profile">Show Profile</a>
                                    </aside>
                                </article><!-- /.professor-thumbnail -->
                                <article class="professor-thumbnail">
                                    <figure class="professor-image"><a href="member-detail.html"><img src="assets/img/professor-02.jpg" alt=""></a></figure>
                                    <aside>
                                        <header>
                                            <a href="member-detail.html">Prof. Jane Stairway</a>
                                            <div class="divider"></div>
                                            <figure class="professor-description">Applied Science and Engineering</figure>
                                        </header>
                                        <a href="member-detail.html" class="show-profile">Show Profile</a>
                                    </aside>
                                </article><!-- /.professor-thumbnail -->
                                <a href="" class="read-more">All Professors</a>
                            </div><!-- /.professors -->
                        </div><!-- /.section-content -->
                    </aside><!-- /.our-professors -->
                </div><!-- /#sidebar -->
            </div><!-- /.col-md-4 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div>
<!-- end Page Content -->

<!-- Footer -->
	<?php require("pages/footer.php");?>
<!-- end Footer -->

</div>
<!-- end Wrapper -->
<?php require("pages/script.php");?>
</body>
</html>
<?php $connection->close(); 
		$connection_events->close();
?>