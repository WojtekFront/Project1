<?php
session_start();
if((isset($_SESSION['zalogowany']))&&($_SESSION['zalogowany']==true)){
    header('Location: gra.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="zaloguj.php" method="post" >

<input type="text" name="login" placeholder="login:" value="adam"><br>

<input type="password" name="password" placeholder="hasło:" value="qwerty"><br>
<input type="submit" value="zaloguj">


</form>
    <?PHP 
    if(isset($_SESSION['blad'])){
    echo $_SESSION['blad'];
    }
    ?>
</body>
</html>