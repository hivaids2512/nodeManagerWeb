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
        <?= $this->Html->css('box.css') ?>
        <!-- Datatables Editor CSS -->
        <?= $this->Html->css('dataTables.editor.css') ?>
        <!-- Theme CSS -->
        <?= $this->Html->css('theme.css') ?>
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
                                <span class="sidebar-title">Map</span>', array('controller' => 'admin', 'action' => 'map'), array('escape' => false));
                            ?>
                        </li>
                        <li>
                            <?=
                            $this->Html->link('<span class="glyphicons glyphicons-charts"></span>
                                <span class="sidebar-title">Statistic</span>', array('controller' => 'admin', 'action' => 'index'), array('escape' => false));
                            ?>
                        </li>
                        <li>
                            <?=
                            $this->Html->link('<span class="glyphicons glyphicons-table"></span>
                                <span class="sidebar-title">Data</span>', array('controller' => 'admin', 'action' => 'data'), array('escape' => false));
                            ?>
                        </li>
                        <li class="sidebar-label pt20">Node Configuration</li>
                        <li>
                            <?=
                            $this->Html->link('<span class="glyphicons glyphicon-plus-sign"></span>
                                <span class="sidebar-title">Add Node</span>', array('controller' => 'admin', 'action' => 'addnode'), array('escape' => false));
                            ?>
                        </li>
                        <li>
                            <?=
                            $this->Html->link('<span class="glyphicons glyphicons-cogwheels"></span>
                                <span class="sidebar-title">Node Configuration</span>', array('controller' => 'admin', 'action' => 'nodeconfig'), array('escape' => false));
                            ?>
                        </li>
                        <li class="sidebar-label pt20">Site Setting</li>
                        <li>
                            <?=
                            $this->Html->link('<span class="glyphicons glyphicons-user_add"></span>
                                <span class="sidebar-title">User</span>', array('controller' => 'admin', 'action' => 'user'), array('escape' => false));
                            ?>
                        </li>
                        <li>
                            <?=$this->Html->link('<span class="glyphicons glyphicons-cogwheels"></span>
                                <span class="sidebar-title">Setting</span>',
                                array('controller'=>'admin','action'=>'setting'),
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
                                <?=
                                $this->Html->link('<span class="glyphicon glyphicon-home"></span>', array('controller' => 'admin', 'action' => 'index'), array('escape' => false,));
                                ?>


                            </li>
                            <li class="br-t of-h">
                                <?=
                                $this->Html->link('User', array('controller' => 'admin', 'action' => 'user'), array('escape' => false,));
                                ?>


                            </li>
                        </ol>
                    </div>

                </header>
                <!-- End: Topbar -->

                <!-- Begin: Content -->
                <section id="content" class="table-layout animated fadeIn">
                    <div class="tray tray-center pv40 ph30 va-t posr animated-delay animated-long" data-animate='["800","fadeIn"]'>
                        <div class="mw1100 center-block">
                            <!-- begin: .admin-form -->
                            <div class="admin-form">
                                    
                                <div id="p1" class="panel heading-border">

                                    <div class="panel-body bg-light">
                                        <?= $this->Form->create('Node', array('id' => 'form-ui', 'url' => array('controller' => 'admin', 'action' => 'updatenode'))); ?>

                                        <div class="section-divider mb40" id="spy1">
                                            <span>Update Node</span>
                                        </div>
                                        <!-- .section-divider -->
                                        <?php if($this->Session->read('create')){ ?>
                                        <div class="alert-box success"><span>Success: </span><?= $this->Session->consume('create'); ?></div>
                                        <?php } ?>
                                        <?php if($this->Session->read('creates')){ ?>
                                        <?php $errors = $this->Session->consume('creates'); ?>
                                        <?php foreach ($errors as $error){?>
                                        <div class="alert-box serror"><span>Error: </span><?= $error[0] ?></div>
                                        <?php } ?>
                                        <?php } ?>
                                        
                                        
                                        <!-- Basic Inputs -->
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="section">
                                                    <label class="field">
                                                        <?= $this->Form->input('nodeid', array('label' => false, 'type' => 'text', 'id' => 'from', 'class' => 'gui-input', 'value' => $node[0]['Node']['nodeid'] ,'placeholder' => 'NodeId')); ?>
                                                        
                                                    </label>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="section">
                                                    <label class="field">
                                                        <?= $this->Form->input('nodename', array('label' => false, 'type' => 'text', 'id' => 'from', 'class' => 'gui-input', 'value' => $node[0]['Node']['nodename'] ,'placeholder' => 'Node name')); ?>
                                                    </label>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="section">
                                                    <label class="field">
                                                        <?= $this->Form->input('nodelocation', array('label' => false, 'type' => 'text', 'id' => 'from', 'class' => 'gui-input', 'value' => $node[0]['Node']['nodelocation'] ,'placeholder' => 'Node Location')); ?>
                                                    </label>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <div class="section">
                                                    <label class="field">
                                                        <?= $this->Form->input('other', array('label' => false, 'type' => 'text', 'id' => 'from', 'class' => 'gui-input', 'value' => $node[0]['Node']['other'] ,'placeholder' => 'Other Information')); ?>
                                                    </label>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="section">
                                                    <label class="field">
                                                        <?= $this->Form->input('longtitude', array('label' => false, 'type' => 'text', 'id' => 'from', 'class' => 'gui-input', 'value' => $node[0]['Node']['longtitude'] ,'placeholder' => 'Longtitude')); ?>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="section">
                                                    <label class="field">
                                                        <?= $this->Form->input('latitude', array('label' => false, 'type' => 'text', 'id' => 'from', 'class' => 'gui-input', 'value' => $node[0]['Node']['latitude'] ,'placeholder' => 'Latitude')); ?>
                                                    </label>
                                                </div>
                                            </div>

                                        </div>
                                        <button type="submit" form="form-ui" class="button btn-primary mr10 pull-right">Update Node</button>
                                        <?= $this->Form->end(); ?>



                                    </div>
                                    <!-- end: .admin-form -->

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

            /* demo page styles */
            body {
                min-height: 2300px;
            }
            .affix-pane.affix {
                top: 80px;
            }
            .admin-form .panel.heading-border:before,
            .admin-form .panel .heading-border:before {
                transition: all 0.7s ease;
            }
            .custom-nav-animation li {
                display: none;
            }
            .custom-nav-animation li.animated {
                display: block;
            }
        </style>

        <!-- BEGIN: PAGE SCRIPTS -->

        <!-- jQuery -->
        <?= $this->Html->script(['jquery/jquery-1.11.1.min.js', 'jquery/jquery_ui/jquery-ui.min.js', 'bootstrap.min.js', 'plugins/datatables/media/js/jquery.dataTables.js', 'plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js', 'plugins/datatables/extensions/Editor/js/dataTables.editor.js', 'plugins/datatables/media/js/dataTables.bootstrap.js', 'plugins/datatables/extensions/Editor/js/editor.bootstrap.js', 'utility/utility.js', 'main.js', 'demo.js']) ?>
        <script type="text/javascript">
            jQuery(document).ready(function () {

                "use strict";

                // Init Theme Core    
                Core.init();

                // Init Theme Core    
                Demo.init();

                // Init custom page animation
                setTimeout(function () {
                    $('.custom-nav-animation li').each(function (i, e) {
                        var This = $(this);
                        var timer = setTimeout(function () {
                            This.addClass('animated animated-short zoomIn');
                        }, 50 * i);
                    });
                }, 500);

                // Init tray navigation smooth scroll
                $('.tray-nav a').smoothScroll({
                    offset: -145
                });

                // Form Switcher
                $('#form-switcher > button').on('click', function () {
                    var btnData = $(this).data('form-layout');
                    var btnActive = $('#form-elements-pane .admin-form.active');

                    // Remove any existing animations and then fade current form out
                    btnActive.removeClass('slideInUp').addClass('animated fadeOutRight animated-shorter');
                    // When above exit animation ends remove leftover classes and animate the new form in
                    btnActive.one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function () {
                        btnActive.removeClass('active fadeOutRight animated-shorter');
                        $('#' + btnData).addClass('active animated slideInUp animated-shorter')
                    });
                });

                // Cache some dom elements
                var adminForm = $('.admin-form');
                var options = adminForm.find('.option');
                var switches = adminForm.find('.switch');
                var buttons = adminForm.find('.button');

                var Panel = $('#p1');

                // Form Skin Switcher
                $('#skin-switcher a').on('click', function () {
                    var btnData = $(this).data('form-skin');

                    $('#skin-switcher a').removeClass('item-active');
                    $(this).addClass('item-active')

                    adminForm.each(function (i, e) {
                        var skins = 'theme-primary theme-info theme-success theme-warning theme-danger theme-alert theme-system theme-dark'
                        var panelSkins = 'panel-primary panel-info panel-success panel-warning panel-danger panel-alert panel-system panel-dark'
                        $(e).removeClass(skins).addClass('theme-' + btnData);
                        Panel.removeClass(panelSkins).addClass('panel-' + btnData);
                    });

                    $(options).each(function (i, e) {
                        if ($(e).hasClass('block')) {
                            $(e).removeClass().addClass('block mt15 option option-' + btnData);
                        } else {
                            $(e).removeClass().addClass('option option-' + btnData);
                        }
                    });
                    $(switches).each(function (i, ele) {
                        if ($(ele).hasClass('switch-round')) {
                            if ($(ele).hasClass('block')) {
                                $(ele).removeClass().addClass('block mt15 switch switch-round switch-' + btnData);
                            } else {
                                $(ele).removeClass().addClass('switch switch-round switch-' + btnData);
                            }
                        } else {
                            if ($(ele).hasClass('block')) {
                                $(ele).removeClass().addClass('block mt15 switch switch-' + btnData);
                            } else {
                                $(ele).removeClass().addClass('switch switch-' + btnData);
                            }
                        }

                    });
                    buttons.removeClass().addClass('button btn-' + btnData);
                });


                setTimeout(function () {
                    adminForm.addClass('theme-primary');
                    Panel.addClass('panel-primary');

                    $(options).each(function (i, e) {
                        if ($(e).hasClass('block')) {
                            $(e).removeClass().addClass('block mt15 option option-primary');
                        } else {
                            $(e).removeClass().addClass('option option-primary');
                        }
                    });
                    $(switches).each(function (i, ele) {

                        if ($(ele).hasClass('switch-round')) {
                            if ($(ele).hasClass('block')) {
                                $(ele).removeClass().addClass('block mt15 switch switch-round switch-primary');
                            } else {
                                $(ele).removeClass().addClass('switch switch-round switch-primary');
                            }
                        } else {
                            if ($(ele).hasClass('block')) {
                                $(ele).removeClass().addClass('block mt15 switch switch-primary');
                            } else {
                                $(ele).removeClass().addClass('switch switch-primary');
                            }
                        }
                    });
                    buttons.removeClass().addClass('button btn-primary');
                }, 2200);


            });
        </script>

        <!-- END: PAGE SCRIPTS -->

    </body>

</html>
