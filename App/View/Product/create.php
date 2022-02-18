<?php
include_once "App/View/Layout/nav.php";
?>
<h4 style="text-align: center;">Create Product</h4>
<form method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label >Name</label>
    <input type="text" name="name" class="form-control"  aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label >Price</label>
    <input type="text" name="price" class="form-control" >
  </div>
    <div class="form-group">
        <label >Category</label>
        <select name="category" class="form-control">
            <?php foreach ($categories as $category):?>
            <option value="<?php echo $category->id?>"><?php echo $category->name?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div class="form-group">
        <p> Image </p>
        <input type="file" name="fileToUpload" >

    </div>

  <button type="submit" class="btn btn-primary">Create</button>
</form>