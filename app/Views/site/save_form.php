<?php

if(session()->get('success'))
{
    echo session()->get('success');
}

if(session()->get('error'))
{
    echo session()->get('error');
}

?>

<form action="<?= site_url('save-form') ?>" method="post">

<p>
    First Name: <input type="text" name="firstname" placeholder="Your first Name">
</p>

<p>
    Last Name: <input type="text" name="lastname" placeholder="Your last Name">
</p>

<p>
    Email: <input type="email" name="email" placeholder="Your Email">
</p>

<p>
    Password: <input type="password" name="pass_word" placeholder="Password">
</p>

<p>
    Phone: <input type="text" name="phone" placeholder="Your Phone">
</p>

<p>
    DOB: <input type="date" name="dob" placeholder="Your DOB">
</p>

<p>
    Age: <input type="text" name="age" placeholder="Your Age">
</p>

<p>
    <button type="submit">Submit</button>
</p>

</form>