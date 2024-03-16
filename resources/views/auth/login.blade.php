<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Custom CSS -->
  <style>
    body {
      background-color: #f8f9fa;
      font-family: Arial, sans-serif;
    }
    .login-container {
      max-width: 400px;
      margin: 0 auto;
      padding: 40px 20px;
      background: #fff;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      margin-top: 50px;
    }
    .login-container h2 {
      margin-bottom: 30px;
      text-align: center;
    }
    .login-container form {
      margin-bottom: 20px;
    }
    .form-group {
      margin-bottom: 20px;
    }
    .form-control {
      height: 50px;
    }
    .btn-login {
      width: 100%;
      height: 50px;
    }
  </style>
</head>
<body>

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="login-container">
          <h2>Login</h2>
            <form action="{{ route('loginproses') }}" method="POST">
                @csrf

            <div class="form-group">
                <input type="text" class="form-control" name="email" placeholder="Email">
              </div>
            <div class="form-group">
              <input type="password" class="form-control" name="password" placeholder="Password">
            </div>
            <div class="d-felx">
                <p>Belum Punya Akun?</p>
                <a href="register">Register</a>
            </div>
            <button type="submit" class="btn btn-primary btn-login">Login</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
