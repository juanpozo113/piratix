<?php
session_start();

require 'database.php';

if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT usuario, id, email, password FROM users WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

$user = null;

if (count($results) > 0) {
    $user = $results;
}
}
?>
<!DOCTYPE html>
<html lang="en">
    <?php include "php/head.php" ?>
<body>
    <?php include "php/header.php" ?>
    <main>
        <div class="peli">
            <img src="img/ups.png" alt="pagina en desarrollo">
        </div>
    </main>


</body>
</html>