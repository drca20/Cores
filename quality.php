<?php
    $a=5;
?>


    <?php
	include_once 'php/header.php' ?>
    <div class="container-fluid quality">

        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <img src="images/Quality/quality-stamp.jpg" />
                </div>
                <div class="col-sm">
                    <h3 style="color:#f8b633">Quality:</h3>
                    <p>CORES POLYPRINT Believes in total quality satisfaction. Utmost care and strict, rigid quality controls ensure that raw-material / substrates / laminates pass through rigorous tests in the in-house lab, ensuring perfect product performance.</p></br>
                    <p>Characteristic tests are carried out on all raw materials and finish products to ensure that our products are conformity to customer specification, Quality control is done at all stages of production cycle. Technical assessment of products verifies conformity to customer’s specification and customized reports ensure total traceably. Our perfection and excellence approach makes us achieving international standards in hygiene required by food industries.</p></br>
                    <p>The company makes sure that the packing material used for Packing Finished Products is also subject to Quality Checks.</p></br>
                </div>
            </div>
            <div class="row">
                <h3 style="color:#f8b633">MEASURE FOR QUALITY</h3>
            </div>
            <div class="row s">
            <?php 
                $qry = "SELECT * FROM image where page_id='4' ";
        
                $result = $con->query($qry);
                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
                        
            ?>
               
                <div class="col-sm-4">
                   <img src="images/Quality/<?php echo $row['name'];?> "/>
                    <div class="row">
                        <p><?php echo $row['heading'] ?></p>
                    </div>
                </div>
                <?php
                    }
                }
                ?>
            </div>
        
        </div>
    </div>

    <div class="hrseparate"></div>
    <?php
	include_once 'php/footer.php' ?>

