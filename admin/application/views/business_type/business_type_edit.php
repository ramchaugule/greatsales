

<div class="main_content_iner ">
   <div class="container-fluid p-0">
      <div class="row justify-content-center">
         <div class="col-12">
            <div class="dashboard_header mb_50">
               <div class="row">
                  <div class="col-lg-6">
                     <div class="dashboard_header_title">
                        <h3>Business Type</h3>
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="dashboard_breadcam text-end">
                        <p><a href="index.html">Dashboard</a> <i class="fas fa-caret-right"></i> Business Type Edit</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-12">
            <div class="white_box mb_30">
               <div class="row justify-content-center">
                  <div class="col-lg-7">
                     <div class="modal-content cs_modal">
                        <div class="modal-header theme_bg_1 justify-content-center" style="background: #204176!important;">
                           <h5 class="modal-title text_white">Edit Business Type</h5>
                        </div>
                        <?php foreach($business_type_details as $dt) { ?>
                        <div class="modal-body">
                           <form action="<?php echo base_url(); ?>index.php/Menus/business_type_edit_save" method="POST" enctype="multipart/form-data">

                           <div class="">
                                 <input type="text" class="form-control" name="business_type" value="<?php echo $dt['business_type']; ?>" required>
                              </div>
                              
                              <input type="hidden" name="id" value="<?php echo $dt['id']; ?>">
                              <div class="">
                                <select class="nice_Select2 nice_Select_line wide" name="status" required>
                                    <option value="<?php echo $dt['business_type_status']; ?>"><?php if($dt['business_type_status']==1){ echo "Active"; }else{ echo "Inactive"; }?></option>
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                              </div>
                              <?php } ?>
                              <br><br>
                              <!-- <div class=" cs_check_box">
                                 <input type="checkbox" id="check_box" class="common_checkbox">
                                 <label for="check_box"> Keep me up to date </label>
                              </div> -->
                              <button type="submit" style="background: #204176!important;" class="btn_1 full_width text-center">Submit</button>
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
