<!DOCTYPE html>
<html lang="en">
<head>
	<link href="../vendors/sweetalert/dist/sweetalert.css" rel="stylesheet">
	<!-- jQuery -->
   	<script src="../vendors/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Bootstrap Core CSS -->
	<title>Login</title>
</head>
<body>
<?php
ob_start();
session_start();
date_default_timezone_set('Asia/Jakarta');

include_once('Connections/koneksi.php');
if(isset($_POST['kepencet'])){
		// date
		
		$array_hr= array(1=>"Senin","Selasa","Rabu","Kamis","Jumat","Sabtu","Minggu");
		$hr = $array_hr[date('N')];
		
		$thn = date('Y');

		$jeneng=$_POST['jeneng']; 	//tangkap data yg di input dari form login input username
		$kunci=md5($_POST['kunci']); 	//tangkap data yg di input dari form login input password
		
		$query_login=mysqli_query($link,"select * from user where username='$jeneng' AND password='$kunci'");	 //melakukan pengampilan data dari database untuk di cocokkan
		$hasil_login=mysqli_fetch_array($query_login);	 //melakukan pencocokan
		if($hasil_login==TRUE){ 		// melakukan pemeriksaan kecocokan dengan percabangan.
			  //jika cocok, buat session dengan nama sesuai dengan username
			$_SESSION['JenengAdmin']=$hasil_login['nama_user'];
			$_SESSION['kunci']=$hasil_login['id_user'];
			$_SESSION['telo'] = $thn;
			
			echo "<script type='text/javascript'>
						setTimeout(function () {  
							swal({
							title: 'Accses Diterima !! $_SESSION[tahun]',
							type: 'success',
							timer: 3000,
							showConfirmButton: true
						   });  
						},10); 
					  window.setTimeout(function(){ 
					   window.location.replace('index.php');
					  } ,1000); 
					</script>";       // dan alihkan ke index.php
		}else{   				//jika tidak tampilkan pesan gagal login
			echo "<script type='text/javascript'>
						setTimeout(function () {  
							swal({
							title: 'Oops! Gagal Login.',
							type: 'error',
							timer: 3000,
							showConfirmButton: true
						   });  
						},10); 
					  window.setTimeout(function(){ 
					   window.location.replace('login.php');
					  } ,2000); 
					</script>"; 
		}
}
ob_end_flush();
?>
</body>
</html>