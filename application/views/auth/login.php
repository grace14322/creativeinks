<section class="login Aligner">
        <div class="container">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">

                    <?php echo form_open('auth/postlogin'); ?>
                       <div class="img-logo-holder">
                           <img src="<?php echo base_url(); ?>img/logo.png" alt="" class="img-responsive img-logo">
                       </div>
                       
                       <?php echo validation_errors(); ?>
                       
                       <h2 class="text-center">Welcome to Creative Ink</h2>
                       <p class="text-center login-welcome">Printing & Manufacturing Company </p>
                        <div class="login-holder">
                            <div class="form-group group-field">
                                <label for="username"><i class="fa fa-user fa-fw text-muted"></i></label> <input type="text" value="" placeholder="Username or E-mail" name="username" class="form-control input-login">
                            </div>
                            <div class="line"></div>
                            <div class="form-group group-field">
                                <label for="password"><i class="fa fa-lock fa-fw text-muted"></i></label> <input type="password" value="" placeholder="Password" name="password" class="form-control input-login">
                            </div>
                        </div>
                        <button class="bg-default btn-login">Log in to Creative Ink</button>
                        <p class="text-center">
                            <a href="btn btn-link">Forgot password?</a>
                        </p>
                    </form>
                </div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </section>