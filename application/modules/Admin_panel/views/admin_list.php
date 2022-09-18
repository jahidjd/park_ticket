<?php $this->load->view('head_c');?>
<div class="wrapper">
    <?php
  $this->load->view('leftMenu');
  ?>
    <div class="content-wrapper">
        <section class="content-header">
            <h1>Admin</h1>
            <ol class="breadcrumb">
                <li><a href="<?= base_url() . 'Admin_panel/dashboard' ?>"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="<?= base_url() . 'Admin_panel/admin_list' ?>">Add Admin </a></li>
            </ol>
        </section>
        <section class="content">
            <div class="row">
                <div class="box">
                    <div class="box-body">
                        <form action="<?=base_url()?>Admin_panel/add_admin" method="post" enctype="multipart/form-data">
                        
                            <?php if(isset($edit)){ ?>
                            <input type="hidden" name="adminID" value="<?php echo $edit->adminID ?>">
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
                                        <label>Role</label>
                                        <select class="form-control" name="role">
                                            <option value="admin" <?php if(@$edit->role=='admin'){echo 'selected';} ?>>Admin</option>
                                            <option value="user" <?php if(@$edit->role=='user'){echo 'selected';} ?>>User</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-md-6">
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input type="text" name="username" class="form-control"
                                            value="<?php echo @$edit->username ?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" name="password" class="form-control">
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
                                    <h3>User List</h3>
                                </div>
                                <table id="example1" class="table table-bordered table-striped" border="1">
                                    <thead style="background-color: #79a0e0">
                                        <tr>
                                            <th>SL</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Username</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="itembody">
                                        <?php $i=0; foreach ($admin as $s) {?>
                                        <tr>
                                            <td><?= ++$i;?></td>
                                            <td><?= $s->name;?></td>
                                            <td><?= $s->email;?></td>
                                            <td><?= $s->username;?></td>
                                            <td>
                                                <!--<a href="<?=base_url().'Admin_panel/admin_list/'.$s->adminID?>"-->
                                                <!--    class="btn btn-xs btn-primary">Edit</a> |-->

                                                <!--<a href="<?=base_url().'Admin_panel/delete_admin/'.$s->adminID?>"-->
                                                <!--    onclick="return confirm('are you sure?')"-->
                                                <!--    class="btn btn-xs btn-danger">Delete</a></td>-->
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