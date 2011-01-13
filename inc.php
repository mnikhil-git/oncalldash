<?php

function esoprinum() {
        mysql_connect("localhost", "root", "esoc123") or die(mysql_error());
        mysql_select_db("oncall") or die(mysql_error());

        $result1 = mysql_query("SELECT phone FROM oncall WHERE `group` = 'eso' AND pri = '1'")
        or die(mysql_error());

        while($row = mysql_fetch_array( $result1 )) {

        echo $row['phone'];
        }
}

function esosecnum() {
        mysql_connect("localhost", "root", "esoc123") or die(mysql_error());
        mysql_select_db("oncall") or die(mysql_error());

        $result1 = mysql_query("SELECT phone FROM oncall WHERE `group` = 'eso' AND sec = '1'")
        or die(mysql_error());

        while($row = mysql_fetch_array( $result1 )) {

        echo $row['phone'];
        }
}


function esopri() {
        mysql_connect("localhost", "root", "esoc123") or die(mysql_error());
        mysql_select_db("oncall") or die(mysql_error());

        $result1 = mysql_query("SELECT name FROM oncall WHERE `group` = 'eso' AND pri = '1'")
        or die(mysql_error());

        while($row = mysql_fetch_array( $result1 )) {

        echo $row['name'];
        }
}

function esosec() {
        mysql_connect("localhost", "root", "esoc123") or die(mysql_error());
        mysql_select_db("oncall") or die(mysql_error());

        $result1 = mysql_query("SELECT name FROM oncall WHERE `group` = 'eso' AND sec = '1'")
        or die(mysql_error());

        while($row = mysql_fetch_array( $result1 )) {

        echo $row['name'];
        }
}


function secpri() {
        mysql_connect("localhost", "root", "esoc123") or die(mysql_error());
        mysql_select_db("oncall") or die(mysql_error());

        $result1 = mysql_query("SELECT name FROM oncall WHERE `group` = 'sec' AND pri = '1'")
        or die(mysql_error());
	
	while($row = mysql_fetch_array( $result1 )) {

        echo $row['name'];
	}
}

function secsec() {
        mysql_connect("localhost", "root", "esoc123") or die(mysql_error());
        mysql_select_db("oncall") or die(mysql_error());

        $result1 = mysql_query("SELECT name FROM oncall WHERE `group` = 'sec' AND sec = '1'")
        or die(mysql_error());

        while($row = mysql_fetch_array( $result1 )) {

        echo $row['name'];
        }
}

function netpri() {
        mysql_connect("localhost", "root", "esoc123") or die(mysql_error());
        mysql_select_db("oncall") or die(mysql_error());

        $result1 = mysql_query("SELECT name FROM oncall WHERE `group` = 'net' AND pri = '1'")
        or die(mysql_error());

        while($row = mysql_fetch_array( $result1 )) {

        echo $row['name'];
        }
}

function netsec() {
        mysql_connect("localhost", "root", "esoc123") or die(mysql_error());
        mysql_select_db("oncall") or die(mysql_error());

        $result1 = mysql_query("SELECT name FROM oncall WHERE `group` = 'net' AND sec = '1'")
        or die(mysql_error());

        while($row = mysql_fetch_array( $result1 )) {

        echo $row['name'];
        }
}

function syspri() {
        mysql_connect("localhost", "root", "esoc123") or die(mysql_error());
        mysql_select_db("oncall") or die(mysql_error());

        $result1 = mysql_query("SELECT name FROM oncall WHERE `group` = 'sys' AND pri = '1'")
        or die(mysql_error());

        while($row = mysql_fetch_array( $result1 )) {

        echo $row['name'];
        }
}

function syssec() {
        mysql_connect("localhost", "root", "esoc123") or die(mysql_error());
        mysql_select_db("oncall") or die(mysql_error());

        $result1 = mysql_query("SELECT name FROM oncall WHERE `group` = 'sys' AND sec = '1'")
        or die(mysql_error());

        while($row = mysql_fetch_array( $result1 )) {

        echo $row['name'];
        }
}

function imgpri() {
        mysql_connect("localhost", "root", "esoc123") or die(mysql_error());
        mysql_select_db("oncall") or die(mysql_error());

        $result1 = mysql_query("SELECT name FROM oncall WHERE `group` = 'img' AND pri = '1'")
        or die(mysql_error());

        while($row = mysql_fetch_array( $result1 )) {

        echo $row['name'];
        }
}

function imgsec() {
        mysql_connect("localhost", "root", "esoc123") or die(mysql_error());
        mysql_select_db("oncall") or die(mysql_error());

        $result1 = mysql_query("SELECT name FROM oncall WHERE `group` = 'img' AND sec = '1'")
        or die(mysql_error());

        while($row = mysql_fetch_array( $result1 )) {

        echo $row['name'];
        }
}

function monpri() {
        mysql_connect("localhost", "root", "esoc123") or die(mysql_error());
        mysql_select_db("oncall") or die(mysql_error());

        $result1 = mysql_query("SELECT name FROM oncall WHERE `group` = 'mon' AND pri = '1'")
        or die(mysql_error());

        while($row = mysql_fetch_array( $result1 )) {

        echo $row['name'];
        }
}

function monsec() {
        mysql_connect("localhost", "root", "esoc123") or die(mysql_error());
        mysql_select_db("oncall") or die(mysql_error());

        $result1 = mysql_query("SELECT name FROM oncall WHERE `group` = 'mon' AND sec = '1'")
        or die(mysql_error());

        while($row = mysql_fetch_array( $result1 )) {

        echo $row['name'];
        }
}

function stopri() {
        mysql_connect("localhost", "root", "esoc123") or die(mysql_error());
        mysql_select_db("oncall") or die(mysql_error());

        $result1 = mysql_query("SELECT name FROM oncall WHERE `group` = 'sto' AND pri = '1'")
        or die(mysql_error());

        while($row = mysql_fetch_array( $result1 )) {

        echo $row['name'];
        }
}

function stosec() {
        mysql_connect("localhost", "root", "esoc123") or die(mysql_error());
        mysql_select_db("oncall") or die(mysql_error());

        $result1 = mysql_query("SELECT name FROM oncall WHERE `group` = 'sto' AND sec = '1'")
        or die(mysql_error());

        while($row = mysql_fetch_array( $result1 )) {

        echo $row['name'];
        }
}
