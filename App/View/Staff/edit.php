<?php
include_once "App/View/Layout/nav.php";
?>
<h4 style="text-align: center;">Update Staff</h4>
<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label >Name</label>
        <input type="text" name="name" class="form-control" value="<?php echo $staff->name?>">
    </div>
    <div class="form-group">
        <label >Email</label>
        <input type="email" name="email" class="form-control"value="<?php echo $staff->email?>" >
    </div>
    <div class="form-group">
        <label >Password</label>
        <input type="password" name="password" class="form-control" >
    </div>
    <div class="form-group">
        <label >Address</label>
        <input type="text" name="address" class="form-control"value="<?php echo $staff->address?>" >
    </div>
    <div class="form-group">
        <label >Phone</label>
        <input type="text" name="phone_number" class="form-control" value="<?php echo $staff->phone_number?>">
    </div>
    <div class="form-group">
        <label >Birthday</label>
        <input type="date" name="birthday" class="form-control" value="<?php echo $staff->birthday?>">
    </div>
    <div class="form-group">
        <p> Image </p>
        <input type="file" name="fileToUpload" value="<?php echo $staff->image?>" >
    </div>
    <div class="form-group">
        <label >Role</label>
        <select name="role" value="<?php echo $staff->role?>">
            <option value="Admin">Admin</option>
            <option value="Nhan Vien">Nhân Viên</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Create</button>
</form>