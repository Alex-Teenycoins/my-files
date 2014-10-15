<?php

session_start();

try
{
    $bdd = new PDO('mysql:host=localhost;port=8889;dbname=Teenycoins', 'root', 'root');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
};

if ($_POST['inputEmail'] == '' AND $_POST['inputPsw'] == '')
	{
		$error=1;
		header ('Location: http://localhost:8888/tests/log_in.php?msgError='.$error);
		exit;
	}

if ($_POST['inputEmail'] == '')
	{
		$error=2;
		header ('Location: http://localhost:8888/tests/log_in.php?msgError='.$error);
		exit;
	};

if ($_POST['inputPsw'] == '')
	{
		$error=3;
		header ('Location: http://localhost:8888/tests/log_in.php?msgError='.$error);
		exit;
	};

$data = $bdd->query('SELECT firstName, lastName, email, psw FROM User');
while ($check = $data->fetch())
{
	if ($check['email'] == $_POST['inputEmail'] AND $check['psw'] == $_POST['inputPsw'])
	{
		$error=0;
		$_SESSION['firstName'] = $check['firstName'];
		$_SESSION['lasttName'] = $check['lastName'];
		$_SESSION['email'] = $check['email'];
		$_SESSION['psw'] = $check['psw'];
		break;

		/* 1)enregistrer l'user qui login
		2) empecher de montre signIn_POST si je ne trouve pas de match*/
	}
	else 
	{
		$error=4;
	}
};

if ($error == 0)
	{
		header ('Location: test.php');
	}
	else
	{
		header ('Location: http://localhost:8888/tests/log_in.php?msgError='.$error);

	};
$reponse->closureCursor();
?>