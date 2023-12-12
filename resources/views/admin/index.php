<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <style type="text/css">
        body {
            font-family: goudy old style  !important;
        }
        body table{
            font-family:goudy old style !important;
        }
        body .navs{
              font-family: century !important;
        }
    </style>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
 <meta content="" name="description" />
    <meta content="webthemez" name="author" />
    <title>Hotel 3Sks</title>
 <!-- Bootstrap Styles-->
    <link href="../assets/css/bootstrap.css" rel="stylesheet" />
    <link href="../assets/css/bootstrap-theme.min.css" rel="stylesheet" />
     <!-- FontAwesome Styles-->
    <link href="../assets/css/font-awesome.css" rel="stylesheet" />
        <!-- Custom Styles-->
    <link href="../assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper" style="background-color:	#778899">
        <nav class="navbar navbar-default top-navbar" role="navigation" style="background-color: 		#D8D2CD!important; color: #333">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html" style="background-color:	#778899;" ><strong><i class="icon fa fa-home"></i>Hotel 3Sks</strong></a>
    <div id="sideNav" href="">
  <i class="fa fa-bars icon"></i> 
  </div>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown" style="color: white!important; 
                font-family: microsoft phagspa!important;">


                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw" style="color: white"></i> <i class="fa fa-caret-down" style="color:white"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user mx-5">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="report.php"><i class="fa fa-book fa-fw"></i> Laporan</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="../logout.php" onclick="return confirm('Yakin logut?')"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side navs" role="navigation" style="background-color:	#778899;color: white!important">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu" style="color: #fff">

                    <li style="color: #fff">
                        <a href="?pg=dashboard" style="color: #fff"><i class="fa fa-dashboard" style="color: #fff"></i> Home</a>
                    </li>

                    <li>
                        <a href="?pg=datapegawai" style="color: #fff"><i class="fa fa-desktop" style="color: #fff"></i> Data Pegawai</a>
                    </li>
      
     
                    <li>
                        <a href="?pg=datakamar" style="color: #fff"><i style="color: #fff" class="fa fa-home"></i> Data Kamar</a>
                    </li>


                    <li>
                        <a href="?pg=datafasilitaskamar" style="color: #fff"><i style="color: #fff" class="fa fa-home"></i> Fasilitas Kamar</a>
                    </li>

                     <li>
                        <a href="?pg=datafasilitashotel" style="color: #fff"><i style="color: #fff" class="fa fa-home"></i> Fasilitas Hotel</a>
                    </li>


                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div class="header">
    <!-- =========PEMISAH========= -->
        <?php
            switch (@$_GET['pg']) {

                //data kamar

                  case 'editkamar':
                include 'kamar/update.php';
                break;

                  case 'datakamar':
                include 'kamar/index.php';
                break;
                
                  case 'tambah_kamar':
                include 'kamar/tambah_kamar.php';
                break;


                  case 'dataorder':
                include 'order/index.php';
                break;

                  //data fasilitas kamar

                  case 'editfasilitas':
                include 'fasilitaskamar/update.php';
                break;

                  case 'datafasilitaskamar':
                include 'fasilitaskamar/index.php';
                break;
                
                  case 'tambah_fasilitaskamar':
                include 'fasilitaskamar/tambah_fasilitaskamar.php';
                break;

       
               

                 //data fasilitas hotel

                  case 'editfasilitashotel':
                include 'fasilitashotel/update.php';
                break;

                  case 'datafasilitashotel':
                include 'fasilitashotel/index.php';
                break;
                
                  case 'tambah_fasilitashotel':
                include 'fasilitashotel/tambah_fasilitashotel.php';
                break;

                  //data pegawai

                  case 'editpegawai':
                include 'pegawai/update.php';
                break;

                  case 'datapegawai':
                include 'pegawai/index.php';
                break;
                
                  case 'tambah_pegawai':
                include 'pegawai/tambah_pegawai.php';
                break;




                //
                case 'dashboard':
                include 'dashboard/index.php';
                break;

              
            

              default:
                include 'dashboard/index.php'; 
                break;



            }
          ?>
      </div>
  </div>
    <!-- =========GGGGGGG======= -->
            <div id="page-inner"> 
  
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="../assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="../assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="../assets/js/jquery.metisMenu.js"></script>
      <!-- Custom Js -->
    <script src="../assets/js/custom-scripts.js"></script>
    
   
</body>
</html>


</body>
</html>