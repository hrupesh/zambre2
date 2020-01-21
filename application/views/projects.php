<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" href="<?php echo base_url(); ?>/assets/img/fav-icon.png" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Our Biggest Projects | A professional waterproofing contracting company</title>

        <!-- Icon css link -->
        <link href="<?php echo base_url(); ?>/assets/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>/assets/css/materialdesignicons.min.css" rel="stylesheet">
        
        <!-- Bootstrap -->
        <link href="<?php echo base_url(); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
        
        <!-- Rev slider css -->
        <link href="<?php echo base_url(); ?>/assets/vendors/revolution/css/settings.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>/assets/vendors/revolution/css/layers.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>/assets/vendors/revolution/css/navigation.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>/assets/vendors/animate-css/animate.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>/assets/vendors/owl-carousel/assets/owl.carousel.min.css" rel="stylesheet">
        
        <!-- Extra plugin css -->
        <link href="<?php echo base_url(); ?>/assets/css/style.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>/assets/css/responsive.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class='cursor' id="cursor"></div>
	<div class='cursor2' id="cursor2"></div>
	<div class='cursor3' id="cursor3"></div>
       
       
        <!--================Header Area =================-->
        <header class="main_header_area">
            <div class="header_top_area">
                <div class="container">
                    <?php include('header.php'); ?>
                    
                </div>
            </div>
            <div class="main_menu_area">
                <div class="container">
                    <nav class="navbar navbar-default">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>/assets/img/logo.png" alt=""></a>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right">
                                <li>
                                    <a href="<?php echo base_url(); ?>">Home</a>
                                    <!-- <ul class="dropdown-menu">
                                        <li><a href="index.html">Home 01</a></li>
                                        <li><a href="index-2.html">Home 02</a></li>
                                    </ul> -->
                                </li>
                                <li class=" active">
                                    <a href="<?php echo base_url(); ?>projects">Projects</a>
                                    <!-- <ul class="dropdown-menu">
                                        <li><a href="project-full-width.html">Project Full Width</a></li>
                                        <li><a href="project-grid-three-column.html">Project Grid 01</a></li>
                                        <li><a href="project-grid-two-column.html">Project Grid 02</a></li>
                                        <li><a href="project-three-column.html">Project Grid 03</a></li>
                                        <li><a href="<?php echo base_url(); ?>project">Single Project</a></li>
                                    </ul> -->
                                </li>
                                <li><a href="<?php echo base_url(); ?>products">Products</a></li>
                                <li><a href="<?php echo base_url(); ?>about">About Us</a></li>
                                <!-- <li><a href="blog-details.html">blog</a></li> -->
                                <li><a href="<?php echo base_url(); ?>contact">Contact</a></li>
                                <!-- <li class="icon_search"><a href="#"><i class="mdi mdi-cart"></i></a></li> -->
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </nav>
                </div>
            </div>
        </header>
        <!--================Header Area =================-->
        
        <!--================Banner Area =================-->
        <section class="banner_area">
            <div class="container">
                <div class="banner_inner_text">
                    <h4>Projects</h4>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li class="active"><a href="#">Projects</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <!--================End Banner Area =================-->
        
        <!--================Our Project2 Area =================-->
        <section class="our_project2_area project_grid_three">
           <div class="container">
               <div class="main_c_b_title">
                    <h2>Our<br class="title_br">Projects</h2>
                    <h6>Great & Awesome Works</h6>
                </div>
                <ul class="our_project_filter">
                    <li class="active" data-filter="*"><a href="#">All</a></li>
                <li data-filter=".IT"><a href="#">IT Sector</a></li>
                <li data-filter=".Cyber"><a href="#">  Cyber City Tower’s</a></li>
                <li data-filter=".SEZ"><a href="#">  SEZ Towers</a></li>
                <li data-filter=".Residential"><a href="#">  Residential Townships</a></li>
                <li data-filter=".Commercial"><a href="#">  Commercial Complex’s</a></li>
                <li data-filter=".Shopping"><a href="#">  Shopping Malls & Multiplex</a></li>
                <li data-filter=".Schools"><a href="#">  Schools</a></li>
                <li data-filter=".Club"><a href="#">  Club Houses</a></li>
                <li data-filter=".Bio"><a href="#">  Bio-gas Plants & Sub-station Water Tanks</a></li>
                <li data-filter=".Industrial"><a href="#">  Industrial Undertakings</a></li>
                <li data-filter=".Swimming"><a href="#">  Swimming Pools & Water Bodies</a></li>
                <li data-filter=".Roof"><a href="#">  Roof Gardens & Roof Tennis Courts</a></li>
                <li data-filter=".Hospitals"><a href="#">  Hospitals</a></li>
                
                </ul>
                <div class="row our_project_details">
                    <div class="col-md-4 col-sm-6 building isolation interior">
                        <div class="project_item">
                            <img src="<?php echo base_url(); ?>/assets/img/project/project-grid-three/project-g-three-1.jpg" alt="">
                            <div class="project_hover">
                                <div class="project_hover_inner">
                                    <div class="project_hover_content">
                                        <a href="#"><h4>Magarpatta Township Development & Construction Company Ltd.</h4></a>
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusan-tium doloremque laudantium</p>
                                        <a class="view_btn" href="<?php echo base_url(); ?>project">View Project</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 building isolation tiling design">
                        <div class="project_item">
                            <img src="<?php echo base_url(); ?>/assets/img/project/project-grid-three/project-g-three-2.jpg" alt="">
                            <div class="project_hover">
                                <div class="project_hover_inner">
                                    <div class="project_hover_content">
                                        <a href="#"><h4>Magarpatta SEZ.</h4></a>
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusan-tium doloremque laudantium</p>
                                        <a class="view_btn" href="<?php echo base_url(); ?>project">View Project</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 isolation tiling interior design plumbing">
                        <div class="project_item">
                            <img src="<?php echo base_url(); ?>/assets/img/project/project-grid-three/project-g-three-3.jpg" alt="">
                            <div class="project_hover">
                                <div class="project_hover_inner">
                                    <div class="project_hover_content">
                                        <a href="#"><h4>Shapoorji Pallonji & Company Pvt. Ltd. (SP Infocity)</h4></a>
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusan-tium doloremque laudantium</p>
                                        <a class="view_btn" href="<?php echo base_url(); ?>project">View Project</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 building isolation tiling plumbing">
                        <div class="project_item">
                            <img src="<?php echo base_url(); ?>/assets/img/project/project-grid-three/project-g-three-4.jpg" alt="">
                            <div class="project_hover">
                                <div class="project_hover_inner">
                                    <div class="project_hover_content">
                                        <a href="#"><h4>The Manjri Stud Farm Pvt. Ltd.</h4></a>
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusan-tium doloremque laudantium</p>
                                        <a class="view_btn" href="<?php echo base_url(); ?>project">View Project</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 isolation tiling interior plumbing">
                        <div class="project_item">
                            <img src="<?php echo base_url(); ?>/assets/img/project/project-grid-three/project-g-three-5.jpg" alt="">
                            <div class="project_hover">
                                <div class="project_hover_inner">
                                    <div class="project_hover_content">
                                        <a href="#"><h4>Amanora Park Town (City Corporation Limited)</h4></a>
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusan-tium doloremque laudantium</p>
                                        <a class="view_btn" href="<?php echo base_url(); ?>project">View Project</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 building isolation tiling design plumbing">
                        <div class="project_item">
                            <img src="<?php echo base_url(); ?>/assets/img/project/project-grid-three/project-g-three-6.jpg" alt="">
                            <div class="project_hover">
                                <div class="project_hover_inner">
                                    <div class="project_hover_content">
                                        <a href="#"><h4>Yazaki India Ltd.</h4></a>
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusan-tium doloremque laudantium</p>
                                        <a class="view_btn" href="<?php echo base_url(); ?>project">View Project</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 building isolation tiling plumbing">
                        <div class="project_item">
                            <img src="<?php echo base_url(); ?>/assets/img/project/project-grid-three/project-g-three-7.jpg" alt="">
                            <div class="project_hover">
                                <div class="project_hover_inner">
                                    <div class="project_hover_content">
                                        <a href="#"><h4>RCF Industries, Poinad, Raigad</h4></a>
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusan-tium doloremque laudantium</p>
                                        <a class="view_btn" href="<?php echo base_url(); ?>project">View Project</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 isolation tiling interior plumbing">
                        <div class="project_item">
                            <img src="<?php echo base_url(); ?>/assets/img/project/project-grid-three/project-g-three-8.jpg" alt="">
                            <div class="project_hover">
                                <div class="project_hover_inner">
                                    <div class="project_hover_content">
                                        <a href="#"><h4>Desarch Pentacle Private Limited</h4></a>
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusan-tium doloremque laudantium</p>
                                        <a class="view_btn" href="<?php echo base_url(); ?>project">View Project</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 building isolation tiling design plumbing">
                        <div class="project_item">
                            <img src="<?php echo base_url(); ?>/assets/img/project/project-grid-three/project-g-three-9.jpg" alt="">
                            <div class="project_hover">
                                <div class="project_hover_inner">
                                    <div class="project_hover_content">
                                        <a href="#"><h4>Nanded City Development & Construction Co. Ltd.</h4></a>
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusan-tium doloremque laudantium</p>
                                        <a class="view_btn" href="<?php echo base_url(); ?>project">View Project</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 building isolation tiling design plumbing">
                        <div class="project_item">
                            <img src="<?php echo base_url(); ?>/assets/img/project/project-grid-three/benchmark_engineers.jpg" alt="">
                            <div class="project_hover">
                                <div class="project_hover_inner">
                                    <div class="project_hover_content">
                                        <a href="#"><h4>
                                              Benchmark Engineers Pvt. Ltd.</h4></a>
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusan-tium doloremque laudantium</p>
                                        <a class="view_btn" href="<?php echo base_url(); ?>project">View Project</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 building isolation tiling design plumbing">
                        <div class="project_item">
                            <img src="<?php echo base_url(); ?>/assets/img/project/project-grid-three/peag.jpg" alt="">
                            <div class="project_hover">
                                <div class="project_hover_inner">
                                    <div class="project_hover_content">
                                        <a href="#"><h4>
                                              Pegasus Properties Pvt. Ltd.</h4></a>
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusan-tium doloremque laudantium</p>
                                        <a class="view_btn" href="<?php echo base_url(); ?>project">View Project</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 building isolation tiling design plumbing">
                        <div class="project_item">
                            <img src="<?php echo base_url(); ?>/assets/img/project/project-grid-three/kumar_propoerties_pune.jpg" alt="">
                            <div class="project_hover">
                                <div class="project_hover_inner">
                                    <div class="project_hover_content">
                                        <a href="#"><h4>Kumar Properties Pune.</h4></a>
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusan-tium doloremque laudantium</p>
                                        <a class="view_btn" href="<?php echo base_url(); ?>project">View Project</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 building isolation tiling design plumbing">
                        <div class="project_item">
                            <img src="<?php echo base_url(); ?>/assets/img/project/project-grid-three/royal_properties_india.jpg" alt="">
                            <div class="project_hover">
                                <div class="project_hover_inner">
                                    <div class="project_hover_content">
                                        <a href="#"><h4>
                                              Royal Properties India</h4></a>
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusan-tium doloremque laudantium</p>
                                        <a class="view_btn" href="<?php echo base_url(); ?>project">View Project</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 building isolation tiling design plumbing">
                        <div class="project_item">
                            <img src="<?php echo base_url(); ?>/assets/img/project/project-grid-three/maloji_sons.jpg" alt="">
                            <div class="project_hover">
                                <div class="project_hover_inner">
                                    <div class="project_hover_content">
                                        <a href="#"><h4>
                                              Maloji & Son’s</h4></a>
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusan-tium doloremque laudantium</p>
                                        <a class="view_btn" href="<?php echo base_url(); ?>project">View Project</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 building isolation tiling design plumbing">
                        <div class="project_item">
                            <img src="<?php echo base_url(); ?>/assets/img/project/project-grid-three/pawar_public_school.jpg" alt="">
                            <div class="project_hover">
                                <div class="project_hover_inner">
                                    <div class="project_hover_content">
                                        <a href="#"><h4>
                                              Pawar Public School</h4></a>
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusan-tium doloremque laudantium</p>
                                        <a class="view_btn" href="<?php echo base_url(); ?>project">View Project</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 building isolation tiling design plumbing">
                        <div class="project_item">
                            <img src="<?php echo base_url(); ?>/assets/img/project/project-grid-three/l_t_sahara.jpg" alt="">
                            <div class="project_hover">
                                <div class="project_hover_inner">
                                    <div class="project_hover_content">
                                        <a href="#"><h4>
                                              L & T (Sahara International Airport, Mumbai)</h4></a>
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusan-tium doloremque laudantium</p>
                                        <a class="view_btn" href="<?php echo base_url(); ?>project">View Project</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
           </div>
        </section>
        <!--================End Our Project2 Area =================-->
        
        <!--================Get Quote Area =================-->
        <section class="get_quote_area yellow_get_quote">
            <div class="container">
                <div class="pull-left">
                    <h4>Looking for a quality and affordable Waterproofing solution?</h4>
                </div>
                <div class="pull-right">
                    <a class="get_btn_black" href="<?php echo base_url(); ?>contact">GET A QUOTE</a>
                </div>
            </div>
        </section>
        <!--================End Get Quote Area =================-->

        <!--================Clients Area =================-->
        <section class="clients_area">
            <div class="container">
                <div class="clients_slider owl-carousel">
                    <div class="item">
                        <img src="<?php echo base_url(); ?>/assets/img/clients/amanora-park-town-logo.png" alt="">
                    </div>
                    <div class="item">
                        <img src="<?php echo base_url(); ?>/assets/img/clients/nandedcity-dev-and-con-logo.png" alt="">
                    </div>
                    <div class="item">
                        <img src="<?php echo base_url(); ?>/assets/img/clients/desacrh-pentacle.png" alt="">
                    </div>
                    <div class="item">
                        <img src="<?php echo base_url(); ?>/assets/img/clients/kp-new-logo.png" alt="">
                    </div>
                    <div class="item">
                        <img src="<?php echo base_url(); ?>/assets/img/clients/Magarpatta Township Development & Constructionp.png" alt="">
                    </div>
                    <div class="item">
                        <img src="<?php echo base_url(); ?>/assets/img/clients/megapolis-new-logo.png" alt="">
                    </div>
                    <div class="item">
                        <img src="<?php echo base_url(); ?>/assets/img/clients/pps.png" alt="">
                    </div>
                    <div class="item">
                        <img src="<?php echo base_url(); ?>/assets/img/clients/RCF.png" alt="">
                    </div>
                    <div class="item">
                        <img src="<?php echo base_url(); ?>/assets/img/clients/Royal_Properties.png" alt="">
                    </div>
                    <div class="item">
                        <img src="<?php echo base_url(); ?>/assets/img/clients/Shapoorji_Pallonji_Group_logo.png" alt="">
                    </div>
                    <div class="item">
                        <img src="<?php echo base_url(); ?>/assets/img/clients/The Manjri Stud Farm.png" alt="">
                    </div>
                    <div class="item">
                        <img src="<?php echo base_url(); ?>/assets/img/clients/Yazaki.png" alt="">
                    </div>
                    
                </div>
            </div>
        </section>
        <!--================End Clients Area =================-->
        
        <?php  include('footer.php'); ?>
        
    
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="<?php echo base_url(); ?>/assets/js/jquery-2.2.4.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="<?php echo base_url(); ?>/assets/js/bootstrap.min.js"></script>
        <!-- Rev slider js -->
        <script src="<?php echo base_url(); ?>/assets/vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="<?php echo base_url(); ?>/assets/vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
        <script src="<?php echo base_url(); ?>/assets/vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
        <script src="<?php echo base_url(); ?>/assets/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
        <script src="<?php echo base_url(); ?>/assets/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
        <script src="<?php echo base_url(); ?>/assets/vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
        
        <script src="<?php echo base_url(); ?>/assets/vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="<?php echo base_url(); ?>/assets/vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="<?php echo base_url(); ?>/assets/vendors/isotope/isotope.pkgd.min.js"></script>
        <script src="<?php echo base_url(); ?>/assets/vendors/magnific-popup/jquery.magnific-popup.min.js"></script>
        <script src="<?php echo base_url(); ?>/assets/vendors/counterup/waypoints.min.js"></script>
        <script src="<?php echo base_url(); ?>/assets/vendors/counterup/jquery.counterup.min.js"></script>
        <script src="<?php echo base_url(); ?>/assets/vendors/flex-slider/jquery.flexslider-min.js"></script>
        
        <!--gmaps Js-->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
        <script src="<?php echo base_url(); ?>/assets/js/gmaps.min.js"></script>
        
        <script src="<?php echo base_url(); ?>/assets/js/theme.js"></script>
    </body>
</html>