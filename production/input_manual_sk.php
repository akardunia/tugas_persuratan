<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Form Surat Keluar <small>
					</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
					<?php
					$tahun=date('y');
					$terima=date('Y-m-d H:i:s');
					//echo $terima;
					
					if(isset($_GET['IDD'])){
						$lastID = $_GET['IDD'];
						$lastNoUrut = substr($lastID, 0, 4);
						mysqli_query($link,"update surat_keluar set 
														nomor='$lastNoUrut' WHERE no_surat='$_GET[IDD]'");
					}
					
					if(isset($_POST['cocok'])){
					echo "<script>";
					echo "alert('$newnosurat');";
					echo "</script>";
					if(isset($_FILES['fileToUpload'])){
					
						$namaa=basename($_FILES["fileToUpload"]["name"]);
						$target_dir = "../file/surat_keluar/";
						$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
						$uploadOk = 1;
						$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
				
						if(isset($_POST["cocok"])) {
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
							$surat_baru = $_POST['no_1']."/".$_POST['no_2']."/".$_POST['no_3']."/".$_POST['no_4'];
							
							$file = $target_dir.''.md5($surat_baru).'.'.$imageFileType;
							$new_ID = md5($surat_baru).'.'.$imageFileType;
							if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $file)) {
							$nmr = substr($_POST['no_1'],1,4);
                					$query_simpan=mysqli_query($link,"insert into surat_keluar 
														(no_surat,
															tgl_surat,
																kepada,
																	alamat,
																		perihal,
																			pembuat,
																				keterangan,
																					file, nomor) 
																			VALUES 
														('$surat_baru',
															'$_POST[tgl_surat]',
																'$_POST[kepada]',
																	'$_POST[alamat]',
																		'$_POST[perihal]',
																			'$_SESSION[JenengAdmin]',
																				'$_POST[keterangan]',
																					'$new_ID','$nmr')") ;
								if($query_simpan){
									//header("Location: form_surat_keluar.php?ID=".$new_ID."&&sukses=ya");
									echo "<script type='text/javascript'>
									setTimeout(function () {  
										swal({
										title: 'Data Behasil Disimpan !!',
										type: 'success',
										timer: 3000,
										showConfirmButton: true
									   });  
									},10); 
								  window.setTimeout(function(){ 
								   window.location.replace('tabel_surat_keluar.php?IDD=$surat_baru&&sukses=ya');
								  } ,1000); 
								</script>"; 
								}
							} else {
								echo '<div class="alert alert-danger">File gagal di upload.</div>';
							}
						}
					}
					
					if(isset($_GET['sukses']) == 'ya'){
						echo "<script type='text/javascript'>
									setTimeout(function () {  
										swal({
										title: 'Surat Berhasil Diarsipkan !!',
										type: 'success',
										timer: 3000,
										showConfirmButton: true
									   });  
									},10); 
								  window.setTimeout(function(){ 
								   window.location.replace('tabel_surat_keluar.php');
								  } ,1000); 
								</script>";
					}
					}
					?>
                    <form method="post" name="surat_masuk" id="surat_masuk" enctype="multipart/form-data" action="" data-parsley-validate class="form-horizontal form-label-left">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">No Surat <span class="required">*</span>
                        </label>
                        <div class="col-md-2 col-sm-2 col-xs-2">
                          <input name="no_1" type="text"  class="form-control" data-toggle="tooltip" data-placement="top" title="Masimal 5 Karakter, Surat Mundur Ex: b0005." maxlength="5" placeholder="Ex: 0005">
                        </div> 
						<div class="col-md-2 col-sm-2 col-xs-2">
                          <input name="no_2" type="text"  class="form-control" readonly="readonly" value="UN27.50">
                        </div>
						<div class="col-md-2 col-sm-2 col-xs-2">
                          <select name="no_3" required="required" id="klasifikasi" onChange="klok()" class="form-control">
						  	<option value='' $pilih>-- Pilih --</option>
						  	<?php
							$aa="select * from klasifikasi ";
							$bb=mysqli_query($link,$aa);
							while($cc=mysqli_fetch_array($bb)){
							$id=$cc['id'];
							$nama=$cc['klasifikasi'];
							$pilih=($id==$b)?"selected":"";
									echo "<option value='$id' $pilih>$nama</option>";
							}
							?>
						  </select>
                        </div>
						<div class="col-md-1 col-sm-1 col-xs-2">
                          <input name="no_4" type="text"  class="form-control" readonly="readonly" value="<?php echo date("Y");?>">
                        </div>
                      </div>
					  
               
					  
					  <div id="coba" class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Tanggal Surat <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="date"   name="tgl_surat" required="required" class="date-picker form-control col-md-7 col-xs-12">
                        </div>
                      </div>
					  
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Ditujukan Kepada <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text"   name="kepada" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
					  
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Alamat</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input name="alamat" class="form-control col-md-7 col-xs-12" type="text" required="required">
                        </div>
                      </div>
					  
					  <!--<div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Sifat Surat</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <label class="control-label">
                        <input type="radio" class="flat" name="sifat"  value="penting" checked="" required /> Penting</label><br>
						<label class="control-label">
                        <input type="radio" class="flat" name="sifat"  value="biasa" /> Biasa</label><br>
						<label class="control-label">
						<input type="radio" class="flat" name="sifat"  value="segera" /> Segera</label><br>
                      </p>
                        </div>
                      </div>-->
					  <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Keterangan</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea name="keterangan" class="form-control col-md-7 col-xs-12" type="text" required="required"></textarea>
                        </div>
                      </div>
                     
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Perihal Surat <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input name="perihal" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                        </div>
                      </div>
					  
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">File Surat<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input name="fileToUpload" class="date-picker form-control col-md-7 col-xs-12" required="required" type="file">
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="reset" class="btn btn-primary">Atur Ulang</button>
                          <button name="cocok" type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>