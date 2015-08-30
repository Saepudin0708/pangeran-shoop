<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="asset/img/250.png">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Pangeran Shoop | Sign Up</title>

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
                <div class="col-lg-3 col-md-3 col-xs-6 form-sign-up"></div>
                <div class="col-lg-6 col-md-6 col-xs-6 form-sign-up">
                    <h3 class="daftar-header">Daftar</h3>
                    <br>
                    <?php if(!empty($error)) : ?>
                    <div class="alert alert-danger alert-dismissible" role="alert">
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					  <?=$error?>
					</div>
                    <?php endif; ?>
                    <form action="register.php" method="POST">
                        <div class="form-group">
                            <label for="InputName">Nama Lengkap</label>
                            <input type="text" class="form-control" id="InputName" name="name" placeholder="Nama">
                        </div>
                        <label for="male" class="radio-inline">
                            <input type="radio" name="gender" id="male" value="male"><strong>Laki-laki</strong>
                        </label>
                        <label for="female" class="radio-inline">
                            <input type="radio" name="gender" id="female" value="female"><strong>Perempuan</strong> 
                        </label><br><br>
                        <div class="form-group">
                            <label for="InputEmail1">Email</label>
                            <input type="email" class="form-control" id="InputEmail1" name="email" placeholder="example@example.com">
                        </div>
                        <div class="form-group">
                            <label for="InputPassword1">Password</label>
                            <input type="password" class="form-control" id="InputPassword1" name="password" placeholder="Masukkan Password">
                        </div>
                        <div class="form-group">
                            <label for="InputPassword2">Konfirmasi Password</label>
                            <input type="password" class="form-control" id="InputPassword2" name="password_conf" placeholder="Konfirmasi Password">
                        </div>
                        <div class="form-group">
                            <label for="InputAlamat">Alamat</label>
                            <textarea class="form-control" rows="3" placeholder="Masukkan Alamat" name="address"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="input-kode-post">Kode Pos</label>
                            <textarea class="form-control" rows="3" id="input-kode-post" placeholder="Kode Pos" name="zip_code"></textarea>
                        </div>
                        <div class="btn-group">
                            <label for="PilihKota">Kota</label>
                            <select class="form-control" name="city">
								<option value=""> - Pilih Kota - </option>
								<option value="jakarta">Jakarta</option>
								<option value="surakarta">Surakarta</option>
								<option value="yogyakarta">Yogyakarta</option>
								<option value="surabaya">Surabaya</option>
								<option value="bandung">Bandung</option>
                            </select>
                        </div><br><br>
                        <div class="form-group">
                            <label for="InputPhone">Telepon</label>
                            <input type="text" class="form-control" id="InputPhone" name="phone" placeholder="Nomor Ponsel">
                        </div>
                        <button type="submit" class="btn btn-danger" name="submit">Buat Akun</button>
                    </form>
                </div>
                <div class="col-lg-3 col-md-3 col-xs-6 form-login"></div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 footer">
                    <div class="text-footer">
                        <h4>Kantor Pusat</h3>
                            <span class="addr">Villa Nusa Indah 3 KG6/1</span><br>
                            <span class="contact">SMS / Telp: 021 222 333</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="asset/js/bootstrap.min.js"></script>
    </body>
</html>
