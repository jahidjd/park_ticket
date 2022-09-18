<?php
$this->load->view('head');
$this->load->view('leftMenu');
// $ci=&get_instance();

?>

<div class="content-wrapper">
  <section class="content-header">
    <h1>
      Buy Tickets
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?=base_url().'Admin_panel/dashboard'?>"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">ticktes For <?php echo $category->name ?> </li>
    </ol>
  </section>
  <section class="content">
    <div class="row">
        <h4>ticktes For <?php echo $category->name ?></h4>
        <form action="<?=base_url()?>Admin_panel/save_ticket" method="post">
            <table class="table table-bordered">
                <tr>
                    <th>Ride Name</th>
                    <th><input type="hidden" name="category_id" value="<?php echo $category->id ?>" class="form-control" ><?php echo $category->name ?></th>
                    <th>Rider Name</th>
                    <th><input type="text" name="rider_name" class="form-control" placeholder="Enter Rider Name"></th>
                </tr>
                <tr>
                    <th>Phone</th>
                    <th><input type="text" name="phone" class="form-control" placeholder="Enter Rider Phone"></th>
                    <th>Ride For</th>
                    <th>
                        <div class="col-md-12 col-lg-12">
                            <div class="col-md-6 col-lg-6">
                            Children<input type="checkbox" class="price"   id="children" value="<?php echo $category->children_price ?>" >
                            <div class="col-md-12 col-lg-12" id="clidQty"></div>
                            </div>
                            <div class="col-md-6 col-lg-6">
                            Adult<input type="checkbox" class="price"  id="adult" value="<?php echo $category->adult_price ?>" >
                            <div class="col-md-12 col-lg-12" id="adultQty"></div>
                            </div>
                        </div>
                      
                    </th>

                </tr>
                <tr>
                    <th>Discount</th>
                    <th><input type="text" name="discount" class="form-control" id="disount" placeholder="Enter Discount"></th>
                    <th colspan="2"><input type="submit" class="btn btn-primary"></th>
                </tr>
              
                
            </table>
        </form>
            
    </div>
  </section>
</div>
</section>
</div>
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function(){
        $('.price').on('click',function(){
            var price = [];
            
            $.each($("input[id='children']:checked"), function(){
                
                    $('#clidQty').html('<input type="text" name="adult_qty" value="1" class="form-control" id="adult_qty" placeholder="Total Children Tickets">')
                    price.push($(this).val());
                
                
            });
            
            $.each($("input[id='adult']:checked"), function(){
                $('#adultQty').html('<input type="text" name="child_qty" value="1" class="form-control" id="child_qty" placeholder="Total Adult Tickets">')
                price.push($(this).val());
            });

            // console.log(price);
            if(price!=''){
                let totalSubPrice = 0;
                price.map((v,i)=>{
                    totalSubPrice+=parseFloat(v);
            })
        //    console.log(totalPrice); 
        
           let t = (totalSubPrice*15)/100
           $('#vat').val(t)
            // let totalPrice = t+totalSubPrice
            // document.getElementById("totalPrice").innerHTML = totalPrice
           
          

            }
            
        })

        
    })
</script>
<?php
$this->load->view('footer');
?>


