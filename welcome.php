
<?php
session_start();

if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit();
}
?>

<?php include 'header.inc'; ?>

<h2>Welcome, <?php
echo htmlspecialchars($_SESSION['user'], ENT_QUOTES, 'UTF-8');
?>!</h2>

<p>You have successfully logged in.</p>

<?php include 'footer.inc'; ?>
