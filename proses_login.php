<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Pendekar_mouse">

    <?php include "production/title.php";?>
	<link href="vendors/sweetalert/dist/sweetalert.css" rel="stylesheet">
	<!-- jQuery -->
   	<script src="vendors/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Bootstrap Core CSS -->

</head>
<body>
<?php
ob_start();
session_start(); 		//mulai session, krena kita akan menggunakan session pd file php ini
include_once('production/Connections/koneksi.php'); 		
date_default_timezone_set('Asia/Jakarta');
if(isset($_POST['kepencet'])){
		// date
		$day=date('d');
		$moon=date('M');
		$years=date('Y');
		$time=date('H:m:s');
		$array_hr= array(1=>"Senin","Selasa","Rabu","Kamis","Jumat","Sabtu","Minggu");
		$hr = $array_hr[date('N')];
		
		
		$jeneng=$_POST['jeneng']; 	//tangkap data yg di input dari form login input username
		$kunci=md5($_POST['kunci']); 	//tangkap data yg di input dari form login input password
		
		$query_login=mysqli_query($link,"select * from user where username='$jeneng' AND password='$kunci'");	 //melakukan pengampilan data dari database untuk di cocokkan
		$hasil_login=mysqli_fetch_array($query_login);	 //melakukan pencocokan
		if($hasil_login==TRUE){ 		// melakukan pemeriksaan kecocokan dengan percabangan.
			  //jika cocok, buat session dengan nama sesuai dengan username
			$_SESSION['JenengAdmin']=$hasil_login['nama_user'];
			$_SESSION['kunci']=$hasil_login['id_user'];
			$_SESSION['jatah']=$hasil_login['level'];
			$_SESSION['tahun']=$years;
			$level =$_SESSION['jatah'];
			if($level == 'pimpinan'){
			echo "<script type='text/javascript'>
						setTimeout(function () {  
							swal({
							title: 'Pimpinan, Accses Diterima !!',
							type: 'success',
							timer: 3000,
							showConfirmButton: true
						   });  
						},10); 
					  window.setTimeout(function(){ 
					   window.location.replace('pimpinan/index.php');
					  } ,1000); 
					</script>";       // dan alihkan ke index.php
			}else if ($level == 'admin'){
			echo "<script type='text/javascript'>
						setTimeout(function () {  
							swal({
							title: 'Administrator, Accses Diterima !!',
							type: 'success',
							timer: 3000,
							showConfirmButton: true
						   });  
						},10); 
					  window.setTimeout(function(){ 
					   window.location.replace('production/index.php');
					  } ,1000); 
					</script>";       // dan alihkan ke index.php
					
			}else if ($level == 'superadmin'){
			echo "<script type='text/javascript'>
						setTimeout(function () {  
							swal({
							title: 'Administrator, Accses Diterima !!',
							type: 'success',
							timer: 3000,
							showConfirmButton: true
						   });  
						},10); 
					  window.setTimeout(function(){ 
					   window.location.replace('production/index.php');
					  } ,1000); 
					</script>";       // dan alihkan ke index.php
			}else if($level == 'user'){
			echo "<script type='text/javascript'>
						setTimeout(function () {  
							swal({
							title: 'Accses Diterima !!',
							type: 'success',
							timer: 3000,
							showConfirmButton: true
						   });  
						},10); 
					  window.setTimeout(function(){ 
					   window.location.replace('user/index.php');
					  } ,1000); 
					</script>";       // dan alihkan ke index.php
			}
			
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