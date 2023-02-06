
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
                        <p><a href="index.html">Dashboard</a> <i class="fas fa-caret-right"></i> Category Add</p>
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
                           <h5 class="modal-title text_white">Add Category</h5>
                        </div>
                        <div class="modal-body">
                           <form action="<?php echo base_url(); ?>index.php/Menus/category_save" method="POST" enctype="multipart/form-data">

                              <div class="">
                                 <input type="text" class="form-control" name="category_name" placeholder="Category Name" required>
                              </div>
                             
                            
                              <div class="" >
                                 <input type="text" class="form-control" name="display_order" placeholder="Display Order" required>
                              </div>
                              <div class="">
                                 <label>Image</label>
                                 <input type="file" class="form-control" name="image" required>
                              </div>

                              <div class="">
                                 <label>Ads</label>
                                 <input type="file" class="form-control" name="ads" required>
                              </div>
                              <div class="">
                                 <label>Status</label>
                                <select class="nice_Select2 nice_Select_line wide" name="status" required>
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                              </div>
                              <div class="">
                                 <label>Show on home</label>
                                <select class="nice_Select2 nice_Select_line wide" name="show_on_home" required>
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                              </div>
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
