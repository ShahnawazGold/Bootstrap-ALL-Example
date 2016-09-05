<html>
<head>
<title> my bootstrap</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">

<script src="js/bootstrap.min.js"></script>

<script src="jquery.js"></script>
</head>

<body>
<div class="container-fluid">

<div  class="panel panel-warning">
	<div class="panel-heading">head</div>
	<div class="panel-body">hello worl</div>
	<div class="panel-footer">copyright</div>
</div>

<div class="panel-group">
<div  class="panel panel-success">
	<div class="panel-heading">head</div>
	<div class="panel-body">hello worl</div>
	<div class="panel-footer">copyright</div>
</div>
</div>

<button class="btnbtn-success" data-togggle="collap">collapes</button>
<div id="collapse1" class="collap">this collap data</div>

<a href="collapes2" class="btn btn-success" data-togggle="collapes">this collapse</a>
<div id="collapse2" class="collap">this collap data<div>

<a href="collapes3" class="btn btn-info" data-togggle="collapes">this collapse</a>
<div id="collapse3" class="collapse in">this collap data</div>
<!-- collap with panel -->



</div>
</body>

</html>