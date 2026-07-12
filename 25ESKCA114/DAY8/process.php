<?php
$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = trim($_POST['name']);
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'] ?? '';
    $course = $_POST['course'];
    $address = trim($_POST['address']);

    // Validation
    if (strlen($name) < 3) $errors[] = "Name must be at least 3 characters";
    if (!preg_match("/^[0-9]{10}$/", $phone)) $errors[] = "Phone must be 10 digits";
    if (empty($gender)) $errors[] = "Please select gender";
    if (strlen($address) < 10) $errors[] = "Address must be at least 10 characters";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Confirmation</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(to right, #1d2671, #c33764);
            color: white;
        }
    </style>
</head>

<body>

<div class="container mt-5">

<?php if (!empty($errors)) { ?>

    <!-- Error Box -->
    <div class="alert alert-danger">
        <h4><i class="fa fa-exclamation-triangle"></i> Please fix the following:</h4>
        <ul>
            <?php foreach ($errors as $e) echo "<li>$e</li>"; ?>
        </ul>
    </div>

<?php } else { ?>

    <!-- Success Header -->
    <h2 class="text-center mb-4">
        🎉 Welcome 
        <span class="badge bg-warning text-dark"><?php echo $name; ?></span>
    </h2>

    <!-- Data Card -->
    <div class="card text-dark shadow">
        <div class="card-body">

            <p><i class="fa fa-user"></i> <b>Name:</b> <?php echo $name; ?></p>
            <p><i class="fa fa-envelope"></i> <b>Email:</b> <?php echo $email; ?></p>
            <p><i class="fa fa-phone"></i> <b>Phone:</b> <?php echo $phone; ?></p>
            <p><i class="fa fa-venus-mars"></i> <b>Gender:</b> <?php echo $gender; ?></p>
            <p><i class="fa fa-book"></i> <b>Course:</b> <?php echo $course; ?></p>
            <p><i class="fa fa-location-dot"></i> <b>Address:</b> <?php echo $address; ?></p>

        </div>
    </div>

<?php } ?>

</div>

</body>
</html>