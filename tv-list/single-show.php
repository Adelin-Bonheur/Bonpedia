<?php

include '../dbh.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" href="../images/Icon File.png">	
<title>

<?php  
 $name = mysqli_real_escape_string($conn, $_GET['name']);  
 $sql = "SELECT * FROM se_epi WHERE sw_name='$name' LIMIT 1";
 $result = mysqli_query($conn, $sql);
 $queryResult = mysqli_num_rows($result);
 if ($queryResult > 0) {
 while ($row = mysqli_fetch_assoc($result)) {
 echo "".$row['sw_name']."";}}?>
 
</title>
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
<link rel="stylesheet" href="../css/faqstyle.css" type="text/css" media="all" />
<link href="../css/medile.css" rel='stylesheet' type='text/css' />
<link href="../css/single.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="../css/contactstyle.css" type="text/css" media="all" />
<!-- news-css -->
<link rel="stylesheet" href="../news-css/news.css" type="text/css" media="all" />
<!-- //news-css -->
<!-- list-css -->
<link rel="stylesheet" href="../list-css/list.css" type="text/css" media="all" />
<!-- //list-css -->
<!-- pop-up -->
<link href="../css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
<!-- //pop-up -->
<!-- font-awesome icons -->
<link rel="stylesheet" href="../css/font-awesome.min.css" />
<!-- //font-awesome icons -->
<link href="../css/modal-style.css" rel='stylesheet' type='text/css' />
<!-- js -->
<script type="text/javascript" src="../js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="../js/scripts.js"></script>
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
<!-- tables -->
<link rel="stylesheet" type="text/css" href="../list-css/table-style.css" />
<link rel="stylesheet" type="text/css" href="../list-css/basictable.css" />
<script type="text/javascript" src="../list-js/jquery.basictable.min.js"></script>
 <script type="text/javascript">
    $(document).ready(function() {
      $('#table').basictable();

      $('#table-breakpoint').basictable({
        breakpoint: 768
      });
	   $('#table-breakpoint1').basictable({
        breakpoint: 768
      });
	  $('#table-breakpoint2').basictable({
        breakpoint: 768
      });
	  $('#table-breakpoint3').basictable({
        breakpoint: 768
      });
	  $('#table-breakpoint4').basictable({
        breakpoint: 768
      });
	  $('#table-breakpoint5').basictable({
        breakpoint: 768
      });
	  $('#table-breakpoint6').basictable({
        breakpoint: 768
      });
	  $('#table-breakpoint7').basictable({
        breakpoint: 768
      });
	  $('#table-breakpoint8').basictable({
        breakpoint: 768
      });
	  $('#table-breakpoint9').basictable({
        breakpoint: 768
      });
	  $('#table-breakpoint10').basictable({
        breakpoint: 768
      });
	  $('#table-breakpoint11').basictable({
        breakpoint: 768
      });
	  $('#table-breakpoint12').basictable({
        breakpoint: 768
      });
	  $('#table-breakpoint13').basictable({
        breakpoint: 768
      });
	  $('#table-breakpoint14').basictable({
        breakpoint: 768
      });
	  $('#table-breakpoint15').basictable({
        breakpoint: 768
      });
	  $('#table-breakpoint16').basictable({
        breakpoint: 768
      });
	  $('#table-breakpoint17').basictable({
        breakpoint: 768
      });
	  $('#table-breakpoint18').basictable({
        breakpoint: 768
      });
	  $('#table-breakpoint19').basictable({
        breakpoint: 768
      });
	  $('#table-breakpoint20').basictable({
        breakpoint: 768
      });
	  $('#table-breakpoint21').basictable({
        breakpoint: 768
      });
	  $('#table-breakpoint22').basictable({
        breakpoint: 768
      });
	  $('#table-breakpoint23').basictable({
        breakpoint: 768
      });
	  $('#table-breakpoint24').basictable({
        breakpoint: 768
      });
	  $('#table-breakpoint25').basictable({
        breakpoint: 768
      });
	  $('#table-breakpoint26').basictable({
        breakpoint: 768
      });
    });
  </script>
<!-- //tables -->
</head>
	
