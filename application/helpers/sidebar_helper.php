<div class="admin-sidebar-box col-md-10">
      <div class="col-xs-4">
      <img src="<?php echo base_url() ?>img/logo.png" alt="" class="img-responsive profile-pic">
<!--                          <img src="https://avatars.discourse.org/letter/b/f98200/64.png" alt="" class="img-responsive">-->
      </div>
      <div class="col-xs-8">
          <p><i class="fa fa-user fa-fw"></i> <?php echo $this->session->userdata('firstname'); ?> <?php echo $this->session->userdata('lastname');  ?></p>
          <p><i class="fa fa-thumb-tack fa-fw"></i> <?php echo $this->session->userdata('usertype');  ?></p>
      </div>
  </div>
  <div class="admin-sidebar-box col-md-10">
   <h4>Options:</h4>
   <hr>
    <ul class="list-group">
        <li class="list-group-item"><a href="<?php echo base_url(); ?>dashboard">Dashboard<i class="fa fa-columns pull-right"></i></a></li>
        <li class="list-group-item"><a href="<?php echo base_url(); ?>products">Products<i class="fa fa-tags fa-fw pull-right"></i></a></li>
        <li class="list-group-item"><a href="<?php echo base_url(); ?>category">Category <i class="fa fa-tags fa-fw pull-right"></i></a></li>
        <li class="list-group-item"><a href="<?php echo base_url(); ?>users">Users<i class="fa fa-users fa-fw pull-right"></i></a></li>
        <li class="list-group-item"><a href="<?php echo base_url(); ?>settings">Settings<i class="fa fa-wrench fa-fw pull-right"></i></a></li>
    </ul>
</div>