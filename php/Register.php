<?php include('includes/header.php'); ?>
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6 col-lg-5">
      <div class="card shadow-lg border-0 rounded-4">
        <div class="card-header bg-warning text-white text-center rounded-top">
          <h3 class="mb-0"><i class="fa fa-user-plus"></i> Register</h3>
        </div>
        <div class="card-body p-4">
          <form action="ExtraPages/register_action.php" method="POST">
            
            <!-- Full Name -->
            <div class="mb-3">
              <label for="name" class="form-label">Full Name</label>
              <div class="input-group">
                <span class="input-group-text bg-light"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter full name" required>
              </div>
            </div>
            
            <!-- Email -->
            <div class="mb-3">
              <label for="email" class="form-label">Email Address</label>
              <div class="input-group">
                <span class="input-group-text bg-light"><i class="fa fa-envelope"></i></span>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
              </div>
            </div>
            
            <!-- Password -->
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <div class="input-group">
                <span class="input-group-text bg-light"><i class="fa fa-lock"></i></span>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required minlength="6">
              </div>
              <div class="form-text">Password must be at least 6 characters.</div>
            </div>
            
            <!-- Confirm Password -->
            <div class="mb-3">
              <label for="confirm_password" class="form-label">Confirm Password</label>
              <div class="input-group">
                <span class="input-group-text bg-light"><i class="fa fa-lock"></i></span>
                <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Re-enter password" required>
              </div>
              <small id="errorMsg" class="text-danger d-none">Passwords do not match!</small>
            </div>
            
            <!-- Register Button -->
            <div class="d-grid">
              <button type="submit" id="submitBtn" class="btn btn-warning"><i class="fa fa-user-plus"></i> Register Now</button>
            </div>
          </form>

          <!-- Login Link -->
          <p class="mt-3 text-center">
            Already have an account? <a href="index.php">Login here</a>
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>

<!-- Inline Script just for confirm password -->
<script>
  const password = document.getElementById("password");
  const confirmPassword = document.getElementById("confirm_password");
  const errorMsg = document.getElementById("errorMsg");
  const submitBtn = document.getElementById("submitBtn");

  confirmPassword.addEventListener("input", function () {
    if (password.value !== confirmPassword.value) {
      errorMsg.classList.remove("d-none");
      submitBtn.disabled = true;
    } else {
      errorMsg.classList.add("d-none");
      submitBtn.disabled = false;
    }
  });
</script>
