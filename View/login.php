<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="Css/bootstrap.min.css" rel="stylesheet">
    <link href="Css/Style_sheet.css" rel="stylesheet">
</head>
<body>
      <div class="row">
        <div class="col-2"></div>
        <div class="col">
          <div class="card">
            <p-head class="card-head"><strong>Sign in</strong></p-head>
            <div class="card-body">
              <form action="../Controller/LoginController.php" method="post">
              <p>Username</p>
              <input type="text" name="login_username" placeholder="username">
              <p>Password</p>
              <input type="password" name="login_password" placeholder="password"/>
              <p><input type="submit" name="login_submit" value="Sign in" class="btn btn-primary"></p>
              </form>
                <?php
                if(!isset($_GET['login']))
                {
                    exit();
                }
                else
                {
                    $check = $_GET['login'];

                    if($check =='empty')
                    {
                        echo "<p class = 'error' style=color:red >Fill all inputs<p>";
                        exit();
                    }
                    if($check =='invalidData')
                    {
                        echo "<p class = 'error' style=color:red >Username or password wrong<p>";
                        exit();
                    }
                }


                ?>
              <p3><a href="sign_up.php">Don't have an account? Register</a></p3>
            </div>
          </div>
        </div>
        <div class="col-2"></div>
      </div>
</body>
</html>
