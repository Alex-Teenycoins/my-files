<?php

try
{
    $bdd = new PDO('mysql:host=localhost;port=8889;dbname=Teenycoins', 'root', 'root');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
};

$firstName = $_POST['inputFirstName'];
$lastName = $_POST['inputLastName'];
$email = $_POST['inputEmail'];
$psw = $_POST['inputPsw'];
$secPsw = $_POST['inputSecPsw'];

if ($_POST['inputFirstName'] == '')
	{
		$error=2;
		header ('Location: http://localhost:8888/tests/sign_up.php?msgError='.$error);
		exit;
	};

if ($_POST['inputLastName'] == '')
	{
		$error=3;
		header ('Location: http://localhost:8888/tests/sign_up.php?msgError='.$error);
		exit;
	};

if ($_POST['inputEmail'] == '')
	{
		$error=4;
		header ('Location: http://localhost:8888/tests/sign_up.php?msgError='.$error);
		exit;
	};

	$data = $bdd->query('SELECT email FROM User');
while ($check = $data->fetch())
{
	if ($check['email'] == $_POST['inputEmail'])
	{
		$error=1;
		header ('Location: http://localhost:8888/tests/sign_up.php?msgError='.$error);
		exit;
	}
};

if ($_POST['inputPsw'] == '')
	{
		$error=5;
		header ('Location: http://localhost:8888/tests/sign_up.php?msgError='.$error);
		exit;
	};

if ($_POST['inputPsw'] != $_POST['inputSecPsw'])
{
	$error=6;
	header ('Location: http://localhost:8888/tests/sign_up.php?msgError='.$error);
	exit;
};

if (!filter_var($_POST['inputEmail'], FILTER_VALIDATE_EMAIL))
{
  $error=7;
  header ('Location: http://localhost:8888/tests/sign_up.php?msgError='.$error);
  exit;
}


$req = $bdd->prepare('INSERT INTO User (firstName, lastName, email, psw) VALUES(:firstName,:lastname,:email,:psw)');
$req->execute(array(
	'firstName' => $_POST['inputFirstName'],
	'lastname' => $_POST['inputLastName'],
	'email' => $_POST['inputEmail'],
	'psw' => $_POST['inputPsw']
	));

header('Location: test.php');
?>