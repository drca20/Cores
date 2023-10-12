<?php
$page="products";
include("header.php");

?>
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Product
        <small>Detail</small>
      </h1>
    </section>
    <section class="content container-fluid">
    <!-- for the new product button -->
    <?php
if(isset($_POST['createproduct']))
{
    
    $str='';
	$file_name = $_FILES['new_image']['name'];
	$file_type = $_FILES['new_image']['type'];
	$file_size = $_FILES['new_image']['size'];
    $title=$_POST['new_heading'];
    $ndesc=$_POST['new_desc'];
    if(strstr($file_name,".exe")){
        $str = '<div class="callout callout-danger"><p>.EXE files are not allowed</p></div>';
    }
    if($file_size > 350000)
    {
        $str = '<div class="callout callout-danger"><p>File is too large...</p></div>';
    }
    
		$target = "../images/product/".$file_name;
		
    if(move_uploaded_file($_FILES['new_image']['tmp_name'],$target))
    {
        $qry = "INSERT INTO stockproduct (p_heading,p_desc,p_image) VALUES ('".$title."','".$ndesc."','".$file_name."')";
        if($con->query($qry)){
            $str = '<div class="callout callout-success"><p>Product added successfully.</p></div>';
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
		
<div class="row">
	<div class="col-xs-12">
	  <div class="box">
		<div class="box-header">
		  <h3 class="box-title">Product Details</h3>
		  <div class="box-tools">
			<button class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal-new-event">Add New Product</button>
		  </div>
		</div>
		<!-- /.box-header -->
		<div class="box-body table-responsive no-padding">
		  <table class="table table-hover">
			<tbody><tr>
			  <th width="100px">ID</th>
			  <th width="150px">Image</th>
			  <th>Title</th>
			  <th width="200px">Description</th>
			  <th width="200px">Status</th>
			  <th width="100px">Action</th>
			</tr>
<?php
$qry = "SELECT * FROM stockproduct";
$result = $con->query($qry);
if($result->num_rows > 0){
	while($row = $result->fetch_assoc()){
?>
<tr>
	<td><?php echo $row['id']; ?></td>
	<td><div class="img-circle img-slider" style="background-image:url('../images/product/<?php echo $row['p_image']; ?>');"></div></td>
	<td><?php echo $row['p_heading']; ?></td>
	<td><?php echo $row['p_desc']; ?></td>
	<td><?php
	if($row['status'])
		echo '<span class="label label-success">Active</span>';
	else
		echo'<span class="label label-danger">Inactive</span>';
	?></td>
	<td><a href="product-detail.php?eid=<?php echo $row['id']; ?>" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a> <?php
	if($row['status'])
		echo '<a href="apis/productStatus.php?eid='.$row['id'].'&del=true" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>';
	else
		echo '<a href="apis/productStatus.php?eid='.$row['id'].'&rev=true" class="btn btn-sm btn-success"><i class="fa fa-undo"></i></a>';
	?></td>
</tr>
<?php
	}
}
?>			
		  </tbody></table>
		</div>
		

		<!-- /.box-body -->
	  </div>
	  <!-- /.box -->
	</div>
  </div>		

    </section>
  </div>
  
<div class="modal fade" id="modal-new-event">
  <div class="modal-dialog">
	<div class="modal-content">
	  <div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		  <span aria-hidden="true">&times;</span></button>
		<h4 class="modal-title">Fill Product details</h4>
	  </div>
	  <form action="" method="post" enctype="multipart/form-data">
	  <div class="modal-body">
            <div class="input-group">
                <span class="input-group-addon">Image</span>
                <input type="file" class="form-control" placeholder="Event Image" name="new_image">
            </div><br/>
            <div class="input-group">
                <span class="input-group-addon">Heading</span>
                <input type="text" class="form-control" placeholder="Event Title" name="new_heading">
            </div><br/>
            
            <div class="input-group">
                <span class="input-group-addon">Descrption</span>
                        <textarea id="fullDesc" placeholder="Full Description" name="new_desc"></textarea>
            </div>
	  </div>
	  <div class="modal-footer">
		<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancel</button>
		<button type="submit" class="btn btn-primary" name="createproduct">Add New Product</button>
	  </div>
	  </form>
	</div>
  </div>
</div>

<?php
include("footer.php");
?>