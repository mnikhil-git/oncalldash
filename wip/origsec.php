<?php

function secpri() {
        mysql_connect("localhost", "root", "esoc123") or die(mysql_error());
        mysql_select_db("oncall") or die(mysql_error());

        $result1 = mysql_query("SELECT name FROM oncall WHERE `group` = 'sec' AND pri = '1'")
        or die(mysql_error());

        echo "<tr><td>OBU Security<br />312-357-9372</td>";
        echo "<td><img src="images/pri.png" /> Pri.</td>";
        echo "<td>$result1</td>";
        echo "<td><img src="images/sec.png" /> Sec.</td>";
        echo "<td>secsec</td></tr>";
}
?>
