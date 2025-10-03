<?php include('includes/header.php'); ?>

<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card shadow-lg border-0 rounded-4">
        <div class="card-body text-center p-5">
          <h1 class="text-warning mb-3"><i class="fa fa-smile-o"></i> Welcome, Fahmeed!</h1>
          <p class="lead">You have successfully logged in. This is your dashboard landing page.</p>
          
          <div class="mt-4">
            <a href="profile.php" class="btn btn-outline-warning me-2">
              <i class="fa fa-user"></i> Profile
            </a>
            <a href="index.php" class="btn btn-danger">
              <i class="fa fa-sign-out"></i> Logout
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include('includes/footer.php'); ?>
