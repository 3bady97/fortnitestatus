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
<a href="index.php" class="btn btn-light wow bounceInRight" data-wow-duration="2s" data-wow-delay="0.5s">رجوع</a>
</div>
<br/>
<br/>
<br/>

<div class="row d-flex justify-content-center text-center">

<h1 class="display-4 text1">الشوب اليومي</h1>

</div>
<br/>
<div class="row d-flex justify-content-center">
<?php
$json = file_get_contents('https://fortnite-public-api.theapinetwork.com/prod09/store/get');
$data = json_decode($json, true);
$img0 = ($data['items'][0]['item']['images']['information']);
$img1 = ($data['items'][1]['item']['images']['information']);
$img2 = ($data['items'][2]['item']['images']['information']);
$img3 = ($data['items'][3]['item']['images']['information']);
$img4 = ($data['items'][4]['item']['images']['information']);
$img5 = ($data['items'][5]['item']['images']['information']);
$img6 = ($data['items'][6]['item']['images']['information']);
$img7 = ($data['items'][7]['item']['images']['information']);
$img8 = ($data['items'][8]['item']['images']['information']);
$img9 = ($data['items'][9]['item']['images']['information']);
echo '<br/><br/>';
echo '<img style="width:300px;height:300px; background: url('.$img0.'); background-size:100% 100%;" class="hoverr wow bounceInDown" data-wow-duration="2s" data-wow-delay="1s">';
echo '<br/><br/>';
echo '<img style="width:300px;height:300px; background: url('.$img1.'); background-size:100% 100%;" class="hoverr wow bounceInDown" data-wow-duration="2s" data-wow-delay="1.2s">';
echo '<br/><br/>';
echo '<img style="width:300px;height:300px; background: url('.$img2.'); background-size:100% 100%;" class="hoverr wow bounceInDown" data-wow-duration="2s" data-wow-delay="1.4s">';
echo '<br/><br/>';
echo '<img style="width:300px;height:300px; background: url('.$img3.'); background-size:100% 100%;" class="hoverr wow bounceInDown" data-wow-duration="2s" data-wow-delay="1.6s">';
echo '<br/><br/>';
echo '<img style="width:300px;height:300px; background: url('.$img4.'); background-size:100% 100%;" class="hoverr wow bounceInDown" data-wow-duration="2s" data-wow-delay="1.8s">';
echo '<br/><br/>';
echo '<img style="width:300px;height:300px; background: url('.$img5.'); background-size:100% 100%;" class="hoverr wow bounceInDown" data-wow-duration="2s" data-wow-delay="2s">';
echo '<br/><br/>';
echo '<img style="width:300px;height:300px; background: url('.$img6.'); background-size:100% 100%;" class="hoverr wow bounceInDown" data-wow-duration="2s" data-wow-delay="2.2s">';
echo '<br/><br/>';
echo '<img style="width:300px;height:300px; background: url('.$img7.'); background-size:100% 100%;" class="hoverr wow bounceInDown" data-wow-duration="2s" data-wow-delay="2.4s">';
echo '<br/><br/>';
echo '<img style="width:300px;height:300px; background: url('.$img8.'); background-size:100% 100%;" class="hoverr wow bounceInDown" data-wow-duration="2s" data-wow-delay="2.6s">';
echo '<br/><br/>';
echo '<img style="width:300px;height:300px; background: url('.$img9.'); background-size:100% 100%;" class="hoverr wow bounceInDown" data-wow-duration="2s" data-wow-delay="2.8s">';
?>
 
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