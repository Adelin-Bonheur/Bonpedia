<?php 

include 'dbh.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" href="images/Icon File.png">	
<title>Download new movies, software and stream live football (soccer) matches.</title>
<!-- Meta & links -->
<?php

include 'meta-links.php';

?>
<!-- Meta & links -->

</head>
	
<body onLoad="renderTime();">
<!-- header -->
	<div class="header">
		<div class="container">
			<div class="w3layouts_logo">
				<a href="https://bonpedia.cf/"><img src="Official Logo.png" style="height: 55px;" /></a>
			</div>
			<div class="w3_search">
                
                <form action="search" method="POST">
					<input type="text" name="search" autocomplete="on"  placeholder="Movie Search..." minlength="2" required="" >
					<input type="submit" name="submit-search" value="Go">
				</form>
            
            </div>
			<div class="w3l_sign_in_register">
				<ul>
					<li><i class="fa fa-phone" aria-hidden="true"></i>(+250) 786-059-597</li>
					<div style="background-color: #12a3df; width: 280px; -webkit-box-shadow: 0 4px 5px rgba(0,0,0, .50); padding-top: 3px;" id="clockDisplay" class="container"></div>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //header -->
       <!-- 
        <script>
		$('.toggle').click(function(){
		  // Switches the Icon
		  $(this).children('i').toggleClass('fa-pencil');
		  // Switches the forms  
		  $('.form').animate({
			height: "toggle",
			'padding-top': 'toggle',
			'padding-bottom': 'toggle',
			opacity: "toggle"
		  }, "slow");
		});
	</script>
    -->

<!-- nav -->
	<div class="movies_nav">
		<div class="container">
			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav>
						<ul class="nav navbar-nav">
							<li class="active"><a href="https://bonpedia.cf/">Home</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Movie Genres <b class="caret"></b></a>
								<ul class="dropdown-menu multi-column columns-3">
									<li>
									<div class="col-sm-4">
										<ul class="multi-column-dropdown">
											<li><a href="movies-list/action">Action</a></li>
											<li><a href="movies-list/adventure">Adventure</a></li>
											<li><a href="movies-list/animation">Animation</a></li>
                                            <li><a href="movies-list/biography">Biography</a></li>
											<li><a href="movies-list/comedy">Comedy</a></li>
											<li><a href="movies-list/crime">Crime</a></li>
											<li><a href="movies-list/drama">Drama</a></li>
											
										</ul>
									</div>
									<div class="col-sm-4">
										<ul class="multi-column-dropdown">
											<li><a href="movies-list/history">History</a></li>
											<li><a href="movies-list/horror">Horror</a></li>
											<li><a href="movies-list/mystery">Mystery</a></li>
											<li><a href="movies-list/romance">Romance</a></li>
											<li><a href="movies-list/sci-fi">Sci-Fi</a></li>
											<li><a href="movies-list/thriller">Thriller</a></li>
											<li><a href="movies-list/war">War</a></li>
										</ul>
									</div>
									
									<div class="clearfix"></div>
									</li>
								</ul>
							</li>
							<li><a href="tv-list/tv-series">TV Series</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Software <b class="caret"></b></a>
								<ul class="dropdown-menu multi-column columns-3">
									<li>
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<li><a href="apps-sys/soft">Application & System</a></li>
												<li><a href="games/pc-games">PC Games</a></li>
											</ul>
										</div>
										
										
										<div class="clearfix"></div>
									</li>
								</ul>
							</li>
							<li><a href="other-pages/live-soccer">Live Soccer</a></li>
							<li><a href="other-pages/tutorials">Tutorials</a></li>
							<li><a href="other-pages/about-us">About Site</a></li>
						</ul>
					</nav>
				</div>
			</nav>	
		</div>
	</div>
<!-- //nav -->

