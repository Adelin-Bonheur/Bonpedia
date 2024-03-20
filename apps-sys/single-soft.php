
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
 $sql = "SELECT * FROM app_sys WHERE a_id='$id'";
 $result = mysqli_query($conn, $sql);
 $queryResult = mysqli_num_rows($result);
 if ($queryResult > 0) {
 while ($row = mysqli_fetch_assoc($result)) {
 echo "".$row['a_name']." ".$row['a_version']."";}}?>
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
                                    <h4 class="latest-text">Selected software </h4>
                                    <div class="container">
                                        <div class="agileits-single-top">
                                            <ol class="breadcrumb">
                                              <li>Softwares</li>
                                              <li class="active">Applications & Systems</li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                                <div class="container">
                                    <!-- /latest-movies1 -->
                                <div class="browse-inner-come-agile-w3">
                               
              <?php
                $id = mysqli_real_escape_string($conn, $_GET['id']);  
                $sql = "SELECT * FROM app_sys WHERE a_id='$id'";
                $result = mysqli_query($conn, $sql);
                $queryResult = mysqli_num_rows($result);

                  if ($queryResult > 0) {
                  while ($row = mysqli_fetch_assoc($result)) {
                    echo "<div class='col-md-2 w3l-movie-gride-agile'>
                          <a href='#' class='hvr-shutter-out-horizontal'><img src='images/".$row['a_image']."' title='' class='img-responsive' alt='' /></a>
                          <div class='mid-1 agileits_w3layouts_mid_1_home'>
                          <div class='w3l-movie-text' style='height: 39px;'>
                                  
                          </div>
                          <div class='mid-2 agile_mid_2_home'>
                    
                          <div class='clearfix'></div>
                          </div>
                      
                          </div>
                
                          </div>
                          <div>
                          <font color='#12a3df'>Name<label>:</label></font> ".$row['a_name']."<br/><br/>
                          <font color='#12a3df'>Version<label>:</label></font> ".$row['a_version']."<br/><br/>
                          <font color='#12a3df'>Size<label>:</label></font> ".$row['a_size']."<br/><br/>
                          <a href='../other-pages/how-to-download'><font color='#12a3df'>How to download</font></a><br/><br/>
                          <div class='file-download'>               
                          <h4><a href='".$row['a_download']."'><i class='fa fa-download'></i> Download</a></h4>
                          </div>
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