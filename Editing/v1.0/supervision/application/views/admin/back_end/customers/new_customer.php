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

	<!-- Core JS files -->
	<script src="<?php echo base_url();?>admin_assets/global_assets/js/main/jquery.min.js"></script>
	<script src="<?php echo base_url();?>admin_assets/global_assets/js/main/bootstrap.bundle.min.js"></script>
	<script src="<?php echo base_url();?>admin_assets/global_assets/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="<?php echo base_url();?>admin_assets/global_assets/js/plugins/forms/wizards/steps.min.js"></script>
	<script src="<?php echo base_url();?>admin_assets/global_assets/js/plugins/forms/selects/select2.min.js"></script>
	<script src="<?php echo base_url();?>admin_assets/global_assets/js/plugins/forms/styling/uniform.min.js"></script>
	<script src="<?php echo base_url();?>admin_assets/global_assets/js/plugins/forms/inputs/inputmask.js"></script>
	<script src="<?php echo base_url();?>admin_assets/global_assets/js/plugins/forms/validation/validate.min.js"></script>
	<script src="<?php echo base_url();?>admin_assets/global_assets/js/plugins/extensions/cookie.js"></script>

	<script src="<?php echo base_url();?>admin_assets/assets/js/app.js"></script>
	<script src="<?php echo base_url();?>admin_assets/global_assets/js/demo_pages/form_wizard.js"></script>
	<!-- /theme JS files -->

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
						<h4><a href="<?php echo site_url('customers');?>"><i class="icon-arrow-left52 mr-2"></i></a> <span class="font-weight-semibold">New customer</span> </h4>
						<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
					</div>
				</div>
				<div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
					<div class="d-flex">
						<div class="breadcrumb">
							<a href="<?php echo site_url('home/dashboard');?>" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
							<span class="breadcrumb-item active">Create an Account</span>
						</div>
						<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
					</div>
				</div>
			</div>
			<!-- /page header -->


	<!-- Page content -->
	<div class="page-content"> 

			<!-- Content area -->
			<div class="content">
 
		<!-- Google Maps -->
		<!-- <div class="card">
		   <div class="row">
		      <div class="col-md-8">
		         <div class="form-group">
		            <label for="field-1" class="col-sm-3 control-label">Pick Up Location<span class="text-danger">*</span></label>                 
		            <div class="col-sm-5">
		               <div id="map_canvas" style="height:300px;width:700px;margin: 0.6em;">                                       
		               </div>
		            </div>
		         </div>
		      </div>
		      <div class="col-md-4">
		         <div class="form-group">
		            <label for="field-1" class="col-sm-3 control-label">Address<span class="text-danger">*</span></label>                 
		            <div class="col-sm-5">
		               <textarea class="form-control" id="activity_address" name="activity_address" placeholder="Address" data-validate="required" data-message-required="Please enter the Address" id="activity_address" rows="7" readonly="true"></textarea>
		            </div>
		         </div>
		         <div class="form-group">
		            <label for="field-1" class="col-sm-3 control-label">Latitude<span class="text-danger">*</span></label>                  
		            <div class="col-sm-5">
		               <input type="text" class="form-control" name="latitude" onblur="getmap()" placeholder="Latitude" data-validate="required" data-message-required="Please enter the latitude of the pick up location" id="lat" readonly="true">
		            </div>
		         </div>
		         <div class="form-group">
		            <label for="field-1" class="col-sm-3 control-label">Longitude<span class="text-danger">*</span></label>                 
		            <div class="col-sm-5">
		               <input type="text" class="form-control" name="longitude" onblur="getmap()" placeholder="Longitude" data-validate="required" data-message-required="Please enter the Longitude of the pick up location" id="lng" readonly="true">
		            </div>
		            <div class="col-sm-5">
		               <input type="text" class="form-control" name="postal_code" onblur="getmap()" placeholder="postal_code" data-validate="required" data-message-required="Please enter the Postal Code" id="postal_code" readonly="true">
		            </div>
		         </div>
		      </div>
		   </div>
		</div>
 -->
