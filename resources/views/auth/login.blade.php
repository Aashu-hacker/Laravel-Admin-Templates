<!DOCTYPE html>
<html lang="en">
  <!-- [Head] start -->
  <head>
    <title>Login | Berry Bootstrap 5 Admin Template</title>
    <!-- [Meta] -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="description"
      content="Berry is made using Bootstrap 5 design framework. Download the free admin template & use it for your project."
    />
    <meta name="keywords" content="Berry, Dashboard UI Kit, Bootstrap 5, Admin Template, Admin Dashboard, CRM, CMS, Bootstrap Admin Template" />
    <meta name="author" content="CodedThemes" />

    <!-- [Favicon] icon -->
    <link rel="icon" href="../assets/images/favicon.svg" type="image/x-icon" />
 <!-- [Google Font] Family -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" id="main-font-link" />
<!-- [Tabler Icons] https://tablericons.com -->
<link rel="stylesheet" href="../assets/fonts/tabler-icons.min.css" />
<!-- [Material Icons] https://fonts.google.com/icons -->
<link rel="stylesheet" href="../assets/fonts/material.css" />
<!-- [Template CSS Files] -->
<link rel="stylesheet" href="../assets/css/style.css" id="main-style-link" />
<link rel="stylesheet" href="../assets/css/style-preset.css" id="preset-style-link" />

  </head>
  <!-- [Head] end -->
  <!-- [Body] Start -->
  <body>
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
      <div class="loader-track">
        <div class="loader-fill"></div>
      </div>
    </div>
    <!-- [ Pre-loader ] End -->

    <div class="auth-main">
      <div class="auth-wrapper v3">
        <div class="auth-form">
          <div class="card my-5">
          @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </div>
            @endif
            <div class="card-body">
              <a href="#" class="d-flex justify-content-center">
                <img src="../assets/images/logo-dark.svg" />
              </a>
              <div class="row">
                <div class="d-flex justify-content-center">
                  <div class="auth-header">
                    <h2 class="text-secondary mt-5"><b>Hi, Welcome Back</b></h2>
                    <p class="f-16 mt-2">Enter your credentials to continue</p>
                  </div>
                </div>
              </div>
              <div class="d-grid">
                <button type="button" class="btn mt-2 btn-light-primary bg-light text-muted">
                  <img src="../assets/images/authentication/google-icon.svg" />Sign In With Google
                </button>
              </div>
              <div class="saprator mt-3">
                <span>or</span>
              </div>
              <form class="login-form" method="POST" action="{{ route('login') }}">
              @csrf
              <h5 class="my-4 d-flex justify-content-center">Sign in with Email address</h5>
              <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" name="email" placeholder="Email address / Username" />
                <label for="floatingInput">Email address / Username</label>
              </div>
              <div class="form-floating mb-3">
                <input type="password" class="form-control" id="floatingInput" name="password" placeholder="Password" />
                <label for="floatingInput">Password</label>
              </div>
              <div class="d-flex mt-1 justify-content-between">
                <div class="form-check">
                  <input class="form-check-input input-primary" type="checkbox" id="customCheckc1" checked="" />
                  <label class="form-check-label text-muted" for="customCheckc1">Remember me</label>
                </div>
                <h5 class="text-secondary">Forgot Password?</h5>
              </div>
              <div class="d-grid mt-4">
                <button type="submit" class="btn btn-secondary">Sign In</button>
              </div>
              </form>
              <hr />
              <h5 class="d-flex justify-content-center">Don't have an account?</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- [ Main Content ] end -->
    <!-- Required Js -->
    <script src="../assets/js/plugins/popper.min.js"></script>
    <script src="../assets/js/plugins/simplebar.min.js"></script>
    <script src="../assets/js/plugins/bootstrap.min.js"></script>
    <script src="../assets/js/config.js"></script>
    <script src="../assets/js/pcoded.js"></script>

  </body>
  <!-- [Body] end -->
</html>
