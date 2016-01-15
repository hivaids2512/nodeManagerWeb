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

        <!-- Datatables CSS -->
        <?= $this->Html->css('dataTables.bootstrap.css') ?>

        <!-- Datatables Editor CSS -->
        <?= $this->Html->css('dataTables.editor.css') ?>
        <!-- Theme CSS -->
        <?= $this->Html->css('theme.css') ?>
        <?= $this->Html->css('datepicker.css') ?>

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

    <body class="datatables-page" data-spy="scroll" data-target="#nav-spy" data-offset="300">

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
                                array('controller'=>'admin','action'=>'index'),
                                array('escape'=>false,));?>
                               
                                    
                            </li>
                            <li class="br-t of-h">
                                <?=$this->Html->link('Data',
                                array('controller'=>'admin','action'=>'data'),
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

                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-visible" id="spy3">
                                    <div class="panel-heading">
                                        <div class="panel-title hidden-xs">
                                            <span class="glyphicon glyphicon-tasks"></span>Node Data</div>
                                    </div>
                                    <div class="panel-body pn">
                                        <table class="table table-striped table-hover" id="datatable3" cellspacing="0" width="100%">
                                            <thead>
                                                <tr>
                                                    <th>Time</th>
                                                    <th>NodeID</th>
                                                    <th>Longtitude</th>
                                                    <th>Latitude</th>
                                                    <th>Data1</th>
                                                    <th>Data2</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>Filter By Node and date</th>
                                                    <th><select id="node">
                                                            <?php foreach ($Node as $node) { ?>
                                                                <option value="<?= $node['Node']['nodeid'] ?>"><?= $node['Node']['nodename'] ?></option>
                                                            <?php } ?>
                                                        </select></th>
                                                    <th>From: <input id="from" size="16" type="text"></th>
                                                    <th>To: <input id="to" size="16" type="text"></th>
                                                    <th></th>
                                                    <th></th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                <?php foreach($Data as $data){ ?>
                                                <tr>
                                                    <td><?= $data['Data']['time'] ?></td>
                                                    <td><?= $data['Data']['nodeid'] ?></td>
                                                    <td><?= $data['Data']['longtitude'] ?></td>
                                                    <td><?= $data['Data']['latitude'] ?></td>
                                                    <td><?= $data['Data']['data1'] ?></td>
                                                    <td><?= $data['Data']['data2'] ?></td>
                                                </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
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

            /*demo styles*/
            body {
                min-height: 2000px;
            }
            .custom-nav-animation li {
                display: none;
            }
            .custom-nav-animation li.animated {
                display: block;
            }

            /* nav fixed settings */
            ul.tray-nav.affix {
                width: 319px;
                top: 80px;
            }
        </style>

        <!-- BEGIN: PAGE SCRIPTS -->

        <!-- jQuery -->
        <?= $this->Html->script(['jquery/jquery-1.11.1.min.js', 'jquery/jquery_ui/jquery-ui.min.js', 'bootstrap.min.js', 'plugins/datatables/media/js/jquery.dataTables.js', 'plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js', 'plugins/datatables/extensions/Editor/js/dataTables.editor.js', 'plugins/datatables/media/js/dataTables.bootstrap.js', 'plugins/datatables/extensions/Editor/js/editor.bootstrap.js', 'utility/utility.js', 'main.js', 'demo.js', 'bootstrap-datepicker.js']) ?>

        <script type="text/javascript">
            jQuery(document).ready(function () {

                "use strict";

                // Init Theme Core    
                Core.init();

                // Init Theme Core    
                Demo.init();

                var root = document.location.href;
                if (root.lastIndexOf('/') !== (root.length - 1)) {
                    root = root + '/';
                }
                
                
              


                var table = $('#datatable3').DataTable({
                    "aoColumnDefs": [{
                            'bSortable': false,
                            'aTargets': [-1]
                        }],
                    "oLanguage": {
                        "oPaginate": {
                            "sPrevious": "",
                            "sNext": ""
                        }
                    },
                    "iDisplayLength": 5,
                    "aLengthMenu": [
                        [5, 10, 25, 50, -1],
                        [5, 10, 25, 50, "All"]
                    ],
                    "sDom": '<"dt-panelmenu clearfix"Tfr>t<"dt-panelfooter clearfix"ip>',
                    "oTableTools": {
                        "sSwfPath": "http://cdn.datatables.net/tabletools/2.2.2/swf/copy_csv_xls_pdf.swf",
                        "aButtons": [{
                                "sExtends": "csv",
                                "sTitle": "Node-Data", // this does the trick
                                "bFooter": false,
                            }, {
                                "sExtends": "xls",
                                "sTitle": "Node-Data", // this does the trick
                                "bFooter": false,
                            }, {
                                "sExtends": "pdf",
                                "sTitle": "Node-Data", // this does the trick
                                "bFooter": false,
                            }, "copy", "print"]
                    }
                });

                $('.dataTables_filter input').attr("placeholder", "Enter Terms...");


                // Init tray navigation smooth scroll
                $('.tray-nav a').smoothScroll({
                    offset: -145
                });
                
                function getData(){
                    $.ajax({
                                type: "POST",
                                url: root + "../../data/edit/" + $('#to').val() + ".json",
                                data: "node=" + $('#node').val() + "&from=" + $('#from').val() + "&to=" + $('#to').val(),
                                dataType: "text",
                                beforeSend: function () {
                                    //$(".post_submitting").show().html("<center><img src='images/loading.gif'/></center>");
                                },
                                success: function (response) {
                                    table.rows().remove().draw();
                                    var data = jQuery.parseJSON(response).data;
                                    for (var i = 0; i < data.length; i++) {
                                        //$('#datatable3 tbody').append('<tr><td>' + data[i].Data.time +'</td><td>' + data[i].Data.nodeid + '</td><td>' + data[i].Data.longtitude + '</td><td>' + data[i].Data.latitude + '</td><td>' + data[i].Data.data1 + '</td><td>' + data[i].Data.data2 + '</td><td></tr>');

                                        table.row.add([data[i].Data.time,data[i].Data.nodeid, data[i].Data.longtitude, data[i].Data.latitude, data[i].Data.data1, data[i].Data.data2]).draw();

                                    }
                                    //table.row.add(["Tiger Nixon", "System Architect", "$3,120","Tiger Nixon", "System Architect", "$3,120"]).draw();


                                }
                            });
                }

                $('#from').datepicker({'format': 'yyyy-mm-dd'})
                        .on('changeDate', function (ev) {
                            getData();
                        });
                
                

                $('#to').datepicker({'format': 'yyyy-mm-dd'})
                        .on('changeDate', function (ev) {
                            getData();
                        });

                $('#node').change(function(){
                    getData();
                });

                // Custom tray navigation animation
                setTimeout(function () {
                    $('.custom-nav-animation li').each(function (i, e) {
                        var This = $(this);
                        var timer = setTimeout(function () {
                            This.addClass('animated zoomIn');
                        }, 100 * i);
                    });
                }, 600);



            });
        </script>
        <!-- END: PAGE SCRIPTS -->

    </body>

</html>
