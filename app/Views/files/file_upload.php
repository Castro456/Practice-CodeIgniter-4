<?php

if(session()->get("success"))
{ ?>
    <h1> <?= session()->get("success"); ?> </h1>
    <!-- success is the session key using that its data is displayed -->
<?php }

if(session()->get("error"))
{ ?>
    <h1> <?= session()->get("error"); ?> </h1>
<?php } ?>

<form action="<?= site_url('my-file')?>" method="post" enctype="multipart/form-data">
<!-- site_url() is same as base_url(). site_url mainly used to give link to the controller while the base_url() mainly used in asset pages-->
<p>
    File Upload: <input type="file" name="file"/>
</p>
<p>
    <button type="submit">Upload</button>
</p>
</form>