<?php
	require_once "config.php";

	if (isset($_SESSION['access_token'])) {
		header('Location: home.php');
		exit();
	}

	$redirectURL = "http://localhost/FacebookLogin/fb-callback.php";
	$permissions = ['email'];
	$loginURL = $helper->getLoginUrl($redirectURL, $permissions);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> FB Log In </title>
</head>

<body>

	<form style="text-align: center; line-height: 35em">
			<input type="button" onclick="window.location = '<?php echo $loginURL ?>';" 
				   value="Log In With Facebook" 
				   style="cursor: pointer; background: #1877F2; color: white; padding: 20px; border-radius: 15px; border:none; font-size: 20px"
			>
	</form>
</body>
</html>