<?php include 'inc/header.php'; ?>

        <form method="GET" action="index.php">
        <label for='cities'><h4 style='color:gray;'>Choose A Suitable Location</h4></label>
        <br>

<select id="c" name="c" class="form-control">
<?php foreach($category as $c):?>
  <option value="<?php echo $c->id;?> "><?php echo $c->name; ?></option>
  <?php endforeach; ?>
</select>
<br>
<input type="submit" class="btn btn-lg btn-success" style="background-color:#687C97;border:none;" value="FIND">
        </form>
        
</div>
<style>
.pad{
  padding: 40px 400px;
}
  </style>
<div class='pad'>
    <h3><?php echo $title; ?></h3>
      <?php foreach($hospitals as $hosp): ?>
      <div class='row marketing'>
        <div class="col-md-10">
          <h4><?php echo $hosp->Hospital_name;?></h4>
          <p><?php echo $hosp->Address;?></p>

        </div>
        <div class="col-md-2">
            <a class="btn-btn-default" style="color:#687C97;" href="hosp.php?id=<?php echo $hosp->id; ?>">View</a>
</div>
     
<br>

</div>

      <?php endforeach; ?>

<?php include 'inc/footer.php'; ?>
      </div>
