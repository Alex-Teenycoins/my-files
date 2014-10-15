<html>
    <head>
        <meta charset="utf-8"/>
        <title>Test Web-app</title>
    </head>
    <body>
        <?php include("header.php"); ?>

        <section class="centralBlock">
    	<p>Sign Up!</p>
    	<form method="post" action="signUp_POST.php">
    	<p><label for="inputFirstName"> First Name </label>
		<input type="string" id="inputFirstName" name="inputFirstName" value=""></p>
		
        <p><section class='msgfailAuth'>
        <?php 
        if ($_GET['msgError'] == 2)
        {
            echo 'First Name missing';
        };
        ?>
        </section></p>

        <p><label for="inputLastName"> Last Name </label>
		<input type="string" id="inputLastName" name="inputLastName" value=""></p>
		
        <p><section class='msgfailAuth'>
        <?php 
        if ($_GET['msgError'] == 3)
        {
            echo 'Last Name missing';
        };
        ?>
        </section></p>

        <p><label for="inputEmail"> Email </label>
		<input type="string" id="inputEmail" name="inputEmail" value=""></p>
		
        <p><section class='msgfailAuth'>
        <?php 
        if ($_GET['msgError'] == 4)
        {
            echo 'Email missing';
        };
        ?>
        </section></p>

        <p><label for="inputPsw"> Password </label>
		<input type="password" id="inputPsw" name="inputPsw" value=""></p>        
        
        <p><section class='msgfailAuth'>
        <?php 
        if ($_GET['msgError'] == 5)
        {
            echo 'Password missing';
        };
        ?>
        </section></p>

        <p><label for="inputSecPsw">Type Password again </label>
        <input type="password" id="inputSecPsw" name="inputSecPsw" value=""></p>
		
        <p><section class='msgfailAuth'>
        <?php 
        if ($_GET['msgError'] == 6)
        {
            echo 'Passwords do not match';
        };
        ?>
        </section></p>

        <p><input type="Submit" value="Submit"> <input type="button" value="Back" onClick="parent.location='log_in.php'"></p>
        
        <p><section class='msgfailAuth'>
        <?php 
        if ($_GET['msgError'] == 1)
        {
            echo 'You already have an account registred with Teenycoins';
        }
        elseif ($_GET['msgError'] == 7)
        {
            echo 'Invalid Email';
        };
        ?>
        </section></p>

        </form>
        </section>
    </body>
 </html>

