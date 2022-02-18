<?php
include_once "App/View/Layout/nav.php";
?>
<h4 style="text-align: center;">Create Staff</h4>
<form method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label >Name</label>
    <input type="text" name="name" class="form-control"  aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label >Email</label>
    <input type="email" name="email" class="form-control" >
  </div>
    <div class="form-group">
        <label >Password</label>
        <input type="password" name="password" class="form-control" >
    </div>
    <div class="form-group">
        <label >Address</label>
        <input type="text" name="address" class="form-control" >
    </div>
    <div class="form-group">
        <label >Phone</label>
        <input type="text" name="phone_number" class="form-control" >
    </div>
    <div class="form-group">
        <label >Birthday</label>
        <input type="date" name="birthday" class="form-control" >
    </div>
    <div class="form-group">
        <p> Image </p>
        <input type="file" name="fileToUpload" >
    </div>
    <div class="form-group">
        <label >Role</label>
      <select name="role">
          <option value="Admin">Admin</option>
          <option value="Nhan Vien">Nhân Viên</option>
      </select>
    </div>

  <button type="submit" class="btn btn-primary">Create</button>
</form>