

<div class="main_content_iner ">
   <div class="container-fluid p-0">
      <div class="row justify-content-center">
         <div class="col-12">
            <div class="dashboard_header mb_50">
               <div class="row">
                  <div class="col-lg-6">
                     <div class="dashboard_header_title">
                        <h3>Cutsomer</h3>
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="dashboard_breadcam text-end">
                        <p><a href="index.html">Dashboard</a> <i class="fas fa-caret-right"></i> Cutsomer Edit</p>
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
                           <h5 class="modal-title text_white">Edit Cutsomer</h5>
                        </div>
                        <?php foreach($customer_details as $dt) { ?>
                        <div class="modal-body">
                           <form action="<?php echo base_url(); ?>index.php/Menus/customer_edit_save" method="POST" enctype="multipart/form-data">
                              <div class="">
                                <label for="">Name</label>
                                 <input type="text" class="form-control" readonly name="name" value="<?php echo $dt['name'];?>" required>
                              </div>
                             
                              <div class="">
                                <label for="">Email</label>
                                 <input type="text" class="form-control" readonly name="email" value="<?php echo $dt['email'];?>" required>
                              </div>
                             
                              <div class="">
                                <label for="">Mobile No</label>
                                 <input type="text" class="form-control" readonly name="mobile_no" value="<?php echo $dt['mobile_no'];?>" required>
                              </div>
                             
                              <!-- <div class="">
                                <label for="">Password</label>
                                 <input type="text" class="form-control" name="password" value="<?php echo $dt['password'];?>" required>
                              </div>
                             
                             -->
                              <div class="row">
                              <label for="">Image</label>
                                 
                                 <div class="col-md-4">
                                    <img src="<?php echo base_url(); ?>assets/img/banner/<?php echo $dt['image']; ?>" style="width: 90px; height: 50px;">

                                 </div>

                              </div>
                              <br>
                              <input type="hidden" name="id" value="<?php echo $dt['id']; ?>">
                              <div class="">
                                <select class="nice_Select2 nice_Select_line wide" name="status" required>
                                    <option value="<?php echo $dt['status']; ?>"><?php if($dt['status']==1){ echo "Active"; }else{ echo "Inactive"; }?></option>
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
