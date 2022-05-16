<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Edit Class</title>
</head>
<body>
<nav class="navbar">
    <div class="container-fluid">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="http://demo/index.php?controller=class&action=listClass">List Class</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="http://demo/index.php?controller=student&action=listStudent">List Student</a>
            </li>
        </ul>
    </div>
</nav>
<h1>EDIT CLASS</h1>

<form method="post">
    ID: <?php echo $class['id']; ?> <br>
    Name: <input name="name" placeholder="Name" value="<?php echo $class['ten_lop']; ?>"><br>
    Total_student: <input type="text" name="total_student" placeholder="Total_student" value="<?php echo $class['so_hoc_sinh']; ?>"><br>
    <input type="submit" name="form_edit" value="Edit">
</form>

</body>
</html>