<!-- banner -->
	<div id="slidey" style="display:none;">
		<ul>
			<li><img src="images/main-slides/justice-league-dark-2020.jpg" alt=" "><p class='title'>Justice League...(2020)</p><p class='description'>A Sequel to Justice League Dark (2017) involving Jack Kirby's New Gods.</p></li>
			<li><img src="images/main-slides/extraction-2020.jpg" alt=" "><p class='title'>Extraction (2020)</p><p class='description'>Tyler Rake, a fearless black market mercenary, embarks on the most deadly extraction of his career when he's enlisted to rescue the kidnapped son of an imprisoned international crime lord.</p></li>
			<li><img src="images/main-slides/my-spy-2020.jpg" alt=" "><p class='title'>My Spy (2020)</p><p class='description'>A hardened CIA operative finds himself at the mercy of a precocious 9-year-old girl, having been sent undercover to surveil her family.</p></li>
			<li><img src="images/main-slides/mortal-kombat.jpg" alt=" "><p class='title'>Mortal Kombat...(2020)</p><p class='description'>Plot unknown. Reportedly an animated project based on the long-running Mortal Kombat video game franchise.</p></li>
			<li><img src="images/main-slides/the-lodge-2019.jpg" alt=" "><p class='title'>The Lodge (2019)</p><p class='description'>A soon-to-be stepmom is snowed in with her fiancé's two children at a remote holiday village. Just as relations begin to thaw between the trio, some strange and frightening events take place.</p></li>
			<li><img src="images/main-slides/the-assistant-2019.jpg" alt=" "><p class='title'>The Assistant (2019)</p><p class='description'>A searing look at a day in the life of an assistant to a powerful executive. As Jane follows her daily routine, she grows increasingly aware of the insidious abuse that threatens every aspect of her position.</p></li>
		</ul>   	
    </div>
    <script src="js/jquery.slidey.js"></script>
    <script src="js/jquery.dotdotdot.min.js"></script>
	   <script type="text/javascript">
			$("#slidey").slidey({
				interval: 8000,
				listCount: 5,
				autoplay: false,
				showList: true
			});
			$(".slidey-list-description").dotdotdot();
		</script>
<!-- //banner -->

<!-- banner-bottom -->
	<div class="banner-bottom">
		<div class="container">
			<div class="w3_agile_banner_bottom_grid">
				<div id="owl-demo" class="owl-carousel owl-theme">
			        
            <?php
            
              $sql = "SELECT * FROM movies WHERE how_old='new' ORDER BY `movies`.`m_id` DESC";
              $result = mysqli_query($conn, $sql);
              $queryResults = mysqli_num_rows($result);
              
              if ($queryResults > 0) {
              //--------Real bunch of codes to enable char limit---------
              function shorten($string, $length){
              if(strlen($string)<=$length){
                  echo $string;
              } else {
              $youtube = substr($string,0,$length). '...';
                  echo $youtube;
                }
              }
              //--------Their ending---------
               while ($row = mysqli_fetch_assoc($result)) {
              echo "<div class='item'>
					<div class='w3l-movie-gride-agile w3l-movie-gride-agile1'>
					<a href='movies-list/".$row['m_id']."' name='selected' class='hvr-shutter-out-horizontal'><img src='movies-list/images/".$row['m_image']."' title='' class='img-responsive' alt='' />
					<div class='w3l-action-icon'>".$row['m_genre']."<br/>".$row['m_duration']."<br/>Size: ".$row['m_size']."</div>
					</a>
					<div class='mid-1 agileits_w3layouts_mid_1_home'>
					<div class='w3l-movie-text' style='height: 30px; text-align: left; margin-left: 3px;'>
					<h6><a href='movies-list/".$row['m_id']."' title='".$row['m_name']."'>";
            ?>
            
            <?php

              $text = "".$row['m_name']."";
              shorten($text, 14); //----number of characters------
            ?>    
			
			<?php

			  echo " (".$row['m_year'].")</a></h6>						
					</div>
					<div class='mid-2 agile_mid_2_home'>
				    <div class='clearfix'></div>
					</div>
					</div>
					<div class='ribben'>
					<p>New</p>
					</div>
					</div>
					</div>";
                }
              }  
            ?>	

				</div>
       		</div>			
		</div>
	</div>
<!-- //banner-bottom -->
<div class="general_social_icons">
	<nav class="social">
		<ul>
			<li class="w3_twitter"><a href="https://twitter.com/Adelinbonheur11">Twitter <i class="fa fa-twitter"></i></a></li>
			<li class="w3_facebook"><a href="https://web.facebook.com/adelin.bonheur.165">Facebook <i class="fa fa-facebook"></i></a></li>
			<li class="w3_dribbble"><a href="https://www.instagram.com/bonpedia_socrates/">Instagram <i class="fa fa-instagram"></i></a></li>
			<li class="w3_g_plus"><a href="https://www.youtube.com/channel/UC-fBJbQ-qr4JPSgYRJLUmZg?sub_comfirmation=1">YouTube <i class="fa fa-youtube"></i></a></li>				  
		</ul>
  </nav>
