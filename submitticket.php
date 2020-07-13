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
    
 <style>
	.drop-box {
		background: #F8F8F8;
		border: 5px dashed #DDD;
		text-align: center;
		margin: 10px 0px 10px 0px;
		border-radius: 5px;
		font-weight: 400;
		padding: 15px;
	}

	.dragover {
		border: 5px dashed #3d6da7;
	}
	md-chips.md-default-theme.md-chips.md-focused, md-chips .md-chips.md-focused {
		border-color: red;
		box-shadow: 0 2px lightgrey;
	}
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
					<a href="mysupportticket.php">Ticketing & Support</a><ul>
                        <li><a href="submitticket.php">Submit Ticket</a></li>
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
            

                   <h3 style="color:Brown">Submit Ticket</h3>
                         
            <div class="row row-centered">
	<div class="col-xs-12 col-sm-10 col-md-8 col-lg-6 col-centered">
		<div class="panel panel-default accountContainer">
			<div class="panel-body">
				<form id="ticket_Form" name="ticketForm" ng-submit="submitNewTicket(ticket)" novalidate>
					<div class="row" ng-if="!settings.UserInfo.isAuthenticated">
						<div class="col-md-6 col-sm-6 col-xs-6">
							<div class="form-group" ng-class="{ 'has-error': ticketForm.AnonymousFullName.$touched && ticketForm.AnonymousFullName.$invalid }">
								<label>First and Last Name</label>
								<input type="text" class="form-control" ng-model="ticket.AnonymousContactModel.FullName" name="AnonymousFullName" pattern="\w+ \w+" required>
								<div class="help-block" ng-messages="ticketForm.AnonymousFullName.$error" ng-if="ticketForm.AnonymousFullName.$touched">
									<p ng-message="required">Name is required</p>
									<p ng-message="pattern">Enter valid first and last name</p>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-6">
							<div class="form-group" ng-class="{ 'has-error': ticketForm.AnonymousEmail.$touched && ticketForm.AnonymousEmail.$invalid }">
								<label>Email address</label>
								<input type="text" class="form-control" ng-model="ticket.AnonymousContactModel.EmailAddress" ng-pattern="/^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/" name="AnonymousEmail" required>
								<div class="help-block" ng-messages="ticketForm.AnonymousEmail.$error" ng-if="ticketForm.AnonymousEmail.$touched">
									<p ng-message="required">Email address required</p>
									<p ng-message="pattern">Invalid email address</p>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group" ng-class="{ 'has-error': ticketForm.title.$touched && ticketForm.title.$invalid }">
								<label>Title (Subject)</label>
								<input type="text" class="form-control" ng-model="ticket.TicketName" name="title" required>
								<div class="help-block" ng-messages="ticketForm.title.$error" ng-if="ticketForm.title.$touched">
									<p ng-message="required">Ticket title required</p>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-6" ng-show="settings.Features.EnableTicketGroupSelection">
							<div class="form-group" style="margin-top:10px;">
								<label>Group</label>
								<select name="Group" class="form-control" ng-model="ticket.GroupID" ng-options="Group.ID as Group.Value for Group in orgTicketInfo.DropdownCollection[1].DropdownItems">
									<option value="">Select a Group</option>
								</select>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-6">
							<div class="form-group" style="margin-top:10px;" ng-class="{ 'has-error': ticketForm.TicketType.$touched && ticketForm.TicketType.$invalid }" ng-if="orgTicketInfo.DropdownCollection[2].DropdownItems.length > 1">
								<label>Ticket Type</label>
								<select placeholder="Select a Type" name="TicketType" class="form-control" ng-model="ticket.TicketTypeID" ng-options="TicketType.ID as TicketType.Value for TicketType in orgTicketInfo.DropdownCollection[2].DropdownItems" ng-required="orgTicketInfo.DropdownCollection[2].Required">
									<option value="" disabled>Select a Type</option>
								</select>
								<div class="help-block" ng-messages="ticketForm.TicketType.$error" ng-if="ticketForm.TicketType.$touched">
									<p ng-message="required">Ticket type required</p>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 sol-sm-6 col-xs-6" ng-if="settings.Features.EnableTicketProductSelection">
							<div class="form-group" style="margin-top:10px;" ng-class="{ 'has-error': ticketForm.Product.$touched && ticketForm.Product.$invalid }">
								<label>Product</label>
								<select name="Product" class="form-control" ng-model="ticket.ProductID" ng-options="Product.ID as Product.Value for Product in orgTicketInfo.DropdownCollection[0].DropdownItems" ng-required="orgTicketInfo.DropdownCollection[0].Required">
									<option value="">Select a Product</option>
								</select>
								<div class="help-block" ng-messages="ticketForm.Product.$error" ng-if="ticketForm.Product.$touched">
									<p ng-message="required">Product required</p>
								</div>
							</div>
						</div>
						<div class="col-md-6 sol-sm-6 col-xs-6" ng-if="settings.Features.EnableTicketProductVersionSelection && (versions.length > 0)">
							<div class="form-group" style="margin-top:10px;" ng-class="{ 'has-error': ticketForm.Version.$touched && ticketForm.Version.$invalid }">
								<label>Version</label>
								<select name="Version" class="form-control" ng-model="ticket.VersionID" ng-options="Version.ProductVersionID as Version.VersionNumber for Version in versions | orderBy:'-VersionNumber'" ng-required="orgTicketInfo.DropdownCollection[3].Required">
									<option value="">Select a Version</option>
								</select>
								<div class="help-block" ng-messages="ticketForm.Version.$error" ng-if="ticketForm.Version.$touched">
									<p ng-message="required">Product version required</p>
								</div>
							</div>
						</div>
					</div>
                    <div class="row">
                        <div class="col-md-6 sol-sm-6 col-xs-6" ng-repeat="CustomField in ticket.customFields">
                            <div class="form-group" style="margin-top:10px;">
                                <label>{{CustomField.Name}}</label>
                                <span ng-if="CustomField.FieldType == 0">
                                    <input name="{{CustomField.Name}}" type="text" class="form-control" ng-if="CustomField.Mask == ''" ng-model="CustomField.Value" ng-required="CustomField.IsRequired" />
                                    <input name="{{CustomField.Name}}" type="text" class="form-control" ng-if="CustomField.Mask !== ''" mask='{{CustomField.Mask}}' ng-model="CustomField.Value" ng-required="CustomField.IsRequired" />
                                </span>
                                <span ng-if="CustomField.FieldType == 1">
                                    <input name="{{CustomField.Name}}" class="form-control" ng-model="CustomField.Value" date-picker="CustomField.Value" ng-required="CustomField.IsRequired" datetimepicker />
                                </span>
                                <span ng-if="CustomField.FieldType == 2">
                                    <div class="checkbox">
                                        <label>
                                            <input name="{{CustomField.Name}}" type="checkbox" ng-model="CustomField.Value">
                                        </label>
                                    </div>
                                </span>
                                <span ng-if="CustomField.FieldType == 3">
                                    <input name="{{CustomField.Name}}" type="number" class="form-control" ng-required="CustomField.IsRequired" ng-model="CustomField.Value" />
                                </span>
                                <span ng-if="CustomField.FieldType == 4">
                                    <select name="{{CustomField.Name}}"
                                            class="form-control"
                                            ng-change="getConditionalCustomFields(ticket, CustomField.CustomFieldID, CustomField.Value)"
                                            ng-init="CustomField.Value = CustomField.ListValues.split('|')[0]"
                                            ng-model="CustomField.Value"
                                            ng-required="CustomField.IsRequired">
                                        <option ng-repeat="Option in CustomField.ListValues.split('|')" ng-disabled="($first && CustomField.IsFirstIndexSelect)">{{Option}}</option>
                                    </select>
                                </span>
                                <span ng-if="CustomField.FieldType == 5">
                                    <input name="{{CustomField.Name}}" class="form-control" ng-model="CustomField.Value" ng-required="CustomField.IsRequired" datepicker />
                                </span>
                                <span ng-if="CustomField.FieldType == 6">
                                    <input name="{{CustomField.Name}}" class="form-control" ng-model="CustomField.Value" ng-required="CustomField.IsRequired" timepicker />
                                </span>
                            </div>
                        </div>
                        <span>{{customFields}}</span>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group" style="margin-top:10px;">
                                <label>Description</label>
                                <summernote height="140" name="description" ng-model="ticket.Description" config="options"></summernote>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div screen-recording></div>
                    </div>
                    <div class="row">
                        <div video-recording></div>
                    </div>
					<div class="row">
						<div class="col-sm-12">
							<div ngf-drop="addFiles($files)" ngf-select="addFiles($files)" class="drop-box"
								 ngf-drag-over-class="'dragover'" ngf-multiple="true" ngf-allow-dir="true" ngf-max-size="25MB">
								<i class="fa fa-cloud-upload fa-4x" style="color:#3D6DA7"></i><br />
								<label>Drop files here or click to upload</label><br />
								<small>Images can be pasted into the description as well</small><br />
							</div>
							<ul class="list-group">
								<li class="list-group-item" ng-repeat="f in files">{{f.name}}<a ng-click="deleteFile($index)" class="pull-right"><i class="fa fa-trash"></i></a></li>
							</ul>
							<div ngf-no-file-drop>File Drag/Drop is not supported for this browser</div>
							{{errorMsg}}
						</div>
					</div>
					<div class="form-group" style="text-align:right;">
						<input type="submit" class="btn btn-primary" value="Submit Ticket" ng-disabled="ticketSubmitting">
					</div>
				</form>
			</div>
			<div class="panel-footer" ng-show="DeflectionResults.length > 0">
				<div class="list-group">
                    <h4>Suggested Solutions</h4>
					<a ng-click="ShowDeflection(Result)" class="list-group-item" ng-repeat="Result in DeflectionResults">{{Result.Ticket.Name}}</a>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="deflectionModal" tabindex="-1" role="dialog" aria-labelledby="deflectionModalLabel">
	<div class="modal-dialog modal-lg"  role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="deflectionModalLabel">{{ActiveDeflection.Ticket.Name}}</h4>
			</div>
			<div class="modal-body">
				<div ng-repeat="ArticleBody in ActiveDeflection.ArticleBodies">
					<div ng-bind-html="ArticleBody.Description"></div>
				</div>
			</div>
			<div class="modal-footer">
				<label>Did this resolve your issue?</label>
				<button type="button" class="btn btn-primary" data-dismiss="modal" ng-click="LogAnswer(true)">Yes</button>
				<button type="button" class="btn btn-primary" data-dismiss="modal" ng-click="LogAnswer(false)">No</button>
			</div>
		</div>
	</div>
</div>
<modal title="Ticket Submission Confirmation" visible="ticketCreatedSuccess">
	<div>
		Your ticket has been submitted succesfully and you will receive an email confirmation shortly.
	</div>
	<div style="text-align:right;">
		<button type="submit" class="btn btn-primary" ng-click="closeModal()">Ok</button>
	</div>            
                        
            </div>
          
                
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