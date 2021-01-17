<?php include 'inc/header.php'; ?>

<h2 class="page-header"><?php echo $hosp->Hospital_name;?></h2>

<small>Posted on  <?php echo $hosp->Date_of_post;?></small>
<hr>
<p class = "lead"><?php echo $hosp->Rating; ?></p>
<ul class = "list-group">
<li class = "list-group-item"><strong>Cost Of Admission:</strong><?php echo $hosp->Cost_of_Admission;?></li>
<li class = "list-group-item"><strong>Contact No:</strong><?php echo $hosp->contact_user;?></li>
<li class = "list-group-item"><strong>Address:</strong><?php echo $hosp->Address;?></li>

</ul>
<br>
<br>
<a href = "index.php" style="color:#687C97;">Go Back</a>
<br>
<br>

<div class = "well">
<a href = "edit.php?id=<?php echo $hosp->id; ?>"class="btn  btn-lg btn-success">Edit</a>

<form style = "display:inline;" method="post" action = "hosp.php">
<input type = "hidden" name="del_id" value="<?php echo $hosp->id;?>">
<input type = "submit" class = "btn  btn-lg btn-danger" value="Delete">

</form>


</div>
<?php include 'inc/footer.php'; ?>