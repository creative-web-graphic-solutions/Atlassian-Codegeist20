<!doctype html>
<html lang="en" class="no-js">
<head>
    <title>IT Infrastructure Management - CIO's Desk</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,700' rel='stylesheet' type='text/css'>
    
	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/dashboardstyle.css"> <!-- Resource style -->
	<script src="js/modernizr.js"></script> <!-- Modernizr -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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

table {
  width: 100%;
}
table th {
  background-color: #4CAF50;
  color: white;
/*  padding: 5px;*/
  text-align: left;
}  
   
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

		<div class="content-wrapper" >

         <form action="updateproject.php" method="POST" style="margin-left: 5%; margin-right: 10%;">
         <table width="90%" border="5">
            <tr>
                <td colspan="2" align="center"><h2 style="font-size:30px; color:brown; margin-top: 4%; font: bold">Update Active Project Information</h2> </br> </td>
 
            </tr>
          <?php
                        $mysqli = new mysqli('localhost','cwgshosting_codegeist','codegeist20','cwgshosting_codegeist');
                        $result = $mysqli->query("SELECT * FROM Projects") or die($mysqli->error);
                ?>
             <tr>
                <td align="left" valign="top" style= "width:40%" style="margin-bottom: 2%" >Project name<span style="color:red">*</span></td>
                <td width="57%">
<!--                    <input type="text" value="" name="projectname" style="width: 80%" size="24"> </br> </br>  -->
                    <select name="activeproject" style="width100%">

                        <?php while ($row = $result->fetch_assoc()): ?>
                        <option value="<?php  echo $row['projectname'] ?>"><?php  echo $row['projectname'] ?></option>
                        <?php endwhile ?>
                        
                    </select>
             </br> </br> </td> 
            </tr> 
            <tr > 
<!--                <td align="left" valign="top">Start Date<span style="color:red">*</span></td>-->
<!--
                <?php 
                    $mysqli = new mysqli('localhost','cwgshosting_codegeist','codegeist20','cwgshosting_codegeist');
                    $sql = "select * from Projects where projectname = '$_POST[activeproject]' ";
                    $result = $mysqli->query($sql);            
                    $row = $result->fetch_assoc();            
                 ?>
-->
<!--                <td ><input type="date" value="<?php echo $row['startdate']; ?>" name="startdate">  </td>-->
               
            
            <td align="left" valign="top" style="width: 100%" >Test Date</td>
                 <?php
                $timezone = "Asia/Colombo";
                date_default_timezone_set($timezone);
                $today = date("Y-m-d");
                ?>
                <td><input type="date" name="testdate" value="<?php echo $today; ?>" name="currentdate" > </br> </br></td>
            </tr>
              
             <tr>
                  <td >Task&nbsp;or&nbsp;Milestones&nbsp;</td>
            <td>
                <input type="text" value="" name="task" size="20"> </br> </br></td>
                
                <td align="left" valign="top" width="41%">Cost&nbsp;of&nbsp;Project($)</td>
                
                <td><input type="text" name="costofproject" value="" multiple="" ></br> </td>
            </tr>
            <tr>
 
            <td align="left" valign="top"  > Items Produced</td>
            <td >
                <input type="text" value="" name="itemproduce" size="24"></td>
            <td align="left" valign="top" width="41%">Defects&nbsp;found</td>
                
                 <td><input type="text" name="defectsfound" value="" multiple="" ></br> </br> </td>

               
            </tr>
            <tr>
                <td align="left" valign="top" width="41%">Sample Tested<span style="color:red">*</span></td>
                <td width="57%">
                    <input type="number" value="" name="sampletest" size="24">
                    
</br> </br> </td>
            <td align="left" valign="top" width="41%">Status</td>
                
                <td> <select name="status">
                        <option value="Active">Active</option>
                        <option value="In-Active">Not Active</option>
                    </select>
                    </br> </br> </td>
            </tr>
            
            
             <tr>
                <td align="left" valign="top" width="41%" style="text-align: left">Project Overview &nbsp; </td>
                
                <td ><textarea id="overview" name="overview" rows="4" cols="50"  style="text-align: left">
                    </textarea></br> </br> </td>
            </tr>

            <tr>
                <td colspan="2">
                    <p align="center">
                       <input type="submit" name="submit" style="height: color:brown"  class="btn btn-info "value="Submit">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="reset" value="Reset All" class="btn btn-info " name="B5"></td>
            </tr>
 
        </table>
    </form>

		</div> <!-- .content-wrapper -->
	
        
<footer class="page-footer" >
 
      <div class="row">
        <div class="col-sm-6 ">
          <h5 class="white-text">Project IIM</h5>
          <p class="grey-text text-lighten-4">This project is being developed for codegiest hackathon. All tasks, progress and features are aligned to fit within this deadline.</p>
            <p style="color:white"> IIM Team</p>

        </div>
        <div class="col-sm-3 ">
          <h5 class="white-text">Settings</h5>
          <ul>
            <li><a class="white-text" href="#!" style="color: black">Home Page</a></li>
            
            
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