<?php
	require_once('common.php');
?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Welcome to the New York State Real Property Data Filter</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body bgcolor="#b3d5ff">
<h1>Welcome to the New York State Real Property Data Filter</h1>

<form method="get" action="select.php">
<p><strong>Please Select A County:</strong></p>
<select name="county">
<?
	foreach($counties as $c) {
	  $disabled = "";
	  if (!in_array($c, $counties_available))
	    $disabled = "disabled";
		?><option value="<?= $c ?>" <?= $disabled?>><?= ucwords($c) ?></option><?
	}

?>
</select><input type="submit" value="go" />
</form>

<? include ('maps/imagemap.php') ?>
</body>
</html>
