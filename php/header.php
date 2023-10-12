<?php
$a;
?>
<?php
include_once 'connect_db.php';
?>

<head>
    <link href="./css/home.css" type="text/css" rel="stylesheet" />
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
   
</head>

<div class="header">

    <p>Call Us : +91 7405702941 &nbsp;|&nbsp; info@corespolyprint.com</p>
    <p>
        <a href="https://www.facebook.com/CORES-POLY-PRINT-150143795642139/" target="_blank"><i class="fab fa-facebook-f" data-toggle="tooltip" title="Facebook"></i></a>
        <a href="https://twitter.com/CoresPolyprint" target="_blank"> <i class="fab fa-twitter" data-toggle="tooltip" title="Twiter"></i></a>
        <a href="https://plus.google.com/115646396659069442294" target="_blank"><i class="fab fa-google-plus-g" data-toggle="tooltip" title="Google +"></i></a>
    </p>
</div>
<div align="center" class="logo">
    <a href="index.php"><img src="images/logo_1.png" /></a>
</div>


<div class="menu-container sticky-top">
    <ul>
        <li><a <?php if($a==1){echo 'class="active"';}?> href="index.php">Home</a> </li>
        <li><a <?php if($a==2){echo 'class="active"';}?> href="about.php">About Us</a></li>
        <li><a <?php if($a==3){echo 'class="active"';}?> href="Infrastructure.php">Infrastructure</a></li>

        <li><a <?php if($a==6){echo 'class="active"';}?> href="product-detail.php?eid=1">Stock Product</a>
            <div class="dgm">
                <div class="row">
         <?php 
                $qry = "SELECT * FROM stockproduct where status='1'";
                $D=4;
                $result = $con->query($qry);
                if($result->num_rows > 0){
                     while($row = $result->fetch_assoc()){
                        if($D%4==0){echo '<div class="col-sm">';}
                         $D++;
                        ?> <a href="product-detail.php?eid=<?php echo $row['id'];?>">
                        <div class="arrow-right"></div><?php echo $row['p_heading'];?>
                        </a>
                    <?php if($D%4==0){echo '</div>';}
                    
                     }
                }
                    ?>

                </div>
            </div>

        </li>
        <li><a href="#">Customize Pouch</a>
            <div class="dgm">
                <div class="row">
             <?php 
                $qry = "SELECT * FROM customize_product where status='1'";
                $s=4;
                $result = $con->query($qry);
                if($result->num_rows > 0){
                     while($row = $result->fetch_assoc()){
                        if($s%4==0){echo '<div class="col-sm">';}
                         $s++;
                        ?> <a href="#">
                        <div class="arrow-right"></div><?php echo $row['p_heading'];?>
                        </a>
                    <?php if($s%4==0){echo '</div>';}
                    
                     }
                }
                    ?>
                </div>
            </div>

        </li>
        <li><a <?php if($a==4){echo 'class="active"';}?> href="services.php">Services</a></li>
        <li><a href="#">Estimate Cost</a></li>

    </ul>
</div>
