<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>List Class</title>
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
            <h1>List Class</h1>
            <div id="table-class"></div>
            <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#addClassModal">Add</button>

            <!--Modal Add-->
            <div class="modal fade" id="addClassModal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <p class="h4" >Add Class</p>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <form method="post" id="form_add">
                                Name: <input id="name_class_add" class="form-control" type="text" name="name" placeholder="Name"><br>
                                Total_student: <input id="total_student_add" class="form-control" type="text" name="total_student" placeholder="Total_student"><br>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-secondary" name="form_add" onclick="addClass()">Submit</button>
                        </div>
                    </div>
                </div>
            </div>

            <!--Modal Edit-->
            <div class="modal fade" id="editClassModal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <p class="h4" >Edit Class</p>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <form id="form_edit">
                                ID: <input type="text" id="id_edit" class="form-control" name="id"><br>
                                Name: <input id="name_class_edit" class="form-control" type="text" name="name" placeholder="Name"><br>
                                Total_student: <input id="total_student_edit" class="form-control" type="text" name="total_student" placeholder="Total_student"><br>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-secondary" name="form_edit" onclick="formEditClass()">Submit</button>
                        </div>
                    </div>
                </div>
            </div>

            <!--Modal Delete-->
            <div class="modal fade" id="deleteClassModal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <p class="h4" >Delete Class</p>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            Do you want to delete class: <input id="name_class_delete" class="form-control" type="text" name="name_class_delete"><br>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-danger" name="form_delete" onclick="formDeleteClass()">Delete</button>
                        </div>
                    </div>
                </div>
            </div>

            <!--Modal View List-->
            <div class="modal fade" id="addClassModal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <p class="h4" >List Student In Class</p>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
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
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <script src="public/js/class.js"></script>
</body>
</html>
