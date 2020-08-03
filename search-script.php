<?php

$link = mysqli_connect('localhost', 'root', '', 'vibing');

mysqli_set_charset($link,"utf8");

if($link === false){
    die('Błąd połączenia ' . mysqli_connect_error());
}

if(isset($_REQUEST['term'])){
    $sql = 'select artist, title FROM music WHERE artist LIKE ?';

    if($stmt = mysqli_prepare($link, $sql)){
        mysqli_stmt_bind_param($stmt, 's', $param_term);

        $param_term = $_REQUEST['term'] . '%';

        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
            if(mysqli_num_rows($result) > 0){
			echo "<form method='POST' action='musicinfo.php'>";
			echo "<select name='artist'>";
                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                    echo "<option value='".$row['artist']."'>".$row['artist']."</option>";
                }
			echo "</select><br><input type='submit'></form>";
            } else{
                echo '<li class="search-elements dark dark-hover light-border">Brak wyników</li>';
            }
        } else{
            echo "Bład wykonania $sql. " . mysqli_error($link);
        }
    }

    mysqli_stmt_close($stmt);
}

mysqli_close($link);
?>
