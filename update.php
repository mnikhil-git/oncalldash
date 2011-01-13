<?php
$esopri = $_POST["esopri"];
$esosec = $_POST["esosec"];

?>
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
		<a href="index.php">Back to On-Call Dash</a>
	</div>
	<div id="ulist">
	<table>
                <tr>
                        <td class="name">ESOC Management</td>
                        <td>Primary
			<!--http://www.daniweb.com/forums/thread101739.html-->
			<form method="post" action="<?php echo $PHP_SELF;?>">
				<select name="esopri">
					<?php
				        mysql_connect("localhost", "root", "esoc123") or die(mysql_error());
        				mysql_select_db("oncall") or die(mysql_error());
					$sql = "SELECT id, name FROM oncall WHERE `group` = 'eso'";

					$rs = mysql_query($sql);

					while($row = mysql_fetch_array($rs))
					{
					  echo "<option value=\"".$row['id']."\">".$row['name']."\n  ";
					}
					?>
				</select>
			</td>
                        <td>Secondary
				<select name="esosec">
                                        <?php
                                        mysql_connect("localhost", "root", "esoc123") or die(mysql_error());
                                        mysql_select_db("oncall") or die(mysql_error());
                                        $sql = "SELECT id, name FROM oncall WHERE `group` = 'eso'";

                                        $rs = mysql_query($sql);

                                        while($row = mysql_fetch_array($rs))
                                        {
                                          echo "<option value=\"".$row['id']."\">".$row['name']."\n  ";
                                        }
                                        ?>
                                </select>
			</td>
			<td>
				<input type="submit" value="submit" name="submit">	
			</td></form>
                </tr>

		<tr>
			<td class="name">OBU Security</td>
			<td>Primary
			<select name="secpri">
                                        <?php
                                        mysql_connect("localhost", "root", "esoc123") or die(mysql_error());
                                        mysql_select_db("oncall") or die(mysql_error());
                                        $sql = "SELECT id, name FROM oncall WHERE `group` = 'sec'";

                                        $rs = mysql_query($sql);

                                        while($row = mysql_fetch_array($rs))
                                        {
                                          echo "<option value=\"".$row['id']."\">".$row['name']."\n  ";
                                        }
                                        ?>
                                </select>
			</td>
			<td>Secondary
				<select name="secsec">
                                        <?php
                                        mysql_connect("localhost", "root", "esoc123") or die(mysql_error());
                                        mysql_select_db("oncall") or die(mysql_error());
                                        $sql = "SELECT id, name FROM oncall WHERE `group` = 'sec'";

                                        $rs = mysql_query($sql);

                                        while($row = mysql_fetch_array($rs))
                                        {
                                          echo "<option value=\"".$row['id']."\">".$row['name']."\n  ";
                                        }
                                        ?>
                                </select>
			</td>
			<td>
				<input type="submit" value="submit" name="submit">
			</td> 
		</tr>

		<tr>
                        <td class="name">OBU Network Eng.</td>
                        <td>Primary
				<select name="netpri">
                                        <?php
                                        mysql_connect("localhost", "root", "esoc123") or die(mysql_error());
                                        mysql_select_db("oncall") or die(mysql_error());
                                        $sql = "SELECT id, name FROM oncall WHERE `group` = 'net'";

                                        $rs = mysql_query($sql);

                                        while($row = mysql_fetch_array($rs))
                                        {
                                          echo "<option value=\"".$row['id']."\">".$row['name']."\n  ";
                                        }
                                        ?>
                                </select>
			</td>
                        <td>Secondary
				<select name="netsec">
                                        <?php
                                        mysql_connect("localhost", "root", "esoc123") or die(mysql_error());
                                        mysql_select_db("oncall") or die(mysql_error());
                                        $sql = "SELECT id, name FROM oncall WHERE `group` = 'net'";

                                        $rs = mysql_query($sql);

                                        while($row = mysql_fetch_array($rs))
                                        {
                                          echo "<option value=\"".$row['id']."\">".$row['name']."\n  ";
                                        }
                                        ?>
                                </select>
			</td>
			<td>
				<input type="submit" value="submit" name="submit">
			</td>	
                </tr>

		<tr>
                        <td class="name">OBU System Eng.</td>
                        <td>Primary
				<select name="syspri">
                                        <?php
                                        mysql_connect("localhost", "root", "esoc123") or die(mysql_error());
                                        mysql_select_db("oncall") or die(mysql_error());
                                        $sql = "SELECT id, name FROM oncall WHERE `group` = 'sys'";

                                        $rs = mysql_query($sql);

                                        while($row = mysql_fetch_array($rs))
                                        {
                                          echo "<option value=\"".$row['id']."\">".$row['name']."\n  ";
                                        }
                                        ?>
                                </select>
			</td>
                        <td>Secondary
				<select name="syssec">
                                        <?php
                                        mysql_connect("localhost", "root", "esoc123") or die(mysql_error());
                                        mysql_select_db("oncall") or die(mysql_error());
                                        $sql = "SELECT id, name FROM oncall WHERE `group` = 'sys'";

                                        $rs = mysql_query($sql);

                                        while($row = mysql_fetch_array($rs))
                                        {
                                          echo "<option value=\"".$row['id']."\">".$row['name']."\n  ";
                                        }
                                        ?>
                                </select>
			</td>            
			<td>
				<input type="submit" value="submit" name="submit">
			</td>
                </tr>

		<tr>
                        <td class="name">OBU Incident Mgmt.</td>
                        <td>Primary
				<select name="imgpri">
                                        <?php
                                        mysql_connect("localhost", "root", "esoc123") or die(mysql_error());
                                        mysql_select_db("oncall") or die(mysql_error());
                                        $sql = "SELECT id, name FROM oncall WHERE `group` = 'img'";

                                        $rs = mysql_query($sql);

                                        while($row = mysql_fetch_array($rs))
                                        {
                                          echo "<option value=\"".$row['id']."\">".$row['name']."\n  ";
                                        }
                                        ?>
                                </select>
			</td>
                        <td>Secondary
				<select name="imgsec">
                                        <?php
                                        mysql_connect("localhost", "root", "esoc123") or die(mysql_error());
                                        mysql_select_db("oncall") or die(mysql_error());
                                        $sql = "SELECT id, name FROM oncall WHERE `group` = 'img'";

                                        $rs = mysql_query($sql);

                                        while($row = mysql_fetch_array($rs))
                                        {
                                          echo "<option value=\"".$row['id']."\">".$row['name']."\n  ";
                                        }
                                        ?>
                                </select>
			</td>            
			<td>
				<input type="submit" value="submit" name="submit">
			</td>
                </tr>

		<tr>
                        <td class="name">OBU Monitoring</td>
                        <td>Primary
				<select name="monpri">
                                        <?php
                                        mysql_connect("localhost", "root", "esoc123") or die(mysql_error());
                                        mysql_select_db("oncall") or die(mysql_error());
                                        $sql = "SELECT id, name FROM oncall WHERE `group` = 'mon'";

                                        $rs = mysql_query($sql);

                                        while($row = mysql_fetch_array($rs))
                                        {
                                          echo "<option value=\"".$row['id']."\">".$row['name']."\n  ";
                                        }
                                        ?>
                                </select>
			</td>
                        <td>Secondary
				<select name="monsec">
                                        <?php
                                        mysql_connect("localhost", "root", "esoc123") or die(mysql_error());
                                        mysql_select_db("oncall") or die(mysql_error());
                                        $sql = "SELECT id, name FROM oncall WHERE `group` = 'mon'";

                                        $rs = mysql_query($sql);

                                        while($row = mysql_fetch_array($rs))
                                        {
                                          echo "<option value=\"".$row['id']."\">".$row['name']."\n  ";
                                        }
                                        ?>
                                </select>
			</td>            
			<td>
				<input type="submit" value="submit" name="submit">
			</td>
                </tr>

		<tr>
                        <td class="name">OBU Storage</td>
                        <td>Primary
				<select name="stopri">
                                        <?php
                                        mysql_connect("localhost", "root", "esoc123") or die(mysql_error());
                                        mysql_select_db("oncall") or die(mysql_error());
                                        $sql = "SELECT id, name FROM oncall WHERE `group` = 'sto'";

                                        $rs = mysql_query($sql);

                                        while($row = mysql_fetch_array($rs))
                                        {
                                          echo "<option value=\"".$row['id']."\">".$row['name']."\n  ";
                                        }
                                        ?>
                                </select>
			</td>
                        <td>Secondary
				<select name="stosec">
                                        <?php
                                        mysql_connect("localhost", "root", "esoc123") or die(mysql_error());
                                        mysql_select_db("oncall") or die(mysql_error());
                                        $sql = "SELECT id, name FROM oncall WHERE `group` = 'sto'";

                                        $rs = mysql_query($sql);

                                        while($row = mysql_fetch_array($rs))
                                        {
                                          echo "<option value=\"".$row['id']."\">".$row['name']."\n  ";
                                        }
                                        ?>
                                </select>	

			</td>            
			<td>
				<input type="submit" value="submit" name="submit">
			</td>
                </tr>
	</table>
	</div>
</div>
</body>
</html>
