            <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">
                <!-- Sidebar - Brand -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">

                </a>

                <!-- Divider -->
                <hr class="sidebar-divider my-0">
                 <!-- Nav Item - landing page -->
                 <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url()?>Dashboard">
                        
                        <i class="fas fa-fw fa-home"></i>
                        <span>Home</span></a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url()?>Approval/show">
                        
                        <i class="fas fa-fw fa-check-square"></i>
                        <span>Approval</span></a>
                </li>
                <hr class="sidebar-divider d-none d-md-block">

                <!-- Nav Item - Dashboard -->
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url()?>TAD/dashboard">
                        
                        <i class="fas fa-fw fa-tachometer-alt"></i>
                        <span>Dashboard</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url()?>OrgChart/d3">
                        
                        <i class="fas fa-fw fa-sitemap"></i>
                        <span>Organization Chart</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url()?>TAD/employeeTKJP/search">
                        
                        <i class="fas fa-fw fa-search"></i>
                        <span>Personnel Search</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne"
                        aria-expanded="true" aria-controls="collapseOne">
                        <i class="fas fa-fw fa-bezier-curve"></i>
                        <span>Organization Request</span>
                    </a>
                    <div id="collapseOne" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">OCF Menu:</h6>
                            <a class="collapse-item" href="<?php echo base_url()?>TAD/orgChange">My Request</a>
                            <a class="collapse-item" href="<?php echo base_url()?>TAD/orgChange/mpp">Manpower Plan</a>
                            <a class="collapse-item" href="<?php echo base_url()?>TAD/orgChange/create">Create</a>
                            <a class="collapse-item" href="<?php echo base_url()?>TAD/orgChange/change">Change</a>
                            <a class="collapse-item" href="<?php echo base_url()?>Approval/OCF">Approval</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                        aria-expanded="true" aria-controls="collapseTwo">
                        <i class="fas fa-fw fa-portrait"></i>
                        <span>Manpower Requisite</span>
                    </a>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">MRF Menu:</h6>
                            <a class="collapse-item" href="<?php echo base_url()?>TAD/MRF">My Request</a>
                            <a class="collapse-item" href="<?php echo base_url()?>TAD/MRF/create">Create</a>
                            <a class="collapse-item" href="<?php echo base_url()?>Approval/MRF">Approval</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url()?>TAD/Performance/create">
                        <i class="fas fa-fw fa-chart-line"></i>
                        <span>Performance Review</span>
                    </a>
                </li>
               
                <?php if ($this->session->userdata('level') == 'admin'){ ?>
                    <hr class="sidebar-divider d-none d-md-block">
                    <div class="sidebar-heading pb-2">
                        Admin Menu
                    </div>
                    
                    <li class="nav-item">
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree"
                            aria-expanded="true" aria-controls="collapseOne">
                            <i class="fas fa-fw fa-book"></i>
                            <span>Assignment Order</span>
                        </a>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                            <div class="bg-white py-2 collapse-inner rounded">
                                <h6 class="collapse-header">AO Menu:</h6>
                                <!-- <a class="collapse-item" href="<?php echo base_url()?>AO/interview">Offering</a> -->
                                <a class="collapse-item" href="<?php echo base_url()?>TAD/AO">Assignment</a>
                                <a class="collapse-item" href="<?php echo base_url()?>TAD/AO/newCreate">Create</a>
                                <a class="collapse-item" href="<?php echo base_url()?>Approval/AO">Approval</a>
                                <a class="collapse-item" href="<?php echo base_url()?>TAD/AO/Review">Review</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFour"
                            aria-expanded="true" aria-controls="collapseOne">
                            <i class="fas fa-fw fa-list"></i>
                            <span>Exit Checklist</span>
                        </a>
                        <div id="collapseFour" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                            <div class="bg-white py-2 collapse-inner rounded">
                                <h6 class="collapse-header">Exit Menu:</h6>
                                <a class="collapse-item" href="<?php echo base_url()?>TAD/Terminate/create">Form Termination</a>
                                <a class="collapse-item" href="<?php echo base_url()?>TAD/Terminate/">Index</a>
                                <a class="collapse-item" href="<?php echo base_url()?>TAD/Terminate/view">Form</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseDB"
                                            aria-expanded="true" aria-controls="collapseTwo">
                                            <i class="fas fa-fw fa-database"></i>
                                            <span>Master Data</span>
                                        </a>
                                        <div id="collapseDB" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                                            <div class="bg-white py-2 collapse-inner rounded">
                                                <h6 class="collapse-header">MD Menu:</h6>
                                                <a class="collapse-item" href="<?php echo base_url()?>DirectPosition">Permanent Employee</a>
                                                <a class="collapse-item" href="<?php echo base_url()?>TAD/TADPosition">Position Data</a>
                                                <a class="collapse-item" href="<?php echo base_url()?>TAD/employeeTKJP">Outsource Employee</a>
                                                <a class="collapse-item" href="<?php echo base_url()?>TAD/Contractor">Contractor</a>
                                                <a class="collapse-item" href="<?php echo base_url()?>TAD/Grade">Grade</a>
                                                <a class="collapse-item" href="<?php echo base_url()?>TAD/Competency">Competency</a>
                                            </div>
                                        </div>
                                    </li>  
                                <li class="nav-item">
                                <a class="nav-link" href="<?php echo base_url()?>TAD/Performance/medical">
                                <i class="fas fa-fw fa-briefcase-medical"></i>
                                    <span>Record MCU</span>
                                </a>
                            </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url()?>user">
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