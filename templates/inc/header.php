<!DOCTYPE html>
<html>
<head>
<title>Hospitals</title>
<link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.css
">
<link rel="stylesheet" href="css/styles.css">
<style>
body{
  background-color: #1e1e30;
            
color:gray;
font-family: sans-serif;
}
</style>
</head>
<body>
<div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills float-right">
            <li><a href="homepage.php" style="color:#687C97;">Home </a></li>
            <li><a href="create.php" style="color:#687C97;"> Add hospitals</a></li>
          </ul>
        </nav>
        <h3 class="text-muted"><?php echo SITE_TITLE; ?></h3>
      </div>

      <?php displayMessage(); ?>