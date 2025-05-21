<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>WebxKey Academy - Student Login</title>
  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css"/>
  <style>
    :root {
      --primary: #2E5DAA;
      --secondary: #4A89DC;
      --accent: #6BB9F0;
      --light: #E8F4FC;
      --dark: #1A3B72;
    }

    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f5f7fa;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      background: linear-gradient(135deg, var(--light), white);
    }

    .login-container {
      max-width: 450px;
      width: 100%;
      padding: 2rem;
    }

    .login-card {
      border: none;
      border-radius: 12px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
      overflow: hidden;
      border: 1px solid rgba(46, 93, 170, 0.1);
    }

    .login-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 15px 40px rgba(46, 93, 170, 0.15);
    }

    .login-header {
      background: linear-gradient(135deg, var(--light), var(--accent));
      color: black;
      padding: 2rem;
      text-align: center;
    }

    .login-logo {
      height: 80px;
      margin-bottom: 1rem;
      filter: drop-shadow(0 2px 4px rgba(0,0,0,0.1));
    }

    .login-body {
      padding: 2rem;
      background: white;
    }

    .input-field {
      position: relative;
      margin-bottom: 1.5rem;
    }

    .input-field input {
      width: 100%;
      padding: 1rem;
      border: none;
      border-bottom: 2px solid #ddd;
      background-color: transparent;
      font-size: 1rem;
      outline: none;
    }

    .input-field label {
      position: absolute;
      top: -0.6rem;
      left: 1rem;
      background: white;
      padding: 0 0.3rem;
      font-size: 0.8rem;
      color: var(--primary);
    }

    .input-field .underline {
      position: absolute;
      bottom: 0;
      left: 0;
      height: 2px;
      width: 100%;
      background-color: var(--primary);
      transform: scaleX(0);
      transition: all 0.3s ease;
    }

    .input-field input:focus ~ .underline {
      transform: scaleX(1);
    }

    .password-toggle {
      position: absolute;
      right: 1rem;
      top: 50%;
      transform: translateY(-50%);
      cursor: pointer;
      color: #777;
    }

    .password-toggle:hover {
      color: var(--primary);
    }

    .btn-login {
      background: var(--primary);
      border: none;
      padding: 0.85rem;
      font-weight: 600;
      letter-spacing: 0.5px;
      border-radius: 8px;
      transition: all 0.3s;
      text-transform: uppercase;
      font-size: 0.9rem;
    }

    .btn-login:hover {
      transform: translateY(-2px);
      box-shadow: 0 5px 15px rgba(46, 93, 170, 0.3);
      background: var(--dark);
    }

    .login-footer {
      text-align: center;
      padding: 1.25rem;
      background: rgba(232, 244, 252, 0.7);
      border-top: 1px solid rgba(0, 0, 0, 0.05);
    }

    .login-footer a {
      color: var(--primary);
      text-decoration: none;
      font-weight: 500;
    }

    .login-footer a:hover {
      color: var(--dark);
    }

    .form-check-input:checked {
      background-color: var(--primary);
      border-color: var(--primary);
    }

    .form-check-label {
      color: #555;
      font-weight: 500;
    }

    @media (max-width: 576px) {
      .login-container {
        padding: 1rem;
      }

      .login-header {
        padding: 1.5rem;
      }

      .login-body {
        padding: 1.5rem;
      }

      .login-logo {
        height: 50px;
      }

      .form-control {
        padding: 0.75rem 1rem;
      }
    }
  </style>
</head>
<body>
  <div class="login-container">
    <div class="login-card">
      <div class="login-header">
        <img src="./image/WebxkeyAcademy Logo.png" alt="WebxKey Academy" class="login-logo" />
        <h4>Student Portal</h4>
        <p class="mb-0">Sign in to continue your learning journey</p>
      </div>

      <div class="login-body">
        <form id="loginForm" novalidate>
          <div class="input-field">
            <label for="email">Email Address</label>
            <input type="email" id="email" required />
            <div class="underline"></div>
          </div>

          <div class="input-field">
            <label for="password">Password</label>
            <input type="password" id="password" required minlength="6" />
            <span class="password-toggle" id="togglePassword">
              <i class="bi bi-eye"></i>
            </span>
            <div class="underline"></div>
          </div>

          <div class="d-grid mb-3">
            <button type="submit" class="btn btn-login text-white">Login</button>
          </div>

          <div class="form-check mb-3">
            <input class="form-check-input" type="checkbox" id="rememberMe" />
            <label class="form-check-label" for="rememberMe">Remember me</label>
          </div>
        </form>
      </div>

      <div class="login-footer">
        <a href="#"><i class="bi bi-question-circle me-1"></i> Forgot password?</a> • 
        <a href="#"><i class="bi bi-person-plus me-1"></i> Create account</a>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    const togglePassword = document.getElementById('togglePassword');
    const passwordInput = document.getElementById('password');
    const eyeIcon = togglePassword.querySelector('i');

    togglePassword.addEventListener('click', () => {
      const isPassword = passwordInput.type === 'password';
      passwordInput.type = isPassword ? 'text' : 'password';
      eyeIcon.classList.toggle('bi-eye');
      eyeIcon.classList.toggle('bi-eye-slash');
    });
  </script>
</body>
</html>
