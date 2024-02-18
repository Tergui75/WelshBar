<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<!-- jQuery --> 

<title>Schedule</title>
<link href="Home.css" rel="stylesheet">
<link rel="stylesheet" href="css/calendar.css">
<!--Drop-Down Menu-->
<body>
      <nav>
        <ul>
          <li><a href="../Home.php">Home</a></li>
          <li><a href="../Cal">Schedule</a></li>
          <li><a href="../The_Center.php">The Center +</a>
            <ul>
              <li><a href="../Sponsors.php">Sponsors</a></li>
              <li><a href="../Pictures.php">Pictures</a></li>
            </ul>            
          </li>
          <li><a href="../Menu.php">Menu</a></li>
          <li><a href="../Newsletter.php">Newsletter +</a>
            <ul>
              <li><a href="../../staff/newletter/new.php">Subscribe</a></li>
            </ul>
          </li>
          <li><a href="../Contact_Us.php">Contact Us +</a>
            <ul>
              <li><a href="../../staff/pages/new.php">Feedback</a></li>
            </ul>
          </li>
          <li><a href="../../staff/index.php">Staff Area</a></li>
        </ul>
    </nav>
<div class="container">	
	<h2>Saith Seren - Event Calendar</h2>	
	<div class="page-header">
		<div class="pull-right form-inline">
			<div class="btn-group">
				<button class="btn btn-primary" data-calendar-nav="prev"><< Prev</button>
				<button class="btn btn-default" data-calendar-nav="today">Today</button>
				<button class="btn btn-primary" data-calendar-nav="next">Next >></button>
			</div>
			<div class="btn-group">
				<button class="btn btn-warning" data-calendar-view="year">Year</button>
				<button class="btn btn-warning active" data-calendar-view="month">Month</button>
				<button class="btn btn-warning" data-calendar-view="week">Week</button>
				<button class="btn btn-warning" data-calendar-view="day">Day</button>
			</div>
		</div>
		<h3></h3>
	</div>
	<div class="row">
		<div class="col-md-9">
			<div id="showEventCalendar"></div>
		</div>
		<div class="col-md-3">
			<h4>All Events List</h4>
			<ul id="eventlist" class="nav nav-list"></ul>
		</div>
	</div>	
</div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
<script type="text/javascript" src="js/calendar.js"></script>
<script type="text/javascript" src="js/events.js"></script>
<?php include('footer.php');?>
