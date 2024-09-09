
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
    <background>
        <link rel="stylesheet" href="/assets/Restraunt.css">
    </background>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="/assets/control.css">
    <style>
        

       li{
           float:left;
       }
       nav{
           height:50px;
       }
    </style>
    
    <link rel="stylesheet" href="/assets/control.css">
</head>
<background>
    
</background>
<body>
    <header>
        <div class="container-fluid topnav">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item"><a href="adminEdit">Admin Profiles</a></li>
                <li class="nav-item"><a href="FashionInsertion">Fashion Insertion</a></li>
                <li class="nav-item"><a href="product">Product Insertion</a></li>
                <li class="nav-item"><a href="FashionEdit">Fashion Edit</a></li>
                <li class="nav-item"><a href="clientEdit">Edit Client</a></li>
                <li class="nav-item"><a href="register">Client Insert</a></li>
                <li class="nav-item"><a href="adminProfile ">My Profile</a></li>
                <li class="nav-item"><a href="more">More</a></li>
                <li class="nav-item"><a href="logout1 ">Log out</a></li>

            </ul>
        </nav>
        </div>
    </header>
    <div class="row">
    <p>Welcome <?php 
      //session_start();
      $session=session();
        $email =$session->get('admin_details');
        echo $email;
      ?></p>

    </div>
</body>
</html>