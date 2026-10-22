
<?php
session_start();

$username = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

if ($username === 'TJY' &&
    $password === '106728696') {

    session_regenerate_id(true);
    $_SESSION['user'] = $username;

    header('Location: welcome.php');
    exit();

} else {
    header('Location: login.php?error=1');
    exit();
}
?>
