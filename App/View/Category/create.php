<?php
include_once "App/View/Layout/nav.php";
?>
<h4 style="text-align: center;">Create Category</h4>
<form method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Description</label>
    <input type="text" name="description" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">Create</button>
</form>