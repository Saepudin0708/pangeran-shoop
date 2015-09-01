<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="asset/img/250.png">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Pangeran Shoop | Login</title>

        <link href="asset/css/bootstrap.min.css" rel="stylesheet">
        <link href="asset/css/style.css" rel="stylesheet">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 header"><h1><marquee>Pangeran Shoop</marquee></h1></div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-xs-6 form-login"></div>
                <div class="col-lg-6 col-md-6 col-xs-6 form-login">
                    <h3 class="daftar-header">Masuk</h3>
                    <br>    
                    <?php if(!empty($error)) : ?>
                    <div class="alert alert-danger alert-dismissible" role="alert">
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					  <?=$error?>
					</div>
                    <?php endif; ?>
                    <form action="login.php" method="POST">
                        <div class="form-group">
                            <label for="InputEmail1">Email</label>
                            <input type="text" class="form-control" id="InputEmail1" name="email" placeholder="example@example.com" value="<?= isset($_POST['email']) ? $_POST['email'] : '' ?>">
                        </div>
                        <div class="form-group">
                            <label for="InputPassword1">Password</label>
                            <input type="password" class="form-control" id="InputPassword1" name="password" placeholder="Masukkan Password">
                        </div>
                        <button type="submit" class="btn btn-danger" name="submit">Login</button>
                        <a href="forgot_password.php">Forgot Password...!!!</a>
                    </form>
                </div>
                <div class="col-lg-3 col-md-3 col-xs-6 form-login"></div>
            </div>
        </div>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="asset/js/bootstrap.min.js"></script>
    </body>
</html>
