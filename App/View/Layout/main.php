<?php
include_once "App/View/Layout/nav.php";
?>

<h2 style="text-align: center">Danh sách sản phẩm</h2>
<div class="container mt-3">
    <div class="row">
        <?php foreach ($products as $product): ?>
        <div class="col-4 mt-3 mb-3">
            <div class="row">
                <div class="col-5">
                    <img src="<?php echo $product->image ?>" alt="" height="120" width="120">
                </div>
                <div  class="col-7">
                    <p style=" font-size: 20px; font-family:'Comic Sans MS'"><?php echo $product->name ?></p>
                    <p style=" font-size: 20px; font-family:'Comic Sans MS'">Giá : <?php echo $product->price ?></p>
                    <a type="button"class="btn btn-success mb-3" href="index.php?page=cart-add&id=<?php echo $product->id?>">Mua Hang</a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>