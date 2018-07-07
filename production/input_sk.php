<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Form Surat Keluar <small><a href="tabel_surat_keluar.php">lihat Data</a></small></h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
					<?php
					require_once("function.php");
					$terima=date('Y-m-d H:i:s');
					$nomor=nosurat();


					//
					if(isset($_POST['cocok'])){
					
					$newnosurat=nosurat().$_POST['klasifikasi']."/".$tahun;
					
					echo "<script>";
					echo "alert('Input Data Baru dengan No Surat $newnosurat');";
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
							$file = $target_dir.''.md5($_POST['no_surat']).'.'.$imageFileType;
							$new_ID = md5($_POST['no_surat']).'.'.$imageFileType;
							if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $file)) {
                					$query_simpan=mysqli_query($link,"insert into surat_keluar 
														(no_surat,
															tgl_surat,
																kepada,
																	alamat,
																		perihal,
																			pembuat,
																				keterangan,
																					file,
																						nomor,tahun) 
																			VALUES 
														('$newnosurat',
															'$_POST[tgl_surat]',
																'$_POST[kepada]',
																	'$_POST[alamat]',
																		'$_POST[perihal]',
																			'$_SESSION[JenengAdmin]',
																				'$_POST[keterangan]',
																					'$new_ID',
																						'$nomor','$tahun')") or die (mysqli_error($link));
								if($query_simpan){
									//header("Location:tabel_surat_keluar.php?ID=".$new_ID."&&sukses=ya");
									echo "<script type='text/javascript'>
									setTimeout(function () {  
										swal({
										title: 'Data Berhasil Disimpan !!',
										type: 'success',
										timer: 3000,
										showConfirmButton: true
									   });  
									},10); 
								  window.setTimeout(function(){ 
								   window.location.replace('tabel_surat_keluar.php?sukses=ya');
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
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input name="no_surat" type="text"  id="oto"  value="<?php echo nosurat().".../".$tahun ; ?>" readonly="true"  class="form-control col-md-7 col-xs-12">
                        </div>
						<!--<input type="checkbox"  id="hilang" value="manual"  />--> <a class="btn btn-default btn-sm" href="form_surat_keluar.php?page=manual"><i class="fa fa-pencil"></i> Nomor Manual</a>
                      </div>
					  
                      <div id="coba" class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Klasifikasi <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="klasifikasi" required="required" id="klasifikasi" onChange="klok()" class="form-control col-md-7 col-xs-12">
						  	<option value='' $pilih>-- Pilih Salah Satu --</option>
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
                      </div>
					  
					  <div id="coba" class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Tanggal SUrat <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="date" name="tgl_surat" required="required" class="date-picker form-control col-md-7 col-xs-12">
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
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Alamat Tujuan</label>
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