<!DOCTYPE html>
<html>
<head>
    <title>Student Registration</title>

    <!-- Bootstrap + Font Awesome -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(to right, #0f2027, #203a43, #2c5364);
        }
        .card {
            border-radius: 15px;
        }
    </style>
</head>

<body>

<div class="container mt-5">
    <div class="card shadow p-4">

        <h2 class="text-center mb-4">
            <i class="fa fa-user-graduate"></i> Student Registration
        </h2>

        <form action="process.php" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>

            <!-- Photo Upload -->
            <div class="text-center mb-3">
                <img id="preview" src="https://via.placeholder.com/120"
                     class="rounded-circle border mb-2" width="120" height="120">
                <input type="file" class="form-control">
            </div>

            <!-- Name -->
            <input type="text" name="name" class="form-control mb-3" placeholder="Full Name" required minlength="3">
            <div class="invalid-feedback">Enter at least 3 characters.</div>

            <!-- Email -->
            <input type="email" name="email" class="form-control mb-3" placeholder="Email" required>
            <div class="invalid-feedback">Enter a valid email.</div>

            <!-- Phone -->
            <input type="text" name="phone" class="form-control mb-3" placeholder="Phone Number"
                   required pattern="[0-9]{10}">
            <div class="invalid-feedback">Enter 10 digit phone.</div>

            <!-- Gender -->
            <div class="mb-3">
                <label><b>Gender</b></label><br>
                <input type="radio" name="gender" value="Male" required> Male
                <input type="radio" name="gender" value="Female"> Female
                <input type="radio" name="gender" value="Other"> Other
                <div class="invalid-feedback d-block">Select gender.</div>
            </div>

            <!-- Course -->
            <select name="course" class="form-control mb-3" required>
                <option value="">Select Course</option>
                <option>B.Tech</option>
                <option>BCA</option>
                <option>BBA</option>
                <option>MCA</option>
            </select>
            <div class="invalid-feedback">Select a course.</div>

            <!-- Address -->
            <textarea name="address" class="form-control mb-3" placeholder="Address" required minlength="10"></textarea>
            <div class="invalid-feedback">Minimum 10 characters required.</div>

            <button class="btn btn-primary w-100">
                <i class="fa fa-paper-plane"></i> Register
            </button>

        </form>
    </div>
</div>

<script>
// Image preview
document.querySelector("input[type='file']").addEventListener("change", function(e) {
    const file = e.target.files[0];
    if(file){
        document.getElementById("preview").src = URL.createObjectURL(file);
    }
});

// Bootstrap validation
(() => {
  'use strict'
  const forms = document.querySelectorAll('.needs-validation')

  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }
      form.classList.add('was-validated')
    }, false)
  })
})();
</script>

</body>
</html>