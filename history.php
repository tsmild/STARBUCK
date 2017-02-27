<?php require 'conn.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>STARBUCK</title>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style type="text/css">
      html {
        height: 100%;
      }
      body {
        height: 100%;
        margin: 0;
        background-repeat: no-repeat;
        background-attachment: fixed;
      }
      body{
        background: radial-gradient(ellipse at center, rgba(94,94,94,1) 0%, rgba(32,32,32,1) 100%);
      }
      a:hover{
        color: #fff;
      }
      a:active{
        color: #fff;
      }
      .header{
       background: linear-gradient(to bottom, rgb(133, 228, 64) 0%, rgb(54, 148, 15) 65%, rgb(37, 130, 12) 100%);
       height: 46px;
       height: 46px;
       background-repeat: no-repeat;
      }
      .header h3{
        margin: 0;
        line-height: 41px;
        color: #fff;
      }
      .acc332{
        color: #43c526;
      }
      .fff{
        color: #FFF;
      }
      .c989898{
        color: #989898;
      }
      .c130328{
        color: #130328;
      }
      .ccc{
        color: #ccc;
      }
      .cards{
        width: 500px;
        height: 300px;
        display: inline-block;
        width: 425px;
        height: 247px;
      }
      .cardspay{
        position: relative;
        margin-right: 9px; 
        margin-left: 13px;
        z-index: 2;
      }
      .cardsadd{
        position: relative;
        z-index: 1;
      }
      .cards1{
        width: 100%;
        height: 100%;
        background-color: #fff;
        background-size: cover;
      }
      .cards1-banner{
        background-image: url("img/carts.png");
      }
      .cards1-flip{
        background-image: url("img/cartsflip.png");
      }
      .vertical-center {
        min-height: 114px;
        display: flex;
        align-items: center;
      }
      .scroll::-webkit-scrollbar {
        width: 12px;
      }
      .touch{
        width: 100px;
        height: 100px;
        background: linear-gradient(to bottom, rgba(164,179,87,1) 0%, rgba(117,137,12,1) 65%, rgba(117,137,12,1) 100%);
        position: absolute;
        right: -27px;
        bottom: -33px;
         cursor: pointer;
      }
      .touch:hover{
        background: linear-gradient(to bottom, rgba(164,179,87,1) 0%, rgba(117,137,12,1) 100%, rgba(117,137,12,1) 100%) ;
      }
      .font-weight-bold{
        font-weight: bold;
      }
      .btn-default{
        height: 43px;
        border: 0;
        background: linear-gradient(135deg, rgba(151,152,164,1) 0%, rgba(151,152,164,1) 46%, rgba(102,98,115,1) 100%);
 
      }
      .btn-default:hover{
        background: linear-gradient(135deg, rgba(151,152,164,1) 0%, rgba(125,121,138,1) 22%, rgba(38,28,69,1) 100%);
        color: #fff; 
      }
      .btn-submit{
        background-color: #3f7369; 
        margin-top: 10px;
        margin-left: -17px;
        transition: 0.2s ease;
      }
      .btn-submit:hover{
        color: #fff;
        background-color: #559488;
      }
    </style>
</head>
<body>
  <div class="header row">
  <div class="col-xs-2 text-center">
    <a href="index.php" class="fff"><i class="fa fa-angle-left fa-3x"></i></a>
  </div>
  <div class="col-xs-9 text-center">
    <h3>Transaction History</h3>
  </div>
  </div>
  <div class="container" style="margin-top: 23px;
}">
    <div class="row">
      <div class="col-xs-12">
        <div class="col-xs-5">
          <img src="img/carts.png" height="120px;" class="img-rounded">
        </div>
        <div class="col-xs-6" style="margin-left: 10px; margin-top: 24px;">
        <?php
        $sql = "SELECT * FROM member WHERE cardnumber='6080152441596222'";
        $query = mysqli_query($conn,$sql);
        while ($rows = mysqli_fetch_array($query)) {
        ?>
          <h5 class="acc332"><?php echo $rows['cardnumber']; ?></h5>
          <h3 class="font-weight-bold fff" style="margin-top: -3px;">Bath <?php echo $rows['value']; ?>.00</h3>
          <?php
          }
          ?>
        </div>
      </div>
      <div class="col-xs-12 text-center acc332" style="    margin-top: 20px;">
        <h5>Displaying your last 10 transaction</h5>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <?php
        $sql = "SELECT * FROM transaction";
        $query = mysqli_query($conn,$sql);
        while ($rows = mysqli_fetch_array($query)) {
          $str = $rows["datetimes"];
        ?>
      <div class="col-xs-12" style="background-color: #fff;">
        <div class="col-xs-4 text-center c130328"><h4 class="font-weight-bold"><?php echo date('Y-m-d', strtotime($str)); ?></h4></div>
        <div class="col-xs-4 text-center cccc"><h5 class="font-weight-bold"><?php
          echo date('h:m', strtotime($str));
        ?></h5></div>
        <div class="col-xs-4 danger text-center <?php
          if ($rows['section'] == '-') {
            echo 'text-danger';
          }elseif ($rows['section'] == '+') {
            echo 'text-success';
          }
        ?>">
        <h4 class="font-weight-bold"><?php echo $rows['section']; ?>Baht<?php echo $rows['value']; ?>.00</h4></div>
      </div><?php
    }
      ?>
    </div>
  </div>
  
</body>
</html>