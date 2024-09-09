<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="/assets/app.css">
</head>
<body>
    <div class="mb-3 form-group">
        <form action="orderer" method="post" class="" id="">
            <h3 style="text-align: center;">Make Order</h3>
            <label for="" class="form-label">Customer_id</label>
            <input type="number" name="customer_id" id="" min="1" class="form-control form-control-sm"><br>
            <label for="" class="form-label">Order Amount</label>
            <input type="number" name="order_amount" id="" class="form-control form-control-sm"><br>
            <br>
            <label for="" class="form-label">Order Status</label>
            <input type="text" name="order_status" id="" class="form-control" list="datalistOptions4" placeholder="Status">
            <datalist id="datalistOptions4">
                <option value="pending">pending</option>
                <option value="pending payment">pending pament</option>
                <option value="paid">paid</option>

            </datalist>
            <br>
           
            <label for="" class="form-label">Payment Type</label>
            <input type="number" name="payment_type" id="" class="form-control" list="" placeholder="Payment method">
            <br>
            <label for="">Is Deleted</label>
            <input type="text" name="is_deleted" id="" value="0" class="form-control form-control-sm" readonly><br>
           

            <input type="submit" value="Insert" class="btn btn-success btn-block btn-sm">



        </form>
        </div>
</body>
</html>