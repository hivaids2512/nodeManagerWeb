<!DOCTYPE html>
<html>

    <head>
        <?= $this->Html->charset() ?>
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <title><?= $title ?></title>
        <meta name="keywords" content="HTML5 Bootstrap 3 Admin Template UI Theme" />
        <meta name="description" content="AdminDesigns - SHARED ON THEMELOCK.COM">
        <meta name="author" content="AdminDesigns">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Font CSS (Via CDN) -->
        <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700'>
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700">

        <!-- Theme CSS -->
        <?= $this->Html->css('theme.css') ?>

        <!-- Admin Panels CSS -->
        <?= $this->Html->css('admin/adminpanels.css') ?>


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

    <body class="dashboard-page sb-l-o sb-r-c">

        <!-- Start: Main -->
        <div id="main">

            <!-- Start: Header -->
            <header class="navbar navbar-fixed-top bg-light">
                <div class="navbar-branding">
                    <a class="navbar-brand" href=""> <b>Node</b>Manager </a>
                    </a>
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



                    <!-- sidebar menu -->
                    <ul class="nav sidebar-menu">
                        <li class="sidebar-label pt20">Node Manager</li>
                        <li>
                            <?=$this->Html->link('<span class="glyphicons glyphicons-globe"></span>
                                <span class="sidebar-title">Map</span>',
                                array('controller'=>'user','action'=>'map'),
                                array('escape'=>false));?>
                        </li>
                        <li>
                            <?=$this->Html->link('<span class="glyphicons glyphicons-charts"></span>
                                <span class="sidebar-title">Statistic</span>',
                                array('controller'=>'user','action'=>'index'),
                                array('escape'=>false));?>
                        </li>
                        <li>
                            <?=$this->Html->link('<span class="glyphicons glyphicons-table"></span>
                                <span class="sidebar-title">Data</span>',
                                array('controller'=>'user','action'=>'data'),
                                array('escape'=>false));?>
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
                                array('controller'=>'user','action'=>'index'),
                                array('escape'=>false,));?>


                            </li>


                        </ol>
                    </div>

                </header>
                <!-- End: Topbar -->

                <!-- Begin: Content -->
                <section id="content" class="animated fadeIn">



                    <!-- Admin-panels -->
                    <div class="admin-panels fade-onload sb-l-o-full">

                        <!-- full width widgets -->

                        <!-- end: .row -->

                        <!-- partial width widgets -->
                        <div class="row">

                            <div class="ccol-md-12 admin-grid">
                                <!-- Stats Top Graph Bot -->
                                <div style="width: 49%; float: left" class="panel" id="p7">
                                    <div class="panel-heading">
                                        <span class="panel-title"><i class="fa fa-pencil hidden"></i> Area Graph</span>
                                    </div>
                                    <div class="panel-menu hidden">
                                        <div class="chart-legend" data-chart-id="#high-line3">
                                            <a data-chart-id="0" class="legend-item btn btn-sm btn-primary mr10">Data 1</a>
                                            <a data-chart-id="0" class="legend-item btn btn-info btn-sm">Data 2</a>
                                        </div>
                                    </div>
                                    <div class="panel-body pn">
                                        <div class="br-b admin-form">
                                            <div class="smart-widget sm-right smr-50">
                                                <label class="field">
                                                    <form>
                                                        <select name="sub" id="sub" class="gui-input br-n" placeholder="Search State">
                                                            <option>as</option>
                                                            <option>as</option>
                                                            <option>as</option>
                                                            <option>as</option>
                                                            <option>as</option>
                                                            <option>as</option>
                                                        </select>
                                                    </form>
                                                </label>
                                                <button type="submit" class="button br-n br-l"> <i class="fa fa-caret-down"></i> </button>
                                            </div>
                                            <table class="table mbn br-t">
                                                <thead>
                                                    <tr class="hidden">
                                                        <th>#</th>
                                                        <th>First Name</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="va-m fw600 text-muted">
                                                            <span class="fa fa-female text-primary fs14 ml5 mr10"></span>Male</td>
                                                        <td class="fs14 fw700 text-right">54%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="va-m fw600 text-muted">
                                                            <span class="fa fa-male text-info fs14 ml5 mr10"></span>Female</td>
                                                        <td class="fs14 fw700 text-right">46%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="va-m fw600 text-muted">
                                                            <span class="fa fa-child text-warning fs15 ml5 mr10"></span>Unemployed</td>
                                                        <td class="fs14 fw700 text-right">14%</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div id="high-line3" style="width: 100%; height: 350px; margin: 0 auto"></div>
                                    </div>
                                </div>
                            </div>  
                        </div>

                        <div class="row">

                            <div class="ccol-md-12 admin-grid">
                                <!-- Stats Top Graph Bot -->
                                <div style="width: 50%; float: right" class="panel" id="p7">
                                    <div class="panel-heading">
                                        <span class="panel-title"><i class="fa fa-pencil hidden"></i> Area Graph</span>
                                    </div>
                                    <div class="panel-menu hidden">
                                        <div class="chart-legend" data-chart-id="#high-line4">
                                            <a data-chart-id="0" class="legend-item btn btn-sm btn-primary mr10">Data 1</a>
                                            <a data-chart-id="0" class="legend-item btn btn-info btn-sm">Data 2</a>
                                        </div>
                                    </div>
                                    <div class="panel-body pn">
                                        <div class="br-b admin-form">
                                            <div class="smart-widget sm-right smr-50">
                                                <label class="field">
                                                    <form>
                                                        <select name="sub" id="sub" class="gui-input br-n" placeholder="Search State">
                                                            <option>as</option>
                                                            <option>as</option>
                                                            <option>as</option>
                                                            <option>as</option>
                                                            <option>as</option>
                                                            <option>as</option>
                                                        </select>
                                                    </form>
                                                </label>
                                                <button type="submit" class="button br-n br-l"> <i class="fa fa-caret-down"></i> </button>
                                            </div>
                                            <table class="table mbn br-t">
                                                <thead>
                                                    <tr class="hidden">
                                                        <th>#</th>
                                                        <th>First Name</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="va-m fw600 text-muted">
                                                            <span class="fa fa-female text-primary fs14 ml5 mr10"></span>Male</td>
                                                        <td class="fs14 fw700 text-right">54%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="va-m fw600 text-muted">
                                                            <span class="fa fa-male text-info fs14 ml5 mr10"></span>Female</td>
                                                        <td class="fs14 fw700 text-right">46%</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="va-m fw600 text-muted">
                                                            <span class="fa fa-child text-warning fs15 ml5 mr10"></span>Unemployed</td>
                                                        <td class="fs14 fw700 text-right">14%</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div id="high-line4" style="width: 100%; height: 350px; margin: 0 auto"></div>
                                    </div>
                                </div>
                            </div>  
                        </div>


                        <!-- end: .row -->

                    </div>

                </section>
                <!-- End: Content -->

            </section>
            <!-- End: Content-Wrapper -->


        </div>
        <!-- End: Main -->

        <!-- BEGIN: PAGE SCRIPTS -->

        <!-- jQuery -->
        <?= $this->Html->script(['jquery/jquery-1.11.1.min.js', 'jquery/jquery_ui/jquery-ui.min.js', 'bootstrap.min.js', 'plugins/highcharts/highcharts.js', 'plugins/circles/circles.js', 'plugins/raphael/raphael.js', 'bootstrap/holder.min.js', 'utility/utility.js', 'main.js', 'demo.js', 'admin/json2.js', 'admin/jquery.ui.touch-punch.min.js', 'admin/adminpanels.js', 'pages/widgets.js']) ?>


        <!-- Sparklines CDN -->
        <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery-sparklines/2.1.2/jquery.sparkline.min.js"></script>


        <script type="text/javascript">
            jQuery(document).ready(function () {

                "use strict";


                Core.init({
                    sbm: "sb-l-c",
                });

                Demo.init();
                
                function draw(id, data){
                    $(id).highcharts({
                            title: {
                                text: 'Node Report',
                                x: -20 //center
                            },
                            
                            xAxis: {
                                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
                                    'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec', 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
                                    'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
                            },
                            yAxis: {
                                title: {
                                    text: 'Data'
                                },
                                plotLines: [{
                                        value: 0,
                                        width: 1,
                                        color: '#808080'
                                    }]
                            },
                            
                            
                            series: [{
                                    name: 'Data1',
                                    data: [7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6,7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6]
                                }, {
                                    name: 'Data2',
                                    data: [-0.2, 0.8, 5.7, 11.3, 17.0, 22.0, 24.8, 24.1, 20.1, 14.1, 8.6, 2.5]
                                }]
                        });
                }

                $('.admin-panels').adminpanel({
                    grid: '.admin-grid',
                    draggable: true,
                    preserveGrid: true,
                    mobile: false,
                    callback: function () {
                        bootbox.confirm('<h3>A Custom Callback!</h3>', function () {
                        });
                    },
                    onFinish: function () {
                        $('.admin-panels').addClass('animated fadeIn').removeClass('fade-onload');
                        
                        draw('#high-line3', 1);
                        draw('#high-line4', 1);
                    },    
                    onSave: function () {
                        $(window).trigger('resize');
                    }
                });
                


            });
        </script>

        <!-- END: PAGE SCRIPTS -->


    </body>

</html>