<?php include_once 'config/init.php';
?>

<?php
$hosp = new Hospital;

if(isset($_POST['del_id'])){
$del_id = $_POST['del_id'];
if($hosp->delete($del_id)){
    redirect('index.php','Hospital Deleted','success');
}
else{
    redirect('index.php','Hospital Deleted','error');
}
}


$template = new Template('templates/hospital-single.php');

$hosp_id = isset($_GET['id'])?$_GET['id']:null;


$template->hosp = $hosp->getHospital($hosp_id);
echo $template;