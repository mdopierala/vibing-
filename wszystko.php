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
    <h1 class="powitanie">Tutaj znajdziesz wszystkich wykonawców i albumy</h1>
    <span class="powtianie4">
      Muzyka najwięcej i najpełniej opowiada wtedy, gdy się jej nie przeszkadza. <br>
    </span>
      <span class="powtianie3">Achim Freyer<br>
      </span>

  </div>

  <div class="blok-obraz">
    <img src="muzyk2.png" alt="oziozborn" width="403" height="551px">
  </div>
    <div class="d2">
</div>
<?php
$connection=mysqli_connect('localhost','root','','vibing');
$query=mysqli_query($connection,"select songs.title as tytul, artist, music.title as album from songs inner join music on songs.musicid=music.id");
while($row=mysqli_fetch_assoc($query)){
  echo "<div class='blok-php1'> <h2>".$row['tytul']."</h2><br>".$row['artist']."<br>".$row['album']."<br></div>";
}
mysqli_close($connection);
?>


<div class="stopka">

</div>


</body>
</html>
