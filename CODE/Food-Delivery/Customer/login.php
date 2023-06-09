<?php

include '../mydbconnect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

if(isset($_POST['submit'])){

   $email = $_POST['email'];
   $email = filter_var($email, FILTER_SANITIZE_SPECIAL_CHARS);
   $pass = sha1($_POST['pass']);
   $pass = filter_var($pass, FILTER_SANITIZE_SPECIAL_CHARS);

   $select_user = $conn->prepare("SELECT * FROM `users` WHERE email = ? AND password = ?");
   $select_user->execute([$email, $pass]);
   $row = $select_user->fetch(PDO::FETCH_ASSOC);

   if($select_user->rowCount() > 0){
      $_SESSION['user_id'] = $row['id'];
      header('location:../index.php');
   }else{
      $message[] = 'incorrect username or password!';
   }

}

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Customer Login</title>
		<link rel="stylesheet" type="text/css" href="../css/customer_index.css">
		<link rel="stylesheet" type="text/css" href="../css/index.css">

	</head>
	
<header>
	<div class="navbar"> 
  <div class="navbar-logo">
  <a href="../index.php"><img src="../assets/logoo.png"></a>
  </div>
</div>
</header>
	<body>
		<form class="ff-form" method="post" action="">
		<div class="wrapper login">
        <div class="container-log">
            <div class="col-left">
                <div class="login-text">
                    <h2>Welcome!</h2>
                    <p>Create your account.</p> <a class="btn" href="./signup.php">Sign Up</a>
                </div> 
            </div>
            <div class="col-right">
                <div class="login-form">
                    <h2>Login</h2>
                    <form action="">
                        <p> <label>Email<span>*</span></label>  <input type="email" name="email" required placeholder="enter your email" class="box" maxlength="50" oninput="this.value = this.value.replace(/\s/g, '')"></p>
                        <p> <label>Password<span>*</span></label> <input type="password" name="pass" required placeholder="enter your password" class="box" maxlength="50" oninput="this.value = this.value.replace(/\s/g, '')"></p>
                        <br>
                        <p> <input type="submit" value="Sign In" name="submit" > </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</form>
	</body>
	
    
</html>

