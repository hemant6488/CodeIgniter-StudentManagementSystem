<!DOCTYPE html>
<html lang = "en">
<head>
	<meta charset = "utf-8">
    <meta name = "viewport" content = "width = device-width, initial-scale = 1">
      
	<title><?php echo $title; ?></title>

	<!--inlcuding bootstrap stylesheet-->
	<link href="/CodeIgniter/bootstrap3/css/bootstrap.min.css" rel="stylesheet">

	

</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="font-size: 2.5em;">
				<b><?php echo $title; ?></b>
				<font style="font-size: 0.5em;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
					<a href="/CodeIgniter/students/addStudentView">Add Stundet </a> | <a href="./">List All Students</a> 
				</font>
				<h3> <b>List of Students</b> </h3>
			
			</div>
		</div>

			<font size="3">
				<?php
					foreach($students as $obj){
						//echo var_dump($obj);
						echo '<div class="row"><div class="col-xs-8 col-sm-8 col-md-6 col-lg-4">';
						echo $obj['rno'] . '.  ';
						echo $obj['name'] . '</div> <div class="col-xs-4 col-sm-4 col-md-3 col-lg-3">' . '<a href="/CodeIgniter/students/editStudentView/' . $obj['rno'] . '">Edit</a> |' . '     ' . '<a href="/CodeIgniter/students/deleteStudent/' . $obj['rno'] . '"onclick="return confirm(\'Confirm Deletion.\')">Delete</a></div></div>';
						
					}
				?>
			</div>
		</div>
	</div>
</body>
