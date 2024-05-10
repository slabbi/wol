<html>
<title>WOL</title>
<body>
<div align="center"><h1 style="font-size: 500%;">WOL</h1></div>
 
<?php
$mode = strtolower($_POST["mode"]);

$DOCUMENT_ROOT = $_SERVER["DOCUMENT_ROOT"];
$PHP_SELF = $_SERVER["PHP_SELF"];

echo '<div align="center"><form action="' . $PHP_SELF . '" method="post">';
echo '<input type=submit name="mode" value="nas1" style="font-size: 500%; height:20%; width:50%"><br /><br /><br />
	  <input type=submit name="mode" value="nas2" style="font-size: 500%; height:20%; width:50%"><br /><br /><br />
	  <input type=submit name="mode" value="nas3" style="font-size: 500%; height:20%; width:50%"><br /><br /><br />';
echo '</form></div>';

if ($mode=="nas1") {
	exec('wakeonlan -i 192.168.1.255 -p 8900 11:22:33:44:55:66', $output, $retval);
	echo "Rückgabe mit Status $retval und Ausgabe:\n";
	print_r($output);
}

if ($mode=="nas2") {
	exec('wakeonlan -i 192.168.1.255 -p 8900 11:22:33:44:55:66', $output, $retval);
	echo "Rückgabe mit Status $retval und Ausgabe:\n";
	print_r($output);
}

if ($mode=="nas3") {
	exec('wakeonlan -i 192.168.1.255 -p 8900 11:22:33:44:55:66', $output, $retval);
	echo "Rückgabe mit Status $retval und Ausgabe:\n";
	print_r($output);
}
?>

</body>
</html>
