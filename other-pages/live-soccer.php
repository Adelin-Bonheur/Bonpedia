
<?php

include '../dbh.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
<link href="../images/Icon File.png" rel="shortcut icon" />   
<title>Live Games</title>

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
                                    <h4 class="latest-text">Live Games </h4>
                                    <div class="container">
                                        <div class="agileits-single-top">
                                            <ol class="breadcrumb">
                                              <li>Live Soccer</li>
                                              <li class="active">Live Games</li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                                <div class="container">
                                    <!-- /latest-movies1 -->
                                <div class="browse-inner-come-agile-w3">
                               
                   <b>All Live Games</b> <br/><br/> 
                            
                   <?php
                    $page = (isset($_GET['page']))?$_GET['page']:'';
                    if ($page==''){
                     $page = "1";
                    }else{
                     $page = $_GET['page'];
                    }
                    $cur_page = $page;
                    $page -= 1;
                    $per_page = 10;  //----number of rows per page------
                    $previous_btn = true;
                    $next_btn = true;
                    $first_btn = true;
                    $last_btn = true;
                    $start = $page * $per_page;
                    $msg = "";
                    $sql = "SELECT * FROM live_games ORDER BY kick_off ASC LIMIT $start, $per_page";
                    $result = mysqli_query($conn, $sql);
                    $queryResults = mysqli_num_rows($result);
                    if ($queryResults > 0) {
                  while ($row = mysqli_fetch_assoc($result)) {
                    
                    echo "".$row['kick_off']." - ".$row['t_one']." <font style='color: #12a3df;'>VS</font> ".$row['t_two']." (".$row['f_competition'].") <a href='live.php?view_key=".$row['f_id']."'>Stream</a><br/><br/>";

                  }
                  } 
                   ?>       

                    <div class="clearfix"> </div>

                                  </div>
                            <!-- //latest-movies1 -->
<div class="blog-pagenat-wthree"><ul>
<?php

$query_pag_num = mysqli_query($conn,"SELECT COUNT(*) AS mycount FROM tutorials" ) or die(mysqli_error($this->dblink));
$res = mysqli_fetch_object($query_pag_num);
$count = $res->mycount;
$no_of_paginations = ceil($count / $per_page);
 
// ---------------Calculating the starting and endign values for the loop----------------------------------- 
if ($cur_page >= 7) {
    $start_loop = $cur_page - 3;
    if ($no_of_paginations > $cur_page + 3)
        $end_loop = $cur_page + 3;
    else if ($cur_page <= $no_of_paginations && $cur_page > $no_of_paginations - 6) {
        $start_loop = $no_of_paginations - 6;
        $end_loop = $no_of_paginations;
    } else {
        $end_loop = $no_of_paginations;
    }
} else {
    $start_loop = 1;
    if ($no_of_paginations > 7)
        $end_loop = 7;
    else
        $end_loop = $no_of_paginations;
}
//----------------------------------------------------------------------------------------------------------- 

// FOR ENABLING THE FIRST BUTTON
if ($first_btn && $cur_page > 1) {
    $msg .= "<li p='1'><a class='frist' href='?page=1'>First</a></li>";
} else if ($first_btn) {
    $msg .= "<li p='1'><a class='frist' href='?page=1'>First</a></li>";
}
// FOR ENABLING THE PREVIOUS BUTTON
if ($previous_btn && $cur_page > 1) {
    $pre = $cur_page - 1;
    $msg .= "<li p='$pre'><a class='frist' href='?page=$pre'>Prev</a></li>";
} else if ($previous_btn) {
    $msg .= "<li><a class='last' href='#'>Prev</a></li>";
}
for ($i = $start_loop; $i <= $end_loop; $i++) {
    if ($cur_page == $i)
        $msg .= "<li p='$i'><a href='?page=$i'>{$i}</a></li>";
    else
        $msg .= "<li p='$i'><a href='?page={$i}'>{$i}</a></li>";
}
// TO ENABLE THE NEXT BUTTON
if ($next_btn && $cur_page < $no_of_paginations) {
    $nex = $cur_page + 1;
    $msg .= "<li p='$nex'><a class='frist' href='?page=$nex'>Next</a></li>";
} else if ($next_btn) {
    $msg .= "<li ><a class='last' href='#'>Next</a></li>";
}
/* TO ENABLE THE END BUTTON
if ($last_btn && $cur_page < $no_of_paginations) {
    $msg .= "<li p='$no_of_paginations'><a class='frist' href='?page=$no_of_paginations'>Last</a></li>";
} else if ($last_btn) {
    $msg .= "<li p='$no_of_paginations'><a class='last' href='?page=$no_of_paginations'>Last</a></li>";
}
*/
echo $msg;
            

 ?>

</ul></div> 
                                   
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