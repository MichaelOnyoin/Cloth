<?php
    $db=db_connect();
    $sql="SELECT * FROM analytics ";
    $query=$db->query($sql);
    $results=$query->getResultArray();
    $chart_data='';
    foreach($results as $row){
        $chart_data .="{Item_group:'".$row["item_group"]."',profit:".$row["profit"].",purchase:".$row["purchase"].",sales:".$row["sales"]."}, ";
        

    }
    $chart_data=substr($chart_data,0,-2);
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

    <title>Chart</title>
</head>
<body>
    
    <div class="container" style="width:900px;">
    <style>
        h2,h3{
            text-align:center;
        }
    </style>
        <h2 >Morris js chart showing product specifics</h2>
        <h3>Chart</h3><br>
        <div id="chart"></div>
        
    </div>
    <a href="main">Main Page</a>
</body>
<script>
    Morris.Bar({
        element:"chart",
        data:[<?php echo $chart_data; ?>],
        xkey:'Item_group',
        ykeys:['profit','purchase','sales'],
        labels:['profit','purchase','sales'],
        hideHover:'auto',


    });
</script>
</html>