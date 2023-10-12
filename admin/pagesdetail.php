<?php
$eid=$_GET['eid'];
include("dbconnect.php");
$qry = "SELECT * FROM pages WHERE id = $eid";
$result = $con->query($qry);
if($result->num_rows > 0){
    $row = $result->fetch_assoc();
    $page= $row['pagename'];
}

include("header.php");

?>
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            <?php echo $page ?>
            <small>Content</small>
        </h1>
    </section>
    <section class="content container-fluid">
        <?php
if(isset($_POST['home'])){
    $qry = 'UPDATE pages SET pagetitle="'.$_POST['titleHome'].'", pagetext="'.$_POST['txtHome'].'" WHERE id="'.$eid.'"';
    if($con->query($qry) == TRUE){
        echo '<div class="callout callout-success"><p>Data has been updated successfully.</p></div>';
    }else{
        echo '<div class="callout callout-danger"><p>Problem occurred while updating data.'.$con->error.'</p></div>';
    }
 
    
}?>


        <div class="tab-pane active" id="home">

            <form action="" method="post" enctype="multipart/form-data">
                <?php
$pageTitle="";
$pageText="";
$qry = "SELECT * FROM pages WHERE id = $eid AND status = 1";
$result = $con->query($qry);
if($result->num_rows > 0){
	$row = $result->fetch_assoc();
	$pageTitle = $row['pagetitle'];
	$pageText = $row['pagetext'];
    $pname=$row['pagename'];
}
?>
                <div class="form-group">
                    <label for="titleHome"><?php echo $pname;?> Title</label>
                    <input type="hidden" name="home" value="1" />
                    <input type="text" class="form-control" id="titleHome" name="titleHome" placeholder="Enter page title" value="<?php echo $pageTitle; ?>">
                </div>
                <div class="form-group">
                    <label for="txtHome"><?php echo $pname;?> Description</label>
                    <textarea id="txtHome" name="txtHome" style="width: 100%; height: 150px; font-size: 14px; line-height: 18px; border: 10px solid #dddddd; padding: 10px;"><?php echo $pageText; ?></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success btn-sm pull-right">Update</button>
                </div>
            </form>
        </div>

    </section>
</div>


<?php
include("footer.php");
?>
<script src="plugins/ckeditor/ckeditor.js"></script>
<script>
    $(function() {
        CKEDITOR.replace('txtHome');
        CKEDITOR.replace('txtAbout');
        CKEDITOR.replace('txtGallery');
        CKEDITOR.replace('txtContact');
    })

</script>
