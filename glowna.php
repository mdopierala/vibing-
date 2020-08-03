<?php
  session_start();

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "Musisz sie zalogować";
  	header('location: C:\xampp\htdocs\projekt\logowanie\form.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: C:\xampp\htdocs\projekt\logowanie\form.php");
  }
?>

<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="musicstyle.css">
<title>Vibing</title>
</head>
<body>
	<div id="d1">
		<ul id="menu">
			<span class="menu-left">
		  <li><a class="active" href="glowna.php"><img src="logowanie.png"></img></a></li>
		  <li><a href="album.php">Dodaj utwór</a></li>
		  <li id="kontakt"><a href="search-form.php">Wyszukaj</a></li>
      <li id="kontakt"><a href="wszystko.php">Albumy</a></li>

		  </span>
		  <li class="menu-right"><div class="conent">
				<?php if (isset($_SESSION['success'])) : ?>
					<div class="error success" >
						<h3>
							<?php
								echo $_SESSION['success'];
								unset($_SESSION['success']);
							?>
						</h3>
					</div>
				<?php endif ?>

				<?php  if (isset($_SESSION['username'])) : ?>
					Welcome <?php echo $_SESSION['username']; ?>
					<a href="form.php?logout='1'" style="color:black ;">Wyloguj się</a>
				<?php endif ?>
			</li>
		</ul>
	</div>

    <div class="blok-tekst">
    <h1 class="powitanie">Witaj na Vibing.com</h1>
    <span class="powtianie3">
      Vibing jest stroną poświęcona Twojej Muzyce! <br>
    </span>
      <span class="powtianie3">Daj sie pochłonąć dobrą muzyką oraz informacjami na ich temat!<br>
      </span>
      <span class="powtianie3">Vibing.com - Muzyka jest wszędzie!!!
    </span>
  </div>

  <div class="blok-obraz">
    <img src="muzyk.png" alt="marszemelow" width="403" height="551px">
  </div>
    <div class="d2">
  <p  class="powitanie2">Oto ostatnie dodane albumy przez naszych użytkowników</p>
</div>
<?php
$connection=mysqli_connect('localhost','root','','vibing');
$query=mysqli_query($connection,"select artist, title, type, genre, year from music order by id desc limit 3");
while($row=mysqli_fetch_assoc($query)){
  echo "<div class='blok-php1'> <h2>".$row['artist']."</h2><br>".$row['title']."<br>".$row['type']."<br>".$row['genre']."<br> Rok: " .$row['year']."<br></div>";
}
mysqli_close($connection);
?>


<div class="stopka">

</div>


</body>
</html>
