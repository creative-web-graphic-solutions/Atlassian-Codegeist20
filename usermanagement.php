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
		<a id="logo-container" href="index.html" class="brand-logo" style="color: white"><img src="img/IIM.jpg"></a>
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
                	<li class="has-children ">
					<a href="employeelist.php"><img src="img/employeees.jpg" style="width: 35px; border-radius: 50%;">&nbsp;&nbsp;Employees </a>
					
					<ul>
						<li><a href="employeeadd.html">Add Employee</a></li>
						
					</ul>
				</li>
				<li class="has-children overview">
					<a href="resources.php"><img src="img/resource.jpg" style="width: 35px; border-radius: 50%;">&nbsp;&nbsp;Resources</a>
					
					<ul>
						<li><a href="Projects.html">Add Project</a></li>
						<li><a href="equipments.php">Add Equipment</a></li>
                        
					</ul>
				</li>
			    <li class="has-children overview">
					<a href="usermanagement.php"><img src="img/usermgt.jpg" style="width: 35px; border-radius: 50%;">&nbsp;&nbsp;User Management</a>
					
					
				</li>
                <li class="has-children overview">
					<a href="groupmanagement.php"><img src="img/groupmgt.jpg" style="width: 35px; border-radius: 50%;">&nbsp;&nbsp;Group View</a>
					
					<ul>
						<li><a href="addgroup.html">Create New Group</a></li>
						
					</ul>
				</li>
                <li class="has-children overview">
					<a href="appsintegration.html"><img src="img/appintegrate.jpg" style="width: 35px; border-radius: 50%;">&nbsp;&nbsp;Apps & Integration</a>
					
					<ul>
						<li><a href="appinstall.html">Installed Apps</a></li>
						
					</ul>
				</li>

				<li class="has-children overview">
					<a href="mycontacts.php"><img src="img/mycontacts.jpg" style="width: 35px; border-radius: 50%;">&nbsp;&nbsp;My Contacts</a>
					<ul>
						<li><a href="addcontacts.html">Add Contacts</a></li>
						                   
					</ul>
				</li>
			
            <li class="has-children overview">
					<a href="mysupportticket.html"><img src="img/ticket.jpg" style="width: 35px; border-radius: 50%;">&nbsp;&nbsp;Ticketing & Support</a><ul>
                <li></li>
                </ul>			
					
				</li>
            <li class="has-children overview">
					<a href="projectdeployment.php"><img src="img/projectview.jpg" style="width: 35px; border-radius: 50%;">&nbsp;&nbsp;Project View</a>
					<ul>
						<li><a href="activeproject.php">Add Active Project</a></li>
						
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
            <?php require_once 'resourceprocess.php'; ?>
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
            <li><a href="#view1">Add User</a></li>
            <li><a href="#view2">Imported Users from Active directory</a></li>
            
        </ul>
        <div class="tabcontents">
            
            <div id="view1">
                <h3>Add User Details</h3>
                <form action="adduser.php" method="POST" enctype="multipart/form-data" style="margin-left: 20%; ">
        <table align="center" width="60%" height="100%"  cellspacing="3" cellpadding="5" border="5">
        
             <tr>
                <td align="left" valign="top" width="41%" >User Name<span style="color:red">*</span></td>
                <td width="57%">
                    <input type="text" value="" name="username"  size="24"> </br> </br></td> 
            </tr>
            <tr>
                <td align="left" valign="top" width="41%" >User  id<span style="color:red">*</span></td>
                <td width="57%">
                    <input type="text" value="" name="userid" required size="24"> </br> </br></td> 
            </tr>
            <tr>
                <td align="left" valign="top" width="41%">Description<span style="color:red">*</span></td>
 
                <td width="57%"><textarea name="description" rows="4" cols="26"  style="text-align: left"></textarea></br> </br></td>
            </tr>
           <tr>
                <td align="left" valign="top" width="41%">Group To</td>
                <td width="57%"> <input type="text" value="" name="groupto" size="24"></br> </br></td>
  
            </tr>
            <tr>
 
            <td align="left" valign="top" width="41%">Email</td>
            <td width="57%">
                <input type="email" value="" name="email" size="24"></br> </br></td>
            </tr>
              <tr>
 
            <td align="left" valign="top" width="41%">Role</td>
            <td width="57%">
                <input type="text" value="" name="role" size="24"></br> </br></td>
            </tr>
            
           
             <tr>
                <td align="left" valign="top" width="41%">Photo</td>
                
                <td width="57%"><input type="file" name="userfile[]" value="" multiple="" ></br> </td>
            </tr> 
            
            
 
            <tr>
                <td colspan="2">
                    <p align="center">
                       <input type="submit" name="submit" style="height: color:brown"  class="btn btn-info "value="Submit">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="reset" value="Reset All" class="btn btn-info " name="B5"></td>
            </tr>
 
        </table>
    </form>
</br></br></br></br></br>
            </div>
                        <div id="view2">
                <b>Active Users</b>
            
                 <?php
                        $mysqli = new mysqli('localhost','cwgshosting_codegeist','codegeist20','cwgshosting_codegeist');
                        $result = $mysqli->query("SELECT * FROM usermgt") or die($mysqli->error);
                ?>
               		<table class="table justify-content-center" style="background-color:white">
                    <thead style="background-color:green;color:white;font-weight:bold">
						<tr>
							<th>User Name</th>
							<th>Emp Id</th>
							<th>Description</th>
                            <th>Email Id</th>
							<th>Role</th>
							<th>Actions</th>
						</tr>
					</thead>
            <?php
                while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row['empname']; ?></td>
                        <td><?php echo $row['empid']; ?></td>
                        <td><?php echo $row['description']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['role']; ?></td>
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