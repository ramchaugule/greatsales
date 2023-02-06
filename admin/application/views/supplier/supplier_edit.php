
<section class="dashboard_part large_header_bg">
<div class="main_content_iner overly_inner ">
   <div class="container-fluid p-0 ">
     <div class="row">
        <legend class="text-center"><b><u>Edit Supplier</u></b></legend>
     </div>
   
    <?php foreach($supplier_details as $dt) { ?>
        <form action="<?php echo base_url(); ?>index.php/Menus/supplier_details_edit_save" method="POST">
      <div class="row">
         <div class="col-12">
            <div class="white_card card_height_100 mb_30">
               <div class="white_card_header">
                  <div class="box_header m-0">
                     <div class="main-title">
                        <h3 class="m-0">Personal Information</h3>
                     </div>
                  </div>
               </div>
               <div class="white_card_body">
                  <div class="row">
                     <div class="col-lg-6">
                        <div class="common_input mb_15">
                           <input type="text" value="<?php echo $dt['username']; ?>" name="username" >
                        </div>
                     </div>
                     <input type="hidden" value="<?php echo $dt['id']; ?>" name="id">
                     <div class="col-lg-6">
                        <div class="common_input mb_15">
                           <input type="tel" value="<?php echo $dt['mobile_no']; ?>" name="mobile_no" >
                        </div>
                     </div>
                     <div class="col-lg-6">
                        <div class="common_input mb_15">
                           <input type="email" value="<?php echo $dt['email']; ?>" name="email" >
                        </div>
                     </div>
                     <div class="col-lg-6">
                        <div class="common_input mb_15">
                           <input type="text" value="<?php echo $dt['ceo_name']; ?>" name="ceo_name" >
                        </div>
                     </div>
                     <div class="col-lg-6">
                        <div class="common_input mb_15">
                           <input type="text" value="<?php echo $dt['website_link']; ?>" name="website_link" >
                        </div>
                     </div>
                     <div class="col-lg-6">
                        <div class="common_input mb_15">
                           <input type="text" value="<?php echo $dt['annual_turnover']; ?>" name="annual_turnover" >
                        </div>
                     </div>
                     <div class="col-lg-6">
                        <div class="common_input mb_15">
                           <input type="text" value="<?php echo $dt['business_type']; ?>" name="business_type" >
                        </div>
                     </div>
                     <div class="col-lg-6">
                        <div class="common_input mb_15">
                           <input type="text" value="<?php echo $dt['ownership_type']; ?>" name="ownership_type" >
                        </div>
                     </div>



                     <!-- Company Information -->

                     <div class="white_card_header">
                  <div class="box_header m-0">
                     <div class="main-title">
                        <h3 class="m-0">Company Information</h3>
                     </div>
                  </div>
               </div>
               <div class="white_card_body">
                  <div class="row">
                     <div class="col-lg-6">
                        <div class="common_input mb_15">
                           <input type="text" value="<?php echo $dt['company_address']; ?>" name="company_address" >
                        </div>
                     </div>
                     <div class="col-lg-6">
                        <div class="common_input mb_15">
                           <input type="text" value="<?php echo $dt['company_locality']; ?>" name="company_locality" >
                        </div>
                     </div>
                     <div class="col-lg-6">
                        <div class="common_input mb_15">
                           <input type="text" value="<?php echo $dt['company_landmark']; ?>" name="company_landmark" >
                        </div>
                     </div>
                     <div class="col-lg-6">
                        <div class="common_input mb_15">
                           <input type="text" value="<?php echo $dt['company_state']; ?>" name="company_state" >
                        </div>
                     </div>
                     <div class="col-lg-6">
                        <div class="common_input mb_15">
                           <input type="text" value="<?php echo $dt['company_pincode']; ?>" name="company_pincode" >
                        </div>
                     </div>
                     <div class="col-lg-6">
                        <div class="common_input mb_15">
                           <input type="tel" value="<?php echo $dt['company_whatsapp']; ?>" name="company_whatsapp" >
                        </div>
                     </div>
                     <div class="col-lg-6">
                        <div class="common_input mb_15">
                           <input type="email" value="<?php echo $dt['company_email']; ?>" name="company_email" >
                        </div>
                     </div>
                     
                     <!-- Verification Details -->

                     <div class="white_card_header">
                  <div class="box_header m-0">
                     <div class="main-title">
                        <h3 class="m-0">Verification Details</h3>
                     </div>
                  </div>
               </div>
               <div class="white_card_body">
                  <div class="row">
                     <div class="col-lg-6">
                        <div class="common_input mb_15">
                           <input type="text" value="<?php echo $dt['gst_number']; ?>" name="gst_number" >
                        </div>
                     </div>
                     <div class="col-lg-6">
                        <div class="common_input mb_15">
                           <input type="text" value="<?php echo $dt['cin_llpin']; ?>" name="cin_llpin" >
                        </div>
                     </div>
                     <div class="col-lg-6">
                        <div class="common_input mb_15">
                           <input type="text" value="<?php echo $dt['tan']; ?>" name="tan" >
                        </div>
                     </div>
                     <div class="col-lg-6">
                        <div class="common_input mb_15">
                           <input type="text" value="<?php echo $dt['company_pan']; ?>" name="company_pan" >
                        </div>
                     </div>
                     <div class="col-lg-6">
                        <div class="common_input mb_15">
                           <input type="text" value="<?php echo $dt['dgft_iecode']; ?>" name="dgft_iecode" >
                        </div>
                     </div>
                    
                     <div class="white_card_header">
                  <div class="box_header m-0">
                     <div class="main-title">
                        <h3 class="m-0">Trade Capacity</h3>
                     </div>
                  </div>
               </div>

                     <div class="" >
						   	<textarea name="trade_capacity"  id="kt-ckeditor-1">
                           		<?php echo $dt['trade_capacity']; ?>
                        	</textarea>
                              
                              </div>
                              <div class="white_card_header">
                  <div class="box_header m-0">
                     <div class="main-title">
                        <h3 class="m-0">Production Capacity</h3>
                     </div>
                  </div>
               </div>
                            <div class="" >
						   	<textarea name="production_capacity"  id="kt-ckeditor-2">
                           		<?php echo $dt['production_capacity']; ?>
                        	</textarea>
                              
                              </div>

                     <!-- <div class="col-lg-6">
                        <select class="nice_Select2 nice_Select_line wide" style="display: none;">
                           <option value="1">Select Role</option>
                           <option value="1">Role 1</option>
                           <option value="1">Role2</option>
                        </select>
                     </div> -->
                     <div class="col-12">
                        <div class="create_report_btn mt_30">
                        <button type="submit" class="btn_1 radius_btn d-block text-center">Update Supplier Details</button>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      </form>
    <?php } ?>
 
   </div>
