
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" href="../images/Icon File.png">		
<title>About Site</title>
<link href="../css/modal-style.css" rel='stylesheet' type='text/css' />
<!-- Meta & links -->
<?php

include 'meta-links.php';

?>
<!-- Meta & links -->
</head>
	
<body onLoad="renderTime();">

<!-- Header & navs -->

<?php

include 'about-headernav.php';

?>

<!-- Header & navs -->

<div class="w3l-agile-horror">
       <!-- /w3l-medile-movies-grids -->
			<div class="w3l-medile-movies-grids">
				<!-- /movie-browse-agile -->
				      <div class="movie-browse-agile">
					     <!--/browse-agile-w3ls -->
						<div class="browse-agile-w3ls general-w3ls">
								<div class="tittle-head">
                              
                               <h4 class="latest-text">About site</h4>
                                   <div class="container">
										<div class="agileits-single-top">
											<ol class="breadcrumb">
											  <li>Site Info</li>
											  <li class="active">About Site</li>
											</ol>
										</div>
									</div>
								</div>
								<div class="container">
									<!-- /latest-movies1 -->
							<div class="browse-inner-come-agile-w3" style="font-family: Comic Sans MS; font-weight: bold; opacity: .8;">
                            
                            <p>This site started in 2016. It was created to help people get the desired stuff easily without passing through many steps like on the other sites, I try to upload rare files and live shows, as my slogan explains "get rare stuff in easy ways".</p> <br/>
                             
                            <p>Even though 75% of the site was achieved, I still need to achieve up to 100% so if you think that I am doing right, do not hesitate to contact me for anything. You may not be interested in Bonpedia so let the others who need my services get them by sharing my website, tell people who you know that they need my help to access this website for downloading files, watch live games, TV Shows and my tutorials. Bonpedia get rare stuff in easy ways.</p>
                        
                        <div class="clearfix"> </div>

                        </div>
			</div>
				
        </div>
	      <!-- //w3l-medile-movies-grids -->
	</div>
	</div>	
</div>
<!-- //comedy-w3l-agileits -->
<!-- footer -->

<?php
    
include '../main-footer.php';

?>

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
<script src="../js/main.js"></script>
</body>
</html>