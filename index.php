<?php
  ob_start();
  session_start();
  if(!empty($_SESSION['JenengAdmin'])){
    if($_SESSION['jatah'] == 'admin'){
      header("location:production/index.php");
    }else if ($_SESSION['jatah'] == 'pimpinan'){
      header("location:pimpinan/index.php");
    }else if($_SESSION['jatah'] == 'user'){
      header("location:user/index.php");
    }

  }else{
    ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php require_once("production/title.php");?>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">
  <title>Pengarisan Surat</title></head>

  <body class="login">
    <div>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form action="proses_login.php" method="post" name="login">
              
			  
			  <h2>AKMADIUN</h2>
			  <img src="logo.png" width="150" class="img-preview">
			  <h1>Aplikasi Pengarsipan Surat</h1>
			  <br>
              <div>
                <input name="jeneng" type="text" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input name="kunci" type="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <button class="btn btn-default submit" type="submit" name="kepencet">Log in</button>
              </div>

              <div class="clearfix"></div>

              <div class="separator">

                <div class="clearfix"></div>
                <br />

                <div>
                  <p>©2017 All Rights Reserved.</p>
                </div>
              </div>
            </form>
          </section>
        </div>

        
      </div>
    </div>
  </body>
</html>
<?php
}
?>