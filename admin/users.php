<?php
$page="users";
include("header.php");

?>
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        ADMIN
        <small>CORES ADMIN MEMBERS</small>
      </h1>
    </section>
    <section class="content container-fluid">
 <?php
    if(isset($_POST['create']))
{
	
	$str='';
	$file_name = date("m-d-H-i").$_FILES['P_Image']['name'];
	$file_type = $_FILES['P_Image']['type'];
	$file_size = $_FILES['P_Image']['size'];
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
        $qry = "INSERT INTO users (username,password,firstname,lastname,userrole,image) VALUES ('".$_POST['uname']."','".$_POST['upass']."','".$_POST['fname']."','".$_POST['lname']."','".$_POST['urole']."','".$_FILES['P_Image']['name']."')";
        if($con->query($qry)){
            $str = '<div class="callout callout-success"><p>Image has been uploaded successfully.</p></div>';
        }else{
            $str = '<div class="callout callout-danger"><p>Problem occurred while uploading image. Please try again.</p></div>';
        }        
    }
    else{
        $str = '<div class="callout callout-danger"><p>Problem occurred while uploading image. Please try again.</p></div>';
    }
    

		echo $str;
}?>
		
<div class="row">
	<div class="col-xs-12">
	  <div class="box">
		<div class="box-header">
		  <h3 class="box-title">ADMIN Details</h3>
		
		<div class="box-tools">
			<button class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal-new-user">Add new User</button>
        </div></div>
		<!-- /.box-header -->
		<div class="box-body table-responsive no-padding">
		  <table id="tblUsers" class="table table-hover">
			<thead>
			<tr>
			  <th>Image</th>
			  <th>User</th>
			  <th>Username</th>
			  <th>User Role</th>
			  <th width="100px">Status</th>
			  <th width="100px">Action</th>
			</tr>
			</thead>
			<tbody>
<?php
$qry = "SELECT * FROM users";
$result = $con->query($qry);
if($result->num_rows > 0){
	while($row = $result->fetch_assoc()){
?>
<tr>
	<td><div class="img-circle img-slider" style="background-image:url('../images/users/<?php echo $row['image']; ?>');"></div></td>
	<td><p><?php echo $row['firstname']." ".$row['lastname']; ?></p></td>
	<td><?php echo $row['username']; ?></td>
	<td><?php echo $row['userrole']; ?></td>
	<td><?php
	if($row['status'])
		echo '<span class="label label-success">Active</span>';
	else
		echo '<span class="label label-danger">Inactive</span>';
	?></td>
	<td><button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modal-user"><i class="fa fa-edit"></i></button> <?php
	if($row['status'])
		echo '<a href="apis/userStatus.php?uid='.$row['id'].'&del=true" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>';
	else
		echo '<a href="apis/userStatus.php?uid='.$row['id'].'&rev=true" class="btn btn-sm btn-success"><i class="fa fa-undo"></i></a>';
	?></td>
</tr>
<?php
	}
}
?>			
			</tbody>
		  </table>
		</div>
	  </div>
	</div>
  </div>		

    </section>
  </div>
<div class="modal fade" id="modal-new-user">
  <div class="modal-dialog">
	<div class="modal-content">
	  <div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		  <span aria-hidden="true">&times;</span></button>
		<h4 class="modal-title">Fill details</h4>
	  </div>
	  <form action="" method="post" enctype="multipart/form-data">
	  <div class="modal-body">
            <div class="input-group">
                <span class="input-group-addon">Image </span>
                <input type="file" class="form-control" name="P_Image" placeholder="Image">
            </div><br/>
            <div class="input-group">
                <span class="input-group-addon">first name </span>
                <input type="text" class="form-control" name="fname" placeholder="First Name">
            </div><br/>
            <div class="input-group">
                <span class="input-group-addon">Last Name </span>
                <input type="text" class="form-control" name="lname" placeholder="Last Name">
            </div><br/>
             <div class="input-group">
                <span class="input-group-addon">User Role </span>
                <input type="text" class="form-control" name="urole" placeholder="User Role">
            </div><br/>
             <div class="input-group">
                <span class="input-group-addon">User Name </span>
                <input type="text" class="form-control" name="uname" placeholder="User Name">
            </div><br/>
             <div class="input-group">
                <span class="input-group-addon">password </span>
                <input type="text" class="form-control" name="upass" placeholder="Password">
            </div><br/>
           
	  </div>
	  <div class="modal-footer">
		<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancel</button>
		<button type="submit" class="btn btn-primary" name="create">ADD user</button>
	  </div>
	  </form>
	</div>
  </div>
</div>

<div class="modal fade" id="modal-user">
  <div class="modal-dialog">
	<div class="modal-content">
	  <div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		  <span aria-hidden="true">&times;</span></button>
		<h4 class="modal-title">Default Modal</h4>
	  </div>
	  <div class="modal-body">
		<p>One fine body&hellip;</p>
	  </div>
	  <div class="modal-footer">
		<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
		<button type="button" class="btn btn-primary">Save changes</button>
	  </div>
	</div>
  </div>
</div>
 
<?php
include("footer.php");
?>
<script src="plugins/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="plugins/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script>
  $(function () {
    $('#tblStudent').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    });
  })
</script>