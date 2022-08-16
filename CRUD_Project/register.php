<?php include('./inc/header.php'); ?>
<link rel="stylesheet" href="./style/style.css">
<?php include("./inc/nav.php"); ?>
<?php
if (!empty($_SESSION['errors'])) {
  $err = $_SESSION['errors'];
}
?>

<section class="vh-100 bg-image" style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Create an account</h2>
              <?php
                  if (isset($_SESSION['errors'])):
                    foreach ($err as  $value) : ?>
                      <div class="alert alert-danger text-center">
                        <?= $value; ?>
                      </div>

                    <?php 
                    endforeach;
                    endif;  
                    unset($_SESSION['errors']);
                  
              ?>

              <form action="./handelers/registerhandeler.php" method="post">

                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example1cg">Your Name</label>
                  <input type="text" name="name" id="form3Example1cg" class="form-control form-control-lg" />
                </div>

                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example3cg">Your Email</label>
                  <input type="email" name="email" id="form3Example3cg" class="form-control form-control-lg" />
                </div>

                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example4cg">Password</label>
                  <input type="password" name="password" id="form3Example4cg" class="form-control form-control-lg" />
                </div>

                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example4cdg">Repeat your password</label>
                  <input type="password" name="password1" id="form3Example4cdg" class="form-control form-control-lg" />
                </div>

                <div class="d-flex justify-content-center">
                  <input type="submit" name="register" value="Register" style="border: none;" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">
                </div>

                <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="./login.php" class="fw-bold text-body"><u>Login here</u></a></p>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include("./inc/footer.php"); ?>