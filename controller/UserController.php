<?php
require_once __DIR__ . '/../database/connection.php';

class UserController
{
    public static function CekLogin($username, $password)
    {
        global $connect;
        // var_dump($_POST)

        $sql = "SELECT * FROM user,level WHERE username = '$username' AND password = '$password' AND level.id_level = user.id_level";
        $query = mysqli_query($connect, $sql);

        if ($query->num_rows > 0) {
            session_start();
            $data = $query->fetch_assoc();
            $_SESSION['id_user'] = $data['id_user'];
            $_SESSION['username'] = $data['username'];
            $_SESSION['password'] = $data['password'];
            $_SESSION['id_level'] = $data['id_level'];
            $_SESSION = 'login_berhasil';
            if ($data['id_level'] == 1) { 
                header('Location: ?url=home');
                exit;
            } else {
                // Jika tidak, tampilkan pesan dan arahkan ke halaman utama
                echo "<script>alert('You do not have permission!');document.location.href='/';</script>";
            }
        } else {
            header('/');
        }
    }
}
