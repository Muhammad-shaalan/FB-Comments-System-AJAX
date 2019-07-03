<?php
include "connect.php";

?>
<!DOCTYPE html>
<html>
<head>
	<title>Comment System</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/all.css">
	<link rel="stylesheet" type="text/css" href="css/fronts.css">
</head>
<body onload="post()">

	<div class="">
		<div class="container ">
		<h1 class="text-center">Facebook Comments System | +20 1026218588 | <a href="http://shaalan.epizy.com/M-Shaalan-v1/">M-Shaalan</a></h1>
			<div class="row">	
		    	<div class="col-md-8">
			    	<form>
				    	<div class="form-group">
						    <label>Write Something Here</label>
						    <textarea class="form-control" id="Textarea1" rows="3" cols="100"></textarea>
						    <input type="submit" class="btn btn-primary" value="post" disabled="true"
						     onclick="post('add')">
						</div>
			    	</form>
			    	<br>
			    	<div id="postcomment">
			    		
			    	</div>
		    	</div> <!-- /.Col -->
			</div> <!-- /.Row -->
		</div> <!-- /.Container -->
	</div> <!-- /.Overlay-->

	<div class="col-md-8 edit">
    	<form>
	    	<div class="form-group">
			    <label>Edit Your Comment</label>
			    <textarea class="form-control" id="TextareaEdit" rows="3" cols="100" autofocus></textarea>
			    <input type="submit" class="btn btn-primary edit-button" value="Edit" onclick="post('edit')">
			    <input type="hidden" id="post-id">
			    <span>X</span>
			</div>
    	</form>
	</div> <!-- /.Col -->	

	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/popper.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/front.js"></script>

</body>
</html>