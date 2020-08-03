<?php
  session_start();

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: C:\xampp\htdocs\projekt\logowanie\form.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: C:\xampp\htdocs\projekt\logowanie\form.php");
  }
?>
<?php
if(isset($_POST['utwor'])){
$connection=mysqli_connect('localhost','root','','vibing');
$title=$_POST['utwor'];
$query=mysqli_query($connection,"select id from music order by id desc limit 1");
$albumid=mysqli_fetch_assoc($query);
for($i=0; $i<count($title); $i++) {
	$query = "INSERT INTO songs(title , no, musicid) VALUES('$title[$i]',$i+1,$albumid[id])";
	mysqli_query($connection,$query);
}
mysqli_close($connection);};
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

				<!-- logged in user information -->
				<?php  if (isset($_SESSION['username'])) : ?>
					Witaj <?php echo $_SESSION['username']; ?>
					<a href="form.php?logout='1'" style="color: black;">Wyloguj się</a>
				<?php endif ?>
			</li>
		</ul>
	</div>
</div>
	<div class="d5">
			<h1>Dodaj nowy zapis</h1>
			<h3>Wypełnij wszystkie pola</h3>
<form action="songs.php" method="POST">
Artysta: <br> <input type="text" name="artist" required><br>
Tytuł: <br> <input type="text" name="title" required><br>
Rodzaj utworu: <br>
<select name="type" required>
<option value="Singiel">Singiel</option>
<option value="EP">EP</option>
<option value="LP">LP</option>
<option value="Mixtape">Mixtape</option>
</select><br>
Gatunek: <br> <input type="text" name="genre" required><br>
Wytwórnia: <br><input type="text" name="label" required><br>
Rok wydania:<br> <input type="number" name="year" required><br><br>
<input class='przycisk' type="submit">
</form>
</div>

<div class="stopka">

</div>
</body>
</html>
