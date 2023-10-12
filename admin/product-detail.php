<?php
$page="events";
include("header.php");
$eid=0;
if(isset($_GET['eid']) && $_GET['eid']!=""){
    $eid=$_GET['eid'];
}
?>

<div class="content-wrapper">
<?php
$qry = "SELECT * FROM stockproduct WHERE id=".$eid;
$result = $con->query($qry);
if($result->num_rows > 0){
    $row = $result->fetch_assoc();
?>
    <section class="content-header">
      <h1>
        <?php echo $row['p_heading']; ?>
        <small>Product Details</small>
      </h1>
    </section>
    <section class="content container-fluid">
		
 <?php
if(isset($_POST['updateBasics']))
{
    
    $str='';
	$file_name = date("m-d-H-i").$_FILES['image']['name'];
	$file_type = $_FILES['image']['type'];
	$file_size = $_FILES['image']['size'];
    $title=$_POST['P_title'];
    if(strstr($file_name,".exe")){
        $str = '<div class="callout callout-danger"><p>.EXE files are not allowed</p></div>';
    }
    if($file_size > 350000)
    {
        $str = '<div class="callout callout-danger"><p>File is too large...</p></div>';
    }
    
		$target = "../images/product/".$file_name;
		
    if(move_uploaded_file($_FILES['image']['tmp_name'],$target))
    {
        $qry = 'UPDATE stockproduct set p_heading="'.$title.'", p_image="'.$file_name.'" where id="'.$eid.'"';
        if($con->query($qry)){
            $str = '<div class="callout callout-success"><p>Image and Title has been uploaded successfully.</p></div>';
        }else{
            $str = '<div class="callout callout-danger"><p>Problem occured !!!! Please try again.</p></div>';
        }        
    }
    else{
        $str = '<div class="callout callout-danger"><p>Problem occurred while uploading image. Please try again.</p></div>';
    }
    

		echo $str;
    
}
?>
<?php
if(isset($_POST['updateDesc']))
{
    
    $str='';
    $description=$_POST['desc'];
    
		
	
        $qry = 'UPDATE stockproduct set p_desc="'.$description.'" where id="'.$eid.'"';
        if($con->query($qry)){
            $str = '<div class="callout callout-success"><p>Description has been uploaded successfully.</p></div>';
        }else{
            $str = '<div class="callout callout-danger"><p>Problem occured !!!! Please try again.</p></div>';
        }        
    
    

		echo $str;    
}
?>


<div class="row">
	<div class="col-md-4">
		<div class="box">
			<div class="box-header">
			  <h3 class="box-title">Basic Details</h3>
			</div>
			<div class="box-body">
				<form action="" method="post" enctype="multipart/form-data">
				    <img class="eventImage" src="../images/product/<?php echo $row['p_image']; ?>" /><br/>
                    <div class="input-group">
                        <span class="input-group-addon">Image</span>
                        <input type="file" class="form-control" placeholder="Product Title" name="image" required>
                    </div><br/>
                    <div class="input-group">
                        <span class="input-group-addon">Title</span>
                        <input type="text" class="form-control" placeholder="Event Title" name="P_title" value="<?php echo $row['p_heading']; ?>">
                    </div><br/>
                    
                    <div class="form-group">
                        <button type="submit" class="btn btn-success btn-sm" name="updateBasics">Update</button>
                    </div>
				</form>
			</div>
		</div>
	</div>
	<div class="col-md-8">
		<div class="box">
			<div class="box-header">
			  <h3 class="box-title">More Details</h3>
			</div>
			<div class="box-body">
				<form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Full Description</label>
                        <textarea id="fullDesc" placeholder="Full Description" name="desc"><?php echo $row['p_desc']; ?></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success btn-sm" name="updateDesc">Update</button>
                    </div>
				</form>
			</div>
		</div>
	</div>
</div>		

    </section>

<?php
}else{
    echo '<section class="content container-fluid"><div class="callout callout-danger"><p>Error fetching product data. Please try again.</p></div></section>';
}
?>
</div>
  
 
<?php
include("footer.php");
?>
<script src="plugins/ckeditor/ckeditor.js"></script>
<script>
  $(function () {
    CKEDITOR.replace('fullDesc');
  })
</script>