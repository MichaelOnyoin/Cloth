<?php
 
    include('apconn.php');
    //session_start();
   
    $email = $_POST["Email"];  
    $password = $_POST["Password"]; 
    
    echo"<br>";
    
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        // username and password sent from form 
        
        //to prevent from mysqli injection  
        
        $email = stripcslashes($email);  
        $password = stripcslashes($password);  
        $email = mysqli_real_escape_string($con, $email);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "SELECT * FROM user WHERE `email` = '$email' AND `password` = '$password'";  
    
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);
        //$active = $row['active'];

        
          
        if($count == 1){  
            echo "<h1><center> Login successful </center></h1>"; 
            echo "<br>";
            header("Location:C:\Users\HP\Desktop\Apps\cloth.html");
            //session_register("Email");
            $_SESSION['login_user'] = $email;
           
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        } 
        //Worked using jack@gmail.com and password= 24680 ; 
    }  
        
?>  