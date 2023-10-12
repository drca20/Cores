<?php
    $a=6;
	include_once 'php/header.php'; 


$qry = "SELECT * FROM stockproduct WHERE status = 1 AND id=".$_GET['eid'];
$result = $con->query($qry);
if($result->num_rows > 0){
	$row = $result->fetch_assoc();
    
?>

<div class="container-fluid p_detail">
    <div class="row e">
        <h2><?php echo $row['p_heading'];?></h2>
    </div>
    <div class="row">
        <div class="col-sm-3"></div>

        <div class="col-sm-8">
            <img src="images/product/<?php echo $row['p_image']; ?>" width="600px" height="300px" border="2px">
        </div>
        <div class="col-sm-4"></div>
    </div>
</div>
<div class="container p_detail">
    <h3>Product-detail:</h3>
    <?php echo $row['p_desc']; ?>

</div>
<?php }?>

<div class="hrseparate"></div>

<?php
	include_once 'php/footer.php';
?>
