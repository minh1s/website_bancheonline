<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Login & Register Form</title>
</head>
<body>
  <button class="open-btn" onclick="openForm('login')">Login</button>
  <button class="open-btn" onclick="openForm('register')">Register</button>

  <div class="form-popup" id="loginForm">
    <form class="form-container">
      <h2>Login</h2>
      <input type="email" placeholder="Email" required>
      <input type="password" placeholder="Password" required>
      <button type="submit" class="btn">Login</button>
      <button type="button" class="btn cancel" onclick="closeForm('loginForm')">Close</button>
    </form>
  </div>

  <div class="form-popup" id="registerForm">
    <form class="form-container">
      <h2>Register</h2>
      <input type="text" placeholder="Full Name" required>
      <input type="email" placeholder="Email" required>
      <input type="password" placeholder="Password" required>
      <button type="submit" class="btn">Register</button>
      <button type="button" class="btn cancel" onclick="closeForm('registerForm')">Close</button>
    </form>
  </div>

  <script>
    function openForm(type) {
      if(type === 'login') {
        document.getElementById('loginForm').style.display = 'block';
      } else {
        document.getElementById('registerForm').style.display = 'block';
      }
    }

    function closeForm(formId) {
      document.getElementById(formId).style.display = 'none';
    }
  </script>
</body>
</html>
