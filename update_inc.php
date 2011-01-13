<?php


*/
<!--
function sec() {
	mysql_connect("localhost", "root", "esoc123") or die(mysql_error());
	mysql_select_db("oncall") or die(mysql_error());

	$result = mysql_query("SELECT name FROM oncall WHERE `group` = 'sec'")
	or die(mysql_error());

	while($row = mysql_fetch_array( $result )) {
	echo "<option value=$row['name']>$row['name']</option>";
	}
}-->
/*

function esopri() {
        mysql_connect("localhost", "root", "esoc123") or die(mysql_error());
        mysql_select_db("oncall") or die(mysql_error());

        $result = mysql_query("SELECT name FROM oncall WHERE `group` = 'eso'")
        or die(mysql_error());

        while($row = mysql_fetch_array( $result )) {
        echo "<option value=$row['name']>$row['name']</option>";
        }
}

?>
