<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<?php
    	require('C:\xampp\htdocs\doc\Form.php');
		// $data = array(
		// 	'Nom' => '',
		// 	'Prenom' => ''
		// );
    	$form = new Form($_POST);
	?>


<div class="login-wrap">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
		<input id="tab-2" type="radio" name="tab" class="for-pwd"><label for="tab-2" class="tab">Forgot Password</label>
		<form class="login-form"method="post" action="#">
			<div class="sign-in-htm">
				<div class="group">
					<?php
						$form->createInput('Nom');
					?>
				</div>
				<div class="group">
					<?php
						$form->createInput('Prenom');
					?>
				</div>
				<div class="group">
					<?php
						$form->createSubmit('Envoyer');
					?>
				</div>
				<p>
					<?php
					/* Méthode fonction ternaire */
					// echo (isset($_POST['Nom']) && isset($_POST['Prenom'])) ? "Nom : ".$_POST['Nom'] . " Prenom : ".$_POST['Prenom']  : "il manque vos identifiants";
					/* Méthode avec if else */
					 if (isset($_POST['Nom']) && isset($_POST['Prenom'])){
						// var_dump("Nom : ".$_POST['Nom']);
						// var_dump("Prenom : ".$_POST['Prenom']);
						echo ("Nom : ".$_POST['Nom'] . " Prenom : ".$_POST['Prenom']);
					 }
					 else{
						 echo 'il manque vos identifiants';
					 }
					?>
				</p>
				<div class="hr"></div>
		</div>
			<div class="for-pwd-htm">
				<div class="group">
					<label for="user" class="label">Username or Email</label>
					<input id="user" type="text" class="input">
				</div>
				<div class="group">
					<input type="submit" class="button" value="Reset Password">
				</div>
				<div class="hr"></div>
			</div>
		</form>
	</div>
</div>

</body>
</html>