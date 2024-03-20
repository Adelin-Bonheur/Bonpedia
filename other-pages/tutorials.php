
<?php

include '../dbh.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" href="../images/Icon File.png">   
<title>Increase your knowledge through tutorials.</title>

<?php

include 'meta-links.php';

?>

</head>
    
<body onLoad="renderTime();">

<?php

include 'tuto-headernav.php';

?>

<div class="w3l-agile-horror">
       <!-- /w3l-medile-movies-grids -->
            <div class="w3l-medile-movies-grids">
                <!-- /movie-browse-agile -->
                      <div class="movie-browse-agile">
                         <!--/browse-agile-w3ls -->
                        <div class="browse-agile-w3ls general-w3ls">
                                <div class="tittle-head">
                                    <h4 class="latest-text">Tutorials </h4>
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
                               
                    <a href="https://www.youtube.com/channel/UC-fBJbQ-qr4JPSgYRJLUmZg?sub_comfirmation=1" style="color: black; opacity: .7;"><b>Click here to subscribe</b></a> <br/><br/> 
                            
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
                    $sql = "SELECT * FROM tutorials ORDER BY t_id DESC LIMIT $start, $per_page";
                    $result = mysqli_query($conn, $sql);
                    $queryResults = mysqli_num_rows($result);
                    if ($queryResults > 0) {
                  while ($row = mysqli_fetch_assoc($result)) {
                    
                    echo "<a href='single-tut.php?view_key=".$row['t_id']."'>".$row['t_name']."</a><br/><br/>";

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