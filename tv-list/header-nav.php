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
<!-- bootstrap-pop-up -->
	
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
<!-- //bootstrap-pop-up -->
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
												<li><a href="../apps-sys/soft">Application & System</a></li>
												<li><a href="../games/pc-games">PC Games</a></li>	
											</ul>
										</div>
										
										
										<div class="clearfix"></div>
									</li>
								</ul>
							</li>
							<li><a href="../other-pages/live-soccer">Live Soccer</a></li>
							<li><a href="../other-pages/tutorials">Tutorials</a></li>
							<li><a href="../other-pages/about-us">About Site</a></li>
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