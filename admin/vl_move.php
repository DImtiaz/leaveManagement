<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HR</title>
	<link rel="shortcut icon" href="../hrlogo.png">
    <!-- Bootstrap -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<?php include("background_print.php");?>
  </head>
  <body>
<?php
include('../conn.php');
mysql_query("UPDATE vacation_log SET vl_stat='1' where v_id='$_GET[id]'");
header("location:vl_all_approve.php");
?>