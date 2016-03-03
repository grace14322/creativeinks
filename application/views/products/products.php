<div class="main-container container">
        <div class="dashboard-header row shadow">
            <div class="admin-sidebar col-md-4">
               <div class="row">
                   <?php $this->load->helper('sidebar_helper') ?>
               </div>
            </div>
            <div class="col-md-8">
                <h2>Products</h2>
                <hr>
                <button class="btn btn-primary" data-toggle="modal" data-target="#pruductModal">Add New Product <i class="fa fa-plus"></i></button>
                <div class="table-responsive dataTable_wrapper table-product">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-products">
                        <thead>
                            <tr>
                               <th>Product Name:</th>
                            </tr>
                        </thead>
                        <tbody> 
                            <?php foreach($products as $product): ?>
                               <tr>
                                   <td>
                                       <span class="text-center"><?php echo $product->pr_name ?></span>
                                       <span class="pull-right"><a href="<?php echo base_url() ?>products/view?id=<?php echo $product->pr_id ?>" class="btn btn-link"><i class="fa fa-eye"></i> view</a></span>
                                   </td>
                                   <!--<td>
                                       <div class="row pull-right" style="width:100%;">
                                           <div class="col-xs-1"> </div>
                                           
                                           <div class="col-xs-4"><a href="<?php echo base_url() ?>" class="btn btn-link"><i class="fa fa-pencil"></i> edit</a> </div>
                                           <div class="col-xs-4"><a href="<?php echo base_url() ?>" class="btn btn-link"><i class="fa fa-trash"></i> delete</a> </div>
                                           
                                       </div>
                                   </td>
                               </tr>-->
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
<div class="modal fade" id="pruductModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <?php echo form_open('products/create'); ?>
           <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Add New Product</h4>
          </div>
          <div class="modal-body">
              <div class="form">
                  <div class="form-group">
                      <label for="productname">Product Name</label>
                      <input type="text" class="form-control" name="productname" />
                  </div>
                  <div class="form-group">
                      <label for="category">Category</label>
                      <select name="category" id="" class="form-control">
                          <option value="0" selected disabled></option>
                          <?php foreach($categories as $category): ?>
                              <option value="<?php echo $category->cat_id ?>"><?php echo $category->cat_name ?></option>
                          <?php endforeach;?>
                      </select>
                  </div>
                  <div class="form-group">
                      <label for="productquantity">Quantity</label>
                      <input type="text" class="form-control" name="productquantity">
                  </div>
                  <div class="form-group">
                      <label for="Price">Price</label>
                      <input type="text" class="form-control" name="productprice">
                  </div>
              </div>
          </div>
          <div class="modal-footer">
             <button class="btn btn-primary">Add Product <i class="fa fa-plus"></i></button>
          </div>
          </form>
        </div>
      </div>
    </div>
    