<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>Pages - Admin Dashboard UI Kit - Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
    <link rel="apple-touch-icon" href="pages/ico/60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="pages/ico/76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="pages/ico/120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="pages/ico/152.png">
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <link href="assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/bootstrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="assets/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="assets/plugins/switchery/css/switchery.min.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="assets/plugins/nvd3/nv.d3.min.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="assets/plugins/mapplic/css/mapplic.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/rickshaw/rickshaw.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/bootstrap-datepicker/css/datepicker3.css" rel="stylesheet" type="text/css" media="screen">
    <link href="assets/plugins/jquery-metrojs/MetroJs.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="pages/css/pages-icons.css" rel="stylesheet" type="text/css">
    <link class="main-stylesheet" href="pages/css/pages.css" rel="stylesheet" type="text/css" />
    <!--[if lte IE 9]>
	<link href="assets/plugins/codrops-dialogFx/dialog.ie.css" rel="stylesheet" type="text/css" media="screen" />
	<![endif]-->
  </head>
  <body class="fixed-header dashboard">
    <!-- BEGIN SIDEBPANEL-->
    <nav class="page-sidebar" data-pages="sidebar">
      <!-- BEGIN SIDEBAR MENU TOP TRAY CONTENT-->
      <div class="sidebar-overlay-slide from-top" id="appMenu">
        <div class="row">
          <div class="col-xs-6 no-padding">
            <a href="#" class="p-l-40"><img src="assets/img/demo/social_app.svg" alt="socail">
            </a>
          </div>
          <div class="col-xs-6 no-padding">
            <a href="#" class="p-l-10"><img src="assets/img/demo/email_app.svg" alt="socail">
            </a>
          </div>
        </div>
        <div class="row">
          <div class="col-xs-6 m-t-20 no-padding">
            <a href="#" class="p-l-40"><img src="assets/img/demo/calendar_app.svg" alt="socail">
            </a>
          </div>
          <div class="col-xs-6 m-t-20 no-padding">
            <a href="#" class="p-l-10"><img src="assets/img/demo/add_more.svg" alt="socail">
            </a>
          </div>
        </div>
      </div>
      <!-- END SIDEBAR MENU TOP TRAY CONTENT-->
      <!-- BEGIN SIDEBAR MENU HEADER-->
      <div class="sidebar-header">
        <img src="assets/img/logo_white.png" alt="logo" class="brand" data-src="assets/img/logo_white.png" data-src-retina="assets/img/logo_white_2x.png" width="78" height="22">
        <div class="sidebar-header-controls">
          <button type="button" class="btn btn-xs sidebar-slide-toggle btn-link m-l-20" data-pages-toggle="#appMenu"><i class="fa fa-angle-down fs-16"></i>
          </button>
          <button type="button" class="btn btn-link visible-lg-inline" data-toggle-pin="sidebar"><i class="fa fs-12"></i>
          </button>
        </div>
      </div>
      <!-- END SIDEBAR MENU HEADER-->
      <!-- START SIDEBAR MENU -->
      <?php include 'include/admin_sidebar.php'; ?>
      <!-- END SIDEBAR MENU -->
    </nav>
    <!-- END SIDEBAR -->
    <!-- END SIDEBPANEL-->
    <!-- START PAGE-CONTAINER -->
    <div class="page-container ">
      <!-- START HEADER -->
      <div class="header ">
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
        <div class=" pull-left sm-table hidden-xs hidden-sm">
          <div class="header-inner">
            <div class="brand inline">
              <img src="assets/img/logo.png" alt="logo" data-src="assets/img/logo.png" data-src-retina="assets/img/logo_2x.png" width="78" height="22">
            </div>
            <!-- START NOTIFICATION LIST -->
            <ul class="notification-list no-margin hidden-sm hidden-xs b-grey b-l b-r no-style p-l-30 p-r-20">
              <li class="p-r-15 inline">
                <div class="dropdown">
                  <a href="javascript:;" id="notification-center" class="icon-set globe-fill" data-toggle="dropdown">
                    <span class="bubble"></span>
                  </a>
                  <!-- START Notification Dropdown -->
                  <div class="dropdown-menu notification-toggle" role="menu" aria-labelledby="notification-center">
                    <!-- START Notification -->
                    <div class="notification-panel">
                      <!-- START Notification Body-->
                      <div class="notification-body scrollable">
                        <!-- START Notification Item-->
                        <div class="notification-item unread clearfix">
                          <!-- START Notification Item-->
                          <div class="heading open">
                            <a href="#" class="text-complete pull-left">
                              <i class="pg-map fs-16 m-r-10"></i>
                              <span class="bold">Carrot Design</span>
                              <span class="fs-12 m-l-10">David Nester</span>
                            </a>
                            <div class="pull-right">
                              <div class="thumbnail-wrapper d16 circular inline m-t-15 m-r-10 toggle-more-details">
                                <div><i class="fa fa-angle-left"></i>
                                </div>
                              </div>
                              <span class=" time">few sec ago</span>
                            </div>
                            <div class="more-details">
                              <div class="more-details-inner">
                                <h5 class="semi-bold fs-16">“Apple’s Motivation - Innovation <br> 
                                                            distinguishes between <br>
                                                            A leader and a follower.”</h5>
                                <p class="small hint-text">
                                  Commented on john Smiths wall.
                                  <br> via pages framework.
                                </p>
                              </div>
                            </div>
                          </div>
                          <!-- END Notification Item-->
                          <!-- START Notification Item Right Side-->
                          <div class="option" data-toggle="tooltip" data-placement="left" title="mark as read">
                            <a href="#" class="mark"></a>
                          </div>
                          <!-- END Notification Item Right Side-->
                        </div>
                        <!-- START Notification Body-->
                        <!-- START Notification Item-->
                        <div class="notification-item  clearfix">
                          <div class="heading">
                            <a href="#" class="text-danger pull-left">
                              <i class="fa fa-exclamation-triangle m-r-10"></i>
                              <span class="bold">98% Server Load</span>
                              <span class="fs-12 m-l-10">Take Action</span>
                            </a>
                            <span class="pull-right time">2 mins ago</span>
                          </div>
                          <!-- START Notification Item Right Side-->
                          <div class="option">
                            <a href="#" class="mark"></a>
                          </div>
                          <!-- END Notification Item Right Side-->
                        </div>
                        <!-- END Notification Item-->
                        <!-- START Notification Item-->
                        <div class="notification-item  clearfix">
                          <div class="heading">
                            <a href="#" class="text-warning-dark pull-left">
                              <i class="fa fa-exclamation-triangle m-r-10"></i>
                              <span class="bold">Warning Notification</span>
                              <span class="fs-12 m-l-10">Buy Now</span>
                            </a>
                            <span class="pull-right time">yesterday</span>
                          </div>
                          <!-- START Notification Item Right Side-->
                          <div class="option">
                            <a href="#" class="mark"></a>
                          </div>
                          <!-- END Notification Item Right Side-->
                        </div>
                        <!-- END Notification Item-->
                        <!-- START Notification Item-->
                        <div class="notification-item unread clearfix">
                          <div class="heading">
                            <div class="thumbnail-wrapper d24 circular b-white m-r-5 b-a b-white m-t-10 m-r-10">
                              <img width="30" height="30" data-src-retina="assets/img/profiles/1x.jpg" data-src="assets/img/profiles/1.jpg" alt="" src="assets/img/profiles/1.jpg">
                            </div>
                            <a href="#" class="text-complete pull-left">
                              <span class="bold">Revox Design Labs</span>
                              <span class="fs-12 m-l-10">Owners</span>
                            </a>
                            <span class="pull-right time">11:00pm</span>
                          </div>
                          <!-- START Notification Item Right Side-->
                          <div class="option" data-toggle="tooltip" data-placement="left" title="mark as read">
                            <a href="#" class="mark"></a>
                          </div>
                          <!-- END Notification Item Right Side-->
                        </div>
                        <!-- END Notification Item-->
                      </div>
                      <!-- END Notification Body-->
                      <!-- START Notification Footer-->
                      <div class="notification-footer text-center">
                        <a href="#" class="">Read all notifications</a>
                        <a data-toggle="refresh" class="portlet-refresh text-black pull-right" href="#">
                          <i class="pg-refresh_new"></i>
                        </a>
                      </div>
                      <!-- START Notification Footer-->
                    </div>
                    <!-- END Notification -->
                  </div>
                  <!-- END Notification Dropdown -->
                </div>
              </li>
              <li class="p-r-15 inline">
                <a href="#" class="icon-set clip "></a>
              </li>
              <li class="p-r-15 inline">
                <a href="#" class="icon-set grid-box"></a>
              </li>
            </ul>
            <!-- END NOTIFICATIONS LIST -->
            <a href="#" class="search-link" data-toggle="search"><i class="pg-search"></i>Type anywhere to <span class="bold">search</span></a> </div>
        </div>
        <div class=" pull-right">
          <div class="header-inner">
            <a href="#" class="btn-link icon-set menu-hambuger-plus m-l-20 sm-no-margin hidden-sm hidden-xs" data-toggle="quickview" data-toggle-element="#quickview"></a>
          </div>
        </div>
        <div class=" pull-right">
          <!-- START User Info-->
          <div class="visible-lg visible-md m-t-10">
            <div class="pull-left p-r-10 p-t-10 fs-16 font-heading">
              <span class="semi-bold">David</span> <span class="text-master">Nest</span>
            </div>
            <div class="dropdown pull-right">
              <button class="profile-dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="thumbnail-wrapper d32 circular inline m-t-5">
                <img src="assets/img/profiles/avatar.jpg" alt="" data-src="assets/img/profiles/avatar.jpg" data-src-retina="assets/img/profiles/avatar_small2x.jpg" width="32" height="32">
            </span>
              </button>
              <ul class="dropdown-menu profile-dropdown" role="menu">
                <li><a href="#"><i class="pg-settings_small"></i> Settings</a>
                </li>
                <li><a href="#"><i class="pg-outdent"></i> Feedback</a>
                </li>
                <li><a href="#"><i class="pg-signals"></i> Help</a>
                </li>
                <li class="bg-master-lighter">
                  <a href="#" class="clearfix">
                    <span class="pull-left">Logout</span>
                    <span class="pull-right"><i class="pg-power"></i></span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <!-- END User Info-->
        </div>
      </div>
      <!-- END HEADER -->
      <!-- START PAGE CONTENT WRAPPER -->
      <div class="page-content-wrapper ">
        <!-- START PAGE CONTENT -->
        <div class="content sm-gutter">
          <!-- START CONTAINER FLUID -->
          <div class="container-fluid padding-25 sm-padding-10">
            <!-- START ROW -->
            <div class="row">
              <div class="col-md-6 col-xlg-5">
                <div class="row">
                  <div class="col-md-12 m-b-10">
                    <div class="ar-3-2 widget-1-wrapper">
                      <!-- START WIDGET widget_imageWidget-->
                      <div class="widget-1 panel no-border bg-complete no-margin widget-loader-circle-lg">
                        <div class="panel-heading top-right ">
                          <div class="panel-controls">
                            <ul>
                              <li><a data-toggle="refresh" class="portlet-refresh text-black" href="#"><i
								class="portlet-icon portlet-icon-refresh-lg-master"></i></a>
                              </li>
                            </ul>
                          </div>
                        </div>
                        <div class="panel-body">
                          <div class="pull-bottom bottom-left bottom-right ">
                            <span class="label font-montserrat fs-11">NEWS</span>
                            <br>
                            <h2 class="text-white">Click anywhere to get Quick Search</h2>
                            <p class="text-white hint-text">Learn More at Project Pages</p>
                            <div class="row stock-rates m-t-15">
                              <div class="company col-xs-4">
                                <div>
                                  <p class="font-montserrat text-success no-margin fs-16">
                                    <i class="fa fa-caret-up"></i> +0.95%
                                    <span class="font-arial text-white fs-12 hint-text m-l-5">546.45</span>
                                  </p>
                                  <p class="bold text-white no-margin fs-11 font-montserrat lh-normal">
                                    AAPL
                                  </p>
                                </div>
                              </div>
                              <div class="company col-xs-4">
                                <div>
                                  <p class="font-montserrat text-danger no-margin fs-16">
                                    <i class="fa fa-caret-up"></i> -0.34%
                                    <span class="font-arial text-white fs-12 hint-text m-l-5">345.34</span>
                                  </p>
                                  <p class="bold text-white no-margin fs-11 font-montserrat lh-normal">
                                    YAHW
                                  </p>
                                </div>
                              </div>
                              <div class="company col-xs-4">
                                <div class="pull-right">
                                  <p class="font-montserrat text-success no-margin fs-16">
                                    <i class="fa fa-caret-up"></i> +0.95%
                                    <span class="font-arial text-white fs-12 hint-text m-l-5">278.87</span>
                                  </p>
                                  <p class="bold text-white no-margin fs-11 font-montserrat lh-normal">
                                    PAGES
                                  </p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- END WIDGET -->
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6 m-b-10">
                    <div class="ar-2-1">
                      <!-- START WIDGET widget_graphTile-->
                      <div class="widget-4 panel no-border  no-margin widget-loader-bar">
                        <div class="container-sm-height full-height">
                          <div class="row-sm-height">
                            <div class="col-sm-height col-top">
                              <div class="panel-heading ">
                                <div class="panel-title text-black hint-text">
                                  <span class="font-montserrat fs-11 all-caps">
	                                  Product revenue <i class="fa fa-chevron-right"></i>
                                  </span>
                                </div>
                                <div class="panel-controls">
                                  <ul>
                                    <li><a href="#" class="portlet-refresh text-black" data-toggle="refresh"><i
										class="portlet-icon portlet-icon-refresh"></i></a>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row-sm-height">
                            <div class="col-sm-height col-top">
                              <div class="p-l-20 p-r-20">
                                <h5 class="no-margin p-b-5 pull-left hint-text">Pages</h5>
                                <p class="pull-right no-margin bold hint-text">2,563</p>
                                <div class="clearfix"></div>
                              </div>
                            </div>
                          </div>
                          <div class="row-sm-height">
                            <div class="col-sm-height col-bottom ">
                              <div class="widget-4-chart line-chart " data-line-color="success" data-area-color="success-light" data-y-grid="false" data-points="false" data-stroke-width="2">
                                <svg></svg>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- END WIDGET -->
                    </div>
                  </div>
                  <div class="col-sm-6 m-b-10">
                    <div class="ar-2-1">
                      <!-- START WIDGET widget_barTile-->
                      <div class="widget-5 panel no-border  widget-loader-bar">
                        <div class="panel-heading pull-top top-right">
                          <div class="panel-controls">
                            <ul>
                              <li><a data-toggle="refresh" class="portlet-refresh text-black" href="#"><i
							class="portlet-icon portlet-icon-refresh"></i></a>
                              </li>
                            </ul>
                          </div>
                        </div>
                        <div class="container-xs-height full-height">
                          <div class="row row-xs-height">
                            <div class="col-xs-5 col-xs-height col-middle relative">
                              <div class="padding-15 top-left bottom-left">
                                <h5 class="hint-text no-margin p-l-10">France, Florence</h5>
                                <p class=" bold font-montserrat p-l-10">2,345,789
                                  <br>USD</p>
                                <p class=" hint-text visible-xlg p-l-10">Today's sales</p>
                              </div>
                            </div>
                            <div class="col-xs-7 col-xs-height col-bottom relative widget-5-chart-container">
                              <div class="widget-5-chart"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- END WIDGET -->
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-xlg-4">
                <div class="row">
                  <div class="col-sm-6 m-b-10">
                    <div class="ar-1-1">
                      <!-- START WIDGET widget_imageWidgetBasic-->
                      <div class="widget-2 panel no-border bg-primary widget widget-loader-circle-lg no-margin">
                        <div class="panel-heading">
                          <div class="panel-controls">
                            <ul>
                              <li><a href="#" class="portlet-refresh" data-toggle="refresh"><i
							class="portlet-icon portlet-icon-refresh-lg-white"></i></a>
                              </li>
                            </ul>
                          </div>
                        </div>
                        <div class="panel-body">
                          <div class="pull-bottom bottom-left bottom-right padding-25">
                            <span class="label font-montserrat fs-11">NEWS</span>
                            <br>
                            <h3 class="text-white">So much more to see at a glance.</h3>
                            <p class="text-white hint-text hidden-md">Learn More at Project Pages</p>
                          </div>
                        </div>
                      </div>
                      <!-- END WIDGET -->
                    </div>
                  </div>
                  <div class="col-sm-6 m-b-10">
                    <div class="ar-1-1">
                      <!-- START WIDGET widget_plainLiveWidget-->
                      <div class="widget-3 panel no-border bg-complete no-margin widget-loader-bar">
                        <div class="panel-body no-padding">
                          <div class="metro live-tile" data-mode="carousel" data-start-now="true" data-delay="3000">
                            <div class="slide-front tiles slide active">
                              <div class="padding-30">
                                <div class="pull-top">
                                  <div class="pull-left visible-lg visible-xlg">
                                    <i class="pg-map"></i>
                                  </div>
                                  <div class="pull-right">
                                    <ul class="list-inline ">
                                      <li>
                                        <a href="#" class="no-decoration"><i class="pg-comment"></i>
                                        </a>
                                      </li>
                                      <li>
                                        <a href="#" class="widget-3-fav no-decoration"><i class="pg-like"></i>
                                        </a>
                                      </li>
                                    </ul>
                                  </div>
                                  <div class="clearfix"></div>
                                </div>
                                <div class="pull-bottom p-b-30">
                                  <p class="p-t-10 fs-12 p-b-5 hint-text">21 Jan</p>
                                  <h3 class="no-margin text-white p-b-10">Carefully
                                <br>designed for a
                                <br>great
                                <span class="semi-bold">experience</span>
                            </h3>
                                </div>
                              </div>
                            </div>
                            <div class="slide-back tiles">
                              <div class="padding-30">
                                <div class="pull-top">
                                  <div class="pull-left visible-lg visible-xlg">
                                    <i class="pg-map"></i>
                                  </div>
                                  <div class="pull-right">
                                    <ul class="list-inline ">
                                      <li>
                                        <a href="#" class="no-decoration"><i class="pg-comment"></i>
                                        </a>
                                      </li>
                                      <li>
                                        <a href="#" class="widget-3-fav no-decoration"><i class="pg-like"></i>
                                        </a>
                                      </li>
                                    </ul>
                                  </div>
                                  <div class="clearfix"></div>
                                </div>
                                <div class="pull-bottom p-b-30">
                                  <p class="p-t-10 fs-12 p-b-5 hint-text">21 Jan</p>
                                  <h3 class="no-margin text-white p-b-10">A whole new
                                <br>
                                <span class="semi-bold">page</span>
                            </h3>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- END WIDGET -->
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6 m-b-10">
                    <div class="ar-1-1">
                      <!-- START WIDGET widget_plainWidget-->
                      <div class="panel no-border bg-master widget widget-6 widget-loader-circle-lg no-margin">
                        <div class="panel-heading">
                          <div class="panel-controls">
                            <ul>
                              <li><a data-toggle="refresh" class="portlet-refresh" href="#"><i class="portlet-icon portlet-icon-refresh-lg-white"></i></a>
                              </li>
                            </ul>
                          </div>
                        </div>
                        <div class="panel-body">
                          <div class="pull-bottom bottom-left bottom-right padding-25">
                            <h1 class="text-white semi-bold">30&#176;</h1>
                            <span class="label font-montserrat fs-11">TODAY</span>
                            <p class="text-white m-t-20">Feels like rainy</p>
                            <p class="text-white hint-text m-t-30">November 2014, 5 Thusday </p>
                          </div>
                        </div>
                      </div>
                      <!-- END WIDGET -->
                    </div>
                  </div>
                  <div class="col-sm-6 m-b-10">
                    <div class="ar-1-1">
                      <!-- START WIDGET D3 widget_graphLiveWidget-->
                      <div class="widget-7 panel no-border bg-success no-margin">
                        <div class="panel-body no-padding">
                          <div class="metro live-tile " data-delay="3500" data-mode="carousel">
                            <div class="slide-front tiles slide active">
                              <div class="padding-30">
                                <div class="pull-bottom p-b-30 bottom-right bottom-left p-l-30 p-r-30">
                                  <h5 class="no-margin semi-bold p-b-5">Apple Inc.</h5>
                                  <p class="no-margin text-black hint-text">NASDAQ : AAPL - NOV 01 8:40 AM ET</p>
                                  <h3 class="semi-bold text-white"><i
									class="fa fa-sort-up small text-white"></i> 0.15 (0.13%)
							</h3>
                                  <p><span class="text-black">Open</span> <span class="m-l-20 hint-text">117.52</span>
                                  </p>
                                </div>
                              </div>
                            </div>
                            <div class="slide-back tiles">
                              <div class="container-sm-height full-height">
                                <div class="row-sm-height">
                                  <div class="col-sm-height padding-25">
                                    <p class="hint-text text-black">Pre-market: 116.850.50 (0.43%)
                                    </p>
                                    <p class="p-t-10 text-black">AAPL - Apple inc.</p>
                                    <div class="p-t-10">
                                      <p class="hint-text inline">+0.42% <span class="m-l-20">217.51</span>
                                      </p>
                                      <div class="inline"><i class="fa fa-sort-up small text-white fs-16 col-bottom"></i>
                                      </div>
                                    </div>
                                    <p class="p-t-10 text-black">GOOG - Google inc.</p>
                                    <div class="p-t-10">
                                      <p class="hint-text inline">+0.22% <span class="m-l-20">-2.28</span>
                                      </p>
                                      <div class="inline"><i class="fa fa-sort-down small text-white fs-16 col-top"></i>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="row-sm-height">
                                  <div class="col-sm-height relative">
                                    <div class='widget-7-chart line-chart' data-line-color="white" data-points="true" data-point-color="white" data-stroke-width="3">
                                      <svg></svg>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- END WIDGET -->
                    </div>
                  </div>
                </div>
              </div>
              <!-- Filler -->
              <div class="visible-xlg col-xlg-3">
                <div class="ar-2-3">
                  <!-- START WIDGET widget_tableWidget-->
                  <div class="widget-11 panel no-border  no-margin widget-loader-bar">
                    <div class="panel-heading ">
                      <div class="panel-title">Today's Table
                      </div>
                      <div class="panel-controls">
                        <ul>
                          <li><a data-toggle="refresh" class="portlet-refresh text-black" href="#"><i
							class="portlet-icon portlet-icon-refresh"></i></a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="p-l-25 p-r-25 p-b-20">
                      <div class="pull-left">
                        <h2 class="text-success no-margin">webarch</h2>
                      </div>
                      <h3 class="pull-right semi-bold"><sup>
				<small class="semi-bold">$</small>
			</sup> 102,967
			</h3>
                      <div class="clearfix"></div>
                    </div>
                    <div class="widget-11-table auto-overflow">
                      <table class="table table-condensed table-hover">
                        <tbody>
                          <tr>
                            <td class="font-montserrat all-caps fs-12">Purchase CODE #2345</td>
                            <td class="text-right">
                              <span class="hint-text small">dewdrops</span>
                            </td>
                            <td class="text-right b-r b-dashed b-grey">
                              <span class="hint-text small">Qty 1</span>
                            </td>
                            <td>
                              <span class="font-montserrat fs-18">$27</span>
                            </td>
                          </tr>
                          <tr>
                            <td class="font-montserrat all-caps fs-12">Purchase CODE #2345</td>
                            <td class="text-right">
                              <span class="hint-text small">johnsmith</span>
                            </td>
                            <td class="text-right b-r b-dashed b-grey">
                              <span class="hint-text small">Qty 1</span>
                            </td>
                            <td>
                              <span class="font-montserrat fs-18 text-primary">$1000</span>
                            </td>
                          </tr>
                          <tr>
                            <td class="font-montserrat all-caps fs-12">Purchase CODE #2345</td>
                            <td class="text-right">
                              <span class="hint-text small">janedrooler</span>
                            </td>
                            <td class="text-right b-r b-dashed b-grey">
                              <span class="hint-text small">Qty 1</span>
                            </td>
                            <td>
                              <span class="font-montserrat fs-18">$27</span>
                            </td>
                          </tr>
                          <tr>
                            <td class="font-montserrat all-caps fs-12">Purchase CODE #2345</td>
                            <td class="text-right">
                              <span class="hint-text small">johnsmith</span>
                            </td>
                            <td class="text-right b-r b-dashed b-grey">
                              <span class="hint-text small">Qty 1</span>
                            </td>
                            <td>
                              <span class="font-montserrat fs-18 text-primary">$1000</span>
                            </td>
                          </tr>
                          <tr>
                            <td class="font-montserrat all-caps fs-12">Purchase CODE #2345</td>
                            <td class="text-right">
                              <span class="hint-text small">dewdrops</span>
                            </td>
                            <td class="text-right b-r b-dashed b-grey">
                              <span class="hint-text small">Qty 1</span>
                            </td>
                            <td>
                              <span class="font-montserrat fs-18">$27</span>
                            </td>
                          </tr>
                          <tr>
                            <td class="font-montserrat all-caps fs-12">Purchase CODE #2345</td>
                            <td class="text-right">
                              <span class="hint-text small">johnsmith</span>
                            </td>
                            <td class="text-right b-r b-dashed b-grey">
                              <span class="hint-text small">Qty 1</span>
                            </td>
                            <td>
                              <span class="font-montserrat fs-18 text-primary">$1000</span>
                            </td>
                          </tr>
                          <tr>
                            <td class="font-montserrat all-caps fs-12">Purchase CODE #2345</td>
                            <td class="text-right">
                              <span class="hint-text small">dewdrops</span>
                            </td>
                            <td class="text-right b-r b-dashed b-grey">
                              <span class="hint-text small">Qty 1</span>
                            </td>
                            <td>
                              <span class="font-montserrat fs-18">$27</span>
                            </td>
                          </tr>
                          <tr>
                            <td class="font-montserrat all-caps fs-12">Purchase CODE #2345</td>
                            <td class="text-right">
                              <span class="hint-text small">johnsmith</span>
                            </td>
                            <td class="text-right b-r b-dashed b-grey">
                              <span class="hint-text small">Qty 1</span>
                            </td>
                            <td>
                              <span class="font-montserrat fs-18 text-primary">$1000</span>
                            </td>
                          </tr>
                          <tr>
                            <td class="font-montserrat all-caps fs-12">Purchase CODE #2345</td>
                            <td class="text-right">
                              <span class="hint-text small">dewdrops</span>
                            </td>
                            <td class="text-right b-r b-dashed b-grey">
                              <span class="hint-text small">Qty 1</span>
                            </td>
                            <td>
                              <span class="font-montserrat fs-18">$27</span>
                            </td>
                          </tr>
                          <tr>
                            <td class="font-montserrat all-caps fs-12">Purchase CODE #2345</td>
                            <td class="text-right">
                              <span class="hint-text small">johnsmith</span>
                            </td>
                            <td class="text-right b-r b-dashed b-grey">
                              <span class="hint-text small">Qty 1</span>
                            </td>
                            <td>
                              <span class="font-montserrat fs-18 text-primary">$1000</span>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="padding-25">
                      <p class="small no-margin">
                        <a href="#"><i class="fa fs-16 fa-arrow-circle-o-down text-success m-r-10"></i></a>
                        <span class="hint-text ">Show more details of APPLE . INC</span>
                      </p>
                    </div>
                  </div>
                  <!-- END WIDGET -->
                </div>
              </div>
            </div>
            <!-- END ROW -->
            <div class="row">
              <div class="col-md-4 col-lg-3 col-xlg-2 ">
                <div class="row">
                  <div class="col-md-12 m-b-10">
                    <!-- START WIDGET D3 widget_graphTileFlat-->
                    <div class="widget-8 panel no-border bg-success no-margin widget-loader-bar">
                      <div class="container-xs-height full-height">
                        <div class="row-xs-height">
                          <div class="col-xs-height col-top">
                            <div class="panel-heading top-left top-right">
                              <div class="panel-title text-black hint-text">
                                <span class="font-montserrat fs-11 all-caps">Weekly Sales <i
		                                class="fa fa-chevron-right"></i>
                                                    </span>
                              </div>
                              <div class="panel-controls">
                                <ul>
                                  <li>
                                    <a data-toggle="refresh" class="portlet-refresh text-black" href="#"><i
											class="portlet-icon portlet-icon-refresh"></i></a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row-xs-height ">
                          <div class="col-xs-height col-top relative">
                            <div class="row">
                              <div class="col-sm-6">
                                <div class="p-l-20">
                                  <h3 class="no-margin p-b-5 text-white">$14,000</h3>
                                  <p class="small hint-text m-t-5">
                                    <span class="label  font-montserrat m-r-5">60%</span>Higher
                                  </p>
                                </div>
                              </div>
                              <div class="col-sm-6">
                              </div>
                            </div>
                            <div class='widget-8-chart line-chart' data-line-color="black" data-points="true" data-point-color="success" data-stroke-width="2">
                              <svg></svg>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- END WIDGET -->
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 m-b-10">
                    <!-- START WIDGET widget_progressTileFlat-->
                    <div class="widget-9 panel no-border bg-primary no-margin widget-loader-bar">
                      <div class="container-xs-height full-height">
                        <div class="row-xs-height">
                          <div class="col-xs-height col-top">
                            <div class="panel-heading  top-left top-right">
                              <div class="panel-title text-black">
                                <span class="font-montserrat fs-11 all-caps">Weekly Sales <i
		                                class="fa fa-chevron-right"></i>
                                                    </span>
                              </div>
                              <div class="panel-controls">
                                <ul>
                                  <li><a href="#" class="portlet-refresh text-black" data-toggle="refresh"><i
										class="portlet-icon portlet-icon-refresh"></i></a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row-xs-height">
                          <div class="col-xs-height col-top">
                            <div class="p-l-20 p-t-15">
                              <h3 class="no-margin p-b-5 text-white">$23,000</h3>
                              <a href="#" class="btn-circle-arrow text-white"><i
								class="pg-arrow_minimize"></i>
						</a>
                              <span class="small hint-text">65% lower than last month</span>
                            </div>
                          </div>
                        </div>
                        <div class="row-xs-height">
                          <div class="col-xs-height col-bottom">
                            <div class="progress progress-small m-b-20">
                              <!-- START BOOTSTRAP PROGRESS (http://getbootstrap.com/components/#progress) -->
                              <div class="progress-bar progress-bar-white" style="width:45%"></div>
                              <!-- END BOOTSTRAP PROGRESS -->
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- END WIDGET -->
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <!-- START WIDGET widget_statTile-->
                    <div class="widget-10 panel no-border bg-white no-margin widget-loader-bar">
                      <div class="panel-heading top-left top-right ">
                        <div class="panel-title text-black hint-text">
                          <span class="font-montserrat fs-11 all-caps">Weekly Sales <i class="fa fa-chevron-right"></i>
                                        </span>
                        </div>
                        <div class="panel-controls">
                          <ul>
                            <li><a data-toggle="refresh" class="portlet-refresh text-black" href="#"><i
							class="portlet-icon portlet-icon-refresh"></i></a>
                            </li>
                          </ul>
                        </div>
                      </div>
                      <div class="panel-body p-t-40">
                        <div class="row">
                          <div class="col-sm-12">
                            <h4 class="no-margin p-b-5 text-danger semi-bold">APPL 2.032</h4>
                            <div class="pull-left small">
                              <span>WMHC</span>
                              <span class=" text-success font-montserrat">
                                                    <i class="fa fa-caret-up m-l-10"></i> 9%
                                                </span>
                            </div>
                            <div class="pull-left m-l-20 small">
                              <span>HCRS</span>
                              <span class=" text-danger font-montserrat">
                                                    <i class="fa fa-caret-up m-l-10"></i> 21%
                                                </span>
                            </div>
                            <div class="clearfix"></div>
                          </div>
                        </div>
                        <div class="p-t-10 full-width">
                          <a href="#" class="btn-circle-arrow b-grey"><i
						class="pg-arrow_minimize text-danger"></i></a>
                          <span class="hint-text small">Show more</span>
                        </div>
                      </div>
                    </div>
                    <!-- END WIDGET -->
                  </div>
                </div>
              </div>
              <div class="col-md-8 col-lg-5 col-xlg-6 m-b-10">
                <div class="row">
                  <div class="col-md-12">
                    <!-- START WIDGET D3 widget_graphWidget-->
                    <div class="widget-12 panel no-border widget-loader-circle no-margin">
                      <div class="row">
                        <div class="col-xlg-8 ">
                          <div class="panel-heading pull-up top-right ">
                            <div class="panel-controls">
                              <ul>
                                <li class="hidden-xlg">
                                  <div class="dropdown">
                                    <a data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
                                      <i class="portlet-icon portlet-icon-settings"></i>
                                    </a>
                                    <ul class="dropdown-menu pull-right" role="menu">
                                      <li><a href="#">AAPL</a>
                                      </li>
                                      <li><a href="#">YHOO</a>
                                      </li>
                                      <li><a href="#">GOOG</a>
                                      </li>
                                    </ul>
                                  </div>
                                </li>
                                <li>
                                  <a data-toggle="refresh" class="portlet-refresh text-black" href="#"><i class="portlet-icon portlet-icon-refresh"></i></a>
                                </li>
                              </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="panel-body">
                        <div class="row">
                          <div class="col-xlg-8 ">
                            <div class="p-l-10">
                              <h2 class="pull-left">Apple Inc.</h2>
                              <h2 class="pull-left m-l-50 text-danger">
							<span class="bold">448.97</span>
							<span class="text-danger fs-12">-318.24</span>
						</h2>
                              <div class="clearfix"></div>
                              <div class="full-width">
                                <ul class="list-inline">
                                  <li><a href="#" class="font-montserrat text-master">1D</a>
                                  </li>
                                  <li class="active"><a href="#" class="font-montserrat  bg-master-light text-master">5D</a>
                                  </li>
                                  <li><a href="#" class="font-montserrat text-master">1M</a>
                                  </li>
                                  <li><a href="#" class="font-montserrat text-master">1Y</a>
                                  </li>
                                </ul>
                              </div>
                              <div class="nvd3-line line-chart text-center" data-x-grid="false">
                                <svg></svg>
                              </div>
                            </div>
                          </div>
                          <div class="col-xlg-4 visible-xlg">
                            <div class="widget-12-search">
                              <p class="pull-left">Company
                                <span class="bold">List</span>
                              </p>
                              <button class="btn btn-default btn-xs pull-right">
                                <span class="bold">+</span>
                              </button>
                              <div class="clearfix"></div>
                              <input type="text" placeholder="Search list" class="form-control m-t-5">
                            </div>
                            <div class="company-stat-boxes">
                              <div data-index="0" class="company-stat-box m-t-15 active padding-20 bg-master-lightest">
                                <div>
                                  <button type="button" class="close" data-dismiss="modal">
                                    <i class="pg-close fs-12"></i>
                                  </button>
                                  <p class="company-name pull-left text-uppercase bold no-margin">
                                    <span class="fa fa-circle text-success fs-11"></span> AAPL
                                  </p>
                                  <small class="hint-text m-l-10">Yahoo Inc.</small>
                                  <div class="clearfix"></div>
                                </div>
                                <div class="m-t-10">
                                  <p class="pull-left small hint-text no-margin p-t-5">9:42AM ET</p>
                                  <div class="pull-right">
                                    <p class="small hint-text no-margin inline">37.73</p>
                                    <span class=" label label-important p-t-5 m-l-5 p-b-5 inline fs-12">+ 0.09</span>
                                  </div>
                                  <div class="clearfix"></div>
                                </div>
                              </div>
                              <div data-index="1" class="company-stat-box m-t-15  padding-20 bg-master-lightest">
                                <div>
                                  <button type="button" class="close" data-dismiss="modal">
                                    <i class="pg-close fs-12"></i>
                                  </button>
                                  <p class="company-name pull-left text-uppercase bold no-margin">
                                    <span class="fa fa-circle text-primary fs-11"></span> YHOO
                                  </p>
                                  <small class="hint-text m-l-10">Yahoo Inc.</small>
                                  <div class="clearfix"></div>
                                </div>
                                <div class="m-t-10">
                                  <p class="pull-left small hint-text no-margin p-t-5">9:42AM ET</p>
                                  <div class="pull-right">
                                    <p class="small hint-text no-margin inline">37.73</p>
                                    <span class=" label label-success p-t-5 m-l-5 p-b-5 inline fs-12">+ 0.09</span>
                                  </div>
                                  <div class="clearfix"></div>
                                </div>
                              </div>
                              <div data-index="2" class="company-stat-box m-t-15  padding-20 bg-master-lightest">
                                <div>
                                  <button type="button" class="close" data-dismiss="modal">
                                    <i class="pg-close fs-12"></i>
                                  </button>
                                  <p class="company-name pull-left text-uppercase bold no-margin">
                                    <span class="fa fa-circle text-complete fs-11"></span> GOOG
                                  </p>
                                  <small class="hint-text m-l-10">Yahoo Inc.</small>
                                  <div class="clearfix"></div>
                                </div>
                                <div class="m-t-10">
                                  <p class="pull-left small hint-text no-margin p-t-5">9:42AM ET</p>
                                  <div class="pull-right">
                                    <p class="small hint-text no-margin inline">37.73</p>
                                    <span class=" label label-success p-t-5 m-l-5 p-b-5 inline fs-12">+ 0.09</span>
                                  </div>
                                  <div class="clearfix"></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    </template>
                    <!-- END WIDGET -->
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 hidden-xlg m-b-10">
                <!-- START WIDGET widget_tableWidgetBasic-->
                <div class="widget-11-2 panel no-border panel-condensed no-margin widget-loader-circle">
                  <div class="panel-heading top-right">
                    <div class="panel-controls">
                      <ul>
                        <li><a data-toggle="refresh" class="portlet-refresh text-black" href="#"><i
							class="portlet-icon portlet-icon-refresh"></i></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="padding-25">
                    <div class="pull-left">
                      <h2 class="text-success no-margin">webarch</h2>
                      <p class="no-margin">Today's sales</p>
                    </div>
                    <h3 class="pull-right semi-bold"><sup>
				<small class="semi-bold">$</small>
			</sup> 102,967
			</h3>
                    <div class="clearfix"></div>
                  </div>
                  <div class="auto-overflow widget-11-2-table">
                    <table class="table table-condensed table-hover">
                      <tbody>
                        <tr>
                          <td class="font-montserrat all-caps fs-12 col-lg-6">Purchase CODE #2345</td>
                          <td class="text-right hidden-lg">
                            <span class="hint-text small">dewdrops</span>
                          </td>
                          <td class="text-right b-r b-dashed b-grey col-lg-3">
                            <span class="hint-text small">Qty 1</span>
                          </td>
                          <td class="col-lg-3">
                            <span class="font-montserrat fs-18">$27</span>
                          </td>
                        </tr>
                        <tr>
                          <td class="font-montserrat all-caps fs-12 col-lg-6">Purchase CODE #2345</td>
                          <td class="text-right hidden-lg">
                            <span class="hint-text small">dewdrops</span>
                          </td>
                          <td class="text-right b-r b-dashed b-grey col-lg-3">
                            <span class="hint-text small">Qty 1</span>
                          </td>
                          <td class="col-lg-3">
                            <span class="font-montserrat fs-18">$27</span>
                          </td>
                        </tr>
                        <tr>
                          <td class="font-montserrat all-caps fs-12 col-lg-6">Purchase CODE #2345</td>
                          <td class="text-right hidden-lg">
                            <span class="hint-text small">dewdrops</span>
                          </td>
                          <td class="text-right b-r b-dashed b-grey col-lg-3">
                            <span class="hint-text small">Qty 1</span>
                          </td>
                          <td class="col-lg-3">
                            <span class="font-montserrat fs-18">$27</span>
                          </td>
                        </tr>
                        <tr>
                          <td class="font-montserrat all-caps fs-12 col-lg-6">Purchase CODE #2345</td>
                          <td class="text-right hidden-lg">
                            <span class="hint-text small">dewdrops</span>
                          </td>
                          <td class="text-right b-r b-dashed b-grey col-lg-3">
                            <span class="hint-text small">Qty 1</span>
                          </td>
                          <td class="col-lg-3">
                            <span class="font-montserrat fs-18">$27</span>
                          </td>
                        </tr>
                        <tr>
                          <td class="font-montserrat all-caps fs-12 col-lg-6">Purchase CODE #2345</td>
                          <td class="text-right hidden-lg">
                            <span class="hint-text small">dewdrops</span>
                          </td>
                          <td class="text-right b-r b-dashed b-grey col-lg-3">
                            <span class="hint-text small">Qty 1</span>
                          </td>
                          <td class="col-lg-3">
                            <span class="font-montserrat fs-18">$27</span>
                          </td>
                        </tr>
                        <tr>
                          <td class="font-montserrat all-caps fs-12 col-lg-6">Purchase CODE #2345</td>
                          <td class="text-right hidden-lg">
                            <span class="hint-text small">dewdrops</span>
                          </td>
                          <td class="text-right b-r b-dashed b-grey col-lg-3">
                            <span class="hint-text small">Qty 1</span>
                          </td>
                          <td class="col-lg-3">
                            <span class="font-montserrat fs-18">$27</span>
                          </td>
                        </tr>
                        <tr>
                          <td class="font-montserrat all-caps fs-12 col-lg-6">Purchase CODE #2345</td>
                          <td class="text-right hidden-lg">
                            <span class="hint-text small">dewdrops</span>
                          </td>
                          <td class="text-right b-r b-dashed b-grey col-lg-3">
                            <span class="hint-text small">Qty 1</span>
                          </td>
                          <td class="col-lg-3">
                            <span class="font-montserrat fs-18">$27</span>
                          </td>
                        </tr>
                        <tr>
                          <td class="font-montserrat all-caps fs-12 col-lg-6">Purchase CODE #2345</td>
                          <td class="text-right hidden-lg">
                            <span class="hint-text small">dewdrops</span>
                          </td>
                          <td class="text-right b-r b-dashed b-grey col-lg-3">
                            <span class="hint-text small">Qty 1</span>
                          </td>
                          <td class="col-lg-3">
                            <span class="font-montserrat fs-18">$27</span>
                          </td>
                        </tr>
                        <tr>
                          <td class="font-montserrat all-caps fs-12 col-lg-6">Purchase CODE #2345</td>
                          <td class="text-right hidden-lg">
                            <span class="hint-text small">dewdrops</span>
                          </td>
                          <td class="text-right b-r b-dashed b-grey col-lg-3">
                            <span class="hint-text small">Qty 1</span>
                          </td>
                          <td class="col-lg-3">
                            <span class="font-montserrat fs-18">$27</span>
                          </td>
                        </tr>
                        <tr>
                          <td class="font-montserrat all-caps fs-12 col-lg-6">Purchase CODE #2345</td>
                          <td class="text-right hidden-lg">
                            <span class="hint-text small">dewdrops</span>
                          </td>
                          <td class="text-right b-r b-dashed b-grey col-lg-3">
                            <span class="hint-text small">Qty 1</span>
                          </td>
                          <td class="col-lg-3">
                            <span class="font-montserrat fs-18">$27</span>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="padding-25">
                    <p class="small no-margin">
                      <a href="#"><i class="fa fs-16 fa-arrow-circle-o-down text-success m-r-10"></i></a>
                      <span class="hint-text ">Show more details of APPLE . INC</span>
                    </p>
                  </div>
                </div>
                <!-- END WIDGET -->
              </div>
              <div class="col-md-6 hidden-lg visible-md visible-xlg col-xlg-4 m-b-10">
                <!-- START WIDGET D3 widget_stackedBarWidget-->
                <div class="widget-15 panel panel-condensed  no-margin no-border widget-loader-circle">
                  <div class="panel-heading">
                    <div class="panel-controls">
                      <ul>
                        <li><a href="#" class="portlet-collapse" data-toggle="collapse"><i
							class="portlet-icon portlet-icon-collapse"></i></a>
                        </li>
                        <li><a href="#" class="portlet-refresh text-black" data-toggle="refresh"><i
							class="portlet-icon portlet-icon-refresh"></i></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="panel-body no-padding">
                    <ul class="nav nav-tabs nav-tabs-simple">
                      <li class="active">
                        <a href="#widget-15-tab-1" class="p-t-5">
						APPL<br>
						22.23<br>
						<span class="text-success">+60.223%</span>
					</a>
                      </li>
                      <li><a href="#widget-15-tab-2" class="p-t-5">
					FB<br>
					45.97<br>
					<span class="text-danger">-06.56%</span>
				</a>
                      </li>
                      <li><a href="#widget-15-tab-3" class="p-t-5">
					GOOG<br>
					22.23<br>
					<span class="text-success">+60.223%</span>
				</a>
                      </li>
                    </ul>
                    <div class="tab-content p-l-20 p-r-20">
                      <div class="tab-pane no-padding active" id="widget-15-tab-1">
                        <div class="full-width">
                          <div class="full-width">
                            <div class="widget-15-chart rickshaw-chart"></div>
                          </div>
                        </div>
                      </div>
                      <div class="tab-pane no-padding" id="widget-15-tab-2">
                      </div>
                      <div class="tab-pane" id="widget-15-tab-3">
                      </div>
                    </div>
                    <div class="p-t-20 p-l-20 p-r-20 p-b-30">
                      <div class="row">
                        <div class="col-md-9">
                          <p class="fs-16 text-black">Apple’s Motivation - Innovation
                            <br>distinguishes between A leader and a follower.
                          </p>
                          <p class="small hint-text">VIA Apple Store (Consumer and Education Individuals)
                            <br>(800) MY-APPLE (800-692-7753)
                          </p>
                        </div>
                        <div class="col-md-3 text-right">
                          <p class="font-montserrat bold text-success m-r-20 fs-16">+0.94</p>
                          <p class="font-montserrat bold text-danger m-r-20 fs-16">-0.63</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- END WIDGET -->
              </div>
            </div>
            <div class="row">
              <div class="col-md-8 m-b-10">
                <!-- START WIDGET widget_mapWidget-->
                <div class="widget-13 panel no-border  no-margin widget-loader-circle">
                  <div class="panel-heading pull-up top-right ">
                    <div class="panel-controls">
                      <ul>
                        <li><a href="#" class="portlet-refresh text-black" data-toggle="refresh"><i class="portlet-icon portlet-icon-refresh"></i></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="container-sm-height no-overflow">
                    <div class="row row-sm-height">
                      <div class="col-sm-5 col-lg-4 col-xlg-3 col-sm-height col-top no-padding">
                        <div class="panel-heading ">
                          <div class="panel-title">Menu clipping
                          </div>
                        </div>
                        <div class="panel-body">
                          <ul class="nav nav-pills" role="tablist">
                            <li class="active">
                              <a href="#tab1" data-toggle="tab" role="tab" class="b-a b-grey text-master">
                                            fb
                                        </a>
                            </li>
                            <li>
                              <a href="#tab2" data-toggle="tab" role="tab" class="b-a b-grey text-master">
                                            js
                                        </a>
                            </li>
                            <li>
                              <a href="#tab3" data-toggle="tab" role="tab" class="b-a b-grey text-master">
                                            sa
                                        </a>
                            </li>
                          </ul>
                          <div class="tab-content">
                            <div class="tab-pane active" id="tab1">
                              <h3>Facebook</h3>
                              <p class="hint-text all-caps font-montserrat small no-margin ">Views</p>
                              <p class="all-caps font-montserrat  no-margin text-success ">14,256</p>
                              <br>
                              <p class="hint-text all-caps font-montserrat small no-margin ">Today</p>
                              <p class="all-caps font-montserrat  no-margin text-warning ">24</p>
                              <br>
                              <p class="hint-text all-caps font-montserrat small no-margin ">Week</p>
                              <p class="all-caps font-montserrat  no-margin text-success ">56</p>
                            </div>
                            <div class="tab-pane " id="tab2">
                              <h3>Google</h3>
                              <p class="hint-text all-caps font-montserrat small no-margin ">Views</p>
                              <p class="all-caps font-montserrat  no-margin text-success ">14,256</p>
                              <br>
                              <p class="hint-text all-caps font-montserrat small no-margin ">Today</p>
                              <p class="all-caps font-montserrat  no-margin text-warning ">24</p>
                              <br>
                              <p class="hint-text all-caps font-montserrat small no-margin ">Week</p>
                              <p class="all-caps font-montserrat  no-margin text-success ">56</p>
                            </div>
                            <div class="tab-pane" id="tab3">
                              <h3>Amazon</h3>
                              <p class="hint-text all-caps font-montserrat small no-margin ">Views</p>
                              <p class="all-caps font-montserrat  no-margin text-success ">14,256</p>
                              <br>
                              <p class="hint-text all-caps font-montserrat small no-margin ">Today</p>
                              <p class="all-caps font-montserrat  no-margin text-warning ">24</p>
                              <br>
                              <p class="hint-text all-caps font-montserrat small no-margin ">Week</p>
                              <p class="all-caps font-montserrat  no-margin text-success ">56</p>
                            </div>
                          </div>
                        </div>
                        <div class="bg-master-light p-l-20 p-r-20 p-t-10 p-b-10 pull-bottom full-width hidden-xs">
                          <p class="no-margin">
                            <a href="#"><i class="fa fa-arrow-circle-o-down text-success"></i></a>
                            <span class="hint-text">Super secret options</span>
                          </p>
                        </div>
                      </div>
                      <div class="col-sm-7 col-lg-8 col-xlg-9 col-sm-height col-top no-padding relative">
                        <div class="bg-success widget-13-map">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- END WIDGET -->
              </div>
              <div class="col-md-4 m-b-10">
                <!-- START WIDGET widget_realtimeWidget-->
                <div class="widget-14 panel no-border  no-margin widget-loader-circle">
                  <div class="container-xs-height full-height">
                    <div class="row-xs-height">
                      <div class="col-xs-height">
                        <div class="panel-heading">
                          <div class="panel-title">Server load
                          </div>
                          <div class="panel-controls">
                            <ul>
                              <li><a href="#" class="portlet-refresh text-black" data-toggle="refresh"><i
										class="portlet-icon portlet-icon-refresh"></i></a>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row-xs-height">
                      <div class="col-xs-height">
                        <div class="p-l-20 p-r-20">
                          <p>Server: www.revox.io</p>
                          <div class="row">
                            <div class="col-lg-3 col-md-12">
                              <h4 class="bold no-margin">5.2GB</h4>
                              <p class="small no-margin">Total usage</p>
                            </div>
                            <div class="col-lg-3 col-md-6">
                              <h5 class=" no-margin p-t-5">227.34KB</h5>
                              <p class="small no-margin">Currently</p>
                            </div>
                            <div class="col-lg-3 col-md-6">
                              <h5 class=" no-margin p-t-5">117.65MB</h5>
                              <p class="small no-margin">Average</p>
                            </div>
                            <div class="col-lg-3 visible-xlg">
                              <div class="widget-14-chart-legend bg-transparent text-black no-padding pull-right"></div>
                              <div class="clearfix"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row-xs-height">
                      <div class="col-xs-height relative bg-master-lightest">
                        <div class="widget-14-chart_y_axis"></div>
                        <div class="widget-14-chart rickshaw-chart top-left top-right bottom-left bottom-right"></div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- END WIDGET -->
              </div>
            </div>
            <div class="row">
              <div class="col-lg-4 visible-lg hidden-xlg">
                <!-- START WIDGET D3 widget_stackedBarWidgetBasic-->
                <div class="widget-15-2 panel no-margin no-border widget-loader-circle">
                  <div class="panel-heading top-right">
                    <div class="panel-controls">
                      <ul>
                        <li><a href="#" class="portlet-refresh text-black" data-toggle="refresh"><i
							class="portlet-icon portlet-icon-refresh"></i></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <ul class="nav nav-tabs nav-tabs-simple">
                    <li class="active">
                      <a href="#widget-15-2-tab-1">
					APPL<br>
					22.23<br>
					<span class="text-success">+60.223%</span>
				</a>
                    </li>
                    <li><a href="#widget-15-2-tab-2">
				FB<br>
				45.97<br>
				<span class="text-danger">-06.56%</span>
			</a>
                    </li>
                    <li><a href="#widget-15-2-tab-3">
				GOOG<br>
				22.23<br>
				<span class="text-success">+60.223%</span>
			</a>
                    </li>
                  </ul>
                  <div class="tab-content">
                    <div class="tab-pane no-padding active" id="widget-15-2-tab-1">
                      <div class="full-width">
                        <div class="widget-15-chart2 rickshaw-chart full-height"></div>
                      </div>
                    </div>
                    <div class="tab-pane no-padding" id="widget-15-2-tab-2">
                    </div>
                    <div class="tab-pane" id="widget-15-2-tab-3">
                    </div>
                  </div>
                  <div class="p-t-10 p-l-20 p-r-20 p-b-30">
                    <div class="row">
                      <div class="col-md-9">
                        <p class="fs-16 text-black">Apple’s Motivation - Innovation distinguishes between A leader and a follower.
                        </p>
                        <p class="small hint-text">VIA Apple Store (Consumer and Education Individuals)
                          <br>(800) MY-APPLE (800-692-7753)
                        </p>
                      </div>
                      <div class="col-md-3 text-right">
                        <h5 class="font-montserrat bold text-success">+0.94</h5>
                        <h5 class="font-montserrat bold text-danger">-0.63</h5>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- END WIDGET -->
              </div>
              <div class="col-md-4 col-lg-3 col-xlg-3 m-b-10">
                <!-- START WIDGET D3 widget_graphOptionsWidget-->
                <div class="widget-16 panel no-border  no-margin widget-loader-circle">
                  <div class="panel-heading">
                    <div class="panel-title">Page Options
                    </div>
                    <div class="panel-controls">
                      <ul>
                        <li><a href="#" class="portlet-refresh text-black" data-toggle="refresh"><i
							class="portlet-icon portlet-icon-refresh"></i></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="widget-16-header padding-20">
                    <span class="icon-thumbnail bg-master-light pull-left text-master">ws</span>
                    <div class="pull-left">
                      <p class="hint-text all-caps font-montserrat  small no-margin overflow-ellipsis ">Pages name
                      </p>
                      <h5 class="no-margin overflow-ellipsis ">Webarch Sales Analysis</h5>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="p-l-25 p-r-45 p-t-25 p-b-25">
                    <div class="row">
                      <div class="col-md-4 ">
                        <p class="hint-text all-caps font-montserrat small no-margin ">Views</p>
                        <p class="all-caps font-montserrat  no-margin text-success ">14,256</p>
                      </div>
                      <div class="col-md-4 text-center">
                        <p class="hint-text all-caps font-montserrat small no-margin ">Today</p>
                        <p class="all-caps font-montserrat  no-margin text-warning ">24</p>
                      </div>
                      <div class="col-md-4 text-right">
                        <p class="hint-text all-caps font-montserrat small no-margin ">Week</p>
                        <p class="all-caps font-montserrat  no-margin text-success ">56</p>
                      </div>
                    </div>
                  </div>
                  <div class="relative no-overflow">
                    <div class="widget-16-chart line-chart" data-line-color="success" data-points="true" data-point-color="white" data-stroke-width="2">
                      <svg></svg>
                    </div>
                  </div>
                  <div class="b-b b-t b-grey p-l-20 p-r-20 p-b-10 p-t-10">
                    <p class="pull-left">Post is Public</p>
                    <div class="pull-right">
                      <input type="checkbox" data-init-plugin="switchery" />
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="b-b b-grey p-l-20 p-r-20 p-b-10 p-t-10">
                    <p class="pull-left">Maintenance mode</p>
                    <div class="pull-right">
                      <input type="checkbox" data-init-plugin="switchery" checked="checked" />
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="p-l-20 p-r-20 p-t-10 p-b-10 ">
                    <p class="pull-left no-margin hint-text">Super secret options</p>
                    <a href="#" class="pull-right"><i class="fa fa-arrow-circle-o-down text-success fs-16"></i></a>
                    <div class="clearfix"></div>
                  </div>
                </div>
                <!-- END WIDGET -->
              </div>
              <div class="col-xlg-2 visible-xlg ">
                <!-- START WIDGET widget_socialImageTile-->
                <div class="widget-18 panel no-border  no-margin ">
                  <div class="padding-15">
                    <div class="item-header clearfix">
                      <div class="thumbnail-wrapper d32 circular">
                        <img width="40" height="40" src="assets/img/profiles/3x.jpg" data-src="assets/img/profiles/3.jpg" data-src-retina="assets/img/profiles/3x.jpg" alt="">
                      </div>
                      <div class="inline m-l-10">
                        <p class="no-margin">
                          <strong>Anne Simons</strong>
                        </p>
                        <p class="no-margin hint-text">Shared a link
                          <span class="location semi-bold"><i class="fa fa-map-marker"></i> NY center</span>
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="relative">
                    <ul class="buttons pull-top top-right list-inline p-r-10 p-t-10">
                      <li>
                        <a class="text-white" href="#"><i class="fa fa-expand"></i>
					</a>
                      </li>
                      <li>
                        <a class="text-white" href="#"><i class="fa fa-heart-o"></i>
					</a>
                      </li>
                    </ul>
                    <div class="widget-18-post bg-black no-overflow">
                    </div>
                  </div>
                  <div class="padding-15">
                    <div class="hint-text pull-left">few seconds ago</div>
                    <ul class="list-inline pull-right no-margin">
                      <li><a class="text-master hint-text" href="#">5,345 <i class="fa fa-comment-o"></i></a>
                      </li>
                      <li><a class="text-master hint-text" href="#">23K <i class="fa fa-heart-o"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                </div>
                <!-- END WIDGET -->
              </div>
              <div class="col-xlg-2 visible-xlg ">
                <div class="row">
                  <div class="col-xlg-12">
                    <!-- START WIDGET widget_socialPostTile-->
                    <div class="panel no-border  no-margin">
                      <div class="padding-15">
                        <div class="item-header clearfix">
                          <div class="thumbnail-wrapper d32 circular">
                            <img width="40" height="40" src="assets/img/profiles/3x.jpg" data-src="assets/img/profiles/3.jpg" data-src-retina="assets/img/profiles/3x.jpg" alt="">
                          </div>
                          <div class="inline m-l-10">
                            <p class="no-margin">
                              <strong>Anne Simons</strong>
                            </p>
                            <p class="no-margin hint-text">Shared a link
                              <span class="location semi-bold"><i class="fa fa-map-marker"></i> NY center</span>
                            </p>
                          </div>
                        </div>
                      </div>
                      <hr class="no-margin">
                      <div class="padding-15">
                        <p>Inspired by : good design is obvious, great design is transparent</p>
                        <div class="hint-text">via themeforest</div>
                      </div>
                      <div class="relative">
                        <ul class="buttons pull-top top-right list-inline p-r-10 p-t-10">
                          <li>
                            <a class="text-white" href="#"><i class="fa fa-expand"></i>
					</a>
                          </li>
                          <li>
                            <a class="text-white" href="#"><i class="fa fa-heart-o"></i>
					</a>
                          </li>
                        </ul>
                        <div class="widget-19-post no-overflow">
                          <img src="assets/img/social-post-image.png" class="block center-margin relative" alt="Post">
                        </div>
                      </div>
                      <div class="padding-15">
                        <div class="hint-text pull-left">few seconds ago</div>
                        <ul class="list-inline pull-right no-margin">
                          <li><a class="text-master hint-text" href="#">5,345 <i class="fa fa-comment-o"></i></a>
                          </li>
                          <li><a class="text-master hint-text" href="#">23K <i class="fa fa-heart-o"></i></a>
                          </li>
                        </ul>
                        <div class="clearfix"></div>
                      </div>
                    </div>
                    <!-- END WIDGET -->
                  </div>
                </div>
              </div>
              <div class="col-md-8 col-lg-5 col-xlg-5">
                <!-- START WIDGET widget_weatherWidget-->
                <div class="widget-17 panel  no-border no-margin widget-loader-circle">
                  <div class="panel-heading">
                    <div class="panel-title">
                      <i class="pg-map"></i> California, USA
                      <span class="caret"></span>
                    </div>
                    <div class="panel-controls">
                      <ul>
                        <li class="">
                          <div class="dropdown">
                            <a data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
                              <i class="portlet-icon portlet-icon-settings"></i>
                            </a>
                            <ul class="dropdown-menu pull-right" role="menu">
                              <li><a href="#">AAPL</a>
                              </li>
                              <li><a href="#">YHOO</a>
                              </li>
                              <li><a href="#">GOOG</a>
                              </li>
                            </ul>
                          </div>
                        </li>
                        <li>
                          <a data-toggle="refresh" class="portlet-refresh text-black" href="#"><i
								class="portlet-icon portlet-icon-refresh"></i></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="panel-body">
                    <div class="p-l-5">
                      <div class="row">
                        <div class="col-md-12 col-xlg-6">
                          <div class="row m-t-20">
                            <div class="col-md-5">
                              <h4 class="no-margin">Monday</h4>
                              <p class="small hint-text">9th August 2014</p>
                            </div>
                            <div class="col-md-7">
                              <div class="pull-left">
                                <p class="small hint-text no-margin">Currently</p>
                                <h4 class="text-danger bold no-margin">32°
										<span class="small">/ 30C</span>
									</h4>
                              </div>
                              <div class="pull-right">
                                <canvas height="64" width="64" class="clear-day"></canvas>
                              </div>
                            </div>
                          </div>
                          <h5>Feels like
							<span class="semi-bold">rainy</span>
						</h5>
                          <p>Weather information</p>
                          <div class="widget-17-weather">
                            <div class="row">
                              <div class="col-xs-6 p-r-10">
                                <div class="row">
                                  <div class="col-md-12">
                                    <p class="pull-left">Wind</p>
                                    <p class="pull-right bold">11km/h</p>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-12">
                                    <p class="pull-left">Sunrise</p>
                                    <p class="pull-right bold">05:20</p>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-12">
                                    <p class="pull-left">Humidity</p>
                                    <p class="pull-right bold">20%</p>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-12">
                                    <p class="pull-left">Precipitation</p>
                                    <p class="pull-right bold">60%</p>
                                  </div>
                                </div>
                              </div>
                              <div class="col-xs-6 p-l-10">
                                <div class="row">
                                  <div class="col-md-12">
                                    <p class="pull-left">Sunset</p>
                                    <p class="pull-right bold">21:05</p>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-12">
                                    <p class="pull-left">Visibility</p>
                                    <p class="pull-right bold">21km</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="row m-t-10 timeslot">
                            <div class="col-xs-2 p-t-10 text-center">
                              <p class="small">13:30</p>
                              <canvas height="25" width="25" class="partly-cloudy-day"></canvas>
                              <p class="text-danger bold">30°C</p>
                            </div>
                            <div class="col-xs-2 p-t-10 text-center">
                              <p class="small">14:00</p>
                              <canvas height="25" width="25" class="cloudy"></canvas>
                              <p class="text-danger bold">30°C</p>
                            </div>
                            <div class="col-xs-2 p-t-10 text-center">
                              <p class="small">14:30</p>
                              <canvas height="25" width="25" class="rain"></canvas>
                              <p class="text-danger bold">30°C</p>
                            </div>
                            <div class="col-xs-2 p-t-10 text-center">
                              <p class="small">15:00</p>
                              <canvas height="25" width="25" class="sleet"></canvas>
                              <p class="text-danger bold">30°C</p>
                            </div>
                            <div class="col-xs-2 p-t-10 text-center">
                              <p class="small">15:30</p>
                              <canvas height="25" width="25" class="snow"></canvas>
                              <p class="text-danger bold">30°C</p>
                            </div>
                            <div class="col-xs-2 p-t-10 text-center">
                              <p class="small">16:00</p>
                              <canvas height="25" width="25" class="wind"></canvas>
                              <p class="text-danger bold">30°C</p>
                            </div>
                          </div>
                        </div>
                        <div class="col-xlg-6 visible-xlg">
                          <div class="row">
                            <div class="forecast-day col-md-6 text-center m-t-10 ">
                              <div class="bg-master-lighter p-b-10 p-t-10">
                                <h4 class="p-t-10 no-margin">Tuesday</h4>
                                <p class="small hint-text m-b-20">11th Augest 2014</p>
                                <canvas class="rain" width="64" height="64"></canvas>
                                <h5 class="text-danger">32°</h5>
                                <p>Feels like
                                  <span class="bold">sunny</span>
                                </p>
                                <p class="small">Wind
                                  <span class="bold p-l-20">11km/h</span>
                                </p>
                                <div class="m-t-20 block">
                                  <div class="padding-10">
                                    <div class="row">
                                      <div class="col-md-6 text-center">
                                        <p class="small">Noon</p>
                                        <canvas class="sleet" width="25" height="25"></canvas>
                                        <p class="text-danger bold">30°C</p>
                                      </div>
                                      <div class="col-md-6 text-center">
                                        <p class="small">Night</p>
                                        <canvas class="wind" width="25" height="25"></canvas>
                                        <p class="text-danger bold">30°C</p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6 text-center m-t-10 ">
                              <div class="bg-master-lighter p-b-10 p-t-10">
                                <h4 class="p-t-10 no-margin">Wednesday</h4>
                                <p class="small hint-text m-b-20">11th Augest 2014</p>
                                <canvas class="rain" width="64" height="64"></canvas>
                                <h5 class="text-danger">32°</h5>
                                <p>Feels like
                                  <span class="bold">sunny</span>
                                </p>
                                <p class="small">Wind
                                  <span class="bold p-l-20">11km/h</span>
                                </p>
                                <div class="m-t-20 block">
                                  <div class="padding-10">
                                    <div class="row">
                                      <div class="col-md-6 text-center">
                                        <p class="small">Noon</p>
                                        <canvas class="sleet" width="25" height="25"></canvas>
                                        <p class="text-danger bold">30°C</p>
                                      </div>
                                      <div class="col-md-6 text-center">
                                        <p class="small">Night</p>
                                        <canvas class="wind" width="25" height="25"></canvas>
                                        <p class="text-danger bold">30°C</p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- END WIDGET -->
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
    <!--START QUICKVIEW -->
    <div id="quickview" class="quickview-wrapper" data-pages="quickview">
      <!-- Nav tabs -->
      <ul class="nav nav-tabs">
        <li class="">
          <a href="#quickview-notes" data-toggle="tab">Notes</a>
        </li>
        <li>
          <a href="#quickview-alerts" data-toggle="tab">Alerts</a>
        </li>
        <li class="active">
          <a href="#quickview-chat" data-toggle="tab">Chat</a>
        </li>
      </ul>
      <a class="btn-link quickview-toggle" data-toggle-element="#quickview" data-toggle="quickview"><i class="pg-close"></i></a>
      <!-- Tab panes -->
      <div class="tab-content">
        <!-- BEGIN Notes !-->
        <div class="tab-pane fade  in no-padding" id="quickview-notes">
          <div class="view-port clearfix quickview-notes" id="note-views">
            <!-- BEGIN Note List !-->
            <div class="view list" id="quick-note-list">
              <div class="toolbar clearfix">
                <ul class="pull-right ">
                  <li>
                    <a href="#" class="delete-note-link"><i class="fa fa-trash-o"></i></a>
                  </li>
                  <li>
                    <a href="#" class="new-note-link" data-navigate="view" data-view-port="#note-views" data-view-animation="push"><i class="fa fa-plus"></i></a>
                  </li>
                </ul>
                <button class="btn-remove-notes btn btn-xs btn-block hide"><i class="fa fa-times"></i> Delete</button>
              </div>
              <ul>
                <!-- BEGIN Note Item !-->
                <li data-noteid="1">
                  <div class="left">
                    <!-- BEGIN Note Action !-->
                    <div class="checkbox check-warning no-margin">
                      <input id="qncheckbox1" type="checkbox" value="1">
                      <label for="qncheckbox1"></label>
                    </div>
                    <!-- END Note Action !-->
                    <!-- BEGIN Note Preview Text !-->
                    <p class="note-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                    <!-- BEGIN Note Preview Text !-->
                  </div>
                  <!-- BEGIN Note Details !-->
                  <div class="right pull-right">
                    <!-- BEGIN Note Date !-->
                    <span class="date">12/12/14</span>
                    <a href="#" data-navigate="view" data-view-port="#note-views" data-view-animation="push"><i class="fa fa-chevron-right"></i></a>
                    <!-- END Note Date !-->
                  </div>
                  <!-- END Note Details !-->
                </li>
                <!-- END Note List !-->
                <!-- BEGIN Note Item !-->
                <li data-noteid="2">
                  <div class="left">
                    <!-- BEGIN Note Action !-->
                    <div class="checkbox check-warning no-margin">
                      <input id="qncheckbox2" type="checkbox" value="1">
                      <label for="qncheckbox2"></label>
                    </div>
                    <!-- END Note Action !-->
                    <!-- BEGIN Note Preview Text !-->
                    <p class="note-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                    <!-- BEGIN Note Preview Text !-->
                  </div>
                  <!-- BEGIN Note Details !-->
                  <div class="right pull-right">
                    <!-- BEGIN Note Date !-->
                    <span class="date">12/12/14</span>
                    <a href="#"><i class="fa fa-chevron-right"></i></a>
                    <!-- END Note Date !-->
                  </div>
                  <!-- END Note Details !-->
                </li>
                <!-- END Note List !-->
                <!-- BEGIN Note Item !-->
                <li data-noteid="2">
                  <div class="left">
                    <!-- BEGIN Note Action !-->
                    <div class="checkbox check-warning no-margin">
                      <input id="qncheckbox3" type="checkbox" value="1">
                      <label for="qncheckbox3"></label>
                    </div>
                    <!-- END Note Action !-->
                    <!-- BEGIN Note Preview Text !-->
                    <p class="note-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                    <!-- BEGIN Note Preview Text !-->
                  </div>
                  <!-- BEGIN Note Details !-->
                  <div class="right pull-right">
                    <!-- BEGIN Note Date !-->
                    <span class="date">12/12/14</span>
                    <a href="#"><i class="fa fa-chevron-right"></i></a>
                    <!-- END Note Date !-->
                  </div>
                  <!-- END Note Details !-->
                </li>
                <!-- END Note List !-->
                <!-- BEGIN Note Item !-->
                <li data-noteid="3">
                  <div class="left">
                    <!-- BEGIN Note Action !-->
                    <div class="checkbox check-warning no-margin">
                      <input id="qncheckbox4" type="checkbox" value="1">
                      <label for="qncheckbox4"></label>
                    </div>
                    <!-- END Note Action !-->
                    <!-- BEGIN Note Preview Text !-->
                    <p class="note-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                    <!-- BEGIN Note Preview Text !-->
                  </div>
                  <!-- BEGIN Note Details !-->
                  <div class="right pull-right">
                    <!-- BEGIN Note Date !-->
                    <span class="date">12/12/14</span>
                    <a href="#"><i class="fa fa-chevron-right"></i></a>
                    <!-- END Note Date !-->
                  </div>
                  <!-- END Note Details !-->
                </li>
                <!-- END Note List !-->
                <!-- BEGIN Note Item !-->
                <li data-noteid="4">
                  <div class="left">
                    <!-- BEGIN Note Action !-->
                    <div class="checkbox check-warning no-margin">
                      <input id="qncheckbox5" type="checkbox" value="1">
                      <label for="qncheckbox5"></label>
                    </div>
                    <!-- END Note Action !-->
                    <!-- BEGIN Note Preview Text !-->
                    <p class="note-preview">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                    <!-- BEGIN Note Preview Text !-->
                  </div>
                  <!-- BEGIN Note Details !-->
                  <div class="right pull-right">
                    <!-- BEGIN Note Date !-->
                    <span class="date">12/12/14</span>
                    <a href="#"><i class="fa fa-chevron-right"></i></a>
                    <!-- END Note Date !-->
                  </div>
                  <!-- END Note Details !-->
                </li>
                <!-- END Note List !-->
              </ul>
            </div>
            <!-- END Note List !-->
            <div class="view note" id="quick-note">
              <div>
                <ul class="toolbar">
                  <li><a href="#" class="close-note-link"><i class="pg-arrow_left"></i></a>
                  </li>
                  <li><a href="#" data-action="Bold"><i class="fa fa-bold"></i></a>
                  </li>
                  <li><a href="#" data-action="Italic"><i class="fa fa-italic"></i></a>
                  </li>
                  <li><a href="#" class=""><i class="fa fa-link"></i></a>
                  </li>
                </ul>
                <div class="body">
                  <div>
                    <div class="top">
                      <span>21st april 2014 2:13am</span>
                    </div>
                    <div class="content">
                      <div class="quick-note-editor full-width full-height js-input" contenteditable="true"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- END Notes !-->
        <!-- BEGIN Alerts !-->
        <div class="tab-pane fade no-padding" id="quickview-alerts">
          <div class="view-port clearfix" id="alerts">
            <!-- BEGIN Alerts View !-->
            <div class="view bg-white">
              <!-- BEGIN View Header !-->
              <div class="navbar navbar-default navbar-sm">
                <div class="navbar-inner">
                  <!-- BEGIN Header Controler !-->
                  <a href="javascript:;" class="inline action p-l-10 link text-master" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
                    <i class="pg-more"></i>
                  </a>
                  <!-- END Header Controler !-->
                  <div class="view-heading">
                    Notications
                  </div>
                  <!-- BEGIN Header Controler !-->
                  <a href="#" class="inline action p-r-10 pull-right link text-master">
                    <i class="pg-search"></i>
                  </a>
                  <!-- END Header Controler !-->
                </div>
              </div>
              <!-- END View Header !-->
              <!-- BEGIN Alert List !-->
              <div data-init-list-view="ioslist" class="list-view boreded no-top-border">
                <!-- BEGIN List Group !-->
                <div class="list-view-group-container">
                  <!-- BEGIN List Group Header!-->
                  <div class="list-view-group-header text-uppercase">
                    Calendar
                  </div>
                  <!-- END List Group Header!-->
                  <ul>
                    <!-- BEGIN List Group Item!-->
                    <li class="alert-list">
                      <!-- BEGIN Alert Item Set Animation using data-view-animation !-->
                      <a href="javascript:;" class="" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
                        <p class="col-xs-height col-middle">
                          <span class="text-warning fs-10"><i class="fa fa-circle"></i></span>
                        </p>
                        <p class="p-l-10 col-xs-height col-middle col-xs-9 overflow-ellipsis fs-12">
                          <span class="text-master">David Nester Birthday</span>
                        </p>
                        <p class="p-r-10 col-xs-height col-middle fs-12 text-right">
                          <span class="text-warning">Today <br></span>
                          <span class="text-master">All Day</span>
                        </p>
                      </a>
                      <!-- END Alert Item!-->
                      <!-- BEGIN List Group Item!-->
                    </li>
                    <!-- END List Group Item!-->
                    <!-- BEGIN List Group Item!-->
                    <li class="alert-list">
                      <!-- BEGIN Alert Item Set Animation using data-view-animation !-->
                      <a href="#" class="" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
                        <p class="col-xs-height col-middle">
                          <span class="text-warning fs-10"><i class="fa fa-circle"></i></span>
                        </p>
                        <p class="p-l-10 col-xs-height col-middle col-xs-9 overflow-ellipsis fs-12">
                          <span class="text-master">Meeting at 2:30</span>
                        </p>
                        <p class="p-r-10 col-xs-height col-middle fs-12 text-right">
                          <span class="text-warning">Today</span>
                        </p>
                      </a>
                      <!-- END Alert Item!-->
                    </li>
                    <!-- END List Group Item!-->
                  </ul>
                </div>
                <!-- END List Group !-->
                <div class="list-view-group-container">
                  <!-- BEGIN List Group Header!-->
                  <div class="list-view-group-header text-uppercase">
                    Social
                  </div>
                  <!-- END List Group Header!-->
                  <ul>
                    <!-- BEGIN List Group Item!-->
                    <li class="alert-list">
                      <!-- BEGIN Alert Item Set Animation using data-view-animation !-->
                      <a href="javascript:;" class="p-t-10 p-b-10" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
                        <p class="col-xs-height col-middle">
                          <span class="text-complete fs-10"><i class="fa fa-circle"></i></span>
                        </p>
                        <p class="p-l-10 col-xs-height col-middle col-xs-12 overflow-ellipsis fs-12">
                          <span class="text-master link">Jame Smith commented on your status<br></span>
                          <span class="text-master">“Perfection Simplified - Company Revox"</span>
                        </p>
                      </a>
                      <!-- END Alert Item!-->
                    </li>
                    <!-- END List Group Item!-->
                    <!-- BEGIN List Group Item!-->
                    <li class="alert-list">
                      <!-- BEGIN Alert Item Set Animation using data-view-animation !-->
                      <a href="javascript:;" class="p-t-10 p-b-10" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
                        <p class="col-xs-height col-middle">
                          <span class="text-complete fs-10"><i class="fa fa-circle"></i></span>
                        </p>
                        <p class="p-l-10 col-xs-height col-middle col-xs-12 overflow-ellipsis fs-12">
                          <span class="text-master link">Jame Smith commented on your status<br></span>
                          <span class="text-master">“Perfection Simplified - Company Revox"</span>
                        </p>
                      </a>
                      <!-- END Alert Item!-->
                    </li>
                    <!-- END List Group Item!-->
                  </ul>
                </div>
                <div class="list-view-group-container">
                  <!-- BEGIN List Group Header!-->
                  <div class="list-view-group-header text-uppercase">
                    Sever Status
                  </div>
                  <!-- END List Group Header!-->
                  <ul>
                    <!-- BEGIN List Group Item!-->
                    <li class="alert-list">
                      <!-- BEGIN Alert Item Set Animation using data-view-animation !-->
                      <a href="#" class="p-t-10 p-b-10" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
                        <p class="col-xs-height col-middle">
                          <span class="text-danger fs-10"><i class="fa fa-circle"></i></span>
                        </p>
                        <p class="p-l-10 col-xs-height col-middle col-xs-12 overflow-ellipsis fs-12">
                          <span class="text-master link">12:13AM GTM, 10230, ID:WR174s<br></span>
                          <span class="text-master">Server Load Exceeted. Take action</span>
                        </p>
                      </a>
                      <!-- END Alert Item!-->
                    </li>
                    <!-- END List Group Item!-->
                  </ul>
                </div>
              </div>
              <!-- END Alert List !-->
            </div>
            <!-- EEND Alerts View !-->
          </div>
        </div>
        <!-- END Alerts !-->
        <div class="tab-pane fade in active no-padding" id="quickview-chat">
          <div class="view-port clearfix" id="chat">
            <div class="view bg-white">
              <!-- BEGIN View Header !-->
              <div class="navbar navbar-default">
                <div class="navbar-inner">
                  <!-- BEGIN Header Controler !-->
                  <a href="javascript:;" class="inline action p-l-10 link text-master" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
                    <i class="pg-plus"></i>
                  </a>
                  <!-- END Header Controler !-->
                  <div class="view-heading">
                    Chat List
                    <div class="fs-11">Show All</div>
                  </div>
                  <!-- BEGIN Header Controler !-->
                  <a href="#" class="inline action p-r-10 pull-right link text-master">
                    <i class="pg-more"></i>
                  </a>
                  <!-- END Header Controler !-->
                </div>
              </div>
              <!-- END View Header !-->
              <div data-init-list-view="ioslist" class="list-view boreded no-top-border">
                <div class="list-view-group-container">
                  <div class="list-view-group-header text-uppercase">
                    a</div>
                  <ul>
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="col-xs-height col-middle">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/1x.jpg" data-src="assets/img/profiles/1.jpg" src="assets/img/profiles/1x.jpg" class="col-top">
                        </span>
                        </span>
                        <p class="p-l-10 col-xs-height col-middle col-xs-12">
                          <span class="text-master">ava flores</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                  </ul>
                </div>
                <div class="list-view-group-container">
                  <div class="list-view-group-header text-uppercase">b</div>
                  <ul>
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="col-xs-height col-middle">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/2x.jpg" data-src="assets/img/profiles/2.jpg" src="assets/img/profiles/2x.jpg" class="col-top">
                        </span>
                        </span>
                        <p class="p-l-10 col-xs-height col-middle col-xs-12">
                          <span class="text-master">bella mccoy</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="col-xs-height col-middle">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/3x.jpg" data-src="assets/img/profiles/3.jpg" src="assets/img/profiles/3x.jpg" class="col-top">
                        </span>
                        </span>
                        <p class="p-l-10 col-xs-height col-middle col-xs-12">
                          <span class="text-master">bob stephens</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                  </ul>
                </div>
                <div class="list-view-group-container">
                  <div class="list-view-group-header text-uppercase">c</div>
                  <ul>
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="col-xs-height col-middle">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/4x.jpg" data-src="assets/img/profiles/4.jpg" src="assets/img/profiles/4x.jpg" class="col-top">
                        </span>
                        </span>
                        <p class="p-l-10 col-xs-height col-middle col-xs-12">
                          <span class="text-master">carole roberts</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="col-xs-height col-middle">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/5x.jpg" data-src="assets/img/profiles/5.jpg" src="assets/img/profiles/5x.jpg" class="col-top">
                        </span>
                        </span>
                        <p class="p-l-10 col-xs-height col-middle col-xs-12">
                          <span class="text-master">christopher perez</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                  </ul>
                </div>
                <div class="list-view-group-container">
                  <div class="list-view-group-header text-uppercase">d</div>
                  <ul>
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="col-xs-height col-middle">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/6x.jpg" data-src="assets/img/profiles/6.jpg" src="assets/img/profiles/6x.jpg" class="col-top">
                        </span>
                        </span>
                        <p class="p-l-10 col-xs-height col-middle col-xs-12">
                          <span class="text-master">danielle fletcher</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="col-xs-height col-middle">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/7x.jpg" data-src="assets/img/profiles/7.jpg" src="assets/img/profiles/7x.jpg" class="col-top">
                        </span>
                        </span>
                        <p class="p-l-10 col-xs-height col-middle col-xs-12">
                          <span class="text-master">david sutton</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                  </ul>
                </div>
                <div class="list-view-group-container">
                  <div class="list-view-group-header text-uppercase">e</div>
                  <ul>
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="col-xs-height col-middle">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/8x.jpg" data-src="assets/img/profiles/8.jpg" src="assets/img/profiles/8x.jpg" class="col-top">
                        </span>
                        </span>
                        <p class="p-l-10 col-xs-height col-middle col-xs-12">
                          <span class="text-master">earl hamilton</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="col-xs-height col-middle">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/9x.jpg" data-src="assets/img/profiles/9.jpg" src="assets/img/profiles/9x.jpg" class="col-top">
                        </span>
                        </span>
                        <p class="p-l-10 col-xs-height col-middle col-xs-12">
                          <span class="text-master">elaine lawrence</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="col-xs-height col-middle">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/1x.jpg" data-src="assets/img/profiles/1.jpg" src="assets/img/profiles/1x.jpg" class="col-top">
                        </span>
                        </span>
                        <p class="p-l-10 col-xs-height col-middle col-xs-12">
                          <span class="text-master">ellen grant</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="col-xs-height col-middle">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/2x.jpg" data-src="assets/img/profiles/2.jpg" src="assets/img/profiles/2x.jpg" class="col-top">
                        </span>
                        </span>
                        <p class="p-l-10 col-xs-height col-middle col-xs-12">
                          <span class="text-master">erik taylor</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="col-xs-height col-middle">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/3x.jpg" data-src="assets/img/profiles/3.jpg" src="assets/img/profiles/3x.jpg" class="col-top">
                        </span>
                        </span>
                        <p class="p-l-10 col-xs-height col-middle col-xs-12">
                          <span class="text-master">everett wagner</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                  </ul>
                </div>
                <div class="list-view-group-container">
                  <div class="list-view-group-header text-uppercase">f</div>
                  <ul>
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="col-xs-height col-middle">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/4x.jpg" data-src="assets/img/profiles/4.jpg" src="assets/img/profiles/4x.jpg" class="col-top">
                        </span>
                        </span>
                        <p class="p-l-10 col-xs-height col-middle col-xs-12">
                          <span class="text-master">freddie gomez</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                  </ul>
                </div>
                <div class="list-view-group-container">
                  <div class="list-view-group-header text-uppercase">g</div>
                  <ul>
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="col-xs-height col-middle">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/5x.jpg" data-src="assets/img/profiles/5.jpg" src="assets/img/profiles/5x.jpg" class="col-top">
                        </span>
                        </span>
                        <p class="p-l-10 col-xs-height col-middle col-xs-12">
                          <span class="text-master">glen jensen</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="col-xs-height col-middle">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/6x.jpg" data-src="assets/img/profiles/6.jpg" src="assets/img/profiles/6x.jpg" class="col-top">
                        </span>
                        </span>
                        <p class="p-l-10 col-xs-height col-middle col-xs-12">
                          <span class="text-master">gwendolyn walker</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                  </ul>
                </div>
                <div class="list-view-group-container">
                  <div class="list-view-group-header text-uppercase">j</div>
                  <ul>
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="col-xs-height col-middle">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/7x.jpg" data-src="assets/img/profiles/7.jpg" src="assets/img/profiles/7x.jpg" class="col-top">
                        </span>
                        </span>
                        <p class="p-l-10 col-xs-height col-middle col-xs-12">
                          <span class="text-master">janet romero</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                  </ul>
                </div>
                <div class="list-view-group-container">
                  <div class="list-view-group-header text-uppercase">k</div>
                  <ul>
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="col-xs-height col-middle">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/8x.jpg" data-src="assets/img/profiles/8.jpg" src="assets/img/profiles/8x.jpg" class="col-top">
                        </span>
                        </span>
                        <p class="p-l-10 col-xs-height col-middle col-xs-12">
                          <span class="text-master">kim martinez</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                  </ul>
                </div>
                <div class="list-view-group-container">
                  <div class="list-view-group-header text-uppercase">l</div>
                  <ul>
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="col-xs-height col-middle">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/9x.jpg" data-src="assets/img/profiles/9.jpg" src="assets/img/profiles/9x.jpg" class="col-top">
                        </span>
                        </span>
                        <p class="p-l-10 col-xs-height col-middle col-xs-12">
                          <span class="text-master">lawrence white</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="col-xs-height col-middle">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/1x.jpg" data-src="assets/img/profiles/1.jpg" src="assets/img/profiles/1x.jpg" class="col-top">
                        </span>
                        </span>
                        <p class="p-l-10 col-xs-height col-middle col-xs-12">
                          <span class="text-master">leroy bell</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="col-xs-height col-middle">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/2x.jpg" data-src="assets/img/profiles/2.jpg" src="assets/img/profiles/2x.jpg" class="col-top">
                        </span>
                        </span>
                        <p class="p-l-10 col-xs-height col-middle col-xs-12">
                          <span class="text-master">letitia carr</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="col-xs-height col-middle">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/3x.jpg" data-src="assets/img/profiles/3.jpg" src="assets/img/profiles/3x.jpg" class="col-top">
                        </span>
                        </span>
                        <p class="p-l-10 col-xs-height col-middle col-xs-12">
                          <span class="text-master">lucy castro</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                  </ul>
                </div>
                <div class="list-view-group-container">
                  <div class="list-view-group-header text-uppercase">m</div>
                  <ul>
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="col-xs-height col-middle">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/4x.jpg" data-src="assets/img/profiles/4.jpg" src="assets/img/profiles/4x.jpg" class="col-top">
                        </span>
                        </span>
                        <p class="p-l-10 col-xs-height col-middle col-xs-12">
                          <span class="text-master">mae hayes</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="col-xs-height col-middle">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/5x.jpg" data-src="assets/img/profiles/5.jpg" src="assets/img/profiles/5x.jpg" class="col-top">
                        </span>
                        </span>
                        <p class="p-l-10 col-xs-height col-middle col-xs-12">
                          <span class="text-master">marilyn owens</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="col-xs-height col-middle">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/6x.jpg" data-src="assets/img/profiles/6.jpg" src="assets/img/profiles/6x.jpg" class="col-top">
                        </span>
                        </span>
                        <p class="p-l-10 col-xs-height col-middle col-xs-12">
                          <span class="text-master">marlene cole</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="col-xs-height col-middle">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/7x.jpg" data-src="assets/img/profiles/7.jpg" src="assets/img/profiles/7x.jpg" class="col-top">
                        </span>
                        </span>
                        <p class="p-l-10 col-xs-height col-middle col-xs-12">
                          <span class="text-master">marsha warren</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="col-xs-height col-middle">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/8x.jpg" data-src="assets/img/profiles/8.jpg" src="assets/img/profiles/8x.jpg" class="col-top">
                        </span>
                        </span>
                        <p class="p-l-10 col-xs-height col-middle col-xs-12">
                          <span class="text-master">marsha dean</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="col-xs-height col-middle">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/9x.jpg" data-src="assets/img/profiles/9.jpg" src="assets/img/profiles/9x.jpg" class="col-top">
                        </span>
                        </span>
                        <p class="p-l-10 col-xs-height col-middle col-xs-12">
                          <span class="text-master">mia diaz</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                  </ul>
                </div>
                <div class="list-view-group-container">
                  <div class="list-view-group-header text-uppercase">n</div>
                  <ul>
                    <!-- BEGIN Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="col-xs-height col-middle">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/1x.jpg" data-src="assets/img/profiles/1.jpg" src="assets/img/profiles/1x.jpg" class="col-top">
                        </span>
                        </span>
                        <p class="p-l-10 col-xs-height col-middle col-xs-12">
                          <span class="text-master">noah elliott</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                  </ul>
                </div>
                <div class="list-view-group-container">
                  <div class="list-view-group-header text-uppercase">p</div>
                  <ul>
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="col-xs-height col-middle">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/2x.jpg" data-src="assets/img/profiles/2.jpg" src="assets/img/profiles/2x.jpg" class="col-top">
                        </span>
                        </span>
                        <p class="p-l-10 col-xs-height col-middle col-xs-12">
                          <span class="text-master">phyllis hamilton</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                  </ul>
                </div>
                <div class="list-view-group-container">
                  <div class="list-view-group-header text-uppercase">r</div>
                  <ul>
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="col-xs-height col-middle">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/3x.jpg" data-src="assets/img/profiles/3.jpg" src="assets/img/profiles/3x.jpg" class="col-top">
                        </span>
                        </span>
                        <p class="p-l-10 col-xs-height col-middle col-xs-12">
                          <span class="text-master">raul rodriquez</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="col-xs-height col-middle">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/4x.jpg" data-src="assets/img/profiles/4.jpg" src="assets/img/profiles/4x.jpg" class="col-top">
                        </span>
                        </span>
                        <p class="p-l-10 col-xs-height col-middle col-xs-12">
                          <span class="text-master">rhonda barnett</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="col-xs-height col-middle">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/5x.jpg" data-src="assets/img/profiles/5.jpg" src="assets/img/profiles/5x.jpg" class="col-top">
                        </span>
                        </span>
                        <p class="p-l-10 col-xs-height col-middle col-xs-12">
                          <span class="text-master">roberta king</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                  </ul>
                </div>
                <div class="list-view-group-container">
                  <div class="list-view-group-header text-uppercase">s</div>
                  <ul>
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="col-xs-height col-middle">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/6x.jpg" data-src="assets/img/profiles/6.jpg" src="assets/img/profiles/6x.jpg" class="col-top">
                        </span>
                        </span>
                        <p class="p-l-10 col-xs-height col-middle col-xs-12">
                          <span class="text-master">scott armstrong</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="col-xs-height col-middle">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/7x.jpg" data-src="assets/img/profiles/7.jpg" src="assets/img/profiles/7x.jpg" class="col-top">
                        </span>
                        </span>
                        <p class="p-l-10 col-xs-height col-middle col-xs-12">
                          <span class="text-master">sebastian austin</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="col-xs-height col-middle">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/8x.jpg" data-src="assets/img/profiles/8.jpg" src="assets/img/profiles/8x.jpg" class="col-top">
                        </span>
                        </span>
                        <p class="p-l-10 col-xs-height col-middle col-xs-12">
                          <span class="text-master">sofia davis</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                  </ul>
                </div>
                <div class="list-view-group-container">
                  <div class="list-view-group-header text-uppercase">t</div>
                  <ul>
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="col-xs-height col-middle">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/9x.jpg" data-src="assets/img/profiles/9.jpg" src="assets/img/profiles/9x.jpg" class="col-top">
                        </span>
                        </span>
                        <p class="p-l-10 col-xs-height col-middle col-xs-12">
                          <span class="text-master">terrance young</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="col-xs-height col-middle">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/1x.jpg" data-src="assets/img/profiles/1.jpg" src="assets/img/profiles/1x.jpg" class="col-top">
                        </span>
                        </span>
                        <p class="p-l-10 col-xs-height col-middle col-xs-12">
                          <span class="text-master">theodore woods</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="col-xs-height col-middle">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/2x.jpg" data-src="assets/img/profiles/2.jpg" src="assets/img/profiles/2x.jpg" class="col-top">
                        </span>
                        </span>
                        <p class="p-l-10 col-xs-height col-middle col-xs-12">
                          <span class="text-master">todd wood</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="col-xs-height col-middle">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/3x.jpg" data-src="assets/img/profiles/3.jpg" src="assets/img/profiles/3x.jpg" class="col-top">
                        </span>
                        </span>
                        <p class="p-l-10 col-xs-height col-middle col-xs-12">
                          <span class="text-master">tommy jenkins</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                  </ul>
                </div>
                <div class="list-view-group-container">
                  <div class="list-view-group-header text-uppercase">w</div>
                  <ul>
                    <!-- BEGIN Chat User List Item  !-->
                    <li class="chat-user-list clearfix">
                      <a data-view-animation="push-parrallax" data-view-port="#chat" data-navigate="view" class="" href="#">
                        <span class="col-xs-height col-middle">
                        <span class="thumbnail-wrapper d32 circular bg-success">
                            <img width="34" height="34" alt="" data-src-retina="assets/img/profiles/4x.jpg" data-src="assets/img/profiles/4.jpg" src="assets/img/profiles/4x.jpg" class="col-top">
                        </span>
                        </span>
                        <p class="p-l-10 col-xs-height col-middle col-xs-12">
                          <span class="text-master">wilma hicks</span>
                          <span class="block text-master hint-text fs-12">Hello there</span>
                        </p>
                      </a>
                    </li>
                    <!-- END Chat User List Item  !-->
                  </ul>
                </div>
              </div>
            </div>
            <!-- BEGIN Conversation View  !-->
            <div class="view chat-view bg-white clearfix">
              <!-- BEGIN Header  !-->
              <div class="navbar navbar-default">
                <div class="navbar-inner">
                  <a href="javascript:;" class="link text-master inline action p-l-10 p-r-10" data-navigate="view" data-view-port="#chat" data-view-animation="push-parrallax">
                    <i class="pg-arrow_left"></i>
                  </a>
                  <div class="view-heading">
                    John Smith
                    <div class="fs-11 hint-text">Online</div>
                  </div>
                  <a href="#" class="link text-master inline action p-r-10 pull-right ">
                    <i class="pg-more"></i>
                  </a>
                </div>
              </div>
              <!-- END Header  !-->
              <!-- BEGIN Conversation  !-->
              <div class="chat-inner" id="my-conversation">
                <!-- BEGIN From Me Message  !-->
                <div class="message clearfix">
                  <div class="chat-bubble from-me">
                    Hello there
                  </div>
                </div>
                <!-- END From Me Message  !-->
                <!-- BEGIN From Them Message  !-->
                <div class="message clearfix">
                  <div class="profile-img-wrapper m-t-5 inline">
                    <img class="col-top" width="30" height="30" src="assets/img/profiles/avatar_small.jpg" alt="" data-src="assets/img/profiles/avatar_small.jpg" data-src-retina="assets/img/profiles/avatar_small2x.jpg">
                  </div>
                  <div class="chat-bubble from-them">
                    Hey
                  </div>
                </div>
                <!-- END From Them Message  !-->
                <!-- BEGIN From Me Message  !-->
                <div class="message clearfix">
                  <div class="chat-bubble from-me">
                    Did you check out Pages framework ?
                  </div>
                </div>
                <!-- END From Me Message  !-->
                <!-- BEGIN From Me Message  !-->
                <div class="message clearfix">
                  <div class="chat-bubble from-me">
                    Its an awesome chat
                  </div>
                </div>
                <!-- END From Me Message  !-->
                <!-- BEGIN From Them Message  !-->
                <div class="message clearfix">
                  <div class="profile-img-wrapper m-t-5 inline">
                    <img class="col-top" width="30" height="30" src="assets/img/profiles/avatar_small.jpg" alt="" data-src="assets/img/profiles/avatar_small.jpg" data-src-retina="assets/img/profiles/avatar_small2x.jpg">
                  </div>
                  <div class="chat-bubble from-them">
                    Yea
                  </div>
                </div>
                <!-- END From Them Message  !-->
              </div>
              <!-- BEGIN Conversation  !-->
              <!-- BEGIN Chat Input  !-->
              <div class="b-t b-grey bg-white clearfix p-l-10 p-r-10">
                <div class="row">
                  <div class="col-xs-1 p-t-15">
                    <a href="#" class="link text-master"><i class="fa fa-plus-circle"></i></a>
                  </div>
                  <div class="col-xs-8 no-padding">
                    <input type="text" class="form-control chat-input" data-chat-input="" data-chat-conversation="#my-conversation" placeholder="Say something">
                  </div>
                  <div class="col-xs-2 link text-master m-l-10 m-t-15 p-l-10 b-l b-grey col-top">
                    <a href="#" class="link text-master"><i class="pg-camera"></i></a>
                  </div>
                </div>
              </div>
              <!-- END Chat Input  !-->
            </div>
            <!-- END Conversation View  !-->
          </div>
        </div>
      </div>
    </div>
    <!-- END QUICKVIEW-->
    <!-- START OVERLAY -->
    <div class="overlay hide" data-pages="search">
      <!-- BEGIN Overlay Content !-->
      <div class="overlay-content has-results m-t-20">
        <!-- BEGIN Overlay Header !-->
        <div class="container-fluid">
          <!-- BEGIN Overlay Logo !-->
          <img class="overlay-brand" src="assets/img/logo.png" alt="logo" data-src="assets/img/logo.png" data-src-retina="assets/img/logo_2x.png" width="78" height="22">
          <!-- END Overlay Logo !-->
          <!-- BEGIN Overlay Close !-->
          <a href="#" class="close-icon-light overlay-close text-black fs-16">
            <i class="pg-close"></i>
          </a>
          <!-- END Overlay Close !-->
        </div>
        <!-- END Overlay Header !-->
        <div class="container-fluid">
          <!-- BEGIN Overlay Controls !-->
          <input id="overlay-search" class="no-border overlay-search bg-transparent" placeholder="Search..." autocomplete="off" spellcheck="false">
          <br>
          <div class="inline-block">
            <div class="checkbox right">
              <input id="checkboxn" type="checkbox" value="1" checked="checked">
              <label for="checkboxn"><i class="fa fa-search"></i> Search within page</label>
            </div>
          </div>
          <div class="inline-block m-l-10">
            <p class="fs-13">Press enter to search</p>
          </div>
          <!-- END Overlay Controls !-->
        </div>
        <!-- BEGIN Overlay Search Results, This part is for demo purpose, you can add anything you like !-->
        <div class="container-fluid">
          <span>
                <strong>suggestions :</strong>
            </span>
          <span id="overlay-suggestions"></span>
          <br>
          <div class="search-results m-t-40">
            <p class="bold">Pages Search Results</p>
            <div class="row">
              <div class="col-md-6">
                <!-- BEGIN Search Result Item !-->
                <div class="">
                  <!-- BEGIN Search Result Item Thumbnail !-->
                  <div class="thumbnail-wrapper d48 circular bg-success text-white inline m-t-10">
                    <div>
                      <img width="50" height="50" src="assets/img/profiles/avatar.jpg" data-src="assets/img/profiles/avatar.jpg" data-src-retina="assets/img/profiles/avatar2x.jpg" alt="">
                    </div>
                  </div>
                  <!-- END Search Result Item Thumbnail !-->
                  <div class="p-l-10 inline p-t-5">
                    <h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> on pages</h5>
                    <p class="hint-text">via john smith</p>
                  </div>
                </div>
                <!-- END Search Result Item !-->
                <!-- BEGIN Search Result Item !-->
                <div class="">
                  <!-- BEGIN Search Result Item Thumbnail !-->
                  <div class="thumbnail-wrapper d48 circular bg-success text-white inline m-t-10">
                    <div>T</div>
                  </div>
                  <!-- END Search Result Item Thumbnail !-->
                  <div class="p-l-10 inline p-t-5">
                    <h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> related topics</h5>
                    <p class="hint-text">via pages</p>
                  </div>
                </div>
                <!-- END Search Result Item !-->
                <!-- BEGIN Search Result Item !-->
                <div class="">
                  <!-- BEGIN Search Result Item Thumbnail !-->
                  <div class="thumbnail-wrapper d48 circular bg-success text-white inline m-t-10">
                    <div><i class="fa fa-headphones large-text "></i>
                    </div>
                  </div>
                  <!-- END Search Result Item Thumbnail !-->
                  <div class="p-l-10 inline p-t-5">
                    <h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> music</h5>
                    <p class="hint-text">via pagesmix</p>
                  </div>
                </div>
                <!-- END Search Result Item !-->
              </div>
              <div class="col-md-6">
                <!-- BEGIN Search Result Item !-->
                <div class="">
                  <!-- BEGIN Search Result Item Thumbnail !-->
                  <div class="thumbnail-wrapper d48 circular bg-info text-white inline m-t-10">
                    <div><i class="fa fa-facebook large-text "></i>
                    </div>
                  </div>
                  <!-- END Search Result Item Thumbnail !-->
                  <div class="p-l-10 inline p-t-5">
                    <h5 class="m-b-5"><span class="semi-bold result-name">ice cream</span> on facebook</h5>
                    <p class="hint-text">via facebook</p>
                  </div>
                </div>
                <!-- END Search Result Item !-->
                <!-- BEGIN Search Result Item !-->
                <div class="">
                  <!-- BEGIN Search Result Item Thumbnail !-->
                  <div class="thumbnail-wrapper d48 circular bg-complete text-white inline m-t-10">
                    <div><i class="fa fa-twitter large-text "></i>
                    </div>
                  </div>
                  <!-- END Search Result Item Thumbnail !-->
                  <div class="p-l-10 inline p-t-5">
                    <h5 class="m-b-5">Tweats on<span class="semi-bold result-name"> ice cream</span></h5>
                    <p class="hint-text">via twitter</p>
                  </div>
                </div>
                <!-- END Search Result Item !-->
                <!-- BEGIN Search Result Item !-->
                <div class="">
                  <!-- BEGIN Search Result Item Thumbnail !-->
                  <div class="thumbnail-wrapper d48 circular text-white bg-danger inline m-t-10">
                    <div><i class="fa fa-google-plus large-text "></i>
                    </div>
                  </div>
                  <!-- END Search Result Item Thumbnail !-->
                  <div class="p-l-10 inline p-t-5">
                    <h5 class="m-b-5">Circles on<span class="semi-bold result-name"> ice cream</span></h5>
                    <p class="hint-text">via google plus</p>
                  </div>
                </div>
                <!-- END Search Result Item !-->
              </div>
            </div>
          </div>
        </div>
        <!-- END Overlay Search Results !-->
      </div>
      <!-- END Overlay Content !-->
    </div>
    <!-- END OVERLAY -->
    <!-- BEGIN VENDOR JS -->
    <script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery/jquery-1.11.1.min.js" type="text/javascript"></script>
    <script src="assets/plugins/modernizr.custom.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
    <script src="assets/plugins/bootstrapv3/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery/jquery-easy.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-bez/jquery.bez.min.js"></script>
    <script src="assets/plugins/jquery-ios-list/jquery.ioslist.min.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-actual/jquery.actual.min.js"></script>
    <script src="assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js"></script>
    <script type="text/javascript" src="assets/plugins/select2/js/select2.full.min.js"></script>
    <script type="text/javascript" src="assets/plugins/classie/classie.js"></script>
    <script src="assets/plugins/switchery/js/switchery.min.js" type="text/javascript"></script>
    <script src="assets/plugins/nvd3/lib/d3.v3.js" type="text/javascript"></script>
    <script src="assets/plugins/nvd3/nv.d3.min.js" type="text/javascript"></script>
    <script src="assets/plugins/nvd3/src/utils.js" type="text/javascript"></script>
    <script src="assets/plugins/nvd3/src/tooltip.js" type="text/javascript"></script>
    <script src="assets/plugins/nvd3/src/interactiveLayer.js" type="text/javascript"></script>
    <script src="assets/plugins/nvd3/src/models/axis.js" type="text/javascript"></script>
    <script src="assets/plugins/nvd3/src/models/line.js" type="text/javascript"></script>
    <script src="assets/plugins/nvd3/src/models/lineWithFocusChart.js" type="text/javascript"></script>
    <script src="assets/plugins/mapplic/js/hammer.js"></script>
    <script src="assets/plugins/mapplic/js/jquery.mousewheel.js"></script>
    <script src="assets/plugins/mapplic/js/mapplic.js"></script>
    <script src="assets/plugins/rickshaw/rickshaw.min.js"></script>
    <script src="assets/plugins/jquery-metrojs/MetroJs.min.js" type="text/javascript"></script>
    <script src="assets/plugins/jquery-sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
    <script src="assets/plugins/skycons/skycons.js" type="text/javascript"></script>
    <script src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js" type="text/javascript"></script>
    <!-- END VENDOR JS -->
    <!-- BEGIN CORE TEMPLATE JS -->
    <script src="pages/js/pages.min.js"></script>
    <!-- END CORE TEMPLATE JS -->
    <!-- BEGIN PAGE LEVEL JS -->
    <script src="assets/js/dashboard.js" type="text/javascript"></script>
    <script src="assets/js/scripts.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS -->
  </body>
</html>