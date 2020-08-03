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
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Vibing</title>
<link rel="stylesheet" type="text/css" href="searchstyle.css">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
        $('.search-box input[type="text"]').on("keyup input", function(){
            /* Get input value on change */
            var inputVal = $(this).val();
            var resultDropdown = $(this).siblings(".result");
            if(inputVal.length){
                $.get("search-script.php", {term: inputVal}).done(function(data){
                    // Display the returned data in browser
                    resultDropdown.html(data);
                });
            } else{
                resultDropdown.empty();
            }
        });

        // Set search input value on click of result item
        $(document).on("click", ".result p", function(){
            $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
            $(this).parent(".result").empty();
        });
    });
    </script>
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
                  Welcome <?php echo $_SESSION['username']; ?>
                  <a href="form.php?logout='1'" style="color: black;">Wyloguj się</a>
                <?php endif ?></li>
    </ul>
  </div>
  <div class="d2">
    <h1> Wyszukaj swojego artyste </h1>
    <div class="search-box">
        <input type="text" autocomplete="off" placeholder="Wyszukaj artysty" />
        <div class="result"></div>
      </div>
    </div>
</body>
</html>
