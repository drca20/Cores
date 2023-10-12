<?php
    $a=1;
	include_once 'php/header.php' 
?>
<div id="carouselExampleIndicators" class="carousel slide homeslide" data-ride="carousel">
    <ol class="carousel-indicators">
        <?php 
                $qry = "SELECT * FROM slider where page_id='1' and status='1'";
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
        <div class="carousel-item <?php if($D==1){echo "active";} ?>" style="background:url('images/slider/<?php echo $row['image']; ?>') "><h1><?php echo $row['Hading']; ?></h1>
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
<?php 
                $qry = "SELECT * FROM pages where status='1' and id='1'";
                $result = $con->query($qry);
                $row=$result->fetch_assoc();
                if($result->num_rows > 0){
                    
                        
?>
<div class="symbol">
    <p align="center"><?php echo $row['pagetitle']; ?></p>
</div>
<?php } ?>
<div class="container">
    <section class="main">
        <ul class="ch-grid">
            <?php 
                $qry = "SELECT * FROM home_circle where status='1'";
                $result = $con->query($qry);
                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
                        
            ?>
            <li>
                <div class="ch-item">
                    <div class="ch-info">
                        <h3><?php echo $row['title'];?></h3>
                        <p><?php echo $row['desc.'];?><a href="<?php echo $row['href'];?>"><?php echo $row['link text'];?></a></p>
                    </div>
                    <div class="ch-thumb style=" style="background-image:url('images/Circle/<?php echo $row['image_class'];?>')"></div>

                </div>

            </li>
            <?php
                  }
                }
            ?>
        </ul>
    </section>
</div>
<div class="hrseparate"></div>
<div class="container-fluid minfo">
    <div class="container">
        
        <div class="row">
           <?php 
                $qry = "SELECT * FROM pages where status='1' and id='2'";
                $result = $con->query($qry);
                $row=$result->fetch_assoc();
                if($result->num_rows > 0){
                    
            ?>
            <div class="col-sm">
                <p>
                    <h2><?php echo $row['pagetitle'];?></h2>
                </p>
                <p justify-text-align="cell">
                    <?php echo $row['pagetext'];?>
                </p>

                <a href="<?php echo $row['href'];?>"><button type="button" class="button">READ MORE</button></a>
            </div>
            <?php } 
        
                $qry = "SELECT * FROM pages where status='1' and id='3'";
                $result = $con->query($qry);
                $row=$result->fetch_assoc();
                if($result->num_rows > 0){
                    
            ?>
            <div class="col-sm">
                <p>
                    <h2><?php echo $row['pagetitle'];?></h2>
                </p>
             <?php echo $row['pagetext'];?>
                <a href="<?php echo $row['href'];?>"><button type="button" class="button">READ MORE</button></a>
            </div>
              <?php } 
        
                $qry = "SELECT * FROM pages where status='1' and id='5'";
                $result = $con->query($qry);
                $row=$result->fetch_assoc();
                if($result->num_rows > 0){
                    
            ?>
            <div class="col-sm">
                <p>
                    <h2><?php echo $row['pagetitle'];?></h2>
                </p>
                <?php echo $row['pagetext'];?>
                <a href="<?php echo $row['href'];?>"><button type="button" class="button">READ MORE</button></a>
            </div>
            <?php }?>
        </div>
    </div>
</div>
<div class="container home-vision">
    <div class="row">
        <div class="col-sm-9">
           
<?php 
                $qry = "SELECT * FROM pages where status='1' and id='1'";
                $result = $con->query($qry);
            $row=$result->fetch_assoc();
                if($result->num_rows > 0){
                    
                        echo $row['pagetext'];
                }
?>

        </div>
        <div class="col-sm">
            <a href="contact.php"><button type="button" class="button">CONTACT US</button></a>
        </div>

    </div>
</div>
<div class="hrseparate"></div>


<?php
	include_once 'php/footer.php' ?>
