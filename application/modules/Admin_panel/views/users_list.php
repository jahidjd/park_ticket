<?php $this->load->view('head_c');?>
<div class="wrapper">
    <?php
    $this->load->view('leftMenu');
    ?>
    <div class="content-wrapper">
        <section class="content-header">
            <h1>Clients</h1>
            <ol class="breadcrumb">
                <li><a href="<?= base_url() . 'Admin_panel/dashboard' ?>"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="<?= base_url() . 'Admin_panel/users' ?>">Add Clients </a></li>
            </ol>
        </section>
        <section class="content">
            <div class="row">
                <div class="box">
                    <div class="box-body">
                        <form action="<?=base_url()?>Admin_panel/add_users" method="post" enctype="multipart/form-data">
                            <?php if(isset($edit)){ ?>
                            <input type="hidden" name="id" value="<?php echo $edit->id ?>">
                            <?php } ?>
                            <div class="col-xs-12 col-md-12">
                                <div class="col-xs-6 col-md-6">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" name="name" class="form-control"
                                        value="<?php echo @$edit->name ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="text" name="email" class="form-control"
                                        value="<?php echo @$edit->email ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Phone</label>
                                        <input type="text" name="phone" class="form-control"
                                        value="<?php echo @$edit->phone ?>">
                                    </div>
                                </div>
                                <div class="col-xs-6 col-md-6">
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="text" name="password" class="form-control"
                                        value="<?php echo @$edit->password ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" name="address" class="form-control"
                                        value="<?php echo @$edit->address ?>">
                                    </div>
                                    <div class="form-group">
                                        <label></label>
                                        <input type="submit" class="btn btn-primary btn-block" value="Submit">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row" style="padding: 5px">
                        <div class="box">
                            <div class="box">
                                <div class="box-body">
                                    <div class="col-md-12" style="color: #79a0e0">
                                        <h3>Clients List</h3>
                                    </div>
                                    <table id="example1" class="table table-bordered table-striped" border="1">
                                        <thead style="background-color: #79a0e0">
                                            <tr>
                                                <th>SL</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Address</th>
                                                <th>Password</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="itembody">
                                            <?php $i=0; foreach ($list as $s) {?>
                                            <tr>
                                                <td><?php echo ++$i;?></td>
                                                <td><?php echo $s->name;?></td>
                                                <td><?php echo $s->email;?></td>
                                                <td><?php echo $s->phone;?></td>
                                                <td><?php echo $s->address;?></td>
                                                <td><?php echo $s->password;?></td>
                                                <td>
                                                    <a href="<?=base_url().'Admin_panel/users/'.$s->id?>"
                                                        class="btn btn-xs btn-primary">Edit</a> |

                                                        <a href="<?=base_url().'Admin_panel/delete_users/'.$s->id?>"
                                                            onclick="return confirm('are you sure?')"
                                                            class="btn btn-xs btn-danger">Delete</a></td>
                                                        </tr>
                                                        <?php } ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                    <?php $this->load->view('footer_c');?>