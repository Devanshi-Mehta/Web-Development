<?php include_once 'config/init.php';
?>

<?php
$hosp = new Hospital;

$template = new Template('templates/frontpage.php');

$c = isset($_GET['c'])?$_GET['c']:null;



if($c){
    $template->hospitals = $hosp->getByCategory($c);
    $template->title='Hospitals in '.$hosp->getCat($c)->name;
}

else{
    $template->title = 'All Hospitals';
$template->hospitals = $hosp->getAllHospitals();
}

$template->category = $hosp->getCategory();
echo $template;
?>




