<?php
$current_date = date('Y-m-d');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>Pages - Admin Dashboard UI Kit - Form Layouts</title>
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
    <link href="assets/plugins/bootstrap-datepicker/css/datepicker3.css" rel="stylesheet" type="text/css" media="screen">
    <link href="pages/css/pages-icons.css" rel="stylesheet" type="text/css">
    <link class="main-stylesheet" href="pages/css/pages.css" rel="stylesheet" type="text/css" />
    <!--[if lte IE 9]>
	<link href="assets/plugins/codrops-dialogFx/dialog.ie.css" rel="stylesheet" type="text/css" media="screen" />
	<![endif]-->
  </head>
  <body class="fixed-header ">
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
        <div class="content ">
          <!-- START CONTAINER FLUID -->
          <div class="container-fluid container-fixed-lg">
            <!-- START BREADCRUMB -->
            <ul class="breadcrumb">
              <li>
                <a href="#">Dashboard</a>
              </li>
              <li><a href="#" class="active">Manage Campaigns</a>
              <li><a href="#" class="active">Create A Campaign</a>
              </li>
            </ul>
            <!-- END BREADCRUMB -->
            <!-- <div class="row">
              <div class="col-lg-7 col-md-6 "> -->
                <!-- START PANEL -->
                <!-- <div class="panel panel-transparent">
                  <div class="panel-body">
                    <form id="form-personal" role="form" autocomplete="off">
                      <div class="row clearfix">
                        <div class="col-sm-6">
                          <div class="form-group form-group-default required">
                            <label>First name</label>
                            <input type="text" class="form-control" name="firstName" required>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group form-group-default">
                            <label>Last name</label>
                            <input type="text" class="form-control" name="lastName" required>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="form-group form-group-default input-group">
                            <label>Pages username</label>
                            <input type="text" class="form-control" name="username" placeholder="yourname.pages.com (this can be changed later)" required>
                            <span class="input-group-addon">
                                                       .pages.com
                                                    </span>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="form-group form-group-default">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Minimum of 4 characters." required>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="form-group form-group-default">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" placeholder="We’ll send your login details to this address" required>
                          </div>
                        </div>
                      </div>
                      <p class="pull-left">
                        I agree to the <a href="#">Pages Terms</a> and <a href="#">Privacy</a>.
                      </p>
                      <p class="pull-right">
                        <a href="#">Help? Contact Support</a>
                      </p>
                      <div class="clearfix"></div>
                      <button class="btn btn-primary" type="submit">Create a new account</button>
                    </form>
                  </div>
                </div> -->
                <!-- END PANEL -->
              <!-- </div>
              <div class="col-lg-5 col-md-6"> -->
                <!-- START PANEL -->
                <!-- <div class="panel panel-transparent">
                  <div class="panel-heading">
                    <div class="panel-title">Validation
                    </div>
                  </div>
                  <div class="panel-body">
                    <h3>Showcase and guide users with a <br>
							better User Interface &amp; Experience.</h3>
                    <p>Forms are one of the most important components
                      <br> when it comes to a dashboard. Recognizing that fact, users are
                      <br>able work in a maximum content width.</p>
                    <br>
                    <p class="small hint-text m-t-5">VIA senior product manager
                      <br> for UI/UX at REVOX</p>
                    <button class="btn btn-primary btn-cons">More</button>
                  </div>
                </div> -->
                <!-- END PANEL -->
              <!-- </div>
            </div>
          </div> -->
          <!-- END CONTAINER FLUID -->
          <!-- START CONTAINER FLUID -->
          <!-- <div class="container-fluid container-fixed-lg bg-white">
            <div class="row">
              <div class="col-sm-5"> -->
                <!-- START PANEL -->
                <!-- <div class="panel panel-transparent">
                  <div class="panel-heading">
                    <div class="panel-title">Attached form layouts
                    </div>
                  </div>
                  <div class="panel-body">
                    <h3>Attach your Forms to Organize
							&amp; Create Contemporary feels</h3>
                    <p>Despite the UI, We thought of the User experience, With attached From Layouts you can simply categories Important fields and prioritize them.</p>
                    <br>
                    <div>
                      <div class="profile-img-wrapper m-t-5 inline">
                        <img width="35" height="35" src="assets/img/profiles/avatar_small.jpg" alt="" data-src="assets/img/profiles/avatar_small.jpg" data-src-retina="assets/img/profiles/avatar_small2x.jpg">
                        <div class="chat-status available">
                        </div>
                      </div>
                      <div class="inline m-l-10">
                        <p class="small hint-text">VIA senior product manage
                          <br> for UI/UX at REVOX</p>
                      </div>
                    </div>
                  </div>
                </div> -->
                <!-- END PANEL -->
              <!-- </div>
              <div class="col-sm-7"> -->
                <!-- START PANEL -->
                <!-- <div class="panel panel-transparent">
                  <div class="panel-body">
                    <form id="form-project" role="form" autocomplete="off">
                      <p>Basic Information</p>
                      <div class="form-group-attached">
                        <div class="form-group form-group-default required">
                          <label>Project name</label>
                          <input type="text" class="form-control" name="projectName" required>
                        </div>
                        <div class="row clearfix">
                          <div class="col-sm-6">
                            <div class="form-group form-group-default required">
                              <label>First name</label>
                              <input type="text" class="form-control" name="firstName" required>
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group form-group-default">
                              <label>Last name</label>
                              <input type="text" class="form-control" name="lastName">
                            </div>
                          </div>
                        </div>
                      </div>
                      <p class="m-t-10">Advanced Information</p>
                      <div class="form-group-attached">
                        <div class="form-group form-group-default">
                          <label>Investor <i class="fa fa-info text-complete m-l-5"></i>
                          </label>
                          <input type="text" class="form-control" name="investor">
                        </div>
                        <div class="row clearfix">
                          <div class="col-sm-6">
                            <div class="form-group form-group-default required">
                              <label>Starting date</label>
                              <input id="start-date" type="text" class="form-control date" name="startDate" required>
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group form-group-default">
                              <label>Deadline</label>
                              <input id="end-date" type="text" class="form-control date" name="endDate">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-6">
                            <div class="form-group form-group-default required">
                              <label>Website</label>
                              <input type="text" class="form-control" name="url">
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group form-group-default input-group">
                              <label class="inline">Availability</label>
                              <span class="input-group-addon bg-transparent">
												<input type="checkbox" data-init-plugin="switchery" data-size="small" data-color="primary" checked="checked" />
											</span>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-4">
                            <div class="form-group form-group-default input-group">
                              <label>Budget</label>
                              <input type="text" class="form-control usd" required>
                              <span class="input-group-addon">
                                                       USD
                                                    </span>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-group form-group-default input-group">
                              <label>Profit</label>
                              <input type="text" class="form-control usd">
                              <span class="input-group-addon">
                                                       USD
                                                    </span>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="form-group form-group-default input-group">
                              <label>Revenue</label>
                              <input type="text" class="form-control usd">
                              <span class="input-group-addon">
                                                       USD
                                                    </span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <br>
                      <div class="pull-left">
                        <div class="checkbox check-success  ">
                          <input type="checkbox" checked="checked" value="1" id="checkbox-agree">
                          <label for="checkbox-agree">I hereby certify that the information above is true and accurate
                          </label>
                        </div>
                      </div>
                      <br>
                      <button class="btn btn-success" type="submit">Submit</button>
                      <button class="btn btn-default"><i class="pg-close"></i> Clear</button>
                    </form>
                  </div>
                </div> -->
                <!-- END PANEL -->
              <!-- </div>
            </div>
          </div> -->
          <!-- END CONTAINER FLUID -->
          <!-- START CONTAINER FLUID -->
          <div class="container-fluid container-fixed-lg">
            <!-- START PANEL -->
            <div class="panel panel-transparent">
              <div class="panel-heading">
                <div class="panel-title">Create A Campaign
                </div>
              </div>
              <div class="panel-body">
                <div class="row">
                  <div class="col-sm-10">
                    <!-- <h3>Simple but not simpler, Seperate your forms and create diversified info graphic</h3>
                    <p>Want it to be more Descriptive and User Friendly, We Made it possible, Use Seperated Form Layouts Structure to Presentate your Form Fields.
                    </p> -->
                    <br>
                    <!-- <p class="small hint-text">To Add A full Width Portlet - Class - portlet-full This can be used in any
                      <br> widget or situation, Highly Recomended on Forms and tables</p> -->
                    <form id="form-work" class="form-horizontal" role="form" autocomplete="off">
                      <div class="form-group">
                        <label for="fname" class="col-sm-3 control-label">Campaign Name</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="fname" placeholder="Full name" name="name" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="fname" class="col-sm-3 control-label">Campaign Type</label>
                        <div class="col-sm-9">
                          <select class="full-width" data-init-plugin="select2">
                              <option value="competition">Competition</option>
                              <option value="discount">Discount</option>
                              <option value="event">Event</option>
                              <option value="promotion">Promotion</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="name" class="col-sm-3 control-label">Description</label>
                        <div class="col-sm-9">
                          <textarea class="form-control" id="name" placeholder="Briefly Describe your Campaign"></textarea>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="fname" class="col-sm-3 control-label">Location</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="fname" placeholder="Full name" name="name" required>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="fname" class="col-sm-3 control-label">Campaign Ad</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="fname" placeholder="Full name" name="name" required>
                        </div>
                      </div>
                      <!-- <div class="form-group">
                        <label class="col-sm-3 control-label">Your gender</label>
                        <div class="col-sm-9">
                          <div class="radio radio-success">
                            <input type="radio" value="male" name="optionyes" id="male">
                            <label for="male">Male</label>
                            <input type="radio" checked="checked" value="female" name="optionyes" id="female">
                            <label for="female">Female</label>
                          </div>
                        </div>
                      </div> -->
                      <div class="form-group">
                        <label class="col-sm-3 control-label">Campaign Period</label>
                        <div class="col-sm-9">
                          <p>How long do you want the campaign to last?</p>
                          <p class="hint-text small">You can cancel the campaign while it's active</p>
                          <div class="row">
                            <div class="col-sm-5">
                              <label>Start Date</label>
                              <input type="date" class="form-control" value="<?php echo $current_date;?>" required>
                            </div>
                            <div class="col-sm-5 sm-m-t-10">
                              <label>End Date</label>
                              <input type="date" class="form-control" value="<?php echo $current_date;?>" required>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                    <h5>Date <span class="semi-bold">Range</span></h5>
                    <p>Date range can be set by the same plugin, this is use full when taking two dates at a time
                    </p>
                    <br>
                    <div class="input-daterange input-group" id="datepicker-range">
                      <input type="text" class="input-sm form-control" name="start" />
                      <span class="input-group-addon">to</span>
                      <input type="text" class="input-sm form-control" name="end" />
                    </div>
                    <br>
                    <div class="input-prepend input-group">
                      <span class="add-on input-group-addon"><i	class="glyphicon glyphicon-calendar fa fa-calendar"></i></span>
                      <input type="text" style="width: 100%" name="reservation" id="daterangepicker" class="form-control" value="08/01/2013 1:00 PM - 08/01/2013 1:30 PM" />
                    </div>
                    <br>
                    <div class="row">
                      <div class="col-sm-6">
                        <div class="input-group bootstrap-timepicker">
                          <input id="timepicker" type="text" class="form-control">
                          <span class="input-group-addon"><i class="pg-clock"></i></span>
                        </div>
                      </div>
                    </div>
                  </div>
                      <!-- <div class="form-group">
                        <label for="position" class="col-sm-3 control-label">Position applying for</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="position" placeholder="Designation" required>
                        </div>
                      </div> -->
                      <br>
                      <div class="row">
                        <div class="col-sm-3">
                          <!-- <p>I hereby certify that the information above is true and accurate. </p> -->
                        </div>
                        <div class="col-sm-9">
                          <button class="btn btn-success" type="submit">Submit</button>
                          <button class="btn btn-default"><i class="pg-close"></i> Clear</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <br>
            <!-- END PANEL -->
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
    <script src="assets/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
    <script src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js" type="text/javascript"></script>
    <script src="assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="assets/plugins/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>
    <script src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js" type="text/javascript"></script>
    <!-- END VENDOR JS -->
    <!-- BEGIN CORE TEMPLATE JS -->
    <script src="pages/js/pages.min.js"></script>
    <!-- END CORE TEMPLATE JS -->
    <!-- BEGIN PAGE LEVEL JS -->
    <script src="assets/js/form_layouts.js" type="text/javascript"></script>
    <script src="assets/js/scripts.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS -->
  </body>
</html>