<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<?php
	include("title.php");
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
      
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Data Surat Masuk <small><a href="form_surat_masuk.php" class="btn btn-success btn-xs"><span class="fa fa-plus"></span> Tambah Data</a></small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>Nomor Surat</th>
                          <th>No Agenda</th>
                          <th>Tanggal Terima</th>
                          <th>Asal Surat</th>
                          <th>Perihal Surat</th>
						  <th>Status</th>
						  <th></th>
                        </tr>
                      </thead>
                      <tbody>
					  	<?php
						require_once("Connections/koneksi.php");
            include_once("function.php");
            
					  $query_user=mysqli_query($link,"select * from surat_masuk ORDER BY tgl_terima ASC");
						while($row_sm=mysqli_fetch_object($query_user)){
					  	?>
                        <tr>
                          <td><?php echo $row_sm->no_surat."<br><strong>Tanggal: </strong> ".Tanggal($row_sm->tgl_surat);?></td>
                          <td><?php echo $row_sm->no_agenda."<br><strong>Tanggal: </strong>".Tanggal($row_sm->tgl_agenda);?></td>
                          <td><?php echo Tanggal($row_sm->tgl_terima);?></td>
                          <td><?php echo ucfirst($row_sm->asal_surat);?></td>
                          <td><?php echo $row_sm->perihal."<br><strong>Sifat: </strong> ".$row_sm->sifat;?></td>
						  <td><?php echo $row_sm->status;?></td>
						  <td>
						  	<?php
							$Id=base64_encode($row_sm->no_surat);
              
							if($row_sm->status == 'diterima'){
							echo "<a title='Disposisi Surat' href='disposisi.php?id=".$Id."' class='btn btn-info btn-xs'><i class='fa fa-paper-plane'></i> </a>";
							}else{
							echo"<a href='#myModal' title='Sudah Terdesposisi' data-toggle='modal' id='custId' data-id='".$row_sm->no_surat."' class='btn btn-default btn-xs'><i class='fa fa-paper-plane'></i> </a>";
							}
							?>
              				<a title="Print Disposisi" target="_blank" href="print.php?id=<?php echo $row_sm->id_surat_masuk ;?>" class="btn btn-success btn-xs"><i class="fa fa-print"></i> </a>
							<a title="Print Surat" target="_blank" href="../file/surat_masuk/<?php echo $row_sm->foto ;?>" class="btn btn-primary btn-xs"><i class="fa fa-search"></i> </a>
							<a title="Edit Surat Masuk" href="form_surat_masuk.php?page=edit&id=<?php echo $row_sm->id_surat_masuk ;?>" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i> </a>
							<a title="Hapus Surat" href="hapus.php?set=sm&id=<?php echo $row_sm->id_surat_masuk ;?>" class="btn btn-danger btn-xs"><i class="fa fa-remove"></i> </a>
							
						  </td>
              </tr>
						
						
						<?php
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
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Detail Disposisi</h4>
                </div>
                <div class="modal-body">
                    <div class="fetched-data"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
                </div>
            </div>
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
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Datatables -->
    <script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="../vendors/datatables.net-scroller/js/datatables.scroller.min.js"></script>
    <script src="../vendors/jszip/dist/jszip.min.js"></script>
    <script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="../vendors/pdfmake/build/vfs_fonts.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
        $('#myModal').on('show.bs.modal', function (e) {
            var rowid = $(e.relatedTarget).data('id');
            //menggunakan fungsi ajax untuk pengambilan data
            $.ajax({
                type : 'post',
                url : 'detail.php',
                data :  'rowid='+ rowid,
                success : function(data){
                $('.fetched-data').html(data);//menampilkan data ke dalam modal
                }
            });
         });
    });
    </script>
    <!-- Datatables -->
    <script>
      $(document).ready(function() {
        var handleDataTableButtons = function() {
          if ($("#datatable-buttons").length) {
            $("#datatable-buttons").DataTable({
              dom: "Bfrtip",
              buttons: [
                {
                  extend: "copy",
                  className: "btn-sm"
                },
                {
                  extend: "csv",
                  className: "btn-sm"
                },
                {
                  extend: "excel",
                  className: "btn-sm"
                },
                {
                  extend: "pdfHtml5",
                  className: "btn-sm"
                },
                {
                  extend: "print",
                  className: "btn-sm"
                },
              ],
              responsive: true
            });
          }
        };

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