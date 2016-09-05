<html>
<head>
<title> my bootstrap</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">

<script src="jquery.js"></script>

<script src="js/bootstrap.min.js"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $('#date').datepicker({
            
        });
    });
</script>


</head>
<body>


<div class="container-fluid">

<!--Pagination -->


<div class="container">
  <h2>Basic List Group</h2>
  <ul class="list-group">
    <li class="list-group-item">First item</li>
    <li class="list-group-item">Second item</li>
    <li class="list-group-item">Third item</li>
  </ul>
</div>

<div class="container">
  <h2>List Group With Badges</h2>
  <ul class="list-group">
    <li class="list-group-item"><span class="badge">12</span> New</li>
    <li class="list-group-item"><span class="badge">5</span> Deleted</li>  
    <li class="list-group-item"><span class="badge">3</span> Warnings</li>  
  </ul>
</div>

<div class="container">
  <h2>List Group With a Disabled Item</h2>
  <div class="list-group">
    <a href="#" class="list-group-item disabled">First item</a>
    <a href="#" class="list-group-item">Second item</a>
    <a href="#" class="list-group-item">Third item</a>
  </div>
</div>

<div class="container">
  <h2>List Group With Contextual Classes</h2>
  <ul class="list-group">
    <li class="list-group-item list-group-item-success">First item</li>
    <li class="list-group-item list-group-item-info">Second item</li>
    <li class="list-group-item list-group-item-warning">Third item</li>
    <li class="list-group-item list-group-item-danger">Fourth item</li>
  </ul>
  
  <h2>Linked Items With Contextual Classes</h2>
  <p>Move the mouse over the linked items to see the hover effect:</p>
  <div class="list-group">
    <a href="#" class="list-group-item list-group-item-success">First item</a>
    <a href="#" class="list-group-item list-group-item-info">Second item</a>
    <a href="#" class="list-group-item list-group-item-warning">Third item</a>
    <a href="#" class="list-group-item list-group-item-danger">Fourth item</a>
  </div>
</div>

<div class="container">
  <h2>List Group With Custom Content</h2>
  <div class="list-group">
    <a href="#" class="list-group-item active">
      <h4 class="list-group-item-heading">First List Group Item Heading</h4>
      <p class="list-group-item-text">List Group Item Text</p>
    </a>
    <a href="#" class="list-group-item">
      <h4 class="list-group-item-heading">Second List Group Item Heading</h4>
      <p class="list-group-item-text">List Group Item Text</p>
    </a>
    <a href="#" class="list-group-item">
      <h4 class="list-group-item-heading">Third List Group Item Heading</h4>
      <p class="list-group-item-text">List Group Item Text</p>
    </a>
  </div>
</div>



											        <div class="col-xs-12 col-sm-6">
											            <div class="form-group">
											               
											                 <input type="text" class="form-control" id="date" placeholder="Select Date" />
											            </div>
											        </div>



<form>
  ...
  <input id="date" name="date" type="text" placeholder="Choose a date">
  
  <input type="submit" value="Submit" class="btn btn-info btn-block">
</form>
...

<!-- After including the date picker scripts -->
<script>
  $(function() {
    // Enable Pickadate on an input field
    $('#date').pickadate();
  });   
</script>



 
</div>
</body>
</html>