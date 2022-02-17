<?php
include_once "App/View/Layout/nav.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table class="table table-striped">
    <tr>

        <th scope="col">Name</th>
        <th scope="col">Description</th>

    </tr>
    <tr>

        <td><?php echo $category->name?></td>
        <td><?php echo $category->description?></td>

    </tr>
</table>
</body>
</html>

