<?php
$page="slider";
include("header.php");
?>

<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Slider
            <small>Images</small>
        </h1>
    </section>
    <section class="content container-fluid">
        <?php
if(isset($_POST['create']))
{
	
	$str='';
    $str1='';
    $ploc='';
	$file_name = $_FILES['P_Image']['name'];
	$file_type = $_FILES['P_Image']['type'];
	$file_size = $_FILES['P_Image']['size'];
    $title=$_POST['P_title'];
    $location=$_POST['P_location'];
if($_POST['P_location']==1)
{
    $ploc='Home';
        if(strstr($file_name,".exe")){
            $str = '<div class="callout callout-danger"><p>.EXE files are not allowed</p></div>';
        }
        if($file_size > 350000)
        {
            $str = '<div class="callout callout-danger"><p>File is too large...</p></div>';
        }
    
		$target = "../images/slider/".$file_name;
		
    if(move_uploaded_file($_FILES['P_Image']['tmp_name'],$target))
    {
        $qry = "INSERT INTO slider (page_id,Page_location,Hading,image) VALUES ('".$location."','".$ploc."','".$title."','".$_FILES['P_Image']['name']."')";
        if($con->query($qry)){
            $str = '<div class="callout callout-success"><p>Image has been uploaded successfully.</p></div>';
        }else{
            $str = '<div class="callout callout-danger"><p>Problem occurred while uploading image. Please try again.</p></div>';
        }        
    }
    else{
        $str = '<div class="callout callout-danger"><p>Problem occurred in Query.</p></div>';
    }
}
     else if($_POST['P_location']==5)
    {
        $ploc='Infrastructure';
         if(strstr($file_name,".exe")){
        $str = '<div class="callout callout-danger"><p>.EXE files are not allowed</p></div>';
    }
    if($file_size > 350000)
    {
        $str = '<div class="callout callout-danger"><p>File is too large...</p></div>';
    }
    
		$target = "../images/slider/".$file_name;
		
    if(move_uploaded_file($_FILES['P_Image']['tmp_name'],$target))
    {
        $qry = "INSERT INTO slider (page_id,Page_location,Hading,image) VALUES ('".$location."','".$ploc."','".$title."','".$_FILES['P_Image']['name']."')";
        if($con->query($qry)){
            $str = '<div class="callout callout-success"><p>Image has been uploaded successfully.</p></div>';
        }else{
            $str = '<div class="callout callout-danger"><p>Problem occurred while uploading image. Please try again.</p></div>';
        }        
    }
    else{
        $str = '<div class="callout callout-danger"><p>Problem occurred in Query.</p></div>';
    }
    }
    else
    {
         $str1 = '<div class="callout callout-danger"><p>INVALID PAGE LOCATION!!!!</p></div>';
        
    }
    
    

		echo $str;
    echo $str1;
}?>


        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Slider Images</h3>

                        <div class="box-tools">

                            <!--test-->
                            <div class="box-tools">
                                <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal-new-event">Add new image</button>
                            </div>
                            <!--test-->
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <tbody>
                                <tr>
                                    <th width="100px">ID</th>
                                    <th width="150px">Image</th>
                                    <th width="150px">Page</th>
                                    <th width="300px">Heading</th>
                                    <th width="200px">Status</th>
                                    <th width="100px">Action</th>
                                </tr>
                                <?php
$qry = "SELECT * FROM slider WHERE page_id = 1 or page_id = 5";
$result = $con->query($qry);
if($result->num_rows > 0){
	while($row = $result->fetch_assoc()){
?>
                                <tr>
                                    <td><?php echo $row['id']; ?></td>
                                    <td>
                                        <div class="img-circle img-slider" style="background-image:url('../images/slider/<?php echo $row['image']; ?>');"></div>
                                    </td>
                                    <td><?php echo $row['Page_location'];?></td>
                                    <td><?php echo $row['Hading'];?></td>
                                    <td><?php 
	if($row['status']) 
		echo '<span class="label label-success">Active</span>';
	else 
		echo '<span class="label label-danger">Inactive</span>'; 
	?></td>
                                    <td>

                                        <?php 
	if($row['status']) 
    {
		echo '<a href="apis/sliderImages.php?sid='.$row['id'].'&del=true" class="btn btn-sm btn-success"><i class="fa fa-toggle-on"></i></a>';
    }
	else 
		echo '<a href="apis/sliderImages.php?sid='.$row['id'].'&rev=true" class="btn btn-sm btn-danger"><i class="fa fa-toggle-on"></i></a>'; 
	?></td>
                                </tr>
                                <?php
	}
}
?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
        </div>

    </section>
</div>
<!--test -->
<div class="modal fade" id="modal-new-event">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Fill initial details</h4>
            </div>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <div class="input-group">
                        <span class="input-group-addon">Image</span>
                        <input type="file" class="form-control" name="P_Image" placeholder="Image" required>
                    </div><br />
                    <div class="input-group">
                        <span class="input-group-addon">Title</span>
                        <input type="text" class="form-control" name="P_title" placeholder="Title" required>
                    </div><br />
                    <div class="input-group">
                        <span class="input-group-addon">Page</span>
                        <input type="text" class="form-control" name="P_location" placeholder="Location enter 1 for Home 5 for Infrastructure" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary" name="create">ADD Image</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
include("footer.php");
?>
