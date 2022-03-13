<?php
$session = session(); ?>

<nav class="navbar navbar-light">
  
  <form class="form-inline">
    <a class="btn btn-danger my-2 my-sm-0 rounded-pill ml-3" href="<?= base_url(); ?>/logout" role="button">
      <i class="bi bi-door-open"></i>
      Logout</a>
    </a>      
  </form>
</nav>

<div class="container">
  
  <h1 class="mx-auto" style="width: 200px; padding-top:150px;">
    Welcome <?= $session->get('user_firstname');?>
  </h1>
  <div class="d-flex justify-content-center home-height">  

</div>

</div>
</div>

