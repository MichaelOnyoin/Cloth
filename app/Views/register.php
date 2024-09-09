<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <script src="/js/ajax.js"></script>
    <link rel="stylesheet" href="/assets/app.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <header>
        <style>
            #logo1{
                    border-radius: 100%;
                    width: 120px;
                    }
        </style>
        <h1><img src="/assets/clothlogo.jpg" id="logo1"> Register Here</h1></header>
    <div class="form-group">
    <!-- Also use || http://localhost/web_prac/register.php -->
        <form action="processRegister" method="POST" class="regform" style="text-align: center;">
            <h3>Client Registration</h3>
            <label for="Username" name=lastname class="form-label" style="text-align: left;"><i class="fa fa-user"></i>First name</label>
            <input type="text" name=firstname id="1name" class="form-control"><br>
            <label for="Username" name=lastname><i class="fa fa-user"></i>Second name</label>
            <input type="text" name=lastname id="2name" class="form-control"><br>
            <label for="Email" name=email id="email"><i class="fa fa-envelope"></i>Email</label>
            <input type="email" name="email" id="email" class="form-control"><br>
            <label for="Password">Create Password</label>
            <input type="password" name="password" id="pword" class="form-control"><br>
            <label for="Gender">Gender</label>
            <input type="text" name="gender" id="" class="form-control" list="datalistOptions1">
            <datalist id="datalistOptions1">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </datalist>
            <br>
        
            
            <label for="category">Category</label>
            <input type="text" name="category" id="" class="form-control" list="datalistOptions2" placeholder="Choose a category">
            <datalist id="datalistOptions2">
                <option value="Men">Men</option>
                <option value="Women">Women</option>
                <option value="Children">Children</option>
                <option value="Pets">Pets</option>

            </datalist>
            <br>
            <label for="sub-category">Sub Category</label>
            <input type="text" name="subcategory" id="" class="form-control" list="datalistOptions3" placeholder="choose a subcategory">
            <datalist id="datalistOptions3">
                <option value="Formal">Formal</option>
                <option value="Casual">Casual</option>
                <option value="Sports">Sports</option>
                

            </datalist>
            <br>
        
            <input type="submit" value="Sign Up" class="btn btn-primary btn-block ">
            <p style="color: black;"><a href="adminRegister">Register as fashion worker</a></p>
           
            


        </form>
    </div>
</body>
</html>