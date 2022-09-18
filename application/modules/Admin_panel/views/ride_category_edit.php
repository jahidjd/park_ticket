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
        <form action="<?=base_url()?>Admin_panel/update_category" method="post">
        <input type="hidden" name="id" value="<?php echo $category->id ?>">
            
            <table class="table table-bordered">
                <tr>
                    <th>Category Name</th>
                    <th><input type="text" class="form-control" name="name" value="<?php echo $category->name ?>"></th>
                    <th>Childred Price</th>
                    <th><input type="text" class="form-control" name="children_price" value="<?php echo $category->children_price ?>"></th>
                </tr>
                <tr>
                    <th>Adult Price</th>
                    <th><input type="text" name="adult_price" class="form-control" value="<?php echo $category->adult_price ?>"></th>
                    <th>Vat</th>
                    <th><input type="text" name="vat" class="form-control" value="<?php echo $category->vat ?>"></th>
                </tr>
                <tr>
                    <th>Status</th>
                    <th>
                        <select name="status" id="" class="form-control">
                            <option value="<?php echo $category->status ?>"><?php if($category->status=='active'){echo "Active";}else{echo "Inactive";} ?></option>
                            <?php if($category->status=='active'){echo "<option value='inactive'>Inactive</option>";}else{echo "<option value='inactive'>Inactive</option>";} ?>
                            
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

