
<div class="main_content_iner ">
   <div class="container-fluid p-0">
      <div class="row justify-content-center">
         <div class="col-12">
            <div class="dashboard_header mb_50">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="white_card card_height_100 mb_30 pt-4">
                        <div class="white_card_body">
                           <div class="QA_section">
                              <div class="white_box_tittle list_header">
                                 <h4>Pending Supplier List </h4>
                                 <div class="box_right d-flex lms_block">
                                    <!-- <div class="serach_field_2">
                                       <div class="search_inner">
                                          <form Active="#">
                                             <div class="search_field">
                                                <input type="text" placeholder="Search content here...">
                                             </div>
                                             <button type="submit"> <i class="ti-search"></i> </button>
                                          </form>
                                       </div>
                                    </div> -->
                                    <!-- <div class="add_button ms-2">
                                       <a href="<?php echo base_url(); ?>index.php/Menus/category_add" class="btn_1">Add Customer</a>
                                    </div> -->
                                 </div>
                              </div>
                              <div class="QA_table mb_30 table-responsive table-bordered table-striped table-hover">
                                 <table class="table lms_table_active3  table-responsive  table-bordered table-striped table-hover">
                                    <thead>
                                       <tr>
                                          <!-- <th scope="col">Sr. No</th> -->
                                          <!-- <th scope="col">Admin Response</th> -->
                                          <th scope="col">Username</th>
                                          <th scope="col">Mobile No</th>
                                          <th scope="col">Email </th>
                                          <th scope="col">CEO Name</th>
                                          <th scope="col">Status</th>
                                          <!-- <th scope="col">Attachment</th> -->
                                          <th scope="col">Action</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <?php foreach($pending_supplier as $dt) { ?>
                                       <tr>
                                          <!-- <td>1</td> -->
                                          <!-- <td><?php echo $dt['admin_response']; ?></td> -->
                                          <td><?php echo $dt['username']; ?></td>
                                          <td><?php echo $dt['mobile_no']; ?></td>
                                          <td><?php echo $dt['email']; ?></td>
                                          <td><?php echo $dt['ceo_name']; ?></td>
                                          <td><?php echo $dt['status']; ?></td>
                                          <!-- <td><img src="<?php echo base_url(); ?>assets/img/banner/<?php echo $dt['attachment']; ?>" style="width: 90px; height: 60px;"></td> -->
                                          <td>
                                             <div class="action_btns d-flex">
                                                <a href="<?php echo base_url(); ?>index.php/Menus/edit_supplier/<?php echo $dt['id']; ?>" class="action_btn mr_10"> <i class="far fa-edit"></i> </a>
                                                <a href="<?php echo base_url(); ?>index.php/Menus/delete_supplier/<?php echo $dt['id']; ?>" class="action_btn"> <i class="fas fa-trash"></i> </a>
                                             </div>
                                          </td>
                                       </tr>
                                       <?php } ?>
                                       
                                    </tbody>
                                 </table>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
