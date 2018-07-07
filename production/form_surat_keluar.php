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
    <!-- bootstrap-wysiwyg -->
    <link href="../vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
    <!-- Select2 -->
    <link href="../vendors/select2/dist/css/select2.min.css" rel="stylesheet">
    <!-- Switchery -->
    <link href="../vendors/switchery/dist/switchery.min.css" rel="stylesheet">
    <!-- starrr -->
    <link href="../vendors/starrr/dist/starrr.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
	<link href="../vendors/sweetalert/dist/sweetalert.css" rel="stylesheet">
   	<script src="../vendors/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
	<link href="../vendors/sweetalert/dist/sweetalert.css" rel="stylesheet">
	<!-- PNotify -->
    <link href="../vendors/pnotify/dist/pnotify.css" rel="stylesheet">
    <link href="../vendors/pnotify/dist/pnotify.buttons.css" rel="stylesheet">
    <link href="../vendors/pnotify/dist/pnotify.nonblock.css" rel="stylesheet">
    <style type="text/css">
	<!--
	#baca{display:block;}
	-->
    </style>
	<script>
		function klok(){
		
			var id=document.getElementById("klasifikasi").value;
        	alert(id);
		
	}
	</script>
</head>
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
        <?php require_once("navigation.php"); require_once("Connections/koneksi.php");?>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Form Surat Keluar</h3>
              </div>
				
              
            </div>
            <div class="clearfix"></div>
            <div class="row">
				<?php
				$page=(isset($_GET['page']))? $_GET['page']:"main";
				//$page=$_GET['page'];
				switch ($page){
					case 'edit':include "edit_sk.php"; break;
					case 'manual':include "input_manual_sk.php"; break;
					default:include 'input_sk.php';
					}
					
				$br=mysqli_query($link,"select no_surat,perihal,kepada from surat_keluar ORDER BY nomor DESC LIMIT 0,1");
				$row_br = mysqli_fetch_object($br);
				?>
              
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
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap-wysiwyg -->
    <script src="../vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
    <script src="../vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
    <script src="../vendors/google-code-prettify/src/prettify.js"></script>
    <!-- jQuery Tags Input -->
    <script src="../vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
    <!-- Switchery -->
    <script src="../vendors/switchery/dist/switchery.min.js"></script>
    <!-- Select2 -->
    <script src="../vendors/select2/dist/js/select2.full.min.js"></script>
    <!-- Parsley -->
    <script src="../vendors/parsleyjs/dist/parsley.min.js"></script>
    <!-- Autosize -->
    <script src="../vendors/autosize/dist/autosize.min.js"></script>
    <!-- jQuery autocomplete -->
    <script src="../vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
    <!-- starrr -->
    <script src="../vendors/starrr/dist/starrr.js"></script>
	<!-- PNotify -->
    <script src="../vendors/pnotify/dist/pnotify.js"></script>
    <script src="../vendors/pnotify/dist/pnotify.buttons.js"></script>
    <script src="../vendors/pnotify/dist/pnotify.nonblock.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
	<script src="../vendors/sweetalert/dist/sweetalert.min.js"></script>
    <!-- bootstrap-daterangepicker -->
	<script>
      $(document).ready(function() {
        new PNotify({
          title: "Info",
          type: "info",
          text: "<?php echo "Nomor Surat Terakhir "."<h2>".$row_br->no_surat."</h2>"." untuk perihal ".$row_br->perihal." ke ".$row_br->kepada;?>",
          nonblock: {
              nonblock: false
          },
          styling: 'bootstrap3',
          hide: false,
          
        });

      });
    </script>
    <script>
      $(document).ready(function() {
        $('#tgl_surat').daterangepicker({
          singleDatePicker: true,
          calender_style: "picker_1"
        }, function(start, end, label) {
          console.log(start.toISOString(), end.toISOString(), label);
        });
      });
	  
	  $(document).ready(function() {
        $('#tgl_agenda').daterangepicker({
          singleDatePicker: true,
		  dateFormat: 'YYYY-mm-dd',
          calender_style: "picker_2"
        }, function(start, end, label) {
          console.log(start.toISOString(), end.toISOString(), label);
        });
      });
	  
	  $(document).ready(function() {
        $('#tgl').daterangepicker({
          singleDatePicker: true,
          calender_style: "picker_3"
        }, function(start, end, label) {
          console.log(start.toISOString(), end.toISOString(), label);
        });
      });
    </script>

    <!-- Select2 -->
    <script>
      $(document).ready(function() {
        $(".select2_single").select2({
          placeholder: "Select a state",
          allowClear: true
        });
        $(".select2_group").select2({});
        $(".select2_multiple").select2({
          maximumSelectionLength: 4,
          placeholder: "With Max Selection limit 4",
          allowClear: true
        });
      });
    </script>
    <!-- /Select2 -->

    <!-- Parsley -->
    <script>
      $(document).ready(function() {
        $.listen('parsley:field:validate', function() {
          validateFront();
        });
        $('#surat_masuk .btn').on('click', function() {
          $('#surat_masuk').parsley().validate();
          validateFront();
        });
        var validateFront = function() {
          if (true === $('#surat_masuk').parsley().isValid()) {
            $('.bs-callout-info').removeClass('hidden');
            $('.bs-callout-warning').addClass('hidden');
          } else {
            $('.bs-callout-info').addClass('hidden');
            $('.bs-callout-warning').removeClass('hidden');
          }
        };
      });
      try {
        hljs.initHighlightingOnLoad();
      } catch (err) {}
    </script>
	<script type="text/javascript">
   	
	//$(document).ready(function() {
 		
    //});
	/*function load1(){
		if(document.getElementById('status')){
			document.getElementById('oto').style.visibility='hidden';
			document.getElementById('manual').style.visibility='visible';
		}
	}
	function load2(){
		if(document.getElementById('status2')){
			document.getElementById('oto').style.visibility='visible';
			document.getElementById('manual').style.visibility='hidden';
			document.getElementById('coba').addClass('hidden');
		}
	}
	*/
	function scriptvariable()
	{        
    var theContents = "the variable";
	}
	
	$('#hilang').change(function(){
		//document.getElementById('oto').style.readonly='false';
        $('#oto').prop('readonly', !$(this).is(':checked'));
	});
		
		/*$(document).ready(function(){
		$("#man").toggleClass('hidden');
		$('#hilang').change(function(){
		
		});
		
		});
		
		$(document).ready(function(){
			$("#man").toggleClass('hidden');
		$('#hilang').change(function(){
			$("#oto").toggleClass('hidden');
			$("#man").removeClass('hidden');	
		});
		if($('#hilang').is(':checked')){
		$("#man").readonly=true;
		};*/
		
		/*function toggle('#hilang'){
        var $input = $(this);
        if($(this).prop('checked'))
            $('#man').show();
        else
            $('#man').hide();
        }*/
	</script>
	
    <!-- /Parsley -->
  </body>
  <?php
  }
  ?>
</html>
