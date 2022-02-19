<?php
include_once "App/View/Layout/nav.php";
?>

<form method="post">
    <h2 class="mt-3 mb-3">Giỏ hàng</h2>
    <div class="container">
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
                <?php foreach ($products as $key => $product): ?>
                    <tr>
                        <th scope="row"><?php echo $key + 1 ?></th>
                        <td><img src="<?php echo $product->image ?>" alt="" width="50" height="50"></td>
                        <td><?php echo $product->name ?></td>
                        <td><input name="quantity" type="text" value="1" style="width: 40px"></td>
                        <td><?php echo $product->price ?></td>
                        <td><?php ?></td>
                        <td><a type="button" class="btn btn-danger"
                               href="index.php?page=cart-delete&id=<?php echo $product->id ?>">delete</a></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="7" style="text-align: center">Giỏ hàng chưa có sản phẩm nào</td>
                </tr>
            <?php endif; ?>
            <tr>
                <th scope="row"></th>
                <td></td>
                <td>Total</td>
                <td></td>
                <td></td>
                <td>Total</td>
                <td></td>
            </tr>
            </tbody>
        </table>
        <a style="float: right" type="button" class="btn btn-success mb-3 " href="index.php?page=cart" name="update">update</a>
    </div>
</form>