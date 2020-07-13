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
 
    </style>    
    
<script>
function myFunction() {
  var x = document.getElementById("replycontainer");
//  document.getElementById("clikedid").innerHTML = localStorage.getItem("textvalue");
      
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
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
			<h3>My Closed Ticket</h3>
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color:#FBDFDB; border-bottom-style: outset">
                    <span > This Ticket is Closed. You may reply to this ticket to reopen it</span>
                </div>
                
            </div>    
             <div class="panel-heading" style="background-color:lightsteelblue; border: 15px black;" onclick="myFunction()">
                
                    <span style= float: left> Reply</span>
                    <span style="float: right; font-weight:1000; font-size:20px"> + </span>
                </div>    
            </br>
         <div class="panel panel-default">
                    <div class="panel-heading">
                        <?php
                 $mysqli = new mysqli('localhost','cwgshosting_codegeist','codegeist20','cwgshosting_codegeist');
                $result = $mysqli->query("SELECT * FROM supporttickets") or die($mysqli->error);
                ?>
               		<table class="table justify-content-center" style="background-color:white">
                     <?php                    
                while ($row = $result->fetch_assoc()):     
                        if ($row['status'] == "Closed"){ ?>
                    <thead style="background-color:#cccccc;color:black;font-weight:bold">
<!--				    <span id="clickedid" type="hidden">-->
                        		<th>Department: <?php echo $row['department']; ?></th>
                                <th style="float:right"><?php echo  $row['lastupdate']; ?></th>
					</thead>
                             
                    <tr>                        
                        <td > Description: <?php echo $row['description']; ?></td>   
                    </tr>                   
                        
                <?php  } endwhile; ?>    
                </table>
                        
                     </div>
                </div>    
          <div id="replycontainer" style="display: none">
            <form method="post" action="replyticket.php" enctype="multipart/form-data" role="form" style="padding-left: 20px; height: 150rem; background-color: lightgray">
<!--                    <input type="hidden" name="token" value="77d01df625b930d9b50a321b58595343102b92cc" />-->
        
            <?php
                 $mysqli = new mysqli('localhost','cwgshosting_codegeist','codegeist20','cwgshosting_codegeist');
                $result = $mysqli->query("SELECT * FROM supporttickets ") or die($mysqli->error);
                
                ?>        
        <div class="row" >
        <div class="form-group col-sm-4">
            <label for="inputName">Name</label>
            <?php                    
                while ($row = $result->fetch_assoc()):     
                        if ($row['status'] == "Closed"){ ?>
            <input type="text" name="firstname" value="<?php echo $row['Name']; ?>" class="form-control " />
        </div>
        <div class="form-group col-sm-5">
            <label for="inputEmail">Email Address</label>
            <input type="email" name="email" value="<?php echo $row['email']; ?>" class="form-control " />
        </div>
     
        <div class="form-group col-sm-10">
            <label for="inputSubject">Subject</label>
            <input type="text" name="subject" value="<?php echo $row['subject']; ?>" class="form-control" />
        </div>
    
        <?php  } endwhile; ?>    
        <div class="form-group col-sm-3">
            <label for="inputDepartment">Department</label>
            <select name="deptid" id="inputDepartment" class="form-control" onchange="refreshCustomFields(this)">
                                    <option value="13" selected="selected">
                        Technical Support
                    </option>
                                    <option value="14">
                        Billing Support
                    </option>
                                    <option value="15">
                        Sales Team
                    </option>
                                    <option value="22">
                        Trial Request
                    </option>
                            </select>
        </div>
                    <div class="form-group col-sm-5">
                <label for="inputRelatedService">Related Service</label>
                <select name="relatedservice" id="inputRelatedService" class="form-control">
                    <option value="">None</option>
                                            <option value="D2021">
                            Domain - creativewebgraphic.com (Active)
                        </option>
                                            <option value="D2065">
                            Domain - feature.net.in (Cancelled)
                        </option>
                                    </select>
            </div>
                <div class="form-group col-sm-3">
            <label for="inputPriority">Priority</label>
            <select name="urgency" id="inputPriority" class="form-control">
                <option value="High">
                    High
                </option>
                <option value="Medium" selected="selected">
                    Medium
                </option>
                <option value="Low">
                    Low
                </option>
            </select>
        </div>
            
            <div class="form-group">
                
        <div class="md-editor" id="1593913545371">
            <div class="md-header btn-toolbar">
            
            <div class="btn-group">
                <label for="inputMessage" style="float: left">Message &nbsp;</label>
                <button class="btn-default btn-sm btn" type="button" title="Bold" tabindex="-1" data-provider="bootstrap-markdown" data-handler="bootstrap-markdown-cmdBold" data-hotkey="Ctrl+B">
                
                <span class="glyphicon glyphicon-bold"></span> </button>
                <button class="btn-default btn-sm btn" type="button" title="Italic" tabindex="-1" data-provider="bootstrap-markdown" data-handler="bootstrap-markdown-cmdItalic" data-hotkey="Ctrl+I"><span class="glyphicon glyphicon-italic"></span> </button><button class="btn-default btn-sm btn" type="button" title="Heading" tabindex="-1" data-provider="bootstrap-markdown" data-handler="bootstrap-markdown-cmdHeading" data-hotkey="Ctrl+H"><span class="glyphicon glyphicon-header"></span> </button></div>
            <div class="btn-group">
                <button class="btn-default btn-sm btn" type="button" title="URL/Link" tabindex="-1" data-provider="bootstrap-markdown" data-handler="bootstrap-markdown-cmdUrl" data-hotkey="Ctrl+L"><span class="glyphicon glyphicon-link"></span> </button>
                <button class="btn-default btn-sm btn hidden" type="button" title="Image" tabindex="-1" data-provider="bootstrap-markdown" data-handler="bootstrap-markdown-cmdImage" data-hotkey="Ctrl+G"><span class="glyphicon glyphicon-picture"></span> </button></div>
            <div class="btn-group">
                <button class="btn-default btn-sm btn" type="button" title="Unordered List" tabindex="-1" data-provider="bootstrap-markdown" data-handler="bootstrap-markdown-cmdList" data-hotkey="Ctrl+U"><span class="glyphicon glyphicon-list"></span> </button>
                <button class="btn-default btn-sm btn" type="button" title="Ordered List" tabindex="-1" data-provider="bootstrap-markdown" data-handler="bootstrap-markdown-cmdListO" data-hotkey="Ctrl+O"><span class="glyphicon glyphicon-th-list"></span> </button><button class="btn-default btn-sm btn" type="button" title="Code" tabindex="-1" data-provider="bootstrap-markdown" data-handler="bootstrap-markdown-cmdCode" data-hotkey="Ctrl+K"><span class="glyphicon glyphicon-asterisk"></span> </button><button class="btn-default btn-sm btn" type="button" title="Quote" tabindex="-1" data-provider="bootstrap-markdown" data-handler="bootstrap-markdown-cmdQuote" data-hotkey="Ctrl+Q"><span class="glyphicon glyphicon-comment"></span> </button>
            </div>
            <div class="btn-group">
                <button class="btn-sm btn btn-primary" type="button" title="Preview" tabindex="-1" data-provider="bootstrap-markdown" data-handler="bootstrap-markdown-cmdPreview" data-hotkey="Ctrl+P" data-toggle="button"><span class="glyphicon glyphicon-search"></span> Preview</button>
            </div>
<!--
            <div class="md-controls"><a class="md-control md-control-fullscreen" href=""><span class="glyphicon glyphicon-fullscreen"></span></a>
            </div>
-->
<!--            </div>-->
            <textarea name="message"  id="inputMessage" rows="12" class="form-control markdown-editor md-input" data-auto-save-name="client_ticket_open" style="resize: vertical; margin: 10px; width: 90%"></textarea>
            <div class="md-footer">
                <div id="inputMessage-footer" class="markdown-editor-status" style="padding-left: 10px">
                    <div class="small-font">lines: 0&nbsp;&nbsp;&nbsp;words: 0&nbsp;&nbsp;&nbsp;<span class="markdown-save">saved</span></div></div></div>
<!--
            <div class="md-fullscreen-controls"><a href="" class="exit-fullscreen" title="Exit fullscreen"><span class="glyphicon glyphicon-fullscreen"></span></a>
            </div>
-->
            </div>
    </div>   
        <div class="col-sm-12">
            <label for="inputAttachments">Attachments</label>
        </div>
        <div class="col-sm-9">
            <input type="file" name="attachments[]" id="inputAttachments" class="form-control" />
            <div id="fileUploadsContainer"></div>
        </div>
        <div class="col-sm-3">
            <button type="button" class="btn btn-default btn-block" onclick="extraTicketAttachment()" style="width: 60%">
                <i class="fas fa-plus"></i> Add More
            </button>
        </div>
        <div class="col-xs-12 ticket-attachments-message text-muted">
            Allowed File Extensions: .jpg, .gif, .jpeg, .png, .pdf
        </div>
    

<!--
    <div id="customFieldsContainer">
            </div>

    <div id="autoAnswerSuggestions" class="well hidden"></div>

    <div class="text-center margin-bottom">
            </div>
-->

    <p class="text-center">
        <input type="submit" id="openTicketSubmit" value="Submit" class="btn btn-primary" />
        <a href="supporttickets.php" class="btn btn-default">Cancel</a>
    </p>

</form>
            
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

     
 
      
<script src="js/jquery-2.1.4.js"></script>
<script src="js/jquery.menu-aim.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
</body>
</html>