<body onLoad="renderTime();">
<!-- header -->
	<div class="header">
		<div class="container">
			<div class="w3layouts_logo">
				<a href="https://bonpedia.cf/"><img src="../Official Logo.png" style="height: 55px;" /></a>
			</div>
			<div class="w3_search">
				<form action="show-search.php" method="POST">
					<input type="text" name="search" autocomplete="on"  placeholder="Show Search..." minlength="2" required="" >
					<input type="submit" name="submit-search" value="Go">
				</form>
			</div>
			<div class="w3l_sign_in_register">
				<ul>
					<li><i class="fa fa-phone" aria-hidden="true"></i>(+250) 786-059-597</li>
					<div style="background-color:  #12a3df; width: 280px; -webkit-box-shadow: 0 4px 5px rgba(0,0,0, .50); padding-top: 3px;" id="clockDisplay" class="container"></div>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //header -->

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
							<li><a href="https://bonpedia.cf/">Home</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" class="active" data-toggle="dropdown">Movie Genres <b class="caret"></b></a>
								<ul class="dropdown-menu multi-column columns-3">
									<li>
									<div class="col-sm-4">
										<ul class="multi-column-dropdown">
											<li><a href="../movies-list/action">Action</a></li>
											<li><a href="../movies-list/adventure">Adventure</a></li>
											<li><a href="../movies-list/animation">Animation</a></li>
											<li><a href="../movies-list/biography">Biography</a></li>
											<li><a href="../movies-list/comedy">Comedy</a></li>
											<li><a href="../movies-list/crime">Crime</a></li>
											<li><a href="../movies-list/drama">Drama</a></li>
											
										</ul>
									</div>
									<div class="col-sm-4">
										<ul class="multi-column-dropdown">
											<li><a href="../movies-list/history">History</a></li> 
											<li><a href="../movies-list/horror">Horror</a></li>
											<li><a href="../movies-list/mystery">Mystery</a></li>
											<li><a href="../movies-list/romance">Romance</a></li>
											<li><a href="../movies-list/sci-fi">Sci-Fi</a></li>
											<li><a href="../movies-list/thriller">Thriller</a></li>
											<li><a href="../movies-list/war">War</a></li>
										</ul>
									</div>
									
									<div class="clearfix"></div>
									</li>
								</ul>
							</li>
							<li class="active"><a href="../tv-list/tv-series">TV Series</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Softwares <b class="caret"></b></a>
								<ul class="dropdown-menu multi-column columns-3">
									<li>
										<div class="col-sm-4">
											<ul class="multi-column-dropdown">
												<li><a href="../apps-sys/soft">Application & Systems</a></li>
												<li><a href="../games/pc-games">PC Games</a></li>	
											</ul>
										</div>
										
										
										<div class="clearfix"></div>
									</li>
								</ul>
							</li>
							<li><a href="../other-pages/live-soccer">Live Soccer</a></li>
							<li><a href="../other-pages/tutorials">Tutorials</a></li>
							<li><a href="../other-pages/about-us">About Us</a></li>
						</ul>
					</nav>
				</div>
			</nav>	
		</div>
	</div>
<!-- //nav -->
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
<!-- faq-banner -->
	<div class="faq">
		<h4 class="latest-text w3_faq_latest_text w3_latest_text">
			 
        <?php  
        $name = mysqli_real_escape_string($conn, $_GET['name']);  
        $sql = "SELECT * FROM se_epi WHERE sw_name='$name' LIMIT 1";
        $result = mysqli_query($conn, $sql);
        $queryResult = mysqli_num_rows($result);
        if ($queryResult > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
        echo "".$row['sw_name']."";}}
        ?>

		</h4>
			<div class="container">
				<div class="agileits-news-top">
					<ol class="breadcrumb">
					  <li>TV Shows</li>
					  <li class="active">TV Series</li>
					</ol>
				</div>
				<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
						
						<div id="myTabContent" class="tab-content">
							<div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
								<div class="agile-news-table">
									
									<div class="w3ls-news-result">
									<a class="w3_play_icon" href="#small-dialog"><button class="bnp-button">Trailer</button></a>
									</div>
									<?php
                                      
                                      $name = mysqli_real_escape_string($conn, $_GET['name']); 
                                      $sql = "SELECT * FROM tv_series WHERE s_name='$name'";
             	                      $result = mysqli_query($conn, $sql);
             	                      $queryResult = mysqli_num_rows($result);

                                      if ($queryResult > 0) {
                	                  while ($row = mysqli_fetch_assoc($result)) {
                                       echo "<div id='small-dialog' class='mfp-hide'>
                                            <iframe width='560' height='315' src='".$row['s_trailer']."' frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
                                            </div>";
                	                   }
                	                  }

									?>
								  
									<table id="table-breakpoint">
										<thead>
										  <tr>
											<th>Season</th>
											<th>Episode</th>
											<th>Stream</th>
										  </tr>
										</thead>
											<?php 
                                             $name = mysqli_real_escape_string($conn, $_GET['name']);  
             	                             $sql = "SELECT * FROM se_epi WHERE sw_name='$name' ORDER BY se_num DESC, epi_num DESC";
             	                             $result = mysqli_query($conn, $sql);
             	                             $queryResult = mysqli_num_rows($result);

                                             if ($queryResult > 0) {
                	                         while ($row = mysqli_fetch_assoc($result)) {
                		                    echo "
											<tbody>
										     <tr>
										     <td style='color: green;'><font style='opacity: .9;'>".$row['se_num']."</font></td>
										     <td style='color: red;'><font style='opacity: .9;'>".$row['epi_num']."</font></td>
										     <td style='color: blue;'><font style='opacity: .9;'><a href='single-ep.php?view_key=".$row['sp_id']."'>Watch</a></font></td>
										     </tr>
									        </tbody>";

										    }
                                            }
											?>
									</table>
								</div>
							</div>
						
						</div>
				</div>
			</div>
	</div>
<!-- //faq-banner -->

<!-- pop-up-box -->  
    <script src="../js/jquery.magnific-popup.js" type="text/javascript"></script>
<!--//pop-up-box -->

<script>
    $(document).ready(function() {
    $('.w3_play_icon').magnificPopup({
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