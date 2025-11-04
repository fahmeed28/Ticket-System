<?php
include('includes/header.php');
if (empty($_SESSION['name'])) {
    header('Location: index.php');
}
?>
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card shadow-lg border-0 rounded-4">
        <div class="card-body text-center p-5">
          <h1 class="text-warning mb-3"><i class="fa fa-smile-o"></i> Welcome,<?php echo $_SESSION['name']?>!</h1>
          <p class="lead">You have successfully logged in. This is your dashboard landing pages.</p>
          
          <div class="mt-4">
            <a href="profile.php" class="btn btn-outline-warning me-2">
              <i class="fa fa-user"></i> Profile
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include('includes/footer.php'); ?>
