<?php
session_start();
    if(!isset($_SESSION["username"]))
    {
		$_SESSION["Message"]="Login is Required...";
			header("Location: register-sign-in.php");
    }
?>
<!DOCTYPE html>
<?php 
if(!isset($_POST["submit"]))
{
	header("Location: events.php");
}
	require("php/config.php");?>
<html lang="en-US">
<head>
    <?php require("pages/head.php");?>
</head>

<body class="page-sub-page page-event-detail">
<!-- Wrapper -->
<div class="wrapper">
<!-- Header -->
	 <?php require("pages/header/events-header.php");?>
<!-- end Header -->

<!-- Breadcrumb -->
<div class="container">
    <ol class="breadcrumb">
        <li><a href="index.php">Home</a></li>
        <li><a href="events.php">Events</a></li>
        <li class="active">Event Detail</li>
    </ol>
</div>
<!-- end Breadcrumb -->
<?php 
	$id=$_POST["submit"];
		$sql="SELECT * FROM `events` WHERE `id`=".$id;
		$result=$connection->query($sql);
		$row = $result->fetch_assoc();
?>
<!-- Page Content -->
<div id="page-content">
    <div class="container">
        <header><h1><?php echo $row["title"];?></h1></header>
        <div class="row">
            <!-- Course Image -->
            <div class="col-md-2 col-sm-3">
                <figure class="event-image">
                    <div class="image-wrapper"><img src="<?php echo $row["image_path"];?>"></div>
                </figure>
            </div><!-- end Course Image -->
            <!--MAIN Content-->
            <div class="col-md-6 col-sm-9">
                <div id="page-main">
                    <section id="event-detail">
                        <article class="event-detail">
                            <section id="event-header">
                                <header>
                                    <h2 class="event-date">
									<?php
											$dateFormat = 'Y-m-d';
											$stringDate = $row["date"];
											$date = DateTime::createFromFormat($dateFormat, $stringDate);
											$day = intval($date->format('d')); // returns an integer
											$year = intval($date->format('Y')); // returns an integer
											$month= $date->format('m');
											echo date("F", mktime(null, null, null, $month, 1))."&nbsp;&nbsp;".$day.",&nbsp;".$year;
									?>
									</h2>
                                </header>
                                <hr>
                                <div class="course-count-down" id="course-count-down">
                                    <figure class="course-start">Event starts  in:</figure>
                                    <!-- /.course-start -->

                                    <div class="count-down-wrapper">
                                        <script type="text/javascript">var _date = '<?php echo $stringDate;?>';</script>
                                    </div><!-- /.count-down-wrapper -->

                                </div><!-- /.course-count-down -->
                                <hr>
                                <figure>
                                    <span class="course-summary" id="course-length"><i class="fa fa-calendar-o"></i><?php echo $row["length"];?> weeks</span>
                                    <span class="course-summary" id="course-time-amount"><i class="fa fa-folder-o"></i><?php echo $row["time_duration"];?></span>
                                    <span class="course-summary" id="course-course-time"><i class="fa fa-clock-o"></i><?php echo $row["time"]."&nbsp;-&nbsp;".$row["to_time"];?></span>
                                </figure>
                            </section><!-- /#course-header -->
							<?php
								$table="event_".$id;
								$sql="select * from $table"; 
								$result=$connection_events->query($sql);
								//$field_cnt = $result->field_count;
							?>
                            <section id="course-info">
                                <header><h2>Event Info</h2></header>
								<?php
									if ($result->num_rows > 0){
										while($row_1 = $result->fetch_assoc())
											{
													echo "<p>".$row_1["content"]."</p>";
									}}
									else
										echo "<h4>Information is comming soon....</h4>";
								?>
								</section><!-- /#course-info -->
                            <section id="course-video">
                                <header><h2>Video Presentation</h2></header>
								<?php $path= $row["video_path"];
									if($path!=""){?>
                                <iframe src="<?php echo $path;?>" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
								<?php }else echo "<h4>No video presntation is available.</h4>" ?>
                            </section><!-- /#course-video -->
							<?php $sql="select * from performers where event_handler=".$id;
								  $result=$connection->query($sql);
							?>
                            <section id="course-speakers">
                                <header><h2>Performers</h2></header>
								<?php while($row=$result->fetch_assoc()){?>
                                <div class="author-block">
                                    <a href="member-detail.html"><figure class="author-picture"><img src="<?php echo $row["image_path"];?>" alt=""></figure></a>
                                    <article class="paragraph-wrapper">
                                        <div class="inner">
                                            <a href="member-detail.html"><header><?php echo $row["name"];?></header></a>
                                            <figure><?php echo $row["category"];?></figure>
                                            <p><?php echo $row["bio"];?></p>
                                        </div>
                                    </article>
                                </div><!-- /.author -->
								<?php } ?>
                              </section><!-- /#course-speakers -->

                            <section id="course-gallery">
                                <header><h2>Gallery</h2></header>
                                <ul class="gallery-list">
                                    <li><a href="assets/img/gallery-big-image.jpg"><img src="assets/img/image-01.jpg" alt=""></a></li>
                                    <li><a href="assets/img/gallery-big-image.jpg"><img src="assets/img/image-02.jpg" alt=""></a></li>
                                    <li><a href="assets/img/gallery-big-image.jpg"><img src="assets/img/image-03.jpg" alt=""></a></li>
                                    <li><a href="assets/img/gallery-big-image.jpg"><img src="assets/img/image-04.jpg" alt=""></a></li>
                                    <li><a href="assets/img/gallery-big-image.jpg"><img src="assets/img/image-05.jpg" alt=""></a></li>
                                    <li><a href="assets/img/gallery-big-image.jpg"><img src="assets/img/image-06.jpg" alt=""></a></li>
                                    <li><a href="assets/img/gallery-big-image.jpg"><img src="assets/img/image-07.jpg" alt=""></a></li>
                                    <li><a href="assets/img/gallery-big-image.jpg"><img src="assets/img/image-08.jpg" alt=""></a></li>
                                    <li><a href="assets/img/gallery-big-image.jpg"><img src="assets/img/image-09.jpg" alt=""></a></li>
                                    <li><a href="assets/img/gallery-big-image.jpg"><img src="assets/img/image-10.jpg" alt=""></a></li>
                                    <li><a href="assets/img/gallery-big-image.jpg"><img src="assets/img/image-11.jpg" alt=""></a></li>
                                    <li><a href="assets/img/gallery-big-image.jpg"><img src="assets/img/image-12.jpg" alt=""></a></li>
                                    <li><a href="assets/img/gallery-big-image.jpg"><img src="assets/img/image-13.jpg" alt=""></a></li>
                                    <li><a href="assets/img/gallery-big-image.jpg"><img src="assets/img/image-14.jpg" alt=""></a></li>
                                </ul>
                            </section><!-- /#course-gallery -->

                            <section id="sponsors">
                                <header><h2>Sponsors</h2></header>
                                <div class="section-content">
                                    <div class="logos">
                                        <div class="logo"><a href="#"><img src="assets/img/logo-partner-01.png" alt=""></a></div>
                                        <div class="logo"><a href="#"><img src="assets/img/logo-partner-02.png" alt=""></a></div>
                                        <div class="logo"><a href="#"><img src="assets/img/logo-partner-03.png" alt=""></a></div>
                                        <div class="logo"><a href="#"><img src="assets/img/logo-partner-04.png" alt=""></a></div>
                                    </div>
                                </div>
                            </section><!-- /#sponsors -->

                            <section id="map">
                                <header><h2>Place on Map</h2></header>
                                <div class="map-wrapper">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2482.389928525137!2d-0.11316612883517647!3d51.52440760342934!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761b48959f07e1%3A0xb6b70e6a76950525!2s5+Phoenix+Pl!5e0!3m2!1ssk!2s!4v1395674632609" width="100%" height="350" frameborder="0" style="border:0"></iframe>
                                </div>
                            </section><!-- /#map -->
                        </article><!-- /.course-detail -->
                    </section><!-- /.course-detail -->
                </div><!-- /#page-main -->
            </div><!-- /.col-md-8 -->

            <!--SIDEBAR Content-->
            <div class="col-md-4">
                <div id="page-sidebar" class="sidebar">
                    <aside class="news-small" id="news-small">
                        <header>
                            <h2>Related News</h2>
                        </header>
							<?php require("pages/news.php"); ?>
                        <a href="#" class="read-more">All News</a>
                    </aside><!-- /.news-small -->
                    <aside id="archive">
                        <header>
                            <h2>Course Archive</h2>
                            <ul class="list-links">
                                <li><a href="#">February 2014</a></li>
                                <li><a href="#">January 2014</a></li>
                                <li><a href="#">November 2013</a></li>
                                <li><a href="#">October 2013</a></li>
                                <li><a href="#">August 2013</a></li>
                                <li><a href="#">July 2013</a></li>
                                <li><a href="#">June 2013</a></li>
                                <li><a href="#">May 2013</a></li>
                            </ul>
                        </header>
                    </aside><!-- /archive -->
                </div><!-- /#sidebar -->
            </div><!-- /.col-md-4 -->
            <!-- end SIDEBAR Content-->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div>
<!-- end Page Content -->

<!-- Footer -->
	<?php require("pages/footer.php");?>
<!-- end Footer -->

</div>
<!-- end Wrapper -->
<?php require("pages/script.php"); ?>
</body>
</html>
<?php $connection->close(); 
	  $connection_events->close();
?>