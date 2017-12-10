<?php if(!isset($layout_context)) {
	$layout_context="public";
	} 
?>
<!doctype html>
<html>
<head>
<title>Widget Corp <?php if($layout_context== "admin") { echo "Admin"; } ?></title>
<link rel="stylesheet" href="../public/css/public.css" />
</head>
<body>
	<div id="header">
		<h1>Widget Corp <?php if($layout_context== "admin") { echo "Admin"; } ?></h1>
	</div>