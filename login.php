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
    float:center;
}

</style>
</head>


	<header>
		<h1>TALENT HUNT 2k18</h1>
        
    </header>

    <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="register.php">Register</a></li>
        <li><a href="login.php">Login</a></li>
        <li><a href="ruls.html">Events</a></li>
        
       
    </ul>

	<br>
	<br>
	
	
    <div class="main-content">

        <!-- You only need this form and the form-login.css -->

        <form class="form-login" method="post" action="record.php">

            <div class="form-log-in-with-email">

                <div class="form-white-background">

                    <div class="form-title-row">
                        <h1>Admin Login</h1>
                    </div>

                    <div class="form-row">
                        <label>
                            <span>User Name</span>
                           <input type="text" id="user" name="u" required>
                        </label>
                    </div>

                    <div class="form-row">
                        <label>
                            <span>Password</span>
                            <input type="password" id="pass" name="p" required> 
                        </label>
                    </div>

                    <div class="form-row">
                          &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input class="button" type="submit" name="log" value="Login" />
                    </div>

                </div>

                

            </div>

            

        </form>

    </div>
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
