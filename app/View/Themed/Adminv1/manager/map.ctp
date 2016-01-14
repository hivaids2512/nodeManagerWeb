<!DOCTYPE html>
<html>

    <head>
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <title><?= $title ?></title>
        <meta name="keywords" content="HTML5 Bootstrap 3 Admin Template UI Theme" />
        <meta name="description" content="AdminDesigns - SHARED ON THEMELOCK.COM">
        <meta name="author" content="AdminDesigns">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Font CSS (Via CDN) -->
        <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800'>
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto:400,500,700,300">

        <!-- Theme CSS -->
        <?= $this->Html->css('theme.css') ?>

        <!-- Favicon -->
        <?=
        $this->Html->meta(
                'favicon.ico', 'img/favicon.ico', array('type' => 'icon')
        );
        ?>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    </head>

    <body class="maps-full-page">

        <!-- Start: Theme Preview Pane -->
        <div id="skin-toolbox">


        </div>
        <!-- End: Theme Preview Pane -->

        <!-- Start: Main -->
        <div id="main">

            <!-- Start: Header -->
            <header class="navbar navbar-fixed-top bg-light">
                <div class="navbar-branding">
                    <a class="navbar-brand" href="dashboard.html"> <b>Node</b>Manager </a>
                    <span id="toggle_sidemenu_l" class="glyphicons glyphicons-show_lines"></span>
                    <ul class="nav navbar-nav pull-right hidden">
                        <li>
                            <a href="#" class="sidebar-menu-toggle">
                                <span class="octicon octicon-ruby fs20 mr10 pull-right "></span>
                            </a>
                        </li>
                    </ul>
                </div>

                <ul class="nav navbar-nav navbar-right">


                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle fw600 p15" data-toggle="dropdown"> <?= $this->Html->image('avatars/placeholder.png', array('class' => 'mw30 br64 mr15', 'alt' => 'avatar')); ?>
                            <span><?= $this->Session->flash('username'); ?></span>
                            <span class="caret caret-tp hidden-xs"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-persist pn w250 bg-white" role="menu">
                            <li class="br-t of-h">
                                <?=
                                $this->Html->link('<span class="fa fa-power-off pr5"></span> Logout </a>', array('controller' => 'login', 'action' => 'dologout'), array('escape' => false, 'class' => 'fw600 p12 animated animated-short fadeInDown'));
                                ?>


                            </li>
                        </ul>
                    </li>
                </ul>
            </header>
            <!-- End: Header -->

            <!-- Start: Sidebar -->
            <aside id="sidebar_left" class="nano nano-primary affix">
                <div class="nano-content">

                    <!-- Start: Sidebar Header -->
                    <header class="sidebar-header">
                        <div class="user-menu">
                            <div class="row text-center mbn">
                                <div class="col-xs-4">
                                    <a href="dashboard.html" class="text-primary" data-toggle="tooltip" data-placement="top" title="Dashboard">
                                        <span class="glyphicons glyphicons-home"></span>
                                    </a>
                                </div>
                                <div class="col-xs-4">
                                    <a href="pages_messages.html" class="text-info" data-toggle="tooltip" data-placement="top" title="Messages">
                                        <span class="glyphicons glyphicons-inbox"></span>
                                    </a>
                                </div>
                                <div class="col-xs-4">
                                    <a href="pages_profile.html" class="text-alert" data-toggle="tooltip" data-placement="top" title="Tasks">
                                        <span class="glyphicons glyphicons-bell"></span>
                                    </a>
                                </div>
                                <div class="col-xs-4">
                                    <a href="pages_timeline.html" class="text-system" data-toggle="tooltip" data-placement="top" title="Activity">
                                        <span class="glyphicons glyphicons-imac"></span>
                                    </a>
                                </div>
                                <div class="col-xs-4">
                                    <a href="pages_profile.html" class="text-danger" data-toggle="tooltip" data-placement="top" title="Settings">
                                        <span class="glyphicons glyphicons-settings"></span>
                                    </a>
                                </div>
                                <div class="col-xs-4">
                                    <a href="pages_gallery.html" class="text-warning" data-toggle="tooltip" data-placement="top" title="Cron Jobs">
                                        <span class="glyphicons glyphicons-restart"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </header>
                    <!-- End: Sidebar Header -->

                    <!-- sidebar menu -->
                    <ul class="nav sidebar-menu">
                        <li class="sidebar-label pt20">Node Manager</li>
                        <li>
                            <?=
                            $this->Html->link('<span class="glyphicons glyphicons-globe"></span>
                                <span class="sidebar-title">Map</span>', array('controller' => 'manager', 'action' => 'map'), array('escape' => false));
                            ?>
                        </li>
                        <li>
                            <?=
                            $this->Html->link('<span class="glyphicons glyphicons-charts"></span>
                                <span class="sidebar-title">Statistic</span>', array('controller' => 'manager', 'action' => 'index'), array('escape' => false));
                            ?>
                        </li>
                        <li>
                            <?=
                            $this->Html->link('<span class="glyphicons glyphicons-table"></span>
                                <span class="sidebar-title">Data</span>', array('controller' => 'manager', 'action' => 'data'), array('escape' => false));
                            ?>
                        </li>
                        <li class="sidebar-label pt20">Node Configuration</li>
                        <li>
                            <?=
                            $this->Html->link('<span class="glyphicons glyphicon-plus-sign"></span>
                                <span class="sidebar-title">Add Node</span>', array('controller' => 'manager', 'action' => 'addnode'), array('escape' => false));
                            ?>
                        </li>
                        <li>
                            <?=
                            $this->Html->link('<span class="glyphicons glyphicons-cogwheels"></span>
                                <span class="sidebar-title">Node Configuration</span>', array('controller' => 'manager', 'action' => 'nodeconfig'), array('escape' => false));
                            ?>
                        </li>
                        
                    </ul>
                    <div class="sidebar-toggle-mini">
                        <a href="#">
                            <span class="fa fa-sign-out"></span>
                        </a>
                    </div>
                </div>
            </aside>

            <!-- Start: Content-Wrapper -->
            <section id="content_wrapper">

                <!-- Start: Topbar-Dropdown -->
                <div id="topbar-dropmenu">
                    <div class="topbar-menu row">
                        <div class="col-xs-4 col-sm-2">
                            <a href="#" class="metro-tile bg-success">
                                <span class="metro-icon glyphicons glyphicons-inbox"></span>
                                <p class="metro-title">Messages</p>
                            </a>
                        </div>
                        <div class="col-xs-4 col-sm-2">
                            <a href="#" class="metro-tile bg-info">
                                <span class="metro-icon glyphicons glyphicons-parents"></span>
                                <p class="metro-title">Users</p>
                            </a>
                        </div>
                        <div class="col-xs-4 col-sm-2">
                            <a href="#" class="metro-tile bg-alert">
                                <span class="metro-icon glyphicons glyphicons-headset"></span>
                                <p class="metro-title">Support</p>
                            </a>
                        </div>
                        <div class="col-xs-4 col-sm-2">
                            <a href="#" class="metro-tile bg-primary">
                                <span class="metro-icon glyphicons glyphicons-cogwheels"></span>
                                <p class="metro-title">Settings</p>
                            </a>
                        </div>
                        <div class="col-xs-4 col-sm-2">
                            <a href="#" class="metro-tile bg-warning">
                                <span class="metro-icon glyphicons glyphicons-facetime_video"></span>
                                <p class="metro-title">Videos</p>
                            </a>
                        </div>
                        <div class="col-xs-4 col-sm-2">
                            <a href="#" class="metro-tile bg-system">
                                <span class="metro-icon glyphicons glyphicons-picture"></span>
                                <p class="metro-title">Pictures</p>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- End: Topbar-Dropdown -->

                <!-- Start: Topbar -->
                <header id="topbar">
                    <div class="topbar-left">
                        <ol class="breadcrumb">
                            <li class="br-t of-h">
                                <?=
                                $this->Html->link('<span class="glyphicon glyphicon-home"></span>', array('controller' => 'admin', 'action' => 'index'), array('escape' => false,));
                                ?>


                            </li>
                            <li class="br-t of-h">
                                <?=
                                $this->Html->link('Map', array('controller' => 'admin', 'action' => 'map'), array('escape' => false,));
                                ?>


                            </li>
                        </ol>
                    </div>
                    <div class="topbar-right">
                        <div class="ml15 ib va-m" id="toggle_sidemenu_r">
                            <a href="#" class="pl5"> <i class="fa fa-sign-in fs22 text-primary"></i>
                            </a>
                        </div>
                    </div>
                </header>
                <!-- End: Topbar -->

                <!-- Begin: Content -->
                <section id="content" class="pn posr">

                    <div id="map1" class="map" style="width: 100%; height: 100%;"></div>

                </section>
                <!-- End: Content -->

            </section>

            <!-- Start: Right Sidebar -->
            <aside id="sidebar_right" class="nano">
                <div class="sidebar_right_content nano-content">
                    <div class="tab-block sidebar-block br-n">
                        <ul class="nav nav-tabs tabs-border nav-justified hidden">
                            <li class="active">
                                <a href="#sidebar-right-tab1" data-toggle="tab">Tab 1</a>
                            </li>
                            <li>
                                <a href="#sidebar-right-tab2" data-toggle="tab">Tab 2</a>
                            </li>
                            <li>
                                <a href="#sidebar-right-tab3" data-toggle="tab">Tab 3</a>
                            </li>
                        </ul>
                        <div class="tab-content br-n">
                            <div id="sidebar-right-tab1" class="tab-pane active">

                                <h5 class="title-divider text-muted mb20"> Node Statistics <span class="pull-right"> <i class="fa fa-caret-down ml5"></i> </span> </h5>


                                <h5 class="title-divider text-muted mt30 mb10" >Longtitude</h5>
                                <div class="row">
                                    <div class="col-xs-5">
                                        <h3 class="text-primary mn pl5" id="longtitude">N/A</h3>
                                    </div>

                                </div>

                                <h5 class="title-divider text-muted mt25 mb10" >Latitude</h5>
                                <div class="row">
                                    <div class="col-xs-5">
                                        <h3 class="text-primary mn pl5" id="latitude">N/A</h3>
                                    </div>

                                </div>
                                
                                <h5 class="title-divider text-muted mt30 mb10" >Node Name</h5>
                                <div class="row">
                                    <div class="col-xs-5">
                                        <h3 class="text-primary mn pl5" id="nodename">N/A</h3>
                                    </div>

                                </div>
                                
                                <h5 class="title-divider text-muted mt30 mb10" >Node Location</h5>
                                <div class="row">
                                    <div class="col-xs-5">
                                        <h3 class="text-primary mn pl5" id="nodelocation">N/A</h3>
                                    </div>

                                </div>
                                
                                <h5 class="title-divider text-muted mt30 mb10" >Other Information</h5>
                                <div class="row">
                                    <div class="col-xs-5">
                                        <h3 class="text-primary mn pl5" id="nodeother">N/A</h3>
                                    </div>

                                </div>
                                
                                <h5 class="title-divider text-muted mt30 mb10" >Node Control</h5>
                                <div class="row">
                                    <div class="col-xs-5">
                                        <h3 class="text-primary mn pl5" id="longtitude">N/A</h3>
                                    </div>

                                </div>


                            </div>
                            <div id="sidebar-right-tab2" class="tab-pane"></div>
                            <div id="sidebar-right-tab3" class="tab-pane"></div>
                        </div>
                        <!-- end: .tab-content -->
                    </div>
                </div>
            </aside>
            <!-- End: Right Sidebar -->

        </div>
        <!-- End: Main -->

        <!-- BEGIN: PAGE SCRIPTS -->

        <!-- Google Map API -->

        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>

        <?= $this->Html->script(['jquery/jquery-1.11.1.min.js', 'jquery/jquery_ui/jquery-ui.min.js', 'bootstrap.min.js', 'plugins/map/gmaps.min.js', 'plugins/gmap/jquery.ui.map.min.js', 'plugins/raphael/raphael.js', 'bootstrap/holder.min.js', 'utility/utility.js', 'main.js', 'demo.js', 'admin/json2.js', 'admin/jquery.ui.touch-punch.min.js', 'admin/adminpanels.js', 'pages/widgets.js']) ?>
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <script type="text/javascript">
            jQuery(document).ready(function () {

                "use strict";

                // Init Theme Core    
                Core.init();

                // Init Theme Core    
                Demo.init();

                var map = new GMaps({
                    div: '#map1',
                    lat: 10.85142,
                    lng: 106.74727,
                    zoom: 10,
                });

                function setData(data) {
                    $('#longtitude').empty;
                    $('#latitude').empty();
                    $('#nodename').empty;
                    $('#nodelocation').empty();
                    $('#other').empty;
                    
                    var long = data.split(";")[0];
                    var lat = data.split(";")[1];
                    var name = data.split(";")[2];
                    var location = data.split(";")[3];
                    var other = data.split(";")[4];
                    
                    $('#longtitude').html(long);
                    $('#latitude').html(lat);
                    $('#nodename').html(name);
                    $('#nodelocation').html(location);
                    $('#nodeother').html(other);
                    
                }

                $.ajax({
                    type: "GET",
                    url: "../map.json",
                    //data: $("#update_document").serialize(),
                    dataType: "text",
                    beforeSend: function () {
                        //$(".post_submitting").show().html("<center><img src='images/loading.gif'/></center>");
                    },
                    success: function (response) {
                        var data = jQuery.parseJSON(response).nodes;
                        for (var i = 0; i < data.length; i++) {

                            map.addMarker({
                                lat: data[i].Node.latitude,
                                lng: data[i].Node.longtitude,
                                title: data[i].Node.nodeid,
                                infoWindow: {
                                    content: data[i].Node.nodename
                                },
                                click: (function (t) {
                                    return function () {
                                        setData(t);
                                    };
                                })(data[i].Node.longtitude + ";" + data[i].Node.latitude + ";" + data[i].Node.nodename + ";" + data[i].Node.nodelocation + ";" + data[i].Node.other  )
                                //icon: "http://maps.google.com/mapfiles/marker_yellow.png"
                            });
                        }
                    }
                });
            });
        </script>
        <!-- END: PAGE SCRIPTS -->

    </body>

</html>
