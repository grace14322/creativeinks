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
                <button class="btn btn-primary" data-toggle="modal" data-target="#pruductModal">
                    Update product <i class="fa fa-pencil"></i>
                </button>
                <p></p>
                <p class="text-justify"><b>Product Name:</b> <?php echo $pname; ?></p>
                <p class="text-justify"><b>Price:</b> <?php echo $pr_price; ?></p>
                <p class="text-justify"><b>Quantity:</b> <?php echo $quantity; ?></p>
            </div>
        </div>
    </div>
    
   <div class="modal fade" id="pruductModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <?php echo form_open('products/update'); ?>
           <input type="hidden" name="id" value="<?php echo $pr_id ?>">
           <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Update Product</h4>
          </div>
          <div class="modal-body">
              <div class="form">
                  <div class="form-group">
                      <label for="productname">Product Name:</label>
                      <input type="text" class="form-control" name="productname" value = "<?php echo $pname ?>" />
                  </div>
                  <div class="form-group">
                      <label for="category">Category:</label>
                      <select name="category" id="" class="form-control">
                             <option value="0"></option>
                              <?php foreach($categories as $category): ?>
                                  <?php if($category->cat_id == $cat_id): ?>
                                      <option value="<?php echo $category->cat_id ?>" selected><?php echo $category->cat_name ?></option>
                                  <?php else: ?>
                                      <option value="<?php echo $category->cat_id ?>"><?php echo $category->cat_name ?></option>
                                  <?php endif; ?>
                              <?php endforeach;?>
                      </select>
                  </div>
                  <div class="form-group">
                      <label for="productquantity">Quantity</label>
                      <input type="text" class="form-control" name="productquantity" value="<?php echo $quantity ?>">
                  </div>
                  <div class="form-group">
                      <label for="Price">Price</label>
                      <input type="text" class="form-control" name="productprice" value="<?php echo $pr_price ?>">
                  </div>
              </div>
          </div>
          <div class="modal-footer">
             <button class="btn btn-primary">Update <i class="fa fa-plus"></i></button>
          </div>
          </form>
        </div>
      </div>
    </div>