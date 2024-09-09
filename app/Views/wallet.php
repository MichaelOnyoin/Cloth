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
    <title>Wallet</title>
</head>
<body>
    <h1 class="text-center">User Wallet</h1>
    <p style="color:black;">Check how much you have in your wallet and use it to purchase clothes</p>
    <?php  
      $db=db_connect();
      $session=session();
      $email =$session->get('user_details');
	  echo "Hi ";
	   echo $email ;
	   echo " ";
	  
	   $query1   = $db->query("SELECT `user_id` FROM user WHERE `email` = '$email' ");
       $results = $query1->getResult();
	   foreach($results as $row){
		  echo $row->user_id;
	   }
       $user_id= $row->user_id;
      
       $sql="SELECT `amount_available` FROM `wallet` WHERE `customer_id`='$user_id'";
       $query=$db->query($sql);
       $result=$query->getResult();
       foreach($result as $row){
           //echo $row->amount_available;
       }


    ?>
    <h3 style="text-align: center;"><p style="color:black;">Amount available for you is <?php echo "$row->amount_available ksh" ; ?></p></h3>
    <style>
        .tablinks img
				{
					margin: auto;
				}
        a{
          text-align: right;
        }
    </style>
    <a href="payment">Proceed to payment</a>
    <div class="button-align">
    <button title="Cash | Cheque" class="tablinks button" onclick="openCity(event, 'wallet_reg')"><img src="/images/cheque.png"width="100" height="100" ></button>
    </div>
    <div id="wallet_reg" class="tabcontent paymethod">
    <form action="processWallet" method="post" >
        <h3 style="text-align: center; color: #dd9e07;">Wallet Registration</h3>
        <label for="User" name=user_id>Wallet ID</label>
        <input type="number" name='wallet_id' id="fstname" class="form-control"><br>
        <label for="User" name=user_id>User ID</label>
        <input type="number" name='customer_id' id="fstname" class="form-control"><br>
        <label for="Amount" name=lastname >Amount Available</label>
        <input type="text" name='amount_available' id="othname" class="form-control"><br>
        
        <label for="Is deleted">Is Deleted</label>
        <input type="number" name="is_deleted" id="pword1" value='0' class="form-control" readonly><br>
        
    
        <input type="submit" value="Create/Edit Wallet" id="btn2" class="btn btn-success btn-block" onsubmit="return validation()">
    </form>

    

    </div>
    <script>
        function openCity(evt, method) {
		  var i, tabcontent, tablinks;
		  tabcontent = document.getElementsByClassName("tabcontent");
		  for (i = 0; i < tabcontent.length; i++) {
		    tabcontent[i].style.display = "none";
		  }
		  tablinks = document.getElementsByClassName("tablinks");
		  for (i = 0; i < tablinks.length; i++) {
		    tablinks[i].className = tablinks[i].className.replace(" active", "");
		  }
		  document.getElementById(method).style.display = "block";
		  evt.currentTarget.className += " active";
		}
    </script>
    <script>
		function open(method) {
		  
		  document.getElementById(method).style.display = "block";
		}
		</script>	
    
</body>
</html>