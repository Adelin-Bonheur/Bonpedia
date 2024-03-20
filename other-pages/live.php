<?php

include '../dbh.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
<link href="../images/Icon File.png" rel="shortcut icon" />	
<title>

<?php  
 $id = mysqli_real_escape_string($conn, $_GET['view_key']);  
 $sql = "SELECT * FROM live_games WHERE f_id='$id'";
 $result = mysqli_query($conn, $sql);
 $queryResult = mysqli_num_rows($result);
 if ($queryResult > 0) {
 while ($row = mysqli_fetch_assoc($result)) {
 echo "".$row['t_one']." VS ".$row['t_two']." (".$row['f_competition'].")";}}?>	
	
</title>

<!--Meta & Links-->

<?php

include 'meta-links.php';

?>

<!--//Meta & Links-->

<style type="text/css">

iframe {
  width: 100%;
  height: 430px;
}

</style>


</head>
	
<body onLoad="renderTime();">

<!-- Header Nav -->

<?php

include 'header-nav.php';

?>

<!-- // Header Nav -->

<!-- faq-banner -->
	<div class="faq">
			<div class="container">
				<div class="agileits-news-top">
					<ol class="breadcrumb">
					  <li>Live Soccer</li>
					  <li class="active">Live Game</li>
					</ol>
				</div>
				<div class="agileinfo-news-top-grids">
					<div class="col-md-8 wthree-top-news-left">
						<div class="wthree-news-left">
							<div class="wthree-news-left-img">

							<?php
				              $id = mysqli_real_escape_string($conn, $_GET['view_key']);  
             	              $sql = "SELECT * FROM live_games WHERE f_id='$id'";
             	              $result = mysqli_query($conn, $sql);
             	              $queryResult = mysqli_num_rows($result);

                              if ($queryResult > 0) {
                              while ($row = mysqli_fetch_assoc($result)) {
                              echo "<h2>".$row['t_one']." <font style='color: #12a3df;'>VS</font> ".$row['t_two']."</h2><br/>
		                            <iframe src='".$row['f_stream']."' frameborder='' allow='' allowfullscreen></iframe>"; 
                               }
					          }    
				            ?>	
	
                            <br/>
                            <a href="live-soccer">All Live Games</a>
                            </div>
						</div>
					</div>
					<div class="col-md-4 wthree-news-right">
						<!-- news-right-top -->
						<div class="news-right-top">
							<div class="wthree-news-right-heading">
								<h3>Top Live Games</h3><br/>
							</div>
							<div class="wthree-news-right-top">
								<div class="news-grids-bottom">
									<!-- date -->
									<div id="design" class="date">
										<div id="cycler"> 
										
										<?php
                                          $sql = "SELECT * FROM live_games WHERE m_view='yes'";
             	                          $result = mysqli_query($conn, $sql);
             	                          $queryResult = mysqli_num_rows($result);

                                          if ($queryResult > 0) {
                                          while ($row = mysqli_fetch_assoc($result)) {
                                          echo "<div class='date-text'>
												<p><h4>".$row['t_one']." <font style='color: #12a3df;'>VS</font> ".$row['t_two']."</h4></p>
												<a href='live.php?view_key=".$row['f_id']."'>Stream</a>
											    </div>";
										   }
										  }	    
                                        ?>  
											
                                        </div>
										<script>
										function blinker() {
											$('.blinking').fadeOut(500);
											$('.blinking').fadeIn(500);
										}
										setInterval(blinker, 1000);
										</script>
										<script>
											function cycle($item, $cycler){
												setTimeout(cycle, 2000, $item.next(), $cycler);
												
												$item.slideUp(1000,function(){
													$item.appendTo($cycler).show();        
												});
												}
											cycle($('#cycler div:first'),  $('#cycler'));
										</script>
									</div>
									<!-- //date -->
								</div>
							</div>
						</div>
						<!-- //news-right-top -->
						
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
				
</div>
<!-- //faq-banner -->

<!-- footer -->

<!-- Default Statcounter code for Bonpedia.cf
https://bonpedia.cf/ -->
<script type="text/javascript">
var sc_project=12246697; 
var sc_invisible=1; 
var sc_security="64f7c7ae"; 
</script>
<script type="text/javascript"
src="https://www.statcounter.com/counter/counter.js"
async></script>
<noscript><div class="statcounter"><a title="Web Analytics
Made Easy - StatCounter" href="https://statcounter.com/"
target="_blank"><img class="statcounter"
src="https://c.statcounter.com/12246697/0/64f7c7ae/1/"
alt="Web Analytics Made Easy -
StatCounter"></a></div></noscript>
<!-- End of Statcounter Code -->

<div class="footer">
		<div class="container">
			<div class="w3ls_footer_grid">
				<div class="col-md-6 w3ls_footer_grid_left">
					<div class="w3ls_footer_grid_left1">
						<h2>Contact</h2>
						<div class="w3ls_footer_grid_left1_pos" style="color: #ffffff;">
							Phone: (+250) 786-059-597<br/>
							E-mail: adelinbonheur@gmail.com
						</div>
					</div>
				</div>
				<!--=================Grid Right for future use======================
				<div class="col-md-6 w3ls_footer_grid_right">
					<a href="index.html"><h2>One<span>Movies</span></h2></a>
				</div> ==================================-->
				<div class="clearfix"> </div>
			</div>
			<div class="col-md-5 w3ls_footer_grid1_left">
				<p>&copy; <script>document.write(new Date().getFullYear());</script> Bonpedia. All rights reserved.</p>
			</div>
			<!--===========Bottom side-right for future use only!!=============
			<div class="col-md-7 w3ls_footer_grid1_right">
				<ul>
					<li>
						<a href="genres.html">Movies</a>
					</li>
					<li>
						<a href="faq.html">FAQ</a>
					</li>
					<li>
						<a href="horror.html">Action</a>
					</li>
					<li>
						<a href="genres.html">Adventure</a>
					</li>
					<li>
						<a href="comedy.html">Comedy</a>
					</li>
					<li>
						<a href="icons.html">Icons</a>
					</li>
					<li>
						<a href="contact.html">Contact Us</a>
					</li>
				</ul>
			</div>=============================-->
			<div class="clearfix"> </div>
		</div>
	</div>

<!-- //footer -->

<!-- Bootstrap Core JavaScript -->
<script src="../js/bootstrap.min.js"></script>
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