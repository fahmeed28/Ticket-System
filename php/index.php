
<?php include('includes/header.php'); ?>
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-5">
      <div class="card shadow-lg rounded-3">
        <div class="card-body">
          <h3 class="text-center mb-4"><i class="fa fa-sign-in"></i> Login</h3>
          <form action="" method="POST">
            <div class="mb-3">
              <label for="email" class="form-label">Email address</label>
              <div class="input-group">
                <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
              </div>
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <div class="input-group">
                <span class="input-group-text"><i class="fa fa-lock"></i></span>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required>
              </div>
            </div>
            <button type="submit" class="btn btn-warning w-100"><i class="fa fa-sign-in"></i> Login</button>
          </form>
          <p class="mt-3 text-center">
            Don’t have an account? <a href="Register.php">Register here</a>
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php'); ?>



