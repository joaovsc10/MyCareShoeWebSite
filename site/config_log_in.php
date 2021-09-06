<?php
// connect to db
$link = mysqli_connect('localhost', 'root', '',
'telesaude');
if (!$link) {
die("Not connected : " . mysql_error());
}
?>