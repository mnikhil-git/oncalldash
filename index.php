<?php require('inc.php'); ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8' />
    <title>OBU On-Call Board</title>
	<link rel="stylesheet" href="default.css" />
</head>
<body>

<div id="wrap">
	<div id="update">
		<a href="update.php">Update</a>
	</div>
	<div id="data">
		<div id="schedule">
			<h1>On-Call Schedule</h1>
			<ul>
				<li> Today is <em><?php echo date("m/d") ?> </em> <small> special info will go here... </small></li>
			</ul>
		</div>
	</div>
	<div id="nav">
		<ul class="groups">
			<li><a href="#">Infra</a></li>
			<li><a href="#">OpenSource</a></li>
			<!--	<ul>
					<li>MML</li>
				</ul>-->
			<li><a href="#">WCS</a></li>
			<li><a href="#">3rd Party</a></li>
		</ul>	
	</div>
	<div id="list">
	<table>


                <tr><td>ESOC Management<br /><?php echo esoprinum(); ?></td><td><img src='images/pri.png' /> Pri.</td><td>
                <?php echo esopri(); ?></td><td><img src='images/sec.png' /> Sec.</td><td>
                <?php echo esosec(); ?></td></tr>

		<tr><td>OBU Security<br />312-357-9372</td><td><img src='images/pri.png' /> Pri.</td><td>
		<?php echo secpri(); ?></td><td><img src='images/sec.png' /> Sec.</td><td>
		<?php echo secsec(); ?></td></tr>

                <tr><td>OBU Network Eng.<br />312-357-9373</td><td><img src='images/pri.png' /> Pri.</td><td>
                <?php echo netpri(); ?></td><td><img src='images/sec.png' /> Sec.</td><td>
                <?php echo netsec(); ?></td></tr>

                <tr><td>OBU Systems Eng.<br />312-357-9374</td><td><img src='images/pri.png' /> Pri.</td><td>
                <?php echo syspri(); ?></td><td><img src='images/sec.png' /> Sec.</td><td>
                <?php echo syssec(); ?></td></tr>

                <tr><td>OBU Incident Mgmt.<br />312-357-9375</td><td><img src='images/pri.png' /> Pri.</td><td>
                <?php echo imgpri(); ?></td><td><img src='images/sec.png' /> Sec.</td><td>
                <?php echo imgsec(); ?></td></tr>

                <tr><td>OBU Monitoring<br />312-357-9376</td><td><img src='images/pri.png' /> Pri.</td><td>
                <?php echo monpri(); ?></td><td><img src='images/sec.png' /> Sec.</td><td>
                <?php echo monsec(); ?></td></tr>

                <tr><td>OBU Storage<br />312-357-9377</td><td><img src='images/pri.png' /> Pri.</td><td>
                <?php echo stopri(); ?></td><td><img src='images/sec.png' /> Sec.</td><td>
                <?php echo stosec(); ?></td></tr>

	</table>
	</div>

</body>
</html>
