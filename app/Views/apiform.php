<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/app.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>API User Form</title>
</head>
<body>
    <div class="form-group">
        <form action="createAPIUser" method="post">
        <h3 style="text-align: center; color: #dd9e07;">API User Registration</h3>
       
        <label for="" name=key>API Key</label>
        <input type="text" name='key' id="fstname" class="form-control" value='<?=$token = bin2hex(random_bytes(14)); ?>' readonly ><br>
        
        <label for="User" name=username>Username</label>
        <input type="text" name='username' id="fstname" class="form-control"><br>
        <label for="Added by" name=lastname >Added By</label>
        <input type="number" name='added_by' id="othname" class="form-control"><br>
        
        <label for="Is deleted">Is Deleted</label>
        <input type="number" name="is_deleted" id="" value='0' class="form-control" readonly><br>
        
    
        <input type="submit" value="Create APIUser" id="btn2" class="btn btn-primary btn-block" onsubmit="return validation()">
        </form>

    </div>
</body>
</html>