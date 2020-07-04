<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet" type="text/css">
<div class="sidebar sidebar-dark sidebar-main sidebar-expand-md">
   <!-- Sidebar mobile toggler -->
   <div class="sidebar-mobile-toggler text-center">
      <a href="#" class="sidebar-mobile-main-toggle">
      <i class="icon-arrow-left8"></i>
      </a>
      Navigation
      <a href="#" class="sidebar-mobile-expand">
      <i class="icon-screen-full"></i>
      <i class="icon-screen-normal"></i>
      </a>
   </div>
   <!-- /sidebar mobile toggler -->
   <!-- Sidebar content -->
   <div class="sidebar-content">
      <!-- User menu -->
      <div class="sidebar-user">
         <div class="card-body">
            <div class="media">
               <div class="mr-3">
                  <a href="#"><img src="<?php echo base_url();?>admin_assets/assets/images/profile.png" width="38" height="38" class="rounded-circle" alt=""></a>
               </div>
               <div class="media-body">
                  <div class="media-title font-weight-semibold"><?php echo $this->session->userdata('admin_name'); ?></div>
                  <div class="font-size-xs opacity-50">
                     <i class="icon-pin font-size-sm"></i> &nbsp;Koramangala, Bangalore
                  </div>
               </div>
               <div class="ml-3 align-self-center">
                  <a href="#" class="text-white"><i class="icon-cog3"></i></a>
               </div>
            </div>
         </div>
      </div>
      <!-- /user menu -->
      <!-- Main navigation -->
      <div class="card card-sidebar-mobile">
         <ul class="nav nav-sidebar" data-nav-type="accordion">
            <!-- Main --> 
            <li class="nav-item">
               <a href="<?php echo site_url('home/dashboard');?>" class="nav-link <?php if($active_menu=="dashboard") { echo "active"; } ?>">
               <i class="icon-home4"></i>
               <span>
               Dashboard
               </span>
               </a>
            </li>  

   			<li class="nav-item nav-item-submenu">
   				<a href="<?php echo site_url('/user_management');?>" class="nav-link <?php if($active_menu=="user") { echo "active"; } ?>">
   				<i class="icon-stack2"></i> <span>User Management</span></a>
   			</li>

            <li class="nav-item nav-item-submenu">
               <a href="<?php echo site_url('customers/');?>" class="nav-link <?php if($active_menu=="customers") { echo "active"; } ?>">
               <i class="icon-stack2"></i> <span>Customers</span></a>
            </li>  

               <li class="nav-item nav-item-submenu">
                  <a href="javascript:void(0)" class="nav-link <?php if(($active_menu=="country") || ($active_menu=="state") || ($active_menu=="city") || ($active_menu=="area")) { echo "active"; } ?>">
                  <i class="icon-stack2"></i> <span>Master</span></a>
                  <ul class="nav nav-group-sub" data-submenu-title="Layouts">
               
                  <li class="nav-item"> 
                     <a href="<?php echo site_url('country/');?>" class="nav-link <?php if($active_menu=="country") { echo "active"; } ?>"><i class="fa fa-angle-right" aria-hidden="true"></i>Country Master</a>
                  </li>

                  <li class="nav-item"> 
                     <a href="<?php echo site_url('country/state_index');?>" class="nav-link <?php if($active_menu=="state") { echo "active"; } ?>"><i class="fa fa-angle-right" aria-hidden="true"></i>State Master</a>
                  </li>

                  <li class="nav-item">
                     <a href="<?php echo site_url('country/city_index');?>" class="nav-link <?php if($active_menu=="city") { echo "active"; } ?>"><i class="fa fa-angle-right" aria-hidden="true"></i>City Master</a>
                  </li> 

                  <li class="nav-item">
                     <a href="<?php echo site_url('country/area_index');?>" class="nav-link <?php if($active_menu=="area") { echo "active"; } ?>"><i class="fa fa-angle-right" aria-hidden="true"></i>Area Master</a>
                  </li>  
               </ul> 
             </li>

             <li class="nav-item nav-item-submenu">
               <a href="<?php echo site_url('category/');?>" class="nav-link <?php if($active_menu=="user") { echo "active"; } ?>">
               <i class="icon-stack2"></i> <span>Category</span></a>
            </li>  

            <!-- /page kits -->
         </ul>
      </div>
      <!-- /main navigation -->
   </div>
   <!-- /sidebar content -->
</div>

