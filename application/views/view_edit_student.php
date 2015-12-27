<!DOCTYPE html> 
<html lang = "en">
 
   <head> 
      <meta charset = "utf-8">
      <meta name = "viewport" content = "width = device-width, initial-scale = 1">
         
      <title>Edit Student</title>

      <!--inlcuding bootstrap stylesheet-->
      <link href="/CodeIgniter/bootstrap3/css/bootstrap.min.css" rel="stylesheet">
   </head> 
	
   <body> 
      <div class="container">
       <h3> <b>Edit Student</b> </h3>
         <form method = "POST" action = "/CodeIgniter/students/editStudent">
		
            <?php 
               //echo form_open('students/editStudent'); 
               echo form_hidden('old_rno',$old_rno); 
               echo "<div class=\"row\"><div class=\"col-xs-12 col-sm-12 col-md-3 col-lg-3\">";
               echo form_label('Roll No.: '); 
               echo "</div><div class=\"col-xs-12 col-sm-12 col-md-4 col-lg-4\">";
               echo form_input(array('id'=>'rno','name'=>'rno','value'=>$current[0]->rno)); 
               echo "</div></div><br/>"; 
  


   				echo "<div class=\"row\"><div class=\"col-xs-12 col-sm-12 col-md-3 col-lg-3\">";
               echo form_label('Name: '); 
               echo "</div><div class=\"col-xs-12 col-sm-12 col-md-4 col-lg-4\">";
               echo form_input(array('id'=>'name','name'=>'name','value'=>$current[0]->name)); 
               echo "</div></div><br/>";



               echo "<div class=\"row\"><div class=\"col-xs-12 col-sm-12 col-md-3 col-lg-3\">";
               echo form_label('Residenital Address: ');
               echo "</div><div class=\"col-xs-12 col-sm-12 col-md-4 col-lg-4\">";
               echo form_textarea(array('id'=>'res_add','name'=>'res_add','value'=>$current[0]->res_add)); 
               echo "</div></div><br/>";




               echo "<div class=\"row\"><div class=\"col-xs-12 col-sm-12 col-md-3 col-lg-3\">";
               echo form_label('Gender:'); 
               echo "</div><div class=\"col-xs-12 col-sm-12 col-md-4 col-lg-4\">";
               //retrieving gender from db obj 'current' and checking(.) the button
               if(strcmp($current[0]->gender, 'male') == 0){
                  echo form_radio(array('id'=>'gender', 'name'=>'gender', 'value'=>'male', 'checked'=>'checked')) . 'Male' . '    ';
                  echo form_radio(array('id'=>'gender', 'name'=>'gender', 'value'=>'female'))  . 'Female' . '<br>';
               }else{
                  echo form_radio(array('id'=>'gender', 'name'=>'gender', 'value'=>'male')) . 'Male' . '    ';
                  echo form_radio(array('id'=>'gender', 'name'=>'gender', 'value'=>'female',  'checked'=>'checked'))  . 'Female' . '<br>';

               }
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
               echo form_dropdown('passing_year', $passing_year, $current[0]->passing_year) . '<br>';
               echo "</div></div><br/>";




               //we imploded(strigified an array) to store all the interests in one db field, now its time to explode them.
               $checkedIntr = explode(',', $current[0]->interests);

               echo "<div class=\"row\"><div class=\"col-xs-12 col-sm-12 col-md-3 col-lg-3\">";
               echo form_label('Interests:') . '<br>'; 
               echo "</div><div class=\"col-xs-12 col-sm-12 col-md-4 col-lg-4\">";
               if(in_array("Programming", $checkedIntr)) echo form_checkbox(array('id'=>'interests', 'name'=>'interests[]', 'value'=>'Programming', 'checked'=>'checked')) .'Programming' . '<br>'; else echo form_checkbox(array('id'=>'interests', 'name'=>'interests[]', 'value'=>'Programming')) .'Programming' . '<br>';
               if(in_array("Sports", $checkedIntr)) echo form_checkbox(array('id'=>'interests', 'name'=>'interests[]', 'value'=>'Sports', 'checked'=>'checked')) . 'Sports' . '<br>'; else echo form_checkbox(array('id'=>'interests', 'name'=>'interests[]', 'value'=>'Sports')) . 'Sports' . '<br>';
               if(in_array("Arts", $checkedIntr)) echo form_checkbox(array('id'=>'interests', 'name'=>'interests[]', 'value'=>'Arts', 'checked'=>'checked')) . 'Arts' . '<br>'; else echo form_checkbox(array('id'=>'interests', 'name'=>'interests[]', 'value'=>'Arts')) . 'Arts' . '<br>';
               if(in_array("Music", $checkedIntr)) echo form_checkbox(array('id'=>'interests', 'name'=>'interests[]', 'value'=>'Music', 'checked'=>'checked')) . 'Music' . '<br>'; else echo form_checkbox(array('id'=>'interests', 'name'=>'interests[]', 'value'=>'Music')) . 'Music' . '<br>';
   				echo "</div></div><br/>";


               echo form_button(array('id'=>'submit', 'class'=>'btn btn-primary', 'content'=>'Edit Student', 'type'=>'submit')); 
               echo form_close();
            ?> 
			
      </form> 
   </body>
	
</html>