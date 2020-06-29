<!doctype html>
<html lang="en" class="no-js">
<head>
    <title>IT Infrastructure Management - CIO's Desk</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,700' rel='stylesheet' type='text/css'>
    <script src="js/tabcontent.js" type="text/javascript"></script>
    <link href="css/resources.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/dashboardstyle.css"> <!-- Resource style -->
	<script src="js/modernizr.js"></script> <!-- Modernizr -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/tabcontent.js"> </script>
    <style>
     *{margin: 0px; padding: 0px; font-size: 15px; list-style: none}
        html, body{ background-color: #16F5E8; width: 100%; height:100%; position: relative;}
        .header{ height:20%; background:blue; position: relative;}
        .page-footer{
        position: fixed;
  margin-left: 0;
  bottom: 0;
  width: 100%;
  background-color: blue;
  color: white;
/*  text-align: center;*/
  padding-left: 14%;            
    }    
        
/*        .footer{ height:35%; background:blue;bottom:0; position: absolute; width: 100%}*/
        
*/

   
    </style>    
     	
	
</head>
<body>
	<header class="cd-main-header">
<!--		<a href="#0" class="cd-logo"><img src="img/cd-logo.svg" alt="Logo"></a>-->
		<a id="logo-container" href="index.html" class="brand-logo" style="color: white">IIM Logo</a>
		<div class="cd-search is-hidden">
			<form action="#0">
				<input type="search" placeholder="Search..." >
			</form>
		</div> <!-- cd-search -->

		<a href="#0" class="cd-nav-trigger">Menu<span></span></a>

		<nav class="cd-nav">
			<ul class="cd-top-nav">
				<li><a href="email.html">Mail</a></li>
				<li><a href="Notification.html">Notification</a></li>
				<li class="has-children account">
					<a href="#0">
						<img src="img/cd-avatar.png" alt="avatar">
						My Profile
					</a>

					<ul>

						<li><a href="#0">Edit Account</a></li>
						<li><a href="#0">Settings</a></li>
						<li><a href="#0">Logout</a></li>
					</ul>
				</li>
			</ul>
		</nav>
	</header> <!-- .cd-main-header -->

<div class="dashboard-container">    
	<main class="cd-main-content">
		<nav class="cd-side-nav">
			<ul>
						<li class="cd-label">Main</li>
                	<li class="has-children overview">
					<a href="employeelist.php">Employee</a>
					
					<ul>
						<li><a href="employeeadd.html">Add Employee</a></li>
						
					</ul>
				</li>
				<li class="has-children overview">
					<a href="resources.php">Resources</a>
					
					<ul>
						<li><a href="Projects.html">Add Project</a></li>
						<li><a href="equipments.html">Add Equipment</a></li>
                        
					</ul>
				</li>
			    <li class="has-children overview">
					<a href="#0">User Management</a>
					
					<ul>
						<li><a href="#0">Add New User</a></li>
				   </ul>
				</li>
                <li class="has-children overview">
					<a href="#0">Groups Management</a>
					
					<ul>
						<li><a href="#0">Create New Group</a></li>
						
					</ul>
				</li>
                <li class="has-children overview">
					<a href="#0">Apps & Integration</a>
					
					<ul>
						<li><a href="#0">Installed Apps</a></li>
						
					</ul>
				</li>

				<li class="has-children overview">
					<a href="#0">My Contacts</a>
					
					<ul>
						<li><a href="#0">Supplier</a></li>
						<li><a href="#0">Vendor</a></li>
						<li><a href="#0">Partnership</a></li>
                        <li><a href="#0">B2B</a></li>                        
					</ul>
				</li>
			
            <li class="has-children overview">
					<a href="#0">Ticketing & Support</a><ul>
                <li></li>
                </ul>			
					
				</li>
            <li class="has-children overview">
					<a href="#0">Project Deployment</a>
					
					<ul>
						<li><a href="#0">Active Projects</a></li>
						<li><a href="#0">Project Managers</a></li>
						<li><a href="#0">Project Health</a></li>
                        <li><a href="#0">Value</a></li>
					</ul>
				</li>

			
<!--
			<ul>
				<li class="cd-label">Action</li>
				<li class="action-btn"><a href="#0">+ Button</a></li>
			</ul>
-->
		</nav>

		<div class="content-wrapper">
            <?php if (isset($_SESSION['message'])): ?>
            <div class="alert alert-<?=$_SESSION['msg_type']?>">
                <?php 
                    echo $_SESSION['message']; 
                    unset($_SESSION['message']);
                ?>
            </div>
        <?php endif ?>
			  <div style="width: 100%; margin-top: : 0; padding: 2%;">
        <ul class="tabs" data-persist="true">
            <li><a href="#view1">Projects</a></li>
            <li><a href="#view2">Peoples</a></li>
            <li><a href="#view3">Equipments</a></li>
            <li><a href="#view4">Schedules</a></li>
        </ul>
        <div class="tabcontents">
            <div id="view1">
                <b>Projects</b>
            
                 <?php
                        $mysqli = new mysqli('localhost','cwgshosting_codegeist','codegeist20','cwgshosting_codegeist');
                        $result = $mysqli->query("SELECT * FROM Projects") or die($mysqli->error);
                ?>
               		<table class="table justify-content-center" style="background-color:white">
                    <thead style="background-color:green;color:white;font-weight:bold">
						<tr>
							<th>Project Name</th>
							<th>Start Date</th>
							<th>Deadline</th>
							<th>Schedule</th>
							<th>Actions</th>
						</tr>
					</thead>
            <?php
                while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row['projectname']; ?></td>
                        <td><?php echo $row['startdate']; ?></td>
                        <td><?php echo $row['enddate']; ?></td>
                        <td><?php echo $row['schedule']; ?></td>
                        <td>
                            
                           <button name="edit" class="btn btn-info"> <a href=""  data-toggle="modal" data-dismiss="modal" style="color: brown" >Edit</a> </button>
                        
                        <button name="delete" class="btn btn-info " ><a href="resources.php?delete=<?php echo $row['id']; ?>" style="color: brown">Delete</a> </button> 
                        </td>
                    </tr>
                <?php endwhile; ?>    
                </table>
                
            </div>
            <div id="view2">
                <b>Peoples</b>
                <?php
                        $mysqli = new mysqli('localhost','cwgshosting_codegeist','codegeist20','cwgshosting_codegeist');
                        $result = $mysqli->query("SELECT employees.employeename, equipments.purpose, employees.contactnumber, employees.designation FROM equipments, employees where equipments.empid = employees.employeeno") or die($mysqli->error);
                ?>
               		<table class="table justify-content-center" style="background-color:white">
                    <thead style="background-color:green;color:white;font-weight:bold">
						<tr>
							<th>Name</th>
							<th>Project Assigned</th>
							<th>Contact No.</th>
							<th>Role</th>
							<th>Actions</th>
						</tr>
					</thead>
            <?php
                while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row['employeename']; ?></td>
                        <td><?php echo $row['purpose']; ?></td>
                        <td><?php echo $row['contactnumber']; ?></td>
                        <td><?php echo $row['designation']; ?></td>
                        <td>
                            
                           <button name="edit" class="btn btn-info"> <a href=""  data-toggle="modal" data-dismiss="modal" style="color: brown" >Edit</a> </button>
                        
                        <button name="delete" class="btn btn-info " ><a href="resources.php?delete=<?php echo $row['id']; ?>" style="color: brown">Delete</a> </button> 
                        </td>
                    </tr>
                <?php endwhile; ?>    
                </table>
            </div>
            <div id="view3">
                <b>Equipments</b>
                <?php
                        $mysqli = new mysqli('localhost','cwgshosting_codegeist','codegeist20','cwgshosting_codegeist');
                        $result = $mysqli->query("SELECT * FROM equipments") or die($mysqli->error);
                ?>
               		<table class="table justify-content-center" style="background-color:white">
                    <thead style="background-color:green;color:white;font-weight:bold">
						<tr>
							<th>System Purpose</th>
							<th>Job Location</th>
							<th>Equipment Needed</th>
							<th>Total Equipments</th>
							<th>Actions</th>
						</tr>
					</thead>
            <?php
                while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row['purpose']; ?></td>
                        <td><?php echo $row['joblocation']; ?></td>
                        <td><?php echo $row['equipmentneed']; ?></td>
                        <td><?php echo $row['availableequip']; ?></td>
                        <td>
                            
                           <button name="edit" class="btn btn-info"> <a href=""  data-toggle="modal" data-dismiss="modal" style="color: brown" >Edit</a> </button>
                        
                        <button name="delete" class="btn btn-info " ><a href="resources.php?delete=<?php echo $row['id']; ?>" style="color: brown">Delete</a> </button> 
                        </td>
                    </tr>
                <?php endwhile; ?>    
                </table>
                
            </div>
            <div id="view4">
                <b>Schedules</b>
                <?php
                        $mysqli = new mysqli('localhost','cwgshosting_codegeist','codegeist20','cwgshosting_codegeist');
                        $result = $mysqli->query("SELECT * FROM equipments") or die($mysqli->error);
                ?>
               		<table class="table justify-content-center" style="background-color:white">
                    <thead style="background-color:green;color:white;font-weight:bold">
						<tr>
							<th>Project Name(hrs/day)</th>
							<th>Sun</th>
							<th>Mon</th>
							<th>Tue</th>
							<th>Wed</th>
                            <th>Thu</th>
                            <th>Fri</th>
                            <th>Sat</th>
                            <th>Actions</th>
						</tr>
					</thead>
            <?php
                while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row['purpose']; ?></td>
                        <td><?php echo $row['sun']; ?></td>
                        <td><?php echo $row['mon']; ?></td>
                        <td><?php echo $row['tue']; ?></td>
                        <td><?php echo $row['wed']; ?></td>
                        <td><?php echo $row['thu']; ?></td>
                        <td><?php echo $row['fri']; ?></td>
                        <td><?php echo $row['sat']; ?></td>
                        <td>
                            
                           <button name="edit" class="btn btn-info"> <a href=""  data-toggle="modal" data-dismiss="modal" style="color: brown" >Edit</a> </button>
                        
                        <button name="delete" class="btn btn-info " ><a href="resources.php?delete=<?php echo $row['id']; ?>" style="color: brown">Delete</a> </button> 
                        </td>
                    </tr>
                <?php endwhile; ?>    
                </table>
                
            </div>
        </div>
    </div>
                    
            
		</div> <!-- .content-wrapper -->
	
        
<footer class="page-footer" >
 
      <div class="row">
        <div class="col-sm-6 ">
          <h5 class="white-text">Project IIM</h5>
          <p class="grey-text text-lighten-4">This project is being developed for codegiest hackathon. All tasks, progress and features are aligned to fit within this deadline.</p>


        </div>
        <div class="col-sm-3 ">
          <h5 class="white-text">Settings</h5>
          <ul>
            <li><a class="white-text" href="#!" style="color: black">Home Page</a></li>
            <li><p style="color:white"> IIM Team</p></li>
            
          </ul>
        </div>
       
      </div>
</footer>    
</main> <!-- .cd-main-content -->
</div>
     
 
      
<script src="js/jquery-2.1.4.js"></script>
<script src="js/jquery.menu-aim.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
</body>
</html>