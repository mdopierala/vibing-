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
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="musicstyle.css">
</head>
<body>
	<div id="d1">
		<ul id="menu">
			<span class="menu-left">
			<li><a class="active" href="glowna.php"><img src="logowanie.png"></img></a></li>
			<li><a href="album.php">Dodaj Utwór</a></li>
			<li id="kontakt"><a href="search-form.php">Wyszukaj</a></li>
      <li id="kontakt"><a href="wszystko.php">Albumy</a></li>

			</span>
			<li class="menu-right"> <div class="conent">           <!-- notification message -->
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
	                  <a href="form.php?logout='1'" style="color: black;">logout</a>
	                <?php endif ?></li>
		</ul>
	</div>
	<div class="d3">
<?php
$connection=mysqli_connect('localhost','root','','vibing');
$artist=$_POST['artist'];
$query=mysqli_query($connection,"select artist, title from music where artist='$artist'");
while($row=mysqli_fetch_assoc($query)){
	echo "<h2>".$row['artist']."</h2><br><h2>".$row['title']."</h2>";
}
$query3=mysqli_query($connection,"select id from music where artist='$artist'");
$albumid=mysqli_fetch_assoc($query3);
$query2=mysqli_query($connection,"select title from songs where musicid=$albumid[id]");
echo "<ol>";
while($raw=mysqli_fetch_assoc($query2)){
	echo "<li> ".$raw['title']."</li><br><br>";
}
echo "</ol>";
mysqli_close($connection);
?>
</div>
<div class="blok-obraz1">
  <img src="muzyk3.png" alt="fredimerekururu" width="334" height="531px">
</div>
</body>
</html>
