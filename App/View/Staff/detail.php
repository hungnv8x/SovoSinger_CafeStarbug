<?php
include_once "App/View/Layout/nav.php";
?>

<table class="table table-striped">

    <div class="container table table-striped">
        <h3 style="text-align: center; font-family:'Comic Sans MS' ; font-weight: bold;"><?php echo $staff->name ?></h3>
        <div class="row">
            <div class="col-3">

                <img src="<?php echo $staff->image ?>" alt="" height="200" width="200">
            </div>
            <div  class="col-9">
                <p style=" font-size: 20px; font-family:'Comic Sans MS'"><span style="font-weight: bold" >Email: </span><?php echo $staff->email ?></p>
               <p style=" font-size: 20px; font-family:'Comic Sans MS'"><span style="font-weight: bold" >Địa chỉ:</span> <?php echo $staff->address?></p>
               <p style=" font-size: 20px; font-family:'Comic Sans MS'"><span style="font-weight: bold" >Số Điện Thoại:</span> <?php echo $staff->phone_number?></p>
               <p style=" font-size: 20px; font-family:'Comic Sans MS'"><span style="font-weight: bold" >Ngày Sinh:</span> <?php echo $staff->birthday?></p>
               <p style=" font-size: 20px; font-family:'Comic Sans MS'"><span style="font-weight: bold" >Vị Trí:</span> <?php echo $staff->role?></p>

            </div>

        </div>
    </div>

</table>

