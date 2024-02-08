<?php
if (!isset($_SESSION)) {
    session_start();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Worlds</title>
    <link href="bootstrap.min.css" rel="stylesheet">
    <link href="jumbotron.css" rel="stylesheet">
</head>
<body>
<div class="container" style="padding-top: 20px;">
    <!-- Centered Page Header -->
    <header class="text-center">
        <h1>Hospital Management System</h1>
    </header>

    <nav class="navbar navbar-static-top" style="padding-top: 10px;">
        <ul class="nav nav-pills">
            <?php
            if (isset($_SESSION['username'])) {
                echo '<li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>';
            }
            ?>
        </ul>
    </nav>

    <!-- Page Content goes here -->

</div>
<script src="bootstrap.bundle.min.js"></script>
</body>
</html>
