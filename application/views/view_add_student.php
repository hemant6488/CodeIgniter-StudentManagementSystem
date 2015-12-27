<!DOCTYPE html> 
<html lang = "en">
 
   <head> 
      <meta charset = "utf-8">
      <meta name = "viewport" content = "width = device-width, initial-scale = 1">
         
      <title>Add Student</title>

      <!--inlcuding bootstrap stylesheet-->
      <link href="/CodeIgniter/bootstrap3/css/bootstrap.min.css" rel="stylesheet">

   </head> 
	
   <body> 
      <div class="container">
          <h3> <b>Add Student</b> </h3>
            <form method = "POST" action = "/CodeIgniter/students/addStudent">
      		
               <?php 
                  echo "<div class=\"row\"><div class=\"col-xs-12 col-sm-12 col-md-3 col-lg-3\">";
                  echo form_label('Roll No.:'); 
                  echo "</div><div class=\"col-xs-12 col-sm-12 col-md-4 col-lg-4\">";
                  echo form_input(array('id'=>'rno','name'=>'rno')); 
                  echo "</div></div><br/>"; 


      			

                  echo "<div class=\"row\"><div class=\"col-xs-12 col-sm-12 col-md-3 col-lg-3\">";
                  echo form_label('Name:'); 
                  echo "</div><div class=\"col-xs-12 col-sm-12 col-md-4 col-lg-4\">";
                  echo form_input(array('id'=>'name','name'=>'name')); 
                  echo "</div></div><br/>";  
      			

                  echo "<div class=\"row\"><div class=\"col-xs-12 col-sm-12 col-md-3 col-lg-3\">";
                  echo form_label('Residential Address:'); 
                  echo "</div><div class=\"col-xs-12 col-sm-12 col-md-6 col-lg-6\">";
                  echo form_textarea(array('id'=>'res_add','name'=>'res_add')); 
                  echo "</div></div><br/>"; 
                  
                  

                  echo "<div class=\"row\"><div class=\"col-xs-12 col-sm-12 col-md-3 col-lg-3\">";
                  echo form_label('Gender:'); 
                  echo "</div><div class=\"col-xs-12 col-sm-12 col-md-4 col-lg-4\">";
                  echo form_radio(array('id'=>'gender', 'name'=>'gender', 'value'=>'male')) . 'Male' . '    ';
                  echo form_radio(array('id'=>'gender', 'name'=>'gender', 'value'=>'female'))  . 'Female' . '<br>';
                  echo "</div></div><br/>"; 

                  $passing_year = array(
                     '2010' => '2010',
                     '2011' => '2011',
                     '2012' => '2012',
                     '2013' => '2013',
                     '2014' => '2014',
                     '2015' => '2015',
                     '2016' => '2016',
                     '2017' => '2017',
                     '2018' => '2018'
                     );

                  echo "<div class=\"row\"><div class=\"col-xs-12 col-sm-12 col-md-3 col-lg-3\">";
                  echo form_label('Passing Year:'); 
                  echo "</div><div class=\"col-xs-12 col-sm-12 col-md-4 col-lg-4\">";
                  echo form_dropdown('passing_year', $passing_year) . '<br>';
                  echo "</div></div><br/>"; 

                  
                  echo "<div class=\"row\"><div class=\"col-xs-12 col-sm-12 col-md-3 col-lg-3\">";
                  echo form_label('Interests:') . '<br>'; 
                  echo "</div><div class=\"col-xs-12 col-sm-12 col-md-4 col-lg-4\">";
                  echo form_checkbox(array('id'=>'interests', 'name'=>'interests[]', 'value'=>'Programming')) .'Programming' . '<br>';
                  echo form_checkbox(array('id'=>'interests', 'name'=>'interests[]', 'value'=>'Sports')) . 'Sports' . '<br>';
                  echo form_checkbox(array('id'=>'interests', 'name'=>'interests[]', 'value'=>'Arts')) . 'Arts' . '<br>';
                  echo form_checkbox(array('id'=>'interests', 'name'=>'interests[]', 'value'=>'Music')) . 'Music' . '<br>';
                  echo "</div></div><br/>"; 
                  
                  echo form_button(array('id'=>'submit', 'class'=>'btn btn-primary', 'value'=>'Add', 'content'=>'Add Student', 'type'=>'submit')); 
                  echo form_close(); 
               ?> 
      		
            </form> 
   </body>
	
</html>