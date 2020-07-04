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

	 <script src="<?php echo base_url();?>admin_assets/global_assets/js/plugins/notifications/bootbox.min.js"></script>
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
						<h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Area Management</span> </h4>
						<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
					</div>

					<div class="header-elements d-none">
							<a href="<?php echo site_url('country/add_area');?>" class="btn btn-labeled btn-labeled-right bg-primary">Add Area<b><i class="fa fa-plus" aria-hidden="true"></i></b></a>
					</div>
				</div>

				<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
					<div class="d-flex">
						<div class="breadcrumb">
							<a href="<?php site_url('manage-ad/home/dashboard');?>" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
							<span class="breadcrumb-item active">Area Management</span>
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
					 
					</div>
				</div>
				<!-- /floating labels -->

		
			<!-- content area -->

	<div class="card" id="validation_result">
				<div class="card">
                <table class="table table-bordered table-hover datatable-highlight">
						<thead>
							<tr>
								<th style="width:1%">Si No</th> 
								<th style="width:1%;display: none;">Si No</th> 
								<th>Country Name</th>	
								<th>State Name</th>	
								<th>City Name</th>	
								<th>Area Name</th>	
								<th>Status</th>	
								<th style="width:1%" class="text-center">Actions</th> 
							</tr>
						</thead>

						<tbody>

							<?php 
								if(!empty(count($area_master))){
									$i=1;
									foreach ($area_master as $key => $value) {

										$status="";
										if($value['status']==0)
										{
											$status="checked";
										}

										 echo '
										 	<tr>
										 		<td>'.$i.'</td> 
										 		<td  style="display: none;">'.$i.'</td> 
										 		<td>'.$value['country_name'].'</td>
										 		<td>'.$value['state_name'].'</td>
										 		<td>'.$value['city_name'].'</td>
										 		<td>'.$value['area_name'].'</td>
										 		s
										 		<td>
													<label class="switch">
													<input type="checkbox" id="'.$value['area_id'].'" '.$status.' onclick="change_status(this.id);">
													<span class="slider round"></span>
													</label>
												</td>
 
 												<td class="text-center">
													<div class="list-icons">
														<div class="dropdown">
															<a href="#" class="list-icons-item" data-toggle="dropdown">
																<i class="icon-menu9"></i>
															</a>
															<div class="dropdown-menu dropdown-menu-right">	  

																<a href="'.site_url('country/edit_area/'.$value['area_id']).'"   class="dropdown-item"><i class="fa fa-pencil"></i> Edit Details</a>

																<a style="display:none;" href="javascript:void(0);"  onclick="delete_area('.$value['area_id'].')"   class="dropdown-item "><i class="fa fa-trash"></i> Delete
																</a>

															</div>
														</div>
													</div>
												</td>

										 	</tr>
										 ';
										 $i++;
									}
								 }
								?>

					</table>
				</div>
			 <div id="modal_theme_primary" class="modal fade" tabindex="-1">
					<div class="modal-dialog modal-lg">
						<div class="modal-content" id="order_details">
							
						</div>
					</div>
				</div>
		 	 

		</div>
		<!-- /main content -->
			<!-- content area -->
         <div class="card" id="validation_result">
            <div class="card">
            </div>
            <!-- Footer -->
             <?php $this->load->view('admin/back_end/footer'); ?>
			<!-- /footer -->
         </div>


	</div>
	

</body>
<script type="text/javascript">
	

	function change_status(origin)
		{
			value=1;
			if ($('#'+origin).is(':checked')) 
			 {
				value=0;
			 }

			bootbox.confirm({
                title: 'Confirm Status',
                message: 'Are you sure to change the status ?',
                buttons: {
                    confirm: {
                        label: 'Yes',
                        className: 'btn-primary'
                    },
                    cancel: {
                        label: 'Cancel',
                        className: 'btn-link'
                    }
                },
                callback: function (result) {
					if(result==true)
					{					    		 
						 jQuery.ajax({
							type:"POST",
							url:"<?php echo base_url(); ?>" + "index.php/country/change_areaStatus",
							datatype:"text",
							data:{area_id:origin,value:value},
							success:function(response)
							{ 
								bootbox.alert({
									title: 'Message',
									message: 'Status updated Successfully..!',
									backdrop: true,
									callback: function () { 
											location.reload();
										}
									}); 
							},
							error:function (xhr, ajaxOptions, thrownError){}
							});
						
					}else
						{
							$('#'+origin).prop('checked', true); 
						}
                }
            });			
		}

	function delete_area(id)
			{  			
				  
				 bootbox.confirm({
                title: 'Confirm delete',
                message: 'Are you sure to delete the record ?',
                buttons: {
                    confirm: {
                        label: 'Yes',
                        className: 'btn-primary'
                    },
                    cancel: {
                        label: 'Cancel',
                        className: 'btn-link'
                    }
                },
                callback: function (result) {
					if(result==true)
					{
						$("div#divLoading").addClass('show');	
						jQuery.ajax({
						type:"POST",
						url:"<?php echo base_url(); ?>" + "index.php/country/delete_area",
						datatype:"text",
						data:{id:id},
						success:function(response)
						{
							$("div#divLoading").removeClass('show');
							bootbox.alert({
								title: 'Alert',
								message: 'Record deleted successfully..!',
								callback: function () { 
										location.reload();
									}
								}); 
								 
						},
						error:function (xhr, ajaxOptions, thrownError){}
						});
					}
                }
            });
		}
</script>
</html>
