<?php session_start();
if($_SESSION['username']!="")
{
$username=$_SESSION['username'];
$userid=$_SESSION['id'];
}
else
{
header('location:login.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Application - Hotel Booking</title>

    <!-- Bootstrap Core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" rel="stylesheet">
    <link href="assets/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="assets/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="assets/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="assets/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    

	 

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Application</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User User: <b> <?php echo $username=$_SESSION['username'];?></a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <!-- li>
                            <a href="#"><i class="fa fa-shopping-cart fa-fw"></i> Purchace<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="purchaseform.php">Purchace Form</a>
                                </li>
                                <li>
                                    <a href="purchasepay.php">Purchace Payment</a>
                                </li>
                            </ul>
                            
                        </li -->
						
						
						<li>
                            <a href="#"><i class="fa fa-users fa-fw"></i> Guests<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
<!--
								<li>
                                    <a href="register-guest.php"> Register Guest</a>
                                </li>
-->
                                <li>
                                    <a href="current-guests.php"> Manage Guest</a>
                                </li>
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
						<li>
                            <a href="#"><i class="fa fa-file-word-o fa-fw"></i> Reports<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
								<li>
                                    <a href="bazar-list.php"> Bazar List</a>
                                </li>
                                <li>
                                    <a href="report-invoice.php"> Invoice Report</a>
                                </li>
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
						
						<li>
                            <a href="#"><i class="fa fa-calendar fa-fw"></i> Bazars <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
								<li>
                                    <a href="add-bazar.php"> Add Bazar</a>
                                    <a href="manage-bazar.php"> Manage Bazar</a>
                                </li>
                                                               
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>	
                           
                           <li>
                            <a href="#"><i class="fa fa-users fa-fw"></i> Staff <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
								<li>
                                    <a href="add-staff.php"> Create New staff</a>
                                    <a href="view-staff.php"> Manage staff</a>
                                </li>
                                <li>
                                    <a href="salarysheet.php"> Salary Sheet</a>
                                  
                               
                               
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>  
                           <li>
                            <a href="#"><i class="fa fa-users fa-fw"></i> Restaurent <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
								<li>
                                    <a href="hotel-invoice.php"> Create Invoice</a>
                                    <a href="report-hotel-invoice.php"> Sales Report</a>
                                </li>
                                
                                  
                               
                               
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>  
                           <li>
                            <a href="#"><i class="fa fa-gear fa-fw"></i> Settings <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
								<li>
                                    <a href="new-room.php"> Create New Room</a>
                                    <a href="manage-room.php"> Manage Rooms</a>
                                </li>
                                <li>
                                    <a href="new-room-category.php"> Create New Category</a>
                                    <a href="manage-category.php"> Manage Rooms Category</a>
                                </li>
                                 <li>
                                    <a href="new-food.php"> Create Food Item</a>
                                    <a href="manage-food.php"> Manage Food Items</a>
                                </li>
                                 <li>
                                    <a href="new-bazar-item.php"> Create Bazar Item</a>
                                    <a href="manage-bazar-item.php"> Manage Bazar Items</a>
                                </li>
                               
                                
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
						
						
						
                        <li>
                            <a href="developers.php"><i class="fa fa-cogs fa-fw"></i> Developers</a>
                        </li>
                    </ul>
					
                </div>
				
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">