<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header("Location: login.php");
    exit;
}

if (time() - $_SESSION['last_activity'] > 60) {
    session_unset();
    session_destroy();
    header("Location: login.php");
    exit;
}

$_SESSION['last_activity'] = time();
?>

<h2>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>
<p>This is the admin panel.</p>
<a href="logout.php">Logout</a>
