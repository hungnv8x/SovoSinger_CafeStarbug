<?php
    if (!isset($_SESSION['staff'])){
        header("location:index.php?page=login");
    }
?>
<div class="row mt-0 ">
    <div class="col-3"><a class="navbar-brand mt-0" href="index.php"><img src="Upload/logo2.png" alt=""
                                                                          width="100px"></a></div>
    <div class="col-9 mt-2 "
         style="font-size: 50px ; font-family: 'Comic Sans MS',cursive,sans-serif; font-weight: bold; color:#704e29 ">
        StarBug Cafe
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-light bg-light ">

    <ul class="navbar-nav mr-auto">
        <li class="nav-item ">
            <a class="nav-link" href="index.php">Home <span
                        class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" data-toggle="dropdown">Quản lý đồ uống</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="index.php?page=category-list">Category</a>
                <a class="dropdown-item" href="index.php?page=product-list">Product</a>

            </div>
        </li>
        <li class="nav-item ">
            <a class="nav-link" href="index.php?page=staff-list">Quản Lý Nhân Viên <span
                        class="sr-only">(current)</span></a>
        </li>
    </ul>


    <div class="form-inline my-2 my-lg-0">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                   aria-expanded="false">
                    <?php echo $_SESSION["staff"]->name ?? "" ?>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">

                    <a class="dropdown-item" href="index.php?page=logout">Logout</a>
                </div>
            </li>
        </ul>
    </div>

</nav>
