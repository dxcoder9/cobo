

 <div class="berita col-sm-12 col-md-12">
                            <div class="row">
                              <?php 
foreach ($berita as $hasil) {
  

?>
                                <div class="col-sm-6 col-md-4">
                                    <div class="thumbnail">
                                      <A HREF=""><img src="<?php echo base_url('asset/image/'.$hasil->gambar); ?>" alt="...">
                                     </a>
                                    </div>
                            </div>
<?php } ?>

                        </div>
                      </div>
