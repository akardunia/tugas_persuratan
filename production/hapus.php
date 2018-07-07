<html>
<head>
<link href="../vendors/sweetalert/dist/sweetalert.css" rel="stylesheet">
<script src="../vendors/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
<?php
require_once("Connections/koneksi.php");
//$now=date("m");
                  
if(empty($_GET['id'])){
	echo " Data Yang Dihapus Tidak Ada ! ";
	}else{
	$pilih=$_GET['set'];
	switch($pilih){
		case'sm':
			$id_surat_masuk=$_GET['id'];
			$hapus=mysqli_query($link,"DELETE FROM surat_masuk WHERE id_surat_masuk='$id_surat_masuk' ") or die (mysqli_error($link));
					if($hapus){
						echo "<script type='text/javascript'>
									setTimeout(function () {  
										swal({
										title: 'Data Berhasil Dihapus !!',
										type: 'success',
										timer: 3000,
										showConfirmButton: true
									   });  
									},10); 
								  window.setTimeout(function(){ 
								   window.location.replace('tabel_surat_masuk.php');
								  } ,1000); 
								</script>";
					}else{
						echo "<script type='text/javascript'>
								setTimeout(function () {  
									swal({
									title: 'Oops! Gagal Hapus Data.',
									type: 'error',
									timer: 3000,
									showConfirmButton: true
								   });  
								},10); 
							  window.setTimeout(function(){ 
							   window.location.replace('tabel_surat_masuk.php');
							  } ,2000); 
							</script>";
					}
		break;
		case 'sk' :
			$id_surat_keluar=$_GET['id'];
			$hapus=mysqli_query($link,"DELETE FROM surat_keluar WHERE no_surat='$id_surat_keluar'") or die (mysqli_error());
				if($hapus){
						echo "<script type='text/javascript'>
									setTimeout(function () {  
										swal({
										title: 'Data Berhasil Dihapus !!',
										type: 'success',
										timer: 3000,
										showConfirmButton: true
									   });  
									},10); 
								  window.setTimeout(function(){ 
								   window.location.replace('tabel_surat_keluar.php');
								  } ,1000); 
								</script>";
					}else{
						echo "<script type='text/javascript'>
								setTimeout(function () {  
									swal({
									title: 'Oops! Gagal Hapus Data.',
									type: 'error',
									timer: 3000,
									showConfirmButton: true
								   });  
								},10); 
							  window.setTimeout(function(){ 
							   window.location.replace('tabel_surat_keluar.php');
							  } ,2000); 
							</script>";
					}
		break;
		
		case 'user' :
			$id_user=$_GET['id'];
			$hapus=mysqli_query($link,"DELETe FROM user WHERE id_user='$id_user'");
				if($hapus){
						echo "<script type='text/javascript'>
										setTimeout(function () {  
											swal({
											title: 'Data Berhasil Dihapus !!',
											type: 'success',
											timer: 3000,
											showConfirmButton: true
										   });  
										},10); 
									  window.setTimeout(function(){ 
									   window.location.replace('tabel_user.php');
									  } ,1000); 
									</script>";
				}else{
							echo "<script type='text/javascript'>
									setTimeout(function () {  
										swal({
										title: 'Oops! Gagal Hapus Data.',
										type: 'error',
										timer: 3000,
										showConfirmButton: true
									   });  
									},10); 
								  window.setTimeout(function(){ 
								   window.location.replace('tabel_user.php');
								  } ,2000); 
								</script>";
				}

		break;
		
		case 'klasifikasi' :
			$hapus=mysqli_query($link,"DELETE FROM kasifikasi WHERE id_klasifikasi=''");
			if($hapus){
		
								echo "<script>";
								echo "alert('Data Berhasil Di hapus !!');";
								echo "location='semester.php'";
								echo "</script>";
								}else{
								echo "<script>";
								echo "alert('Ooops! Data GAGAL Di hapus !!');";
								echo "</script>";
								}

		break;
		
		case 'tahun' :
		
	}
}

?>
</body>
</html>