

<div class="main_content_iner ">
   <div class="container-fluid p-0">
      <div class="row justify-content-center">
         <div class="col-12">
            <div class="dashboard_header mb_50">
               <div class="row">
                  <div class="col-lg-6">
                     <div class="dashboard_header_title">
                        <h3>Category</h3>
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="dashboard_breadcam text-end">
                        <p><a href="index.html">Dashboard</a> <i class="fas fa-caret-right"></i> Category Edit</p>
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
                        <div class="modal-header theme_bg_1 justify-content-center">
                           <h5 class="modal-title text_white">Edit Category</h5>
                        </div>
                        <?php foreach($category_details as $dt) { ?>
                        <div class="modal-body">
                           <form action="<?php echo base_url(); ?>index.php/Menus/category_edit_save" method="POST" enctype="multipart/form-data">
                              <div class="">
                                <label for="">Category Name</label>
                                 <input type="text" class="form-control" name="category_name" value="<?php echo $dt['category_name'];?>" required>
                              </div>
                             
                            
                              <div class="" >
                              <label for="">Display Order</label>
                                 <input type="text" class="form-control" name="display_order" value="<?php echo $dt['display_order'];?>" required>
                              </div>
                              <div class="row">
                              <label for="">Image</label>
                                 <div class="col-md-8">
                                    <input type="file" class="form-control" name="image">
                                 </div>
                                 <div class="col-md-4">
                                    <img src="<?php echo base_url(); ?>assets/img/category/<?php echo $dt['category_image']; ?>" style="width: 90px; height: 50px;">
                                    <input type="hidden" value="<?php echo $dt['category_image']; ?>" name="old_image">
                                 </div>

                              </div>

                              <div class="row">
                              <label for="">Ads</label>
                                 <div class="col-md-8">
                                    <input type="file" class="form-control" name="ads">
                                 </div>
                                 <div class="col-md-4">
                                    <img src="<?php echo base_url(); ?>assets/img/category/<?php echo $dt['ads']; ?>" style="width: 90px; height: 50px;">
                                    <input type="hidden" value="<?php echo $dt['ads']; ?>" name="old_ads">
                                 </div>

                              </div>
                              <input type="hidden" name="id" value="<?php echo $dt['category_id']; ?>">
                              <div class="">
                                 <label>Status</label>
                                <select class="nice_Select2 nice_Select_line wide" name="status" required>
                                    
                                    <option value="1" <?php if($dt['category_status']==1){ echo "Selected"; }?>>Active</option>
                                    <option value="0" <?php if($dt['category_status']==0){ echo "Selected"; }?>>Inactive</option>
                                </select>
                              </div>

                              <div class="">
                              <label>Show on Home</label>
                                <select class="nice_Select2 nice_Select_line wide" name="show_on_home" required>
                                    
                                    <option value="1" <?php if($dt['show_on_home']==1){ echo "Selected"; }?>>Active</option>
                                    <option value="0" <?php if($dt['show_on_home']==0){ echo "Selected"; }?>>Inactive</option>
                                </select>
                              </div>
                              <?php } ?>
                              <br><br>
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
