<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Bonpedia website, Bootstrap, Android Compatible, 
Smartphone Compatible" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="../css/contactstyle.css" type="text/css" media="all" />
<link rel="stylesheet" href="../css/faqstyle.css" type="text/css" media="all" />
<link href="../css/single.css" rel='stylesheet' type='text/css' />
<link href="../css/medile.css" rel='stylesheet' type='text/css' />
<link href="../css/modal-style.css" rel='stylesheet' type='text/css' />
<!-- banner-slider -->
<link href="../css/jquery.slidey.min.css" rel="stylesheet">
<!-- //banner-slider -->
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
<!-- js -->

<script type="text/javascript" src="../js/scripts.js"></script>
<script type="text/javascript" src="../js/jquery-2.1.4.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!--==========================Disabled pop-up==================
<script>
var popupStatus = 0;
//loading popup with jQuery magic!
function loadPopup(){
 //loads popup only if it is disabled
 if(popupStatus==0){
  $("#backgroundPopup").css({
   "opacity": "0.7"
  });
  $("#backgroundPopup").fadeIn("slow");
  $("#popupContact").fadeIn("slow");
  popupStatus = 1;
 }
}
 
//centering popup
function centerPopup(){
 //request data for centering
 var windowWidth = document.documentElement.clientWidth;
 var windowHeight = document.documentElement.clientHeight;
 var popupHeight = $("#popupContact").height();
 var popupWidth = $("#popupContact").width();
 //centering
 $("#popupContact").css({
  "position": "absolute",
  "top": windowHeight/2-popupHeight/2,
  "left": windowWidth/2-popupWidth/2
 });
}
 
//disabling popup with jQuery magic!
function disablePopup(){
 //disables popup only if it is enabled
 if(popupStatus==1){
  $("#backgroundPopup").fadeOut("slow");
  $("#popupContact").fadeOut("slow");
  popupStatus = 0;
 }
}
 
//CONTROLLING EVENTS IN jQuery
$(document).ready(function(){
 //LOADING POPUP
 //Click the button event!
 $("#button").click(function(){
  //centering with css
  centerPopup();
  //load popup
  loadPopup();
 });
  //CLOSING POPUP
 //Click the x event!
 $("#popupContactClose").click(function(){
  disablePopup();
 });
  //Click out event!
 $("#backgroundPopup").click(function(){
  disablePopup();
 });
  //Press Escape event!
 $(document).keypress(function(e){
  if(e.keyCode==27 && popupStatus==1){
   disablePopup();
  }
 });
});
</script>
==================================================-->

<!-- //js -->
<!-- banner-bottom-plugin -->
<link href="../css/owl.carousel.css" rel="stylesheet" type="text/css" media="all">

<script src="../js/owl.carousel.js"></script>
<script>
	$(document).ready(function() { 
		$("#owl-demo").owlCarousel({
	 
		  autoPlay: 3000, //Set AutoPlay to 3 seconds
	 
		  items : 5,
		  itemsDesktop : [640,4],
		  itemsDesktopSmall : [414,3]
	 
		});
	 
	}); 
</script> 
<!-- //banner-bottom-plugin -->
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