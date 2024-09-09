<?php 
$db=db_connect();
$session=session();
echo "<html>";
echo "";
 echo "</html>";
$email =$session->get('admin_details');
$sql_profile = "SELECT * FROM `admin` WHERE `email` = '$email'";
$query   = $db->query($sql_profile);
$result = $query->getResultArray();
$num=$query->getNumRows();
echo "<pre>";
//print_r($result);
echo "<br>";
//print_r($num);
echo "<pre>";

if($num>0){
    echo "<table>";
    echo "<tr>";
    echo "<th>Admin_id</th>";
    echo "<th>Email</th>";
    echo "<th>Firstname</th>";
    echo "<th>Lastname</th>";
    
    echo "<th>Password</th>";
    echo "<th>Gender</th>";
    echo "<th>Role</th>";
   
    echo "</tr>";
    foreach($result as $row){
        
        echo "<tr>";
        echo "<td>".$row["admin_id"]. "</td>"; 
        echo "<td>".$row["email"]. "</td>" ;
        echo "<td>".$row["firstname"]. "</td>";
        echo "<td>".$row["lastname"]. "</td>";
        
        echo "<td>".$row["password"]. "</td>" ;
        echo "<td>".$row["gender"]. "</td>";
        echo "<td>".$row["role"]. "</td>" ;
        
        echo "</tr>";
        echo "<br>";

    }
    echo "</div></table>";
    $login_id=$row['admin_id'];
    $login_firstname=$row['firstname'];
    $login_email=$row['email'];
    $login_lastname=$row['lastname'];
    $login_gender=$row['gender'];
    $login_role=$row['role'];
}else{
    echo "No records match your query";
} 
 ?>