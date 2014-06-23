              

                    <div class="row">
                        <div class="berita kolom col-sm-12 col-md-12">
                            
                              <?php 
                              foreach ($berita as $row) {
                                
                              
                              ?>
                                <div class="col-sm-6 col-md-4">
                                    <div class="thumbnail" id="picture">
                                      <img src="<?php echo base_url('asset/image/'.$row->gambar); ?>" width='300px' height='300px' alt="...">
                                      <div class="caption">
                                        <h3><?php echo $row->judul; ?></h3>
                                        <p><?php echo $row->isi; ?></p>
                                        <p><a href="#" class="btn btn-primary" role="button">Read more</a></p>
                                      </div>
                                    </div>
                                </div>
                              <?php
                              }
                              ?>  
                    

                        </div>
                    </div>