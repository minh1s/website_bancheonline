<div class="login-scope">
  <div class="wrapper" style="background-image: url('assets/images/bg-registration-form-2.jpg');">
    <div class="inner">
      <form action="backend/login.php" method="POST">
        <h3>Đăng Nhập</h3>
        
        <div class="form-wrapper">
          <label for="">User</label>
          <input type="text" name="username" class="form-control" required>
        </div>

        <div class="form-wrapper">
          <label for="">Password</label>
          <input type="password" name="password" class="form-control" required>
        </div>
      
        <div class="checkbox">
          <label>
            <input type="checkbox"> Ghi nhớ đăng nhập
            <span class="checkmark"></span>
          </label>
        </div>

        <button type="submit" name="btn-login">Đăng Nhập</button>
        
        <button type="button" onclick="window.location.href='index.php?page=dangki'">Đăng Kí</button>
      </form>
    </div>
  </div>
</div>