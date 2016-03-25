<?php
	include('login.php'); // Include Login Script

	if ((isset($_SESSION['username']) != '')) 
	{
		header('Location: home.php');
	}	
?>

<!doctype html>
<html>
<header>
    <h1>1307260 BugTracker website Course work CMM503</h1>

    <nav>
        <ul>
            <li><a href="index.html">Home Page</a></li>
            <li><a href="login.html">Login</a></li>
            <li><a href="signup.html">Signup</a></li>
            </li>
        </ul>
    </nav>
</header>

<body>
<div align="center">
<h1 style="font-family:Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif; font-size:32px;">PHP Login Form with Session</h1>
<div class="loginBox">
    <h3>Login Form</h3>
    <br><br>
    <form method="post" action="">
        <label>Username:</label><br>
        <input type="text" name="username" placeholder="username" /><br><br>
        <label>Password:</label><br>
        <input type="password" name="password" placeholder="password" />  <br><br>
        <input type="submit" name="submit" value="Login" /> 
    </form>
    <div class="error"><?php echo $error;?></div>
</div>
</div>
</body>
</html>