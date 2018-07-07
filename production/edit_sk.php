<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Form Surat Masuk <small>
					</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
					<?php
					$ID=$_GET['id'];
					$sk_query=mysqli_query($link,"SELECT * FROM surat_keluar WHERE no_surat='$ID'");
					$rows_sk=mysqli_fetch_object($sk_query);
					//echo $terima;
						if(isset($_POST["cocok"])) {
							$query_simpan=mysqli_query($link,"update surat_keluar set 
														no_surat='$_POST[no_surat]',
															tgl_surat='$_POST[tgl_surat]',
																kepada='$_POST[kepada]',
																	alamat='$_POST[kepada]',
																		perihal='$_POST[alamat]',
																			keterangan='$_POST[keterangan]' WHERE no_surat='$ID' ");
						
							if($query_simpan){
								echo "<script type='text/javascript'>
									setTimeout(function () {  
										swal({
										title: 'Data Berhasil Dirubah !!',
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
												title: 'Oops! Gagal Merubah Data.',
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
						}
					?>
                    <form method="post" name="surat_masuk" id="surat_masuk" enctype="multipart/form-data" action="" data-parsley-validate class="form-horizontal form-label-left">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">No Surat <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input name="no_surat" type="text"  value="<?php echo $rows_sk->no_surat ; ?>"   class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
					  
                      
					  
					  <div id="coba" class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Tanggal SUrat <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="date"   name="tgl_surat" value="<?php echo $rows_sk->tgl_surat;?>" required="required" class="date-picker form-control col-md-7 col-xs-12">
                        </div>
                      </div>
					  
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Ditujukan Kepada <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text"   name="kepada" value="<?php echo $rows_sk->kepada;?>" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
					  
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Alamat</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input name="alamat" value="<?php echo $rows_sk->alamat;?>" class="form-control col-md-7 col-xs-12" type="text" required="required">
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
                          <textarea name="keterangan" class="form-control col-md-7 col-xs-12" type="text" required="required"><?php echo $rows_sk->keterangan;?></textarea>
                        </div>
                      </div>
                     
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Perihal Surat <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input name="perihal" value="<?php echo $rows_sk->perihal;?>" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                        </div>
                      </div>
					  
					  <!--<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">File Surat<span class="required">*</span>
                        </label>
						
                        <div class="col-md-6 col-sm-6 col-xs-12">
						  <input id="hilang" name="" type="checkbox" value="" /> Rubah File Surat
                          <input id="oto"  name="fileToUpload" class="form-control col-md-7 col-xs-12" required="required" type="file">
                        </div>
                      </div>-->
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