</div>
<script src="<?php echo base_url(); ?>assets/js/jquery1-3.4.1.min.js"></script>

<script src="<?php echo base_url(); ?>assets/js/popper1.min.js"></script>

<script src="<?php echo base_url(); ?>assets/js/bootstrap1.min.js"></script>

<script src="<?php echo base_url(); ?>assets/js/metisMenu.js"></script>

<script src="<?php echo base_url(); ?>assets/vendors/count_up/jquery.waypoints.min.js"></script>

<script src="<?php echo base_url(); ?>assets/vendors/chartlist/Chart.min.js"></script>

<script src="<?php echo base_url(); ?>assets/vendors/count_up/jquery.counterup.min.js"></script>

<script src="<?php echo base_url(); ?>assets/vendors/niceselect/js/jquery.nice-select.min.js"></script>

<script src="<?php echo base_url(); ?>assets/vendors/owl_carousel/js/owl.carousel.min.js"></script>

<script src="<?php echo base_url(); ?>assets/vendors/datatable/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendors/datatable/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendors/datatable/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendors/datatable/js/buttons.flash.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendors/datatable/js/jszip.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendors/datatable/js/pdfmake.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendors/datatable/js/vfs_fonts.js"></script>
<script src="<?php echo base_url(); ?>assets/vendors/datatable/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendors/datatable/js/buttons.print.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/chart.min.js"></script>

<script src="<?php echo base_url(); ?>assets/vendors/progressbar/jquery.barfiller.js"></script>

<script src="<?php echo base_url(); ?>assets/vendors/tagsinput/tagsinput.js"></script>

<script src="<?php echo base_url(); ?>assets/vendors/text_editor/summernote-bs4.js"></script>
<script src="<?php echo base_url(); ?>assets/js/ckeditor-classic.js"></script>
<script src="<?php echo base_url(); ?>assets/vendors/am_chart/amcharts.js"></script>

<script src="<?php echo base_url(); ?>assets/vendors/scroll/perfect-scrollbar.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendors/scroll/scrollable-custom.js"></script>
<script src="<?php echo base_url(); ?>assets/vendors/chart_am/core.js"></script>
<script src="<?php echo base_url(); ?>assets/vendors/chart_am/charts.js"></script>
<script src="<?php echo base_url(); ?>assets/vendors/chart_am/animated.js"></script>
<script src="<?php echo base_url(); ?>assets/vendors/chart_am/kelly.js"></script>
<script src="<?php echo base_url(); ?>assets/vendors/chart_am/chart-custom.js"></script>

<script src="<?php echo base_url(); ?>assets/js/custom.js"></script>



<script>
        var Ckeditor = function () {
        // Private functions
        var demos = function () {
            ClassicEditor
                .create( document.querySelector( '#kt-ckeditor-1' ) )
                .then( editor => {
                    console.log( editor );
                } )
                .catch( error => {
                    console.error( error );
                } );
        }
    
        return {
            // public functions
            init: function() {
                demos();
            }
        };
    }();
    
    // Initialization
    jQuery(document).ready(function() {
        Ckeditor.init();
    });
</script>



<script>
        var Ckeditor1 = function () {
        // Private functions
        var demos1 = function () {
            ClassicEditor
                .create( document.querySelector( '#kt-ckeditor-2' ) )
                .then( editor => {
                    console.log( editor );
                } )
                .catch( error => {
                    console.error( error );
                } );
        }
    
        return {
            // public functions
            init: function() {
                demos1();
            }
        };
    }();
    
    // Initialization
    jQuery(document).ready(function() {
        Ckeditor1.init();
    });
</script>