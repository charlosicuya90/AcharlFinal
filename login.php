<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<style type="text/css">
  body{
    background-image: url(https://livebluesol.com/assets/images/cache/Rotator__0002_r1-fb447a7bd0be3a8c849ff9ca4bcf6d08.jpg);
    background-attachment:fixed;
    background-size:cover;
   

  }
  form, .content {
    width: 30%;
    margin: 0px auto;
    padding: 20px;
    border: 1px solid #b0c4de40;
 
    border-radius: 0px 0px 10px 10px;

}
.header {
    width: 30%;
    margin: 50px auto 0px;
    color: white;
    background: rgba(84, 84, 84, 0.21);
    text-align: center;
    border: 1px solid black;
    border-bottom: none;
    border-radius: 10px 10px 0px 0px;
    padding: 20px;
}
form, .content {
    width: 30%;
    margin: 0px auto;
    padding: 20px;
    border: 1px solid #b0c4de40;
    border-radius: 0px 0px 10px 10px;
    background-color: #0000005c;
}

</style>
<body>
  <div class="header">
    <h2>Welcome Admin</h2><br>
    <a href="login.php"><h2>Home</h2></a>
   

  </div>
   
  <form method="post" action="login.php">
    <?php include('errors.php'); ?>
    <div class="input-group">
      <label>Username</label>
      <input type="text" name="username" >
    </div>
    <div class="input-group">
      <label>Password</label>
      <input type="password" name="password">
    </div>
    <div class="input-group">
      <button type="submit" class="btn" name="login_user">Login</button>
    </div>
    <p style="color:red;">
      Not yet a member? <a href="register.php">Sign up</a>
    </p>
  </form>
</body>
</html>