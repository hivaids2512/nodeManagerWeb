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

        <!-- Admin Forms CSS -->
        <?= $this->Html->css('admin/admin-forms.css') ?>

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

    <body class="charts-highcharts-page" data-spy="scroll" data-target="#nav-spy" data-offset="100">

        <!-- Start: Theme Preview Pane -->
        <div id="skin-toolbox">
            <div class="panel">

            </div>
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

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle fw600 p15" data-toggle="dropdown"> <?= $this->Html->image('avatars/placeholder.png', array('class' => 'mw30 br64 mr15', 'alt' => 'avatar')); ?>
                            <span><?= $this->Session->flash('username'); ?></span>
                            <span class="caret caret-tp hidden-xs"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-persist pn w250 bg-white" role="menu">
                            <li class="br-t of-h">
                                <?=$this->Html->link('<span class="fa fa-power-off pr5"></span> Logout </a>',
                                array('controller'=>'login','action'=>'dologout'),
                                array('escape'=>false, 'class' => 'fw600 p12 animated animated-short fadeInDown'));?>
                               
                                    
                            </li>
                        </ul>
                    </li>
                </ul>
            </header>
            <!-- End: Header -->

            <!-- Start: Sidebar -->
            <aside id="sidebar_left" class="nano nano-primary">
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
                                <?=$this->Html->link('<span class="glyphicon glyphicon-home"></span>',
                                array('controller'=>'admin','action'=>'index'),
                                array('escape'=>false,));?>
                               
                                    
                            </li>
                            <li class="br-t of-h">
                                <?=$this->Html->link('Statistic',
                                array('controller'=>'admin','action'=>'statistic'),
                                array('escape'=>false,));?>
                               
                                    
                            </li>
                        </ol>
                    </div>

                </header>
                <!-- End: Topbar -->

                <!-- Begin: Content -->
                <section id="content" class="table-layout animated fadeIn">


                    <!-- end: .tray-left -->

                    <!-- begin: .tray-center -->
                    <div class="tray tray-center p40 va-t posr">

                        <!-- Basic Column Chart -->
                        <div class="panel" id="pchart1">
                            <div class="panel-heading">
                                <span class="panel-icon"><i class="fa fa-pencil"></i>
                                </span>
                                <span class="panel-title"> Basic Column Chart</span>
                            </div>
                            <div class="panel-body bg-light dark">

                                <div id="high-column2" style="width: 100%; height: 430px; margin: 0 auto"></div>

                            </div>
                        </div>

                        <!-- Synced Line Chart -->
                        <div class="panel" id="pchart2">
                            <div class="panel-heading">
                                <span class="panel-title text-info fw700">Line Chart with Submenu</span>
                            </div>
                            <div class="panel-body pn bg-light dark">
                                <div id="high-datamap" style="width: 100%; height: 300px; margin: 0 auto"></div>
                            </div>
                            <div class="panel-footer bg-light pn">
                                <div id="high-siblingmap" style="width: 100%; height: 140px; margin: 0 auto"></div>
                            </div>
                        </div>

                        <!-- Filterable Column Chart -->
                        <div class="panel" id="pchart3">
                            <div class="panel-heading">
                                <span class="panel-title text-info fw700"><i class="fa fa-pencil hidden"></i> Filterable Column Chart</span>
                            </div>
                            <div class="panel-menu hidden">
                                <div class="chart-legend" data-chart-id="#high-line">
                                    <button type="button" data-chart-id="0" class="legend-item btn btn-sm btn-primary mr10">Data 1</button>
                                    <button type="button" data-chart-id="1" class="legend-item btn btn-info btn-sm">Data 2</button>
                                </div>
                            </div>
                            <div class="panel-body pn">
                                <div id="high-line" style="width: 100%; height: 275px; margin: 0 auto"></div>

                                <div class="p15 pt5 mt15 bg-light br-t">
                                    <table class="table mbn admin-form fs13 table-legend" data-chart-id="#high-line">
                                        <thead>
                                            <tr class="">
                                                <th class="w30">ID</th>
                                                <th class="w50">Chart</th>
                                                <th>Page Source</th>
                                                <th class="text-right">Page Hits</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="fs15 fw700">1.</td>
                                                <td>
                                                    <label class="switch switch-custom block mbn">
                                                        <input type="checkbox" class="legend-switch" name="features" id="s1" value="0">
                                                        <label for="s1" data-on="ON" data-off="OFF"></label>
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td class="va-m fw600 text-muted">
                                                    <span class="news-sprite yahoo mr15"></span>www.yahoo.com/race-car-rally
                                                </td>
                                                <td class="fs15 fw700 text-right">18,625</td>
                                            </tr>
                                            <tr>
                                                <td class="fs15 fw700">2.</td>
                                                <td>
                                                    <label class="switch switch-custom block mbn">
                                                        <input type="checkbox" class="legend-switch" name="features" id="s2" value="1">
                                                        <label for="s2" data-on="ON" data-off="OFF"></label>
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td class="va-m fw600 text-muted">
                                                    <span class="news-sprite yahoo mr15"></span>www.yahoo.com/sports/soccer/brazil-fans-outcheer
                                                </td>
                                                <td class="fs15 fw700 text-right">11,812</td>
                                            </tr>
                                            <tr>
                                                <td class="fs15 fw700">2.</td>
                                                <td>
                                                    <label class="switch switch-custom block mbn">
                                                        <input type="checkbox" class="legend-switch" name="features" id="s3" value="2">
                                                        <label for="s3" data-on="ON" data-off="OFF"></label>
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td class="va-m fw600 text-muted">
                                                    <span class="news-sprite fb mr15"></span>www.facebook.com/news/actor-bill_thornberry-passes-at-42
                                                </td>
                                                <td class="fs15 fw700 text-right">6,149</td>
                                            </tr>
                                            <tr>
                                                <td class="fs15 fw700">2.</td>
                                                <td>
                                                    <label class="switch switch-custom block mbn">
                                                        <input type="checkbox" class="legend-switch" name="features" id="s4" value="3">
                                                        <label for="s4" data-on="ON" data-off="OFF"></label>
                                                        <span></span>
                                                    </label>
                                                </td>
                                                <td class="va-m fw600 text-muted">
                                                    <span class="news-sprite cnn mr15"></span>www.cnn.com/money/stock-market-races-to-glorious-open
                                                </td>
                                                <td class="fs15 fw700 text-right">2,525</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <!-- Sparklines Table -->
                        <div class="panel" id="pchart4">
                            <div class="panel-heading">
                                <span class="panel-title text-info fw700"><i class="fa fa-pencil hidden"></i> Sparklines Chart</span>
                            </div>
                            <div class="panel-body of-a pn">
                                <table class="table mbn table-bordered">
                                    <thead>
                                        <tr class="bg-light">
                                            <th style="width: 20%">Name</th>
                                            <th style="width: 20%">Count</th>
                                            <th style="width: 20%">Memory</th>
                                            <th style="width: 20%">CPU</th>
                                            <th style="width: 20%">Disk I/O</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="p15 mnw150">
                                                <h4 class="mb15 text-muted">Apache</h4>
                                                <div class="progress progress-bar-sm mb5">
                                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                                        <span class="sr-only">60%</span>
                                                    </div>
                                                </div>
                                                <p><b class="text-info">95%</b>
                                                    <span class="pull-right text-muted">1,200 GB left</span>
                                                </p>
                                            </td>
                                            <td class="p15">
                                                <h4 class="mb25 text-muted">12</h4>
                                                <span class="inlinesparkline" sparkWidth="100%" data-spark-color="info" values="5,6,7,9,9,5,3,2,2,4,6,7,6,7,9,9,5,3,2,2,4,6,7"></span>
                                            </td>
                                            <td class="p15">
                                                <h4 class="mb25 text-muted">200 MB</h4>
                                                <span class="inlinesparkline" sparkWidth="100%" data-spark-color="info" values="5,6,7,9,9,5,3,2,2,4,6,7,6,7,9,9,5,3,2,2,4,6,7"></span>
                                            </td>
                                            <td class="p15">
                                                <h4 class="mb25 text-muted">30%</h4>
                                                <span class="inlinesparkline" sparkWidth="100%" data-spark-color="info" values="5,6,7,9,9,5,3,2,2,4,6,7,6,7,9,9,5,3,2,2,4,6,7"></span>
                                            </td>
                                            <td class="p15">
                                                <h4 class="mb25 text-muted">89 KB/s</h4>
                                                <span class="inlinesparkline" sparkWidth="100%" data-spark-color="info" values="5,6,7,9,9,5,3,2,2,4,6,7,6,7,9,9,5,3,2,2,4,6,7"></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p15">
                                                <h4 class="mb15 text-muted">Postfix</h4>
                                                <div class="progress progress-bar-sm mb5">
                                                    <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%;">
                                                        <span class="sr-only">45%</span>
                                                    </div>
                                                </div>
                                                <p><b class="text-primary">45%</b>
                                                    <span class="pull-right text-muted">2,500 GB left</span>
                                                </p>
                                            </td>
                                            <td class="p15">
                                                <h4 class="mb25 text-muted">42</h4>
                                                <span class="inlinesparkline" sparkWidth="100%" data-spark-color="primary" values="5,6,7,9,9,5,3,2,2,4,6,7,6,7,9,9,5,3,2,2,4,6,7"></span>
                                            </td>
                                            <td class="p15">
                                                <h4 class="mb25 text-muted">300 MB</h4>
                                                <span class="inlinesparkline" sparkWidth="100%" data-spark-color="primary" values="5,6,7,9,9,5,3,2,2,4,6,7,6,7,9,9,5,3,2,2,4,6,7"></span>
                                            </td>
                                            <td class="p15">
                                                <h4 class="mb25 text-muted">30%</h4>
                                                <span class="inlinesparkline" sparkWidth="100%" data-spark-color="primary" values="5,6,7,9,9,5,3,2,2,4,6,7,6,7,9,9,5,3,2,2,4,6,7"></span>
                                            </td>
                                            <td class="p15">
                                                <h4 class="mb25 text-muted">127 KB/s</h4>
                                                <span class="inlinesparkline" sparkWidth="100%" data-spark-color="primary" values="5,6,7,9,9,5,3,2,2,4,6,7,6,7,9,9,5,3,2,2,4,6,7"></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p15">
                                                <h4 class="mb15 text-muted">MySQL</h4>
                                                <div class="progress progress-bar-sm mb5">
                                                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
                                                        <span class="sr-only">80%</span>
                                                    </div>
                                                </div>
                                                <p><b class="text-warning">80%</b>
                                                    <span class="pull-right text-muted">900 GB left</span>
                                                </p>
                                            </td>
                                            <td class="p15">
                                                <h4 class="mb25 text-muted">26</h4>
                                                <span class="inlinesparkline" sparkWidth="100%" data-spark-color="warning" values="5,6,7,9,9,5,3,2,2,4,6,7,6,7,9,9,5,3,2,2,4,6,7"></span>
                                            </td>
                                            <td class="p15">
                                                <h4 class="mb25 text-muted">150 MB</h4>
                                                <span class="inlinesparkline" sparkWidth="100%" data-spark-color="warning" values="5,6,7,9,9,5,3,2,2,4,6,7,6,7,9,9,5,3,2,2,4,6,7"></span>
                                            </td>
                                            <td class="p15">
                                                <h4 class="mb25 text-muted">30%</h4>
                                                <span class="inlinesparkline" sparkWidth="100%" data-spark-color="warning" values="5,6,7,9,9,5,3,2,2,4,6,7,6,7,9,9,5,3,2,2,4,6,7"></span>
                                            </td>
                                            <td class="p15">
                                                <h4 class="mb25 text-muted">39 KB/s</h4>
                                                <span class="inlinesparkline" sparkWidth="100%" data-spark-color="warning" values="5,6,7,9,9,5,3,2,2,4,6,7,6,7,9,9,5,3,2,2,4,6,7"></span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!-- Pie and Circle Stats  -->
                        <div class="row" id="pchart5">
                            <div class="col-md-5">
                                <!-- Pie Chart -->
                                <div class="panel">
                                    <div class="panel-heading">
                                        <span class="panel-title fw700 text-info">Pie Chart</span>
                                    </div>
                                    <div class="panel-body pn">
                                        <div id="high-pie" style="width: 100%; height: 210px; margin: 0 auto"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <!-- Circle Stats -->
                                <div class="panel">
                                    <div class="panel-heading">
                                        <span class="panel-title fw700 text-info">Circulars</span>
                                        <div class="widget-menu pull-right mr10 hidden">
                                            <span class="fs11 text-muted"><i class="fa fa-circle text-warning fs12 pr5"></i> Twitter</span>
                                            <span class="fs11 text-muted ml10"><i class="fa fa-circle text-info fs12 pr5"></i> Facebook</span>
                                            <span class="fs11 text-muted ml10"><i class="fa fa-circle text-primary fs12 pr5"></i> Google+</span>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <div class="mb20 text-right">
                                            <span class="fs11 text-muted"><i class="fa fa-circle text-warning fs12 pr5"></i> Twitter</span>
                                            <span class="fs11 text-muted ml10"><i class="fa fa-circle text-info fs12 pr5"></i> Facebook</span>
                                            <span class="fs11 text-muted ml10"><i class="fa fa-circle text-primary fs12 pr5"></i> Google+</span>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 text-center">
                                                <div class="info-circle" id="c1" title="Twitter" value="80" data-circle-color="primary"></div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="info-circle" id="c2" title="Facebook" value="30" data-circle-color="info"></div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="info-circle" id="c3" title="Behance" value="55" data-circle-color="warning"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Column Graph -->
                        <div class="panel" id="pchart7">
                            <div class="panel-heading">
                                <span class="panel-title text-info fw700"><i class="fa fa-pencil hidden"></i> Column Graph</span>
                            </div>
                            <div class="panel-body pn">

                                <div id="high-column" style="width: 100%; height: 197px; margin: 0 auto"></div>

                            </div>
                        </div>

                        <!-- Stats Top Graph Bot -->
                        <div class="panel" id="pchart8">
                            <div class="panel-heading">
                                <span class="panel-title text-info fw700"><i class="fa fa-pencil hidden"></i> Filterable Area Graph</span>
                            </div>
                            <div class="panel-menu">
                                <div class="chart-legend" data-chart-id="#high-line3">
                                    <a type="button" data-chart-id="0" class="legend-item btn btn-sm btn-primary mr10">Data 1</a>
                                    <a type="button" data-chart-id="0" class="legend-item btn btn-info btn-sm">Data 2</a>
                                </div>
                            </div>
                            <div class="panel-body pn">
                                <div id="high-line3" style="width: 100%; height: 210px; margin: 0 auto"></div>
                            </div>
                        </div>

                        <!-- Column Graph -->
                        <div class="panel" id="pchart9">
                            <div class="panel-heading">
                                <span class="panel-title text-info fw700"><i class="fa fa-pencil hidden"></i> Column Graph with alt Filter</span>
                            </div>
                            <div class="panel-menu pn bg-white">
                                <ul class="nav nav-justified text-center fw600 chart-legend" data-chart-id="#high-column3">
                                    <li>
                                        <a href="#" class="legend-item" data-chart-id="0"> Tech </a>
                                    </li>
                                    <li class="br-l">
                                        <a href="#" class="legend-item" data-chart-id="1"> Support </a>
                                    </li>
                                    <li class="br-l">
                                        <a href="#" class="legend-item" data-chart-id="2"> Service </a>
                                    </li>
                                    <li class="br-l">
                                        <a href="#" class="legend-item" data-chart-id="3"> Another </a>
                                    </li>
                                </ul>

                            </div>
                            <div class="panel-body pbn">
                                <div id="high-column3" style="width: 100%; height: 400px; margin: 0 auto"></div>

                                <p class="hidden br-t pt15 text-muted text-center mh20 fw400">A percent measure of tickets with <b class="text-info">first</b> reply time</p>
                            </div>
                            <div class="panel-footer p15">
                                <p class="text-muted text-center mbn">A percent measure of tickets with <b class="text-info">first</b> reply time</p>
                            </div>
                        </div>

                        <!-- Bar Graph -->
                        <div class="panel" id="pchart10">
                            <div class="panel-heading">
                                <span class="panel-title text-info fw700"><i class="fa fa-pencil hidden"></i> Bar Graph with Filter</span>
                            </div>
                            <div class="panel-menu">
                                <div class="chart-legend" data-chart-id="#high-bars">
                                    <a data-chart-id="0" class="legend-item btn btn-warning btn-sm mr5">Data 1</a>
                                    <a data-chart-id="1" class="legend-item btn btn-primary btn-sm mr5">Data 2</a>
                                    <a data-chart-id="2" class="legend-item btn btn-info btn-sm">Data 3</a>
                                </div>
                            </div>
                            <div class="panel-body pn">
                                <div id="high-bars" style="width: 100%; height: 140px; margin: 0 auto"></div>
                            </div>
                        </div>

                        <!-- Area Graph -->
                        <div class="panel" id="pchart11">
                            <div class="panel-heading">
                                <span class="panel-title text-info fw700"><i class="fa fa-pencil hidden"></i> Area Graph with Filter</span>
                            </div>
                            <div class="panel-menu">
                                <div class="chart-legend" data-chart-id="#high-area">
                                    <a data-chart-id="0" class="legend-item btn btn-sm btn-warning ph20 mr10">Data 1</a>
                                    <a data-chart-id="1" class="legend-item btn btn-sm btn-primary mr10">Data 2</a>
                                    <a data-chart-id="2" class="legend-item btn btn-sm btn-info mr10">Data 3</a>
                                </div>
                            </div>
                            <div class="panel-body pn">
                                <div id="high-area" style="width: 100%; height: 230px; margin: 0 auto"></div>
                            </div>
                        </div>

                    </div>
                    <!-- end: .tray-center -->

                </section>
                <!-- End: Content -->

            </section>



        </div>
        <!-- End: Main -->

        <style>

            /* nav fixed settings */
            ul.tray-nav.affix {
                width: 319px;
                top: 80px;
            }
        </style>

        <!-- BEGIN: PAGE SCRIPTS -->

        <!-- jQuery -->
        <?= $this->Html->script(['jquery/jquery-1.11.1.min.js', 'jquery/jquery_ui/jquery-ui.min.js', 'bootstrap.min.js', 'plugins/highcharts/highcharts.js', 'plugins/circles/circles.js', 'plugins/raphael/raphael.js', 'utility/utility.js', 'main.js', 'demo.js', 'pages/charts/highcharts.js']) ?>


        <!-- Sparklines CDN -->
        <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery-sparklines/2.1.2/jquery.sparkline.min.js"></script>


        <script type="text/javascript">
            jQuery(document).ready(function () {

                "use strict";

                // Init Theme Core    
                Core.init();

                // Init Theme Core    
                Demo.init();

                // This page contains more Initilization Javascript than normal.
                // As a result it has its own js page. See charts.js for more info
                demoHighCharts.init();

                // Init tray navigation smooth scroll
                $('.tray-nav a').smoothScroll({
                    offset: -70
                });


            });
        </script>
        <!-- END: PAGE SCRIPTS -->

    </body>

</html>
