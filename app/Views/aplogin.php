<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="app.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body{
  
  background-color: cyan;
  background-image: url("fash.jpg");
  background-repeat: no-repeat;
  background-position: fixed;
  background-size: cover;
  
    
}
    </style>
</head>
<body class="login">
    <background>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
      <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"> 
      <link rel="stylesheet" href="<?php echo base_url('assets/app.css')?>" >
      <script src="<?php echo base_url('assets/jquerymin.js')?>"></script>
      <script src="/js/ajax.js"></script> 
    </background>

    <header><h1><img src="" id="">Login Page</h1></header>
    <!-- use for form action || http://localhost/web_prac/aplogin.php -->
    <form name="login" action="processLogin" method="POST" onsubmit="return validation()" id="form" style="text-align: center; width: 500px; ">
        <h2 style="text-align: center;">Client Login</h2> 
        <label for="Name"><i class="fa fa-user" style="color: cornflowerblue;"></i>Firstname:</label>
        <select name="firstname" id="name" class="form-group">
         <option value='0'>-- Select name --</option>
        </select><br>
        <label for="Email"><i class="fa fa-envelope" style="color: cornflowerblue;"></i> Email:</label>
        <input type="email" name="Email" id="email" ><br>
        <label for="Password"><i class="fa fa-password"></i>Password:</label>
        <input type="password" name="Password" id="pword"><br>
        
       
        
            <input type =  "submit" id = "" value = "Login" name="Login" class="btn btn-primary btn-block " style="height: auto; margin-top: 20px; color:aqua;">  
            <p style="color: black;"><a href="<?php echo site_url('Cloth/AdminLogin')?>">Log in as Admin</a></p>
    </form>
    
     <!-- Script -->
     <script type='text/javascript'>
        $(document).ready(function() {

            // Initialize select2
            $("#name").select2({
                ajax: {
                    url: "<?= site_url('names') ?>",
                    type: "post",
                    delay: 100,
                    dataType: 'json',
                    data: function(params) {
                        return {
                            query: params.term, // search term
                        };
                    },
                    processResults: function(response) {
                        return {
                            results: response.data
                        };
                    },
                    cache: true
                }
            });

        });
    </script>

    <!-- <script>  
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
    </script> -->

    


</body>
</html>
