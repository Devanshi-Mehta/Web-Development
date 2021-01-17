<?php class Hospital{
    private $db;

    public function __construct(){
        $this->db = new Database;
    }
    //get all hospitals
    public function getAllHospitals(){
        $this->db->query("SELECT hospitals.*, category.name as cname 
                          FROM hospitals
                          INNER JOIN category
                          ON hospitals.cat_id = category.id 
                          ORDER BY Date_of_post DESC");

                          //Assign result set

                          $results = $this->db->resultSet();

                          return $results;
    }

    //get categories
    public function getCategory(){
        $this->db->query("SELECT * FROM category");
        $results = $this->db->resultSet();

                          return $results;
    }

    //get hospitals by location
    public function getByCategory($category){
        $this->db->query("SELECT hospitals.*, category.name AS cname 
                          FROM hospitals
                          INNER JOIN category
                          ON hospitals.cat_id = category.id 
                          WHERE hospitals.cat_id=$category
                          ORDER BY Date_of_post DESC");

                          //Assign result set

                          $results = $this->db->resultSet();

                          return $results;
    }
    //get category
    public function getCat($cat_id){
        $this->db->query("SELECT * FROM category WHERE id = :cat_id");
        $this->db->bind(':cat_id',$cat_id);
                          //Assign the row

                          $row = $this->db->single();

                          return $row;

                          
}

public function getHospital($id){
    $this->db->query("SELECT * FROM hospitals WHERE id =:id");
        $this->db->bind(':id',$id);
                          //Assign the row

                          $row = $this->db->single();

                          return $row;
}

public function create($data){
    $this->db->query("INSERT INTO hospitals (cat_id,Hospital_name,Mediclaim_acceptance,
    Cost_of_Admission,Address,contact_user,contact_email,Rating)
    VALUES(:cat_id,:Hospital_name,:Mediclaim_acceptance,
    :Cost_of_Admission,:Address,:contact_user,:contact_email,:Rating)");

// Bind Data
$this->db->bind(':cat_id',$data['cat_id']);     
$this->db->bind(':Hospital_name',$data['Hospital_name']);
$this->db->bind(':Mediclaim_acceptance',$data['Mediclaim_acceptance']);
$this->db->bind(':Cost_of_Admission',$data['Cost_of_Admission']);  
$this->db->bind(':Address',$data['Address']);
 
$this->db->bind(':contact_user',$data['contact_user']);
$this->db->bind(':contact_email',$data['contact_email']);  
$this->db->bind(':Rating',$data['Rating']);            

if($this->db->execute()){
    return true;
}

else{
    return false;
}
}

public function delete($id){
    $this->db->query("DELETE FROM hospitals WHERE id = $id");


if($this->db->execute()){
    return true;
}

else{
    return false;
}

}


public function update($id,$data){
    $this->db->query("UPDATE hospitals 
                      SET
                      cat_id=:cat_id,
                      Hospital_name=:Hospital_name,
                      Mediclaim_acceptance = :Mediclaim_acceptance,
                      Cost_of_Admission = :Cost_of_Admission,
                      Address = :Address,
                      contact_user=:contact_user,
                      contact_email = :contact_email,
                      Rating = :Rating
                      WHERE ID = $id");


$this->db->bind(':cat_id',$data['cat_id']);     
$this->db->bind(':Hospital_name',$data['Hospital_name']);
$this->db->bind(':Mediclaim_acceptance',$data['Mediclaim_acceptance']);
$this->db->bind(':Cost_of_Admission',$data['Cost_of_Admission']);  
$this->db->bind(':Address',$data['Address']);
 
$this->db->bind(':contact_user',$data['contact_user']);
$this->db->bind(':contact_email',$data['contact_email']);  
$this->db->bind(':Rating',$data['Rating']);            

if($this->db->execute()){
    return true;
}

else{
    return false;
}
}

public function getcount()
{
    foreach($dbh->query('SELECT COUNT(*) FROM hospital') as $row){
        echo"<tr>";
        echo"<td>" . $row['COUNT(*)']."</td>";
        echo"</tr>";

    }
}
}