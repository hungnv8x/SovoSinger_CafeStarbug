<?php
include_once "App/View/Layout/nav.php";
?>
<h4 style="text-align: center;">Update Category</h4>
<form method="post">
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" class="form-control" id="name"  value="<?php echo  $category->name?>">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <input type="text" name="description" class="form-control" id="description" value="<?php echo  $category->description?>">
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
