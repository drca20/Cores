<?php
    $a=4;
?>


<?php
	include_once 'php/header.php'
    ?>
<div class="container-fluid">
    <div class="container service">
        <div class="row">
            <div class="col-sm-6">
                <img src="images/hand.png" />
            </div>
            <div class="col-sm">
                <div class="row">
                    <?php 
                    $qry = "SELECT * FROM pages where id='4' and status='1'";
                    $result = $con->query($qry);
                if($result->num_rows > 0){
                $row=$result->fetch_assoc();
                    ?>
                <h3 align="center" style="color:#f8b633"><?php echo $row['pagetitle'];?> </h3> <?php
                    
                 echo $row['pagetext'];
                }
                    ?>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<div class="hrseparate"></div>
<?php
	include_once 'php/footer.php' ?>
