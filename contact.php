<?php 
$a=7;
require_once 'php/header.php' ?>


<div class="container-fluid contact">

    <div class="row a">
        <h4>Contact US</h4>
    </div>
    <div class="row">
        <div class="mapouter">
            <div class="gmap_canvas"><iframe width="1366" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=corespoly&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.embedgooglemap.net">embedgooglemap.net</a></div>
            <style>
                .mapouter {
                    text-align: right;
                    height: 500px;
                    width: 1366px;
                }

                .gmap_canvas {
                    overflow: hidden;
                    background: none !important;
                    height: 500px;
                    width: 1366px;
                   
                }

            </style>
        </div>
    </div>
    <hr>

    <div class="row" style="background-color:#f8b633">
        <h2 style="padding-left:42%;padding-top:20px;padding-bottom:20px">Contact US</h2>
    </div>
    <div class="row">
        <div class="container"><br>
            <div class="col-lg-8 m-auto d-block">
               	<form action="" onsubmit="return validation()" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label>Name:</label>
                      <input type="text" name="user" class="form-control" id="user" style="width:65%:" placeholder="please enter your Name">
	<span id="username" class="text-danger font-weight-bold"></span>

                    </div>
                    <div class="form-group">
                        <label>Email id:</label>
                      <input type="text" name="email12" class="form-control" id="emailid" placeholder="please enter your Email">
	<span id="email" class="text-danger font-weight-bold" ></span>
                    </div>
                    <div class="form-group">
                        <label>Message:</label>
                         <textarea id="message" name="message" style="width: 100%; height: 150px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px; border-radius:5px;" placeholder="Enter Message" autocomplete="off"></textarea>
                         <span id="textname" class="text-danger font-weight-bold"></span>
                
                    </div>
                    <div class="form-group">
<input type="submit" name="submit" value="submit" class="btn btn-success"/>

                </div>
                 
                </form>
            </div>

        </div>


    </div>
</div>
<?php
if(isset($_POST['submit']))
{
  
    $str='';
     $cname=$_POST['user'];
     $cemail=$_POST['email12'];
     $cmessage=$_POST['message'];
    
     $qry = "INSERT INTO contact (Name,Email,Message) VALUES ('".$cname."','".$cemail."','".$cmessage."')";
    if($con->query($qry)){
            $str = '<div class="callout callout-success" style="color:green; size:50%"><p>Message Submitted!!!!!!!!!!!!!!!!</p></div>';
        }else{
            $str = '<div class="callout callout-danger"><p>Some Error Occured!!!</p></div>';
        }    
    
		echo $str;

}
?>




<div class="hrseparate"></div>
<script type="text/javascript">

function validation(){

var user=document.getElementById('user').value;
    var email1=document.getElementById('emailid').value;
      var message1=document.getElementById('message').value;
   

if(user == "")
{
document.getElementById('username').innerHTML ="**please enter a user name";
return false;
}
if((user.length <= 1 ) || (user.length > 20))
{
document.getElementById('username').innerHTML ="**user name must be between 2 and 20";
return false;
}
if(!isNaN(user))
{
document.getElementById('username').innerHTML ="**Only character are allowed";
return false;
}   
if(email1 == "")
{
document.getElementById('email').innerHTML ="**please enter a email";
return false;
}
if(email1.indexOf('@') <= 0){
document.getElementById('email').innerHTML ="**please enter a valid email";
return false;
    }
if((email1.charAt(email1.length-4)!='.') && (email1.charAt(email1.length-3)!='.')){
document.getElementById('email').innerHTML ="**please enter a valid email";
return false;
    }
if(message1 == "")
{
document.getElementById('textname').innerHTML ="**please enter a Message";
return false;
}
if(message1.length < 20)
{
document.getElementById('textname').innerHTML ="**Message sholud be more than 20 character";
return false;
}
}
</script>


<?php
	include_once 'php/footer.php'
    ?>
