<?PHP
session_start();
if(!isset($_SESSION['zalogowany']))
{header('Location: index.php');
exit();}
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
    <?PHP 
    
    echo"<p>Witaj: ".$_SESSION['user']."<br/>Email: ".$_SESSION['email']."</p>";
    
   echo '<a href="logout.php">wyloguj</a>';
    ?>
    
</body>
</html>