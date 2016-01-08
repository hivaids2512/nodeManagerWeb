<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$title = 'Login';
?>

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
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800'>
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto:400,500,700,300">

    <!-- Theme CSS -->
    <?= $this->Html->css('theme.css') ?>

    <!-- Admin Forms CSS -->
    <?= $this->Html->css('admin/admin-forms.css') ?>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
   <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
   <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
   <![endif]-->
</head>

<body class="external-page sb-l-c sb-r-c">

    <!-- Start: Main -->
    <div id="main" class="animated fadeIn">

        <!-- Start: Content-Wrapper -->
        <section id="content_wrapper">

            <!-- begin canvas animation bg -->
            <div id="canvas-wrapper">
                <canvas id="demo-canvas"></canvas>
            </div>

            <!-- Begin: Content -->
            <section id="content">

                <div class="admin-form theme-info" id="login1">

                   

                    <div class="panel panel-info mt10 br-n">

                        <div class="panel-heading heading-border bg-white">
                            
                        </div>

                        <!-- end .form-header section -->
                        <?= $this->Form->create('User',array('id' => 'contact','url' => array('controller' => 'login', 'action' => 'dologin'))); ?>
                            <div class="panel-body bg-light p30">
                                <div class="row">
                                    <div class="col-sm-7 pr30">

                                        
                                        
                                        <div class="section">
                                            <label for="username" class="field-label text-muted fs18 mb10">Username</label>
                                            <label for="username" class="field prepend-icon">
                                                <?= $this->Form->input('username',array('label' => false,'type' => 'text', 'id'=> 'username', 'class' => 'gui-input', 'placeholder' => 'Enter Username')); ?>
                                                
                                                <label for="username" class="field-icon"><i class="fa fa-user"></i>
                                                </label>
                                            </label>
                                        </div>
                                        <!-- end section -->

                                        <div class="section">
                                            <label for="username" class="field-label text-muted fs18 mb10">Password</label>
                                            <label for="password" class="field prepend-icon">
                                                <?= $this->Form->input('password',array('label' => false, 'type' => 'password', 'id'=> 'password', 'class' => 'gui-input', 'placeholder' => 'Enter Password')); ?>
                                                
                                                <label for="password" class="field-icon"><i class="fa fa-lock"></i>
                                                </label>
                                            </label>
                                        </div>
                                        <?php if($this->Session->flash('loginError')!= null){?>
                                        <div class="alert alert-danger alert-dismissable">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                            <i class="fa fa-remove pr10"></i>Wrong Username or Password! Try again.
                                        </div>
                                        <?php } ?>
                                        <!-- end section -->

                                    </div>
                                    <div class="col-sm-5 br-l br-grey pl30">
                                        <h3 class="mb25"> Please Login To:</h3>
                                        <p class="mb15">
                                            <span class="fa fa-check text-success pr5"></span> Manage Sensor Nodes</p>
                                        <p class="mb15">
                                            <span class="fa fa-check text-success pr5"></span> Keep Track Nodes Statistic</p>
                                        <p class="mb15">
                                            <span class="fa fa-check text-success pr5"></span> Configurate Web site</p>
                                        <p class="mb15">
                                            <span class="fa fa-check text-success pr5"></span> Manage Data</p>
                                    </div>
                                </div>
                            </div>
                            <!-- end .form-body section -->
                            <div class="panel-footer clearfix p10 ph15">
                                
                                <button type="submit" form="contact" class="button btn-primary mr10 pull-right">Login</button>
                                
                                <label class="switch block switch-primary pull-left input-align mt10">
                                    <?= $this->Form->input('remember',array('hiddenField' => false,'div' => false, 'label' => false,'type' => 'checkbox', 'id' =>'remember', 'checked' => true)); ?>
                                    
                                    <label for="remember" data-on="YES" data-off="NO"></label>
                                    <span>Remember me</span>
                                </label>
                                
                            </div>
                            <!-- end .form-footer section -->
                        <?= $this->Form->end(); ?>
                    </div>
                </div>

            </section>
            <!-- End: Content -->

        </section>
        <!-- End: Content-Wrapper -->

    </div>
    <!-- End: Main -->

    <!-- BEGIN: PAGE SCRIPTS -->

    <!-- jQuery -->
    <?= $this->Html->script(['jquery/jquery-1.11.1.min.js','jquery/jquery_ui/jquery-ui.min.js','bootstrap.min.js','pages/login/EasePack.min.js','pages/login/rAF.js','pages/login/TweenLite.min.js','pages/login/login.js','utility/utility.js','main.js','demo.js']) ?>
    

    <!-- Page Javascript -->
    <script type="text/javascript">
        jQuery(document).ready(function() {

            "use strict";

            // Init Theme Core      
            Core.init();

            // Init Demo JS
            Demo.init();

            // Init CanvasBG and pass target starting location
            CanvasBG.init({
                Loc: {
                    x: window.innerWidth / 2,
                    y: window.innerHeight / 3.3
                },
            });


        });
    </script>

    <!-- END: PAGE SCRIPTS -->

</body>

</html>

