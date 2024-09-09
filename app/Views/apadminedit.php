<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Admin </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <link rel="stylesheet" href="/assets/app.css">
</head>
<body>
    
    <div class="form-floating mb-3 form-group container-fluid">
        <!-- http://localhost/web_prac/apadminedit.php -->
        <form action="adminEditer" method="post" class="form-floating" id="">
            <h3 style="text-align: center;">Update Admin Information</h3>
            <label for="" class="form-label">Admin_id</label>
            <input type="number" name="admin_id" id="" min="1" class="form-control form-control-sm"><br>
            <label for="floatingInput" class="form-label">Email</label>
            <input type="email" name="email" id="floatingInput" class="form-control form-control-sm">
             
            <br>
            <label for="" class="form-label">First Name</label>
            <input type="text" name="firstname" id="" class="form-control form-control-sm"><br>
            <label for="" class="form-label">Last Name</label>
            <input type="text" name="lastname" id="" class="form-control form-control-sm"><br>
            <label for="" class="form-label">Password</label>
            <input type="password" name="password" id="" class="form-control"><br>
            <label for="" class="form-label">Gender</label>
            <input type="text" name="gender" id="" class="form-control" list="datalistOptions">
            <datalist id="datalistOptions">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </datalist>
            <br>
            <label for="floatingRole" class="form-label">Role</label>
            <input type="text" name="role" id="floatingRole" class="form-control">
            <br>
            <input type="submit" value="Edit" class="btn btn-success btn-block btn-sm">

            



        </form>
        <br>
        <hr>
        <div class="form-group form-floating">
            <!-- http://localhost/web_prac/apadmindelete.php -->
            <form action="adminDeleter" method="post" class="form-floating">
                <h3>Delete Admin user</h3>
                <label for="floatingID" class="form-label">Admin_id</label>
                <input type="number" name="admin_id" id="floatingID" min="1" class="form-control"><br>
                <input type="submit" value="Delete" class="btn btn-danger btn-block btn-sm">
                
            </form>
        </div>
        
        
    </div>
</body>
</html>