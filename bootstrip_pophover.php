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

<!--panel -->


<div class="container">
  <h3>Popover Example</h3>
  <a href="#" data-toggle="popover" title="Popover Header" data-content="Some content inside the popover">Toggle popover</a>
</div>

<script>
$(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
});
</script>


<div class="container">
  <h3>Popover Example</h3>
  <ul class="list-inline">
    <li><a href="#" title="Header" data-toggle="popover" data-placement="top" data-content="Content">Top</a></li>
    <li><a href="#" title="Header" data-toggle="popover" data-placement="bottom" data-content="Content">Bottom</a></li>
    <li><a href="#" title="Header" data-toggle="popover" data-placement="left" data-content="Content">Left</a></li>
    <li><a href="#" title="Header" data-toggle="popover" data-placement="right" data-content="Content">Right</a></li>
  </ul>
</div>

<script>
$(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
});
</script>


<div class="container">
  <h3>Popover Example</h3>
    <a href="#" title="Dismissible popover" data-toggle="popover" data-trigger="focus" data-content="Click anywhere in the document to close this popover">Click me</a>
</div>

<script>
$(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
});
</script>

<div class="container">
  <h3>Popover Example</h3>
  <a href="#" title="Header" data-toggle="popover" data-content="Some content">Click Me</a><br>
  <a href="#" title="Header" data-toggle="popover" data-trigger="hover" data-content="Some content">Hover over me</a>
</div>

<script>
$(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
});
</script>


















 
</div>
</body>
</html>