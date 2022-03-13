<div class="container ">
<div class="d-flex justify-content-center login_top">

<!-- <form method="post" class="form-container needs-validation"  action="<?= base_url(); ?>/LoginController/auth" > -->
<?= form_open('/login/auth', 'class="form-container needs-validation" id="myform"'); ?>
<!-- It is a html helper -->
<div class="mx-auto mb-4" style="width: 120px;">         
  <h1 class="text-dark">Login</h1>
</div>

<div class="form-group">
  <label class="text-dark">Email</label>
  <input type="text" class="form-control" name="email"  id="email" placeholder="Your Email" value="<?= set_value('email') ?>" >
  <?= "<br>" ?>
  <?php if(isset($validation)) {?>
    <p class="text-danger">
      <?= $error = $validation->getError('email'); ?>
    </p>
    <?php }?>
</div>

<div class="form-group">
<label class="text-dark">Password</label>
<input type="password" class="form-control mb-4"  name="password" id="pass" placeholder="Your Password" value="<?= set_value('password') ?>">
<?php if(isset($validation)) {  ?>
  <p class="text-danger">
      <?= $error = $validation->getError('password'); ?>
  </p>
<?php } ?>
</div> 

<?php 
 if (!empty($msg)) { ?>
  <div class="alert alert-danger login_msg">
  <i class="bi bi-x-circle"></i> 
  <?php echo $msg; ?>
<?php } ?>
  </div>

<div class="mx-auto mb-4" style="width: 250px;">
<button  type="submit" class="btn login_btn rounded-pill" id="log" >
  Login
</button>
</div>

</div>
</div>
<!-- </form> -->
<?= form_close(); ?>
