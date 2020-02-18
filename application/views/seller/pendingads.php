<?php
$this->load->helper(array('city','seller','fb_time_ago','classifieds')); 
?>
<div id="wrapper">
    <!-- Navigation -->
    <?php $this->load->view('seller/includes/nav'); ?>
    <!--./Navigation-->

    <!-- /#page-wrapper -->
    <div id="page-wrapper">
        <!-- bread crumb -->
        <div class="row">
            <div class="col-lg-12">
                <h1 style="margin-top: -3px;">Pending Ads</h1>
                <ol class="breadcrumb">
                    <li><a href="index.html"><i class="icon-dashboard"></i> Dashboard</a></li>
                    <li><i class="icon-file-alt"></i> My Ads</li>
                    <li class="active"><i class="icon-file-alt"></i> Pending Ads</li>
                </ol>

                <div class="table-responsive">
                    <table id="example" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th><i class="fa fa-file-text"></i> Item Details</th>
                                <th class="item-status"><i class="fa fa-bell"></i> Status</th>
                                <th><i class="fa fa-cog"></i> Option</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                if (count($ads)>0):
                                    foreach ($ads as $ad):
                                ?>
                            <tr>
                                <td>
                                    <div class="col-sm-4" style="overflow: hidden;">
                                        <?php $ad_img_array=explode(',',$ad['screen_shot']);?>
                                        <img class="img-responsive img-thumbnail" src="<?=base_url(AD_IMAGE_PATH.$ad_img_array[0])?>" alt="<?=$ad['product_name'];?>" style="height: 150px;width:100%;">
                                    </div>
                                    <div class="col-sm-8">
                                        <h5><strong><?=$ad['product_name']?></strong></h5>
                                        <hr style="border:1px dashed grey;margin-top: -5px;margin-bottom: 10px;">
                                        <li><strong>Posted In:</strong> <?=$ad['category']?></li>
                                        <li><strong>City:</strong> <?=getCityState($ad['city']);?></li>
                                        <li><strong>Date Creation:</strong> <?=facebook_time_ago($ad['created_at'])?></li>
                                        <li><strong>Charge Per day:</strong> <?=$this->lang->line('rs');?><?=$ad['price']?></li>
                                    </div>
                                </td>
                                <td width="10%" align="center">
                                    <?=printProductStatus($ad['status']);?> 
                                </td>
                                <td width="20%">
                                    <a class="btn btn-xs btn-success" href="#">
                                        <i class="fa fa-pencil"></i> Edit
                                    </a>
                                    <a class="btn btn-xs btn-info" href="#">
                                        <i class="fa  fa-eye-slash"></i> Hide 
                                    </a>
                                    <a class="btn btn-xs btn-danger" href="#">
                                        <i class="fa fa-remove"></i> Delete
                                    </a>
                                </td>
                            </tr>
                            <?php 
                                    endforeach;
                                endif;

                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--./bread crumb-->

        <div class="row">
            <div class="col-lg-12">
                
            </div>
        </div>
    </div>
    <!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->
