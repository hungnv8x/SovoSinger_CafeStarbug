<?php
include_once "App/View/Layout/nav.php";
?>

<form  action="index.php?page=cart-submit" method="post">
    <h2 class="mt-3 mb-3">Giỏ hàng</h2>
    <div class="container ">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Image</th>
                <th scope="col">Name</th>
                <th scope="col">Quantity</th>
                <th scope="col">Price</th>
                <th scope="col">Total</th>
                <th scope="col">Delete</th>
            </tr>
            </thead>
            <tbody>
            <?php if (!empty($products)): ?>
                <?php $total = 0 ; ?>
                <?php foreach ($products as $key => $product): ?>
                    <tr>
                        <th scope="row"><?php echo $key + 1 ?></th>
                        <td><img src="<?php echo $product->image ?>" alt="" width="50" height="50"></td>
                        <td><?php echo $product->name ?></td>
                        <td><input name="quantity[<?php echo $product->id ?>]" type="text" value="<?php echo $_SESSION["cart"][$product->id] ?>" style="width: 40px"></td>
                        <td><?php echo number_format($product->price,0,',','.') ?></td>
                        <td><?php echo number_format($product->price * $_SESSION["cart"][$product->id],0,',','.') ?></td>
                        <td><a type="button" class="btn btn-danger"
                               href="index.php?page=cart-delete&id=<?php echo $product->id ?>">delete</a></td>
                    </tr>
                    <?php $total += $product->price * $_SESSION["cart"][$product->id] ?>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="7" style="text-align: center">Giỏ hàng chưa có sản phẩm nào</td>
                </tr>
            <?php endif; ?>
            <tr>
                <th scope="row"><a href="index.php">Add</a></th>
                <td></td>
                <td>Total</td>
                <td></td>
                <td></td>
                <td><?php echo number_format($total,0,',','.') ;?></td>
                <td></td>
            </tr>
            </tbody>
        </table>
        <button style="float: right" class="btn btn-success mb-3 " name="update">update</button>
    </div>
    <div class="container mt-5">
        <p>Thông tin khách hàng</p>
        <div class="form-group">
            <input type="text" class="form-control" name="name" placeholder="CustomerName">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="phone_number" placeholder="Phone">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="address" placeholder="address">
        </div>
        <button type="submit" class="btn btn-primary" name="order">Order</button>
    </div>

</form>