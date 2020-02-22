<!DOCTYPE html> 
<html> 
   <head> 
      <title>Goperpus</title> 
      <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
      <!-- Bootstrap --> 
      <link href="css/bootstrap.min.css" rel="stylesheet"> 
       <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries --> 
      <!-- WARNING: Respond.js doesn't work if you view the page  
      via file:// --> 
      <!--[if lt IE 9]> 
         <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/ 
            html5shiv.js"></script> 
         <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/ 
            respond.min.js"></script> 
      <![endif]--> 
   </head> 
   <body> 
      <!--MENU NAVBAR-->
      <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="index.php">GOPERPUS</a>
          </div>
          <ul class="nav navbar-nav navbar-right">
            <li style="color: white;margin-top: 15px"><?php echo date("d/m/y"); ?></li>
            <li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
            <li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li> 
          </ul>
        </div>
      </nav>
      <!--MENU BAWAH-->
      <div class="col-md-2">
         <div class="row">
          <div class="col-xs-6 col-md-12">
               <a class="thumbnail">
                  <img class="img-responsive" src="img/images.png" style="width: 100px;">
               </a>
            </div>
         </div>
         <div class="row"></div>
         <ul class="nav nav-pills nav-stacked">
            <li class="active"><a href="index.php"><span class="glyphicon glyphicon-home"></span> Dasbord</a></li>
            <li><a href="pinjam.php"><span class="glyphicon glyphicon-pencil"></span> Peminjaman</a></li>
            <li><a href="buku.php"><span class="glyphicon glyphicon-edit"></span> Data Buku</a></li>
            <li><a href="Anggota.php"><span class="glyphicon glyphicon-user"></span> Data Anggota</a></li>
            <li><a href="ubahpassword.php"><span class="glyphicon glyphicon-refresh"></span> Ubah Password</a></li>
            <li><a href=""><span class="glyphicon glyphicon-log-out"></span> Keluar</a></li>
         </ul>
   </div>
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
      <script src="https://code.jquery.com/jquery.js"></script> 
      <!-- Include all compiled plugins (below), or include individual files as needed --> 
      <script src="js/bootstrap.min.js"></script> 
   </body> 
</html>