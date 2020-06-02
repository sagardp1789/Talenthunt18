<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Registration Form</title>

	<link rel="stylesheet" href="assets/demo.css">
	<link rel="stylesheet" href="assets/form-basic.css">

</head>
<body>

	<header>
		
		<h1>TALENT HUNT 2K18</h1>
		
    </header>

    <ul>
         <li><a href="index.html">Home</a></li>
        <li><a href="register.php">Register</a></li>
        <li><a href="login.php">Login</a></li>
        <li><a href="ruls.html">Events</a></li>
        
        
       
    </ul>
<marquee><h2>Please write down your Registration number After Registration..</h2></marquee><br><br>
    <div class="main-content">

        <!-- You only need this form and the form-basic.css -->

        <form class="form-basic" method="post" action="register.php">

            <div class="form-title-row">
                <h1>Register</h1>
            </div>

            <div class="form-row">
                <label>
                    <span>Full name</span>
                    <input type="text" name="name" required>
                </label>
            </div>
			<div class="form-row">
                <label>
                    <span>Name of Institute</span>
                    <input type="text" name="collage" required>
                </label>
            </div>

            <div class="form-row">
                <label>
                    <span>Email</span>
                    <input type="email" name="email" required>
                </label>
            </div>
			<div class="form-row">
                <label>
                    <span>Contact No</span>
                    <input type="text" name="contact" pattern="[789][0-9]{9}" required>
                </label>
            </div>

            <div class="form-row">
                <label>
                    <span>Select Event </span>
                    <select name="dropdown">
                        <option>Paper Presentation(ME dept)</option>
                        <option>Paper Presentation(CO dept)</option>
                        <option>Paper Presentation(IT Dept)</option>
                        <option>Paper Presentation(E & TC Dept)</option>
						<option>Paper Presentation(EE dept)</option>
						<option>Paper Presentation(CE dept)</option>
						<option>Poster Presentation(EE dept)</option>
						<option>Circuit Sudako </option>
						<option>Robo Race</option>
						<option>Code War</option>
						<option>Counter Strike</option>
						<option>Blind C</option>
						<option>NFS</option>
						<option>Cad Racing</option>
						<option>Model Building</option>
						<option>Quiz Competition</option>
						<option>Lathe war</option>
						<option>Solid Modeling</option>
						
                    </select>
                </label>
            </div>


            
            <div class="form-row">
                <label>
                    <span>Number of Participants </span>
                    <select name="part">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>	
                    </select>
                </label>
            </div>


            
            

            <div class="form-row">
                <button type="submit"  name="sub">Submit</button>
            </div>
			<?php
					$conn=mysqli_connect("localhost","sveriaci_code","Sveri@123456","sveriaci_talenthunt18");
					if($conn===false)
					{
						die("server not found...");
					}
					else
					{
						echo "  ";
					}
					if(isset($_POST['sub']))
					{
						$s_name=$_POST['name'];
						$collage=$_POST['collage'];
						$s_email=$_POST['email'];
						$s_contact=$_POST['contact'];
						$s_event=$_POST['dropdown'];
						$s_participant=$_POST['part'];
						
						$sql="INSERT INTO `registration`(`name`, `collage`, `email`, `contact`, `event`, `participant`) VALUES ('$s_name','$collage','$s_email',$s_contact,'$s_event',$s_participant)";
						$sql1="select serial from registration where name='$s_name'";
						if(mysqli_query($conn,$sql))
						{
                            if($sr=mysqli_query($conn,$sql1))
                            {
                                if($row=mysqli_fetch_row($sr))
                                {
							echo "<script type='text/javascript'>alert('Registration successfully! Your Registration ID is $row[0]')</script>";
                            
                                }							
                            }
							
						}
						else
						{
							echo "<script type='text/javascript'>alert('Please Try Again')</script>";
						}
					}
					mysqli_close($conn);

			?>

        </form>

    </div>

</body>

</html>
