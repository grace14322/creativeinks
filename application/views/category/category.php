<div class="main-container container">
        <div class="dashboard-header row shadow">
            <div class="admin-sidebar col-md-4">
               <div class="row">
                   <?php $this->load->helper('sidebar_helper') ?>
               </div>
            </div>
            <div class="col-md-8">
                <h2>Category</h2>
                <hr>
                <button class="btn btn-primary" data-toggle="modal" data-target="#categoryModal">Add New Category <i class="fa fa-plus"></i></button>
                <div class="table-responsive dataTable_wrapper table-product">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-products">
                        <thead>
                            <tr>
                               <th>Category Name:</th>
                            </tr>
                        </thead>
                        <tbody> 
                            <?php foreach($categories as $category): ?>
                               <tr>
                                   <td>
                                       <span class="text-center"><?php echo $category->cat_name ?></span>
                                   </td>
                               </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
   <div class="modal fade" id="categoryModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <?php echo form_open('category/create'); ?>
           <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Add New Category</h4>
          </div>
          <div class="modal-body">
              <div class="form">
                  <div class="form-group">
                      <label for="category">Category Name</label>
                      <input type="text" class="form-control" name="categoryname" />
                  </div>
              </div>
          </div>
          <div class="modal-footer">
             <button class="btn btn-primary">Save <i class="fa fa-check"></i></button>
          </div>
          </form>
        </div>
      </div>
    </div>