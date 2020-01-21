<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>
        <link rel="icon" href="<?php echo base_url(); ?>/assets/img/fav-icon.png" type="image/x-icon" />
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Contact Us | ZAMBRE CONSTROTECH | A professional waterproofing contracting company</title>

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
                                <li class=" submenu ">
                                    <a href="<?php echo base_url(); ?>">Home</a>
                                    <!-- <ul class="dropdown-menu">
                                        <li><a href="index.html">Home 01</a></li>
                                        <li><a href="index-2.html">Home 02</a></li>
                                    </ul> -->
                                </li>
                                <li class=" submenu">
                                    <a href="<?php echo base_url(); ?>projects">Projects</a>
                                    <!-- <ul class="dropdown-menu">
                                        <li><a href="project-full-width.html">Project Full Width</a></li>
                                        <li><a href="project-grid-three-column.html">Project Grid 01</a></li>
                                        <li><a href="project-grid-two-column.html">Project Grid 02</a></li>
                                        <li><a href="project-three-column.html">Project Grid 03</a></li>
                                        <li><a href="project-single.html">Single Project</a></li>
                                    </ul> -->
                                </li>
                                <li><a href="<?php echo base_url(); ?>products">Products</a></li>
                                <li><a href="<?php echo base_url(); ?>about">About Us</a></li>
                                <!-- <li><a href="blog-details.html">blog</a></li> -->
                                <li class="active"><a href="<?php echo base_url(); ?>contact">Contact</a></li>
                                <!-- <li class="icon_search"><a href="#"><i class="mdi mdi-cart"></i></a></li> -->
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </nav>
                </div>
            </div>
        </header>
        <!--================Header Area =================-->
        
        
        
        <!--================Work Area =================-->
        <section class="work_area">
            <div class="container">
                <div class="work_content">
                    <div class="main_c_title">
                        <h2>work <br class="title_br" />with us</h2>
                        <h6>Lets Get Offer</h6>
                    </div>
                    <p>We want to be at top most company in waterproofing- sector. We believe in to give complete satisfaction to our clients.</p>
                    <a class="get_bg_btn open" data-target="#myModal" data-toggle="modal">GET A QUOTE</a>
                </div>
            </div>
        </section>


        <!-- Modal -->
        <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog" >

            <!-- Modal content-->
            <div class="modal-content" style="border-radius:25px !important; box-shadow: 0 0 20px 2px #057cf7;">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title text-info text-center">Submit Details To Get a Quote</h3>
            </div>
            <div class="modal-body">
            <div class="alert alert-warning">
                Fields marked as * are required
            </div>
            <form action="<?php echo base_url(); ?>submit_query" method="POST">
                <div class="form-group">
                    <label for="name">Full Name: <span class="text-danger" >*</span></label>
                    <input type="text" required class="form-control"  name="name" id="name">
                </div>
                <div class="form-group">
                    <label for="email">Email: <span class="text-danger" >*</span></label>
                    <input type="email" required class="form-control" name="email" id="email">
                </div>
                <div class="form-group">
                    <label for="contactno">Contact No: <span class="text-danger" >*</span></label>
                    <input type="number" required max=9999999999 min=1111111111 class="form-control" name="contactno" id="contactno">
                </div>
                <div class="form-group">
                <label for="product"> Product: <span class="text-danger" >*</span></label>
                <select class="form-control" required name="product" id="product">
                    <option value="">Select a Product</option>
                    <?php foreach($products as $product){ ?>
                        <option value="<?php echo $product->Name; ?>"> <?php echo $product->Name; ?> </option>
                    <?php } ?>
                </select>
                </div>
                <div class="form-group">
                    <label for="message">Message:</label>
                    <input type="text" max_length="100"  class="form-control" name="message" id="message">
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary btn-block btn-lg" >Submit</button>
            </div>
            </form>
            </div>

        </div>
        </div>  
            

        <style>

        </style>

        <script>
           
        </script>
        
        <!--================End Work Area =================-->
        
        <?php include('team.php'); ?>
        
        <!--================Address Area =================-->
        <section class="address_area">
            <div class="container">
                <div class="row address_inner">
                    <div class="col-md-3">
                        <div class="media">
                            <div class="media-left">
                                <img src="<?php echo base_url(); ?>/assets/img/icon/place-icon.png" alt="">
                            </div>
                            <div class="media-body">
                                <h4>HEAD OFFICE:</h4>
                                <h5>Shop no 6, amar jyoti apartment , Pune Solapur road, hadpasar Pune 411028</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="media">
                            <div class="media-left">
                                <img src="<?php echo base_url(); ?>/assets/img/icon/place-icon.png" alt="">
                            </div>
                            <div class="media-body">
                                <h4>BRANCH:</h4>
                                <h5>Shop No.10, Kamaldeep Park, Kondhwa Khurd, Near Sheetal Petrol Pump, Pune - 411048</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="media">
                            <div class="media-left">
                                <img src="<?php echo base_url(); ?>/assets/img/icon/phone-icon.png" alt="">
                            </div>
                            <div class="media-body">
                                <h5>(+91) 76448 34444</h5>
                                <h5>(+91) 98239 92387</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="media">
                            <div class="media-left">
                                <img src="<?php echo base_url(); ?>/assets/img/icon/inbox-icon.png" alt="">
                            </div>
                            <div class="media-body" style="color:#eee;" >
                                
                                <h6>info@zcpl.co.in</h6>
                                <h6>service@zcpl.co.in</h6>
                                <h6>sales@zcpl.co.in</h6>
                                <h6>Billing@zcpl.co.in</h6>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        <!--================End Address Area =================-->
        
        
        
        <!--================Map Area =================-->
        <div><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2171.3580781327482!2d73.92289534598852!3d18.503484628376977!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2c1f018421715%3A0x4bccede428e44fd8!2sAmar%20Jyoti!5e0!3m2!1sen!2sin!4v1578312919397!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe></div>
        <!--================End Map Area =================-->
        
        

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
