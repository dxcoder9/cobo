<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin</title>
	<!-- BOOTSTRAP STYLES-->
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
font-size: 16px;"> Last access : 30 May 2014 &nbsp; <a href="#" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
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
                        <a   class="active-menu" href="<?php echo base_url('admin/dataartikel'); ?>"><i class="fa fa-table fa-3x"></i> Data artikel</a>
                    </li>
                    <li  >
                        <a  href="<?php  echo base_url('admin/formartikel'); ?>"><i class="fa fa-edit fa-3x"></i> Artikel baru </a>
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
                     <h2>Table Examples</h2>   
                        <h5>Welcome Jhon Deo , Love to see you back. </h5>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Artikel
                        </div>
                        <div class="panel-body">

                            <div class="table-responsive">

                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Judul</th>
                                            <th>Isi</th>
                                            <th>Kategori</th>
                                            <th>Gambar</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $no=1;
                                        foreach ($artikel->result() as $row) {
                                        
                                        ?>
                                        <tr class="odd gradeC">
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $row->judul_berita; ?></td>
                                            <td><?php
                                            $bet = $row->isi_berita;
                                            $pot = substr($bet, 0,70);
                                             echo $pot; ?></td>
                                            <td class=""><?php echo $row->kategori; ?></td>
                                            <td class="center"><?php echo $row->gambar; ?></td>
                                            <td class="center"><a href="<?php echo site_url('admin/delete/'.$row->id_berita); ?>" onClick="return confirm('anda yakin?')"><span class="glyphicon glyphicon-remove"></span></a><a href="<?php echo site_url('admin/edit/'.$row->id_berita); ?>"><span class="glyphicon glyphicon-edit"></span></a></td>
                                        </tr>
                                       <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
                <!-- /. ROW  -->
                    </div>
                    <!--  end  Context Classes  -->
                </div>
            </div>
                <!-- /. ROW  -->
        </div>
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
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
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- CUSTOM SCRIPTS -->
    <script src="<?php  echo base_url(); ?>/asset/js/custom.js"></script>
    
   
</body>
</html>
