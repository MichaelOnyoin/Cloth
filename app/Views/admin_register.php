<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administration Register Form</title>
    <link rel="stylesheet" href="/assets/app.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <background>
        <link rel="stylesheet" href="/assets/Restraunt.css"> 
    </background>
    <h1><img src="/assets/clothlogo.jpg" id="logo1" >Clothstock</h1>
    <div id="frm2">
    <h3 style="text-align: center;">Fashion Worker Registration</h3>
    <!-- Also works:|| http://localhost/web_prac/adminstock.php -->
    <form action="processAdminRegister" method="post" name="form2" id="form2" >
        <h3 style="text-align: center;">Worker Registration</h3>
        <label for="First name" name=firstname>First name</label>
        <input type="text" name=firstname id="fstname" class="form-control"><br>
        <label for="Last name" name=lastname >Last names</label>
        <input type="text" name=lastname id="othname" class="form-control"><br>
        
        <label for="Password">Create Pasword</label>
        <input type="password" name="password" id="pword1" class="form-control"><br>
        <label for="Role" id="role">Role</label>
        <input type="text" name="role" id="role" class="form-control"><br>
        <label for="Email" class="email1">Email</label>
        <input type="email" name="email" id="email1" class="form-control"><br>
        <label for="gender">Gender</label>
        <input type="text" name="gender" id="" class="form-control" list="datalistOptions1">
            <datalist id="datalistOptions1">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </datalist>
            <br>
    
        <input type="submit" value="Apply Now" id="btn2" class="btn btn-primary btn-block" onsubmit="return validation()">
    </form>
    </div>
    <script>  
        function validation()  
        {  
            var id=document.form2.firstname.value;  
            var ps=document.form2.Password.value;  
            if(id.length=="" && ps.length=="") {  
                alert("User Name and Password fields are empty");  
                return false;  
            }  
            else  
            {  
                if(id.length=="") {  
                    alert("Your first name is empty");  
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