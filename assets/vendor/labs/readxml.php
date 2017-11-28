<?php
$url = "http://localhost/trikphp/outputdata/makexml.php";
$data = file_get_contents($url);
$data = simplexml_load_string($data);
foreach ($data as $row) {
	echo $row->name;
	echo "<hr>";
}
?>