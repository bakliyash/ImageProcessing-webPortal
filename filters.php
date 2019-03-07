<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	  
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/mdb.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/all.css" rel="stylesheet">
	<link href="css/filters.css" rel="stylesheet">
</head>

<body style="background-color: #232323;">

	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/popper.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/mdb.js"></script>

	<div class="animated fadeInLeft" id="heading">
		<h1><img src="img/filter.png" width="40px" height="40px;"  style="margin-top: 0px;">CHOOSE &nbsp;&nbsp;FILTERS</h1>
	</div>
	
	<div id="smoothening" class="zoomdiv">
		<h2>Smoothening Filters</h2>
		<ul>
		      <li><a href="filters/php/blurindex.php">Blur</a></li>
		      <li><a href="filters/php/blurindex.php">Averaging</a></li>
		      <li><a href="filters/php/median.php">Median</a></li>
		      <li><a href="filters/php/gauss.php">Gaussian</a>
		      <li><a href="filters/php/bilateral.php">Bilateral</a></li>
		</ul>
	</div>

	<div id="sharpening" class="zoomdiv">
		<h2>Histogram</h2>
		<ul>
		      <li><a href="#">Plotting Histogram</a></li>
		      <li><a href="#">Histogram Equilization</a></li>
		</ul>
	</div>
</body>
</html>