<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Them</title>
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
                <h1>ADD STUDENT</h1>
                <form method="post">
                    Name: <input name="name" class="form-control" placeholder="Name" value=""><br>
                    Birthday: <input type="text" class="form-control" name="birthday" placeholder="Birthday"><br>
                    Gender: <input type="text" class="form-control" name="gender" placeholder="Gender"><br>
                    Phone: <input type="text" class="form-control" name="phone" placeholder="Phone"><br>
                    Address: <input type="text" class="form-control" name="address" placeholder="Address"><br>
                    <input type="submit" class="btn btn-danger" name="form_add" value="Submit">
                </form>
            </div>
        </div>
    </div>


</body>
</html>