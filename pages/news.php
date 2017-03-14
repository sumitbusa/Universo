<!-- news content -->

					<?php $sql="SELECT * FROM `news` order by date DESC LIMIT 0, 3";
							$result=$connection->query($sql);
							if ($result->num_rows > 0) {?>
                    <div class="section-content">
					<?php while($row = $result->fetch_assoc())
								{?>
                        <article>
                            <figure class="date"><i class="fa fa-file-o"></i><?php echo $row["date"];?></figure>
                            <header><a href="#"><?php echo $row["title"];?></a></header>
                        </article><!-- /article -->
							<?php   }}else{echo "no news available"; } ?>
                        <!--<article>
                            <figure class="date"><i class="fa fa-file-o"></i>08-24-2014</figure>
                            <header><a href="#">At 50, Center for the Education of Women celebrates a wider mission</a></header>
                        </article><!-- /article -->
                        <!--<article>
                            <figure class="date"><i class="fa fa-file-o"></i>08-24-2014</figure>
                            <header><a href="#">Three U-Michigan scientists receive Sloan fellowships</a></header>
                        </article><!-- /article -->
					 </div><!-- /.section-content -->
<!-- news Content -->