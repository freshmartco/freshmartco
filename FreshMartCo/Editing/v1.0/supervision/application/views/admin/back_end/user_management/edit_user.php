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
	<script src="<?php echo base_url();?>admin_assets/global_assets/js/demo_pages/form_floating_labels.js"></script>
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

<script>
		function check_password()
		{
        
			pass=$("#password").val();
			con_pass=$("#confirm_password").val();
			
			if(pass !="" && con_pass !="")
			{
				if(pass != con_pass)
				{
					alert("password is Not Mismatched....!");
					$("#password").val("");
					$("#confirm_password").val("");
					$("#password").focus();
				}
			}
		}

		function isNumber(evt) 
		{
		evt = (evt) ? evt : window.event;
		var charCode = (evt.which) ? evt.which : evt.keyCode;
		if (charCode > 31 && (charCode < 48 || charCode > 57)) 
		{
			return false;
		}
		return true;
		}
		function isalpha(evt) 
		{
		evt = (evt) ? evt : window.event;
		var charCode = (evt.which) ? evt.which : evt.keyCode;

		if(charCode==32)
		{
		return true;
		}

		else if (charCode > 31 && (charCode < 65 || charCode > 90) && (charCode < 97 || charCode > 122) || charCode==13)
		{
		return false;
		}
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
						<h4><a href="<?php echo site_url('manage-ad/user_management');?>"> <i class="icon-arrow-left52 mr-2"></i></a> <span class="font-weight-semibold">Edit User Master</span> </h4>
						<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
					</div>

				</div>

				<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
					<div class="d-flex"> 
						<div class="breadcrumb">
							<a href="<?php site_url('home/dashboard');?>" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
							<span class="breadcrumb-item active">Edit User Master</span>
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
                    <form class="form-horizontal" action="<?php echo site_url('manage-ad/user_management/update_user_details/'.$user_details[0]['id']);?>" method="POST" enctype="multipart/form-data">
                        
						<!-- Other inputs -->
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">New User</h5>
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
												<label>Company Name: <span class="text-danger">*</span></label>
												<input type="text" class="form-control" name="cmp_name" id="cmp_name" required autocomplete="off" value="<?php echo $user_details[0]['company_name'];  ?>">
											</div>
										</div>
										<div class="col-md-6">
											 <div class="form-group">
											<label>Status: <span class="text-danger">*</span></label>
												<select class="form-control" name="status" id="status" required>
												<option value="0" <?php if($user_details[0]['status']==0){ echo "selected";}?> >Active</option>
												<option value="1" <?php if($user_details[0]['status']==1){ echo "selected";}?>>In-active</option>
												</select>											
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>From Date: <span class="text-danger">*</span></label>
												<input type="text" class="form-control datepicker" name="from_date" id="from_date" required autocomplete="off" value="<?php echo date("d-m-Y",strtotime($user_details[0]['from_date']));  ?>">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>To Date: <span class="text-danger">*</span></label>
												<input type="text" class="form-control datepicker" name="to_date" id="to_date" required autocomplete="off" value="<?php echo date("d-m-Y",strtotime($user_details[0]['to_date']));  ?>">
											</div>
										</div>
									</div>
									
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
											<label>Password: <span class="text-danger">*</span></label>
												<input type="text" class="form-control" name="password" id="password" onchange="check_password();"  required autocomplete="off" value="<?php echo $user_details[0]['normal_psd'];  ?>">											
											</div>
										</div> 
										<div class="col-md-6">
											<div class="form-group">
												<label>Confirm Password: <span class="text-danger">*</span></label>
												<input type="text" class="form-control" name="confirm_password" id="confirm_password"  onchange="check_password();" required autocomplete="off" value="<?php echo $user_details[0]['normal_psd'];  ?>">
											</div> 
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>Company Phone No: <span class="text-danger">*</span></label>
												<input type="text" class="form-control" name="phone" id="phone" required autocomplete="off" minlength="10" maxlength="10" onkeypress="return isNumber(event)" value="<?php echo $user_details[0]['phone'];  ?>">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Company Email: <span class="text-danger">*</span></label>
												<input type="email" class="form-control" name="email" id="email" required autocomplete="off" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" value="<?php echo $user_details[0]['email'];  ?>">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>Contact Person: <span class="text-danger">*</span></label>
												<input type="text" class="form-control" name="person" id="person" required autocomplete="off" value="<?php echo $user_details[0]['contact_person'];  ?>">
											</div>
										</div>
										<div class="col-md-6">
											
										</div>
									</div>
									
									
									<div class="row">
										<div class="col-md-6">
										
											<table class="table table-bordered">
											<thead>
												<tr>
													<th>IP Address:</th> 
													<th>Action</th> 
												</tr>
											</thead>
											<tbody id="gstn_div">
													<tr id="row_1"> 
														<td>
                                                        <input type="text" class="form-control" name="ip_address[]" id="ip_address" autocomplete="off">
														</td>
														  
														<td><a href="javascript:void(0);" id="addButton"><i class="fa fa-plus-square" aria-hidden="true"></i></a></td>
													</tr>
											</tbody>
										</table>
										
										</div>
										
										<div class="col-md-6">
										
											<table class="table table-bordered">
											<thead>
												<tr>
													<th>Si No</th> 
													<th>IP Address:</th> 
													<th>Action</th> 
												</tr>
											</thead>
											<tbody id="gstn_div">
											
											
											 <?php 
												$i=1;
												foreach($ip_config as $res)
												{	
                                                 										
													echo '
													<tr>
                                                        <td>'.$i.'</td>                                                       
                                                        <td>'.$res['ip_address'].'</td>												 
														 
														<td><a href="javascript:void(0);" id=ip_'.$res['id'].' onclick="delete_ip_address(this.id);"><i class="fa fa-trash"></i> Delete</a></td>
														    
													</tr>';
													$i++;
												}
											?> 
											
													 
											</tbody>
										</table>
										
										</div>
										
										
									</div><br/>
									
									
									<button type="submit" class="btn btn-primary" name="upload_now" style="width:13%" id="h-default-basic-start">Update</button>
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
	


<script>
		$(document).ready(function()
			{
				var counter = 1;
				
				$("#addButton").click(function () 
				{
					$("div#divLoading").addClass('show');	
						jQuery.ajax({
									type:"POST",
									url:"<?php echo base_url(); ?>" + "index.php/manage-ad/user_management/add_new_ip_field",
									datatype:"text",
									data:{counter:counter},
									success:function(response)
									{
										$("#gstn_div").append(response);
										$("div#divLoading").removeClass('show');
										counter++;
									},
									error:function (xhr, ajaxOptions, thrownError){}
							});
				}); 
			});	
			
			
			 function remove_cycle_div(id)
		  {
			  r=confirm("Are You Sure...?");
			  if(r==true)
			  {
				$("#row_"+id).empty();
			  }
		  }
		  
		  
		  
		  function delete_ip_address(id)
			{ 
				data=id.split('_');
				 
				id=data[1];
 
				r=confirm("Are You Sure to Delete ?");
				if(r==true)
				{
				 $("div#divLoading").addClass('show');	
					jQuery.ajax({
					type:"POST",
					url:"<?php echo base_url(); ?>" + "index.php/manage-ad/user_management/delete_ip_address",
					datatype:"text",
					data:{id:id},
					success:function(response)
					{   
                     location.reload();
					
					},
					error:function (xhr, ajaxOptions, thrownError){}
					});
				}
			}


		  
	</script>
	
</body>
</html>
