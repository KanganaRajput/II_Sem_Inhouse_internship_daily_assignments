<?php
$page = "form";
include("header.php");

// Function for grade
function calculateGrade($cgpa) {
    if ($cgpa >= 9) return ["A+", "success"];
    elseif ($cgpa >= 8) return ["A", "primary"];
    elseif ($cgpa >= 7) return ["B", "info"];
    elseif ($cgpa >= 6) return ["C", "warning"];
    else return ["F", "danger"];
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $college = $_POST['college'] ?? '';
    $branch = $_POST['branch'] ?? '';
    $cgpa = $_POST['cgpa'] ?? '';

    if (empty($name) || empty($email) || empty($college) || empty($branch) || empty($cgpa)) {
        echo "<div class='alert alert-danger'>All fields are required!</div>";
        include("footer.php");
        exit();
    }

    list($grade, $color) = calculateGrade($cgpa);
}
?>

<div class="card shadow p-4 text-white"
     style="background: linear-gradient(to right, #1d2671, #c33764);">

    <h2 class="text-center mb-3">
        🎉 Welcome <?php echo $name; ?>
    </h2>

    <p><i class="fa fa-user"></i> <b>Name:</b> <?php echo $name; ?></p>
    <p><i class="fa fa-envelope"></i> <b>Email:</b> <?php echo $email; ?></p>
    <p><i class="fa fa-building"></i> <b>College:</b> <?php echo $college; ?></p>
    <p><i class="fa fa-code"></i> <b>Branch:</b> <?php echo $branch; ?></p>
    <p><i class="fa fa-star"></i> <b>CGPA:</b> <?php echo $cgpa; ?></p>

    <!-- Grade -->
    <div class="alert alert-<?php echo $color; ?>">
        Grade: <?php echo $grade; ?>
    </div>

    <!-- Date -->
    <p><b>Date:</b> <?php echo date("Y-m-d"); ?></p>

    <!-- Photo Placeholder -->
    <div class="text-center mt-3">
        <img src="https://via.placeholder.com/120" class="rounded-circle">
    </div>

</div>

<?php include("footer.php"); ?>