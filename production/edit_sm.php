<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Form Surat Masuk <small>lihat Data</small></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
					<?php
					$query_sm=mysqli_query($link,"SELECT * FROM surat_masuk WHERE id_surat_masuk='$_GET[id]'");
					$rows_sm=mysqli_fetch_object($query_sm);
					
					//rubah data
					if(isset($_POST['rubah'])){
						$up = mysqli_query($link, "UPDATE surat_masuk SET 
									no_surat='$_POST[no_surat]',
									tgl_surat='$_POST[tgl_surat]',
									no_agenda='$_POST[no_agenda]',
									tgl_agenda='$_POST[tgl_agenda]',
									asal_surat='$_POST[asal_surat]',
									perihal='$_POST[perihal]',
									sifat='$_POST[sifat]' WHERE id_surat_masuk='$_GET[id]'");
						if($up){
							header("Location: form_surat_masuk.php?ID=".$_POST['no_surat']."&&sukses=ya");
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
						} else {
							echo '<div class="alert alert-danger">File gagal di upload.</div>';
						}
						
					}
					
					if(isset($_GET['sukses']) == 'ya'){
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
                          <input type="text" name="no_surat" value="<?php echo $rows_sm->no_surat;?>" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Tanggal SUrat <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="date"   name="tgl_surat" value="<?php echo $rows_sm->tgl_surat;?>" required="required" class="date-picker form-control col-md-7 col-xs-12">
                        </div>
                      </div>
					  
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">No Agenda <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text"  name="no_agenda" readonly="readonly" required="required" value="<?php echo $rows_sm->no_agenda;?>" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Tanggal Agenda <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="date"   name="tgl_agenda" value="<?php echo $rows_sm->tgl_agenda;?>" required="required" class="date-picker form-control col-md-7 col-xs-12">
                        </div>
                      </div>
					  
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Asal Surat</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input name="asal_surat" value="<?php echo $rows_sm->asal_surat;?>" class="form-control col-md-7 col-xs-12" type="text" required="required">
                        </div>
                      </div>
					  
					  <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Sifat Surat</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                       <select class="form-control" name="sifat">
					   <option><?php echo $rows_sm->sifat;?></option>
                         <option>Penting</option>
                         <option>Biasa</option>
                         <option>Segera</option>
                       </select>
                      </p>
                        </div>
                      </div>
					  
                     
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Perihal Surat <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input name="perihal" value="<?php echo $rows_sm->perihal;?>" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                        </div>
                      </div>
					  
					  
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button name="rubah" type="submit" class="btn btn-success">Submit</button>
                        </div> 
                      </div>

                    </form>
                  </div>
                </div>
              </div>