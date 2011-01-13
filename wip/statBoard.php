<?php

function parseCalendarFeed($feed_url, $count = 4) {
	$content = file_get_contents($feed_url);
	$x = new SimpleXmlElement($content);
	$entries = $x->entry;
	$arr = array();

	for ($i = 0; $i < count($entries); $i++) {
		$item = explode("<br />", $entries[$i]->content);
		array_unshift($item, (string)$entries[$i]->title);
		
		foreach($item as $k => $v) {
			if ($k === 2 || $k === 3) {
				unset($item[$k]);
			} else {
				$temp = explode(":", $v);
				$item[$k] = (isset($temp[1])) ? trim($temp[1]) : $temp[0];
			}
		}
		$item = array_values($item);
		$item[1] = explode(" ", substr($item[1], 4, 6));
		$months = array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');
		$item[1][0] = array_search($item[1][0], $months) + 1;
		$item[1] = implode($item[1], '/');
		
		array_unshift($arr, $item);
	} // end for
	$arr = array_slice($arr, 0, $count);
	return $arr;
} // end parseCalendarFeed

function getSchedule() {
	$feed = "http://www.google.com/calendar/feeds/7dsn8r5l974nlqo6uji6t386s4%40group.calendar.google.com/public/basic";
	$events = parseCalendarFeed($feed);
	$html = "";
	foreach($events as $event) {
		$html .= "<li><em>$event[1]</em> $event[0]";
		if(isset($event[2])) {
			$html .= " <small>$event[2]</small></li>";
		} else {
			$html .= "</li>";
		}
	}
	return $html;
}

function getProjects() {
	$sql = new mysqli('localhost', 'root', '', 'projects')  or die('could not connect');
	$result = $sql->query("SELECT * FROM project_status");
	$html = "";
	
	while ($row = $result->fetch_object()) {
		$name   = ucwords($row->name);
		$status = ucwords($row->status);
		$img    = str_replace(" ", "", $row->status);


		$html .= "<tr><td><img src='images/$row->name.png' alt='$name' /></td>";
		$html .= "<td>$name</td><td><img src='images/$img.png' alt='$status' /> $status</td>";
		$html .= "<td>$row->workers</td>";
	}
	return $html;
	
}

?>
