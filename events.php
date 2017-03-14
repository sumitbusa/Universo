<?php
session_start();
    if(!isset($_SESSION["username"]))
    {
		$_SESSION["Message"]="Login is Required...";
			header("Location: register-sign-in.php");
    }
?>
<!DOCTYPE html>
<?php require("php/config.php"); ?>
<html lang="en-US">
<head>
	<?php require("pages/head.php");?>
</head>

<body class="page-sub-page page-events-listing">
<!-- Wrapper -->
<div class="wrapper">
<!-- Header -->
	<?php require("pages/header/events-header.php"); ?>
<!-- end Header -->

<!-- Breadcrumb -->
<div class="container">
    <ol class="breadcrumb">
        <li><a href="index.php">Home</a></li>
        <li class="active">Events</li>
    </ol>
</div>
<!-- end Breadcrumb -->

<!-- Page Content -->
<div id="page-content">
    <div class="container">
        <div class="row">
			<?php $sql="SELECT * FROM `events`";
				$result=$connection->query($sql);
					if ($result->num_rows > 0){
			?>
            <!--MAIN Content-->
            <div class="col-md-8">
                <div id="page-main">
				<form action="event-detail.php" method="post">
                    <section class="events images" id="events">
                        <header><h1>Events</h1></header>
                        <div class="section-content">
						<?php while($row = $result->fetch_assoc())
								{?>
                            <article class="event">
                                <div class="event-thumbnail">
                                    <figure class="event-image">
                                        <div class="image-wrapper"><img src="<?php echo $row["image_path"];?>"></div>
                                    </figure>
									<?php 	$dateFormat = 'Y-m-d';
											$stringDate = $row["date"];
											$date = DateTime::createFromFormat($dateFormat, $stringDate);
											$day = intval($date->format('d')); // returns an integer
											$month= $date->format('m');?>
                                    <figure class="date">
                                        <div class="month"><?php echo date("F", mktime(null, null, null, $month, 1)); ?></div>
                                        <div class="day"><?php echo $day;?></div>
                                    </figure>
                                </div>
                                <aside>
                                    <header>
                                        <a href="#"><?php echo $row["title"];?></a>
                                    </header>
                                    <div class="additional-info"><span class="fa fa-map-marker"></span><?php echo "  ".$row["location"]; ?></div>
                                    <div class="description">
                                        <p><?php echo $row["description"];?>
                                        </p>
                                    </div>
                                    <button  type="submit" name="submit" value="<?php echo $row["button_id"]; ?>" class="btn btn-framed btn-color-grey btn-small">View Details</button>
                                </aside>
                            </article><!-- /.event -->
					<?php   }} ?>
                           
                        </div><!-- /.section-content -->
                    </section><!-- /.events-images -->
				</form>
                   <!-- <div class="center">
                        <ul class="pagination">
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                        </ul><!-- /.pagination -->
                 <!--   </div><!-- /.center -->
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
                 <!--   <aside id="our-professors">
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
                   <!--             <article class="professor-thumbnail">
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
                    <!--            <a href="" class="read-more">All Professors</a>
                            </div><!-- /.professors -->
                    <!--    </div><!-- /.section-content -->
                    <!--</aside><!-- /.our-professors -->
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
	<?php require("pages/script.php"); ?>
</body>
</html>
<?php $connection->close(); 
		$connection_events->close();
?>