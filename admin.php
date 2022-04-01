<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head><!-- Font Awsome Icons -->
  <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width">
<title>Lifafa admin panel</title>
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
	margin-top: 10%;
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
	#simpleToast {
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
  left: 44.5%; /* Center the snackbar */
  bottom: 30px; /* 30px from the bottom */
  font-family: monospace;
  display: inline-flex;
  line-hight: 13px
}
#simpleToast span {
	font-family: 'EB Garamond', serif;
  margin-left: 12px;
  margin-top: 1px;
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
::placeholder{
	color: white;
	text-align: left;
	letter-spacing: ;
	padding-left: 10px;
}
</style>
<link rel="stylesheet" href="style.css">
</head>
<body>
<?php
 error_reporting(0);
 include 'config.php';
 
/*$query = "UPDATE `admin` SET id='".$code."' where id ='1'";
$done = mysqli_query($conn,$query);*/

/* $query = "DELETE FROM users";
 $run = mysqli_query($conn,$query);*/

  	 echo'<form action="" method="POST" autocomplete="off">
  	<h2></h2>
  	<h3>BEST LIFAFA MAKER ADMIN PANEL</h3><br>
  	 <input type="text" name="code" class="input" placeholder="Enter your access code." minlength="1" maxlength="8" value="" required><br>
  	 <input type="text" name="name" class="input" placeholder="Enter your name." minlength="1" maxlength="25" value="" required><br>
  	 <input type="link" name="channel" class="input" placeholder="Enter telegram link." minlength="5" maxlength="40" value="" required><br>
  	  <input type="text" name="mkey" class="input" placeholder="Enter full2sms mkey." minlength="16" maxlength="16" value="" required><br>  	  <input type="text" name="mid" class="input" placeholder="Enter full2sms mid." minlength="13" maxlength="13" value=""required><br>
  	  <input type="text" name="guid" class="input" placeholder="Enter full2sms guid." minlength="32" maxlength="32" value=""required><br> 
  	  <input type="text" name="token" class="input" placeholder="Enter full2sms token." minlength="16" maxlength="16" value=""required><br> 
  	  <select name="charge" required>
  <option value="8">Gateway charge</option>
  <option value="8">Full2sms charge 8%</option>
  <option value="10">0.2% Profit</option>
  <option value="11">0.3% Profit</option>
  <option value="12">0.4% Profit</option>
  <option value="13">0.5% Profit</option>
  <option value="14">0.6% Profit</option>
  <option value="15">0.7% Profit</option>
  <option value="16">0.8% Profit</option>
  <option value="17">0.9% Profit</option>
  <option value="18">0.10% Profit</option>
 
  	  </select>  <br>	  
  	   <input type="submit" name="submit" class="submit" value="UPDATE"><br><br>
  	    	<h2></h2>
  	 <span class="name">Set or update your credentials</span><br><br>
  <span class="get">Go to lifafa maker panel<a href="index.php"> click here.</a></span><br>
    <div id="simpleToast">
  <i class="fas fa-exclamation-triangle">️</i><span id="message"></span>
</div>
  	 </form><br><br>';
  	 $code = $secret_code;
  	   	if(!empty($_POST) && $_SERVER["REQUIEST_METHOD"] = "POST" && isset($_POST["submit"])){  	   		
  	 		// Enter your access code  	   
  	   	$access = $_POST['code'];
  	   	$name = $_POST['name'];
  	   	$mkey = $_POST['mkey'];
  	   	$mid = $_POST['mid'];
  	   	$guid = $_POST['guid'];	
  	   	$token = $_POST['token'];
  	    $charge = $_POST['charge'];
  	   	$channel = $_POST['channel'];
  	    if($access != $code){
 	$sms = "wrong access code you entered";
  	    	 	 	  echo'
  <audio autoplay>
  <source src="https://lyciavoice.herokuapp.com/lycia?text='.$sms.'&lang=hi" type="audio/mpeg">
</audio>  
';
  	    	echo'<script> var x = document.getElementById("simpleToast");
  var y = document.getElementById("message");
  y.innerHTML = "Wrong access code."
  x.className = "show";
  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);</script>';
  	    }else if($code == $access){
  	    	
 $select = "SELECT * FROM admin";
 $out = mysqli_query($conn, $select);
 $rows =  mysqli_num_rows($out);
 $array =  mysqli_fetch_array($out);
 $row =  mysqli_fetch_assoc($out);
 $result = $conn->query($select);
	   
	   if($rows == 0){
 $sql = "INSERT INTO admin (id,name,mkey,mid,guid,token,charge,channel)
values ('".$code."','$name','$mkey','$mid','$guid','$token','$charge','$channel')";
$result = mysqli_query($conn, $sql);
 if($result){
 	$sms = "data successfully insert kiya gya";
 	 	 	  echo'
  <audio autoplay>
  <source src="https://lyciavoice.herokuapp.com/lycia?text='.$sms.'&lang=hi" type="audio/mpeg">
</audio>  
';
 		echo'<script> var x = document.getElementById("simpleToast");
  var y = document.getElementById("message");
  y.innerHTML = "Data inserted success."
  x.className = "show";
  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);</script>';
 }else{
 		echo'<script> var x = document.getElementById("simpleToast");
  var y = document.getElementById("message");
  y.innerHTML = "Something went wrong."
  x.className = "show";
  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);</script>';
 }
	  }else if($rows == 1){
$query = "UPDATE `admin` SET id='".$code."',name='".$name."',mkey='".$mkey."',mid='".$mid."',guid='".$guid."',token='".$token."',charge='".$charge."',channel='".$channel."'";
$done = mysqli_query($conn,$query);
if($done){
	$sms = "Data successfully update kiya gya";
	 	 	  echo'
  <audio autoplay>
  <source src="https://lyciavoice.herokuapp.com/lycia?text='.$sms.'&lang=hi" type="audio/mpeg">
</audio>  
';
 		echo'<script> var x = document.getElementById("simpleToast");
  var y = document.getElementById("message");
  y.innerHTML = "Data updated success."
  x.className = "show";
  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);</script>';
 }else{
 		echo'<script> var x = document.getElementById("simpleToast");
  var y = document.getElementById("message");
  y.innerHTML = "Something went wrong."
  x.className = "show";
  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);</script>';
 }
	  }else{
	  	echo'<script> var x = document.getElementById("simpleToast");
  var y = document.getElementById("message");
  y.innerHTML = "Something went wrong."
  x.className = "show";
  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);</script>';
	  }   	
  }   	 
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