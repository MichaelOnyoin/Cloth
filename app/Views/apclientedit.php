<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Client</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <link rel="stylesheet" href="/assets/app.css">

</head>
<body>
    <div class="mb-3 form-control">
        <!--  http://localhost/web_prac/apclientedit.php-->
        <form action="userEdit" method="post" class=" " id="">
            <h3 style="text-align: center;">Update Customer Information</h3>
            <label for="" class="form-label">User_id</label>
            <input type="number" name="user_id" id="" min="1" class="form-control form-control-sm"><br>
            <label for="" class="form-label">Email</label>
            <input type="email" name="email" id="" class="form-control form-control-sm"><br>
            <label for="" class="form-label">First Name</label>
            <input type="text" name="firstname" id="" class="form-control form-control-sm"><br>
            <label for="" class="form-label">Last Name</label>
            <input type="text" name="lastname" id="" class="form-control form-control-sm"><br>
            <label for="" class="form-label">Password</label>
            <input type="password" name="password" id="" class="form-control"><br>
            <label for="" class="form-label">Gender</label>
            <input type="text" name="gender" id="" class="form-control" list="datalistOptions" >
            <datalist id="datalistOptions">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </datalist>

            
            <br>
            <label for="" class="form-label">Category</label>
            <input type="text" name="category" id="" class="form-control" list="datalistOptions2" placeholder="Choose a category">
            <datalist id="datalistOptions2">
                <option value="Men">Men</option>
                <option value="Women">Women</option>
                <option value="Children">Children</option>
                <option value="Pets">Pets</option>

            </datalist><br>
            <label for="" class="form-label">Sub-Category</label>
            <input type="text" name="subcategory" id="" class="form-control" list="datalistOptions3" placeholder="choose sub-category">
            <datalist id="datalistOptions3">
                <option value="Formal">Formal</option>
                <option value="Casual">Casual</option>
                <option value="Sports">Sports</option>

            </datalist><br>
            <input type="submit" value="Edit" class="btn btn-success btn-block btn-sm">



        </form>
        <br>
        <hr>
        <div class="form-group">
            <!-- http://localhost/web_prac/apclientdelete.php -->
            <form action="userDeleter" method="post" class="">
                <h3>Delete Customer user</h3>
                <label for="" class="form-label">User_id</label>
                <input type="number" name="user_id" id="" min="1" class="form-control"><br>
                <input type="submit" value="Delete" class="btn btn-danger btn-block btn-sm">
                
            </form>
        </div>
        
    </div>
</body>
</html>