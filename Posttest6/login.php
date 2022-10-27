<?php
  ob_start();
  session_start();
  ob_end_clean();
  if(isset($_SESSION['admin'])){
      header("Location: admin.php");
  }else if(isset($_SESSION['siswa'])){
      header("Location: user.php");
  }

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
  </head>
  <body>
    <div class="center">
      <h1>My Portofolio</h1>
      <form action="proses_login.php" method="post">
        <div class="txt_field">
          <?php
            if(isset($GET["login_error"])){
              echo "<h3 style='color:red'>Username atau Password SALAH!!!</h3>";
            }
          ?>
          <input type="text" name="username" value="" required>
          <span></span>
          <label>Username</label>
        </div>
        <div class="txt_field">
          <input type="password" name="password" value="" required>
          <span></span>
          <label>Password</label>
        </div>
        <div class="multi">
          <label>Pilih Role</label>
          <select name="role" id="role">
            <option value="admin">Admin</option>
            <option value="user">User</option>
          </select>
          <span></span>
        </div>
        <input type="submit" value="Login">
        <div class="signup_link"></div>
      </form>
    </div>

  </body>
</html>
