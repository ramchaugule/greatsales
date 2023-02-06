

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
                        <div class="modal-header theme_bg_1 justify-content-center" style="background: #204176!important;">
                           <h5 class="modal-title text_white">Edit Sub Category</h5>
                        </div>
                        <?php foreach($subcategory_details as $dt) { ?>
                        <div class="modal-body">
                           <form action="<?php echo base_url(); ?>index.php/Menus/subcategory_edit_save" method="POST" enctype="multipart/form-data">

                           <div class="" style="margin-bottom: 20px;">
                                <select class="nice_Select2 nice_Select_line wide" style="margin-bottom: 20px;" name="category_id" required>
                                    <option value="<?php echo $dt['cat_id']; ?>"><?php echo $dt['category_name']; ?></option>
                                    <?php foreach($active_category as $cat_fetch){ ?>
                                    <option value="<?php echo $cat_fetch['category_id']; ?>"><?php echo $cat_fetch['category_name']; ?></option>
                                    <?php } ?>
                                </select>
                              </div>

                              <div class="" style="margin-top: 10px;">
                                <label for="">Sub Category Name</label>
                                 <input type="text" class="form-control" name="subcategory_name" value="<?php echo $dt['subcategory_name'];?>" required>
                              </div>
                             
                            
                              <div class="" >
                              <label for="">Display Order</label>
                                 <input type="text" class="form-control" name="display_order" value="<?php echo $dt['display_order'];?>" required>
                              </div>
                              <div class="row">
                              <label for="">Display Order</label>
                                 <div class="col-md-8">
                                    <input type="file" class="form-control" name="image">
                                 </div>
                                 <div class="col-md-4">
                                    <img src="<?php echo base_url(); ?>assets/img/subcategory/<?php echo $dt['subcategory_image']; ?>" style="width: 90px; height: 50px;">
                                    <input type="hidden" value="<?php echo $dt['subcategory_image']; ?>" name="old_image">
                                 </div>

                              </div>
                              <input type="hidden" name="id" value="<?php echo $dt['subcategory_id']; ?>">
                              <div class="">
                                <select class="nice_Select2 nice_Select_line wide" name="status" required>
                                    <option value="<?php echo $dt['subcategory_status']; ?>"><?php if($dt['subcategory_status']==1){ echo "Active"; }else{ echo "Inactive"; }?></option>
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
