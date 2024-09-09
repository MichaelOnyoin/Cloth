<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Insert</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <link rel="stylesheet" href="/assets/app.css">

</head>
<body>
    <div class="mb-3 form-control">
        <form action="productInsert" method="post" class=" " id="">
            <h3 style="text-align: center;">Product </h3>
            <!-- <label for="" class="form-label">Product ID</label>
            <input type="number" name="product_id" id="" min="1" class="form-control form-control-sm"><br> -->
            <label for="" class="form-label">Product Name</label>
            <input type="text" name="product_name" id="" class="form-control form-control-sm"><br>
            <label for="" class="form-label">Product description</label>
            <input type="text" name="product_description" id="" class="form-control form-control-sm"><br>
            <label for="" class="form-label">Product Image</label>
            <input type="file" name="product_image" id="" class="form-control form-control-file"><br>
            <label for="" class="form-label">Unit Price</label>
            <input type="text" name="unit_price" id="" class="form-control"><br>
            <label for="" class="form-label">Available Quantity</label>
            <input type="number" name="available_quantity" id="" min="1" class="form-control"  >
            
            <br>
            <label for="" class="form-label">Sub-Category ID</label>
            <input type="text" name="subcategory_id" id="" class="form-control" >
            <br>
            <label for="" class="form-label">Added By Admin</label>
            <input type="number" name="added_by" id="" class="form-control" ><br>
            <input type="number" name="is_deleted" id=""  class="form-control" value="0" readonly>
            
            <input type="submit" value="Insert" class="btn btn-success btn-block btn-sm">



        </form>
        <br>
        <hr>
    </div>
</body>