<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API Tokens</title>
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
                    h1,h2,h3{
                        color:#dd9e07;
                    }
        </style>
        <h1><img src="" id="">API TOKENS</h1></header>
    <div class="form-group">
        
   
        <form action="processTokens" method="POST" class="regform" style="text-align: center;">
            <h3>API Token Registration</h3>
            <?php  
             $token = bin2hex(random_bytes(12));
            ?>
            <label for="Username" name=Userid class="form-label" style="text-align: left;">API User ID</label>
            <input type="number" name=api_userid id="1name" class="form-control"><br>
            <label for="Username" name=APIproduct >API Product</label>
            <input type="number" name=api_productid id="2name" class="form-control"><br>
            <label for="Email" name=email id="email">API Token</label>
            <input type="text" name="api_token" id="email" class="form-control" value='<?=$token = bin2hex(random_bytes(12)); ?>' readonly ><br>
            <label for="is_deleted">Is Deleted</label>
            <input type="number" name="is_deleted" id="pword" class="form-control" value='0' readonly><br>
            <input type="submit" value="Create Token" class="btn btn-info btn-block ">
        </form>
    </div>
</body>
</html>