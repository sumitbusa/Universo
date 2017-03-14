<!-- News, Events, About -->
<?php
 if(!file_exists("php/config.php")) {	  
	   require("../php/config.php");
   }else {
	   require("php/config.php");
   }

?>
<div class="block">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <section class="news-small" id="news-small">
                    <header>
                        <h2>News</h2>
                    </header>
						<?php 
								if(!file_exists("pages/news.php")) {
									require("../pages/news.php");
								}else {
									require("pages/news.php");
								}
						?>
                </section><!-- /.news-small -->
            </div><!-- /.col-md-4 -->
            <div class="col-md-4 col-sm-6">
                <section class="events small" id="events-small">
                    <header>
                        <h2>Events</h2>
                        <a href="" class="link-calendar">Calendar</a>
                    </header>
                    <div class="section-content">
                        <article class="event nearest">
                            <figure class="date">
                                <div class="month">jan</div>
                                <div class="day">18</div>
                            </figure>
                            <aside>
                                <header>
                                    <a href="event-detail.html">Conservatory Exhibit: The garden of india a country and culture revealed</a>
                                </header>
                                <div class="additional-info">Matthaei Botanical Gardens</div>
                            </aside>
                        </article><!-- /article -->
                        <article class="event nearest-second">
                            <figure class="date">
                                <div class="month">feb</div>
                                <div class="day">01</div>
                            </figure>
                            <aside>
                                <header>
                                    <a href="event-detail.html">February Half-Term Activities: Big Stars and Little Secrets </a>
                                </header>
                                <div class="additional-info clearfix" >Pitt Rivers and Natural History Museums</div>
                            </aside>
                        </article><!-- /article -->
                        <article class="event">
                            <figure class="date">
                                <div class="month">mar</div>
                                <div class="day">23</div>
                            </figure>
                            <aside>
                                <header>
                                    <a href="event-detail.html">The Orchestra of the Age of Enlightenment perform with Music</a>
                                </header>
                                <div class="additional-info">Faculty of Music</div>
                            </aside>
                        </article><!-- /article -->
                    </div><!-- /.section-content -->
                </section><!-- /.events-small -->
            </div><!-- /.col-md-4 -->
            <div class="col-md-4 col-sm-12">
                <section id="about">
                    <header>
                        <h2>About Universo</h2>
                    </header>
                    <div class="section-content">
                        <img src="assets/img/students.jpg" alt="" class="add-margin">
                        <p><strong>Welcome o Universo.</strong> Premium HTML Template for schools, universieties and other educational institutes.
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec laoreet semper tincidunt.
                            Interdum et malesuada fames ac ante ipsum primis in faucibus. </p>
                    </div><!-- /.section-content -->
                </section><!-- /.about -->
            </div><!-- /.col-md-4 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div>
<?php $connection->close(); 
		$connection_events->close();
?>
<!-- end News, Events, About -->