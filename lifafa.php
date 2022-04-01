<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width">
<title>Paytm Lifafa Script</title>
<!-- Font Awsome Icons -->
  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
<style>
@import url('https://fonts.googleapis.com/css2?family=Cinzel:wght@500&family=EB+Garamond&family=Play&display=swap');

*{
	text-decoration: none;
}
body{
font-family: 'Play', sans-serif;
	background: linear-gradient(to top, #332CFF,#CA00FF);
	padding: 5px;
	text-align: center;
	min-height: 100vh;	
}
form,.form{
	margin-top: 1%;
	background: white;
	border-radius: 10px;
	padding: 5px;
	border: none;
	justify-content: center;
	text-align: center;
	padding-top: 10px;
 padding: bottom: 20px;		
}
.input{
	background: linear-gradient(to left, #61C9FF,#D763FF);
	color: black;
	margin-bottom: 6px;
	height: 40px;
	width: 250px;
	text-align: center;
	font-weight: bold;
	letter-spacing: 1px;
	padding: 2px;
	border-radius: 5px;
	border: 1px solid black;
	outline: none;
}
	input[type=submit],.submit{		
		margin-top: 15px;
		letter-spacing: 1px;
		padding: 10px;
		width: 255px;
		text-align: center;
		border-radius: 5px;
		border: 0px;
		outline: none;
		height: 55px;
		background: #001CFF;
		color:white;
		font-weight: bold;
		margin-bottom: 15px;
	}
h3{
	border-top: 1.5px dashed red;
	border-bottom: 1.5px dashed red;
	color: rgba(00,200,200,.7);
	font-size: 15px;
	padding: 10px;
	}
	h2{		
	font-size: 15px;
	}
	span.name{
 font-size: 16px;
 width: 200px;
 color: red;
	border-bottom: 1px dashed red;
	}
	.get{	
	padding: 2px;
	color: gray;
	border-left: 2px solid red;	
	}
	small.label{
		font-size: 15px;
		color: #00B5FF;
		letter-spacing: 1px;
	}
	@media(min-width: 370px){
		form{
		margin-left: 15%;
		margin-right: 15%;
		}
	}	
	select{
		padding: 8px;
		height: 45px;
		width: 255px;
		border-radius: 5px;
	//	background: white;
		color: blue;
		letter-spacing: 1px;
		border: 3px 3px 3px 3px;
		background: linear-gradient(to left, #61C9FF,#fff);
		border: 0.5px solid black;
	}
::placeholder{
	color: white;
	text-align: left;
	letter-spacing: ;
	padding-left: 10px;
}
label{
	color: #47E1FF;
	text-align: center;
	font-size: 16px;
	letter-spacing: 1px;
}
#simpleToast span {
	font-family: 'EB Garamond', serif;
  margin-left: 12px;
  margin-top: 1px;
}	#simpleToast {
  visibility: hidden; /* Hidden by default. Visible on click */
  min-width: 250px; /* Set a default minimum width */
  margin-left: -125px; /* Divide value of min-width by 2 */
  background-color: MediumVioletRed; /* Background color */
  color: #fff; /* White text color */
  text-align: center; /* Centered text */
  border-radius: 2px; /* Rounded borders */
  padding: 16px; /* Padding */
  position: fixed; /* Sit on top of the screen */
  z-index: 1; /* Add a z-index if needed */
  left: 45.5%; /* Center the snackbar */
  bottom: 30px; /* 30px from the bottom */
  font-family: monospace;
  display: inline-flex;
  line-hight: 13px
}

/* Show the SIMPLE-TOAST when clicking on a button (class added with JavaScript) */
#simpleToast.show {
  visibility: visible; /* Show the SIMPLE-TOAST */
  /* Add animation: Take 0.5 seconds to fade in and out the SIMPLE-TOAST.
  However, delay the fade out process for 2.5 seconds */
  -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
  animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

/* Animations to fade the SIMPLE-TOAST in and out */
@-webkit-keyframes fadein {
  from {bottom: 0; opacity: 0;}
  to {bottom: 30px; opacity: 1;}
}

@keyframes fadein {
  from {bottom: 0; opacity: 0;}
  to {bottom: 30px; opacity: 1;}
}

@-webkit-keyframes fadeout {
  from {bottom: 30px; opacity: 1;}
  to {bottom: 0; opacity: 0;}
}

@keyframes fadeout {
  from {bottom: 30px; opacity: 1;}
  to {bottom: 0; opacity: 0;}
}
.fa-exclamation-triangle{
	color: white;
	font-size: 16px;
	text-align: center;
	font-weight: none;
	margin-top: 3px;
}
</style>
<link rel="stylesheet" href="style.css">
</head>
<body>
<?php
 error_reporting(0);
 include 'config.php';
 function getIPAddress() {  
    //whether ip is from the share internet  
     if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
                $ip = $_SERVER['HTTP_CLIENT_IP'];  
        }  
    //whether ip is from the proxy  
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
     }  
