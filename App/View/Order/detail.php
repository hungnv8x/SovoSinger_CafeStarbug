
<?php
include_once "App/View/Layout/nav.php";
?>
<h3 style="text-align: center">Order detail</h3>
<div class="container ">
    <p>Nhân viên bán hàng : <?php echo $orders["0"]->s_name?> </p>
    <p>Tên khách hàng : <?php echo $orders["0"]->c_name ?></p>
    <p>Ngày mua hàng : <?php echo  $orders["0"]->date ?></p>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Product Name</th>
            <th scope="col">Quantity</th>
            <th scope="col">Price</th>
            <th scope="col">Total</th>
        </tr>
        </thead>
        <tbody>
        <?php $total = 0  ?>
        <?php foreach ($orders as $key => $order): ?>
            <tr>
                <th scope="row"><?php echo $key + 1 ?></th>
                <td><?php echo $order->p_name ?></td>
                <td><?php echo $order->quantity ?></td>
                <td><?php echo number_format($order->price,"0",",",".")  ?></td>
                <td><?php echo number_format($order->quantity * $order->price,"0",",",".")?></td>
            </tr>
            <?php $total += $order->quantity * $order->price ?>
        <?php endforeach; ?>
        <tr>
            <th scope="col"></th>
            <th scope="col">Total</th>
            <th scope="col"></th>
            <th scope="col"></th>
            <th scope="col"><?php echo number_format($total,"0",",",".") ?></th>
        </tr>
        </tbody>
    </table>
</div>


