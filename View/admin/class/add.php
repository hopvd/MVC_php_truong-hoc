<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Add Class </title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-4">
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
        </div>

        <div class="col-sm-8">
            <h1>ADD Class</h1>
            <form method="post">
                Name: <input class="form-control" type="text" name="name" placeholder="Name"><br>
                Total_student: <input class="form-control" type="text" name="total_student" placeholder="Total_student"><br>
                <input type="submit" class="btn btn-danger" name="form_add" value="Add">
            </form>
        </div>
    </div>
</div>

</body>
</html>
