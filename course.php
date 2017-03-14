<?php 
	session_start();
	if(!isset($_SESSION["course_type"])&&!isset($_SESSION["study_level"])&&!isset($_SESSION["text"]))
	{
		$_SESSION["course_type"]="";
		$_SESSION["study_level"]="";
		$_SESSION["text"]="";
	}
	require("php/config.php");?>
<!DOCTYPE html>

<html lang="en-US">
<head>
   <?php require("pages/head.php");?>
</head>

<body class="page-sub-page page-course-listing">
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
        <li><a href="#">Home</a></li>
        <li class="active">Courses</li>
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
                    <section class="course-listing" id="courses">
                        <header><h1>Courses</h1></header>
                        <section id="course-search">
                            <div class="search-box">
                                <header><span class="fa fa-search"></span><h2>Find Course for You</h2></header>
                                <form id="course-search-form" role="form" class="form-inline" action="php/action.php" method="post">
                                    <div class="form-row">
                                        <div class="form-group">
                                            <label for="course-type">Course Type</label>
                                            <select name="course-type" id="course-type">
                                                <option value="">Graphic Design and 3D</option>
                                                <option value="History and Psychology">History and Psychology</option>
                                                <option value="Marketing">Marketing</option>
                                                <option value="Science">Science</option>
                                            </select>
                                        </div><!-- /.form-group -->

                                        <div class="form-group">
                                            <label for="study-level">Study Level</label>
                                            <select name="study-level" id="study-level">
                                                <option value="">Study Level</option>
                                                <option value="Beginner">Beginner</option>
                                                <option value="Advanced">Advanced</option>
                                                <option value="Intermediate">Intermediate</option>
                                                <option value="Professional">Professional</option>
                                            </select>
                                        </div><!-- /.form-group -->

                                        <div class="form-group">
                                            <label for="full-text">Full Text</label>
                                            <input name="full-text" id="full-text" placeholder="Enter Keyword" type="text">
                                        </div><!-- /.form-group -->
                                    </div>

                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox">Webinar
                                        </label>
                                    </div>
                                    <button type="submit" class="btn pull-right" name="submit" >Search</button>
                                </form><!-- /#<!-- /.form-group -->
                            </div><!-- /.course-search-box -->
                        </section><!-- /#course-search -->
                        <section id="course-list">
                            <div class="table-responsive">
                                <table class="table table-hover course-list-table tablesorter">
                                    <thead>
                                    <tr>
                                        <th>Course Name</th>
                                        <th>Course Type</th>
                                        <th class="starts">Starts</th>
                                        <th class="length">Length</th>
										<th class"btn">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
								<form method="post" action="course-detail.php">
								<?php 
								$course_type=$_SESSION['course_type'];
								$text=$_SESSION['text'];
								if($_SESSION["course_type"]=="" && $_SESSION["study_level"]=="" && $_SESSION["text"]==""){
								$sql="SELECT `id`,`title`,`type`,`starts`,`length` FROM `courses`";}
								else if($_SESSION["course_type"]=="" && $_SESSION["study_level"]=="" && $_SESSION["text"]!=""){
								$sql="SELECT `id`,`title`,`type`,`starts`,`length` FROM `courses` where title='$text'";}
								else if($_SESSION["course_type"]=="" && $_SESSION["study_level"]!="" && $_SESSION["text"]==""){
								$sql="SELECT `id`,`title`,`type`,`starts`,`length` FROM `courses`";}
								else if($_SESSION["course_type"]=="" && $_SESSION["study_level"]!="" && $_SESSION["text"]!=""){
								$sql="SELECT `id`,`title`,`type`,`starts`,`length` FROM `courses`where title='$text'";}
								else if($_SESSION["course_type"]!="" && $_SESSION["study_level"]=="" && $_SESSION["text"]==""){
								$sql="SELECT `id`,`title`,`type`,`starts`,`length` FROM `courses` where type='$course_type'";}
								else if($_SESSION["course_type"]!="" && $_SESSION["study_level"]=="" && $_SESSION["text"]!=""){
								$sql="SELECT `id`,`title`,`type`,`starts`,`length` FROM `courses` where title='$text' and type='$course_type'";}
								else if($_SESSION["course_type"]!="" && $_SESSION["study_level"]!="" && $_SESSION["text"]==""){
								$sql="SELECT `id`,`title`,`type`,`starts`,`length` FROM `courses` where  type='$course_type'";}
								else if($_SESSION["course_type"]!="" && $_SESSION["study_level"]!="" && $_SESSION["text"]!=""){
								$sql="SELECT `id`,`title`,`type`,`starts`,`length` FROM `courses` where title='$text' and type='$course_type'";}
								else
								$sql="SELECT `id`,`title`,`type`,`starts`,`length` FROM `courses`";
							//echo $sql."<br>".$_SESSION["course_type"];
									$_SESSION["course_type"]="";
									$_SESSION["study_level"]="";
									$_SESSION["text"]="";
									$result=$connection->query($sql);
									if ($result->num_rows > 0) {
										while($row = $result->fetch_assoc())
											{
								?>
							
                                    <tr>
                                        <th class="course-title"><a href="course-detail-v1.html"><?php echo $row["title"]?></a></th>
                                        <th class="course-category"><a href="#"><?php echo $row["type"];?></a></th>
                                        <th><?php echo $row["starts"];?></th>
                                        <th><?php echo $row["length"]."&nbsp;Months";?></th>
										<th><button  type="submit" name="submit" value="<?php echo $row["id"]; ?>" class="btn btn-framed btn pull-right btn-small">View Details</button></th>
                                    </tr>
									<?php 		}} ?>
                                </tbody>
								</form>
                                </table>
                            </div>
                        </section>
                    </section><!-- /.course-listing -->
                    <!--<div class="center">
                        <ul class="pagination">
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                        </ul>
                    </div>-->
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
<?php $connection->close();
	$connection_events->close();
?>