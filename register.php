<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>vibing.com</title>
  <link rel="stylesheet" type="text/css" href="formphp.css">
  <meta charset="utf-4">
</head>
<body>
 <div class="box">
    </div>
	<div class="box">
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
	<span class="text-center">Zarejestruj sie do vibing.com</span>
	<div class="input-container">

  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	  <label>Nazwa użytkownika</label>
	</div>
  	<div class="input-container">

  	  <input type="text" name="email" value="<?php echo $email; ?>">
  	  	  <label> Email</label>
	</div>
  	<div class="input-container">

  	  <input type="password" name="password_1">
	  <label>Hasło</label>
  	</div>
  	<div class="input-container">

  	  <input type="password" name="password_2">
	  <label>Potwierdź hasło</label>
  	</div>
  	<div class="input-container">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		<span class="text-login">Posiadasz już konto?</span><a href="form.php">Zaloguj się!</a>
  	</p>
	</div>
  </form>
</body>
</html>
