<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>تسجيل دخول الموظفين</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

  <!-- sweetalert2 -->
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://ncmh.org.sa/admin/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="https://ncmh.org.sa/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="https://ncmh.org.sa/admin/dist/css/adminlte.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

</head>

<body class="hold-transition login-page">
  <div class="login-box">

    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg"><img style="width: 300px;" src="https://ncmh.org.sa/img/logo/NCMH_Logo.svg"></p>

        <form method="POST" action="checkadmin.php">
          <!-- <input type="hidden" name="_token" value="4F0M2NDqb6rfiX7Q59lCLIxNvVn3YwrDd9Cb5WpB"> -->
          <div class="input-group mb-3">
            <input type="email" class="form-control" placeholder="Email" name="email" required>

            <div class="input-group-append">
              <div class="input-group-text">

                <span class="fas fa-envelope"></span>
              </div>
            </div>

          </div>

          <div class="input-group mb-3">
            <input type="password" class="form-control" placeholder="Password" name="password" required>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-8">
              <div class="icheck-primary">
                <input type="checkbox" id="remember">
                <label for="remember">
                  تذكرني
                </label>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block" name="SignIn">Sign In</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
  <!-- /.login-box -->

  <!-- jQuery -->
  <script src="https://ncmh.org.sa/admin/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="https://ncmh.org.sa/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="https://ncmh.org.sa/admin/dist/js/adminlte.min.js"></script>

</body>

</html>