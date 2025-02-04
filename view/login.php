<?php
    require_once __DIR__ . '/../controller/UserController.php';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $login = new UserController();
      $cek_login = $login->CekLogin($_POST['username'], $_POST['password']);
    }
?>

<div class="login-box">
  <div class="login-logo">
    <h1><b>Kasir</b></h1>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

    <form  method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" required name="username" placeholder="Masukkan Username">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" required name="password" placeholder="Masukkan Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
