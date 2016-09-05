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

<!--Basic Progress Bar With Label -->
<div class="container">
  <h2>Basic Progress Bar</h2>
  <div class="progress">
    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
      <span class="sr-only">70% Complete</span>
    </div>
  </div>
</div>
<!--Basic Progress Bar With Label -->
<div class="container">
  <h2>Progress Bar With Label</h2>
  <div class="progress">
    <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
      70%
    </div>
  </div>
</div>

<!--Basic Progress Bar With Label -->
<div class="container">
  <h2>Colored Progress Bars</h2>
  <p>The contextual classes colors the progress bars:</p> 
  <div class="progress">
    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
      40% Complete (success)
    </div>
  </div>
  <div class="progress">
    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width:50%">
      50% Complete (info)
    </div>
  </div>
  <div class="progress">
    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%">
      60% Complete (warning)
    </div>
  </div>
  <div class="progress">
    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
      70% Complete (danger)
    </div>
  </div>
</div>
<!--Basic Animated Progress Bar -->
<div class="container">
  <h2>Animated Progress Bar</h2>
  <p>The .active class animates the progress bar:</p> 
  <div class="progress">
    <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
      40%
    </div>
  </div>
</div>



 
</div>
</body>
</html>