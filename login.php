
<?php
$error = $_GET['error'] ?? '';
?>

<?php include 'header.inc'; ?>

<h2>Login</h2>

<?php if ($error === '1') { ?>
    <p>Invalid username or password. Please try again.</p>
<?php } ?>

<form action="process.php" method="post">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required>
    <br><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>
    <br><br>

    <input type="hidden" name="token" value="TJY_106728696">

    <button type="submit">Login</button>
</form>

<?php include 'footer.inc'; ?>