//whether ip is from the remote address  
    else{  
             $ip = $_SERVER['REMOTE_ADDR'];  
     }  
     return $ip;  
}  
 $ip = getIPAddress();  
 
 $id = $_GET['id'];
 if($id){
 $select = "SELECT * FROM users where id ='".$id."'";
 $out = mysqli_query($conn, $select);
 $rows =  mysqli_num_rows($out);
 $array =  mysqli_fetch_array($out);
 $name = $array['name'];
 $channel = $array['channel'];
 $amount = $array['per_user'];
 $channel = $array['channel'];
 $total_user = $array['total_user'];
 $callback = $array['callback'];
 $count = $array['count'];
 $info = $array['info'];
 
 $ok = "SELECT * FROM admin";
 $query = mysqli_query($conn, $ok);
 $array =  mysqli_fetch_array($query);
 $admin_name = $array['name'];  
 $admin_channel = $array['channel'];
 $mkey = $array['mkey'];
 $mid = $array['mid'];
 $token = $array['token'];
 $guid = $array['guid'];
  
 if($rows == 0){
 	echo'<meta http-equiv="refresh" content="2; url='.$admin_channel.'">';
 	 echo'<br><br><div class="form">
  	 	<h2>PAYTM LIFAFA SCRIPT</h2>
  	<h3>Lifafa not found</h3>
  	<small class="warning">This lifafa not found in database pls check your id and try again.</small><br><br>
  	 	<h2>Service Provider :- '.$admin_name.'</h2><br>
  <a class="submit" href="'.$admin_channel.'" target="_blank"> Join Telegram Channel</a>
  	 <br><br>  	 
  	 <span class="name">Paytm lifafa script 2022.</span><br><br>
  	  <span class="get">Join our admin telegram channel<a href="'.$admin_channel.'" target="_blank"> Click Here</a></span><br>
<audio autoplay="autoplay" src="party.mp3">
  	 </div>';
 }else if($rows == 1){
 	 if($count == $total_user){
 		
 	 	$sms = "Todays lefafa has been over. come back next time thank-you.";
 	 	echo'<br><br><div class="form"> 	 	 	 	 
  	 	<h2>PAYTM LIFAFA SCRIPT</h2>
  	<h3>Lifafa Has Been Over</h3>
  	<small class="warning">Today`s lifafa looted successfully. come back next time thank-you.</small><br><br>
  	 	<h2>Lifafa Provider :- '.$name.'</h2><br>
  <a class="submit" href="'.$channel.'" target="_blank"> Join Telegram Channel</a>
  	 	 <br><br> 
 <h3>'.$count.'  /  '.$total_user.' Claimed.</h3> 	 
  	 <span class="name">Paytm lifafa script 2022.</span><br><br>
  	  <span class="get">Join our admin telegram channel<a href="'.$channel.'" target="_blank"> Click Here</a></span><br>
  	 </div>';
  	 echo'<meta http-equiv="refresh" content="2; url='.$callback.'">';
  	 echo'<audio autoplay="autoplay" src="party.mp3">';
 	 }else if($count < $total_user){
 	 //	echo'<audio autoplay="autoplay" src="party.mp3">'; 	 	
$sms = "";
 	 	  echo'
  <audio autoplay>
  <source src="https://lyciavoice.herokuapp.com/lycia?text='.$sms.'&lang=hi" type="audio/mpeg">
</audio>  
';
 		 echo'<br><div class="form">
 		 <form method="POST" autocomplete="off">
<h2>Lifafa By :- '.$name.'</h2>
<h3>Per user '.$amount.'Rs. - Loot!</h3>
  	<small class="warning">Note!<br>Please don`t do any cheating and don`t try to hack otherwise direct block.</small><br><br>
  	  <small class="label">👉 Enter Paytm Number 👈</small><br>
  	   <input type="text" name="number" class="input" placeholder="Enter paytm number"required><br>  	
<input type="submit" class="submit" name="submit" value="CLAIM LIFAFA">
  	 <br><br> 
 <h3>'.$count.'  /  '.$total_user.' Claimed.</h3> 	 
  	 <span class="name">Share and support our panel</span><br><br>
  	  <span class="get">Join our telegram channel<a href="'.$channel.'" target="_blank"> Click Here</a></span><br></form><div id="simpleToast">
  <i class="fas fa-exclamation-triangle"></i><span id="message"></span>
</div>
  	 </div>';  	 
  	 
  	 	if(!empty($_POST) && 
 $_SERVER["REQUIEST_METHOD"] = "POST" && isset($_POST["submit"])){
 $number = $_POST['number'];

 
 $om = "SELECT * FROM member where id=$id";
 $ot = mysqli_query($conn, $om);
 $ro =  mysqli_num_rows($ot);
 $ind =  mysqli_fetch_array($ot);
 $user_ip = $ind['ip'];  

 if($ip == $user_ip){
 	echo'<audio autoplay="autoplay" src="party.mp3">
 	  	<div id="simpleToast">
  <i class="fas fa-exclamation-triangle"></i><span id="message"></span>
</div>';
 
  	  	$sms = "Sorry you already claimed this lefafa please try again later Thankyou.";
 	  echo'
  <audio autoplay>
  <source src="https://lyciavoice.herokuapp.com/lycia?text='.$sms.'&lang=hi" type="audio/mpeg">
</audio>  
';
echo'<script> var x = document.getElementById("simpleToast");
  var y = document.getElementById("message");
  y.innerHTML = "You already claimed."
  x.className = "show";
  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);</script>';
  
 	     }else if($ip != $user_ip){
 	   
 $api = "https://job2all.xyz/api/index.php?";

 $ab = array(
 "mid" => $mid,
 "mkey" => $mkey,
 "guid" => $guid, 
 "mob" => $number,
 "amount" => $amount,
 "info" => $info
);
 
  $abc = http_build_query($ab);
  
 $ch = curl_init();
 curl_setopt($ch, CURLOPT_URL,$api);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
 curl_setopt($ch, CURLOPT_POSTFIELDS,$ab);
  
  $resp = curl_exec($ch);

 
 if($resp){
 	 	echo'<audio autoplay="autoplay" src="fire.mp3">';
 	echo'<meta http-equiv="refresh" content="6; url='.$callback.'">';
 	$count_a = $count+1;
  $a = "UPDATE `users` SET count='$count_a' WHERE id='$id'";
  $done = mysqli_query($conn,$a);  
  $me = "INSERT INTO member (id,ip)
values ('$id','$ip')";
$result = mysqli_query($conn, $me);
$sms = "congratulation lefafa successfully claimed aapne earn kiye hai $amount rupey please check you wallet thankyou.";
  echo'
  <audio autoplay>
  <source src="https://lyciavoice.herokuapp.com/lycia?text='.$sms.'&lang=hi" type="audio/mpeg">
</audio>  
';
echo'<script> var x = document.getElementById("simpleToast");
  var y = document.getElementById("message");
  y.innerHTML = "Lifafa Claimed success!"
  x.className = "show";
  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);</script>'; 	
        }else{        	  	
        echo'<meta http-equiv="refresh" content="6; url='.$callback.'">';
        	$sms = "ohhho kuch takneekee problem hui while money transfer money could not sent      sorry.";
  echo'
  <audio autoplay>
  <source src="https://lyciavoice.herokuapp.com/lycia?text='.$sms.'&lang=hi" type="audio/mpeg">
</audio>  
';
       	echo'<script> var x = document.getElementById("simpleToast");
  var y = document.getElementById("message");
  y.innerHTML = "Money could not sent."
  x.className = "show";
  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);</script>'; 	
        }
 	     } 	 		
  	 	}  	   	 	
 	 }
 }
}else{
	           /////////
}
?>
<script type="text/javascript">     
//alert("hi");

if (window.history.replaceState) {
  window.history.replaceState( null, null, window.location.href );
}

</script>



</body>
</html>