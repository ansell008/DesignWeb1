<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>Pages - Admin Dashboard UI Kit - Blank Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
    <link rel="apple-touch-icon" href="template/pages/ico/60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="template/pages/ico/76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="template/pages/ico/120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="template/pages/ico/152.png">
    <link rel="icon" type="image/x-icon" href="template/favicon.ico" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <link href="<?= base_url() ?>template/assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>template/assets/plugins/bootstrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>template/assets/plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="<?= base_url() ?>template/assets/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="<?= base_url() ?>template/assets/plugins/switchery/css/switchery.min.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="<?= base_url() ?>template/pages/css/pages-icons.css" rel="stylesheet" type="text/css">
    <link class="main-stylesheet" href="<?= base_url() ?>template/pages/css/pages.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Actor&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- or the reference on CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
    <!--[if lte IE 9]>
	<link href="assets/plugins/codrops-dialogFx/dialog.ie.css" rel="stylesheet" type="text/css" media="screen" />
  <![endif]-->
  <style>
    .carousel {
      background: #EEE;
    }

    .carousel-cell {
      width: 100%;
      height: 500px;
      margin-right: 10px;
      border-radius: 5px;
      counter-increment: carousel-cell;
    }

    /* cell number */
    .carousel-cell:before {
      display: block;
      text-align: center;
      line-height: 200px;
      font-size: 80px;
      color: white;
    }

    /* position dots up a bit */
    .flickity-page-dots {
      bottom: -22px;
    }
    /* dots are lines */
    .flickity-page-dots .dot {
      height: 4px;
      width: 40px;
      margin: 0;
      border-radius: 0;
    }

    .img-round{border-radius: 50%;}

    .panel:hover{
      background-color: white;
      box-shadow: 5px 5px 20px #888888;
      transition: ease 1s;
    }

    .panel{border-radius: 15px;}

    *{
      font-family: 'Actor', sans-serif !important;
    }
  </style>
  </head>
  <body class="fixed-header ">
    <!-- START PAGE-CONTAINER -->
    <div class="page-container" style="padding-left: 0px;">
      <!-- START HEADER -->
      <div class="header">
        <!-- START MOBILE CONTROLS -->
        <div class="container-fluid relative">
          <!-- LEFT SIDE -->
          <div class="pull-left full-height visible-sm visible-xs">
            <!-- START ACTION BAR -->
            <div class="header-inner">
              <a href="#" class="btn-link toggle-sidebar visible-sm-inline-block visible-xs-inline-block padding-5" data-toggle="sidebar">
                <span class="icon-set menu-hambuger"></span>
              </a>
            </div>
            <!-- END ACTION BAR -->
          </div>
          <div class="pull-center hidden-md hidden-lg">
            <div class="header-inner">
              <div class="brand inline">
                <img src="assets/img/logo.png" alt="logo" data-src="assets/img/logo.png" data-src-retina="assets/img/logo_2x.png" width="78" height="22">
              </div>
            </div>
          </div>
          <!-- RIGHT SIDE -->
          <div class="pull-right full-height visible-sm visible-xs">
            <!-- START ACTION BAR -->
            <div class="header-inner">
              <a href="#" class="btn-link visible-sm-inline-block visible-xs-inline-block" data-toggle="quickview" data-toggle-element="#quickview">
                <span class="icon-set menu-hambuger-plus"></span>
              </a>
            </div>
            <!-- END ACTION BAR -->
          </div>
        </div>
        <!-- END MOBILE CONTROLS -->
        <div class="container">
          <div class="pull-left sm-table hidden-xs hidden-sm">
            <div class="header-inner">
              <div class="brand inline" style="text-align: start;">
                <img src="logo.png" alt="logo" data-src="<?= base_url() ?>img/logo.png" data-src-retina="<?= base_url() ?>img/logo.png" width="100px">
              </div>
              <ul class="notification-list no-margin hidden-sm hidden-xs no-style p-r-20">
                <li class="p-r-50 inline">
                  <a href="#home">Home</a>
                </li>
                <li class="p-r-50 inline">
                  <a href="#products">Products</a>
                </li>
                <li class="p-r-50 inline">
                  <a href="#services">Services</a>
                </li>
                <li class="p-r-50 inline">
                  <a href="#careers">Career</a>
                </li>
                <li class="p-r-50 inline">
                  <a href="#contacts">Contact Us</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="pull-right sm-table hidden-sm hidden-xs">
            <div class="header-inner">
              <button class="btn btn-success text-white btn-rounded btn-lg" data-target="#modalFillIn" data-toggle="modal" id="btnFillSizeToggler2">Free Concultacy</button>
            </div>
          </div>
        </div>
        
      </div>
      <!-- END HEADER -->
      <!-- START PAGE CONTENT WRAPPER -->
      <div class="page-content-wrapper ">
        
        <!-- START PAGE CONTENT -->
        <div class="content ">
          <!-- START CONTAINER FLUID -->
          <div class="container-fluid container-fixed-lg" id="home">
            <!-- BEGIN PlACE PAGE CONTENT HERE -->
            <div class="carousel m-t-30" data-flickity>
              <div class="carousel-cell">
                <img src="logo.png" alt="">
              </div>
              <div class="carousel-cell"></div>
              <div class="carousel-cell"></div>
              <div class="carousel-cell"></div>
              <div class="carousel-cell"></div>
            </div>
            <!-- END PLACE PAGE CONTENT HERE -->
          </div>

          <div id="products"></div>
          <div class="row m-t-100">
            <div class="container-fluid container-fixed-lg text-center">
              <h1 class="bold text-center m-b-100" style="font-size: 35pt;">Our Products</h1>
            </div>
          </div>
          
          <div id="services"></div>
          <div class="row m-t-100">
            <div class="container-fluid container-fixed-lg">
              <h1 class="bold text-center m-b-100" style="font-size: 35pt;">Our Services</h1>
              <div class="col-md-4 col-sm-6 col-xs-6">
                <div class="panel panel-transparent">
                  <div class="panel-heading text-center">
                    <div class="panel-title text-center">
                      <img src="<?= base_url() ?>img/erp.jpg" class="img-round" alt="" width=100px>
                    </div>
                  </div>
                  <div class="panel-body">
                    <h4 class="text-center">
                      <span class="semi-bold">ERP System</span>
                    </h4>
                    <p class="p-l-30 p-r-30 text-center">When it comes to digital design, the lines between functionality, aesthetics, and psychology are inseparably blurred. Without the constraints of the physical world, there’s no natural form to fall back on, and every bit of constraint and affordance must be introduced intentionally. Good design makes a product useful. A product is bought to be used.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-6">
                <div class="panel panel-transparent">
                  <div class="panel-heading text-center">
                    <div class="panel-title">
                      <img src="<?= base_url() ?>img/pos_system.jpg" class="img-round" alt="" width=100px>
                    </div>
                  </div>
                  <div class="panel-body text-center">
                    <h4 class="text-center">
                      <span class="semi-bold">POS System</span>
                    </h4>
                    <p class="p-l-30 p-r-30">When it comes to digital design, the lines between functionality, aesthetics, and psychology are inseparably blurred. Without the constraints of the physical world, there’s no natural form to fall back on, and every bit of constraint and affordance must be introduced intentionally. Good design makes a product useful. A product is bought to be used.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-6">
                <div class="panel panel-transparent">
                  <div class="panel-heading text-center">
                    <div class="panel-title">
                      <img src="<?= base_url() ?>img/human_resource.jpg" class="img-round" alt="" width=100px>
                    </div>
                  </div>
                  <div class="panel-body text-center">
                    <h4 class="text-center">
                      <span class="semi-bold">Human Resources</span>
                    </h4>
                    <p class="p-l-30 p-r-30">When it comes to digital design, the lines between functionality, aesthetics, and psychology are inseparably blurred. Without the constraints of the physical world, there’s no natural form to fall back on, and every bit of constraint and affordance must be introduced intentionally. Good design makes a product useful. A product is bought to be used.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-6">
                <div class="panel panel-transparent">
                  <div class="panel-heading text-center">
                    <div class="panel-title">
                      <img src="<?= base_url() ?>img/trading.jpg" class="img-round" alt="" width=100px>
                    </div>
                  </div>
                  <div class="panel-body text-center">
                    <h4 class="text-center">
                      <span class="semi-bold">Trading System</span>
                    </h4>
                    <p class="p-l-30 p-r-30">When it comes to digital design, the lines between functionality, aesthetics, and psychology are inseparably blurred. Without the constraints of the physical world, there’s no natural form to fall back on, and every bit of constraint and affordance must be introduced intentionally. Good design makes a product useful. A product is bought to be used.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-6">
                <div class="panel panel-transparent">
                  <div class="panel-heading text-center">
                    <div class="panel-title">
                      <img src="<?= base_url() ?>img/shipping.jpg" class="img-round" alt="" width=100px>
                    </div>
                  </div>
                  <div class="panel-body text-center">
                    <h4 class="text-center">
                      <span class="semi-bold">Shipping and Logistic System</span>
                    </h4>
                    <p class="p-l-30 p-r-30">When it comes to digital design, the lines between functionality, aesthetics, and psychology are inseparably blurred. Without the constraints of the physical world, there’s no natural form to fall back on, and every bit of constraint and affordance must be introduced intentionally. Good design makes a product useful. A product is bought to be used.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-6">
                <div class="panel panel-transparent">
                  <div class="panel-heading text-center">
                    <div class="panel-title">
                      <img src="<?= base_url() ?>img/tickets.jpg" class="img-round" alt="" width=100px>
                    </div>
                  </div>
                  <div class="panel-body text-center">
                    <h4 class="text-center">
                      <span class="semi-bold">Ticketing and Sport System</span>
                    </h4>
                    <p class="p-l-30 p-r-30">When it comes to digital design, the lines between functionality, aesthetics, and psychology are inseparably blurred. Without the constraints of the physical world, there’s no natural form to fall back on, and every bit of constraint and affordance must be introduced intentionally. Good design makes a product useful. A product is bought to be used.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- 
            ERP SYSTEM, 
            HUMAN RESOURCE SYSTEM, 
            POS SYSTEM, 
            SHIPPING AND LOGICTIC SYSTEM MANAGEMENT, 
            TICKETING AND SPORT CLUB SYSTEM MANAGEMENT ETC, 
            TRADING AND DISTRIBUTION SYSTEM MANAGEMENT
           -->
          <div id="careers"></div>
          <div class="row m-t-100">
            <div class="container-fluid container-fixed-lg text-center">
              <h1 class="bold text-center m-b-100" style="font-size: 35pt;">Career</h1>
              <div class="timeline-container top-circle">
                <section class="timeline">
                  <div class="timeline-block">
                    <div class="timeline-point success">
                      <i class="pg-map"></i>
                    </div>
                    <!-- timeline-point -->
                    <div class="timeline-content">
                      <div class="card share full-width">
                        <div class="circle" data-toggle="tooltip" title="Label" data-container="body">
                        </div>
                        <div class="card-header clearfix">
                          <div class="user-pic">
                            <img alt="Profile Image" width="33" height="33" data-src-retina="template/assets/img/profiles/8x.jpg" data-src="template/assets/img/profiles/8.jpg" src="template/assets/img/profiles/8x.jpg">
                          </div>
                          <h5>Jeff Curtis</h5>
                          <h6>Shared a Tweet
                                  <span class="location semi-bold"><i class="fa fa-map-marker"></i> SF, California</span>
                              </h6>
                        </div>
                        <div class="card-description">
                          <p>What you think, you become. What you feel, you attract. What you imagine, you create - Buddha. <a href="#">#quote</a> </p>
                          <div class="via">via Twitter</div>
                        </div>
                      </div>
                      <div class="event-date">
                        <h6 class="font-montserrat all-caps hint-text m-t-0">Apple Inc</h6>
                        <small class="fs-12 hint-text">15 January 2015, 06:50 PM</small>
                      </div>
                    </div>
                    <!-- timeline-content -->
                  </div>
                  <!-- timeline-block -->
                  <div class="timeline-block">
                    <div class="timeline-point small">
                    </div>
                    <!-- timeline-point -->
                    <div class="timeline-content">
                      <div class="card share full-width">
                        <div class="circle" data-toggle="tooltip" title="Label" data-container="body">
                        </div>
                        <div class="card-header clearfix">
                          <div class="user-pic">
                            <img alt="Profile Image" width="33" height="33" data-src-retina="template/assets/img/profiles/5x.jpg" data-src="template/assets/img/profiles/5.jpg" src="template/assets/img/profiles/5x.jpg">
                          </div>
                          <h5>Shannon Williams</h5>
                          <h6>Shared a photo
                                  <span class="location semi-bold"><i class="fa fa-map-marker"></i> NYC, New York</span>
                              </h6>
                        </div>
                        <div class="card-description">
                          <p>Inspired by : good design is obvious, great design is transparent</p>
                          <div class="via">via themeforest</div>
                        </div>
                        <div class="card-content">
                          <ul class="buttons ">
                            <li>
                              <a href="#"><i class="fa fa-expand"></i>
                                      </a>
                            </li>
                            <li>
                              <a href="#"><i class="fa fa-heart-o"></i>
                                      </a>
                            </li>
                          </ul>
                          <img alt="Social post" src="template/ssets/img/social-post-image.png">
                        </div>
                        <div class="card-footer clearfix">
                          <div class="time">few seconds ago</div>
                          <ul class="reactions">
                            <li><a href="#">5,345 <i class="fa fa-comment-o"></i></a>
                            </li>
                            <li><a href="#">23K <i class="fa fa-heart-o"></i></a>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div class="event-date">
                        <small class="fs-12 hint-text">15 January 2015, 06:50 PM</small>
                      </div>
                    </div>
                    <!-- timeline-content -->
                  </div>
                  <!-- timeline-block -->
                  <div class="timeline-block">
                    <div class="timeline-point warning">
                      <i class="pg-social"></i>
                    </div>
                    <!-- timeline-point -->
                    <div class="timeline-content">
                      <div class="card share full-width ">
                        <div class="card-header clearfix">
                          <h5 class="text-warning-dark pull-left fs-12">Stock Market <i class="fa fa-circle text-warning-dark fs-11"></i></h5>
                          <div class="pull-right small hint-text">
                            5,345 <i class="fa fa-comment-o"></i>
                          </div>
                          <div class="clearfix"></div>
                        </div>
                        <div class="card-description">
                          <h5 class='hint-text no-margin'>Apple Inc.</h5>
                          <h5 class="small hint-text no-margin">NASDAQ: AAPL - Nov 13 8:37 AM ET</h5>
                          <h3>111.25 <span class="text-warning-dark"><i class="fa fa-sort-up small text-warning-dark"></i> 0.15 (0.13%)</span></h3>
                        </div>
                        <div class="card-footer clearfix">
                          <div class="pull-left">by <span class="text-warning-dark">John Smith</span></div>
                          <div class="pull-right hint-text">
                            Apr 23
                          </div>
                          <div class="clearfix"></div>
                        </div>
                      </div>
                      <div class="event-date">
                        <h6 class="font-montserrat all-caps hint-text m-t-0">Shared</h6>
                        <small class="fs-12 hint-text">15 January 2015, 06:50 PM</small>
                      </div>
                    </div>
                    <!-- timeline-content -->
                  </div>
                  <!-- timeline-block -->
                  <div class="timeline-block">
                    <div class="timeline-point small">
                    </div>
                    <!-- timeline-point -->
                    <div class="timeline-content">
                      <div class="card share full-width ">
                        <div class="circle" data-toggle="tooltip" title="Label" data-container="body">
                        </div>
                        <div class="card-header clearfix">
                          <div class="user-pic">
                            <img alt="Profile Image" width="33" height="33" data-src-retina="template/assets/img/profiles/6x.jpg" data-src="template/assets/img/profiles/6.jpg" src="template/assets/img/profiles/6x.jpg">
                          </div>
                          <h5>Nathaniel Hamilton</h5>
                          <h6>Shared a Tweet
                                  <span class="location semi-bold"><i class="icon-map"></i>  NYC, New York</span>
                              </h6>
                        </div>
                        <div class="card-description">
                          <p>Testing can show the presense of bugs, but not their absence.</p>
                          <div class="via">via Twitter</div>
                        </div>
                      </div>
                      <div class="event-date">
                        <small class="fs-12 hint-text">15 January 2015, 06:50 PM</small>
                      </div>
                    </div>
                    <!-- timeline-content -->
                  </div>
                  <!-- timeline-block -->
                  <div class="timeline-block">
                    <div class="timeline-point small">
                    </div>
                    <!-- timeline-point -->
                    <div class="timeline-content">
                      <div class="card share full-width">
                        <div class="circle" data-toggle="tooltip" title="Label" data-container="body">
                        </div>
                        <div class="card-header clearfix">
                          <div class="user-pic">
                            <img alt="Profile Image" width="33" height="33" data-src-retina="template/assets/img/profiles/4x.jpg" data-src="template/assets/img/profiles/4.jpg" src="template/assets/img/profiles/4x.jpg">
                          </div>
                          <h5>Andy Young</h5>
                          <h6>Updated his status
                                  <span class="location semi-bold"><i class="icon-map"></i> NYC, New York</span>
                              </h6>
                        </div>
                        <div class="card-description">
                          <p>What a lovely day! I think I should go and play outside.</p>
                        </div>
                      </div>
                      <div class="event-date">
                        <small class="fs-12 hint-text">15 January 2015, 06:50 PM</small>
                      </div>
                    </div>
                    <!-- timeline-content -->
                  </div>
                  <!-- timeline-block -->
                </section>
                <!-- timeline -->
              </div>
            </div>
          </div>

          <div class="row m-t-100">
            <div class="container-fluid container-fixed-lg text-center">
              <h1 class="bold text-center m-b-100" style="font-size: 35pt;">Clients</h1>
              <div class="splide p-t-100 p-b-100">
                <div class="splide__track">
                  <ul class="splide__list">
                    <li class="splide__slide"><img src="<?= base_url() ?>logoclient/AML Logo CS5-01 - Mikha Kristian.png" width="300px" alt=""></li>
                    <li class="splide__slide"><img src="<?= base_url() ?>logoclient/bookstore - Mikha Kristian.PNG" width="150px" alt=""></li>
                    <li class="splide__slide"><img src="<?= base_url() ?>logoclient/icon - Mikha Kristian.png" width="100px" alt=""></li>
                    <li class="splide__slide"><img src="<?= base_url() ?>logoclient/inoptic - Mikha Kristian.png" width="300px" alt=""></li>
                    <li class="splide__slide"><img src="<?= base_url() ?>logoclient/logoeraprima - Mikha Kristian.gif" width="300px" alt=""></li>
                    <li class="splide__slide"><img src="<?= base_url() ?>logoclient/logoswi - Mikha Kristian.png" width="100px" alt=""></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <script>
            new Splide( '.splide', {
              type   : 'loop',
              perPage: 3,
              focus  : 'center',
            } ).mount();
          </script>

          <div class="modal fade fill-in in" id="modalFillIn" tabindex="-1" role="dialog" aria-hidden="true" style="display: none; padding-right: 17px;">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
              <i class="pg-close"></i>
            </button>
            <div class="modal-dialog ">
              <div class="modal-content">
                <div class="modal-header" style="text-align:left;">
                  <img src="logo.png" alt="logo" data-src="<?= base_url() ?>img/logo.png" class="m-b-15" data-src-retina="<?= base_url() ?>img/logo.png" width="100px">
                </div>
                <div class="modal-body">
                  <form id="form-personal" role="form" autocomplete="off">
                      <div class="row clearfix">
                          <div class="col-md-6">
                            <div class="form-group form-group-default required">
                              <label>Your Name</label>
                              <input type="text" class="form-control" name="nama" required>
                            </div>
                          </div>
                        <div class="col-md-6">
                          <div class="form-group form-group-default required">
                            <label>Your Email</label>
                            <input type="email" class="form-control" name="email" required>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group form-group-default required">
                            <label>Subject</label>
                            <input type="text" class="form-control" name="subject" required>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="form-group form-group-default required">
                            <label>Your Message</label>
                            <textarea class="form-control" name="message" required style="height:200px;"></textarea>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12 text-right">
                          <button type="submit" class="btn btn-complete btn-cons" name="btnSubmit">Send</button>
                        </div>
                      </div>
                  </form>
                </div>
                <div class="modal-footer">
                </div>
              </div>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
          </div>

          <div class="row m-t-100 p-t-50 p-b-50" id="contacts" style="background-color: #393e46;">
            <div class="container-fluid container-fixed-lg text-white">
              <div class="col-md-4">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.3246967818764!2d112.75552701477532!3d-7.317375294719061!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fb1cbb571ebf%3A0xc51b6f1e5baff32c!2sJl.%20Tenggilis%20Lama%20II%20No.55%2C%20Tenggilis%20Mejoyo%2C%20Kec.%20Tenggilis%20Mejoyo%2C%20Kota%20SBY%2C%20Jawa%20Timur%2060292!5e0!3m2!1sen!2sid!4v1593947778278!5m2!1sen!2sid" width="100%" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
              </div>
              <div class="col-md-4 col-sm-3">
                <h1 class="bold text-white">Alpha Raya Kreasi</h1>
                <table style="font-size: 15pt;">
                  <tr>
                    <td style="width: 15%;">☎</td>
                    <td>031-8498289</td>
                  </tr>
                  <tr>
                    <td><span class="fa fa-phone"></span></td>
                    <td>Tenggilis Lama 2 no 55 <br>Surabaya, Jawa Timur <br>60292</td>
                  </tr>
                  <tr>
                    <td><span class="fa fa-phone"></span></td>
                    <td>halo@alphasolution.id</td>
                  </tr>
                </table>
                
              </div>
              <div class="col-md-4">
                <!--
                  WEB APPLICATION, MOBILE APPLICATION, IT CONSULTANT, SYSTEM MANAGEMENT CONSULTANT, ACCOUNTING CONSULTANT
                 -->
                <h1 class="bold text-white">Services</h1>
                <hr class="hint-text">
                  <ul class="no-style" style="font-size: 15pt; padding-left: 0px;">
                    <li class="m-b-15">Web Application</li>
                    <li class="m-b-15">Mobile Application</li>
                    <li class="m-b-15">IT Consultant</li>
                    <li class="m-b-15">System Management Consultant</li>
                    <li class="m-b-15">Accounting Consultant</li>
                  </ul>
              </div>
            </div>
          </div>
          
          <!-- END CONTAINER FLUID -->

        </div>
        <!-- END PAGE CONTENT -->
        <!-- START COPYRIGHT -->
        <!-- START CONTAINER FLUID -->
        <!-- START CONTAINER FLUID -->
        <div class="container-fluid container-fixed-lg footer">
          <div class="copyright sm-text-center">
            <p class="small no-margin pull-left sm-pull-reset">
              <span class="hint-text">Copyright &copy; 2014 </span>
              <span class="font-montserrat">REVOX</span>.
              <span class="hint-text">All rights reserved. </span>
              <span class="sm-block"><a href="#" class="m-l-10 m-r-10">Terms of use</a> | <a href="#" class="m-l-10">Privacy Policy</a></span>
            </p>
            <p class="small no-margin pull-right sm-pull-reset">
              <a href="#">Hand-crafted</a> <span class="hint-text">&amp; Made with Love ®</span>
            </p>
            <div class="clearfix"></div>
          </div>
        </div>
        <!-- END COPYRIGHT -->
      </div>
      <!-- END PAGE CONTENT WRAPPER -->
    </div>
    <!-- END PAGE CONTAINER -->
    <!-- BEGIN VENDOR JS -->
    <script src="<?= base_url() ?>template/assets/plugins/pace/pace.min.js" type="text/javascript"></script>
    <script src="<?= base_url() ?>template/assets/plugins/jquery/jquery-1.11.1.min.js" type="text/javascript"></script>
    <script src="<?= base_url() ?>template/assets/plugins/modernizr.custom.js" type="text/javascript"></script>
    <script src="<?= base_url() ?>template/assets/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
    <script src="<?= base_url() ?>template/assets/plugins/bootstrapv3/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?= base_url() ?>template/assets/plugins/jquery/jquery-easy.js" type="text/javascript"></script>
    <script src="<?= base_url() ?>template/assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>
    <script src="<?= base_url() ?>template/assets/plugins/jquery-bez/jquery.bez.min.js"></script>
    <script src="<?= base_url() ?>template/assets/plugins/jquery-ios-list/jquery.ioslist.min.js" type="text/javascript"></script>
    <script src="<?= base_url() ?>template/assets/plugins/jquery-actual/jquery.actual.min.js"></script>
    <script src="<?= base_url() ?>template/assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>template/assets/plugins/select2/js/select2.full.min.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>template/assets/plugins/classie/classie.js"></script>
    <script src="<?= base_url() ?>template/assets/plugins/switchery/js/switchery.min.js" type="text/javascript"></script>
    <!-- END VENDOR JS -->
    <!-- BEGIN CORE TEMPLATE JS -->
    <script src="<?= base_url() ?>template/pages/js/pages.min.js"></script>
    <!-- END CORE TEMPLATE JS -->
    <!-- BEGIN PAGE LEVEL JS -->
    <script src="<?= base_url() ?>template/assets/js/scripts.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS -->
  </body>
</html>