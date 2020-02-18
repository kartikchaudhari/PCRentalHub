<!DOCTYPE html>
<html lang="en">
<head>
  <title><?=$this->lang->line('system_name')?> :: <?=$data['title']?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?=base_url('assets/css/bootstrap.min.css');?>">
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="<?=base_url();?>"><?=$this->lang->line('system_name');?><br></a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="#">Home</a></li>
      <li><a href="#">Page 2</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li class="active"><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
<div class="container">
  <div class="row">
    <div class="col-sm-5 col-sm-offset-3">
      <?php
        if ($this->session->flashdata('rs_msg')) {
          echo $this->session->flashdata('rs_msg');
        }
      ?>
      <div class="panel panel-info">
        <div class="panel-heading">
          <h3 class="panel-title"><strong>Login to Seller Account</strong></h3>
        </div>
        <div class="panel-body">
          
          <form method="post" action="<?=base_url('seller/doSellerLogin');?>">
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" name="email" class="form-control" id="email" placeholder="Email" required="required">
            </div>

            <div class="form-group">
              <label for="password">Password:</label>
              <input type="password" name="password" class="form-control" id="password" placeholder="Password" required="required"> 
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-block" name="btnSubmit"><strong>Login</strong></button>  
            </div>
            
            <div class="form-group">
              <div class="checkbox">
                <label><input type="checkbox" name="remember">Remember Me</label>
                <a href="" class="pull-right">Forgot Password?</a>
              </div>
            </div>
          </form>
        
        </div>
      </div>
    </div>
  </div>
</div>
<script src="<?=base_url('assets/js/jquery.min.js');?>"></script>
<script src="<?=base_url('assets/js/bootstrap.js');?>"></script>
</body>
</html>
