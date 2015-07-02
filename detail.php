<!DOCTYPE html>
<HTML>
	<HEAD>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />	
		<title>產品銷售趨勢</title>	
		<script src="http://code.jquery.com/jquery-1.9.1.js"></script>	
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="http://code.highcharts.com/highcharts.js"></script>
	<script src="http://code.highcharts.com/modules/exporting.js"></script>
	<script>
		var product ;
        	product =<?php if(isset($_GET['product'])) echo "\"".$_GET['product']." \""; else echo "\"產品組合 \""; ?>;
	</script>

	
	</HEAD>
	<BODY>
	<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
	<script src="js/detail.js"></script>
	
	</BODY>
</HTML>
