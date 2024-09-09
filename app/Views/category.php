<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <link rel="stylesheet" href="/assets/app.css">

</head>
<body>
<div class="mb-3 form-control">
        <form action="categoryInsert" method="post" class=" " id="">
            <h3 style="text-align: center;">Category </h3>
            
            <label for="" class="form-label">Category Name</label>
            <input type="text" name="category_name" id="" class="form-control form-control-sm"><br>
            
            <!-- <label for="" class="form-label">Sub-Category ID</label>
            <input type="text" name="subcategory_id" id="" class="form-control" >
            <br> -->
            
            <input type="number" name="is_deleted" id=""  class="form-control" value="0" readonly>
            
            <input type="submit" value="Insert" class="btn btn-success btn-block btn-sm">



        </form>
        <br>
        <hr>
    </div>
</body>
</html>