<!-- Google Maps -->

	            <!-- Wizard with validation -->
	            <div class="card">
					<div class="card-header bg-white header-elements-inline">
						<h6 class="card-title">Fill the below form to create a new account.</h6>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

                	<form class="wizard-form steps-validation" action="<?php echo site_url('customers/save_customer'); ?>"  id="user_details" method="post" enctype="multipart/form-data">
						<h6>Fill out basic details</h6>
						<fieldset>
							<br/>
							<div class="row">
								<div class="col-md-2">
								</div>
								<div class="col-md-4">
									<div class="form-group">										 
										<label>Select location: <span class="text-danger">*</span></label>
										<select name="area_id" data-placeholder="Select location" id="area_id" class="form-control form-control-select2 required" data-fouc>
											 
											<?php 
												if(count($locations)>0){ 
													foreach ($locations as $l_k => $l_v) {
													echo '<option value="'.$l_v['area_id'].'">'.$l_v['area_name'].'</option> ';
													}
												}
											?> 
										</select>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">										 
										<label>Select customer channel: <span class="text-danger">*</span></label>
										<select name="channel_id" data-placeholder="Select  customer channel" id="channel" class="form-control form-control-select2 required" data-fouc> 
											<?php 
												if(count($channel_type)>0){ 
													foreach ($channel_type as $l_k => $l_v) {
													echo '<option value="'.$l_v['channel_id'].'">'.$l_v['channel_type'].'</option> ';
													}
												}
											?> 
										</select>
									</div>
								</div>
							</div>

							<div class="row"> 
								<div class="col-md-2">
								</div>

								<div class="col-md-4">
									<div class="form-group">
										<label>Customer name: <span class="text-danger">*</span></label>
										<input type="text" name="name" id="name" class="form-control required" placeholder="Customer Name">
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Mobie No :<span class="text-danger">*</span></label>
										<input type="text" name="mobile" name="mobile" class="form-control required" placeholder="Mobile No" onkeypress="return isNumber(event)"  minlength="10" maxlength="10">
									</div>
								</div>
							</div> 
							<div class="row">
								<div class="col-md-2">
								</div>								
								<div class="col-md-4">
									<div class="form-group">
										<label>Email address: <span class="text-danger">*</span></label>
										<input type="email" name="email" id="email" class="form-control required" placeholder="example@email.com">
									</div>
								</div>

								<div class="col-md-4">
									<div class="form-group">
										<label>Password: <span class="text-danger">*</span></label>
										<input type="text" name="password" class="form-control required" placeholder="password" value="Freshmartco@123">
									</div>
								</div>
								
							</div>
						</fieldset>

						<h6>Fill out your delivery address</h6>
						<fieldset>
							<div class="row">
								<div class="col-md-2">
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Pin Location: <span class="text-danger">*</span></label>
		                                <input type="text" name="pin_location" id="pin_location" placeholder="Pin Location" class="form-control required">
	                                </div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Block No: <span class="text-danger"></span></label>
		                                <input type="text" name="block_no" placeholder="Block No" class="form-control" onkeypress="return isNumber(event)">
	                                </div>
								</div>

								 
							</div>

							<div class="row">
								<div class="col-md-2">
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Building Name: <span class="text-danger">*</span></label>
		                                <input type="text" name="building_name" placeholder="Building Name" class="form-control required">
	                                </div> 
								</div>
								<div class="col-md-4"> 

									<div class="form-group">
										<label>Street No:</label>
		                                <input type="text" name="street_no" placeholder="Street No" class="form-control"  onkeypress="return isNumber(event)">
	                                </div>
								</div>
							</div>	

							<div class="row">
								<div class="col-md-2">
								</div>
								<div class="col-md-4"> 
									<div class="form-group">
										<label>City:<span class="text-danger">*</span></label>
		                                <input type="text" name="city_name" placeholder="City" class="form-control required">
	                                </div>
								</div>  
								<div class="col-md-4">
									<div class="form-group">
										<label>State: <span class="text-danger">*</span></label>
		                                <input type="text" name="state" placeholder="State" class="form-control required">
	                                </div> 
								</div>
							</div>
							<div class="row">
								<div class="col-md-2">
								</div> 
								<div class="col-md-10">
									<div class="form-group">
										<label class="">
											<input type="checkbox" class="" name="invoice_add">
											<b style="color: #00bcd4;">Invoice Address Is Same As Delivery Address</b>
										</label>
									</div>  
								</div>
							</div>
						</fieldset>

						<h6>Legal Documents</h6>
						<fieldset> 
							<div class="row">
								<div class="col-md-2">
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>GST No: <span class="text-danger">*</span></label>
		                                <input type="text" name="gstn_no" placeholder="GST No" class="form-control required" pattern="^[0-9]{2}[A-Z]{5}[0-9]{4}[A-Z]{1}[1-9A-Z]{1}Z[0-9A-Z]{1}$" value="29AABCT3518Q1ZS">
	                                </div> 
								</div>
								 <div class="col-md-4"> 
									<div class="form-group">
										<label class="d-block">GST No Doc:<span class="text-danger">*</span></label>
	                                    <input name="gstn_document" type="file" class="form-input-styled required" data-fouc>
	                                    <span class="form-text text-muted">Accepted formats: .Jpeg,.Jpg,.png Max file size 2Mb</span>
	                                </div> 
								</div> 
							</div>
							<div class="row">
								<div class="col-md-2">
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>KYC Documents<span class="text-danger">*</span></label>
		                               <select name="kyc_document_type" id="kyc_document" onchange="return kyc_document_details();" class="form-control form-control-select2 required" >
											<option value="">--Select KYC Document--</option>
											<option value="PAN">PAN</option>
											<option value="AADHAR">AADHAR</option>
											<option value="Driving License">Driving License</option>
											<option value="Passport">Passport</option>
										</select>
	                                </div> 
								</div>
								 <div class="col-md-4">
									<div class="form-group" id="kyc_doc_no">
										
	                                </div> 
								</div>
							</div>

							<div class="row">
								<div class="col-md-2"> </div>
								<div class="col-md-4"> 
									<div class="form-group" id="kyc_doc_file" style="display: none;">
										<label class="d-block"><span id="doc_file_label"></span> Doc:</label>
	                                    <input name="kyc_document" type="file" class="form-input-styled required" data-fouc>
	                                    <span class="form-text text-muted">Accepted formats: .Jpeg,.Jpg,.png Max file size 2Mb</span>
	                                </div> 
								</div> 
							</div>

							<div class="row">
								<div class="col-md-2"> </div> 
								<div class="col-md-4">
									<div class="">
										<label class="">
											<input type="checkbox" class="required">
											<b style="color: #00bcd4;">We Are A Business Customer <a>Terms and Conditions</a></b>
										</label>
									</div>  
								</div>
							</div>
						</fieldset>

						<h6>Person of Correspondence</h6>
						<fieldset>
							<div class="row"> 
								<div class="col-md-2"> </div>
								<div class="col-md-4">
									<div class="form-group">
										<label class="d-block">Name:<span class="text-danger">*</span></label>
	                                    <input type="text" name="corr_per_name" placeholder="Correspondence person name" class="form-control required">
                                    </div>
								</div>   
								<div class="col-md-4">
									<div class="form-group">
										<label class="d-block">Email:</label>
	                                    <input type="email" name="corr_per_email" placeholder="Correspondence person email" class="form-control">
                                    </div>
								</div> 
							</div>
							<div class="row">   
								<div class="col-md-2"> </div>
								<div class="col-md-4">
									<div class="form-group">
										<label class="d-block">Mobile:<span class="text-danger">*</span></label>
	                                   <input type="text" name="corr_per_mobile" placeholder="Correspondence person mobile" class="form-control required" onkeypress="return isNumber(event)">
                                    </div>
								</div>
							</div>
 
						</fieldset>
						
					</form>
	            </div>
	            <!-- /wizard with validation -->
  
			</div>
			<!-- /content area --> 

		</div>
		<!-- /content wrapper -->

	</div>
	<!-- /page content -->

