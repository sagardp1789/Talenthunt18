<!DOCTYPE html>
<html>
<head>
	<title>registered student</title>
	<link rel="stylesheet" href="assets/demo.css">
	<link rel="stylesheet" href="assets/form-login.css">
<style>
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}
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
<body>
	<header>
		<h1>TALENT HUNT 2k18</h1>
        
    </header>

    <ul>
        
        <li><a href="index.html">Logout</a></li>
       
        
       
    </ul>

	<br>
	<br>
	<?php

		//connection
		$con=mysqli_connect("localhost","sveriaci_code","Sveri@123456","sveriaci_talenthunt18");
		if(isset($_POST['sub']))
		{
		$sql="select * from registration";
			if($result=mysqli_query($con,$sql))
			{	echo '<center><table id="customers">';
		echo '<th>All Event Entries List</th>';
		echo'
				<form action="Export.php" method="POST">
				<input class="button" type="submit" name="Export"  value="export to excel"/>
				</form>';
				echo "<tr>
				<td>Sr.No</td>
				<td>Name</td>
				<td>College Name</td>
				<td>Email</td>
				<td>Contact No.</td>
				<td>Event</td>
				<td>No. Of Paticipant</td>
				</tr>
				";	
					while($row=mysqli_fetch_row($result))
					 {
		 					echo '<tr>';

		 					echo '<td>';
							printf("%d ",$row[5]);
							echo '</td>';

							echo '<td>';
							printf("%s",$row[0]);
							echo '</td>';

							echo '<td>';
								printf("%s",$row[1]);
							echo '</td>';

							echo '<td>';
							printf("%s",$row[2]);
							echo '</td>';

							echo '<td>';
									printf("%s",$row[6]);
						echo '</td>';

						echo '<td>';
						printf("%s",$row[3]);
						echo '</td>';

						echo '<td>';
						printf("%d",$row[4]);
							echo '</td>';

						echo "</tr>";


					}
				echo "</table></center>";
			}
			}
			//*********************************************************************Blind c**************************************************************************************
				if(isset($_POST['BC']))
					{
				$sql="select * from registration where event='Blind C'";
			if($result=mysqli_query($con,$sql))
			{	echo '<center><table id="customers">';
		echo'
				<form action="Export.php" method="POST">
				<input class="button" type="submit" name="Exp1"  value="export to excel"/>
				</form>';
				echo '<th>Blind C Entries List</th>';
				

				echo "<tr>
				<td>Sr.No</td>
				<td>Name</td>
				<td>College Name</td>
				<td>Email</td>
				<td>Contact No.</td>
				<td>Event</td>
				<td>No. Of Paticipant</td>
				</tr>
				";	
					while($row=mysqli_fetch_row($result))
					 {
		 					
		 					echo '<tr>';

		 					echo '<td>';
							printf("%d ",$row[5]);
							echo '</td>';

							echo '<td>';
							printf("%s",$row[0]);
							echo '</td>';

							echo '<td>';
								printf("%s",$row[1]);
							echo '</td>';

							echo '<td>';
							printf("%s",$row[2]);
							echo '</td>';

							echo '<td>';
									printf("%s",$row[6]);
						echo '</td>';

						echo '<td>';
						printf("%s",$row[3]);
						echo '</td>';

						echo '<td>';
						printf("%d",$row[4]);
							echo '</td>';

						echo "</tr>";


					}
				echo "</table></center>";
			}
		}
		//*********************************************************************NFS**************************************************************************************
				if(isset($_POST['nfs']))
					{
				$sql="select * from registration where event='NFS'";
			if($result=mysqli_query($con,$sql))
			{	echo '<center><table id="customers">';
		echo '<th>NFSEntries List</th>';
				echo "<tr>
				<td>Sr.No</td>
				<td>Name</td>
				<td>College Name</td>
				<td>Email</td>
				<td>Contact No.</td>
				<td>Event</td>
				<td>No. Of Paticipant</td>
				</tr>
				";	
					while($row=mysqli_fetch_row($result))
					 {
		 					echo '<tr>';

		 					echo '<td>';
							printf("%d ",$row[5]);
							echo '</td>';

							echo '<td>';
							printf("%s",$row[0]);
							echo '</td>';

							echo '<td>';
								printf("%s",$row[1]);
							echo '</td>';

							echo '<td>';
							printf("%s",$row[2]);
							echo '</td>';

							echo '<td>';
									printf("%s",$row[6]);
						echo '</td>';

						echo '<td>';
						printf("%s",$row[3]);
						echo '</td>';

						echo '<td>';
						printf("%d",$row[4]);
							echo '</td>';

						echo "</tr>";


					}
				echo "</table></center>";
			}
		}
			//*********************************************************************paper presenation IT**************************************************************************************
				if(isset($_POST['ppit']))
					{
				$sql="select * from registration where event='Paper Presentation(IT Dept)'";
			if($result=mysqli_query($con,$sql))
			{	echo '<center><table id="customers">';
		echo '<th>Paper presenattion IT DEPT Entries List</th>';
				echo "<tr>
				<td>Sr.No</td>
				<td>Name</td>
				<td>College Name</td>
				<td>Email</td>
				<td>Contact No.</td>
				<td>Event</td>
				<td>No. Of Paticipant</td>
				</tr>
				";	
					while($row=mysqli_fetch_row($result))
					 {
		 					echo '<tr>';

		 					echo '<td>';
							printf("%d ",$row[5]);
							echo '</td>';

							echo '<td>';
							printf("%s",$row[0]);
							echo '</td>';

							echo '<td>';
								printf("%s",$row[1]);
							echo '</td>';

							echo '<td>';
							printf("%s",$row[2]);
							echo '</td>';

							echo '<td>';
									printf("%s",$row[6]);
						echo '</td>';

						echo '<td>';
						printf("%s",$row[3]);
						echo '</td>';

						echo '<td>';
						printf("%d",$row[4]);
							echo '</td>';

						echo "</tr>";


					}
				echo "</table></center>";
			}
		}
		//*********************************************************************paper presenation CO**************************************************************************************
				if(isset($_POST['ppco']))
					{
				$sql="select * from registration where event='Paper Presentation(CO dept)'";
			if($result=mysqli_query($con,$sql))
			{	echo '<center><table id="customers">';
		echo '<th>Paper presentation CO DEPT Entries List</th>';
				echo "<tr>
				<td>Sr.No</td>
				<td>Name</td>
				<td>College Name</td>
				<td>Email</td>
				<td>Contact No.</td>
				<td>Event</td>
				<td>No. Of Paticipant</td>
				</tr>
				";	
					while($row=mysqli_fetch_row($result))
					 {
		 					echo '<tr>';

		 					echo '<td>';
							printf("%d ",$row[5]);
							echo '</td>';

							echo '<td>';
							printf("%s",$row[0]);
							echo '</td>';

							echo '<td>';
								printf("%s",$row[1]);
							echo '</td>';

							echo '<td>';
							printf("%s",$row[2]);
							echo '</td>';

							echo '<td>';
									printf("%s",$row[6]);
						echo '</td>';

						echo '<td>';
						printf("%s",$row[3]);
						echo '</td>';

						echo '<td>';
						printf("%d",$row[4]);
							echo '</td>';

						echo "</tr>";


					}
				echo "</table></center>";
			}
		}
		//*********************************************************************counter strike**************************************************************************************
				if(isset($_POST['cs']))
					{
				$sql="select * from registration where event='Counter Strike'";
			if($result=mysqli_query($con,$sql))
			{	echo '<center><table id="customers">';
		echo '<th>Counter Strike Entries List</th>';
				echo "<tr>
				<td>Sr.No</td>
				<td>Name</td>
				<td>College Name</td>
				<td>Email</td>
				<td>Contact No.</td>
				<td>Event</td>
				<td>No. Of Paticipant</td>
				</tr>
				";	
					while($row=mysqli_fetch_row($result))
					 {
		 					echo '<tr>';

		 					echo '<td>';
							printf("%d ",$row[5]);
							echo '</td>';

							echo '<td>';
							printf("%s",$row[0]);
							echo '</td>';

							echo '<td>';
								printf("%s",$row[1]);
							echo '</td>';

							echo '<td>';
							printf("%s",$row[2]);
							echo '</td>';

							echo '<td>';
									printf("%s",$row[6]);
						echo '</td>';

						echo '<td>';
						printf("%s",$row[3]);
						echo '</td>';

						echo '<td>';
						printf("%d",$row[4]);
							echo '</td>';

						echo "</tr>";


					}
				echo "</table></center>";
			}
		}
		//*********************************************************************code war**************************************************************************************
				if(isset($_POST['cw']))
					{
				$sql="select * from registration where event='Code War'";
			if($result=mysqli_query($con,$sql))
			{	echo '<center><table id="customers">';
		echo '<th>Code war Entries List</th>';
				echo "<tr>
				<td>Sr.No</td>
				<td>Name</td>
				<td>College Name</td>
				<td>Email</td>
				<td>Contact No.</td>
				<td>Event</td>
				<td>No. Of Paticipant</td>
				</tr>
				";	
					while($row=mysqli_fetch_row($result))
					 {
		 					echo '<tr>';

		 					echo '<td>';
							printf("%d ",$row[5]);
							echo '</td>';

							echo '<td>';
							printf("%s",$row[0]);
							echo '</td>';

							echo '<td>';
								printf("%s",$row[1]);
							echo '</td>';

							echo '<td>';
							printf("%s",$row[2]);
							echo '</td>';

							echo '<td>';
									printf("%s",$row[6]);
						echo '</td>';

						echo '<td>';
						printf("%s",$row[3]);
						echo '</td>';

						echo '<td>';
						printf("%d",$row[4]);
							echo '</td>';

						echo "</tr>";


					}
				echo "</table></center>";
			}
		}
		//*********************************************************************Paper presentation ej**************************************************************************************
				if(isset($_POST['ppej']))
					{
				$sql="select * from registration where event='Paper Presentation(E & TC Dept)'";
			if($result=mysqli_query($con,$sql))
			{	echo '<center><table id="customers">';
		echo '<th>Paper presentation EJ DEPT Entries List</th>';
				echo "<tr>
				<td>Sr.No</td>
				<td>Name</td>
				<td>College Name</td>
				<td>Email</td>
				<td>Contact No.</td>
				<td>Event</td>
				<td>No. Of Paticipant</td>
				</tr>
				";	
					while($row=mysqli_fetch_row($result))
					 {
		 					echo '<tr>';

		 					echo '<td>';
							printf("%d ",$row[5]);
							echo '</td>';

							echo '<td>';
							printf("%s",$row[0]);
							echo '</td>';

							echo '<td>';
								printf("%s",$row[1]);
							echo '</td>';

							echo '<td>';
							printf("%s",$row[2]);
							echo '</td>';

							echo '<td>';
									printf("%s",$row[6]);
						echo '</td>';

						echo '<td>';
						printf("%s",$row[3]);
						echo '</td>';

						echo '<td>';
						printf("%d",$row[4]);
							echo '</td>';

						echo "</tr>";


					}
				echo "</table></center>";
			}
		}
		//*********************************************************************circuit sudako**************************************************************************************
				if(isset($_POST['cscu']))
					{
				$sql="select * from registration where event='Circuit Sudako'";
			if($result=mysqli_query($con,$sql))
			{	echo '<center><table id="customers">';
		echo '<th>Circuit Sudako Entries List</th>';
				echo "<tr>
				<td>Sr.No</td>
				<td>Name</td>
				<td>College Name</td>
				<td>Email</td>
				<td>Contact No.</td>
				<td>Event</td>
				<td>No. Of Paticipant</td>
				</tr>
				";	
					while($row=mysqli_fetch_row($result))
					 {
		 					echo '<tr>';

		 					echo '<td>';
							printf("%d ",$row[5]);
							echo '</td>';

							echo '<td>';
							printf("%s",$row[0]);
							echo '</td>';

							echo '<td>';
								printf("%s",$row[1]);
							echo '</td>';

							echo '<td>';
							printf("%s",$row[2]);
							echo '</td>';

							echo '<td>';
									printf("%s",$row[6]);
						echo '</td>';

						echo '<td>';
						printf("%s",$row[3]);
						echo '</td>';

						echo '<td>';
						printf("%d",$row[4]);
							echo '</td>';

						echo "</tr>";


					}
				echo "</table></center>";
			}
		}
		//*********************************************************************Robo Race**************************************************************************************
				if(isset($_POST['rr']))
					{
				$sql="select * from registration where event='Robo Race'";
			if($result=mysqli_query($con,$sql))
			{	echo '<center><table id="customers">';
		echo '<th>Robo Race Entries List</th>';
				echo "<tr>
				<td>Sr.No</td>
				<td>Name</td>
				<td>College Name</td>
				<td>Email</td>
				<td>Contact No.</td>
				<td>Event</td>
				<td>No. Of Paticipant</td>
				</tr>
				";	
					while($row=mysqli_fetch_row($result))
					 {
		 					echo '<tr>';

		 					echo '<td>';
							printf("%d ",$row[5]);
							echo '</td>';

							echo '<td>';
							printf("%s",$row[0]);
							echo '</td>';

							echo '<td>';
								printf("%s",$row[1]);
							echo '</td>';

							echo '<td>';
							printf("%s",$row[2]);
							echo '</td>';

							echo '<td>';
									printf("%s",$row[6]);
						echo '</td>';

						echo '<td>';
						printf("%s",$row[3]);
						echo '</td>';

						echo '<td>';
						printf("%d",$row[4]);
							echo '</td>';

						echo "</tr>";


					}
				echo "</table></center>";
			}
		}
		//*********************************************************************cad Racing**************************************************************************************
				if(isset($_POST['cr']))
					{
				$sql="select * from registration where event='Cad Racing'";
			if($result=mysqli_query($con,$sql))
			{	echo '<center><table id="customers">';
		echo '<th>Cad Racing Entries List</th>';
				echo "<tr>
				<td>Sr.No</td>
				<td>Name</td>
				<td>College Name</td>
				<td>Email</td>
				<td>Contact No.</td>
				<td>Event</td>
				<td>No. Of Paticipant</td>
				</tr>
				";	
					while($row=mysqli_fetch_row($result))
					 {
		 					echo '<tr>';

		 					echo '<td>';
							printf("%d ",$row[5]);
							echo '</td>';

							echo '<td>';
							printf("%s",$row[0]);
							echo '</td>';

							echo '<td>';
								printf("%s",$row[1]);
							echo '</td>';

							echo '<td>';
							printf("%s",$row[2]);
							echo '</td>';

							echo '<td>';
									printf("%s",$row[6]);
						echo '</td>';

						echo '<td>';
						printf("%s",$row[3]);
						echo '</td>';

						echo '<td>';
						printf("%d",$row[4]);
							echo '</td>';

						echo "</tr>";


					}
				echo "</table></center>";
			}
		}
		//*********************************************************************model building**************************************************************************************
				if(isset($_POST['mb']))
					{
				$sql="select * from registration where event='Model Building'";
			if($result=mysqli_query($con,$sql))
			{	echo '<center><table id="customers">';
		echo '<th>Model Building Entries List</th>';
				echo "<tr>
				<td>Sr.No</td>
				<td>Name</td>
				<td>College Name</td>
				<td>Email</td>
				<td>Contact No.</td>
				<td>Event</td>
				<td>No. Of Paticipant</td>
				</tr>
				";	
					while($row=mysqli_fetch_row($result))
					 {
		 					echo '<tr>';

		 					echo '<td>';
							printf("%d ",$row[5]);
							echo '</td>';

							echo '<td>';
							printf("%s",$row[0]);
							echo '</td>';

							echo '<td>';
								printf("%s",$row[1]);
							echo '</td>';

							echo '<td>';
							printf("%s",$row[2]);
							echo '</td>';

							echo '<td>';
									printf("%s",$row[6]);
						echo '</td>';

						echo '<td>';
						printf("%s",$row[3]);
						echo '</td>';

						echo '<td>';
						printf("%d",$row[4]);
							echo '</td>';

						echo "</tr>";


					}
				echo "</table></center>";
			}
		}
		//*********************************************************************paper presentation (civil)**************************************************************************************
				if(isset($_POST['ppce']))
					{
				$sql="select * from registration where event='Paper Presentation(CE dept)'";
			if($result=mysqli_query($con,$sql))
			{	echo '<center><table id="customers">';
		echo '<th>Paper Presentation CE DEPT Entries List</th>';
				echo "<tr>
				<td>Sr.No</td>
				<td>Name</td>
				<td>College Name</td>
				<td>Email</td>
				<td>Contact No.</td>
				<td>Event</td>
				<td>No. Of Paticipant</td>
				</tr>
				";	
					while($row=mysqli_fetch_row($result))
					 {
		 					echo '<tr>';

		 					echo '<td>';
							printf("%d ",$row[5]);
							echo '</td>';

							echo '<td>';
							printf("%s",$row[0]);
							echo '</td>';

							echo '<td>';
								printf("%s",$row[1]);
							echo '</td>';

							echo '<td>';
							printf("%s",$row[2]);
							echo '</td>';

							echo '<td>';
									printf("%s",$row[6]);
						echo '</td>';

						echo '<td>';
						printf("%s",$row[3]);
						echo '</td>';

						echo '<td>';
						printf("%d",$row[4]);
							echo '</td>';

						echo "</tr>";


					}
				echo "</table></center>";
			}
		}
		//*********************************************************************Quize**************************************************************************************
				if(isset($_POST['qz']))
					{
				$sql="select * from registration where event='Quiz Competition'";
			if($result=mysqli_query($con,$sql))
			{	echo '<center><table id="customers">';
		echo '<th>QUIZ Entries List</th>';
				echo "<tr>
				<td>Sr.No</td>
				<td>Name</td>
				<td>College Name</td>
				<td>Email</td>
				<td>Contact No.</td>
				<td>Event</td>
				<td>No. Of Paticipant</td>
				</tr>
				";	
					while($row=mysqli_fetch_row($result))
					 {
		 					echo '<tr>';

		 					echo '<td>';
							printf("%d ",$row[5]);
							echo '</td>';

							echo '<td>';
							printf("%s",$row[0]);
							echo '</td>';

							echo '<td>';
								printf("%s",$row[1]);
							echo '</td>';

							echo '<td>';
							printf("%s",$row[2]);
							echo '</td>';

							echo '<td>';
									printf("%s",$row[6]);
						echo '</td>';

						echo '<td>';
						printf("%s",$row[3]);
						echo '</td>';

						echo '<td>';
						printf("%d",$row[4]);
							echo '</td>';

						echo "</tr>";


					}
				echo "</table></center>";
			}
		}
		//*********************************************************************Poster presentation**************************************************************************************
				if(isset($_POST['poster']))
					{
				$sql="select * from registration where event='Poster Presentation(EE dept)'";
			if($result=mysqli_query($con,$sql))
			{	echo '<center><table id="customers">';
		echo '<th>Poster Presentation Entries List</th>';
				echo "<tr>
				<td>Sr.No</td>
				<td>Name</td>
				<td>College Name</td>
				<td>Email</td>
				<td>Contact No.</td>
				<td>Event</td>
				<td>No. Of Paticipant</td>
				</tr>
				";	
					while($row=mysqli_fetch_row($result))
					 {
		 					echo '<tr>';

		 					echo '<td>';
							printf("%d ",$row[5]);
							echo '</td>';

							echo '<td>';
							printf("%s",$row[0]);
							echo '</td>';

							echo '<td>';
								printf("%s",$row[1]);
							echo '</td>';

							echo '<td>';
							printf("%s",$row[2]);
							echo '</td>';

							echo '<td>';
									printf("%s",$row[6]);
						echo '</td>';

						echo '<td>';
						printf("%s",$row[3]);
						echo '</td>';

						echo '<td>';
						printf("%d",$row[4]);
							echo '</td>';

						echo "</tr>";


					}
				echo "</table></center>";
			}
		}
		//*********************************************************************Paper presentation(ee)**************************************************************************************
				if(isset($_POST['ppee']))
					{
				$sql="select * from registration where event='Paper Presentation(EE dept)'";
			if($result=mysqli_query($con,$sql))
			{	echo '<center><table id="customers">';
		echo '<th>Paper Presentation EE DEPT  Entries List</th>';
				echo "<tr>
				<td>Sr.No</td>
				<td>Name</td>
				<td>College Name</td>
				<td>Email</td>
				<td>Contact No.</td>
				<td>Event</td>
				<td>No. Of Paticipant</td>
				</tr>
				";	
					while($row=mysqli_fetch_row($result))
					 {
		 					echo '<tr>';

		 					echo '<td>';
							printf("%d ",$row[5]);
							echo '</td>';

							echo '<td>';
							printf("%s",$row[0]);
							echo '</td>';

							echo '<td>';
								printf("%s",$row[1]);
							echo '</td>';

							echo '<td>';
							printf("%s",$row[2]);
							echo '</td>';

							echo '<td>';
									printf("%s",$row[6]);
						echo '</td>';

						echo '<td>';
						printf("%s",$row[3]);
						echo '</td>';

						echo '<td>';
						printf("%d",$row[4]);
							echo '</td>';

						echo "</tr>";


					}
				echo "</table></center>";
			}
		}
		//*********************************************************************Lath war(mech)**************************************************************************************
				if(isset($_POST['lw']))
					{
				$sql="select * from registration where event='Lathe War'";
			if($result=mysqli_query($con,$sql))
			{	echo '<center><table id="customers">';
		echo '<th>Lathe War Entries List</th>';
				echo "<tr>
				<td>Sr.No</td>
				<td>Name</td>
				<td>College Name</td>
				<td>Email</td>
				<td>Contact No.</td>
				<td>Event</td>
				<td>No. Of Paticipant</td>
				</tr>
				";	
					while($row=mysqli_fetch_row($result))
					 {
		 					echo '<tr>';

		 					echo '<td>';
							printf("%d ",$row[5]);
							echo '</td>';

							echo '<td>';
							printf("%s",$row[0]);
							echo '</td>';

							echo '<td>';
								printf("%s",$row[1]);
							echo '</td>';

							echo '<td>';
							printf("%s",$row[2]);
							echo '</td>';

							echo '<td>';
									printf("%s",$row[6]);
						echo '</td>';

						echo '<td>';
						printf("%s",$row[3]);
						echo '</td>';

						echo '<td>';
						printf("%d",$row[4]);
							echo '</td>';

						echo "</tr>";


					}
				echo "</table></center>";
			}
		}
		//*********************************************************************solid modelling**************************************************************************************
				if(isset($_POST['sm']))
					{
				$sql="select * from registration where event='Solid Modeling'";
			if($result=mysqli_query($con,$sql))
			{	echo '<center><table id="customers">';
		echo '<th>Solid Modeling Entries List</th>';
				echo "<tr>
				<td>Sr.No</td>
				<td>Name</td>
				<td>College Name</td>
				<td>Email</td>
				<td>Contact No.</td>
				<td>Event</td>
				<td>No. Of Paticipant</td>
				</tr>
				";	
					while($row=mysqli_fetch_row($result))
					 {
		 					echo '<tr>';

		 					echo '<td>';
							printf("%d ",$row[5]);
							echo '</td>';

							echo '<td>';
							printf("%s",$row[0]);
							echo '</td>';

							echo '<td>';
								printf("%s",$row[1]);
							echo '</td>';

							echo '<td>';
							printf("%s",$row[2]);
							echo '</td>';

							echo '<td>';
									printf("%s",$row[6]);
						echo '</td>';

						echo '<td>';
						printf("%s",$row[3]);
						echo '</td>';

						echo '<td>';
						printf("%d",$row[4]);
							echo '</td>';

						echo "</tr>";


					}
				echo "</table></center>";
			}
		}
		//*********************************************************************Paper Presentation mech dept**************************************************************************************
				if(isset($_POST['ppme']))
					{
				$sql="select * from registration where event='Paper Presentation(ME dept)'";
			if($result=mysqli_query($con,$sql))
			{	echo '<center><table id="customers">';
		echo '<th>Paper Presentation MECH DEPT Entries List</th>';
				echo "<tr>
				<td>Sr.No</td>
				<td>Name</td>
				<td>College Name</td>
				<td>Email</td>
				<td>Contact No.</td>
				<td>Event</td>
				<td>No. Of Paticipant</td>
				</tr>
				";	
					while($row=mysqli_fetch_row($result))
					 {
		 					echo '<tr>';

		 					echo '<td>';
							printf("%d ",$row[5]);
							echo '</td>';

							echo '<td>';
							printf("%s",$row[0]);
							echo '</td>';

							echo '<td>';
								printf("%s",$row[1]);
							echo '</td>';

							echo '<td>';
							printf("%s",$row[2]);
							echo '</td>';

							echo '<td>';
									printf("%s",$row[6]);
						echo '</td>';

						echo '<td>';
						printf("%s",$row[3]);
						echo '</td>';

						echo '<td>';
						printf("%d",$row[4]);
							echo '</td>';

						echo "</tr>";


					}
				echo "</table></center>";
			}
		}
	?>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	 <div class="footer">
       <div class="wrap">
    	<div class="half-footer" style="margin-left:0">
        
        <div class="footer-pic"></div>
        <div class="clear"></div>
        </div>
       
       
        </div>
    	<div class="clear"></div>        
      </div>
	
	<div class="copy">
    	<center><p>© 2018 Rights Reseverd by <a href="http://sveri.ac.in/">SVERI</a></p></center>
    </div>
</body>
</html>