</div>
<!-- general -->
	<div class="general">
		<h4 class="latest-text w3_latest_text">TOP RATED</h4>
		<div class="container">
			<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
				<ul id="myTab" class="nav nav-tabs" role="tablist">
					<li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Movies</a></li>
					<li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile" aria-expanded="false">TV Series</a></li>
					<li role="presentation"><a href="#rating" id="rating-tab" role="tab" data-toggle="tab" aria-controls="rating" aria-expanded="true">Games</a></li>
					<li role="presentation"><a href="#imdb" role="tab" id="imdb-tab" data-toggle="tab" aria-controls="imdb" aria-expanded="false">Softwares</a></li>
				</ul>
			<div id="myTabContent" class="tab-content">
			<div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab">
		    <div class="w3_agile_featured_movies">
		    <?php
            
              $sql = "SELECT * FROM movies WHERE top_rated='yes' ORDER BY `movies`.`m_name` ASC";
              $result = mysqli_query($conn, $sql);
              $queryResults = mysqli_num_rows($result);
              
              if ($queryResults > 0) {
              //--------Real bunch of codes to enable char limit---------
              function moviesrt($string, $length){
              if(strlen($string)<=$length){
                  echo $string;
              } else {
              $youtube = substr($string,0,$length). '...';
              echo $youtube;
                }
              }
              //--------Their ending---------
              while ($row = mysqli_fetch_assoc($result)) {
              echo "<div class='col-md-2 w3l-movie-gride-agile'>
					<a href='movies-list/".$row['m_id']."' class='hvr-shutter-out-horizontal'><img src='movies-list/images/".$row['m_image']."' title='' class='img-responsive' alt='' />
					<div class='w3l-action-icon'>".$row['m_genre']."<br/>".$row['m_duration']."<br/>Size: ".$row['m_size']."</div>
					</a>
					<div class='mid-1 agileits_w3layouts_mid_1_home'>
					<div class='w3l-movie-text' style='height: 30px; text-align: left; margin-left: 3px;'>
					<h6><a href='movies-list/".$row['m_id']."' title='".$row['m_name']."'>";
            ?>

            <?php

              $text = "".$row['m_name']."";
              moviesrt($text, 14); //----number of characters------

            ?>

            <?php
              
              echo " (".$row['m_year'].")</a></h6>
					</div>
					<div class='mid-2 agile_mid_2_home'>
					
					<div class='clearfix'></div>
					</div>
					</div>
					</div>";
               }
             }  
            ?>	
                  
            </div>
			
			</div>

            <div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
		    
		    <?php
            
              $sql = "SELECT * FROM tv_series WHERE s_rated='yes' ORDER BY `tv_series`.`s_year` DESC";
              $result = mysqli_query($conn, $sql);
              $queryResults = mysqli_num_rows($result);
            
              if ($queryResults > 0) {
              //--------Real bunch of codes to enable char limit---------
              function seriesrt($string, $length){
              if(strlen($string)<=$length){
                  echo $string;
              } else {
                  $youtube = substr($string,0,$length). '...';
              echo $youtube;
                }
              }
              //--------Their ending---------
              while ($row = mysqli_fetch_assoc($result)) {
              echo "<div class='col-md-2 w3l-movie-gride-agile'>
					<a href='tv-list/single-show.php?name=".$row['s_name']."' class='hvr-shutter-out-horizontal'><img src='tv-list/images/".$row['s_image']."' title='' class='img-responsive' alt='' />
					<div class='w3l-action-icon'>".$row['s_genre']."</div>
					</a>
					<div class='mid-1 agileits_w3layouts_mid_1_home'>
					<div class='w3l-movie-text' style='height: 30px; text-align: left; margin-left: 3px;'>
					<h6><a href='tv-list/single-show.php?name=".$row['s_name']."' title='".$row['s_name']."'>";
            ?>

            <?php

              $text = "".$row['s_name']."";
              seriesrt($text, 14); //----number of characters------
            
            ?>

            <?php 

              echo "(".$row['s_year'].")</a></h6>
					</div>
					<div class='mid-2 agile_mid_2_home'>
									
					<div class='clearfix'></div>
					</div>
					</div>
					</div>";
                }
              }  

            ?>	
            </div>

			<div role="tabpanel" class="tab-pane fade" id="rating" aria-labelledby="rating-tab">
						
			<?php
            
              $sql = "SELECT * FROM pc_games WHERE g_rated='yes' ORDER BY `pc_games`.`g_name` ASC";
              $result = mysqli_query($conn, $sql);
              $queryResults = mysqli_num_rows($result);

              if ($queryResults > 0) {
              	//--------Real bunch of codes to enable char limit---------
                function gamesrt($string, $length){
                if(strlen($string)<=$length){
                    echo $string;
                } else {
                    $youtube = substr($string,0,$length). '...';
                echo $youtube;
                  }
                }
                //--------Their ending---------
            	  while ($row = mysqli_fetch_assoc($result)) {
            		echo "<div class='col-md-2 w3l-movie-gride-agile'>
						  <a href='games/".$row['g_id']."' class='hvr-shutter-out-horizontal'><img src='games/images/".$row['g_image']."' title='' class='img-responsive' alt='' />
						  <div class='w3l-action-icon'>Size: ".$row['g_size']."</div>
						  </a>
						  <div class='mid-1 agileits_w3layouts_mid_1_home'>
						  <div class='w3l-movie-text' style='height: 30px; text-align: left; margin-left: 3px;'>
						  <h6><a href='games/".$row['g_id']."' title='".$row['g_name']."'>";
            ?>
            
            <?php

              $text = "".$row['g_name']."";
              gamesrt($text, 14); //----number of characters------
            ?>

            <?php
              echo " (".$row['g_year'].")</a></h6>
					</div>
					<div class='mid-2 agile_mid_2_home'>
									
				    <div class='clearfix'></div>
				    </div>
				    </div>
				    </div>";
                }
              }  

            ?>	

			</div>
			<div role="tabpanel" class="tab-pane fade" id="imdb" aria-labelledby="imdb-tab">
						
		    <?php
            
              $sql = "SELECT * FROM app_sys WHERE a_rated='yes' ORDER BY `app_sys`.`a_name` ASC";
              $result = mysqli_query($conn, $sql);
              $queryResults = mysqli_num_rows($result);

              if ($queryResults > 0) {
                //--------Real bunch of codes to enable char limit---------
                function appsrt($string, $length){
                if(strlen($string)<=$length){
                   echo $string;
                } else {
                   $youtube = substr($string,0,$length). '...';
                echo $youtube;
                  }
                }
               //--------Their ending---------	
            	while ($row = mysqli_fetch_assoc($result)) {
            		echo "<div class='col-md-2 w3l-movie-gride-agile'>
						  <a href='apps-sys/".$row['a_id']."' class='hvr-shutter-out-horizontal'><img src='apps-sys/images/".$row['a_image']."' title='' class='img-responsive' alt='' />
						  <div class='w3l-action-icon'>Size: ".$row['a_size']."</div>
						  </a>
						  <div class='mid-1 agileits_w3layouts_mid_1_home'>
						  <div class='w3l-movie-text' style='height: 30px; text-align: left; margin-left: 3px;'>
						  <h6><a href='apps-sys/".$row['a_id']."' title='".$row['a_name']."'>";
             ?>

             <?php
               
               $text = "".$row['a_name']."";
               appsrt($text, 14); //----number of characters------
                    
             ?>
            
            <?php
              
              echo "</a></h6>
					</div>
					<div class='mid-2 agile_mid_2_home'>
									
					<div class='clearfix'></div>
					</div>
					</div>
					</div>";
                }
              }  
            
            ?>		
           
            </div>

			</div>
			</div>
           </div>

    </div>


