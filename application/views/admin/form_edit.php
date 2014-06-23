<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="<?php  echo base_url(); ?>/asset/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="<?php  echo base_url(); ?>/asset/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="<?php  echo base_url(); ?>/asset/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="<?php  echo base_url(); ?>/asset/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Binary admin</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Waktu akses <a href="#" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="<?php  echo base_url(); ?>/asset/img/find_user.png" class="user-image img-responsive"/>
					</li>
				
					
                    <li>
                        <a  href=""><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                      <li>
                        <a  href=""><i class="fa fa-desktop fa-3x"></i> Tampilan</a>
                    </li>
                    <li>
                        <a  href=""><i class="fa fa-qrcode fa-3x"></i> Tambah kategori</a>
                    </li>
						   <li  >
                        <a  href=""><i class="fa fa-bar-chart-o fa-3x"></i> Data </a>
                    </li>	
                      <li  >
                        <a  href="<?php echo base_url('admin/dataartikel'); ?>"><i class="fa fa-table fa-3x"></i> Data artikel</a>
                    </li>
                    <li  >
                        <a class="active-menu"  href="<?php  echo base_url('admin/formartikel'); ?>"><i class="fa fa-edit fa-3x"></i> Artikel baru </a>
                    </li>				
					
					                   
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-3x"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Second Level Link</a>
                            </li>
                            <li>
                                <a href="#">Second Level Link</a>
                            </li>
                            <li>
                                <a href="#">Second Level Link<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>

                                </ul>
                               
                            </li>
                        </ul>
                      </li>  
                  <li  >
                        <a   href=""><i class="fa fa-square-o fa-3x"></i> Blank Page</a>
                    </li>	
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Tambah Artikel Baru</h2>   
                        <h5></h5>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               <div class="row">
                <div class="col-md-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        
                        <div class="panel-body">
                            <div class="row">
                                <?php echo validation_errors(); ?>

                                <div class="col-md-6">
                                    <form role="form" action="<?php echo site_url('admin/edit/'.$admin->id_berita); ?>" method="POST">
                                        
                                        <div class="form-group">
                                            <label>Judul Artikel</label>
                                            <input name="judul" class="form-control"  value=<?php echo $admin->judul_berita; ?> />
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Gambar</label>
                                            <input type="file" name="gambar" selected/>
                                        </div>
                                        <div class="form-group">
                                            <label>Text area</label>
                                            <textarea name="isi" class="form-control ckeditor"  placeholder="isi artikel"><?php echo $admin->isi_berita; ?></textarea>
                                        </div>
                                                                              
                                        <div class="form-group">
                                            <label>Kategori</label>
                                            <select name="kategori" class="form-control">
                                                <?php foreach ($kategori as $kat) {
                                                    
                                               ?>
                                                <option value="<?php echo $kat->id_kategori;?>" selected><?php echo $kat->kategori;?></option>
                                                <?php  } ?>
                                              
                                            </select>
                                        </div>
                                       
                                        <button type="submit" class="btn btn-default">Submit Button</button>
                                        <button type="reset" class="btn btn-primary">Reset Button</button>

                                    </form>
                                   
                                 
    </div>
                                
                                                    </div>
                     <!-- End Form Elements -->
                </div>
            </div>
                <!-- /. ROW  -->
               
                <!-- /. ROW  -->
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="<?php  echo base_url(); ?>/asset/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="<?php  echo base_url(); ?>/asset/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="<?php  echo base_url(); ?>/asset/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="<?php  echo base_url(); ?>/asset/js/morris/raphael-2.1.0.min.js"></script>
    <script src="<?php  echo base_url(); ?>/asset/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="<?php  echo base_url(); ?>/asset/js/custom.js"></script>
    <script src="<?php  echo base_url(); ?>/asset/js/ckeditor/ckeditor.js"></script>

   
</body>
</html>
