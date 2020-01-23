<?PHP
session_start();

if((!isset($_POST['login']))||(!isset($_POST['haslo']))){
  header('Location:index.php');
  exit();
}
  


require_once"connect.php";

$polaczenie = @new mysqli($host,$db_user,$db_password,$db_name);

if($polaczenie->connect_errno!=0)
{
  echo"Error: ".$polaczenie->connect_errno;  

}
else{
$login = $_POST['login'];
$password = $_POST['password'];
$sql="SELECT*FROM uzytkownicy WHERE user='$login' AND pass='$password'";

if($rezultat=@$polaczenie->query($sql))
{
$ilu_userow=$rezultat->num_rows;
if($ilu_userow>0){
$wiersz=$rezultat->fetch_assoc();

$_SESSION['zalogowany']=true;
$_SESSION['id']=$wiersz['id'];
$_SESSION['user']=$wiersz['user'];
$_SESSION['email']=$wiersz['email'];

if(isset($_SESSION['blad'])){
unset($_SESSION['blad']);}

$rezultat->free_result();
header('Location: gra.php');
}
else{
$_SESSION['blad']="<span style='color:red'>Nieprawidłowy login lub hasło</span>";
header('Location: index.php');
}



$polaczenie->close();
}}

?>