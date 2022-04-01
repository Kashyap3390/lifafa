<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width">
<title>Lifafa maker panel</title>
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
</style>
<link rel="stylesheet" href="style.css">
</head>
<body>
<?php
// error_reporting(0);
 include 'config.php'; 
if (isset($_SERVER['HTTPS']))
{
 $lifafa_url = "https://".$_SERVER['HTTP_HOST']."/lifafa/lifafa.php?";
 
}
else
{
 $lifafa_url = "http://".$_SERVER['HTTP_HOST']."/lifafa/lifafa.php?";
}

 $oid = $_SESSION['oid'];
 $amount = $_SESSION['amount'];
 $info = $_SESSION['info'];
 $per_user = $_SESSION['per_user'];
 $total_user = $_SESSION['total_user'];
 $name = $_SESSION['name'];
 $callback = $_SESSION['callback'];
 $channel = $_SESSION['channel'];
 
 $select = "SELECT * FROM admin";
 $out = mysqli_query($conn, $select);
 $rows =  mysqli_num_rows($out);
 $array =  mysqli_fetch_array($out);
 $admin_name = $array['name'];
 $admin_channel = $array['channel'];
 $charge = $array['charge'];
 $code = $array['id'];
 $token = $array['token'];
 
 $url = "https://full2sms.in/status_order.php?order_id=$oid";
  
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL,$url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);     
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  $output= curl_exec ($ch);
  $json=json_decode($output,true);
  $status = $json['status'];
   $amo = $json['amount'];
curl_close ($ch);	
 if($status == "success" && $amo == $amount){ 	
 $id = rand(111112,999999);   
   $sql = "INSERT INTO users (id,name,per_user,total_user,channel,callback,amount,oid,status,count,info)
values ('$id','$name','$per_user','$total_user','$channel','$callback','$amount','$oid','$status','0','$info')";
$result = mysqli_query($conn, $sql);
 unset($_SESSION['oid']);
 unset($_SESSION['info']);
 	unset($_SESSION['amount']);
 	 unset($_SESSION['name']);
 unset($_SESSION['per_user']);
 	unset($_SESSION['total_user']);
 unset($_SESSION['callback']);
 	unset($_SESSION['channel']);
if($result){	
		 echo'<br><br><div class="form">
  	 	<h2>BEST LIFAFA MAKER PANEL 2022</h2>
  	<h3>Provided By :- '.$admin_name.'</h3>
  	<small class="warning">Importaint! <br>please do not referesh the page before copy your link otherwise we wipl not responsible for your loss.</small><br><br>
  	  <small class="label">👉 Copy this lifafa url 👈</small><br>
  	   <input type="text" name="url" class="input" placeholder="Copy Lifafa Url" value="'.$lifafa_url.'id='.$id.'" id="URL" required><br>  	
<button class="submit" onclick="copyUrl()">Copy Lifafa Link</button>
  	 <br><br>  	 
  	 <span class="name">Create paytm lifafa from this panel</span><br><br>
  	  <span class="get">Join our telegram channel<a href="'.$admin_channel.'" target="_blank"> Click Here</a></span><br>
  	 </div>';
  	 	$sms = "Welldone lefafa created successfully now copy your lefafa link and share with anyone thankyou.";
 	  echo'
  <audio autoplay>
  <source src="https://lyciavoice.herokuapp.com/lycia?text='.$sms.'&lang=hi" type="audio/mpeg">
</audio>  
';
  	 
  	 }else if(!$result){
	header("Location: index.php");
   	 $_SESSION['error'] = "Something went wrong.<br><br>";
   	   }  	 	
 }else if($status == "failed"){
 		unset($_SESSION['oid']);
 	unset($_SESSION['amount']);
 	unset($_SESSION['info']); 	
 	unset($_SESSION['name']);
 unset($_SESSION['per_user']);
 	unset($_SESSION['total_user']);
 	 unset($_SESSION['oid']);
 unset($_SESSION['callback']);
 	unset($_SESSION['channel']);
 	header("Location: index.php");
   	 $_SESSION['error'] = "Transition failed<br><br>.";
 }
 else{
 	header("Location: index.php");
 }
?>
<script type="text/javascript">     
//alert("hi");

if (window.history.replaceState) {
  window.history.replaceState( null, null, window.location.href );
}

</script>

<script type="text/javascript">

function copyUrl(){

var text = document.getElementById("URL");

text.select();

document.execCommand("copy");

alert("Link copied: " + text.value);

}

</script>
</body>
</html>