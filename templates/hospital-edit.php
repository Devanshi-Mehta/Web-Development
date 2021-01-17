<?php include 'inc/header.php'; ?>

<h2 class="page-header">Edit hospital</h2>
<form method="post" action="edit.php?id=<?php echo $hosp->id;?>">
<div class="form-group">
<label>Hospital</label>
<input type="text" class="form-control" name = "Hospital_name" value="<?php echo $hosp->Hospital_name; ?>">
    </div>

    <div class="form-group">
<label>Location</label>
<select class = "form-control" name = "category">
<?php foreach($category as $c): ?>
<?php if ($hosp->cat_id == $c -> id) : ?>
<option value = "<?php echo $c->id; ?>" selected>
<?php echo $c->name;?></option>
<?php else: ?>
    <option value = "<?php echo $c->id; ?>">
    <?php echo $c->name;?></option>
<?php endif;?> 
<?php endforeach;?>

</select>
    </div>
    <div class="form-group">
    <label>Address</label>
<input type="text" class="form-control" name = "Address" value="<?php echo $hosp->Address; ?>">
</div>

    <div class="form-group">
<label>Mediclaim Acceptance(Yes/No)</label>
<input type="text" class="form-control" name = "Mediclaim_acceptance" value="<?php echo $hosp->Mediclaim_acceptance; ?>">
    </div>
    <div class="form-group">
<label>Cost of Admission</label>
<input type="text" class="form-control" name = "Cost_of_Admission" value="<?php echo $hosp->Cost_of_Admission; ?>">
    </div>
    <div class="form-group">
<label>Rating</label>
<input type="text" class="form-control" name = "Rating" value="<?php echo $hosp->Rating; ?>">
    </div>

    <div class="form-group">
<label>Contact</label>
<input type="text" class="form-control" name = "contact_user" value="<?php echo $hosp->contact_user; ?>">
    </div>
    <div class="form-group">
<label>Email</label>
<input type="email" class="form-control" name = "contact_email" value="<?php echo $hosp->contact_email; ?>">
    </div>
    <input type="submit" class="btn  btn-lg" value="submit" name="submit" style="color:#687C97; background-color:lightgray;">
    </form>
<?php include 'inc/footer.php'; ?>