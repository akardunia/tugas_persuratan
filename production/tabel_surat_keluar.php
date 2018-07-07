<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<?php
	include "title.php";
	?>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
	<!-- PNotify -->
    <link href="../vendors/pnotify/dist/pnotify.css" rel="stylesheet">
    <link href="../vendors/pnotify/dist/pnotify.buttons.css" rel="stylesheet">
    <link href="../vendors/pnotify/dist/pnotify.nonblock.css" rel="stylesheet">
    <!-- Custom Theme Style -->
	<link href="../build/css/custom.min.css" rel="stylesheet">
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
		require_once("function.php");
		?>

        <!-- top navigation -->
        <div class="top_nav">
          <?php
		  require_once("Connections/koneksi.php");
		  require_once("navigation.php");
		  if(isset($_GET['IDD'])){
						$lastID = $_GET['IDD'];
						$lastNoUrut = substr($lastID, 0, 4);
						mysqli_query($link,"update surat_keluar set 
														nomor='$lastNoUrut' WHERE no_surat='$_GET[IDD]'");
					}
		  ?>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">

            <div class="clearfix"></div>

            <div class="row">
      
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Data User <small><a href="form_surat_keluar.php" class="btn btn-success btn-xs"><span class="fa fa-plus"></span> Tambah Data</a></small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nomor Surat</th>
                          <th>Tujuan Surat</th>
                          <th>Perihal</th>
                          <th>Pembuat</th>
                          <th>Keterangan</th>
						  <th></th>
                        </tr>
                      </thead>
                      <tbody>
						<?php
						  
						  $no = 1;
						  $query_user = mysqli_query($link,"select * from surat_keluar ORDER BY nomor DESC");
						  $rr = mysqli_fetch_object($query_user);
						  foreach ($query_user AS $row_sk){
						?>
                        <tr>
						  <td><?php echo $no;?></td>
                          <td><?php echo $row_sk['no_surat']."<br>Tanggal : ".Tanggal($row_sk['tgl_surat']);?></td>
                          <td><?php echo $row_sk['kepada']."<br><strong>Alamat: </strong>:".$row_sk['alamat'];?></td>
                          <td><?php echo $row_sk['perihal'];?></td>
                          <td><?php echo $row_sk['pembuat'];?></td>
                          <td><?php echo $row_sk['keterangan'];?></td>
						  <td>
								<a target="_blank" title="Print Surat" href="../file/surat_keluar/<?php echo $row_sk['file'];?>" class="btn btn-info btn-xs"><i class="fa fa-print"></i> </a>
								<a title="Edit Surat" href="form_surat_keluar.php?page=edit&id=<?php echo $row_sk['no_surat'];?>" class="btn btn-success btn-xs"><i class="fa fa-pencil"></i></a>
								<a title="Hapus" href="hapus.php?set=sk&&id=<?php echo $row_sk['no_surat'];?>" class="btn btn-danger btn-xs"><i class="fa fa-remove"></i> </a>
						  </td>
                        </tr>

                        

						<?php
						$no++;
						}
						?>
                      </tbody>
                    </table>

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
	
	<div id="custom_notifications" class="custom-notifications dsp_none">
      <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
      </ul>
      <div class="clearfix"></div>
      <div id="notif-group" class="tabbed_notifications"></div>
    </div>
    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Datatables -->
    <script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="../vendors/datatables.net-scroller/js/datatables.scroller.min.js"></script>
	<!-- PNotify -->
    <script src="../vendors/pnotify/dist/pnotify.js"></script>
    <script src="../vendors/pnotify/dist/pnotify.buttons.js"></script>
    <script src="../vendors/pnotify/dist/pnotify.nonblock.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
	 <script>
      $(document).ready(function() {
        new PNotify({
          title: "Info",
          type: "info",
          text: "<?php echo "Nomor Surat Terakhir "."<h4>".$rr->no_surat."</h4>";?>",
          nonblock: {
              nonblock: false
          },
          addclass: 'dark',
          styling: 'bootstrap3',
          hide: false,
          before_close: function(PNotify) {
            PNotify.update({
              title: PNotify.options.title + " - Enjoy your Stay",
              before_close: null
            });

            PNotify.queueRemove();

            return false;
          }
        });

      });
    </script>
    <!-- Datatables -->
    <script>
      $(document).ready(function() {

        TableManageButtons = function() {
          "use strict";
          return {
            init: function() {
              handleDataTableButtons();
            }
          };
        }();

        $('#datatable').dataTable();

        $('#datatable-keytable').DataTable({
          keys: true
        });

        $('#datatable-responsive').DataTable();

        $('#datatable-scroller').DataTable({
          ajax: "js/datatables/json/scroller-demo.json",
          deferRender: true,
          scrollY: 380,
          scrollCollapse: true,
          scroller: true
        });

      });
    </script>
    <!-- /Datatables -->
  </body>
<?php
}
?>
</html>