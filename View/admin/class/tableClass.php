<table class="table table-hover table-bordered">
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Total_Student</th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($list as $class) { ?>
        <tr>
            <td> <?php echo $class['id']; ?> </td>
            <td> <?php echo $class['ten_lop']; ?></td>
            <td> <?php echo $class['so_hoc_sinh']; ?></td>
            <td><button type="button" id="edit" class="btn btn-secondary" onclick="editClass(<?php echo $class['id']?>)">Edit</button> </td>
            <td><button type="button" id="delete" class="btn btn-danger" onclick="deleteClass(<?php echo $class['id']?>)">Delete</button> </td>
            <td><button type="button" id="view" class="btn btn-primary" onclick="viewStudentInClass(<?php echo $class['id']?>)">All Student In Class</button> </td>;
        </tr>
    <?php } ?>
    </tbody>
</table>