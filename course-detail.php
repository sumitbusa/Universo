<?php 
session_start();
if(!isset($_POST["submit"]) && !isset($_SESSION["id"]))
	header("Location: course.php");
if(!isset($_SESSION["id"])){
$_SESSION["id"]="";}
require("php/config.php");?>
<!DOCTYPE html>

<html lang="en-US">
<head>
	<?php require("pages/head.php");?>
</head>

<body class="page-sub-page page-course-detail">
<!-- Wrapper -->
<div class="wrapper">
<!-- Header -->
	<?php
	if(!isset($_SESSION["username"]))
			require("pages/header/course-header-without-login.php");
		else
			require("pages/header/course-header.php");
	?>
<!-- end Header -->

<!-- Breadcrumb -->
<div class="container">
    <ol class="breadcrumb">
        <li><a href="index.php">Home</a></li>
        <li><a href="course.php">Courses</a></li>
        <li class="active">Detail</li>
    </ol>
</div>
<!-- end Breadcrumb -->
<?php
	if(isset($_POST["submit"]))
		$id=$_POST["submit"];
	else{
		$id=$_SESSION["id"];
	}
	$_SESSION["id"]=$id;
	$course_id=$id;
	$sql="SELECT * FROM `courses` where id=".$id;
	$result=$connection->query($sql);
	$row= $result->fetch_assoc();
	
		$table_content=$id."_content";
	$sql="select * from $table_content";
	$result_content=$connection_courses->query($sql);
	//$row_content = $result_content->fetch_assoc();
	
		$table=$id."_faq";
	$sql="select * from $table";
	$result_faq=$connection_courses->query($sql);
	//$row_faq = $result_faq->fetch_assoc();
	
		$table=$id."_invited_person";
	$sql="select * from $table";
	$result_invited_person=$connection_courses->query($sql);
	//$row_invited_person = $result_invited_person->fetch_assoc();
	
	$table=$id."_schedule";
	$sql="select * from $table";
	$result_schedule=$connection_courses->query($sql);
	
		$table=$id."_comments";
	$sql="select * from $table";
	$result_comments=$connection_courses->query($sql);
