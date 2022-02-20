<?php
include_once "App/View/Layout/nav.php";
?>

<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Tên khách hàng</th>
        <th scope="col">Nhân viên bán hàng</th>
        <th scope="col">Ngày bán hàng</th>

    </tr>
    </thead>
    <tbody>
    <?php foreach ($orders as $key=> $order):?>
        <tr>
            <td scope="row"><?php echo  $key+1?></td>
            <td ><?php echo  $order->customer_name?></td>
            <td ><?php echo  $order->staff_name?></td>
            <td ><?php echo  $order->date?></td>
            <td>
                <a type="button"class="btn btn-info" href="index.php?page=order-detail&id=<?php echo $order->id?>">Detail</a>
            </td>
        </tr>
    <?php endforeach;?>
    </tbody>
</table>
