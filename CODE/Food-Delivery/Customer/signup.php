<?php

include '../mydbconnect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

if(isset($_POST['submit'])){

   $name = $_POST['name'];
   $name = filter_var($name, FILTER_SANITIZE_SPECIAL_CHARS);
   $email = $_POST['email'];
   $email = filter_var($email, FILTER_SANITIZE_SPECIAL_CHARS);
   $number = $_POST['number'];
   $number = filter_var($number, FILTER_SANITIZE_SPECIAL_CHARS);
   $pass = sha1($_POST['pass']);
   $pass = filter_var($pass, FILTER_SANITIZE_SPECIAL_CHARS);
   $cpass = sha1($_POST['cpass']);
   $cpass = filter_var($cpass, FILTER_SANITIZE_SPECIAL_CHARS);

   $select_user = $conn->prepare("SELECT * FROM `users` WHERE email = ? OR number = ?");
   $select_user->execute([$email, $number]);
   $row = $select_user->fetch(PDO::FETCH_ASSOC);

   if($select_user->rowCount() > 0){
      $message[] = 'email or number already exists!';
   }else{
      if($pass != $cpass){
         $message[] = 'confirm password not matched!';
      }else{
         $insert_user = $conn->prepare("INSERT INTO `users`(name, email, number, password) VALUES(?,?,?,?)");
         $insert_user->execute([$name, $email, $number, $cpass]);
         $select_user = $conn->prepare("SELECT * FROM `users` WHERE email = ? AND password = ?");
         $select_user->execute([$email, $pass]);
         $row = $select_user->fetch(PDO::FETCH_ASSOC);
         if($select_user->rowCount() > 0){
            $_SESSION['user_id'] = $row['id'];
            header('location:../index.php');
         }
      }
   }

}

?>


?>
<html>
	<head>
	<title>Customer Signup</title>
        <link rel="stylesheet" type="text/css" href="../css/signup.css">
	</head>
    <header>
	<div class="navbar"> 
  <div class="navbar-logo">
  <a href="..\index.php"><img src="../assets/logoo.png"></a>
  </div>
</div>
</header>
	<body>
		<form class="ff-form" method="POST" action="signup.php">
		<div class="wrapper login">
        <div class="container">
            <div class="col-left">
                <div class="login-text">
                    <h2>Register here</h2>
					
                </div>
            </div>
		
				<div class="col-right">
                <div class="login-form">
                
				<div class="icon">
					<input type="text" name="name" required placeholder="enter your name" class="box" maxlength="50">
				</div>
				<br>
				<div class="icon">
				<input type="number" name="number" required placeholder="enter your number" class="box" min="0" max="9999999999" maxlength="10">
				</div>
				<br>
				<div class="icon">
					<input type="email" name="email" required placeholder="enter your email" class="box" maxlength="50" oninput="this.value = this.value.replace(/\s/g, '')">
				</div>
				<br>
				<div class="icon">
					<input type="password" name="pass" required placeholder="enter your password" class="box" maxlength="50" oninput="this.value = this.value.replace(/\s/g, '')">
				</div>
				<br>
				<div class="icon">
				<input type="password" name="cpass" required placeholder="confirm your password" class="box" maxlength="50" oninput="this.value = this.value.replace(/\s/g, '')">
				</div>
				<br>
				<br>
				<input class="submit" type="submit" name="submit" value="Register"/>
			</div>
				
            </div>
			</div>
            </div>
		</form>
	</body>
	
</html>