</body>

<!-- 
 <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false&key=AIzaSyAiR9CLZshY_vQpB7z5M7nIGCg16gfo2E8"></script> -->
 
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false&key=AIzaSyBHUHKH2eo8ZoW9CJQ_1CZcTrcDrPuOaT8"></script>  
    <script>    
    var map;
    var geocoder;
    var mapOptions = { center: new google.maps.LatLng(0.0, 0.0), zoom: 2,
        mapTypeId: google.maps.MapTypeId.ROADMAP };
    
    function initialize() {     
      var myOptions = {
                center: new google.maps.LatLng(12.851, 77.659 ),
                //center: new google.maps.LatLng(-1.9501,30.0588),
                zoom: 10,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };

            geocoder = new google.maps.Geocoder();
            var map = new google.maps.Map(document.getElementById("map_canvas"),
            myOptions);
            google.maps.event.addListener(map, 'click', function(event) {
              placeMarker(event.latLng);
            });

            var marker;
            function placeMarker(location) {              
                if(marker){ //on vérifie si le marqueur existe
                    marker.setPosition(location); //on change sa position
                }else{
                    marker = new google.maps.Marker({ //on créé le marqueur
                        position: location, 
                        map: map
                    });
                }
                 document.getElementById('lat').value=location.lat();
                 document.getElementById('lng').value=location.lng();
                getAddress(location);
            }

      function getAddress(latLng) {       
        geocoder.geocode( {'latLng': latLng},
        function(results, status) {
          if(status == google.maps.GeocoderStatus.OK) {
            if(results[0]) {           
            document.getElementById("activity_address").value  = results[0].formatted_address;
            var address = results[0].address_components;
            var zipcode = address[address.length - 1].long_name;
            //document.getElementById("city").value     = results[0].address_components[1]['long_name'];
            document.getElementById("postal_code").value  = zipcode;            
            }
            else {
            //document.getElementById("city").value = "No results";
            }
          }
          else {
            //document.getElementById("city").value = status;
          }
        });
      }
    }
      google.maps.event.addDomListener(window, 'load', initialize);

      function getmap(){        
    var edValue = document.getElementById("lat");
        lat = edValue.value;
        var edValue = document.getElementById("lng");
        lng = edValue.value;        
        var newPosition = new google.maps.LatLng(lat,lng);
        if(lat > 0 && lng > 0){
           myOptions = {                
                center: new google.maps.LatLng(lat,lng),
                zoom: 10,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            geocoder = new google.maps.Geocoder();
            map = new google.maps.Map(document.getElementById("map_canvas"),myOptions);                        
            marker = new google.maps.Marker({ //on créé le marqueur
                        position: newPosition, 
                        map: map
            });            
            getAddress2(newPosition);        
       }        
   }

  function getAddress2(latLng) {        
        geocoder.geocode( {'latLng': latLng},
        function(results, status) {
          if(status == google.maps.GeocoderStatus.OK) {
            if(results[0]) {           
            document.getElementById("activity_address").value  = results[0].formatted_address;
            var address = results[0].address_components;
            var zipcode = address[address.length - 1].long_name;
            //document.getElementById("city").value     = results[0].address_components[1]['long_name'];
            document.getElementById("postal_code").value  = zipcode;            
            }
            else {
            //document.getElementById("city").value = "No results";
            }
          }
          else {
            //document.getElementById("city").value = status;
          }
        });
      }
      
    // function checkUniqueEmail(email){
    //   var sEmail = document.getElementById('email');
    //   if (sEmail.value != ''){
    //     var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
    //     if(!(sEmail.value.match(filter))){
    //       $("#email").val(email);
    //       return false; 
    //     }else{
    //     }
    //   }
    //   return false;
    // }
     function geocodeAddress(address) {
      geocoder.geocode({address:address}, function (results,status)
          { 
             if (status == google.maps.GeocoderStatus.OK) {
              var p = results[0].geometry.location;
              var lat=p.lat();
              var lng=p.lng();
              //createMarker(address,lat,lng);
              ///alert(lng);
              var myOptions = {
                  center: new google.maps.LatLng(lat, lng ),
                      //center: new google.maps.LatLng(-1.9501,30.0588),
                      zoom: 10,
                      mapTypeId: google.maps.MapTypeId.ROADMAP
                  };
                  var map = new google.maps.Map(document.getElementById("map_canvas"),myOptions);
                   google.maps.event.addListener(map, 'click', function(event) {
                    placeMarker(event.latLng);
                }); 

                   var marker;
                function placeMarker(location) {              
                    if(marker){ //on vérifie si le marqueur existe
                        marker.setPosition(location); //on change sa position
                    }else{
                        marker = new google.maps.Marker({ //on créé le marqueur
                            position: location, 
                            map: map
                        });
                    }
                     document.getElementById('lat').value=location.lat();
                     document.getElementById('lng').value=location.lng();
                    getAddress(location);
                }

          function getAddress(latLng) {       
            geocoder.geocode( {'latLng': latLng},
            function(results, status) {
              if(status == google.maps.GeocoderStatus.OK) {
                if(results[0]) {           
                // document.getElementById("activity_address").value  = results[0].formatted_address;
                document.getElementById("pin_location").value  = results[0].formatted_address;
                var address = results[0].address_components;
                var zipcode = address[address.length - 1].long_name;
                //document.getElementById("city").value     = results[0].address_components[1]['long_name'];
                document.getElementById("postal_code").value  = zipcode;            
                }
                else {
                //document.getElementById("city").value = "No results";
                }
              }
              else {
                //document.getElementById("city").value = status;
              }
            });
          }
            }
            
          }
        );
      }
      </script>

      <script type="text/javascript">
      	function isNumber(evt) {
			evt = (evt) ? evt : window.event;
			var charCode = (evt.which) ? evt.which : evt.keyCode;
			if (charCode > 31 && (charCode < 48 || charCode > 57)) {
					return false;
			}
					return true;
		}
		function kyc_document_details(id){
			var kyc_doc_type=$('#kyc_document').val();
			var doc_no='';
			var doc_file=''; 
			var pattern=''; 
			if(kyc_doc_type !=''){
					if(kyc_doc_type =="PAN"){
					pattern +='pattern="^[A-Z]{5}[0-9]{4}[A-Z]{1}$"';
				} 

				doc_no +='<label>'+kyc_doc_type+' No <span class="text-danger">*</span></label><input type="text"  name="kyc_doc_no" placeholder="'+kyc_doc_type+' No" class="form-control required" '+pattern+'>';

				$('#kyc_doc_no').html(doc_no);
				$('#kyc_doc_file').css('display','block');
				$('#doc_file_label').html(kyc_doc_type);
			}else
			{
				$('#kyc_doc_no').html(doc_no);
				$('#kyc_doc_file').css('display','none');
				$('#doc_file_label').html(kyc_doc_type);
			}
			
			}

      </script>
			}
</html>
