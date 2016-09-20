<?php
$hasil=$_GET['hasil'];




?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Creative - Start Bootstrap Theme</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="css/animate.min.css" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/creative.css" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top">

    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
             <a class="navbar-brand page-scroll" href="index.html" style="PADDING-LEFT: 460PX;">TUGAS AKHIR SISTEM PAKAR 2014/2015</a>
               </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
         
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

 

    <section class="bg-primary" id="about">
        <div class="container">
           
        </div>
    </section>


    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">
					<?php if ($hasil=='2'){?>
					MARINE VELVET DISEASES
					<?php } else {?>
					MARINE WHITESPOT DISEASES
					<?php } ?>
					
					</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
			<?php if ($hasil=='2'){?>
           <div class="row">
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="service-box">

					
					   <img class="img-responsive img-circle" src="assets/images/velvet131.jpg" alt="">
					  
                     </div>
                </div>
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="service-box">
					  <i class="fa fa-4x fa-newspaper-o wow bounceIn text-primary" data-wow-delay=".2s"></i>
                       
                        <h3>Penyebab</h3>
                        <p class="text-muted text-left"><strong>Bakteri Amyloodinium ocellatum</strong>, Bakteri ini merupakan Organisme Bersel satu yang di sebut dinoflagelata karena memiliki cambuk seperti struktur Flagella</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="service-box">
					  <i class="fa fa-4x fa-heart wow bounceIn text-primary" data-wow-delay=".3s"></i>
                        <h3>Pengobatan</h3>
                        <p class="text-muted text-left">
						<ul>
						<li class=" text-left">Di Rendam Dengan Air Tembaga dalam 14 hari</li>
						<li class=" text-left">Pemberian Chloroquine Diphosphate dalam air</li>
						<li class=" text-left">Pencelupan Air Segar 3 kali sehari (8 menit)</li>
						<li class=" text-left">Di berikan Hydrogen Peroxide 6 kali per 2 hari</li>
						
						
						
						
						
						</p>
                    </div>
                </div>
             
            </div>
			<?php } else { ?>
			           <div class="row">
                <div class="col-lg-4 col-md-6 text-center">
                   <div class="service-box">

					
					   <img class="img-responsive img-circle" src="assets/images/velvet121.jpg" alt="">
					  
                     </div>
                </div>
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="service-box">
					  <i class="fa fa-4x fa-newspaper-o wow bounceIn text-primary" data-wow-delay=".2s"></i>
                     
                        <h3>Penyebab</h3>
                        <p class="text-muted"><strong>Cryptocaryon irritans</strong> Bakteri parasit ini sering di sebut ich atau whitespot,
						parasit ini merupakan protozoa bersilia ikan teleost laut di perairan tropis dan subtropis</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="service-box">
					 <i class="fa fa-4x fa-heart wow bounceIn text-primary" data-wow-delay=".3s"></i>
                     
                        <h3>Pengobatan</h3>
                        <p class="text-muted text-left">
						<ul>
						<li class=" text-left">Pemberian Hypsonalit (16ppt atau kurang ) dalam 14 hari</li>
						<li class=" text-left">Pindahkan ikan ke aquarium baru setiap 3 jam dalam 4 hari</li>
						<li class=" text-left">Pindahkan ikan ke aquarium berisi air tembaga dengan kandungan 30 %</li>
						<li class=" text-left">Pindahkan ke dalam suhu air kurang dari 19 derajat</li>
						<li class=" text-left">Pemberian Chloroquine ke dalam air</li>
						
						
						
						
						
						</p>
                    </div>
                </div>
             
            </div>
			
			
			
			<?php } ?>
        </div>
    </section>




    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.fittext.js"></script>
    <script src="js/wow.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/creative.js"></script>

</body>

</html>