?>
<!-- Page Content -->
<div id="page-content">
    <div class="container">
        <header><h1><?php echo $row["title"];?></h1></header>
        <div class="row">
            <!-- Course Image -->
            <div class="col-md-2">
                <figure class="course-image">
                    <div class="image-wrapper"><img src="<?php echo $row["image_path"];?>"></div>
                </figure>
            </div><!-- end Course Image -->
            <!--MAIN Content-->
            <div class="col-md-6">
                <div id="page-main">
                    <section id="course-detail">
                        <article class="course-detail">
                            <section id="course-header">
                                <header>
                                    <h2 class="course-date"><?php
											$dateFormat = 'Y-m-d';
											$stringDate = $row["starts"];
											$date = DateTime::createFromFormat($dateFormat, $stringDate);
											$day = intval($date->format('d')); // returns an integer
											$year = intval($date->format('Y')); // returns an integer
											$month= $date->format('m');
											echo date("F", mktime(null, null, null, $month, 1))."&nbsp;&nbsp;".$day.",&nbsp;".$year;?>
									</h2>
                                    <div class="course-category">Category:<a href="#"><?php $row["type"];?></a></div>
                                </header>
                                <hr>
                                <div class="course-count-down" id="course-count-down">
                                    <figure class="course-start">Course starts  in:</figure>
                                    <!-- /.course-start -->
                                    <div class="count-down-wrapper">
                                        <script type="text/javascript">var _date = '<?php echo $stringDate;?>';</script>
                                    </div><!-- /.count-down-wrapper -->
                                    <a href="register-sign-in.php" class="btn" id="btn-course-join">Join Course</a>
                                </div><!-- /.course-count-down -->
                                <hr>
                                <figure id="course-summary">
                                    <span class="course-summary" id="course-length"><i class="fa fa-calendar-o"></i><?php echo $row["length"];?>&nbsp;weeks</span>
                                    <span class="course-summary" id="course-time-amount"><i class="fa fa-folder-o"></i><?php echo $row["time_duration"];?></span>
                                    <span class="course-summary" id="course-course-time"><i class="fa fa-clock-o"></i><?php echo $row["time"]."-".$row["to_time"];?></span>
                                </figure><!-- /#course-summary -->
                            </section><!-- /#course-header -->

                            <section id="course-brief">
                                <header><h2>Course Brief</h2></header>
                                <p>
                                    <?php echo $row["brief"];?>
                                </p>
                            </section><!-- /#course-brief -->

                            <section id="course-tabs">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs course-detail-tabs">
                                    <li class="active"><a href="#tab-schedule" data-toggle="tab">Schedule</a></li>
                                    <li><a href="#tab-video" data-toggle="tab">Video</a></li>
                                    <li><a href="#tab-speakers" data-toggle="tab">Speakers</a></li>
                                    <li><a href="#tab-gallery" data-toggle="tab">Gallery</a></li>
                                    <li><a href="#tab-faq" data-toggle="tab">FAQ</a></li>
                                </ul><!-- /.course-detail-tabs -->

                                <!-- Tab panes -->
                                <div class="tab-content course-tab-content">
                                    <div class="tab-pane fade in active" id="tab-schedule">
                                        <section class="course-schedule">
										<?php $i=0; ?>
										<?php while($row_schedule = $result_schedule->fetch_assoc()){?>
                                            <article class="course-schedule-block">
                                                <header><h4>Week <?php echo $row_schedule["id"];?>:</h4></header>
                                                        <!--<h5>Day 1:</h5>-->

                                                        <div class="details-accordion" data-toggle="collapse" data-target="<?php echo "#detail-".$i;?>">Details<span class="fa fa-plus-square-o"></span></div><!-- /#detail-1 -->
                                                        <div id="<?php echo "detail-".$i;?>" class="collapse details-accordion-content">
                                                            <div class="inner">
                                                                <div class="time"><strong>Time to complete:</strong><?php echo "&nbsp;".$row_schedule["time_to_complete"];?></div>                                                            
                                                            </div><!-- /.inner -->
                                                        </div><!-- /.details-accordion-content -->

                                                        <p class="description">
                                                            <?php echo $row_schedule["chapter"];?>
                                                        </p>
                                            </article><!-- /.course-schedule-block -->
										<?php $i=$i+1;} ?>
                                        </section><!-- /#tab-schedule -->
                                    </div>
                                    <div class="tab-pane fade" id="tab-video"><iframe src="<?php echo $row["video_path"];?>" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div>
                                    <div class="tab-pane fade" id="tab-speakers">
									<section id="course-speakers">
									<?php while($row_invited_person = $result_invited_person->fetch_assoc()){?>
                                            <div class="author-block course-speaker">
                                                <a href="member-detail.html"><figure class="author-picture"><img src="<?php echo $row_invited_person["image_path"];?>" alt=""></figure></a>
                                                <article class="paragraph-wrapper">
                                                    <div class="inner">
                                                        <a href="member-detail.html"><header><?php echo $row_invited_person["name"];?></header></a>
                                                        <figure><?php echo $row_invited_person["category"];?></figure>
                                                        <p>
															<?php echo $row_invited_person["bio"];?>
                                                        </p>
                                                    </div>
                                                </article>
                                            </div><!-- /.author -->
									<?php } ?>
                                        </section><!-- /#course-speakers -->
                                    </div>
                                    <div class="tab-pane fade" id="tab-gallery">
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
                                    </div>
                                    <div class="tab-pane fade" id="tab-faq">
                                        <ul class="faq-list">
										<?php while($row_faq = $result_faq->fetch_assoc()){ ?>
                                            <!-- Question -->
                                            <li>
                                                <h5><?php echo $row_faq["questions"];?></h5>
                                                <p class="description">
                                                    <?php echo $row_faq["answers"];?>
                                                </p>
                                            </li>
                                            <!-- end Question -->
										<?php } ?>
                                        </ul><!-- /.faq-list -->
                                    </div><!-- /#tab-faq -->
                                </div><!-- /Tab panes -->
                            </section><!-- /#course-tabs -->

                            <section id="course-info">
                                <header><h2>Course Info</h2></header>
									<?php 
									while($row_content = $result_content->fetch_assoc()){
											echo "<p>".$row_content["content"]."</p>";
									}
									?>
                            </section><!-- /#course-info -->

                            <section id="presentation">
                                <header><h2>Short Presentation</h2></header>
                                <div class="presentation" style="width: 100%">
                                    <a class="pdf-object" href="assets/pdf/presentation.pdf" style="width: 100%">Course Presentation</a>
                                </div>
                            </section>

                            <section id="sponsors">
                                <header><h2>Sponsors</h2></header>
                                <div class="section-content">
                                    <div class="logos">
                                        <div class="logo"><a href=""><img src="assets/img/logo-partner-01.png" alt=""></a></div>
                                        <div class="logo"><a href=""><img src="assets/img/logo-partner-02.png" alt=""></a></div>
                                        <div class="logo"><a href=""><img src="assets/img/logo-partner-03.png" alt=""></a></div>
                                        <div class="logo"><a href=""><img src="assets/img/logo-partner-04.png" alt=""></a></div>
                                    </div>
                                </div>
                            </section><!-- /#sponsors -->

                            <section id="map">
                                <header><h2>Place on Map</h2></header>
                                <div class="map-wrapper">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2482.389928525137!2d-0.11316612883517647!3d51.52440760342934!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761b48959f07e1%3A0xb6b70e6a76950525!2s5+Phoenix+Pl!5e0!3m2!1ssk!2s!4v1395674632609" width="100%" height="350" frameborder="0" style="border:0"></iframe>
                                </div>
                            </section><!-- /#map -->

                            <!--<section id="join-to-course" class="center">
                                <a href="register-sign-in.php" class="btn">Join Course</a>
                            </section><!-- /#join-to-course -->

                            <hr>

                            <section id="comments">
                                <header><h2>Comments</h2></header>
                                <ul class="discussion-list">
								<?php if ($result->num_rows > 0){while($row_comments = $result_comments->fetch_assoc())
										{
											$status=$row_comments["status"];
											if($status=="Admin")
												{
								?>
                                    <li class="author-block">
                                        <article class="paragraph-wrapper">
                                            <div class="inner">
                                                <header><h5><?php echo $row_comments["name"]; ?></h5></header>
                                                <p><?php echo $row_comments["message"];?></p>
                                            </div>
                                            <div class="comment-controls">
                                                <span><?php echo $row_comments["date"];?></span>
                                                <a href="#leave-reply">Reply</a>
                                            </div>
                                        </article>
                                    </li><!-- /parent item -->
									<?php 		} 
											else{												
									?>
                                    <li>
                                        <ul class="discussion-child">
                                            <li class="author-block">
                                                <article class="paragraph-wrapper">
                                                    <div class="inner">
                                                        <header><h5><?php echo $row_comments["name"]; ?></h5></header>
                                                       <p><?php echo $row_comments["message"];?></p>
                                                    </div>
                                                    <div class="comment-controls">
                                                        <span><?php echo $row_comments["date"];?></span>
                                                        <a href="#leave-reply">Reply</a>
                                                    </div>
                                                </article>
                                            </li>
                                        </ul><!-- /.discussion-child -->
                                    </li><!-- /parent item -->
								<?php		}
								}}else{echo "<li>Give some comments!</li>";} ?> 
                                </ul><!-- /.discussion-list -->
                            </section><!-- /.comments -->

                            <section id="leave-reply">
                                <header><h2>Leave a Reply</h2></header>
                                <form class="reply-form" method="post" action="php/comments.php">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="input-group">
                                                <div class="controls">
                                                    <label for="name">Your Name</label>
                                                    <input type="text" id="name" name="name" required="required">
                                                </div><!-- /.controls -->
                                            </div><!-- /.control-group -->
                                        </div><!-- /.col-md-4 -->
                                        <div class="col-md-6">
                                            <div class="input-group">
                                                <div class="controls">
                                                    <label for="email">Your Email</label>
                                                    <input type="email"id="email" name="email" required="required">
                                                </div><!-- /.controls -->
                                            </div><!-- /.control-group -->
                                        </div><!-- /.col-md-4 -->
                                    </div><!-- /.row -->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="input-group">
                                                <div class="controls">
                                                    <label for="message">Your Message</label>
                                                    <textarea name="message" id="message" required="required"></textarea>
                                                </div><!-- /.controls -->
                                            </div><!-- /.control-group -->
                                        </div><!-- /.col-md-4 -->
                                    </div><!-- /.row -->
                                    <div class="form-actions pull-right">
                                        <input type="submit" class="btn btn-color-primary" name="submit" value="Reply">
                                    </div><!-- /.form-actions -->
                                </form><!-- /.reply-form -->
                            </section>

                        </article><!-- /.course-detail -->
                    </section><!-- /.course-detail -->
                </div><!-- /#page-main -->
            </div><!-- /.col-md-8 -->

            <!--SIDEBAR Content-->
            <div class="col-md-4">
                <div id="page-sidebar" class="sidebar">
                    <aside id="related-courses">
                        <header>
                            <h2>Related Courses</h2>
                        </header>
                        <article class="course-thumbnail small">
                            <figure class="image">
                                <div class="image-wrapper"><a href="course-detail-v1.html"><img src="assets/img/course-01.jpg"></a></div>
                            </figure>
                            <div class="description">
                                <a href="course-detail-v1.html"><h3>Architecture Photography: Power of Light and Shadows</h3></a>
                                <a href="#" class="course-category">Photography</a>
                                <hr>
                                <div class="course-meta">
                                    <span class="course-date"><i class="fa fa-calendar-o"></i>01-03-2014</span>
                                    <span class="course-length"><i class="fa fa-clock-o"></i>3 months</span>
                                </div>
                                <div class=""><a href="course-detail-v1.html" class="btn btn-framed btn-color-grey btn-small">View Details</a></div>
                            </div>
                        </article><!-- /.course-thumbnail .small -->
                        <article class="course-thumbnail small">
                            <figure class="image">
                                <div class="image-wrapper"><a href="course-detail-v1.html"><img src="assets/img/event-img-01.jpg"></a></div>
                            </figure>
                            <div class="description">
                                <a href="course-detail-v1.html"><h3>Character Drawing: Basic and Advanced Principles</h3></a>
                                <a href="#" class="course-category">Art and Design</a>
                                <hr>
                                <div class="course-meta">
                                    <span class="course-date"><i class="fa fa-calendar-o"></i>01-03-2014</span>
                                    <span class="course-length"><i class="fa fa-clock-o"></i>3 months</span>
                                </div>
                                <div class=""><a href="course-detail-v1.html" class="btn btn-framed btn-color-grey btn-small">View Details</a></div>
                            </div>
                        </article><!-- /.course-thumbnail .small -->
                        <article class="course-thumbnail small">
                            <figure class="image">
                                <div class="image-wrapper"><a href="course-detail-v1.html"><img src="assets/img/event-img-02.jpg"></a></div>
                            </figure>
                            <div class="description">
                                <a href="course-detail-v1.html"><h3>How to find long term customers</h3></a>
                                <a href="#" class="course-category">Photography</a>
                                <hr>
                                <div class="course-meta">
                                    <span class="course-date"><i class="fa fa-calendar-o"></i>01-03-2014</span>
                                    <span class="course-length"><i class="fa fa-clock-o"></i>3 months</span>
                                </div>
                                <div class=""><a href="course-detail-v1.html" class="btn btn-framed btn-color-grey btn-small">View Details</a></div>
                            </div>
                        </article><!-- /.course-thumbnail .small -->
                    </aside><!-- /#related-courses -->

                    <aside class="news-small" id="news-small">
                        <header>
                            <h2>Related News</h2>
                        </header>
							<?php require("pages/news.php");?>
                        <a href="" class="read-more">All News</a>
                    </aside><!-- /.news-small -->
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
<?php require("pages/script.php");?>

</body>
</html>
<?php 
		$connection->close();
		$connection_events->close();
?>