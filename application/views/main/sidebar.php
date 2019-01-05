<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<style style="text/css">
        .sidebar{
                text-align:left; 
              
        } 
       .sidebar ul li{
                list-style: none;
                color: white;
                font-size: 14px;
                font-family: Tahoma;
                padding-top: 5px;
                padding-bottom: 10px;
                padding-left:0;
                text-decoration: none; 
        } 
        .sidebar a{
                text-decoration: none;
                color:#fff;
        }
        .sidebar ul a li:hover{
                text-decoration: none;
                color: #0FB70F;
        }
        .sidebar ul a li ul li a:hover{
                text-decoration: none;
                color: #fff;
        }
        .sidebar a li:visited{ 
                color: grey;
        }
        .sidebar a:active{ 
                color: #0FB70F;
        }
        i{
                padding-right:7px;
        }
        li ul{
                color: #000;
        }
</style>
<div class="bg bg-dark col-sm-12" style="height: 100% !important">
        <div class="list">
                <div>
                        <?php
                        $config_items=$this->Fetch_model->fetch_config_items('logo');
                        ?>
                <!--<a href="#"><img src="<?//= base_url()?>assets/images/company_infor/<?php //echo $config_items['value']?>" class="img-fluid" alt="Realestate" style="margin-bottom:15px" ></a> -->
                </div>
                <div class="sidebar">
                <ul style="margin-left:-30px;">
                        <br>
                        <li>  &nbsp;&nbsp;&nbsp;&nbsp;<img src="<?=base_url()?>assets/resource_images/profile.png" height="80" width="80" style="border-radius: 5%"></li>
                        <a href="<?=base_url()?>admin/admin"><li><i class="fas fa-igloo"></i> Dashboard</li></a>
                        <a href=""><li><i class="fas fa-clone"></i> Saved</li></a>
                        <hr>
                        <a href=""><li><i class="fa fa-pencil"></i> Bestsellers</li></a><!--swatchbook-->
                        <a href=""><li><i class="fas fa-book-open"></i> Books</li></a>
                        <a href=""><li><i class="fa fa-headphones"></i> Audio Books</li></a>
                        <a href=""><li><i class="fas fa-accusoft"></i> Magazines</li></a>
                        <a data-toggle="collapse" href="#collapse1"><li><i class="fa fa-sitemap "></i> Articles <i class="fa fa-angle-down"> </i>
                        <ul id="collapse1" class="collapse" style="margin-bottom:-15px">
                        <li class=""><a href="<?=base_url()?>admin/Admin/add_rental_property"><i class="fas fa-books"></i> Poems</a></li>
                                <li class=""><a href="#""><i class="fas fa-award"></i> Short Stories</a></li>
                                <li class=""><a href="#"><i class="fas fa-blog"></i> Programming</a></li>
                                <li class=""><a href="#"><i class="fas fa-bookmark"></i> CV Writing</a></li>
                        </ul></li></a> 
                        <a href="#"><li><i class="fa fa-users"></i> Users</li></a> 
                        <a href="#"> <li><i class="fa fa-image"></i> Gallery</li></a>
                        <a href=""><li><i class="fa fa-align-justify"></i> Resources</li></a>
                        <a href=""><li><i class="fa fa-phone"></i> Contact Details</li></a>
                        <a data-toggle="collapse" href="#collapse2"><li><i class="fa fa-cogs"></i> Settings
                        <i class="fa fa-angle-down"> </i>
                        <ul id="collapse2" class="collapse" style="margin-bottom:-15px">
                        <li class=""><a href="#">General Settings</a></li>
                                <li class=""><a href="#">Company Settings</a></li>
                        </ul>
                        </li></a>
                        <a href=""><li><i class="fas fa-music" aria-hidden="true"></i> Sheet Music</li></a> 
                        <br>
                </ul>
                </div>















        </div>
</div>