<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ready to Innovate?</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" >
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
	<link rel="stylesheet" type="text/css" href="css/datatables.min.css"/>
	<!-- <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">  --> 

	<!--	<script src="js/jquery-1.10.2.js"></script>-->
  	<link rel="stylesheet" href="/resources/demos/style.css">
  	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  
  <script>
  $( function() {
    $( "#tabs" ).tabs();
  } );
  </script>
  
    <script>
  $( function() {
    $( "#region" ).selectmenu();
  } );
  </script>

<script>
function validateForm() {
    var x = document.forms["myForm"]["rhEmail"].value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    var re = /\S+@redhat.com/;

    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
//    if (! x.match(re) ) {
        alert("Not a valid e-mail address");
        return false;
    }
}
</script>
  
    <script>
  $( function() {
    $( "input" ).checkboxradio();
  } );
  </script>
  
  <style>
      #locationField, #controls {
        position: relative;
        width: 480px;
      }
      #autocomplete {
        position: absolute;
        top: 0px;
        left: 0px;
        width: 99%;
      }
      .label {
        text-align: right;
        font-weight: bold;

        color: #303030;
      }
      #address {
        border: 1px solid #000090;
        background-color: #f0f0ff;
        width: 480px;
        padding-right: 2px;
      }
      #address td {
        font-size: 10pt;
      }
      .field {
        width: 99%;
      }
      .slimField {
        width: 80px;
      }
      .wideField {
        width: 200px;
      }
      #locationField {
        height: 20px;
        margin-bottom: 2px;
      }
      .page { position: absolute; 
      	top: 10; 
      	left: 100; 
      	visibility: hidden; 
      	} 


p { font-family: 'Inder', sans-serif; line-height: 28px; margin-bottom: 15px; color: #666; }



input {
  	border-radius: 15px;
	margin: 10px;
	} 	

fieldset {
      	border: 0;
    	}

.overflow {
	height: 200px;
    	}

h3 {
	color: #7c795d;
	font-family: 'Source Sans Pro', sans-serif;
	font-size: 20px;
	font-weight: 400;
	line-height: 32px;
	margin: 0 0 14px;
	}

input[type=submit] {
	padding:0px 10px;
	width: 135px;
	height: 25x;
	font-size:20px; 
	background:#F7485E; 
	border:0 none;
	cursor:pointer;
	border-radius: 7px; 
	}
	  
#logo {
	background-color: white;
	position: absolute;
	width: 193px;
	height: 65px;
	bottom: 20px;
	right: 20px;
	}

</style>		
    

    
    
</head>
<body>

<nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.php"><img src="images/innovate.png">  Ready to Innovate?</a>
		</div>
		<div class="collapse navbar-collapse" id="navbar1">
			<ul class="nav navbar-nav navbar-right">
				<?php if (isset($_SESSION['usr_id'])) { ?>
				<!-- <li><a class="navbar-text">Signed in as <?php echo $_SESSION['usr_name']; ?></a></li> -->
				<li class="active"><a href="assess.php">Signed in as: <?php echo $_SESSION['usr_name']; ?></a></li>
				<li><a href="logout.php">Log Out</a></li>
				<li><a href="https://ready-to-innovate.com/blog/using-rti/using-ready-to-innovate-rti/">Blog</a></li>
				<?php } else { ?>
				<li><a href="login.php">Login</a></li>
				<li><a href="register.php">Sign Up</a></li>
				<li><a href="https://ready-to-innovate.com/blog/using-rti/using-ready-to-innovate-rti/">Blog</a></li>
				<?php } ?>

			</ul>
		</div>
	</div>
</nav>