<!-- //general -->
<!-- Latest-tv-series -->
	<div class="Latest-tv-series">

		<h4 class="latest-text w3_latest_text w3_home_popular">Comming Soon (Trailers)</h4>
		<div class="container">
			<section class="slider">
				<div class="flexslider">
					<ul class="slides">

						<li>
							<div class="agile_tv_series_grid">
								<div class="col-md-6 agile_tv_series_grid_left">
									<div class="w3ls_market_video_grid1">
										<img src="images/trailers/free-guy.jpg" alt=" " class="img-responsive" />
										<a class="w3_play_icon" href="#small-dialog">
											<span class="glyphicon glyphicon-play-circle" aria-hidden="true"></span>
										</a>
									</div>
								</div>
								<div class="col-md-6 agile_tv_series_grid_right">
									<p class="fexi_header">Free Guy</p>
									<p class="fexi_header_para"><span class="conjuring_w3">Synopsis<label>:</label></span> A bank teller discovers that he's actually an NPC inside a brutal, open world video game.<br/><br/></p>
									<p class="fexi_header_para"><span>Date of Release<label>:</label></span> December 11, 2020 </p>
									<p class="fexi_header_para">
										<span>Genres<label>:</label> </span>
										<a href="movies-list/action">Action</a> | 
										<a href="movies-list/adventure">Adventure</a> | 
										<a href="movies-list/comedy">Comedy</a>								
									</p>
                                    
                                    <!--<p class="fexi_header_para fexi_header_para1"><span>Star Rating<label>:</label></span>
										<a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
										<a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
										<a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a>
										<a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
										<a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
									</p>-->
                                
                                </div>
								<div class="clearfix"> </div>
				                         
				        </div>
						</li>
                         
                        <li>
							<div class="agile_tv_series_grid">
								<div class="col-md-6 agile_tv_series_grid_left">
									<div class="w3ls_market_video_grid1">
										<img src="images/trailers/blackwidow2020.jpg" alt=" " class="img-responsive" />
										<a class="w3_play_icon" href="#small-dialog1">
											<span class="glyphicon glyphicon-play-circle" aria-hidden="true"></span>
										</a>
									</div>
								</div>
								<div class="col-md-6 agile_tv_series_grid_right">
									<p class="fexi_header">Black Widow</p>
									<p class="fexi_header_para"><span class="conjuring_w3">Synopsis<label>:</label></span> A film about Natasha Romanoff in her quests between the films Civil War and Infinity War.<br/><br/></p>
									<p class="fexi_header_para"><span>Date of Release<label>:</label></span> November 06, 2020 </p>
									<p class="fexi_header_para">
										<span>Genres<label>:</label> </span>
										<a href="movies-list/action">Action</a> | 
										<a href="movies-list/adventure">Adventure</a> | 
										<a href="movies-list/sci-fi">Sci-Fi</a>								
									</p>
                                    
                                    <!--<p class="fexi_header_para fexi_header_para1"><span>Star Rating<label>:</label></span>
										<a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
										<a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
										<a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a>
										<a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
										<a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
									</p>-->
                                
                                </div>
								<div class="clearfix"> </div>
				                         
				        </div>
						</li>
                        
                        
						
						<li>
							<div class="agile_tv_series_grid">
								<div class="col-md-6 agile_tv_series_grid_left">
									<div class="w3ls_market_video_grid1">
										<img src="images/trailers/topgun2020.jpg" alt=" " class="img-responsive" />
										<a class="w3_play_icon2" href="#small-dialog2">
											<span class="glyphicon glyphicon-play-circle" aria-hidden="true"></span>
										</a>
									</div>
								</div>
								<div class="col-md-6 agile_tv_series_grid_right">
									<p class="fexi_header">Top Gun: Maverick</p>
									<p class="fexi_header_para"><span class="conjuring_w3">Synopsis<label>:</label></span> After more than thirty years of service as one of the Navy's top aviators, Pete Mitchell is where he belongs, pushing the envelope as a courageous test pilot and dodging the advancement in rank that would gro...</p>
									<p class="fexi_header_para"><span>Date of Release<label>:</label></span> December 23, 2020 </p>
									<p class="fexi_header_para">
										<span>Genres<label>:</label> </span>
										<a href="movies-list/action">Action</a> | 
										<a href="movies-list/drama">Drama</a>							
									</p>

									<!--<p class="fexi_header_para fexi_header_para1"><span>Star Rating<label>:</label></span>
										<a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
										<a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
										<a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
										<a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
										<a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a>
									</p>-->

								</div>

								<div class="clearfix"> </div>
								
							</div>
						</li> 
			        
			        </ul>
				</div>
			</section>
			<!-- flexSlider -->
				<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
				<script defer src="js/jquery.flexslider.js"></script>
				<script type="text/javascript">
				$(window).load(function(){
				  $('.flexslider').flexslider({
					animation: "slide",
					start: function(slider){
					  $('body').removeClass('loading');
					}
				  });
				});
			  </script>
			<!-- //flexSlider -->
		</div>
		
	</div>
	<!-- pop-up-box -->  
		<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
	<!--//pop-up-box -->
	<div id="small-dialog" class="mfp-hide">
		<iframe width="560" height="315" src="https://www.youtube.com/embed/X2m-08cOAbc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	</div>
    <div id="small-dialog1" class="mfp-hide">
		<iframe width="560" height="315" src="https://www.youtube.com/embed/ybji16u608U" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	</div>
	<div id="small-dialog2" class="mfp-hide">
		<iframe width="560" height="315" src="https://www.youtube.com/embed/g4U4BQW9OEk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	</div>
	<script>
		$(document).ready(function() {
		$('.w3_play_icon,.w3_play_icon1,.w3_play_icon2').magnificPopup({
			type: 'inline',
			fixedContentPos: false,
			fixedBgPos: true,
			overflowY: 'auto',
			closeBtnInside: true,
			preloader: false,
			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-zoom-in'
		});
																		
		});
	</script>
<!-- //Latest-tv-series -->
<!-- footer -->
	<?php
    
     include 'main-footer.php';

	?>
<!-- //footer -->
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
<!-- //Bootstrap Core JavaScript -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
</body>
</html>