<?php
session_start();
if ($_SESSION['role'] != 'pensyarah') {
    echo "Akses tidak dibenarkan.";
    exit();
}
?>

<h2>Selamat datang, <?php echo $_SESSION['fullname']; ?></h2>
<p>Anda log masuk sebagai: <?php echo $_SESSION['role']; ?></p>

<a href="logout.php">Logout</a>