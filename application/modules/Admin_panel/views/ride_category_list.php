<?php
$this->load->view('head');
$this->load->view('leftMenu');
// $ci=&get_instance();

?>
<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Ride Table
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?=base_url().'Admin_panel/dashboard'?>"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Ride Category List</li>
    </ol>
  </section>
  <section class="content">
    <div class="row">
        <h4>Ride Category Table</h4>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>SL</th>
                        <th>Name</th>
                        <th>Adult Price</th>
                        <th>Childred Price</th>
                        <th>Vat</th>
                        <th>Action</th>
                        <th>#</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($category as $key=>$list){ ?>
                        <tr>
                            <td><?php echo ++$key ?></td>
                            <td><?php echo $list->name ?></td>
                            <td><?php echo $list->children_price ?></td>
                            <td><?php echo $list->adult_price ?></td>
                            <td><?php echo $list->vat ?></td>
                            <td>
                                <a href="<?=base_url().'Admin_panel/ride_category_edit/'.$list->id?>" class="btn btn-default"  style="color: green;"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a href="<?=base_url().'Admin_panel/ride_category_delete/'.$list->id?>" class="btn btn-default" style="color: red;" onclick="return confirm('Are You Sure!!')"><i class="fa-solid fa-trash"></i></a>
                                
                            </td>
                            <td>
                              <a href="<?=base_url().'Admin_panel/buy_tickets/'.$list->id?>" class="btn btn-info" >Buy Ticket</a>
                                </td>
                        </tr>

                        <?php } ?>
                </tbody>
            </table>
    </div>
  </section>
</div>
</section>
</div>
<?php
$this->load->view('footer');
?>

