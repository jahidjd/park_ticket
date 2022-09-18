<?php $this->load->view('head_c');?>
<div class="wrapper">
    <?php
  $this->load->view('leftMenu');
  ?>
    <div class="content-wrapper">
        <section class="content-header">
            <h1>Add Card</h1>
            <ol class="breadcrumb">
                <li><a href="<?= base_url() . 'Admin_panel/dashboard' ?>"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Add Card </a></li>
            </ol>
        </section>
        <section class="content">
            <div class="row">
                <div class="box">
                    <div class="box-body">
                        <form action="<?=base_url()?>Admin_panel/save_card" method="post" enctype="multipart/form-data">
                        
                            <?php if(isset($edit)){ ?>
                            <input type="hidden" name="id" value="<?php echo $edit->id ?>">
                            <?php } ?>
                            <div class="col-xs-12 col-md-12">
                                <div class="col-xs-6 col-md-6">
                                    <div class="form-group">
                                        <label>Card Number</label>
                                        <input type="text" name="card_no" class="form-control"
                                            value="<?php echo @$edit->card_no ?>" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Add Member to Card</label>
                                        <select class="form-control chosen" name="id" required >
                                            <option value="">Select Member</option>
                                            <?php foreach ($list as $s) {?>
                                            <option value="<?php echo $s->id ?>"><?php echo $s->name ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-md-6">
                                <div class="col-xs-6 col-md-6">
                                    <div class="form-group">
                                        <label>Card issue date</label>
                                        <input type="text" name="card_issue_date_old" class="form-control date"
                                            value="<?php echo @$edit->card_issue_date_old ?>" required autocomplete="off">
                                    </div>
                                </div>
                                <div class="col-xs-6 col-md-6">
                                    <div class="form-group">
                                        <label>Renew for</label>
                                        <input type="text" name="expire_date" class="form-control date"
                                            value="<?php echo @$edit->expire_date ?>" required autocomplete="off">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-12">
                                    <div class="form-group">
                                        <label>Payment Amount</label>
                                        <input type="text" name="amount" class="form-control"
                                            value="<?php echo @$edit->amount ?>" required>
                                    </div>
                                    </div>
                                    
                                </div>
                                <div class="form-group">
                                    <label></label>
                                    <input type="submit" class="btn btn-primary btn-block" value="Submit">
                                </div>
                        </form>
                    </div>
                </div>
        </section>
    </div>
</div>
<?php $this->load->view('footer_c');?>