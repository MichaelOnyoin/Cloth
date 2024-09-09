<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login Page</title>
    <link rel="stylesheet" href="app.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/app.css')?>" >
      <script src="<?php echo base_url('assets/jquerymin.js')?>"></script>
   
</head>
<body class="login">
    <background>
        <link rel="stylesheet" href=".css">
        
    </background>

    <header><h1><img src="" id="">Login Page</h1></header>
    <!--Also works || http://localhost/web_prac/admin_login.php  -->
    <form name="login" action="processAdminLogin" method="POST" onsubmit="return validation()" id="form" style="text-align: center; width: 500px; ">
        <h2 style="text-align: center;">Admin Login</h2> 
        <label for="Email"><i class="fa fa-envelope" style="color: cornflowerblue;"></i> Email:</label>
        <input type="email" name="Email" id="email" ><br>
        <label for="Password"><i class="fa fa-password"></i>Password:</label>
        <input type="password" name="Password" id="pword"><br>
        
       
        
            <input type =  "submit" id = "" value = "Login" name="Login" class="btn btn-primary btn-block " style="height: auto; margin-top: 20px; color:aqua;">  
            
    </form>
    <script>  
        function validation()  
        {  
            var id=document.login.Email.value;  
            var ps=document.login.Password.value;  
            if(id.length=="" && ps.length=="") {  
                alert("Email field and Password fields are empty");  
                return false;  
            }  
            else  
            {  
                if(id.length=="") {  
                    alert("Email field is empty");  
                    return false;  
                }   
                if (ps.length=="") {  
                alert("Password field is empty");  
                return false;  
                }  
            }                             
        }  
    </script>

</body>
</html>