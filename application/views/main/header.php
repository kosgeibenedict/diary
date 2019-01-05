 	<head><link rel="stylesheet" href="<?= base_url()?>assets/bootstrap/css/admin_bootstrap.css" />
  <link rel="stylesheet" href="<?= base_url()?>assets/style.css"/>
  <script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
  <script type="text/javascript" src="<?= base_url()?>assets/js/jquery-2.2.4.min.js"></script>
	<script src="<?= base_url()?>assets/bootstrap/js/bootstrap.js"></script>
  <script src="<?= base_url()?>assets/script.js"></script>
  <link rel="stylesheet" href="<?= base_url()?>assets/fontawesome/css/fontawesome.min.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/demo.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/material-bootstrap-wizard.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/css/bootstrap.min.css">

  <!--     Fonts and icons     --> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" /> 



<!-- Owl stylesheet -->
<link rel="stylesheet" href="<?= base_url()?>assets/owl-carousel/owl.carousel.css">
<link rel="stylesheet" href="<?= base_url()?>assets/owl-carousel/owl.theme.css">
<script src="<?= base_url()?>assets/owl-carousel/owl.carousel.js"></script>
<!-- Owl stylesheet -->


<!-- slitslider -->
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/slitslider/css/style.css" />
    <link rel="stylesheet" type="text/css" href="<?= base_url()?>assets/slitslider/css/custom.css" />
    <script type="text/javascript" src="<?= base_url()?>assets/slitslider/js/modernizr.custom.79639.js"></script>
    <script type="text/javascript" src="<?= base_url()?>assets/slitslider/js/jquery.ba-cond.min.js"></script>
    <script type="text/javascript" src="<?= base_url()?>assets/slitslider/js/jquery.slitslider.js"></script>
    <script type="text/javascript" src="<?= base_url()?>assets/fontawesome/js/fontawesome.min.js"></script>
    <script type="text/javascript" src="<?= base_url()?>assets/fontawesome/js/regular.min.js"></script>
    <script type="text/javascript" src="<?= base_url()?>assets/fontawesome/js/solid.min.js"></script>
    <script type="text/javascript" src="<?= base_url()?>assets/fontawesome/js/all.min.js"></script>
    <script type="text/javascript" src="<?= base_url()?>assets/fontawesome/js/brands.min.js"></script>
    <script type="text/javascript" src="<?= base_url()?>assets/js/jquery.bootstrap.js"></script>
    <script type="text/javascript" src="<?= base_url()?>assets/js/material-bootstrap-wizard.js"></script>
    <script type="text/javascript" src="<?= base_url()?>assets/js/jquery.validate.min.js"></script>
<!-- slitslider -->

</head>
 


<!-- Header Starts -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-right">
        <?php
                        $config_items=$this->Fetch_model->fetch_config_items('company_name');
                        ?>
  <div  style="font-family:veneer; font-size: 28px"><a class="navbar-brand" href="#"><?=$config_items['value']?></a></div>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
     <!-- <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li> -->
    </ul>
    <!--
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>-->
    <div class="col-sm-2 right">
      <div class="row">
      <div class="col-sm-6"><a href="<?php echo base_url()?>welcome/upload_content" data-toggle="tooltip" title="Upload Content"><i class="fa fa-cloud-upload-alt text-success" style="font-size:24px;padding-top:5px"></i></a></div>
      <div class="col-sm-6 pull-right">
            <div class="row">
                <i class="fa fa-user text-success" style="font-size:24px;padding-top:5px"></i><ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <b class="text-default" style="color:#fff"></b>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item"  href="#">User Image</a> 
          <div class="dropdown-divider"></div> 
                  <a class="dropdown-item" href="#">Logout</a> 
         
          
        </div>
      </li> </ul>    
            </div>
          </div>
        </div>
            
    </div>
  </div>
</nav>
<!-- #Header Starts -->
 