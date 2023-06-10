 <?php

session_start();
include 'connect.php';

class Login
{
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function redirect($location)
    {
        echo "<script>window.location.href = '$location';</script>";
    }

    public function loginUser()
    {
        if (isset($_SESSION["username"])) {
            $this->redirect('index.php');
        }

        if (isset($_POST['submit'])) {
            $user = mysqli_real_escape_string($this->conn, $_POST['username']);
            $pass = md5($_POST['password']);

            $sql = "SELECT * FROM pengguna WHERE username = '$user' AND password = '$pass'";
            $result = mysqli_query($this->conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                $_SESSION['username'] = $user;
                $this->redirect('index.php');
            } else {
                echo "<script> alert('Username atau Password salah');
                window.location.href = 'login.php';</script>";
            }
        }
    }
}

$login = new Login($conn);
$login->loginUser();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="form-container">
        <form action="" method="post">
            <h3> Login</h3>
            <input type="text" name="username" required placeholder="Username">
            <input type="password" name="password" required placeholder="Password">
            <input type="submit" name="submit" value="Login" class="form-btnn">
        </form>
    </div>

</body>

</html> 

<!-- <php

class Connection{
    public $host = "localhost";
    public $user = "root";
    public $password = "";
    public $db = "nilai";
    public $conn;

    public function __construct()
    {
        $this->conn = mysqli
    }
} -->