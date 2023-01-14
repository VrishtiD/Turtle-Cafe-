<?php
  
  $username = $_POST['username'];
  $password = $_POST['password'];
  $failMsg = '';

  if (isset($_POST['login'])) {
    if ($username != 'admin' || $password != '1234') {
      $failMsg = 'Usename or password is incorrect';
    } else {
      header('Location: customerInfo.html');
    }
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Mrs. K's Tortoise Cafe Log-in</title>
    <link rel="stylesheet" href="styles/index.css">

</head>

<body>
    <div class="center">

        <!--Companies name and Title of page (Login)-->
        <h1>Mrs. K's Tortoise Cafe</h1>
        <h2><br>Login</h2>

        <form method="post">

            <!--Text area to add in username-->
            <div class="txt_field">
                <input type="text" name="username"required>
                <span></span>
                <label>Employee Username</label>
            </div>
            
            <!--Text area to add in password-->
            <div class="txt_field">
                <input type="password" name="password"required>
                <span></span>
                <label>Password</label>
            </div>

            <?php if (!empty($failMsg)) echo "<p class='errorText'>$failMsg</p>"; ?>

            <!--Box area to submit information for log-in-->
            <input type="submit" value="Enter" name="login">
            

        </form>
    </div>
</body>

</html>