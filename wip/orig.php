<?php require('statBoard.php'); ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8' />
    <title>Status Board</title>
	<link rel="stylesheet" href="default.css" />
</head>
<body>
	<div id="wrap">
		<div id="data">
			<div id="visits"></div>
			<div id="schedule">
				<h1>Schedule</h1>
				<ul>
					<?php echo getSchedule(); ?>
				<!--
					<li><em>3/22</em> event 1 <small> event details</small></li>
					<li><em>3/29</em> event 2</li>
					<li><em>4/15</em> event 3</li>
					<li><em>4/23</em> event 4</li>
					<li><em>5/14</em> event 5 <small>event details</small></li>-->
				</ul>
			</div>
		</div>
		<div id="projects">
			<table>
				<?php echo getProjects(); ?>

				<!--<tr>
					<td><img src="images/gizmo.png" /></td>
					<td>Gizmo</td>
					<td><img src="images/ontime.png" />On Time</td>
					<td>Joe Sally</td>
				</tr>
				<tr>
					<td><img src="images/widget.png" /></td>
					<td>Widget </td>
					<td><img src="images/behind.png" />Behind</td>
					<td>John Joe Jane</td>
				</tr>
				<tr>
					<td><img src="images/foobar.png" /></td>
					<td>Foobar</td>
					<td><img src="images/waiting.png" />Waiting</td>
					<td>Joe John</td>
				</tr>
				<tr>
					<td><img src="images/gadget.png" /></td>
					<td>Gadget</td>
					<td><img src="images/complete.png" />Complete</td>
					<td>Jane Joe John Sally</td>
				</tr>
								<tr>
					<td><img src="images/bazquirk.png" /></td>
					<td>Bazquirk</td>
					<td><img src="images/ontime.png" />On Time</td>
					<td>Jane Sally</td>
				</tr>-->
			</table>
		
		</div>
		<div id="twitter">
			<div id="our_tweets"></div>
			<div id="their_tweets"></div>
		</div>
	</div>
	
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.0/jquery.min.js"></script>
<script type="text/javascript" src="js/twitterlib.min.js"></script>
<script type="text/javascript" src="js/jquery.flot.min.js"></script>
<!--[if IE]><script type="text/javascript" src="js/excanvas.compiled.js"></script><![endif]-->
<script type="text/javascript" src="js/jquery.pauseanimate.js"></script>
<script type="text/javascript" src="js/statBoard.js"></script>
<script type="text/javascript">
	var board = statBoard();

	board.graphVisits('#visits');
	board.iconizeWorkers('#projects td:last-child');
	board.twitterize("#our_tweets", "timeline", "nettuts");
	board.twitterize("#their_tweets", "search", "nettuts");
</script>

</body>
</html>
