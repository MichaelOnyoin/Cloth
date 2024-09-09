<header>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart Subcategory</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/dropdown.css">

</head>
<body>
    <div class="dropdown">
  <button class="dropbtn">Cart by Subcategory</button>
  <div class="dropdown-content">
    <a href="cart5">Formal</a>
    <a href="cart6">Casual</a>
    <a href="cart7">Sports</a>
  </div>
</body>
</html>
</header>
<?php 
use App\Models\CartModel;
$db = \Config\Database::connect();
$session=session();
      $email =$session->get('user_details');
	 
	   echo $email ;
	   echo " ";
	   $query1   = $db->query("SELECT `user_id` FROM user WHERE `email` = '$email' ");
       $results = $query1->getResult();
	   foreach($results as $row){
		  echo $row->user_id;

	   }
	   $user_id= $row->user_id;

if(isset($_POST['add_to_cart'])){
    if(isset($_SESSION['cart'])){
        $session_array_id=array_column($_SESSION['cart'],'id');
        if(!in_array($_GET['id'],$session_array_id)){
            $session_array= array(
                'id'=>$_GET['id'],
                "name"=>$_POST['name'],
                
                'price'=>$_POST['price'],
                'quantity'=>$_POST['quantity']);
        $_SESSION['cart'][]=$session_array;

        }

    }else{
        $session_array= array(
            'id'=>$_GET['id'],
            'name'=>$_POST['name'],
            
            'price'=>$_POST['price'],

            'quantity'=>$_POST['quantity']);
    $_SESSION['cart'][]=$session_array;
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <background>
        <style>
            body{
                background-color:coral;
            }
        </style>
    </background>
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center">Cloth Cart</h2>
                    <h4 class="text-right"><a href="wallet">My wallet</a></h4>
                    <div class="col-md-12">
                        <div class="row">

                    
                    <?php
                     $sql="SELECT * FROM `fashion` WHERE `subcategory`='Formal'";
                     $query   = $db->query($sql);
                     $result = $query->getResultArray();
                    

                    foreach($result as $row){ ?>
                    <div class="col-md-4">
                        <style>
                            img:hover{
                                border-radius:15%;
                                transform:scale(1.05);
                            }
                        </style>
                        
                      <form action="<?php echo site_url("cloth/cart5");?>?id=<?=$row['fashion_id'] ?>" method="post">

                      <img src="/assets/<?= $row["fashion_image"]; ?>" class="img center" style="height:350px; padding:10px; margin-left:40px;">
                      <h5 class="text-center"><?= $row["fashion_item"];?> </h5>
                      <h5 class="text-center"><?= $row["category"];?> </h5>
                      <h5 class="text-center"><?= $row["subcategory"];?> </h5>
                      <h5 class="text-center">Ksh<?= number_format($row["unit_price"],1);?> </h5>

                      <input type="hidden" name="name" id="" value=" <?= $row['fashion_item'] ?>">
                      <input type="hidden" name="price" id="" value=" <?= $row['unit_price'] ?>">
                      <input type="number" name="quantity" id="" value="1" class="form-control">
                      
                      <input type="submit" value="Add to Cart" name="add_to_cart" class="btn btn-warning btn-block my-2" style="">

                      </form>  
                    </div>
                    <?php } ?>
                       </div>
                    </div>
                    
                    
                </div>
                
                <div class="col-md-12">
                    <h2 class="text-center">Item Selected</h2>
                    <?php
                    $total=0;
                    $output="";
                    $output="
                    
                    <table class='table table-bordered table-striped'>
                    <tr>
                    <th>ID</th>
                    <th>fashion Item</th>
                    <th>fashion Price</th>
                    <th>Quantity</th>
                    <th>Total Price</th>
                    <th>Action</th>
                    </tr>
                    ";
                    //var_dump($_SESSION['cart']);
                    
                    if(!empty($_SESSION['cart'])){
                        foreach($_SESSION['cart'] as $key => $value){
                            $output .="
                            <tr>
                            <td>".$value['id']."</td>
                            <td>".$value['name']."</td>
                            <td>".$value['price']."</td>
                            <td>".$value['quantity']."</td>
                            <td>Ksh".number_format($value['price'] * $value['quantity'])."</td>
                            <td><a href='cart5?action=remove&id=".$value['id']."'>
                             <button class='btn btn-danger btn-block'>Remove</button>
                            </a></td>
                            </tr>
                            .";
                            $total=$total+$value['quantity']*$value['price'];
                            $fashion_id=$value['id'];
                            $fashion_item=$value['name'];
                            $unit_price=$value['price'];        
                            $quantity=$value['quantity'];
                            $total1=$value['quantity']*$value['price'];
                        }
                        $output.="
                        <tr>
                        <td colspan='3'></td>
                        <td >Total Price</td>
                        <td>".number_format($total,1)."</td>
                        <td><a href='cart1?action+clearall'>
                        <button class='btn btn-warning'>Clear All</button></a></td>
                        </tr>
                        <tr>
                        <td colspan='5'></td>
                        <td><a href='payment' ><button class='btn btn-warning'>Proceed to Payment</button></a></td>
                        </tr>
                        </table>

                        <form method='post' action='processCart1' class='form-group'>
                        <input type='hidden' name='user_id' id='' value='$user_id'>
                        <input type='hidden' name='fashion_id' id='' value='$fashion_id'>
                        <input type='hidden' name='fashion_item' id='' value='$fashion_item'>
                        <input type='hidden' name='unit_price' id='' value='$unit_price'>
                        <input type='hidden' name='quantity' id='' value='$quantity'>
                        <input type='hidden' name='total' id='' value='$total1'>
                        <input type='submit' class='btn btn-success' value='Create receipt'>
                        

                        </form>";
                        echo "<html>
                        <li class='nav-item'><a href='logout'>Log out</a></li>
                        </html>
                        ";
                    }
                    echo $output ;
                   
                    ?>
                    <?php
                        if(isset($_GET['action'])){
                            if($_GET['action']=="clearall"){
                                unset($_SESSION['cart']);
                            }
                            if($_GET['action']=="remove"){
                                foreach($_SESSION['cart'] as $key=>$value){
                                    if($value['id']==$_GET['id']){
                                        unset($_SESSION['cart'][$key]);
                                    }
                                }
                            }
                        }
                        ?>

                </div>
            </div>
        </div>
    </div>
 </body>
 </html>