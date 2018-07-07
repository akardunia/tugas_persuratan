<?php
					require_once('koneksi.php');
					$pesann=mysqli_query($link,"SELECT * FROM surat_masuk WHERE status='diterima' ") or die (mysqli_error($link));
					while($rows=mysqli_fetch_object($pesann)){
					?>
                      <li>
                        <div class="block">
                          <div class="block_content">
                            <h2 class="title">
                              <a href="disposisi.php?id=<?php echo $rows->no_surat;?>">Surat Datang dari <?php echo $rows->asal_surat;?>, surat ini <?php echo $rows->sifat;?></a>
                            </h2>
                            <div class="byline">
                              <span><?php echo "<time class='timeago' datetime='$rows->tgl_terima' title='$rows->tgl_terima'>"; ?></span> by <a><?php echo $rows->pencatat;?></a>
                            </div>
                            <p class="excerpt"><?php echo "Surat Masuk datang dari ".$rows->asal_surat." , surat ini bersifat ".$rows->sifat.", dengan perihal ".$rows->perihal;?>… <a href="disposisi.php?id=<?php echo $rows->no_surat;?>">Read&nbsp;More</a>
                            </p>
                          </div>
                        </div>
                      </li>
                      <?php
					   
					 	}
					  ?>