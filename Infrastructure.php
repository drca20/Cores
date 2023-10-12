<?php
    $a=3;
?>
    <?php
	include_once 'php/header.php' ?>


    <div class="container-fluid">
        <div class="container infra">
            <div class="row">
                <div class="col-sm-7">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <?php 
                                $qry = "SELECT * FROM slider where page_id='5' and status='1'";
                                $D=1;
                                $result = $con->query($qry);
                                if($result->num_rows > 0){
                                    for($i=0;$i<$result->num_rows;$i++){
                            ?>

                            <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $i; ?>" <?php if($D==1) {echo 'class="active"'; } ?>>
                            </li>
                            <?php
                                $D=0;
                                }
                                }
                            ?>
                        </ol>
                        <div class="carousel-inner">
                             <?php 
                
                                $D=1;
                                if($result->num_rows > 0){
                                    while($row = $result->fetch_assoc()){

                            ?>
                            <div class="carousel-item <?php if($D==1){echo "active";} ?>">
                                <img src="images/slider/<?php echo $row['image']; ?>" class="d-block w-100" alt="...">
                            </div>
                            <?php
                                    $D=0;
                                    }
                                }
                            ?>
                          
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                    
                </div>
                <div class="col-sm">
                    <div class="row">
                        <h3 align="center" style="color:#f8b633">Our Infrastructure:</h3>
                        <p> With help of our state-of-the-art infrastructural base, we have been able to meet varied requirements of clients in timely manner. Our infrastructural facility covers large area. We have segregated this infrastructural facility into several departments like production, packaging, warehousing, etc. We also have a separate quality testing unit where we rigorously check these packaging products against numerous quality parameters. For storing these products in safe manner, we have large ware house as well.</p>
                        </br>
                        <P>Our state-of-the art set-up is a one-stop-shop for all printing and packaging solutions. We believe that infrastructure and technology are must-haves to meet high standards of quality that fulfill customer needs.</p>
                        </br>
                        <p>Our machinery has been acquired to provide all kinds of multi-coloured and multi-dimensional printing and packaging.</p>
                        </br>
                    </div>
                    <div class="row">
                        <h3 style="color:#f8b633">Machine Specification:</h3>
                    </div>

                    <ul>
                        <li>8 color Rotogravure with ARC</li>
                        <li>Solvent less and Solvent base Lamination</li>
                        <li>Slitter</li>
                        <li>Pouch machine</li>
                    </ul>

                </div>


            </div>
        </div>
    </div>
    </div>
    <div class="hrseparate"></div>
    <?php
	include_once 'php/footer.php' ?>

