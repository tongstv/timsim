<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="Page Description">
    <meta name="author" content="Truong">
    <title>Page Title</title>

    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS & JS -->
    <link rel="stylesheet" media="screen" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<h1>TEST Tốc độ RAM DB</h1>

<div class="panel panel-success">
  <div class="panel-heading">
    <h2 class="panel-title">Tìm kiếm thử</h2>
  </div>
  <div class="panel-body">
  <form class="form-inline" method="POST">
  <input type="text" name="sosim" placeholder="Nhập số cần tìm" />
  <button type="submit" name="submit">Tìm thử</button>
  </form>
  </div>
</div>


<?php
    $starttime = microtime(true);

    //try {
    //create redis instance
    $redis = new Redis();

    //connect with server and port
    $redis->connect('localhost', 6379);
    $redis->select(2);

    $it = null;


    $redis->setOption(Redis::OPT_SCAN, Redis::SCAN_RETRY);
    
if (isset($_POST['submit'])) {




    $start = 0;

    $res = array();
    while ($start < 100) {
        $ret = $redis->scan($it, "data:*:*:*:".$_POST['sosim'].":*", 100);


        array_merge($res, $ret);

        $start = + count($res);
    }


?>
    
    <table class="table table-bordered">
    <thead>
        <tr>
    <td>STT</td>
    <td>Số sim</td>
      <td>Giá bán</td>
    </tr>
    </thead>
<tbody>

    <?php 
    $i=0;
    foreach($res AS $line):
    $i++;
    $e=explode(":",$line);
    ?>
    
    
    
    <tr>
    <td><?php echo $i?></td>
    <td><?php echo $e[4]?></td>
    <td><?php echo number_format($e[5]);?></td>
    </tr>
    <?php endforeach;?>
</tbody>
    </table>
    

    <?php
        $endtime = microtime(true);
    echo "<hr>";
    printf("Thời gian tìm kiếm %f seconds", $endtime - $starttime);
    echo "<hr>";
    echo "Số cột đã tìm: ". number_format($it);
    echo "<hr>";

    echo "Tổng số tìm được:".count($res);
}
?>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>