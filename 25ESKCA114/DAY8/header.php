<?php
if (!isset($page)) {
    $page = "";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student System</title>

    <!-- Meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap + Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
</head>

<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="container">
    <a class="navbar-brand" href="#">StudentApp</a>

    <div>
        <ul class="navbar-nav">

            <li class="nav-item">
                <a class="nav-link <?php if($page=='home') echo 'active'; ?>" href="index.php">Home</a>
            </li>

            <li class="nav-item">
                <a class="nav-link <?php if($page=='form') echo 'active'; ?>" href="index.php">Register</a>
            </li>

            <li class="nav-item">
                <a class="nav-link <?php if($page=='about') echo 'active'; ?>" href="#">About</a>
            </li>

        </ul>
    </div>
</div>
</nav>

<div class="container mt-4">