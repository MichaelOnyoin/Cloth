<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fashion Edit</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="/assets/app.css">
</head>
<body>
    <div class="mb-3 form-group">
        <!-- http://localhost/web_prac/fashEdit.php -->
        <form action="fashionEditer" method="post" class="" id="">
            <h3 style="text-align: center;">Edit Fashion</h3>
            <label for="" class="form-label">Fashion_id</label>
            <input type="number" name="fashion_id" id="" min="1" class="form-control form-control-sm"><br>
            <label for="" class="form-label">Fashion Item</label>
            <input type="text" name="fashion_item" id="" class="form-control form-control-sm"><br>
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
            <label for="">Price</label>
            <input type="text" name="unit_price" id="" min="1" class="form-control form-control-sm"><br>
            <label for="">Image</label>
            <input type="file" name="fashion_image" id="" class="form-control-file">

            <input type="submit" value="Edit" class="btn btn-success btn-block btn-sm">



        </form>
        </div>
</body>
</html>