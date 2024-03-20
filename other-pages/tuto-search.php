<?php

include '../dbh.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" href="images/Icon File.png">		
<title>Search results!</title>
<!-- Meta & links -->
<?php

include 'meta-links.php';

?>
<!-- Meta & links -->
</head>
	
<body onLoad="renderTime();">

<!-- Header & navs -->

<?php

include 'tuto-headernav.php';

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
                <?php
                  if (isset($_POST['submit-search'])){
             	   $search = mysqli_real_escape_string($conn, $_POST['search']);
             	   $sql = "SELECT * FROM tutorials WHERE t_name LIKE '%$search%'";
             	   $result = mysqli_query($conn, $sql);
             	   $queryResult = mysqli_num_rows($result);
                
                   echo "<h4 class='latest-text'>".$queryResult." Results found!</h4>";	

             	?>
                                 <div class="container">
										<div class="agileits-single-top">
											<ol class="breadcrumb">
											  <li>Education</li>
											  <li class="active">Tutorials</li>
											</ol>
										</div>
									</div>
								</div>
								<div class="container">
									<!-- /latest-movies1 -->
							    <div class="browse-inner-come-agile-w3">
                <?php

                  if ($queryResult > 0) {
                	while ($row = mysqli_fetch_assoc($result)) {
                	echo "<a href='single-tut.php?view_key=".$row['t_id']."'>".$row['t_name']."</a>";
                
                                        }
                                    echo "</div>";
                  } else {
                	echo "<div style='padding-top: 10px;'><font style='font-weight: bold;color: #FF0033;'>Sorry there are no results matching your search!</font></div>";

                    }
                  }

        	    ?>

            <div class="clearfix"> </div>
                    </div>
							
							<!--<div class="blog-pagenat-wthree">
							<ul>
								<li><a class="frist" href="#">First</a></li>
								<li><a class="frist" style="cursor: not-allowed;" href="#">Prev</a></li>
								<li><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">4</a></li>
								<li><a href="#">5</a></li>
								<li><a class="last" href="#">Next</a></li>
							</ul>
						</div>-->

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
</body>
</html>