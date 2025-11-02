<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="../assets/css/login.css">
</head>

<body>
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-sm"> <!-- modal nhỏ -->
    <div class="modal-content p-4 shadow-lg">
      <div class="modal-header border-0 justify-content-center">
        <h5 class="modal-title" id="loginModalLabel">Đăng nhập</h5>
        <button type="button" class="btn-close btn-close-white position-absolute top-0 end-0 m-2" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        <form id="loginForm">
          <div class="mb-3">
            <input type="text" class="form-control form-modern" id="username" placeholder="Tên đăng nhập" required>
          </div>

          <div class="mb-3">
            <input type="password" class="form-control form-modern" id="password" placeholder="Mật khẩu" required>
          </div>

          <div class="mb-3 form-check text-center">
            <input type="checkbox" class="form-check-input" id="rememberMe">
            <label class="form-check-label" for="rememberMe">Ghi nhớ đăng nhập</label>
          </div>

          <button type="submit" class="btn btn-login w-100">Đăng nhập</button>
        </form>

        <div class="mt-3 text-center">
          <a href="#">Quên mật khẩu?</a> | <a href="#">Đăng ký</a>
        </div>
      </div>
    </div>
  </div>
</div>



</body>

</html>