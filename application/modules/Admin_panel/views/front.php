<?php 
$ci=&get_instance();
$ci->load->model('Admin_model');
?>

<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.maateen.me/solaiman-lipi/font.css" rel="stylesheet">

    


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <style>


body {
    
    font-family: 'SolaimanLipi', sans-serif;
}
 .t{
        position: absolute;
        left: 128px;
        top: 155px;
        font-size: 17px;
        text-align: left;
    }
    .im{
        position: absolute;
        left: 374px;
        width: 118px;
        height: 134px;
        top: 113px;
        object-fit: cover;
    }
@media print {
    .t{
        position: absolute;
        left: 168px;
        top: 155px;
        font-size: 18px;
        text-align: left;
    }
    .im{
        position: absolute;
        left: 730px;
        width: 218px;
        height: 234px;
        top: 260px;
        object-fit: cover;
    }
    .front{
        width: 506px;
        height:750px;
    }
}
.front{
    width: 506px;
    height:750px;
}

</style>

    </head>

<body >



    <div class="main">
        <div class="front" id="img" >
            <center>
                <div class="text t" style="position: absolute;
        left: 168px;
        top: 455px;
        font-size: 14px;
        text-align: left;font-family: 'SolaimanLipi', sans-serif;">

    <b>

    <?php echo $member->name ?>
                    <br>
                    <?php echo $member->father ?>
                    <br>
                    <?php echo $member->member_number ?>
                    <br>
                    <?php echo $member->dl_number ?>
                    <br>
                    <?php echo $road->road_name ?>
                    <br>

    </b>
                    
                </div>
                <img src="<?php echo base_url('upload/pic.png') ?>" class="im" style="position: absolute;
        left: 230px;
        width: 170px;
        height: 200px;
        top: 255px;
        object-fit: cover;">
                <img src="<?php echo base_url() ?>card/cng-font.png" width="100%" style="pointer-events: none;" />
            </center>
        </div>
    </div>


<br><br>
<div class="container text-center"><a href="javascript:void(0)" onclick="jQuery.print('#img')" class="btn btn-sm btn-primary">Print</a></div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="<?php echo base_url() ?>jQuery-Plugin-Print/jQuery.print.js"></script>
</body>

</html>