<?php
$this->load->view('head');
$this->load->view('leftMenu');
// $ci=&get_instance();

?>

<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Tickets List
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?=base_url().'Admin_panel/dashboard'?>"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">ticktes List </li>
    </ol>
  </section>
  <section class="content">
    <div class="row">
        <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Rider Name</th>
                        <th>Phone</th>
                        <th>Child Tickets</th>
                        <th>Adult Tickets</th>
                        <th>Vat</th>
                        <th>Discount</th>
                        <th>Total</th>
                        <th>#</th>
                    </tr>
                </thead>
                <tbody>
                  <?php foreach($list as $l){ ?>
                    <tr>
                        <td><?php echo $category->name ?></td>
                        <td><?php echo $l->rider_name ?></td>
                        <td><?php echo $l->phone ?></td>
                        <td><?php echo $l->child_qty ?></td>
                        <td><?php echo $l->adult_qty ?></td>
                        <td><?php echo $l->vat ?></td>
                        <td><?php echo $l->discount ?></td>
                        <td><?php echo $l->price ?></td>
                        <td>
                          <a href="<?=base_url().'Admin_panel/ticket_edit/'.$l->id?>" class="btn btn-default"  style="color: green;"><i class="fa-solid fa-pen-to-square"></i></a>
                          <a href="<?=base_url().'Admin_panel/ticket_delete/'.$l->id?>" class="btn btn-default" style="color: red;" onclick="return confirm('Are You Sure!!')"><i class="fa-solid fa-trash"></i></a>                        </td>
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


