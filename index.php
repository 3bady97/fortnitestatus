<?php
error_reporting(0);
?>
<!doctype html>
<html dir="rtl">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
	
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/style.css">

    <title>- K 3</title>
	
  </head>
  <body>


<!-------------------------------------- Start corus -------------------------------------->



<br/>
<div class="container bg">
<div class="row d-flex justify-content-start">
<a href="shop.php" class="btn btn-light wow bounceInRight" data-wow-duration="3s" data-wow-delay="1s">الشوب اليومي</a>
&nbsp;&nbsp;<a href="next.php" class="btn btn-light wow bounceInRight" data-wow-duration="3s" data-wow-delay="0.5s">عناصر الشوب القادمة</a>
</div>
<br/>
<br/>
<br/>
<br/>
<div class="row d-flex justify-content-center">
<form method="post" action="">
<div class="form-row justify-content-center">
   <div class="form-group col-md-12">
<input type="text" name="user" class="form-control text-center wow bounceIn" data-wow-duration="3s" data-wow-delay="0.5s" placeholder="الاسم او الاي دي" required>
</div>
<br/>
   <div class="form-group col-md-4">
<input type="submit" name="submit" class="btn btn-light btn-lg btn-block wow bounceIn" data-wow-duration="3s" data-wow-delay="1s" value="بحث">
</div>
</div>
</form>
</div>

  
<div class="row d-flex justify-content-center">
<?php
if (isset($_POST['submit'])) {
	$user = $_POST['user'];
$json = file_get_contents('https://fortnite-public-api.theapinetwork.com/prod09/users/id?username='.$user.'');
$data = json_decode($json, true);
$uid = $data['uid'];
$username = $data['username'];

$json2 = file_get_contents('https://fortnite-public-api.theapinetwork.com/prod09/users/public/br_stats_v2?user_id='.$uid.'');
$data2 = json_decode($json2, true);
$winsolo = ($data2['data']['keyboardmouse']['defaultsolo']['default']['placetop1']);
$killsolo = ($data2['data']['keyboardmouse']['defaultsolo']['default']['kills']);
$winduo = ($data2['data']['keyboardmouse']['defaultduo']['default']['placetop1']);
$killduo = ($data2['data']['keyboardmouse']['defaultduo']['default']['kills']);
$winsquad = ($data2['data']['keyboardmouse']['defaultsquad']['default']['placetop1']);
$killsquad = ($data2['data']['keyboardmouse']['defaultsquad']['default']['kills']);
$kills = ( $killsolo + $killduo + $killsquad );
$win = ( $winsolo + $winduo + $winsquad );
if (empty($kills)){
	echo '<br/><br/>
	<div class="alert alert-danger alert-dismissible fade show form-group col-md-3" role="alert">
	لا يوجد معلومات لهذا الحساب
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
	';
}else{
?>

  
  <div class="accordion" id="accordionExample">

  
    <div class="card">
    <div class="card-header" id="alltime">
      <h2 class="mb-0">
        <button class="btn btn-light" type="button" data-toggle="collapse" data-target="#alltimee" aria-expanded="true" aria-controls="alltimee">
         <?php echo $username; ?> &nbsp;<i class="fas fa-user-circle"></i>
        </button>
      </h2>
    </div>
	

    <div id="alltimee" class="collapse show" aria-labelledby="alltime" data-parent="#accordionExample">
      <div class="card-body"><h4>عدد القتلات : <span class="badge badge-secondary"><?php 
	  if (empty($kills)){
		echo '0';
	  }else{
	  echo $kills; 
	  }?>&nbsp;&nbsp;<i class="fas fa-skull"></i></span></h4></div>
      <div class="card-body"><h4>عدد مرات الفوز : <span class="badge badge-secondary"><?php 
	  if (empty($win)){
		echo '0';
	  }else{
	  echo $win; 
	  }?>&nbsp;&nbsp;<i class="fas fa-trophy"></i></span></h4></div>
    </div>
  </div>
  
  
  
  
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-light" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
          Solo Stats &nbsp;&nbsp;<i class="fas fa-user"></i>
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body"><h4>عدد القتلات : <span class="badge badge-secondary"><?php 
	  if (empty($killsolo)){
		echo '0';
	  }else{
	  echo $killsolo;
	  }?>&nbsp;&nbsp;<i class="fas fa-skull"></i></span></h4></div>
      <div class="card-body"><h4>عدد مرات الفوز : <span class="badge badge-secondary"><?php 
	   if (empty($winsolo)){
		echo '0';
	  }else{
	 	echo $winsolo;
	  } ?>&nbsp;&nbsp;<i class="fas fa-trophy"></i></span></h4></div>
    </div>
  </div>
  
  
  
  
  
  
  
  
  
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-light collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Duo Stats &nbsp;&nbsp;<i class="fas fa-user-friends"></i>
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body"><h4>عدد القتلات : <span class="badge badge-secondary"><?php 
	  if (empty($killduo)){
		echo '0';
	  }else{
	  echo $killduo; 
	  }?>&nbsp;&nbsp;<i class="fas fa-skull"></i></span></h4></div>
      <div class="card-body"><h4>عدد مرات الفوز : <span class="badge badge-secondary"><?php 
	  if (empty($winduo)){
		echo '0';
	  }else{
	  echo $winduo;
	  }?>&nbsp;&nbsp;<i class="fas fa-trophy"></i></span></h4></div>
    </div>
  </div>
  
  
  
  
  
  
  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-light collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Squad Stats &nbsp;&nbsp;<i class="fas fa-users"></i>
        </button>
      </h2>
    </div>
	
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body"><h4>عدد القتلات : <span class="badge badge-secondary"><?php 
	  if (empty($killsquad)){
		echo '0';
	  }else{
	  echo $killsquad; 
	  }?>&nbsp;&nbsp;<i class="fas fa-skull"></i></span></h4></div>
      <div class="card-body"><h4>عدد مرات الفوز : <span class="badge badge-secondary"><?php 
	  if (empty($winsquad)){
		echo '0';
	  }else{
	  echo $winsquad;
	  }?>&nbsp;&nbsp;<i class="fas fa-trophy"></i></span></h4></div>
    </div>
  </div>
</div>
  
  <?php
}
}else {
echo '<br/><br/><div class="alert alert-info alert-dismissible fade show form-group col-md-5" role="alert">
	ملاحظة : يتم وضع شرطة (-) بدلا من المسافة في الاسم
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
';
}
 
?>
  
  
<!-------------------------------------- End corus --------------------------------------> 
</div> 
</div> 

 <br/>
<br/>
<br/>
    <!-- Optional JavaScript -->
	 <script src="js/wow.js"></script>
              <script>
              new WOW().init();
              </script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.3.1.slim.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	</body>
</html>