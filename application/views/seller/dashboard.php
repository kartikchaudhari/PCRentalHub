<div id="wrapper">
    <!-- Navigation -->
    <?php $this->load->view('seller/includes/nav'); ?>
    <!--./Navigation-->

    <!-- /#page-wrapper -->
    <div id="page-wrapper">
        
        <!-- alert the user if the has confirmed the email or not -->
        <!-- email confirmation alert -->
        <div class="row">
            <div class="col-sm-12">
                <div class="alert alert-warning" role="alert" style="text-align:center;">
                    <strong><span class="glyphicon glyphicon-lock"></span> Welcome <span style="color: green;"><?=$data['seller_info']['username']?></span>,  go to <span style="color: green;"><?=$data['seller_info']['email']?></span> To verify your email address. </strong>
                    &nbsp;&nbsp;
                    <button style="color:black;font-weight: bold;" onclick="window.open('http://www.<?=explode("@", $data['seller_info']['email'])[1]?>')">Go to your email</button>
                    </a>
                    &nbsp;<strong>&middot;</strong>&nbsp;
                    <button style="color:black;font-weight: bold;" onclick="resendEmail('<?=$data['seller_info']['email']?>')">Resend Email</button>
                </div>
            </div>
        </div>
        <!--/email confirmation alert -->
        

        <!-- bread crumb -->
        <div class="row">
            <div class="col-sm-12">
                <ol class="breadcrumb">
                    <li><a href="index.html"><i class="icon-dashboard"></i> Dashboard</a></li>
                </ol>
            </div>
        </div>
        <!--./bread crumb-->

        <div class="row">
            <div class="col-sm-12">
                <!-- avtar and ad basic details --->
                <div class="panel panel-info">
                    <div class="panel-body">
                        <div>
                            <table class="table table-bordered">
                                <tr style="padding:0px; ">
                                    <td rowspan="2" align="center" valign="middle"><img class="img-responsive" style="height: 100px;width: 100px;" src="<?=base_url($data['seller_info']['image']);?>"></td>
                                    <td><h3>Hello <?=$data['seller_info']['name']?></h3></td>
                                    <td><h3>2</h3></td>
                                    <td><h3>0</h3></td>
                                </tr>
                                <tr>
                                    <td><h5>You last logged in at: <?=$data['seller_info']['lastactive']?></h5></td>
                                    <td><h5>My Ads</h5></td>
                                    <td><h5>Favourites</h5></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <!--./avtar and ad basic details --->
                
                <?php 
                    $attr=array('class'=>'form-horizontal');
                    echo form_open_multipart('seller/doFullRegister', $attr);
                ?>
                <!--my detilas -->
                <div class="col-sm-12">
                    <div class="panel panel-success">
                        <div class="panel-body">
                            <h3 class="panel-title" style="font-size: 25px;">My Details</h3>
                            <hr>
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="uname">Username <span class="text-danger">*</span></label>
                                    <div class="col-sm-10">
                                        <?php
                                            $attr=array('name'=>'uname','type'=>'text','class'=>'form-control','id'=>'uname','value'=>$data['seller_info']['username'],'disabled'=>'disabled');
                                            echo form_input($attr);
                                        ?>
                                    </div>
                                </div>  
                                
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="email">Email Address <span class="text-danger">*</span></label>
                                    <div class="col-sm-10">
                                        <?php
                                            $attr=array('name'=>'email','type'=>'email','class'=>'form-control','id'=>'email','value'=>$data['seller_info']['email'],'disabled'=>'disabled');
                                            echo form_input($attr);
                                        ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="fullname">Full Name <span class="text-danger">*</span></label>
                                    <div class="col-sm-10">
                                        <?php
                                            $attr=array('name'=>'fullname','type'=>'text','class'=>'form-control','id'=>'fullname','value'=>$data['seller_info']['name']);
                                            echo form_input($attr);
                                        ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="avatar">Avatar </label>
                                    <div class="col-sm-10">
                                        <?php
                                            $attr=array('name'=>'avatar','type'=>'file','class'=>'form-control','id'=>'avatar');
                                            echo form_upload($attr);
                                        ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="phone">Phone Number <span class="text-danger">*</span></label>
                                    <div class="col-sm-10">
                                        <?php
                                            $attr=array('name'=>'fullname','type'=>'tel','class'=>'form-control','id'=>'phone','value'=>$data['seller_info']['phone'],empty($data['seller_info']['phone'])?:'disabled'=>'disabled');
                                            echo form_input($attr);
                                        ?>
                                    </div>
                                </div>
                                    
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="address">Address <span class="text-danger">*</span></label>
                                    <div class="col-sm-10">
                                        <?php
                                            $attr=array('name'=>'address','type'=>'text','class'=>'form-control','id'=>'address','value'=>$data['seller_info']['address'],empty($data['seller_info']['address'])?:'disabled'=>'disabled');
                                            echo form_input($attr);
                                        ?>
                                    </div>
                                </div>
                            <br><br> 
                            <h3 class="panel-title" style="font-size: 25px;">Social Networks</h3>
                            <hr>
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="fb">Facebook </label>
                                    <div class="col-sm-10">
                                        <?php
                                            $attr=array('name'=>'facebook','type'=>'text','class'=>'form-control','id'=>'fb','value'=>$data['seller_info']['facebook']);
                                            echo form_input($attr);
                                        ?>
                                    </div>
                                </div>  
                                
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="twitter">Twitter </label>
                                    <div class="col-sm-10">
                                        <?php
                                            $attr=array('name'=>'twitter','type'=>'text','class'=>'form-control','id'=>'text','value'=>$data['seller_info']['twitter']);
                                            echo form_input($attr);
                                        ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="gplus">Google+ </label>
                                    <div class="col-sm-10">
                                        <?php
                                            $attr=array('name'=>'gplus','type'=>'text','class'=>'form-control','id'=>'gplus','value'=>'');
                                            echo form_input($attr);
                                        ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="insta">Instagram </label>
                                    <div class="col-sm-10">
                                        <?php
                                            $attr=array('name'=>'instagram','type'=>'text','class'=>'form-control','id'=>'insta','value'=>$data['seller_info']['instagram']);
                                            echo form_input($attr);
                                        ?>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="link">Linked In </label>
                                    <div class="col-sm-10">
                                        <?php
                                            $attr=array('name'=>'linkedin','type'=>'text','class'=>'form-control','id'=>'insta','value'=>$data['seller_info']['linkedin']);
                                            echo form_input($attr);
                                        ?>
                                    </div>
                                </div>
                                <div class="form-group"> 
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-default">Submit</button>
                                    </div>
                                </div>
                            <?=form_close(); ?>
                        </div>
                    </div>
                </div>
                <!--/my detilas -->
           </div>
        </div>
    </div>
    <!-- /#page-wrapper -->


</div>
<!-- /#wrapper -->
