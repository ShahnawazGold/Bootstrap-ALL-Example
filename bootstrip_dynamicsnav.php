<html>
<head>
<title> my bootstrap</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">

<script src="jquery.js"></script>
<script src="js/bootstrap.min.js"></script>


</head>

<body>
<div class="container-fluid">
		<ul class="nav nav-pills">
		<li><a href="#p1" data-toggle="pill">home1</a></li>
		<li><a href="#p2" data-toggle="pill">home2</a></li>
		<li><a href="#p3" data-toggle="pill">home3</a></li>
		</ul>
		<div class="tab-content">
		<div id="p1" class="tab-pane fade">this is the P1&apos;s content</div>
		<div id="p2" class="tab-pane fade">this is the P2&apos;s content</div>
		<div id="p3" class="tab-pane fade">this is the P3&apos;s content</div>
		</div>

		<ul class="nav nav-tabs">
		<li class="active"><a href="#t1" data-toggle="tab">home1</a></li>
		<li><a href="#t2" data-toggle="tab">home2</a></li>
		<li><a href="#t3" data-toggle="tab">home3</a></li>
		</ul>
	<div class="tab-content">
		<div id="t1" class="tab-pane fade in active">this is the P1&apos;s content</div>
		<div id="t2" class="tab-pane fade">this is the P2&apos;s content</div>
		<div id="t3" class="tab-pane fade">this is the P3&apos;s content</div>
		</div>

</div>
</body>

</html>