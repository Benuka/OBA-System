<?php include_once 'upload.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/favicon.png">
    <title>Administrator - Gallery</title>
    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="css/colors/default.css" id="theme" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
   
</head>

<body class="fix-header">
    <!-- ============================================================== -->
    <!-- Preloader -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Wrapper -->
    <!-- ============================================================== -->
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-static-top m-b-0">
        <?php require_once 'common/header.php'; ?>
        </nav>
        <div class="navbar-default sidebar" role="navigation">
        <?php require_once 'common/navbar.php'; ?>
    </div>
        <!-- ============================================================== -->
        <!-- End Left Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Gallery - Administrator</h4> </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <a href="#" target="_blank" class="btn btn-danger pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">Upgrade to Pro</a>
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">Gallery</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Photo Gallery</h3>
                            <div id="gmaps-simple" class="gmaps" style="margin: auto; width: 60%; border: 3px solid #73AD21; padding: 10px;">
                                <div class = "upform" style="margin: auto; width: 20%; padding-top:30px;">
                                    <p><?php echo $statusMsg; ?></p>
                                    <form action="" method="post" enctype="multipart/form-data" style="margin: auto;">
                                        Select Image File to Upload
                                        <input type="file" name="files[]" multiple>
                                        <input type="submit" name="submit" Value="UPLOAD">
                                    </form>
                                </div>
                            </div>
    </div>
    <div class="show_table">
    <hr/>
    <table>
        <tr>
            <th>Image</th>
            <th>Action</th>
        </tr><div>
    <?php
        $dir = glob('../img/gallery/{*.png,*.jpg}',GLOB_BRACE);
        
            foreach($dir as $value){
                ?>
    </div>
    <tr>
        <td><img width="90px" height="60px" src="<?php echo $value; ?>" />
        <td><form action="deletefile.php" method="POST">
                <input type="hidden" name="file" value="<?php echo $value; ?>" />
                <button type="submit" name="submit" onclick="return confirm('Do you really want to delete this photo');" value="<?php echo $value; ?>">Delete Image</button>
            </form>
        </td>    
                <?php
                    }
                ?>
        </td>
    
    </tr>
    
    </table>
                            </div>
                        
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
            <!-- <footer class="footer text-center"> 2017 &copy; Ample Admin brought to you by wrappixel.com </footer> -->
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->

    <script>
        function test() {
            $.confirm({
    columnClass: 'small'
});
        }
    </script>

    <!-- jQuery -->
    <script src="plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
    <!-- google maps api -->
    <!-- <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="plugins/bower_components/gmaps/gmaps.min.js"></script>
    <script src="plugins/bower_components/gmaps/jquery.gmaps.js"></script> -->
</body>

</html>
