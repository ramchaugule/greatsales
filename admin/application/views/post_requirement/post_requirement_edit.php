

<div class="main_content_iner ">
   <div class="container-fluid p-0">
      <div class="row justify-content-center">
         <div class="col-12">
            <div class="dashboard_header mb_50">
               <div class="row">
                  <div class="col-lg-6">
                     <div class="dashboard_header_title">
                        <h3>Post Requirement Resoponse</h3>
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="dashboard_breadcam text-end">
                        <p><a href="index.html">Dashboard</a> <i class="fas fa-caret-right"></i> Post Requirement Resoponse</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-12">
            <div class="white_box mb_30">
               <div class="row justify-content-center">
                  <div class="col-lg-12">
                     <div class="modal-content cs_modal">
                        <div class="modal-header theme_bg_1 justify-content-center">
                           <h5 class="modal-title text_white">Post Requirement Resoponse</h5>
                        </div>
                        <?php foreach($post_requirement_details as $dt) { ?>
                        <div class="modal-body">
                           <form action="<?php echo base_url(); ?>index.php/Menus/post_requirement_res_save" method="POST" enctype="multipart/form-data">
                           <div class="" >
                           <label for="">Your Response</label>
						   	<textarea name="admin_response"  id="kt-ckeditor-1">
                               <?php echo $dt['admin_response']; ?>
                        	</textarea>
                              
                              </div>
                              <br>
                              <div class="row">
                              <label for="">Attachment</label>
                                 <div class="col-md-8">
                                    <input type="file" class="form-control" name="image">
                                 </div>
                                 <div class="col-md-4">
                                    <img src="<?php echo base_url(); ?>assets/img/post_requirement/<?php echo $dt['attachment']; ?>" style="width: 90px; height: 50px;">
                                    <input type="hidden" value="<?php echo $dt['attachment']; ?>" name="old_image">
                                 </div>

                              </div>
                             
                             
                              <input type="hidden" name="id" value="<?php echo $dt['id']; ?>">
                              
                              <?php } ?>
                             
                              <!-- <div class=" cs_check_box">
                                 <input type="checkbox" id="check_box" class="common_checkbox">
                                 <label for="check_box"> Keep me up to date </label>
                              </div> -->
                              <button type="submit" class="btn_1 full_width text-center">Submit</button>
                              <!-- <p>Need an account? <a data-toggle="modal" data-target="#sing_up" data-dismiss="modal" href="#">Log in</a></p>
                              <div class="text-center">
                                 <a href="#" data-toggle="modal" data-target="#forgot_password" data-dismiss="modal" class="pass_forget_btn">Forget Password?</a>
                              </div> -->
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
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