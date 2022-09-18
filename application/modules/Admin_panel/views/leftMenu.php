<div class="wrapper">
    <header class="main-header">
        <a href="<?= base_url().'Admin_panel/dashboard'?>" class="logo">
            <span class="logo-mini"><b>Admin</b></span>
            <span class="logo-lg"><b>Admin Panel</b></span>
        </a>
        <nav class="navbar navbar-static-top">
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <li><a href="<?= base_url().'Front';?>" target="_blank"><i class="fa fa-globe"></i></a></li>
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="<?= base_url() . 'admin_file/admin/' ?>dist/img/avatar5.png" class="user-image"
                            alt="User Image">
                            <span class="hidden-xs">
                                <?php
                                echo $this->session->userdata('admin_name');
                                ?>
                            </span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="user-header">
                                <img src="<?= base_url() . 'admin_file/admin/' ?>dist/img/avatar5.png"
                                class="img-circle" alt="User Image">
                                <p>
                                    <?php
                                    echo $this->session->userdata('admin_name');
                                    ?>
                                </p>
                            </li>
                            <li class="user-body">
                                <div class="row">
                                    <div class="col-xs-4 text-center">
                                    </div>
                                    <div class="col-xs-4 text-center">
                                    </div>
                                    <div class="col-xs-4 text-center">
                                    </div>
                                </div>
                            </li>
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="<?= base_url() . 'Admin_panel/profile' ?>"class="btn btn-default btn-flat">Edit Profile</a>
                                </div>
                                <div class="pull-right">
                                    <a href="<?= base_url() . 'Admin_panel/signout' ?>"class="btn btn-default btn-flat">Sign out</a>
                                </div>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <aside class="main-sidebar">
            <section class="sidebar">
                <ul class="sidebar-menu">
                    <li class="active"><a href="<?= base_url() . 'Admin_panel/dashboard' ?>"><i class="fa fa-circle-o"></i>
                        Dashboard </a></li>
                        
                        
                        <!-- <li><a href="<?php //echo base_url() . 'Admin_panel/add_member' ?>"><i class="fa fa-circle-o"></i>Add Member
                        </a></li>
                        <li><a href="<?php //echo base_url() . 'Admin_panel/csv' ?>"><i class="fa fa-circle-o"></i>Import CSV
                        </a></li>
                        <li><a href="<?php //echo base_url() . 'Admin_panel/manage_member' ?>"><i class="fa fa-circle-o"></i>Manage Member
                        </a></li>
                        <li><a href="<?php //echo base_url() . 'Admin_panel/add_card' ?>"><i class="fa fa-circle-o"></i>Add Card
                        </a></li>
                        <li><a href="<?php //echo base_url() . 'Admin_panel/manage_card' ?>"><i class="fa fa-circle-o"></i>Manage Card
                        </a></li>
                        <li><a href="<?php //echo base_url() . 'Admin_panel/renew_cards' ?>"><i class="fa fa-circle-o"></i>Renew Card
                        </a></li>
                        <li><a href="<?php //echo base_url() . 'Admin_panel/expire_soon' ?>"><i class="fa fa-circle-o"></i>Expire Soon
                        </a></li>
                        <?php //if($_SESSION['role']=='admin'){ ?>
                        <li><a href="<?php //echo base_url() . 'Admin_panel/balance_out' ?>"><i class="fa fa-circle-o"></i>Balance Out
                        </a></li>
                        <li><a href="<?php //echo base_url() . 'Admin_panel/transaction_history' ?>"><i class="fa fa-circle-o"></i>Transaction History
                        </a></li>
                        <?php //} ?> -->
                        <!-- <li><a href="<?php //echo base_url() . 'Admin_panel/road_list' ?>"><i class="fa fa-circle-o"></i>Road List
                        </a></li> -->
                        <?php if($_SESSION['role']=='admin'){ ?>
                        <li><a href="<?php echo base_url() . 'Admin_panel/admin_list' ?>"><i class="fa fa-circle-o"></i>Admin List
                        </a></li>
                        <li><a href="<?php echo base_url() . 'Admin_panel/ride_category' ?>"><i class="fa fa-circle-o"></i>Ride Category
                        </a></li>
                        <li><a href="<?php echo base_url() . 'Admin_panel/ride_category_list' ?>"><i class="fa fa-circle-o"></i>Ride Category List
                        <li><a href="<?php echo base_url() . 'Admin_panel/TicketList' ?>"><i class="fa fa-circle-o"></i>Ticket List
                        </a></li>
                        <?php } ?>
                    </ul>
                </section>
            </aside>