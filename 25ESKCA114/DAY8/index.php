<?php
$page = "home";
include("header.php");
?>

<div class="card p-4 shadow">
    <h2 class="text-center mb-4">
        <i class="fa fa-user-graduate"></i> Student Registration
    </h2>

    <form action="confirm.php" method="POST" class="needs-validation" novalidate>

        <input type="text" name="name" class="form-control mb-3" placeholder="Full Name" required>

        <input type="email" name="email" class="form-control mb-3" placeholder="Email" required>

        <input type="text" name="college" class="form-control mb-3" placeholder="College" required>

        <input type="text" name="branch" class="form-control mb-3" placeholder="Branch" required>

        <input type="number" step="0.01" name="cgpa" class="form-control mb-3" placeholder="CGPA" required>

        <button class="btn btn-primary w-100">Submit</button>

    </form>
</div>

<script>
(() => {
  'use strict'
  const forms = document.querySelectorAll('.needs-validation')
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
      }
      form.classList.add('was-validated')
    }, false)
  })
})();
</script>

<?php include("footer.php"); ?>