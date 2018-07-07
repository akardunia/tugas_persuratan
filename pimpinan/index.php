<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php require_once("title.php");?>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
	
	<?php
	ob_start();
	session_start();
	if(empty($_SESSION['JenengAdmin'])){
	echo "<script>";
	echo "alert('Akses Ditolak');";
	echo "location='login.php'";
	echo "</script>";
	}else{
	?>
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <?php require_once("menu.php");?>

        <!-- top navigation -->
        <div class="top_nav">
          <?php require_once("navigation.php");require_once('koneksi.php');?>
		  
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
		  <?php
		  function Update($Srt){
		  	
		  }
		  ?>
          <div class="row tile_count">
            <div class="col-md-4 col-sm-4 col-xs-6 tile_stats_count">
			<?php
				$sbt=mysqli_query($link,"SELECT * FROM surat_masuk WHERE status='diterima' ");
				$rowsss_sbt=mysqli_num_rows($sbt);
			?>
              <span class="count_top"><i class="fa fa-user"></i> Surat Belum Terdisposisi</span>
              <div class="count"><?php echo $rowsss_sbt;?></div>
              <span class="count_bottom">Surat</span>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-6 tile_stats_count">
			<?php
				$ssm=mysqli_query($link,"SELECT * FROM surat_masuk ");
				$rowsss_sm=mysqli_num_rows($ssm);
			?>
              <span class="count_top"><i class="fa fa-user"></i> Total Surat Masuk</span>
              <div class="count"><?php echo $rowsss_sm;?></div>
              <span class="count_bottom">Surat</span>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-6 tile_stats_count">
			<?php
				$ssk=mysqli_query($link,"SELECT * FROM surat_keluar ");
				$rowsss_sk=mysqli_num_rows($ssk);
			?>
              <span class="count_top"><i class="fa fa-user"></i> Total Surat Keluar</span>
              <div class="count"><?php echo $rowsss_sk;?></div>
              <span class="count_bottom">Surat</span>
            </div>
          </div>
          <!-- /top tiles -->
          <br />

      
          <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Surat Masuk <small>Belum Di Desposisi</small></h2>
                  
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <div class="dashboard-widget-content">

                    <ul class="list-unstyled timeline widget">
					<?php
					
					$pesan=mysqli_query($link,"SELECT * FROM surat_masuk WHERE status='diterima' ");
					while($rows=mysqli_fetch_object($pesan)){
            $Id=base64_encode($rows->no_surat);
					?>
                      <li>
                        <div class="block">
                          <div class="block_content">
                            <h2 class="title">
                                              <a href="disposisi.php?id=<?=$Id?>">Surat Datang dari <?php echo $rows->asal_surat;?>, surat ini <?php echo $rows->sifat;?></a>
                                          </h2>
                            <div class="byline">
                              <span><?php echo "<time class='timeago' datetime='$rows->tgl_terima' title='$rows->tgl_terima'>"; ?></span> by <a><?php echo $rows->pencatat;?></a>
                            </div>
                            <p class="excerpt"><?php echo "Surat Masuk datang dari ".$rows->asal_surat." , surat ini bersifat ".$rows->sifat.", dengan perihal ".$rows->perihal;?>… <a class="btn btn-info btn-xs"><i class="fa fa-paper-plane"></i> Disposisikan</a>
                            </p>
                          </div>
                        </div>
                      </li>
                      <?php
					   
					 	}
					  ?>
                     
                    </ul>
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
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
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
    <!-- Chart.js -->
    <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="../vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="../vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="../vendors/Flot/jquery.flot.js"></script>
    <script src="../vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../vendors/Flot/jquery.flot.time.js"></script>
    <script src="../vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="../vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
	<script src="js/jquery.timeago.js" type="text/javascript"></script>
	 <script type="text/javascript">
	 jQuery(document).ready(function() {
  jQuery("time.timeago").timeago();
});
	 //skrift timeago atau waktu mundur
	 </script>
  </body>
  <?php
  }
  ?>
</html>