<?php
if(isset($_SESSION['usr_id'])) {
include 'dbconnect.php';
$userId = $_SESSION['usr_id'];

?>

<div class="container">


<form name="myForm" id="innovate-form" action="tmp.php"  class="w3-container">

<div id="tabs">
  <ul>
    <li><a href="#tabs-1">Introduction</a></li>
    <li><a href="#tabs-2">Details</a></li>
    <li><a href="#tabs-3">Automation</a></li>
    <li><a href="#tabs-4">Methodology</a></li>
    <li><a href="#tabs-5">Architecture</a></li>
    <li><a href="#tabs-6">Strategy</a></li>
    <li><a href="#tabs-7">Resources</a></li>
    <li><input type="submit" value="Submit"></li>
  </ul>

<div id="tabs-1">
	<div class="row">
		<div class="col-md-10 col-md-offset-10 well">
			<fieldset>
				<legend>Welcome to the "Ready to Innovate?" assessment!</legend>

 				<div class="form-group">
					<label for="name">Aim:</label>
					<p>To understand the wider issues around PaaS / DevOps adoption; what will make it successful or why has it stalled.  In parallel with technical PoCs or pilots.</p>
				</div>
 				<div class="form-group">
					<label for="name">Aim:</label>
					<p>To understand the maturity of your organisation across 5 outlined areas of interest.</p>
				</div>				
 				<div class="form-group">
					<label for="name">Aim:</label>
					<p>To identify next steps, using follow-up sessions from Red Hat Consulting to do in depth studies.</p>
				</div>					
 				<div class="form-group">
					<p>To complete the assessment, please use the tabs and check the comment which better suits your environment. Once complete, click "Submit" from the Submit Tab.</p>
				</div>
			</fieldset>
		</div>
	</div>
				
<!-- 				
<b>AIM</b>: To understand the wider issues around PaaS / DevOps adoption; what will make it successful or why has it stalled.  In parallel with technical PoCs or pilots.
</p>

<p>
<b>AIM</b>: To understand the maturity of your organisation across 5 outlined areas of interest
</p>

<p><b>AIM</b>: To identify next steps, using follow-up sessions from Red Hat Consulting to do in depth studies</p>
<br>
<p>To complete the assessment, please use the tabs and check the comment which better suits your environment.  Once complete, click "Submit" from the Submit Tab.</p>
-->  

</div>

<div id="tabs-2">
	<div class="row">
		<div class="col-md-4 col-md-offset-4 well">
			<fieldset>
				<legend>Details</legend>
			
				<div class="form-group">
					<label for="name">Client Name</label>
					<input type="text" name="customerName" placeholder="Your Client Name" required class="form-control" />
				</div>
				<div class="form-group">
					<label for="name">Red Hat Email Address</label>
					<input onfocusout="validateForm()" type="text" name="rhEmail" placeholder="Your Email-Address" required class="form-control" />
				</div>
				<div class="form-group">
					<label for="region">Red Hat Region</label>
					<select name="region" id="region">
						<option value=DE>DE</option>
						<option value=CH>CH</option>
						<option value=Benelux>Benelux</option>
						<option value=UK>UK</option>
						<option value=Nordics>Nordics</option>
						<option value=France>France</option>
						<option value=Italy>Italy</option>
						<option value=Iberia>Iberia</option>
						<option value=Turkey>Turkey</option>
						<option value=other>other</option>
					</select>
				</div>			
			</fieldset>
		</div>
	</div>

<!--
<label  class="w3-label w3-validate">Domain</label>
<select name="domain">
<option value=Government>Government</option>
<option value=Finance>Finance</option>
<option value=Retail>Retail</option>
<option value=Manufacturing>Manufacturing</option>
<option value=Health>Health</option>
<option value=Media>Media</option>
<option value=Telecoms>Telecoms</option>
<option value=Energy>Energy</option>
</select>
  </p>
-->    
    
</div>
	
<div id="tabs-3">

<div class="widget"> 
  <fieldset>
    <legend>Development</legend>
<input class="w3-radio" type="radio" name="d1" id="radio-1" value="0" checked> <label>Ad-hoc tool selection</label><br>
<input class="w3-radio" type="radio" name="d1" id="radio-1" value="1"> <label>Manual deployment (App + OS)</label><br>
<input class="w3-radio" type="radio" name="d1" id="radio-1" value="2"> <label>CI/CD for non-production</label><br>
<input class="w3-radio" type="radio" name="d1" id="radio-1" value="3"> <label>CD Pipelines capable of pushing to production</label><br>
<input class="w3-radio" type="radio" name="d1" id="radio-1" value="4"> <label>> 90% of projects developed using agile development techniques</label><br>

  </fieldset>
 
  <fieldset>
    <legend>Operations</legend>
<input class="w3-radio" type="radio" name="o1" id="radio-1" value="0" checked> <label>Core build for OS only Basic (manual) provisioning</label><br>
<input class="w3-radio" type="radio" name="o1" id="radio-1" value="1"> <label>Patch & Release management (OS)</label><br>
<input class="w3-radio" type="radio" name="o1" id="radio-1" value="2"> <label>QA staging process SOE</label><br>
<input class="w3-radio" type="radio" name="o1" id="radio-1" value="3"> <label>Automated OS Builds</label><br>
<input class="w3-radio" type="radio" name="o1" id="radio-1" value="4"> <label>> 90% of infrastructure is automatically provisioned and managed</label><br>
  </fieldset> 
 
</div>    
    </p>
  </div>
  <div id="tabs-4">
  <fieldset>
    <legend>Development</legend>
<input class="w3-radio" type="radio" name="d2" id="radio-2" value="0" checked> <label>No defined methodology</label><br>
<input class="w3-radio" type="radio" name="d2" id="radio-2" value="1"> <label>Defined waterfall approach</label><br>
<input class="w3-radio" type="radio" name="d2" id="radio-2" value="2"> <label>Limited agile development on new projects (not including operations)</label><br>
<input class="w3-radio" type="radio" name="d2" id="radio-2" value="3"> <label>Agile development through to production & ops</label><br>
<input class="w3-radio" type="radio" name="d2" id="radio-2" value="4"> <label>Full DevOps culture</label><br>

  </fieldset>
 
  <fieldset>
    <legend>Operations</legend>
<input class="w3-radio" type="radio" name="o2" id="radio-2" value="0" checked> <label>Hosting/Mgmt Only</label><br>
<input class="w3-radio" type="radio" name="o2" id="radio-2" value="1"> <label>Defined SLAs + ITIL</label><br>
<input class="w3-radio" type="radio" name="o2" id="radio-2" value="2"> <label>Compliance & Security Auditing</label><br>
<input class="w3-radio" type="radio" name="o2" id="radio-2" value="3"> <label>SOE</label><br>
<input class="w3-radio" type="radio" name="o2" id="radio-2" value="4"> <label>Full DevOps culture</label><br>
  </fieldset> 

  </div>
  <div id="tabs-5">
  <fieldset>
    <legend>Development</legend>
<input class="w3-radio" type="radio" name="d3" id="radio-3" value="0" checked> <label>Ad-hoc choice of application dev tools. Very limited understand of new architectures and approaches to application deployment</label><br>
<input class="w3-radio" type="radio" name="d3" id="radio-3" value="1"> <label>Selected vendor tech roadmap. Initial understanding of new architectures and designs</label><br>
<input class="w3-radio" type="radio" name="d3" id="radio-3" value="2"> <label>Iterative development of existing applications Limited legacy strategy and beginnings of new development architectures</label><br>
<input class="w3-radio" type="radio" name="d3" id="radio-3" value="3"> <label>Focus on new platforms & limited legacy platforms. Well defined architecture for new development projects and operating models</label><br>
<input class="w3-radio" type="radio" name="d3" id="radio-3" value="4"> <label>Holistic & defined overall development strategy. Good designs and architectures in place and under regular review</label><br>
  </fieldset>
 
  <fieldset>
    <legend>Operations</legend>
<input class="w3-radio" type="radio" name="o3" id="radio-3" value="0" checked> <label>Ad-hoc choice of future platforms</label><br>
<input class="w3-radio" type="radio" name="o3" id="radio-3" value="1"> <label>Selected vendor tech roadmap</label><br>
<input class="w3-radio" type="radio" name="o3" id="radio-3" value="2"> <label>Focus on maintaining existing infrastructure</label><br>
<input class="w3-radio" type="radio" name="o3" id="radio-3" value="3"> <label>Primary focus on new applications</label><br>
<input class="w3-radio" type="radio" name="o3" id="radio-3" value="4"> <label>Defined strategy for existing and new architectures</label><br>

  </fieldset> 


  </div>
  <div id="tabs-6">
  <fieldset>
    <legend>Development</legend>
<input class="w3-radio" type="radio" name="d4" id="radio-4" value="0" checked> <label>The business dictates requirements, strategy and deliverables</label><br>
<input class="w3-radio" type="radio" name="d4" id="radio-4" value="1"> <label>Mature requirements gathering approach (e.g. Agile user stories)</label><br>
<input class="w3-radio" type="radio" name="d4" id="radio-4" value="2"> <label>MVP approach</label><br>
<input class="w3-radio" type="radio" name="d4" id="radio-4" value="3"> <label>Multiple projects against business needs</label><br>
<input class="w3-radio" type="radio" name="d4" id="radio-4" value="4"> <label>IT driven business innovation. IT working directly with business requirements.</label><br>
  </fieldset>
 
  <fieldset>
    <legend>Operations</legend>
<input class="w3-radio" type="radio" name="o4" id="radio-4" value="0" checked> <label>Instances of negative business impact</label><br>
<input class="w3-radio" type="radio" name="o4" id="radio-4" value="1"> <label>Good functioning service operations (i.e few unscheduled outage but slow to deploy)</label><br>
<input class="w3-radio" type="radio" name="o4" id="radio-4" value="2"> <label>Project based service offerings (i.e no unscheduled outages and rapid deployment)</label><br>
<input class="w3-radio" type="radio" name="o4" id="radio-4" value="3"> <label>Self sevice operations for development & the business</label><br>
<input class="w3-radio" type="radio" name="o4" id="radio-4" value="4"> <label>Transparent integration with project IT</label><br>
  </fieldset> 
  </div>
  <div id="tabs-7">
  <fieldset>
    <legend>Development</legend>
<input class="w3-radio" type="radio" name="d5" id="radio-5" value="0" checked> <label>Traditional programming techniques with No agreed tools</label><br>
<input class="w3-radio" type="radio" name="d5" id="radio-5" value="1"> <label>Initial agile adoption with 1 backlog per team</label><br>
<input class="w3-radio" type="radio" name="d5" id="radio-5" value="2"> <label>Extended team collaboration. Common DevOps skills</label><br>
<input class="w3-radio" type="radio" name="d5" id="radio-5" value="3"> <label>Continous cross-team improvement and collaboration</label><br>
<input class="w3-radio" type="radio" name="d5" id="radio-5" value="4"> <label>100% DevOps projects with Full cross-functional teams</label><br>

  </fieldset>
 
  <fieldset>
    <legend>Operations</legend>
<input class="w3-radio" type="radio" name="o5" id="radio-5" value="0" checked> <label>Standard Unix-like skills & no scripting skills</label><br>
<input class="w3-radio" type="radio" name="o5" id="radio-5" value="1"> <label>Direct VM interaction but limited scripting and manual interaction.</label><br>
<input class="w3-radio" type="radio" name="o5" id="radio-5" value="2"> <label>Dynamic templated images</label><br>
<input class="w3-radio" type="radio" name="o5" id="radio-5" value="3"> <label>Fully automated & deployment skills</label><br>
<input class="w3-radio" type="radio" name="o5" id="radio-5" value="4"> <label>100% DevOps engineers</label><br>
  </fieldset> 
  </div>
<!--  <div id="tabs-8">
    <p>  <input type="submit" value="Submit">
</p>
  </div>
-->
</div>

</form>

      </div>


    </div> <!-- /container -->
<?php    }
####  End of Logged on bit ######
?>

<div id="logo">
	<a href="https://www.devoteam.com/"><img src="images/devoteam_logo.png" alt="Devoteam Logo"></a>
</div>

</body>
</html>

