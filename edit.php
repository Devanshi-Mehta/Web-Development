<?php include_once 'config/init.php';
?>

<?php
$hosp = new Hospital;

$hosp_id = isset($_GET['id'])?$_GET['id']:null;

if(isset($_POST['submit'] )){
    $data= array();
    $data['Hospital_name'] = $_POST['Hospital_name'];
    $data['Mediclaim_acceptance'] = $_POST['Mediclaim_acceptance'];
    $data['cat_id'] = $_POST['category'];
   
    $data['Address'] = $_POST['Address'];
    $data['Cost_of_Admission'] = $_POST['Cost_of_Admission'];
    $data['contact_user'] = $_POST['contact_user'];
    $data['contact_email'] = $_POST['contact_email'];
    $data['Rating'] = $_POST['Rating'];

    if($hosp->update($hosp_id,$data)){
        redirect('index.php','Your hospital has been successfully updated!','success');
    
    }    else{
        redirect('index.php','Something went wrong!','error');
    }
    
}
$template = new Template('templates/hospital-edit.php');
$template->hosp = $hosp->getHospital($hosp_id);

$template->category = $hosp->getCategory();
echo $template;
