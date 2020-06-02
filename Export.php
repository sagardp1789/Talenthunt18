<?php
      
      $con=mysqli_connect("localhost","sveriaci_code","Sveri@123456","sveriaci_talenthunt18");
if(isset($_POST["Export"])){
		 
      header('Content-Type: text/csv; charset=utf-8');  
      header('Content-Disposition: attachment; filename=data.csv');  
      $output = fopen("php://output", "w");  
      fputcsv($output, array(`serial`,`name`, `collage`, `email`, `event`, `participant` , `contact`));  
      $query = "SELECT `serial`,`name`, `collage`, `email`, `event`, `participant` , `contact` from registration";  
     
      $result = mysqli_query($con, $query);  
      while($row = mysqli_fetch_assoc($result))  
      {  
           fputcsv($output, $row);  
      }  
      fclose($output);  
 } 
 if(isset($_POST["Exp1"])){
             
      header('Content-Type: text/csv; charset=utf-8');  
      header('Content-Disposition: attachment; filename=data.csv');  
      $output = fopen("php://output", "w");  
      fputcsv($output, array(`serial`,`name`, `collage`, `email`, `event`, `participant` , `contact`));  
      $query = "SELECT `serial`,`name`, `collage`, `email`, `event`, `participant` , `contact` from registration";  
     
      $result = mysqli_query($con, $query);  
      while($row = mysqli_fetch_assoc($result))  
      {  
           fputcsv($output, $row);  
      }  
      fclose($output);  
 }   
 ?>