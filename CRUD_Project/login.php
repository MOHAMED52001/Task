<?php include("./inc/header.php"); ?>
<?php include("./inc/nav.php"); ?>
<?php
if (!empty($_SESSION['errors'])) {
  $err = $_SESSION['errors'];
}
?>
<style>
  body {
    overflow: hidden;
  }

  .divider:after,
  .divider:before {
    content: "";
    flex: 1;
    height: 1px;
    background: #eee;

  }
</style>

<section class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex align-items-center justify-content-center h-100">
      <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">

        <?php
        if (isset($_SESSION['errors'])) :
          foreach ($err as  $value) : ?>
            <div class="alert alert-danger text-center">
              <?= $value; ?>
            </div>

        <?php
          endforeach;
        endif;
        unset($_SESSION['errors']);
        ?>
        <form method="GET" action="./handelers/loginhandeler.php">
          <!-- Email input -->
          <div class="form-outline mb-4">
            <label class="form-label" for="form1Example13">Email address</label>
            <input type="email" id="form1Example13" name="email" class="form-control form-control-lg" />
          </div>

          <!-- Password input -->
          <div class="form-outline mb-4">
            <label class="form-label" for="form1Example23">Password</label>
            <input type="password" name="password" id="form1Example23" class="form-control form-control-lg" />
          </div>

          <!-- Submit button -->
          <input type="submit" value="Sign in" name="signin" class="btn btn-primary btn-lg btn-block">

          <div class="divider d-flex align-items-center my-4">
            <p class="text-center fw-bold mx-3 mb-0 text-muted">OR</p>
          </div>

          <a class="btn btn-primary btn-lg btn-block" style="background-color: #3b5998" href="#!" role="button">
            <i class="fab fa-facebook-f me-2"></i>Continue with Facebook
          </a>
          <a class="btn btn-primary btn-lg btn-block" style="background-color: #55acee" href="#!" role="button">
            <i class="fab fa-twitter me-2"></i>Continue with Twitter</a>

        </form>
      </div>
    </div>
  </div>
</section>

<?php include("./inc/footer.php"); ?>