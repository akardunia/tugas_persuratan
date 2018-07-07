<?php
						include "Connections/koneksi.php";
							if(isset($_POST['nama_lengkap'])){
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
						?>