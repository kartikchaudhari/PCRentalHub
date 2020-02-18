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
      <a class="navbar-brand" href="<?=base_url();?>" title="<?=$this->lang->line('system_name');?> Home"><?=$this->lang->line('system_name');?><br></a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="<?=base_url('seller');?>" title="Seller home page">Home</a></li>
      <li><a href="#">Page 2</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="<?=base_url('seller/login');?>"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
<div class="container">
  <div class="row">
    <div class="col-md-7">
      <div class="panel panel-info">
        <div class="panel-heading">
          <h3 class="panel-title">Panel title</h3>
        </div>
        <div class="panel-body">
          <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="<?=base_url(ASSETS_IMGS.'banner1.jpg');?>">
              </div>

              <div class="item">
                <img src="<?=base_url(ASSETS_IMGS.'banners/computers-large2.jpg');?>" alt="Chicago">
              </div>

              <div class="item">
                <img src="<?=base_url(ASSETS_IMGS.'banners/Computer-Rental-Service.jpg');?>" alt="New York">
              </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>    
        </div>
      </div>
    </div>
    <div class="col-md-5">
      <div class="panel panel-info">
        <div class="panel-heading">
          <h3 class="panel-title">Register Today</h3>
        </div>
        <div class="panel-body">
          <?php if ($this->session->flashdata('msg')) {
           echo $this->session->flashdata('msg');
          }?>
          <form method="post" action="<?=base_url('seller/doSellerRegister');?>">
            <div class="form-group">
              <label for="fullname">Full Name</label>
              <input type="text" name="fullname" class="form-control" placeholder="Full Name" required="required">
            </div>
            <div class="form-group">
              <label for="username">Userame</label>
              <input type="text" id="username" name="username" class="form-control" placeholder="Username" required="required" onblur="checkAvailabilityUsername()">
              <div id="uname_msg"></div>
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input id="email" type="email" id="email" name="email" class="form-control"  placeholder="Email" required="required" onblur="checkAvailabilityEmail()">
              <span id="email_msg"></span>
            </div>
            <div class="form-group">
              <label for="password">Password:</label>
              <input type="password" name="password" class="form-control" placeholder="Password" required="required">
            </div>
            <div class="checkbox">
              <label><input type="checkbox" required="required"> By clicking on “Register Now” button you are agree to our <a href="<?=base_url('terms');?>">Terms & Condition</a></label>
            </div>
            <button type="submit" class="btn btn-primary">Register Now</button>
        </form>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="<?=base_url('assets/js/jquery.min.js');?>"></script>
<script src="<?=base_url('assets/js/bootstrap.js');?>"></script>
<script type="text/javascript">

function checkAvailabilityUsername() {
  var username=$("#username").val()
  if (username!="") {
    jQuery.ajax({
        type: "POST",
        url: "<?=base_url('seller/doCheckUsernameAvailabilty');?>",
        data: {username: username},
        
        cache:false,
        success: function (html) {
          $("#uname_msg").html(html);       
        },
        error: function (data) {
          console.log(data)
        }
    });
  }
  else{
     $("#uname_msg").html("<strong style='color:red;'>Username  is required.</strong>");
  }
}


function checkAvailabilityEmail() {
  var email=$("#email").val();
  if (email!="") {
      jQuery.ajax({
        type: "POST",
        url: "<?=base_url('seller/doCheckEmailAvailabilty');?>",
        data: {seller_email: email},
        cache:false,
        success: function (html) {
          $("#email_msg").html(html);
        },
        error: function (data) {
          console.log(data)
        }
      });
    }else{
      $("#email_msg").html("<strong style='color:red;'>Email is required.</strong>");
    }
}
</script>
</body>
</html>
