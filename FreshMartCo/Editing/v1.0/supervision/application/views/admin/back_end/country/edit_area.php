

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title><?= COMPANY_NAME ?></title>
      <!-- Global stylesheets -->
      <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
      <link href="<?php echo base_url();?>admin_assets/global_assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
      <link href="<?php echo base_url();?>admin_assets/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
      <link href="<?php echo base_url();?>admin_assets/assets/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
      <link href="<?php echo base_url();?>admin_assets/assets/css/layout.min.css" rel="stylesheet" type="text/css">
      <link href="<?php echo base_url();?>admin_assets/assets/css/components.min.css" rel="stylesheet" type="text/css">
      <link href="<?php echo base_url();?>admin_assets/assets/css/colors.min.css" rel="stylesheet" type="text/css">
      <!-- /global stylesheets -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
      <!-- Core JS files -->
      <script src="<?php echo base_url();?>admin_assets/global_assets/js/main/jquery.min.js"></script>
      <script src="<?php echo base_url();?>admin_assets/global_assets/js/main/bootstrap.bundle.min.js"></script>
      <script src="<?php echo base_url();?>admin_assets/global_assets/js/plugins/loaders/blockui.min.js"></script>
      <!-- /core JS files -->
      <script src="<?php echo base_url();?>admin_assets/global_assets/js/plugins/forms/inputs/inputmask.js"></script>
      <script src="<?php echo base_url();?>admin_assets/global_assets/js/plugins/forms/selects/select2.min.js"></script>
      <script src="<?php echo base_url();?>admin_assets/global_assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
      <script src="<?php echo base_url();?>admin_assets/global_assets/js/plugins/forms/styling/uniform.min.js"></script>
      <script src="<?php echo base_url();?>admin_assets/global_assets/js/plugins/extensions/jquery_ui/core.min.js"></script>
      <script src="<?php echo base_url();?>admin_assets/global_assets/js/plugins/forms/inputs/typeahead/typeahead.bundle.min.js"></script>
      <script src="<?php echo base_url();?>admin_assets/global_assets/js/plugins/forms/tags/tagsinput.min.js"></script>
      <script src="<?php echo base_url();?>admin_assets/global_assets/js/plugins/forms/tags/tokenfield.min.js"></script>
      <script src="<?php echo base_url();?>admin_assets/global_assets/js/plugins/forms/inputs/touchspin.min.js"></script>
      <script src="<?php echo base_url();?>admin_assets/global_assets/js/plugins/forms/inputs/maxlength.min.js"></script>
      <script src="<?php echo base_url();?>admin_assets/global_assets/js/plugins/forms/inputs/formatter.min.js"></script>
      <!-- Theme JS files -->
      <script src="<?php echo base_url();?>admin_assets/global_assets/js/plugins/tables/datatables/datatables.min.js"></script>
      <script src="<?php echo base_url();?>admin_assets/global_assets/js/plugins/forms/selects/select2.min.js"></script>
      <script src="<?php echo base_url();?>admin_assets/assets/js/app.js"></script>
      <script src="<?php echo base_url();?>admin_assets/global_assets/js/demo_pages/datatables_advanced.js"></script>
      <script src="<?php echo base_url();?>admin_assets/global_assets/js/plugins/date/jquery-ui.js"></script>
      <script>
         $( function() 
         {
         var d = new Date();
         d.setFullYear(d.getFullYear()+10);
         
         var date = $('.datepicker').datepicker({dateFormat: 'dd-mm-yy',changeMonth: true,
         changeYear: true,minDate:0}).val();
         } );
      </script>
      <!-- /theme JS files -->
      <style>
         .error
         {
         color:red;
         }
      </style>
      <style>
         #divLoading
         {
         display : none;
         }
         #divLoading.show
         {
         display : block;
         position : fixed;
         z-index: 100;
         background-color:#666;
         background-image : url('<?php echo base_url();?>admin_assets/3.gif');
         opacity : 0.4;
         background-repeat : no-repeat;
         background-position : center;
         left : 0;
         bottom : 0;
         right : 0;
         top : 0;
         }
         #loadinggif.show
         {
         left : 50%;
         top : 50%;
         position : absolute;
         z-index : 101;
         width : 32px;
         height : 32px;
         margin-left : -16px;
         margin-top : -16px;
         }
         div.content {
         width : 100%;
         height : 100%;
         }
      </style>
      <style>
         .switch {
         position: relative;
         display: inline-block;
         width: 60px;
         height: 27px;
         }
         .switch input {display:none;}
         .slider {
         position: absolute;
         cursor: pointer;
         top: 0;
         left: 0;
         right: 0;
         bottom: 0;
         background-color: #ccc;
         -webkit-transition: .4s;
         transition: .4s;
         }
         .slider:before {
         position: absolute;
         content: "";
         height: 18px;
         width: 18px;
         left: 4px;
         bottom: 4px;
         background-color: white;
         -webkit-transition: .4s;
         transition: .4s;
         }
         input:checked + .slider {
         background-color: #2196F3;
         }
         input:focus + .slider {
         box-shadow: 0 0 1px #2196F3;
         }
         input:checked + .slider:before {
         -webkit-transform: translateX(26px);
         -ms-transform: translateX(26px);
         transform: translateX(26px);
         }
         /* Rounded sliders */
         .slider.round {
         border-radius: 8px;
         }
         .slider.round:before {
         border-radius: 50%;
         }
      </style> 
   </head>
   <body>
      <!-- Main navbar -->
      <?php 
         $this->load->view('admin/back_end/topbar');
         
         ?>
      <!-- /main navbar -->
      <div id="divLoading"> 
      </div>
      <!-- Page content -->
      <div class="page-content">
      <!-- Main sidebar -->
      <?php $this->load->view('admin/back_end/menu'); ?>
      <!-- /main sidebar -->
      <!-- Main content -->
      <div class="content-wrapper">
      <!-- Page header -->
      <div class="page-header page-header-light">
         <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
               <h4><a href="<?php echo site_url('user_management');?>"><i class="icon-arrow-left52 mr-2"></i></a> <span class="font-weight-semibold">Edit Area</span> </h4>
               <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>
         </div>
         <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
            <div class="d-flex">
               <div class="breadcrumb">
                  <a href="<?php echo site_url('home/dashboard');?>" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                  <span class="breadcrumb-item active">Edit Area</span>
               </div>
               <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>
         </div>
      </div>
      <!-- /page header -->
      <!-- Content area -->
      <div class="content">
         <!-- Floating labels -->
         <div class="row">
            <div class="col-md-12">
               <form class="form-horizontal" action="<?php echo site_url('country/update_area/'.$areaDetails['area_id']);?>" method="POST" enctype="multipart/form-data">
                  <!-- Other inputs -->
                  <div class="card">
                     <div class="card-header header-elements-inline">
                        <h5 class="card-title">Edit Area</h5>
                        <div class="header-elements">
                           <div class="list-icons">
                              <a class="list-icons-item" data-action="collapse"></a>
                              <a class="list-icons-item" data-action="reload"></a>
                           </div>
                        </div>
                     </div>
                     <div class="card-body">
                        <div class="row">
                           <div class="col-md-1">
                           </div>
                           <div class="col-md-10">
                              <div class="row">
                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <label>Country Name: <span class="text-danger">*</span></label>
                                          <select class="form-control" name="country_name" id="country_name" required onchange="return get_stateList();">
                                          <option value="">--Select Country--</option>
                                         <?php
                                          if(!empty($country_master)){
                                             foreach ($country_master as $key => $value) { 
                                                 if($areaDetails['country_id'] == $value['country_id'])
                                                {
                                                echo '<option value="'.$value['country_id'].'" selected>'.$value['country_name'].'</option>';
                                                }else
                                                {                                                   
                                                echo '<option value="'.$value['country_id'].'">'.$value['country_name'].'</option>';
                                                }

                                             }
                                          }
                                           ?>
                                       </select>
                                    </div>
                                 </div> 
                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <label>State Name: <span class="text-danger">*</span></label>
                                          <select class="form-control" name="state_name" id="state_name" required onchange="return get_cityList();">
                                          <option value="">--Select State--</option>
                                         <?php
                                          if(!empty($state_master)){
                                             foreach ($state_master as $key => $value) {
                                                 
                                                 if($areaDetails['state_id'] == $value['state_id'])
                                                { 
                                                    echo '<option value="'.$value['state_id'].'" selected>'.$value['state_name'].'</option>';
                                                } 
                                                else{
                                                   if($areaDetails['country_id'] == $value['country_id'])
                                                   { 
                                                       echo '<option value="'.$value['state_id'].'">'.$value['state_name'].'</option>';
                                                   } 
                                                } 

                                             }
                                          }
                                           ?>
                                       </select>
                                    </div>
                                 </div>
                              </div>
                              <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                       <label>City Name: <span class="text-danger">*</span></label>
                                          <select class="form-control" name="city_name" id="city_name" required>
                                          <option value="">--Select City--</option>
                                         <?php
                                          if(!empty($state_master)){
                                             foreach ($city_master as $key => $value) 
                                             {
                                                if($areaDetails['city_id'] == $value['city_id'])
                                                { 
                                                    echo '<option value="'.$value['city_id'].'" selected>'.$value['city_name'].'</option>';
                                                } 
                                                else{
                                                   if($areaDetails['state_id'] == $value['state_id'])
                                                   { 
                                                       echo '<option value="'.$value['city_id'].'">'.$value['city_name'].'</option>';
                                                   } 
                                                } 
                                             }

                                          }
                                           ?>
                                       </select>
                                    </div>
                                 </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <label>Area Name: <span class="text-danger">*</span></label>
                                       <input type="text" class="form-control" name="area_name" id="area_name" required autocomplete="off"  value="<?=$areaDetails['area_name']; ?>" required>
                                    </div>
                                 </div>
                              </div>

                           <button type="submit" class="btn btn-primary"  style="width:13%" id="h-default-basic-start">Save</button>            
                           </div>
                        </div>
                     </div>
                  </div>
               </form>
            </div>
         </div>
         <!-- /floating labels -->
         <!-- content area -->
         <div class="card" id="validation_result">
            <div class="card">
            </div>
            <!-- Footer -->
             <?php $this->load->view('admin/back_end/footer'); ?>
			<!-- /footer -->
         </div>
         <!-- /main content -->
      </div>
   </body>

   <script type="text/javascript">
      function get_stateList()
      {       
         var country_id=$('#country_name').val();
         if(country_id != '')
         {
            $("div#divLoading").addClass('show');
            jQuery.ajax({
               type:"POST",
               url:"<?php echo base_url(); ?>" + "index.php/country/get_stateList/"+country_id, 
               success:function(response)
               { 
                   $("#state_name").empty();
                  $("#state_name").append(response);
                  $("div#divLoading").removeClass('show');
               },
               error:function (xhr, ajaxOptions, thrownError){}
               });
         }
      }

      function get_cityList()
      {       
         var state_id=$('#state_name').val();
         if(state_id != '')
         {
            $("div#divLoading").addClass('show');
            jQuery.ajax({
               type:"POST",
               url:"<?php echo base_url(); ?>" + "index.php/country/get_cityList/"+state_id, 
               success:function(response)
               { 
                   $("#city_name").empty();
                  $("#city_name").append(response);
                  $("div#divLoading").removeClass('show');
               },
               error:function (xhr, ajaxOptions, thrownError){}
               });
         }
      }

   </script>

</html>

