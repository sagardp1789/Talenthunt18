<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Login Form</title>

	<link rel="stylesheet" href="assets/demo.css">
	<link rel="stylesheet" href="assets/form-login.css">
	<style>
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    float:left;
}



</style>

</head>


	<header>
		<h1>TALENT HUNT 2k18</h1>
        
    </header>

    
	<br>
	<br>
	
	
    <div class="main-content">

        <!-- You only need this form and the form-login.css -->

        
        	<?php
				//get values
				$username=$_POST['u'];
				$password=$_POST['p'];

				//to prevent sql injection
				$username=stripcslashes($username);
				$password=stripcslashes($password);
				//$username=mysql_real_escape_string($username);
				//$password=mysql_real_escape_string($password);
				

				//connect 
					$con=mysqli_connect("localhost","sveriaci_code","Sveri@123456","sveriaci_talenthunt18");
				//query
					$result=mysqli_query($con,"select * from login where username ='$username' and password='$password'") or die("Failed");
					$row=mysqli_fetch_array($result);

						if($row['username']==$username && $row['password']==$password)
						{
								echo "<script type='text/javascript'>alert('login successfully')</script>";
								echo '<form method="post" action="list.php">
									   <center><input class="button" type="submit" name="sub" value="view All Entries" /></center>
									   </form>
								';
								echo '<form method="post" action="list.php">
									   <center><input class="button" type="submit" name="BC" value="Blind C" /></center>
									   </form>
								';
								echo '<form method="post" action="list.php">
									   <center><input class="button" type="submit" name="nfs" value="NFS" /></center>
									   </form>
								';
								echo '<form method="post" action="list.php">
									   <center><input class="button" type="submit" name="ppit" value="Paper Presenation(IT dept)" /></center>
									   </form>
								';
								echo '<form method="post" action="list.php">
									   <center><input class="button" type="submit" name="ppco" value="Paper Presenation(CO dept)" /></center>
									   </form>
								';
								echo '<form method="post" action="list.php">
									   <center><input class="button" type="submit" name="cs" value="Counter Strike" /></center>
									   </form>
								';
								echo '<form method="post" action="list.php">
									   <center><input class="button" type="submit" name="cw" value="Code War" /></center>
									   </form>
								';
								echo '<form method="post" action="list.php">
									   <center><input class="button" type="submit" name="ppej" value="Paper Presentation (E & TC)" /></center>
									   </form>
								';
								echo '<form method="post" action="list.php">
									   <center><input class="button" type="submit" name="cscu" value="Circuit Sudako" /></center>
									   </form>
								';
								echo '<form method="post" action="list.php">
									   <center><input class="button" type="submit" name="rr" value="Robo Race" /></center>
									   </form>
								';
								echo '<form method="post" action="list.php">
									   <center><input class="button" type="submit" name="cr" value="Cad Racing" /></center>
									   </form>
								';
								echo '<form method="post" action="list.php">
									   <center><input class="button" type="submit" name="mb" value="Model Building" /></center>
									   </form>
								';
								echo '<form method="post" action="list.php">
									   <center><input class="button" type="submit" name="ppce" value="Paper Presentation (CE dept)" /></center>
									   </form>
								';
								echo '<form method="post" action="list.php">
									   <center><input class="button" type="submit" name="qz" value="Quize compitition" /></center>
									   </form>
								';
								echo '<form method="post" action="list.php">
									   <center><input class="button" type="submit" name="poster" value="Poster Presentation" /></center>
									   </form>
								';
								echo '<form method="post" action="list.php">
									   <center><input class="button" type="submit" name="ppee" value="Paper Presentation(EE dept)" /></center>
									   </form>
								';
								echo '<form method="post" action="list.php">
									   <center><input class="button" type="submit" name="lw" value="Lathe War" /></center>
									   </form>
								';
								echo '<form method="post" action="list.php">
									   <center><input class="button" type="submit" name="sm" value="Solid Modeling" /></center>
									   </form>
								';
								echo '<form method="post" action="list.php">
									   <center><input class="button" type="submit" name="ppme" value="Paper Presentation(ME Dept)" /></center>
									   </form>
								';
								
								
								

						}
						else
						{
							echo '<script type="text/javascript">alert("Invalid ID and Password")</script>';
							echo  "sorry you are entered wrong Id and Password";
						}
					
				

			?>

            
      

    </div>

</body>

</html>

	

	

