<?php
include_once "App/View/Layout/nav.php";
?>
<a type="button"class="btn btn-success mb-3" href="index.php?page=staff-create">Create</a>
<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Image</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Address</th>
        <th scope="col">Phone</th>
        <th scope="col">Birthday</th>
        <th scope="col">Role</th>

    </tr>
    </thead>
    <tbody>
    <?php foreach ($staffs as $key=> $staff):?>
    <tr>
        <td scope="row"><?php echo  $key+1?></td>
        <td ><img src="<?php echo  $staff->image?>" alt="<?php echo  $staff->image?>" width="50px" height="50px"></td>
        <td ><?php echo  $staff->name?></td>
        <td ><?php echo  $staff->email?></td>
        <td ><?php echo  $staff->address?></td>
        <td ><?php echo  $staff->phone_number?></td>
        <td ><?php echo  $staff->birthday?></td>
        <td ><?php echo  $staff->role?></td>
        <td>
            <a type="button"class="btn btn-info" href="index.php?page=staff-detail&id=<?php echo $staff->id?>">Detail</a>
            <a type="button"class="btn btn-success" href="index.php?page=staff-edit&id=<?php echo $staff->id?>">Edit</a>
            <a onclick="return confirm('Are you sure?')" type="button"class="btn btn-danger" href="index.php?page=staff-delete&id=<?php echo $staff->id?>">Delete</a>
        </td>
    </tr>
<?php endforeach;?>
    </tbody>
</table>
