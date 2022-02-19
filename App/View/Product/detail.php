<?php
include_once "App/View/Layout/nav.php";
?>

<table class="table table-striped">

    <div class="container table table-striped">
        <h3 style="text-align: center"><?php echo $product->category ?></h3>
        <div class="row">
            <div class="col-3">

                <img src="<?php echo $product->image ?>" alt="" height="200" width="200">
            </div>
            <div  class="col-9">
               <p style=" font-size: 20px; font-family:'Comic Sans MS'">Tên : <?php echo $product->name ?></p>
               <p style=" font-size: 20px; font-family:'Comic Sans MS'">Giá : <?php echo $product->price ?></p>
            </div>

        </div>
    </div>

</table>

