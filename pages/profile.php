<?php
session_start();
if (!isset($_SESSION['logged-in'])) {
    header('Location: login.php');
    exit();
}
?>
<!doctype html>
<html lang="en">
<head>
    <title>Features</title>
    <?php require_once '../components/head.html'; ?>
</head>
    <body>
    <?php require_once '../components/header.html'; ?>
    <main>
        <h1>My Profile</h1>
    </main>
    <?php require_once '../components/footer.html'; ?>
    </body>
</html>
