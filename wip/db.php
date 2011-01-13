<?php
mysql_connect("localhost", "root", "esoc123") or die(mysql_error());
mysql_select_db("oncall") or die(mysql_error());

mysql_query("INSERT INTO oncall 
(name, group) VALUES('Laz', 'sec' ) ") 
or die(mysql_error());  

mysql_query("INSERT INTO oncall 
(name, group) VALUES('Baer', 'sec' ) ") 
or die(mysql_error());  

mysql_query("INSERT INTO oncall 
(name, group) VALUES('Mike Innocentini', 'net' ) ") 
or die(mysql_error());  

mysql_query("INSERT INTO oncall 
(name, group) VALUES('Marc OConnor', 'net' ) ") 
or die(mysql_error());  

mysql_query("INSERT INTO oncall 
(name, group) VALUES('Ruben Areyza', 'sys' ) ") 
or die(mysql_error());  

mysql_query("INSERT INTO oncall 
(name, group) VALUES('Brian Scanlon', 'img' ) ") 
or die(mysql_error());  

mysql_query("INSERT INTO oncall 
(name, group) VALUES('Chris Davis', 'mon' ) ") 
or die(mysql_error());  

mysql_query("INSERT INTO oncall 
(name, group) VALUES('Kerry Slaughter', 'mon' ) ") 
or die(mysql_error());  

mysql_query("INSERT INTO oncall 
(name, group) VALUES('Darren West', 'sto' ) ") 
or die(mysql_error());  

mysql_query("INSERT INTO oncall 
(name, group) VALUES('Joel Keating', 'sto' ) ") 
or die(mysql_error());  

echo "Data Inserted!";

?>

