<!-- $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
  var target = $(e.target).attr("href");// activated tab
  alert(target) 
});-->

<html>
   <head>
     <title>
	    Balya Stint Home
	 </title>
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	 <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	 <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
	 <style>
        
	 </style>
   </head>
   <body>
     <div class="tabbable tabs-left">
			<ul class="nav nav-tabs">
				<li class= "active"><a href="#home" data-toggle="tab">Home</a></li>
				<li class= ""><a href="#stock" data-toggle="tab">Stock</a></li>
				<li class= ""><a href="#users" data-toggle="tab">Users</a></li>
				<li class= ""><a href="#reports" data-toggle="tab">Reports</a></li>
			</ul>
			<div class="tab-content">
					<div class="tab-pane fade active in" id="home">
					     <p>I'm in Section A.</p>
					</div><!--find an onclik listener so that it sets the class to active-->
					<div class="tab-pane fade" id="stock">
					     <p>I'm in Section B.</p>
					</div>
					<div class="tab-pane fade" id="users">
					      <p>I'm in Section C.</p>
					</div>
					<div class="tab-pane fade" id="reports">
					      <p>I'm in Section C.</p>
					</div>
			</div>
	 </div>
   </body>
</html>