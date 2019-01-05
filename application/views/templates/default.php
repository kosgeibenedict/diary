<!DOCTYPE html>
<html>
 
    <head>
        <title><?php 
        
        //$config_items=$this->Fetch_model->fetch_config_items('company_name');
        
        //echo $config_items['value']; ?></title>
        <?php
        $this->load->view('main/header');
        ?> 
    </head>
         <style type="text/css">
                 .row{
                         display: flex;
                 }
         </style>
    <body style="margin: 0px; padding: 0px;">   
                <div class="row" style="">
                <div class="sidebar col-sm-2"  style="background-color:#000;margin:0;height: 100% !important">

                        <?php
                       $this->load->view('main/sidebar');
                       ?>
                </div>
                <div class="col-sm-10" style="height:auto;">
                     
                    <?php echo $body; ?>
                      
                </div>
                </div> 
                 <div> 
                         <?php
                         $this->load->view('main/footer');
                         ?>
                 </div>
         
    </body>
     
</html>