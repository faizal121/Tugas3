session_start();
$user = $_POST["email"];
$pass = $_POST["password"];
//=============================
$dbuser = "admin@gmail.com";
$dbpass = "admin123";
/session_start();
/=============================
if ($user == $dbuser && $pass == $dbpass) {
    echo '<h1>LOGIN BERHASIL !!!</h1>';
} else {
    $_SESSION["salah"]++;
    header("location:index.php");
}
