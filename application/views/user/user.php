<div class="main-container container">
        <div class="dashboard-header row shadow">
            <div class="admin-sidebar col-md-4">
               <div class="row">
                   <?php $this->load->helper('sidebar_helper') ?>
               </div>
            </div>
            <div class="col-md-8">
                <h2>Users</h2>
                <hr>
                <button class="btn btn-primary" data-toggle="modal" data-target="#userModal">Add New user <i class="fa fa-plus"></i></button>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="main-box no-header clearfix">
                            <div class="main-box-body clearfix">
                                <div class="table-responsive">
                                    <table class="table user-list">
                                        <thead>
                                            <tr>
                                            <th><span>User</span></th>
                                            <th><span>Created</span></th>
                                            <th class="text-center"><span>Status</span></th>
                                            <th><span>Email</span></th>
                                            <th>&nbsp;</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php foreach($users as $user): ?>
                                               <?php if($user->ustype_id != 1): ?>
                                               <tr>
                                                <td>
                                                    <img src="http://bootdey.com/img/Content/user_1.jpg" alt="">
                                                    <a href="<?php echo base_url() ?>users/viewuser?id=<?php echo $user->user_id ?>" class="user-link"><?php echo $user->firstname.' '.$user->lastname ?></a>
                                                    <span class="user-subhead"><?php echo $user->ustype_name ?></span>
                                                </td>
                                                <td><?php echo $user->created_at ?></td>
                                                <td class="text-center">
                                                    <span class="label label-default">Inactive</span>
                                                </td>
                                                <td>
                                                    <a href="#"><?php echo $user->email ?></a>
                                                </td>
                                                <td style="width: 20%;">
                                                    <a href="<?php echo base_url() ?>users/viewuser?id=<?php echo $user->user_id ?>" class="table-link">
                                                        <span class="fa-stack">
                                                            <i class="fa fa-square fa-stack-2x"></i>
                                                            <i class="fa fa-search-plus fa-stack-1x fa-inverse"></i>
                                                        </span>
                                                    </a>
                                                    <!--<a href="#" class="table-link">
                                                        <span class="fa-stack">
                                                            <i class="fa fa-square fa-stack-2x"></i>
                                                            <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                                                        </span>
                                                    </a>
                                                    <a href="#" class="table-link danger">
                                                        <span class="fa-stack">
                                                            <i class="fa fa-square fa-stack-2x"></i>
                                                            <i class="fa fa-trash-o fa-stack-1x fa-inverse"></i>
                                                        </span>
                                                    </a>-->
                                                </td>
                                            </tr>
                                               <?php endif; ?>
                                           <?php endforeach; ?>
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
<div class="modal fade" id="userModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <?php echo form_open('users/create'); ?>
           <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Add New User</h4>
          </div>
          <div class="modal-body">
              <div class="form">
                 <div class="form-group">
                      <label for="User_Type">User Type:</label>
                      <select name="usertype" id="" class="form-control">
                         <option value="0" selected disabled></option>
                          <?php foreach($user_types as $user_type): ?>
                             <?php if($user_type->ustype_id != 1): ?>
                                   <option value="<?php echo $user_type->ustype_id ?>"><?php echo $user_type->ustype_name ?></option>    
                             <?php endif; ?>
                            
                          <?php endforeach; ?>
                          
                      </select>
                  </div>
                  <div class="form-group">
                      <label for="branch">Select Branch:</label>
                      <select name="branch" id="" class="form-control">
                         <option value="0" selected disabled></option>
                          <?php foreach($branches as $branch): ?>
                             <option value="<?php echo $branch->br_id ?>"><?php echo $branch->br_name ?></option>    
                          <?php endforeach; ?>
                          
                      </select>
                  </div>
                  <div class="form-group">
                      <label for="firstname">Firstname:</label>
                      <input type="text" class="form-control" name="firstname" />
                  </div>
                  <div class="form-group">
                      <label for="lastname">Lastname:</label>
                      <input type="text" class="form-control" name="lastname" />
                  </div>
                  <div class="form-group">
                      <label for="gender">Gender:</label>
                      <select name="gender" id="" class="form-control">
                          <option value="0" selected disabled>I am...</option>
                          <option value="Male"></option>
                          <option value="Female"></option>
                      </select>
                  </div>
                  <div class="form-group">
                      <label for="email">E-mail:</label>
                      <input type="text" class="form-control" name="email" />
                  </div>
                  <div class="form-group">
                      <label for="username">Username:</label>
                      <input type="text" class="form-control" name="username" />
                  </div>
                  <div class="form-group">
                      <label for="password">Password:</label>
                      <input type="password" class="form-control" name="password" />
                  </div>
                  <div class="form-group">
                      <label for="vpass">Confirm password:</label>
                      <input type="password" class="form-control" name="vpassword" />
                  </div>
              </div>
          </div>
          <div class="modal-footer">
             <button class="btn btn-primary">Add user <i class="fa fa-plus"></i></button>
          </div>
          </form>
        </div>
      </div>
    </div>