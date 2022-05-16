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
    <title>List</title>
    <script>

    </script>
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
            <div id="table-student"></div>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addStudentModal">Add</button>

            <!--Modal Add-->
            <div class="modal fade" id="addStudentModal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <p class="h4" >Add student</p>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <form method="post" id="form_add">
                                Name: <input type="text" id="name_add" class="form-control" name="name" placeholder="Name" value=""><br>
                                Birthday: <input type="date" id="birthday_add" class="form-control" name="birthday" placeholder="Birthday"><br>
                                Gender: <input type="text" id="gender_add" class="form-control" name="gender" placeholder="Gender"><br>
                                Phone: <input type="text" id="phone_add" class="form-control" name="phone" placeholder="Phone"><br>
                                Address: <input type="text" id="address_add" class="form-control" name="address" placeholder="Address"><br>
                            </form>
                        </div>
                        <div class="modal-footer d-flex justify-content-between">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            <button type="button" id="addStudent" class="btn btn-secondary" name="form_add" onclick="submitFormAdd()">Submit</button>
                        </div>
                    </div>
                </div>
            </div>

            <!--Modal Edit-->
            <div class="modal fade" id="editStudentModal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <p class="h4" >Edit student</p>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <form method="post" id="form_edit">
                                ID: <input type="text" id="id_edit" class="form-control" name="id">
                                Name: <input type="text" id="name_edit" class="form-control" name="name" placeholder="Name" value=""><br>
                                Birthday: <input type="date" id="birthday_edit" class="form-control" name="birthday" placeholder="Birthday" value=""><br>
                                Gender: <input type="text" id="gender_edit" class="form-control" name="gender" placeholder="Gender" value=""><br>
                                Phone: <input type="text" id="phone_edit" class="form-control" name="phone" placeholder="Phone" value=""><br>
                                Address: <input type="text" id="address_edit" class="form-control" name="address" placeholder="Address" value=""><br>
                            </form>
                        </div>
                        <div class="modal-footer d-flex justify-content-between">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            <button type="button" id="formEdit" class="btn btn-primary" onclick="submitFormEdit()">Submit</button>
                        </div>
                    </div>
                </div>
            </div>

            <!--Modal Delete-->
            <div class="modal fade" id="deleteStudentModal">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <p class="h4" >Delete student</p>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <p>Do you want delete </p>
                            <input type="text" id="name_del" class="form-control" name="name_del"><br>
                        </div>
                        <div class="modal-footer d-flex justify-content-between">
                            <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Close</button>
                            <button type="button" id="delete" class="btn btn-danger" onclick="confirmDelete()">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="public/js/student.js"></script>

</body>
</html>