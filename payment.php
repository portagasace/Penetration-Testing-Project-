<?php
    require_once 'init.php'; 
	
    if(
    	isset($_SESSION['name']) && 
    	isset($_GET['total_cost'])
    ){
    	$username = $_SESSION['name'];
    	$balance = (int) $_SESSION['money'];
    	$total_cost = (int) $_GET['total_cost'];
    	$new_balance = $balance -= $total_cost;
    	if($new_balance < 0){
    		$error = "<h1>{$username}, <br/>Please top up your wallet!</h1>";
    	}else{
    		$_SESSION['money'] = $new_balance;
    		$message = <<<HTML
<h1>Thank You!</h1>
<h3>Your wallet has been successfully charged for {$total_cost} Dollar</h3>
<p>Username: {$username}</p>
<p>Your money: {$new_balance} Dollar</p>
HTML;
    	}
    }else{
    	$error = '<h1>Login First</h1>';
    }
?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="author" content="Aaditya Prakash">
		<title> Gainesville Pet Shop </title>
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	</head>
	<body>
	<div class="jumbotron">
	<?php 
		if( ! empty($error) ): 
	 		echo $error;
	 	else: 
			echo $message;
		endif; 
	?>
  <p><a onclick="goBack()" class="btn btn-primary btn-lg" role="button">Go Back</a></p>
</div>
		
<script>
function goBack() {
    window.history.back()
}
</script>
	</body>
</html>