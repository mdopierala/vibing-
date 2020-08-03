<?php include('server.php') ?>
<!DOCTYPE html>
<html dir="ltr">
  <head>
    <link rel="stylesheet" href="formphp.css">
    <meta charset="utf-4">
    <title>vibing.com</title>
  </head>
  <body>
    <div class="box">
    </div>
	<div class="box">
      <form method="post" action="glowna.php">
        <?php include('errors.php'); ?>
    		<span class="text-center">Zaloguj sie do vibing.com</span>
    	<div class="input-container">
        <input type="text" name="username">
    		<label>Nazwa użytkownika</label>
    	</div>
    	<div class="input-container">
        <input type="password" name="password">
    		<label>Hasło</label>
    	</div>
      <button type="submit" class="btn" name="login_user">Login</button>
      <p>
    		<span class="text-login">Nie jesteś zarejestrowany? </span><a href="register.php">Zrób to teraz!</a>
    	</p>
    </form>
    </div>
  </body>
</html>
