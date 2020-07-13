<!doctype html>
<html lang="en" class="no-js">
<head>
    <title>IT Infrastructure Management - CIO's Desk</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
    
       <?php
                        $mysqli = new mysqli('localhost','cwgshosting_codegeist','codegeist20','cwgshosting_codegeist');
                        $result = $mysqli->query("SELECT * FROM projectcost where projectname = '$activeprojectgraph'") or die($mysqli->error);
                
                ?>
<!--
        var data = google.visualization.arrayToDataTable([
          ['Cost of Project', 'Total Cost'],
          ['Pre-Planning',     11],
          ['Feasibility',      2],
          ['Operating Cost',  2],
          ['Risk Analysis', 2],
          ['Design & Development', 2],    
          ['Maintenance',    7]
        ]);
--> =
    
 <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
        
        <?php
            $preplan = 12;
            $feasiblity = 2;
            $operatecost =2;
            $riskanalysis =2;
            $designdev = 2;
        
        ?>

      function drawChart() {

       var data = google.visualization.arrayToDataTable([
          ['Cost of Project', 'Total Cost'],
          ['Pre-Planning',     11],
          ['Feasibility',      2],
          ['Operating Cost',  2],
          ['Risk Analysis', 2],
          ['Design & Development', 2],    
          ['Maintenance',    7]
        ]);
        var options = {
          title: 'Total Cost of the Project'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
     	
        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Actual Value', 'Earned Value', 'Planned Value'],
          ['2015',  10000,      12000,    12000],
          ['2016',  11700,      11000,    11000],
          ['2017',  6600,       11000,   10000],
          ['2018',  10300,      14000,    15000],
          ['2019',  15000,      20000,    18000],    
        ]);

        var options = {
          title: 'Project Performance',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>

    
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
            <h3 style="text-align:center"> Enterprise Project Overview</h3>
			  <div style="width: 100%; margin-top: : 0; padding: 2%;">
                  <a href="activeproject.php" class="btn btn-success" ><i class="material-icons">&#xE147;</i> <span style="float:right" >Active Project</span></a>
        <ul class="tabs" data-persist="true">
            <li><a href="#view1">Active Projects</a></li>
            <li><a href="#view2">Projects Managers</a></li>
            <li><a href="#view3">Project Health</a></li>
            <li><a href="#view4">Value</a></li>
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
							<th>%of Completion</th>
							<th>Owner</th>
							<th>Tasks</th>
                            <th>Status</th>
                            <th>Milestones</th>
							
						</tr>
					</thead>
            <?php
                while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row['projectname']; ?></td>
                        <?php 
                            $percitemproduce = (1 - ($row[itemproduced] / $row[task])) *100;
                            $complete = (100 - $percitemproduce);
                            $remaintask = (100 - $complete);
                        ?>
                        <td><meter id="complete" value="<?php echo $complete; ?>" min="0" max="100"></meter><?php echo number_format($complete,2); ?>%</td>
                        <td><?php echo $row['owner']; ?></td>
                        <td><?php echo $row['task']; ?></td>
                        <td><?php echo $row['projectstatus']; ?></td>
                        <td><meter id="remaintask" style="color:red" value="<?php echo $remaintask; ?>" min="0" max="100"></meter><?php echo number_format($remaintask,2); ?>% </td>
                       
                    </tr>
                <?php endwhile; ?>    
                </table>
                
            </div>
            <div id="view2">
                <b>Project Managers</b>
               <?php
                        $mysqli = new mysqli('localhost','cwgshosting_codegeist','codegeist20','cwgshosting_codegeist');
                        $result = $mysqli->query("SELECT * FROM Projects, equipments where Projects.projectname = equipments.purpose") or die($mysqli->error);
                ?>
               		<table class="table justify-content-center" style="background-color:white">
                    <thead style="background-color:green;color:white;font-weight:bold">
						<tr>
							<th>Project Name</th>
							<th>Due Date</th>
							<th>%&nbsp;Complete</th>
							<th>Project Manager</th>
                            <th>Risk(FR)</th>
                            <th>Schedules(WN)</th>
                            <th>Budget(EV)</th>
                            <th>Quality(DPMO)</th>
							
						</tr>
					</thead>
            <?php
                while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row['projectname']; ?></td>
                        <td><?php echo $row['enddate']; ?></td>
                        <?php 
                            $percitemproduce = (1 - ($row[itemproduced] / $row[task])) *100;
                            $complete = (100 - $percitemproduce);
                            $remaintask = (100 - $complete);                                                        
                                                    
                        ?>
                        <td><meter id="complete" value="<?php echo $complete; ?>" min="0" max="100"></meter><?php echo number_format($complete,2); ?>%</td>
                        <td><?php echo $row['projectassign']; ?></td>
                        <?php 
                             
                         $workpercentage = (($row['itemproduced']/ $row['task']) *100);
                         $risk = (100 - $workpercentage);
                         if ($risk < "50" )
                        ?>
                        <td><span id="bulletsignalgreen" style=" font-size:40px; text-align:center">&#8226;</span><?php echo number_format($risk,2); ?>%</td>
                        
                        <?php 
                         
                         $noofworking= (($row['mon'] + $row['tue'] + $row['wed'] + $row['thu'] + $row['fri'] + $row['sat'] + $row['sun']) /7);
                         $noofneeded = ($row['schedule'] - $noofworking);
                                            
                        ?>
                        <td><span id="bulletsignalreds" style=" font-size:40px;text-align:center">&#8226;</span><?php echo number_format($noofneeded,2); ?></td>
                        <?php $atualcost= $row['costofproject'];
                              $plannedvalue = 0;
                              $earnedvalue= ($complete * $row['costofproject'])/100; 
                              if ($earnedvalue > $row['costofproject'])
                                  
                        ?>
                        <td><span id="bulletsignalgreen" style=" font-size:40px;text-align:center">&#8226;</span><?php echo  number_format($earnedvalue,2); ?></td>
                        <?php 
                        $defectsfound = $row['defectsfound'];
                        $sampletested = $row['sampletested'];
                        ($DPMO = ($defectsfound / ($sampletested * $defectsfound) * 1000000)); 
                        if ($DPMO < "10000")
                        ?>                        
                        <td> <span id="bulletsignalyellow" style="font-size:40px;text-align:center">&#8226;</span><?php echo number_format($DPMO,2); ?></td>
                                           
                    </tr>
                <?php endwhile; ?>    
                </table>
            </div>
            <div id="view3">
                <div class="projecthealth">
                <span style="float:left">Project Name</span>
                <td width="57%">
<!--                    <input type="text" value="" name="status" size="24">-->
                    <?php
                        $mysqli = new mysqli('localhost','cwgshosting_codegeist','codegeist20','cwgshosting_codegeist');
                        $result = $mysqli->query("SELECT * FROM Projects") or die($mysqli->error);
                ?>
             
                            <select name="activeprojectgraph" style="width:30%">

                        <?php while ($row = $result->fetch_assoc()): ?>
                        <option value="<?php  echo $row['projectname'] ?>"><?php  echo $row['projectname'] ?></option>
                        <?php endwhile ?>
                        
                    </select>
            
                <button class="btn success" style="float:right"><a href="projectcost.html">Project Cost Calculation</a></button> </br>
                <?php
                        $mysqli = new mysqli('localhost','cwgshosting_codegeist','codegeist20','cwgshosting_codegeist');
                        $result = $mysqli->query("SELECT * FROM equipments") or die($mysqli->error);
                ?>
            </div> </br>
               		    <div id="piechart" style="width: 100%; height: 600px"></div>

                
            </div>
            <div id="view4">
                <div class="projecthealth">
                <span style="float:left">Project Name</span>
                <td width="57%">
<!--                    <input type="text" value="" name="status" size="24">-->
                    <?php
                        $mysqli = new mysqli('localhost','cwgshosting_codegeist','codegeist20','cwgshosting_codegeist');
                        $result = $mysqli->query("SELECT * FROM Projects") or die($mysqli->error);
                ?>
             
                            <select name="activelinegraph" style="width:30%">

                        <?php while ($row = $result->fetch_assoc()): ?>
                        <option value="<?php  echo $row['projectname'] ?>"><?php  echo $row['projectname'] ?></option>
                        <?php endwhile ?>
                        
                    </select>
            
               
            </div> </br>
               		    <div id="curve_chart" style="width: 900px; height: 500px"></div>

            </br> </br>
                
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
<script>
    document.getElementById("bulletsignalyellow").style.color = "yellow";
    document.getElementById("bulletsignalgreen").style.color = "green";
    document.getElementById("bulletsignalreds").style.color = "red";    
</script>    
</body>
</html>