
<?php 
$a
    ?>

<title>Cores Poly Print</title>

<link rel="shortcut icon" href="../images/logo_1.png">
<div class="container-fluid footer">
    <div class="container">

        <div class="row">
            <div class="col-sm-5">
                <h4>
                    <p> Menu </p>
                </h4>


                <ul class="nav flex-column">

                    <li class="nav-item">
                        <a class="nav-link <?php if($a==1){echo "active";}?>" href="home.php">>&nbsp;&nbsp;Home</a>
                    </li>
                    <hr>
                    <li class="nav-item">
                        <a class="nav-link <?php if($a==5){echo "active";}?>" href="quality.php">>&nbsp;&nbsp;Quality Control</a>
                    </li>
                    <hr>
                    <li class="nav-item">
                        <a class="nav-link <?php if($a==3){echo "active";}?>" href="Infrastructure.php">>&nbsp;&nbsp;Infrastructure</a>
                    </li>
                    <hr>
                    <li class="nav-item <?php if($a==4){echo "active";}?>">
                        <a class="nav-link" href="services.php">>&nbsp;&nbsp;Services</a>
                    </li>
                    <hr>
                    <li class="nav-item">
                        <a class="nav-link" href="#">>&nbsp;&nbsp;Estimate Cost</a>
                    </li>
                    <hr>
                    <li class="nav-item <?php if($a==2){echo "active";}?>">
                        <a class="nav-link" href="about.php">>&nbsp;&nbsp;About us</a>
                    </li>
                    <hr>
                </ul>
            </div>
            <div class="col-sm">
                <h4>
                    <p> ADDRESS: </p>
                </h4>
                <p>G-836, Kishan Gate,</br>
                    Metoda GIDC, Rajkot-360021,</br>
                    Gujarat, India</p>
            </div>
            <div class="col-sm">
                <h4>
                    <p> CONTACT DETAILS:</p>
                </h4>
                <P>
                    <STRONG>Mobile:&nbsp;&nbsp;</STRONG><a href="tel:+917405702941"> +91 7405702941</br></a>
                    <STRONG>Email:&nbsp;&nbsp; </STRONG><a href="mailto:er.darshanghetiya@gmail.com"> info@corespolyprint.com</br></a>
                    <STRONG>Web:&nbsp;&nbsp; </STRONG><a href="home.html"> www.corespolyprint.com</br></a>
                </P>

                <h4>
                    <p> GET SOCIAL : </p>
                </h4>
                <a href="https://www.facebook.com/CORES-POLY-PRINT-150143795642139/" target="_blank"><i class="fab fa-facebook-f" data-toggle="tooltip" title="Facebook"></i></a>
                <a href="https://twitter.com/CoresPolyprint" target="_blank"> <i class="fab fa-twitter" data-toggle="tooltip" title="Twiter"></i></a>
                <a href="https://plus.google.com/115646396659069442294" target="_blank"><i class="fab fa-google-plus-g" data-toggle="tooltip" title="Google +"></i></a>

            </div>
        </div>
    </div>
</div>
<div class="container-fluid copyright">
    <div class="container">
        Copyrights © 2019 CoresPolyprint - All Rights Reserved. | Designed & Devloped by : <b>DG & URU</b>

    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery-3.3.1.slim.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/bootstrap.bundle.js"></script>
<script src="js/bootstrap.js"></script>
<?php
include_once 'php/close_db.php';
?>
