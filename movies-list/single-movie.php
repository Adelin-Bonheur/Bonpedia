
<?php

include '../dbh.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" href="../images/Icon File.png">   
<title>
<?php  
 $id = mysqli_real_escape_string($conn, $_GET['id']);  
 $sql = "SELECT * FROM movies WHERE m_id='$id'";
 $result = mysqli_query($conn, $sql);
 $queryResult = mysqli_num_rows($result);
 if ($queryResult > 0) {
 while ($row = mysqli_fetch_assoc($result)) {
 echo "".$row['m_name']." (".$row['m_year'].")";}}?>
</title>

<?php

include 'meta-links.php';

?>

</head>
    
<body onLoad="renderTime();">

<?php

include 'header-nav.php';

?>

<div class="w3l-agile-horror">
       <!-- /w3l-medile-movies-grids -->
            <div class="w3l-medile-movies-grids">
                <!-- /movie-browse-agile -->
                      <div class="movie-browse-agile">
                         <!--/browse-agile-w3ls -->
                        <div class="browse-agile-w3ls general-w3ls">
                                <div class="tittle-head">
                                    <h4 class="latest-text">Selected movie </h4>
                                    <div class="container">
                                        <div class="agileits-single-top">
                                            <ol class="breadcrumb">
                                              <li>Movies</li>
                                              <li class="active">
                                              <?php  
                                                $id = mysqli_real_escape_string($conn, $_GET['id']);  
                                                $sql = "SELECT * FROM movies WHERE m_id='$id'";
                                                $result = mysqli_query($conn, $sql);
                                                $queryResult = mysqli_num_rows($result);
                                                if ($queryResult > 0) {
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                echo "".$row['m_genre']."";}}?>
                                              </li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                                <div class="container">
                                    <!-- /latest-movies1 -->
                                <div class="browse-inner-come-agile-w3">
                               
              <?php
                $id = mysqli_real_escape_string($conn, $_GET['id']);  
                $sql = "SELECT * FROM movies WHERE m_id='$id'";
                $result = mysqli_query($conn, $sql);
                $queryResult = mysqli_num_rows($result);

                  if ($queryResult > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<div class='col-md-2 w3l-movie-gride-agile'>
                              <a href='#' class='hvr-shutter-out-horizontal'><img src='images/".$row['m_image']."' title='' class='img-responsive' alt='' /><a class='w3_play_icon' href='#small-dialog'><div class='w3l-action-icon'><i class='fa fa-play-circle' aria-hidden='true'></i></div></a></a>
                              <div class='mid-1 agileits_w3layouts_mid_1_home'>
                              <div class='w3l-movie-text' style='height: 39px;'>
                              <h6><a href='".$row['m_subs']."'><span class='glyphicon glyphicon-subtitles' aria-hidden='true'></span> Subtitle Download</a></h6>                          
                              </div>
                              <div class='mid-2 agile_mid_2_home'>
                                        
                              <div class='clearfix'></div>
                              </div>
                                            
                              </div>
                                
                              </div>
                              <div>
                              <font color='#12a3df'>Name<label>:</label></font> ".$row['m_name']."<br/><br/>
                              <font color='#12a3df'>Year<label>:</label></font> ".$row['m_year']."<br/><br/>
                              <font color='#12a3df'>Genres<label>:</label></font> ".$row['other_genres']."<br/><br/>
                              <font color='#12a3df'>Duration<label>:</label></font> ".$row['m_duration']."<br/><br/>
                              <font color='#12a3df'>Size<label>:</label></font> ".$row['m_size']."<br/><br/>
                              <a href='../other-pages/how-to-download'><font color='#12a3df'>How to download</font></a><br/><br/>
                              <div class='file-download'>                             
                              <h4><a href='".$row['m_download']."'><i class='fa fa-download'></i> Download</a></h4>
                              </div>
                              </div>

                              <div id='small-dialog' class='mfp-hide'>
                              <iframe width='560' height='315' src='".$row['m_trailer']."' frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
                              </div>";
                        
                  }
                } 
              ?>           

                    <div class="clearfix"> </div>

                                  </div>
                            <!-- //latest-movies1 -->
                                   
    </div>
    </div>
    </div>  
</div>
</div>
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