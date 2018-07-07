<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Pengarsipan Surat </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    
    <!-- Custom styling plus plugins -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
	<link href="../vendors/sweetalert/dist/sweetalert.css" rel="stylesheet">
	<!-- jQuery -->
   	<script src="../vendors/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Bootstrap Core CSS -->
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
        <?php
		require_once("menu.php");
		?>

        <!-- top navigation -->
        <div class="top_nav">
          <?php
		  require_once("navigation.php");
		  ?>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Disposisi</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <section class="content invoice">
						<?php
						require_once("../production/Connections/koneksi.php");
						function Tanggal($date){
							$BulanIndo = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
						 
							$tahun = substr($date, 0, 4);
							$bulan = substr($date, 5, 2);
							$tgl   = substr($date, 8, 2);
						 
							$result = $tgl . " " . $BulanIndo[(int)$bulan-1] . " ". $tahun;		
							return($result);
						}
						$no_surat=$_GET['id'];
						$query_dis=mysqli_query($link,"SELECT * FROM surat_masuk WHERE no_surat='$no_surat' ");
						$row_dis=mysqli_fetch_object($query_dis);
						
						?>
                      <!-- title row -->
                      <div class="row">
                        <div class="col-xs-12 invoice-header">
                          <h2>
                                          <i class="fa fa-calendar"></i> <?php echo Tanggal($row_dis->tgl_agenda);?>
                                      </h2>
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- info row -->
                      <div class="row invoice-info"><h2>
                        <div class="col-sm-4 invoice-col">
                          Asal Surat
                          <address>
                                          <strong><?php echo $row_dis->asal_surat;?>.</strong>
                                          <br>Perihal Surat :
                                          <br><strong><?php echo $row_dis->perihal;?></strong>
                                      </address>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-8 invoice-col">
                          Sifat Surat
                          <address>
                                          <strong><?php echo $row_dis->sifat;?></strong>
                                          <br>Status :
										  <br><strong><?php echo $row_dis->status;?></strong>
                                      </address>
                        </div>
                        <!-- /.col -->
                        </h2>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->

                      <!-- Table row -->
					  <h3>Isi Surat:</h3>
                      <div class="row">
                        <embed src="../file/<?php echo $row_dis->foto;?>" type="application/pdf" width="100%" height="600px">
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->
					  <?php
					  $now=date('Y/m/d H:m:s');
					  if(isset($_POST['kirim'])){
					  	$simpan_dis=mysqli_query($link,"INSERT INTO disposisi (no_surat,tgl_dispo,ditujukan,ket,status) VALUE ('$_POST[no_surat]','$now','$_POST[kepada]','$_POST[isi]','manual')");
						if($simpan_dis){
							$rubah=mysqli_query($link,"UPDATE surat_masuk SET status='terdisposisi' WHERE no_surat='$_POST[no_surat]' ");
							echo "<script type='text/javascript'>
									setTimeout(function () {  
										swal({
										title: 'Surat Terdisposisi !!',
										type: 'success',
										timer: 3000,
										showConfirmButton: true
									   });  
									},10); 
								  window.setTimeout(function(){ 
								   window.location.replace('index.php');
								  } ,1000); 
								</script>";
						}else{
						echo "<script type='text/javascript'>
								setTimeout(function () {  
									swal({
									title: 'Oops! Surat Gagal Terdisposisi.',
									type: 'error',
									timer: 3000,
									showConfirmButton: true
								   });  
								},10); 
							  window.setTimeout(function(){ 
							   window.location.replace('index.php');
							  } ,2000); 
							</script>";
						}
					  }
					  ?>
                      <form class="form-horizontal form-label-left" action="" method="post">
					  <input style="visibility:hidden;" name="no_surat" type="text" value="<?php echo $row_dis->no_surat;?>">
					  <div class="row">
                        <div class="col-xs-6">
                          <br><p class="lead">Diteruskan Kepada:</p>
                          <div class="table-responsive">
							  <?php
							  $klas=mysqli_query($link,"SELECT * FROM klasifikasi");
							  while($rows=mysqli_fetch_object($klas)){
                                echo "<tr>";
                                  echo"<div class='form-group'><div class='form-control'><input class='flat' name='kepada' type='radio' value='$rows->klasifikasi'> ".$rows->klasifikasi."<br></div></div>";
                                echo"</tr>";
							   }
							 ?>
                          </div>
                        </div>
						<div class="col-xs-6">
                          <br><p class="lead">Keterangan:</p>
                          <div class="table-responsive">
                            <textarea class="form-control" rows="10" name="isi"></textarea>
                          </div>
                        </div>
                        <!-- /.col -->
                      </div>
					  <div class="row no-print">
                        <div class="col-xs-12">
                          <button class="btn btn-primary pull-right" type="submit" name="kirim" style="margin-right: 5px;"><i class="fa fa-download"></i> Kirim Disposisi</button>
                        </div>
                      </div>
					  </form>
                      <!-- /.row -->

                      <!-- this row will not appear when printing -->
                      
                    </section>
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
            Aplikasi Pengarsipan Surat
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

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
  </body>
<?php
}
?>
</html>