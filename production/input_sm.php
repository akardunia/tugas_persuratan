<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Form Surat Masuk <small><a href="tabel_surat_masuk.php">lihat Data</a></small></h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
					<?php
					require_once ("function.php");	
					
					$terima=date('Y-m-d H:i:s');
					if(isset($_FILES['fileToUpload'])){
						$namaa=basename($_FILES["fileToUpload"]["name"]);
						$target_dir = "../file/";
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
                
								$up = mysqli_query($link, "insert into surat_masuk 
															(no_surat,tgl_surat,no_agenda,tgl_agenda,pencatat,tgl_terima,asal_surat,perihal,sifat,status,foto) 
															VALUES 
															('$_POST[no_surat]','$_POST[tgl_surat]','$_POST[no_agenda]','$_POST[tgl_agenda]','$_SESSION[JenengAdmin]','$terima','$_POST[asal_surat]','$_POST[perihal]','$_POST[sifat]','diterima','$new_ID')");
								if($up){
									header("Location: form_surat_masuk.php?ID=".$new_ID."&&sukses=ya");
									/*echo "<script type='text/javascript'>
									setTimeout(function () {  
										swal({
										title: 'Accses Diterima !!',
										type: 'success',
										timer: 3000,
										showConfirmButton: true
									   });  
									},10); 
								  window.setTimeout(function(){ 
								   window.location.replace('form_surat_masuk.php?$_POST[no_surat]&&sukses=ya');
								  } ,1000); 
								</script>";*/  
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
								   window.location.replace('tabel_surat_masuk.php');
								  } ,1000); 
								</script>";
					}
					
					?>
                    <form method="post" name="surat_masuk" id="surat_masuk" enctype="multipart/form-data" action="" data-parsley-validate class="form-horizontal form-label-left">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">No Surat <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="no_surat" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Tanggal Surat <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="date"   name="tgl_surat" required="required" class="date-picker form-control col-md-7 col-xs-12">
                        </div>
                      </div>
					  
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">No Agenda <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text"  name="no_agenda" readonly="readonly" required="required" value="<?php echo agenda();?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Tanggal Agenda <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="date"   name="tgl_agenda" required="required" class="date-picker form-control col-md-7 col-xs-12">
                        </div>
                      </div>
					  
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Asal Surat</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input name="asal_surat" class="form-control col-md-7 col-xs-12" type="text" required="required">
                        </div>
                      </div>
					  
					  <div class="form-group">
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