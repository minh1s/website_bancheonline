<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Login & Register</title>
</head>
<body>
  <button class="open-btn" onclick="openPopup()">Login / Register</button>

  <div class="popup" id="authPopup">
    <div class="popup-content">
      <div class="tab-header">
        <button class="tab-link active" onclick="switchTab('login')">Login</button>
        <button class="tab-link" onclick="switchTab('register')">Register</button>
      </div>

      <div class="tab-body">
        <form id="loginTab" class="tab active">
          <input type="email" placeholder="Email" required>
          <input type="password" placeholder="Password" required>
          <button type="submit" class="btn">Login</button>
        </form>

        <form id="registerTab" class="tab">
          <input type="text" placeholder="Full Name" required>
          <input type="email" placeholder="Email" required>
          <input type="password" placeholder="Password" required>
          <button type="submit" class="btn">Register</button>
        </form>
      </div>

      <button class="close-btn" onclick="closePopup()">×</button>
    </div>
  </div>

  <script>
    function openPopup() {
      document.getElementById('authPopup').style.display = 'flex';
    }

    function closePopup() {
      document.getElementById('authPopup').style.display = 'none';
    }

    function switchTab(tab) {
      const loginTab = document.getElementById('loginTab');
      const registerTab = document.getElementById('registerTab');
      const links = document.querySelectorAll('.tab-link');

      if(tab === 'login') {
        loginTab.classList.add('active');
        registerTab.classList.remove('active');
        links[0].classList.add('active');
        links[1].classList.remove('active');
      } else {
        loginTab.classList.remove('active');
        registerTab.classList.add('active');
        links[0].classList.remove('active');
        links[1].classList.add('active');
      }
    }
  </script>
</body>
</html>
