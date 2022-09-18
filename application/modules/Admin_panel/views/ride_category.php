<?php
$this->load->view('head');
$this->load->view('leftMenu');
// $ci=&get_instance();

?>
<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Ride Category
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?=base_url().'Admin_panel/dashboard'?>"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Ride Category</li>
    </ol>
  </section>
  <section class="content">
    <div class="row">
        <h4>category Form</h4>
        <form action="<?=base_url()?>Admin_panel/save_category" method="post">
            <table class="table table-bordered">
                <tr>
                    <th>Category Name</th>
                    <th><input type="text" class="form-control" name="name" placeholder="Ride Category Name"></th>
                    <th>Childred Price</th>
                    <th><input type="text" class="form-control" name="children_price" placeholder="Enter Children Price"></th>
                </tr>
                <tr>
                    <th>Adult Price</th>
                    <th><input type="text" name="adult_price" class="form-control" placeholder="Enter Adult Price"></th>
                    <th>Vat</th>
                    <th><input type="text" name="vat" class="form-control" placeholder="Ex: 15%"></th>
                </tr>
                <tr>
                    <th>Status</th>
                    <th>
                        <select name="status" id="" class="form-control">
                            <option value="">Select Status</option>
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                        </select>
                    </th>
                    <th></th>
                    <th><input type="submit" value="Save"  class="btn btn-primary btn-block"></th>
                </tr>
            </table>
        </form>
    </div>
  </section>
</div>
</section>
</div>
<?php
$this->load->view('footer');
?>

