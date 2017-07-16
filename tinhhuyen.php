<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Chọn huyện theo tỉnh</title>
	<link href="style/style.css" type="text/css" rel="stylesheet"></link>
	<style>
		select,span{font:normal 12pt Arial;color:navy}		
	</style>
	<script src="script/tinhhuyen.js"></script>
</head>
<body>
<h3>Chọn huyện theo tỉnh</h3>
<?php
include("inc/connect.inc");
include("inc/library.inc");
initTinh($con); 
initHuyen($con);
?>
</body>
</html>
