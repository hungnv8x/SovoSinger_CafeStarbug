<?php
include_once "App/View/Layout/nav.php";
?>
<a type="button"class="btn btn-success mb-3" href="index.php?page=category-create">Create</a>
<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">description</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($categories as $key=>$category):?>
    <tr>
        <td scope="row"><?php echo  $key+1?></td>
        <td ><?php echo  $category->name?></td>
        <td ><?php echo  $category->description?></td>
        <td>
            <a type="button"class="btn btn-info" href="index.php?page=category-detail&id=<?php echo $category->id?>">Detail</a>
            <a type="button"class="btn btn-success" href="index.php?page=category-edit&id=<?php echo $category->id?>">Edit</a>
            <a type="button"class="btn btn-danger" href="index.php?page=category-delete&id=<?php echo $category->id?>">Delete</a>
        </td>
    </tr>
<?php endforeach;?>
    </tbody>
</table>
