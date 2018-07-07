<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php echo require_once("title.php");?>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    
    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>
  	<?php
	ob_start();
	session_start();
	if(empty($_SESSION['JenengAdmin'])){
	echo "<script>";
	echo "alert('Akses Ditolak');";
	echo "location='../login.php'";
	echo "</script>";
	}else{
	?>
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <?php require_once("menu.php");?>

        <!-- top navigation -->
        <div class="top_nav">
        <?php require_once("navigation.php");?>
        </div>
        <!-- /top navigation -->
		<?php
		include "Connections/koneksi.php";
			if(isset($_GET['ID'])){
				$query = mysqli_query($link,"SELECT * FROM user WHERE id_user='$_GET[ID]' ");
				$roo = mysqli_fetch_object($query);
				$nama = $roo->nama_user;
				$email = $roo->email;
				$user = $roo->username;
				$level = $roo->level;
				$jabatan = $roo->jabatan;
				
			}else{
				$nama = '';
				$email = '';
				$user = '';
				$level = '';
				$jabatan = '';
				$password = '';
			}
			
			
			if(isset($_POST['nama_lengkap'])){
				if(isset($_GET['ID'])){
					$kuncimd5=md5($_POST['password']);
					$emboh=mysqli_query($link,"UPDATE user SET 
													nama_user='$_POST[nama_lengkap]',
													email='$_POST[email]',
													username='$_POST[username]',
													password='$kuncimd5',
													level='$_POST[level]',
													jabatan='$_POST[jabatan]' WHERE id_user='$_GET[ID]' ");
						if($emboh){
							echo "<script>";
							echo "alert('Data Berhasil Di Rubah.');";
							echo "location='tabel_user.php';";
							echo "</script>";
						}else{
						echo '<div class="alert alert-danger">File gagal di disimpan.</div>';
						}
				}else{
					$kuncimd5=md5($_POST['password']);
					$emboh=mysqli_query($link,"INSERT INTO user VALUES ('','$_POST[nama_lengkap]','$_POST[email]','$_POST[username]','$kuncimd5','$_POST[level]','$_POST[jabatan]') ");
						if($emboh){
							echo "<script>";
							echo "alert('Data Berhasil Disimpan.');";
							echo "location='tabel_user.php';";
							echo "</script>";
						}else{
						echo '<div class="alert alert-danger">File gagal di disimpan.</div>';
						}
				}
			}
		?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Form Input User</h3>
              </div>

              
            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Form Input User </h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
					
                    <form method="post" action="" name="user" enctype="multipart/form-data" class="form-horizontal form-label-left" novalidate>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Nama Lengkap <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input  name="nama_lengkap" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" value="<?php echo $nama;?>" data-validate-words="2"  placeholder="2 kata, Misal: Fauzi Ihsan" required type="text">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Alamat Email <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="email" id="email" name="email" required value="<?php echo $email;?>" placeholder="Misal: Fauzi@gmail.com" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Username <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text"  name="username" required value="<?php echo $user;?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      
                      <div class="item form-group">
                        <label for="password" class="control-label col-md-3">Password</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="password" type="password" name="password" ata-validate-length="6,8"  class="form-control col-md-7 col-xs-12" required> *lebih dari 6 huruf
                        </div>
						<div class='tooltip help'>
							<span>?</span>
							<div class='content'>
								<b></b>
								<p>Should be of length 6 OR 8 characters</p>
							</div>
						</div>
                      </div>
                      <div class="item form-group">
                        <label for="password2" class="control-label col-md-3 col-sm-3 col-xs-12">Ulangi Password</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="password2" type="password" name="password2" data-validate-linked="password" class="form-control col-md-7 col-xs-12" required>
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Jabatan Instansi <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text"  name="jabatan" required value="<?php echo $jabatan;?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="item form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">Level Akses<span class="required">*</span></label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<select class="form-control col-md-7 col-xs-12 required" name="level">
								<option value="">-- none --</option>
								<option value="<?php echo $level;?>"><?php echo $level;?></option>
								<option value="admin">Admin</option>
								<option value="pimpinan">Pimpinan</option>
								<option value="user">User</option>
                                <option value="superadmin">Super Admin</option>
							</select>
						</div>
						<div class='tooltip help'>
							<span>?</span>
							<div class='content'>
								<b></b>
								<p>Pilih Level Akses User</p>
							</div>
						</div>
						</div>
						
					 <!-- <div class="item form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">File Surat <span class="required">*</span></label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<input class="form-control col-md-7 col-xs-12" type='file' required>
					  </div>
					  </div>-->
					  <div class="item form-group">
					  <label class="control-label col-md-3 col-sm-3 col-xs-12"></label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<label><input  required="required" type="checkbox" /> Data yang Saya masukkan sudah benar</label>
						</div>
					  </div>
					  
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <a class="btn btn-primary">Cancel</a>
                          <button id="masukan" name="daftar" type="submit" value="daftar" class="btn btn-success"><span class="fa fa-trash"></span> Simpan</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Akademi Komunitas Negeri Madiun</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- validator -->
    <script src="../vendors/validator/validator.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

    <!-- validator -->
    <script>
      // initialize the validator function
      validator.message.checkField = 'not a real date';

      // validate a field on "blur" event, a 'select' on 'change' event & a '.reuired' classed multifield on 'keyup':
      $('form')
        .on('blur', 'input[required], input.optional, select.required', validator.checkField)
        .on('change', 'select.required', validator.checkField)
        .on('keypress', 'input[required][pattern]', validator.keypress);

      $('.multi.required').on('keyup blur', 'input', function() {
        validator.checkField.apply($(this).siblings().last()[0]);
      });

      $('form').submit(function(e) {
        e.preventDefault();
        var submit = true;

        // evaluate the form using generic validaing
        if (!validator.checkAll($(this))) {
          submit = false;
        }

        if (submit)
          this.submit();

        return false;
      });
	  
	  
    </script>
	<script>
	$(fungtion(){
	  $("#masukan").keypress(fungtion(e){
	  if((e.which && e.which == 13||(e.keyCode && e.keyCode == 13)){
	  return false;
	  }else{
	  return true;
	  }
	  });
	  });
	  </script>
    <!-- /validator -->
  </body>
  <?php
  }
  ?>
</html>