<?php
include "Connections/koneksi.php";
	
	if(isset($_FILES['fileToUpload'])){
	$namaa=basename($_FILES["fileToUpload"]["name"]);
		$target_dir = "../file/";
		$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

		if(isset($_POST["upload"])) {
			$check = $_FILES["fileToUpload"]["tmp_name"];
			if($check !== false) {
				$uploadOk = 1;
			} else {
				echo "File is not an image.";
				$uploadOk = 0;
			}
		}

		if ($_FILES["fileToUpload"]["size"] > 2000000) {
			echo '<div class="alert alert-danger">File size terlalu besar.</div>';
			$uploadOk = 0;
		}

		if($imageFileType != "pdf" ) {
			echo '<div class="alert alert-danger">Hanya PDF yang di izinkan.</div>';
			$uploadOk = 0;
		}

		if ($uploadOk == 0) {
			echo '<div class="alert alert-danger">File gagal di upload.</div>';
		} else {
			$file = $target_dir.''.$namaa.'.'.$imageFileType;
			$new_ID = $namaa.'.'.$imageFileType;
			if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $file)) {
				$up = mysqli_query($link, "insert into surat_masuk (foto) VALUES ('$new_ID')");
				if($up){
					header("Location: pdf.php?ID=".$new_ID."&&sukses=ya");
				}
			} else {
				echo '<div class="alert alert-danger">File gagal di upload.</div>';
			}
		}
	}
	
	if(isset($_GET['sukses']) == 'ya'){
		echo '<div class="alert alert-success">File berhasil di upload.</div>';
	}
?>
<div class="text-center">
	<form class="form-inline" method="post" enctype="multipart/form-data">
	  <div class="form-group">
				<input class="form-control"  type="file" name="fileToUpload" value="avatar.png">
				<input type="submit" name="upload" class="btn btn-primary" value="Upload">
		</div>
	</form>
</div>

