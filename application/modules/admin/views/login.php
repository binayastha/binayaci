<?php $alertmessage='';?>
<div class="login-box">
      <div class="login-logo">
        <b>Dashboard</b>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <?php echo $message;?>
        <?php echo form_open("admin/login");?>
          <div class="form-group has-feedback">
            <?php echo form_input($identity);?>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <?php echo form_input($password);?>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">

            <div class="col-xs-4">

                <input name="btnlogin" class="btn btn-primary btn-block btn-flat"  type="submit" id="btnlogin" value="Login" onclick="f1.submit();" />
            </div><!-- /.col -->
          </div>
      <?php echo form_close();?>
      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->
