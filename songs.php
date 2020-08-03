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
if(isset($_POST['artist'])){
$connection=mysqli_connect('localhost','root','','vibing');
$artist=$_POST['artist'];
$title=$_POST['title'];
$type=$_POST['type'];
$genre=$_POST['genre'];
$label=$_POST['label'];
$year=$_POST['year'];
$sql="insert into music(artist, title, type, genre, label, year) values('$artist','$title','$type','$genre','$label',$year)";
// $sql="insert into music(artist, title, type, genre, label, year) values('xD','xD','xD','xD','xD',15)";
mysqli_query($connection,$sql);
mysqli_close($connection);
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
      <li><a href="album.php">Dodaj utwór</a></li>
      <li id="kontakt"><a href="search-form.php">Wyszukaj</a></li>
      <li id="kontakt"><a href="wszystko.php">Albumy</a></li>

      </span>
      <li class="menu-right">      <div class="content">
                <!-- notification message -->
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
  <div class="d2">
<form method="POST">
Liczba utworów: <input type="number" name="nr" required><br>
<input type="submit">
</form>
 <?php
if(isset($_POST['nr'])){
$connection=mysqli_connect('localhost','root','','vibing');
$nr=$_POST['nr'];
$x=1;
echo "<form action='album.php' method='POST'>";
while($x<=$nr){
	echo "$x utwór: <input type='text' name='utwor[]' required><br>";
	$x++;
}
echo "<input type='submit'></form>";
}
?>
</div>
</body>
</html>
