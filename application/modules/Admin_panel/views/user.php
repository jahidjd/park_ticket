<?php $this->load->view('head_c');?>
<div class="wrapper">
  <?php
  $this->load->view('leftMenu');
  ?>
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Users
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?= base_url() . 'Admin_panel/dashboard' ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?= base_url() . 'Admin_panel/user' ?>">Add Users </a></li>
      </ol>
    </section>
    <section class="content">
      <div class="row">
        <div class="box">
          <div class="box-body">
            <form action="<?=base_url()?>Admin_panel/add_emp" method="post" enctype="multipart/form-data">
              <?php if(isset($edit)){ ?>
                <input type="hidden" name="adminID" value="<?php echo $edit->adminID ?>">
              <?php } ?>
              <div class="col-xs-12 col-md-12">
                <div class="form-group">
                  <label>Name</label>
                  <input type="text" name="name" class="form-control" value="<?php echo @$edit->name ?>">
                </div>
                <div class="form-group">
                  <label>Username</label>
                  <input type="text" name="username" class="form-control" value="<?php echo @$editEmp->username ?>">
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" name="password" class="form-control">
                </div>                  
              </div>
              <div class="form-group">
                <label></label>
                <input type="submit" class="btn btn-primary btn-block" value="Submit">
              </div>
          </form>
        </div>
      </div>
        <div class="row" style="padding: 5px">
          <div class="box">
              <div class="box-body">
                <div class="col-md-12" style="color: #79a0e0">
                  <h3>Admin List</h3>
                </div>
                <table id="example1" class="table table-bordered table-striped" border="1">
                  <thead style="background-color: #79a0e0">
                    <tr>
                      <th>SL</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody id="itembody">
                    <?php $i=0; foreach ($adm as $s) {?>
                      <tr>
                        <td><?= ++$i;?></td>
                        <td><?= $s->name;?></td>
                        <td><?= $s->email;?></td>
                        <td>
                          <a href="<?=base_url().'Admin_panel/employee/'.$s->id?>" class="btn btn-xs btn-primary">Edit</a> |

                          <a href="<?=base_url().'Admin_panel/delete_user/'.$s->id?>" onclick="return confirm('are you sure?')" class="btn btn-xs btn-danger">Delete</a></td>
                        </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- /.content -->
      </div>
    </div>
    <!-- ./wrapper -->
    <?php $this->load->view('footer_c');?>
    <script type="text/javascript">
      function get_distributor(id) {
        var base='<?php echo base_url() ?>'
        $.ajax({
          type: "POST",
          url: base+"Admin_panel/get_distributor",
          data: {'depoID': id},
          dataType: "json",
          success: function(data){
            var ht='<label>Distributor</label>'
            ht+='<select name="distributorID" class="form-control" >'
            ht+='<option value="">Select Distributor</option>'
            $.each(data, function(i, obj) {
              ht+='<option value="'+obj.distributorID+'">'+obj.name+'</option>'
            })
            ht+='</select>'
            $('#dis').html(ht)
          }
        });
      }
    </script>
