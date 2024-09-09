<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Receipt</title>
</head>
<body>
   
     <li class="nav-item"><a href="logout " class="">Log out</a></li>
    <li class="nav-item"><a href="men " class="">Main Page</a></li>
    <?php  
      $db=db_connect();
      $session=session();
      $email =$session->get('user_details');
	  
	   echo "<span><h6>Thanks for buying at Clothstock</h6>  ".$email."</span>" ;
	   echo " ";
	   $session->getFlashdata('cart');
	   $query1   = $db->query("SELECT `user_id` FROM user WHERE `email` = '$email' ");
       $results = $query1->getResult();
	   foreach($results as $row){
		  echo $row->user_id;

	   }
       $user_id= $row->user_id;
       $db=db_connect();
       $builder=$db->table('order');
	   $builder->join('cart','order.customer_id=cart.user_id');
       $builder->where(['customer_id'=>21]);
	   $results=$builder->get()->getResultArray();
       
      
       echo "<h2>Order receipt</h2>";
      
      $num=$builder->get()->getNumRows();
      if($num>0){
        echo "<table class='table table-bordered table-striped' style='margin:10px;'>";
        echo "<tr>";
        echo "<th>Order_id</th>";
        echo "<th>Customer_id</th>";
        echo "<th>Order amount</th>";
        echo "<th>Order status</th>";
        echo "<th>Payment Type</th>";
       
        echo "<th>Fashion ID</th>";
        echo "<th>Fashion Item</th>";
        echo "<th>Unit Price</th>";
        echo "<th>Quantity</th>";
        echo "<th>Total Price</th>";
        echo "<th>Time of Purchase</th>";
        echo "</tr>";
        foreach($results as $row){
           
            echo "<tr>";
            echo "<td>".$row["order_id"]. "</td>"; 
            echo "<td>".$row["customer_id"]. "</td>" ;
            echo "<td>".$row["order_amount"]. "</td>";
            echo "<td>".$row["order_status"]. "</td>";
            
            echo "<td>".$row["payment_type"]. "</td>" ;
            echo "<td>".$row["fashion_id"]. "</td>";
            echo "<td>".$row["fashion_item"]. "</td>" ;
            echo "<td>".$row["unit_price"]. "</td>" ;
            echo "<td>".$row["quantity"]. "</td>" ;
            echo "<td>".$row["total"]. "</td>" ;
            echo "<td>".$row["created_at"]. "</td>" ;
          
            echo "</tr>";
            echo "<br>";
    
        }
        echo "</div></table>";
       
    }else{
        echo "No receipts yet";
    } 



     ?>
      <script>
        //alert('Do you chose to print this');
        //var doc=document.getElementById("content");
        // print();
    </script>
    <style>
        li{
            text-align:right;
            position: top;
            list-style: none;
        }
    </style>
    <button type="submit" class="btn btn-primary btn-sm" placeholder="" style="margin-left:25px; width:100px;" onclick="print()">Print</button>
   
</body>
</html>