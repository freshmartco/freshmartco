<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Admin Panel</title>

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
	<script>
		function change_status(id)
		{
			value=1;
			if ($('#'+id).is(':checked')) 
					{
						value=0;
				}		 
			r=confirm("Are you sure to change the status ?");
			if(r==true)
			{
				jQuery.ajax({
					type:"POST",
					url:"<?php echo base_url(); ?>" + "index.php/manage-ad/user_management/change_status",
					datatype:"text",
					data:{id:id,value:value},
					success:function(response)
					{
						alert("Updated Successfully");
					},
					error:function (xhr, ajaxOptions, thrownError){}
					});
			}
			else
			{
				$('#'+id).prop('checked', true); 
			}
		}

		function delete_user_master(id){
		 
			r=confirm("Are you sure you want to delete title ?");
			if(r==true)
			{
				$("div#divLoading").addClass('show');
				jQuery.ajax({
					type:"POST",
					url:"<?php echo base_url(); ?>" + "index.php/manage-ad/user_management/delete_user_master",
					datatype:"text",
					data:{id:id},
					success:function(response)
					{
						//alert(response);
						alert("Deleted Successfully");
						 $("#get_details").empty();
						$("#get_details").append(response);
						$("div#divLoading").removeClass('show');
					},
					error:function (xhr, ajaxOptions, thrownError){}
					});
			}
			 
		}
		

		function view_user_master(id){
		 
		  
			 jQuery.ajax({
				 type:"POST",
				 url:"<?php echo base_url(); ?>" + "index.php/manage-ad/user_management/view_user",
				 datatype:"text",
				 data:{id:id},
				 success:function(response)
				 { 
					$('#order_details').empty();
					$('#order_details').append(response);
                    $('#modal_theme_primary').modal('show');
				 },
				 error:function (xhr, ajaxOptions, thrownError){}
				 });
		 
		  
	 }
 
	</script>
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
						<h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">User Management</span> </h4>
						<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
					</div>

					<div class="header-elements d-none">
							<a href="<?php echo site_url('user_management/new_user');?>" class="btn btn-labeled btn-labeled-right bg-primary">New User<b><i class="fa fa-plus" aria-hidden="true"></i></b></a>
					</div>
				</div>

				<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
					<div class="d-flex">
						<div class="breadcrumb">
							<a href="<?php site_url('manage-ad/home/dashboard');?>" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
							<span class="breadcrumb-item active">User Management</span>
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
								<th>Company Name</th>	
								<th>Company code</th>	
								
								<th>Con Person</th>	
								<th>Phone</th>	
                            	<th>Access Start Date</th>				
								<th style="width:15%">Access End Date</th>
                                <th>Status</th>
								<th style="width:1%" class="text-center">Actions</th>
							</tr>
						</thead>
						<tbody id="get_details">
							<?php 
                                $i=1;  
                                
								foreach($user_master as $row)
								{  
                                    $status="";
									if($row['status']==0)
									{
										$status="checked";
									}
									echo '
											<tr>
												<td style="width:1%">'.$i.'</td>												
												<td>'.$row['company_name'].'</td>
												<td>'.$row['comp_code'].'</td>
												 
                                                <td>'.$row['contact_person'].'</td>
                                                <td>'.$row['phone'].'</td>
                                               <td style="width:15%">'.date("d-m-Y",strtotime($row['from_date'])).'</td>
                                                <td style="width:15%">'.date("d-m-Y",strtotime($row['to_date'])).'</td>
                                                
                                                
                                                <td>
													<label class="switch">
													<input type="checkbox" id="'.$row['id'].'" '.$status.' onclick="change_status(this.id);">
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
																<a href="javascript:void(0);" id="view_'.$row['id'].'" onclick="view_user_master('.$row['id'].');" class="dropdown-item"><i class="fa fa-eye"></i> View Details</a>												
																<a href="'.site_url('manage-ad/user_management/edit_user/'.$row['id']).'" class="dropdown-item"><i class="fa fa-pencil"></i> Edit Details</a>
																<a href="javascript:void(0);" id="del_'.$row['id'].'" onclick="delete_user_master('.$row['id'].');" class="dropdown-item"><i class="fa fa-trash"></i> Delete</a>
															</div>
														</div>
													</div>
												</td>
											</tr>';
									$i++;
								}
							?>
						</tbody>
					</table>
				</div>
			



			 <div id="modal_theme_primary" class="modal fade" tabindex="-1">
					<div class="modal-dialog modal-lg">
						<div class="modal-content" id="order_details">
							
						</div>
					</div>
				</div>



			<!-- Footer -->
			<div class="navbar navbar-expand-lg navbar-light">
				<div class="text-center d-lg-none w-100">
					<button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-footer">
						<i class="icon-unfold mr-2"></i>
						Footer
					</button>
				</div>

				<div class="navbar-collapse collapse" id="navbar-footer">
					<span class="navbar-text">
						<a href="#">Application</a> by <a href="http://webomindapps.com" target="_blank">Webomindapps Pvt Ltd</a>
					</span>

					
				</div>
			</div>
			<!-- /footer -->

		</div>
		<!-- /main content -->

	</div>
	


</body>
</html>
