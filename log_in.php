<html>
    <head>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="http://localhost:8888/tests/style.css">
        <title>Test Web-app</title>
    </head>
    <body>
        <?php include("header.php"); ?>
        <section class="centralBlock">
    	<p>Log in</p>
        <form method="post" action="logIn_POST.php">
		<p><label for="inputEmail"> Email </label>
		<input type="string" id="inputEmail" name="inputEmail" value=""></p>
        
        <p><section class='msgfailAuth'>
        <?php 
        if ($_GET['msgError'] == 2)
        {
            echo 'Email missing';
        };
        ?>
        </section></p>

		<p><label for="inputPsw"> Password </label>
        <input type="password" id="inputPsw" name="inputPsw" value=""></p>
        
        <p><section class='msgfailAuth'>
        <?php 
        if ($_GET['msgError'] == 3)
        {
            echo 'Password missing';
        };
        ?>
        </section></p>

		<p><input type="submit" value="Sign in"></p>

        <p><section class='msgfailAuth'>
        <?php 
        if ($_GET['msgError'] == 1)
        {
            echo 'Please insert Email and Password';
        }
        else if ($_GET['msgError'] == 4)
        {
            echo 'Username or Password incorrect';
        };
        ?>
        </section></p>

        </form>
        <p><section class = "button_SignuUp">You don't have<br/>
        an account yet?<br/>
        <input type="button" value="Sign Up" onClick="parent.location='sign_up.php'"></section></p>
        </section>
    </body>
 </html>