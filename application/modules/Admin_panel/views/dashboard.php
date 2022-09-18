<?php
$this->load->view('head');
$this->load->view('leftMenu');
$ci=&get_instance();
$ci->load->model('Rest_model');
$ci->load->model('Admin_model');
?>
<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Dashboard
      <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?=base_url().'Admin_panel/dashboard'?>"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
    </ol>
  </section>
  <section class="content">
    <div class="row">
      <div class="container">
        <div class="col-md-4">
          <div class="box">
              <div class="box-body text-center">
                <h5>Total Member</h5>
                <h1><?php echo $member ?></h1>
              </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="box">
              <div class="box-body text-center">
                <h5>Total Balance</h5>
                <h1><?php echo number_format($balance,2) ?></h1>
              </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="box">
              <div class="box-body text-center">
                <h5>Expire Soon</h5>
                <h1><?php echo $expire?></h1>
              </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
</section>
</div>
<?php
$this->load->view('footer');
?>

