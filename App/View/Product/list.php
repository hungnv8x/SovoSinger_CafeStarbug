<?php
include_once "App/View/Layout/nav.php";
?>
<a type="button"class="btn btn-success mb-3" href="index.php?page=product-create">Create</a>
<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Image</th>
        <th scope="col">Name</th>
        <th scope="col">Price</th>
        <th scope="col">Category</th>

    </tr>
    </thead>
    <tbody>
    <?php foreach ($products as $key=> $product):?>
    <tr>
        <td scope="row"><?php echo  $key+1?></td>
        <td ><img src="<?php echo  $product->image?>" alt="<?php echo  $product->image?>" width="50px" height="50px"></td>
        <td ><?php echo  $product->name?></td>
        <td ><?php echo  $product->price?></td>
        <td ><?php echo  $product->category?></td>
        <td>
            <a type="button"class="btn btn-info" href="index.php?page=product-detail&id=<?php echo $product->id?>">Detail</a>
            <a type="button"class="btn btn-success" href="index.php?page=product-edit&id=<?php echo $product->id?>">Edit</a>
            <a onclick="return confirm('Are you sure?')" type="button"class="btn btn-danger" href="index.php?page=product-delete&id=<?php echo $product->id?>">Delete</a>
        </td>
    </tr>
<?php endforeach;?>
    </tbody>
</table>
