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
 $sql = "SELECT * FROM tutorials WHERE t_id='$id'";
 $result = mysqli_query($conn, $sql);
 $queryResult = mysqli_num_rows($result);
 if ($queryResult > 0) {
 while ($row = mysqli_fetch_assoc($result)) {
 echo "".$row['t_name']."";}}?>

</title>

<!-- Meta & Links -->

<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Bonpedia website, Bootstrap, Android Compatible, 
Smartphone Compatible" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="../css/medile.css" rel='stylesheet' type='text/css' />
<link href="../css/single.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="../css/contactstyle.css" type="text/css" media="all" />
<link rel="stylesheet" href="../css/faqstyle.css" type="text/css" media="all" />
<!-- news-css -->
<link rel="stylesheet" href="../news-css/news.css" type="text/css" media="all" />
<!-- //news-css -->
<!-- list-css -->
<link rel="stylesheet" href="../list-css/list.css" type="text/css" media="all" />
<!-- //list-css -->
<!-- font-awesome icons -->
<link rel="stylesheet" href="../css/font-awesome.min.css" />
<!-- //font-awesome icons -->
<!-- js -->
<script type="text/javascript" src="../js/scripts.js"></script>
<script type="text/javascript" src="../js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="../js/move-top.js"></script>
<script type="text/javascript" src="../js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<link href="../css/owl.carousel.css" rel="stylesheet" type="text/css" media="all">
<script src="../js/owl.carousel.js"></script>
<script>
	$(document).ready(function() { 
		$("#owl-demo").owlCarousel({
	 
		  autoPlay: 3000, //Set AutoPlay to 3 seconds
	 
		  items : 5,
		  itemsDesktop : [640,5],
		  itemsDesktopSmall : [414,4]
	 
		});
	 
	}); 
</script> 
<script src="../js/simplePlayer.js"></script>
<script>
	$("document").ready(function() {
		$("#video").simplePlayer();
	});
</script>

<!-- //Meta & Links -->

<style type="text/css">

iframe {
  width: 100%;
  height: 430px;
}

</style>

</head>
	
<body onLoad="renderTime();">

<!-- Header & navs -->

<?php

include 'tuto-headernav.php';

?>

<!-- //Header & navs -->

<!-- single -->
<div class="single-page-agile-main">
<div class="container">
		<!-- /w3l-medile-movies-grids -->
			<div class="agileits-single-top">
				<ol class="breadcrumb">
				  <li>Education</li>
				  <li>Tutorials</li>
				</ol>
			</div>
			<div class="single-page-agile-info">
                   <!-- /movie-browse-agile -->
                           <div class="show-top-grids-w3lagile">
				<div class="col-sm-8 single-left">
					
                <?php
				  $id = mysqli_real_escape_string($conn, $_GET['view_key']);  
             	  $sql = "SELECT * FROM tutorials WHERE t_id='$id'";
             	  $result = mysqli_query($conn, $sql);
             	  $queryResult = mysqli_num_rows($result);

                  if ($queryResult > 0) {
                  while ($row = mysqli_fetch_assoc($result)) {
                  echo "<div class='song'>
						<div class='song-info'>
					    </div>
						<div class='video-grid-single-page-agileits'>
			            <iframe src='".$row['t_watch']."' frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
						</div>
					    </div>";
					}
					}    
				?>	

					<div class="song-grid-right">
						
					</div>
					<div class="clearfix"> </div>

				</div>
			
				<div class="clearfix"> </div>
			</div>
				
			
			   </div>
				
			</div>	
		</div>
	<!-- //w3l-medile-movies-grids -->
	
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