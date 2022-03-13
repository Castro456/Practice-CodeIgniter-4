
<table class="table table-bordered">

<thead class="table-top">
<tr>
<th colspan="9" ><h1 class="taskcenter">Tasks</h1></th>
</tr >
<tr>
  <th class="taskcenter" scope="col">No</th>
  <th class="taskcenter" scope="col">First Name</th>
  <th class="taskcenter" scope="col">Last Name</th>
  <th class="taskcenter" scope="col">Email</th>
  <th class="taskcenter" scope="col">Date of Birth</th>
  <th class="taskcenter" scope="col">Age</th>
</tr>
</thead>

<tbody id="table" >


<?php
if (count($users) > 0) {
 $i=1;
 foreach($users as $index => $user)  
 {  
?>

  <tr>

  <td class="table-light taskcenter" ><?php echo $index ?></td>
  <td class="table-light taskcenter" ><?php echo $user['firstname'] ?></td>
  <td class="table-light taskcenter" ><?php echo $user['lastname'] ?></td>
  <td class="table-light taskcenter" ><?php echo $user['email'] ?></td>
  <td class="table-light taskcenter" ><?php echo date("d/m/Y", strtotime($user['dob'])) ?></td>
  <td class="table-light taskcenter" ><?php echo $user['age'] ?></td>

  </tr>

<?php
$i++;
}  //end of foreach
}  //end of if ?>

</tbody>
</table> 
<?php echo $pager->links(); ?> 
<!-- This function provides the paging links -->


