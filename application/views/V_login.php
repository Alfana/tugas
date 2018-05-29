<?php 
$this->load->view('login/header');
?>

<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>Login </b>Page</a>
  </div>
  <!-- /.login-logo -->

  	<?php if(isset($_SESSION['error']) && $_SESSION['error'] <> '') {  ?>
    <br>
        <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>Warning!</strong> Username atau Password yang anda masukan salah. Silahkan coba kembali
        </div>
    <?php } $_SESSION['error'] = ''; ?>
	<div class="login-box-body">
    <p class="login-box-msg">Please Login With Your Account</p>

    <form action="<?= base_url() ?>login/login" method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Username" name="username" autofocus>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label></label>
          </div>
        </div>
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

<?php
$this->load->view('login/footer');
 ?>