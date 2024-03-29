@include('header')

<body class="login-page" style="min-height: 466px;">
    <div class="login-box">
    
    <div class="card card-outline card-primary">
    <div class="card-header text-center">
    <a href="../../index2.html" class="h1"><b>Login</a>
    </div>
    <div class="card-body">
    <p class="login-box-msg">Faça login para iniciar sessão</p>
    <form action="../../index3.html" method="post">
    <div class="input-group mb-3">
    <input type="email" class="form-control" placeholder="Email">
    <div class="input-group-append">
    <div class="input-group-text">
    <span class="fas fa-envelope"></span>
    </div>
    </div>
    </div>
    <div class="input-group mb-3">
    <input type="password" class="form-control" placeholder="Password">
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
    Remember Me
    </label>
    </div>
    </div>
    
    <div class="col-4">
    <button type="submit" class="btn btn-primary btn-block">Sign In</button>
    </div>
    
    </div>
    </form>
    <div class="social-auth-links text-center mt-2 mb-3">
    <a href="#" class="btn btn-block btn-primary">
    <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
    </a>
    <a href="#" class="btn btn-block btn-danger">
    <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
    </a>
    </div>
    
    <p class="mb-1">
    <a href="forgot-password.html">I forgot my password</a>
    </p>
    <p class="mb-0">
    <a href="register.html" class="text-center">Register a new membership</a>
    </p>
    </div>
    
    </div>
    
    </div>
    
    
    <script src="../../plugins/jquery/jquery.min.js"></script>
    
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    
    <script src="../../dist/js/adminlte.min.js?v=3.2.0"></script>
    
    
    </body>
