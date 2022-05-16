<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>List Student in Class</title>
</head>
<body>
<div class="accordion-header"></div>

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
            <p class="h1">List Student in Class</p>
            <table class="table table-hover table-bordered">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Birthday</th>
                    <th>Gender</th>
                    <th>Phone</th>
                    <th>Address</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($listStudentInClass as $student) { ?>
                    <tr>
                    <td> <?php echo $student['id_hs'] ?> </td>
                    <td> <?php echo $student['ho_ten'] ?></td>
                    <td> <?php echo $student['ngay_sinh'] ?></td>
                    <td> <?php echo $student['gioi_tinh'] ?></td>
                    <td> <?php echo $student['sdt'] ?></td>
                    <td> <?php echo $student['dia_chi'] ?></td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
            <br>
            <p class="h4">Choose Name's student for add to class</p>
            <button type="button" id="choose" class="btn btn-secondary" onclick="chooseStudent"
            <form>

            </form>
        </div>
    </div>
</div>

</body>
</html>