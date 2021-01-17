<?php include 'inc/header.php'; ?>


<h2 class="page-header">Add a hospital</h2>
<form method="post" action="create.php">
<div class="form-group">
<label>Hospital</label>
<input type="text" class="form-control" name = "Hospital_name">
    </div>

    <div class="form-group">
<label>Location</label>
<select class="form-control" name = "category">
<?php foreach($category as $c):?>
  <option value="<?php echo $c->id;?> "><?php echo $c->name; ?></option>
  <?php endforeach; ?>

</select>
    </div>
    
    <div class="form-group">
<label>Address</label>
<input type="text" class="form-control" name = "Address"></textarea>
    </div>
    <div class="form-group">
<label>Mediclaim Acceptance(Yes/No)</label>
<input type="text" class="form-control" name = "Mediclaim_acceptance"></textarea>
    </div>
    <div class="form-group">
<label>Cost of Admission</label>
<input type="text" class="form-control" name = "Cost_of_Admission">
    </div>
    <div class="form-group">
<label>Rating</label>
<input type="text" class="form-control" name = "Rating">
    </div>

    <div class="form-group">
<label>Contact</label>
<input type="text" class="form-control" name = "contact_user">
    </div>
    <div class="form-group">
<label>Email</label>
<input type="email" class="form-control" name = "contact_email">
    </div>
    <input type="submit" class="btn btn-default" value="submit" style="color:#687C97; background-color:lightgray;" name="submit">
    </form>
<?php include 'inc/footer.php'; ?>