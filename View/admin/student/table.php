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
    <?php
    foreach ($list as $student) { ?>
        <tr>
            <td><?php echo $student['id'] ?></td>
            <td><?php echo $student['ho_ten'] ?></td>
            <td><?php echo $student['ngay_sinh'] ?></td>
            <td><?php echo $student['gioi_tinh'] ?></td>
            <td><?php echo $student['sdt'] ?></td>
            <td><?php echo $student['dia_chi'] ?></td>
            <td><button type="button" id="edit" class="btn btn-primary" onclick="editStudent(<?php echo $student['id']; ?>)">Edit</button></td>
            <td><button type="button" id="delete" class="btn btn-danger" onclick="deleteStudent(<?php echo $student['id']; ?>)">Delete</button> </td>
        </tr>
    <?php } ?>
    </tbody>
</table>