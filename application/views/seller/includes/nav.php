<?php $this->load->helper('seller'); ?>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- top bar -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?=base_url('home');?>"><?=$this->lang->line('system_name');?></a>
    </div>
    <!--/topbar -->
    

    <!--left sidebar -->
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav side-nav" id="menu">
            <li class="dropdown active">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">MY CLASSIFIED <b class="caret">  </b>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="<?=base_url('seller/dashboard');?>"><i class="fa fa-home"></i>  DASHBOARD</a></li>
                    <li><a href="#"><i class="fa fa-user"></i>  PROFILE PUBLIC VIEW</a></li>
                    <li><a href="<?=base_url('post-ad');?>"><i class="fa fa-pencil"></i>  POST AN AD</a></li>
                    <li><a href="<?=base_url('seller/plans');?>"><i class="fa fa-shopping-bag"></i>  MEMBERSHIP</a></li>
                </ul>
            </li>
            
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">MY ADS   <b class="caret">  </b>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="<?=base_url('seller/myads');?>">
                            <i class="fa fa-home"></i>  MY ADS   <span class="badge" style="float: right;"><?=getAdCount($this->session->userdata('rs_seller_id'));?></span>
                        </a>
                    </li>
                    <li><a href="#"><i class="fa fa-user"></i>  FAVOURITE ADS   <span class="badge" style="float: right;">5</span></a></li>
                    <li>
                        <a href="<?=base_url('seller/pendingads');?>">
                            <i class="fa fa-pencil"></i>  PENDING ADS   <span class="badge" style="float: right;"><?=getPendingAdCount($this->session->userdata('rs_seller_id'))?></span>
                        </a>
                    </li>
                    <li><a href="<?=base_url('seller/hiddenads');?>"><i class="fa fa-shopping-bag"></i>  HIDDEN ADS   <span class="badge" style="float: right;"><?=getHiddenAdCount($this->session->userdata('rs_seller_id'));?></span></a>
                    <li><a href="#"><i class="fa fa-shopping-bag"></i>  RE-SUBMITTED ADS    <span class="badge" style="float: right;">5</span></a>
                    </li>
                </ul>
            </li>

             <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">MY ACCOUNT <b class="caret">  </b>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="#"><i class="fa fa-home"></i>  TRANSACTION</a></li>
                    <li><a href="#"><i class="fa fa-user"></i>  ACCOUNT SETTING</a></li>
                    <li><a href="<?=base_url('seller/logout');?>"><i class="fa fa-shopping-bag"></i>  LOGOUT</a></li>
                </ul>
            </li>
        </ul>
        <!--/left sidebar -->

        <!-- user dropdown top right -->
        <ul class="nav navbar-nav navbar-right navbar-user">
            <li class="dropdown user-dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-user"></i> <?=getSellerName($this->session->userdata('rs_seller_id'));?> <b class="caret"></b>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
                    <li><a href="#"><i class="fa fa-envelope"></i> Inbox <span class="badge">7</span></a></li>
                    <li><a href="#"><i class="fa fa-gear"></i> Settings</a></li>
                    <li class="divider"></li>
                    <li><a href="<?=base_url('seller/logout');?>"><i class="fa fa-power-off"></i> Log Out</a></li>
                </ul>
            </li>
        </ul>
        <!-- user dropdown top right -->
    </div>
</nav>