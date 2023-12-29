
<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo $title; ?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url() ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link rel="icon" href="<?php echo base_url() ?>assets/favicon.ico">
    <!-- Custom styles for this template-->

    <script src="<?php echo base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
    
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap-datetimepicker.min.css"/>
    <link href="<?php echo base_url() ?>assets/css/sb-admin-2.min.css" rel="stylesheet">
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/moment.js?>"></script>
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/bootstrap-datetimepicker.min.js?>"></script>
    <script type="text/javascript">
        $(document).ready(function() {
      $('.datepick').datetimepicker({
        format: 'YYYY-MM-DD HH:mm:ss',
        ignoreReadonly: true
      });
    });

    
    </script>

</head>
    <body id="page-top">
         <?php
        if($this->session->userdata('usergate') != null){
         if(has_alert()):  
            foreach(has_alert() as $type => $message): ?>  

                <div id="something" class="alert alert-dismissible <?php echo $type; ?> alert-check">  
                    <button type="button" class="close" data-dismiss="alert" onclick="location.reload();"><span>&times;</span></button>
                    <?php echo $message; ?>  
                </div>  
                
            <?php endforeach;  
        endif;} ?>

        <!-- Page Wrapper -->
        <div id="wrapper">

            <!-- Sidebar -->
            <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

                <!-- Sidebar - Brand -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                    <!-- <div class="sidebar-brand-icon rotate-n-15">
                        <i class="fas fa-laugh"></i>
                    </div> -->
                    <i class="fas fa-barcode"></i>
                    <div class="sidebar-brand-text mx-3">Root Scanner</div>
                </a>

                <!-- Divider -->
                <hr class="sidebar-divider my-0">

                <!-- Nav Item - Dashboard -->
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url()?>events">
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Events</span></a>
                </li>

                

                

                <?php if ($this->session->userdata('level') == 'admin'){ ?>
                    <hr class="sidebar-divider d-none d-md-block">
                    <div class="sidebar-heading pb-2">
                        Others Menu
                    </div>   
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url()?>users">
                            <i class="fas fa-fw fa-users"></i>
                            <span>Users</span>
                        </a>
                    </li>

                    <hr class="sidebar-divider d-none d-md-block">
                <?php } ?> 
                <!-- Sidebar Toggler (Sidebar) -->
                <div class="text-center d-none d-md-inline">
                    <button class="rounded-circle border-0" id="sidebarToggle"></button>
                </div>

            </ul>
            <!-- End of Sidebar -->

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content">

                    <!-- Topbar -->
                    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                        <!-- Sidebar Toggle (Topbar) -->
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>

                        

                        <!-- Topbar Navbar -->
                        <ul class="navbar-nav ml-auto">                                                      

                            <div class="topbar-divider d-none d-sm-block"></div>

                            <!-- Nav Item - User Information -->
                            <li class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $this->session->userdata('username')?></span>
                                    <i class="fa fa-user"></i>
                                </a>
                                <!-- Dropdown - User Information -->
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                    aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="#">
                                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Profile
                                    </a>
                                    <?php if ($event_id != 0 or $event_id == null) { ?>
                                    <a class="dropdown-item" href="<?php echo base_url().'setting/'.$event_id;?>">
                                        <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Settings
                                    </a>
                                    <?php } ?>
                                    <a class="dropdown-item" href="#">
                                        <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Activity Log
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Logout
                                    </a>
                                </div>
                            </li>

                        </ul>

                    </nav>
                    <!-- End of Topbar -->

                    <!-- Begin Page Content -->
                    <div class="container-fluid">
       
                    <div class="container-fluid">
                    <?php
                    if($this->session->userdata('username') != null){
                     if(has_alert()):  
                        foreach(has_alert() as $type => $message): ?>  
                            <div class="alert form-control pb-3 alert-dismissible bg-warning <?php echo $type; ?>">  
                                <button type="button" class="close" data-dismiss="alert" onclick="location.reload();"><span>&times;</span></button>
                                <?php echo $message; ?>  
                            </div>  
                        <?php endforeach;  
                    endif;} ?>
