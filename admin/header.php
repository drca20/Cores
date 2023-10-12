<!DOCTYPE html>
<?php
session_start();
if(!isset($_SESSION['sid'])){
    header('Location: login.php');
}
if(isset($_POST['logout'])){
    session_destroy();
    header('Location: login.php');
}
require_once("dbconnect.php");
?>
<html>

<head>

    <link href="css/bootstrap-toggle.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <link rel="canonical" href="http://www.bootstraptoggle.com">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/8.3/styles/github.min.css" rel="stylesheet">
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin | CORES</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="css/ionicons.min.css">
    <!-- Theme style -->

    <link rel="stylesheet" href="plugins/datatables.net-bs/css/dataTables.bootstrap.min.css">

    <link rel="stylesheet" href="css/AdminLTE.min.css">
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
    <link rel="stylesheet" href="css/skins/skin-yellow.min.css">
    <link rel="stylesheet" href="css/skins/skin-purple.min.css">

    <link rel="stylesheet" href="css/style.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->

<body class="hold-transition skin-purple layout-boxed">
    <div class="wrapper">

        <!-- Main Header -->
        <header class="main-header">

            <!-- Logo -->
            <a href="index.php" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b>CPP</b></span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b>Admin</b>&nbsp;CORES</span>
            </a>

            <!-- Header Navbar -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
                <!-- Navbar Right Menu -->
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">

                        <!-- User Account Menu -->
                        <li class="dropdown user user-menu">
                            <!-- Menu Toggle Button -->
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <!-- The user image in the navbar-->
                                <img src="../images/users/<?php echo $_SESSION['image'] ?>" class="user-image" alt="User Image">
                                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                                <span class="hidden-xs"><?php echo $_SESSION['name'] ?></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- The user image in the menu -->
                                <li class="user-header">
                                    <img src="../images/users/<?php echo $_SESSION['image'] ?>" class="img-rounded" alt="User Image">

                                    <p>
                                        <?php echo $_SESSION['name'] ?>
                                        <small><?php echo $_SESSION['role'] ?></small>
                                    </p>
                                </li>
                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="" class="btn btn-default btn-flat">Profile</a>
                                    </div>
                                    <div class="pull-right">
                                        <form action="" method="post">
                                            <button type="submit" name="logout" class="btn btn-default btn-flat">Sign out</button>
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </div>
            </nav>
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">

            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">

                <!-- Sidebar user panel (optional) -->
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="../images/users/<?php echo $_SESSION['image'] ?>" class="img-circle" style="width:90px; height:45px;" alt="User Image">
                    </div>
                    <div class="pull-left info">
                        <p><?php echo $_SESSION['name'] ?></p>
                        <!-- Status -->
                        <small><?php echo $_SESSION['role'] ?></small>

                        <i class="fa fa-circle text-success"></i> Online
                    </div>

                </div>

                <!-- Sidebar Menu -->

                <ul class="sidebar-menu" data-widget="tree">
                    <li class="header">MAIN PAGES</li>
                    <!-- Optionally, you can add icons to <t>    </t>he links -->
                    <li class="treeview">
                        <a href=""><i class="fa fa-link "></i><span>PAGES CONTENT</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <?php 
        $qry = "SELECT * FROM pages WHERE status = 1";
$result = $con->query($qry);
if($result->num_rows > 0){ 
    while($row = $result->fetch_assoc()){
        $r=$row['pagename'];
            ?>
                            <li <?php if($page=="$r") echo 'class="active"'; ?>>
                                <a href="pagesdetail.php?eid=<?php echo $row['id']; ?>"><?php echo $row['pagename'];?></a></li>
                            <?php
    }
}
            
              ?>

                        </ul>
                    </li>
                </ul>
                <ul class="sidebar-menu" data-widget="tree">

                    <li <?php if($page=="slider") echo 'class="active"'; ?>><a href="slider.php"><i class="fa fa-image"></i> <span>Slider</span></a></li>
                    <li <?php if($page=="products") echo 'class="active"'; ?>><a href="product.php"><i class="fa fa-link"></i> <span>Products</span></a></li>
                  
                    <li <?php if($page=="users") echo 'class="active"'; ?>><a href="users.php"><i class="fa fa-user"></i> <span>Users</span></a></li>
                </ul>


                <!-- /.sidebar-menu -->

            </section>
            <!-- /.sidebar -->
        </aside>
