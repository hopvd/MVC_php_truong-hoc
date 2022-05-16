$(function () {
    $("#table-class").load("/index.php?controller=class&action=listClassView");
})


function addClass()
{
    var str_alert = "";
    if($("#name_class_add").val() == "")
    {
        str_alert += "Please Fill Name's Field\n";
    }
    if($("#total_student_add").val() == "")
    {
        str_alert += "Please Fill Total-Student's Field\n";
    }

    if ($("#name_class_add").val() == "" || $("#total_student_add").val() == "")
    {
        alert(str_alert);
    }
    else {
        $.ajax({
            type: "POST",
            url: "/index.php?controller=class&action=addClassAjax",
            data: $("#form_add").serialize(),
            success: function (response) {
                console.log(response);
                // if (response == true) {
                $("#addClassModal").modal("hide");
                $("#table-class").load("/index.php?controller=class&action=listClassView");
                // }
                // if (response == false) {
                //     alert("Name's Field Invalid!");
                // }
            }
        });
    }
}

function editClass(id)
{
    $.ajax({
        url: "/index.php?controller=class&action=getDetailClass",
        type: "post",
        data: {
            'id' : id
        },
        dataType: "JSON",
        success: function(response) {
            if(response.status == true) {
                var info = response.data;
                $('#id_edit').val(id);
                $('#name_class_edit').val(info.ten_lop);
                $('#total_student_edit').val(info.so_hoc_sinh);
                $('#editClassModal').modal('show');
            } else {
                alert('Hoc sinh ko ton tai');
            }
        }
    });
}

function formEditClass()
{
    var str_alert = "";
    if($("#name_class_edit").val() == "")
    {
        str_alert += "Please Fill Name-Class's Field\n";
    }
    if($("#total_student_edit").val() == "")
    {
        str_alert += "Please Fill Total-Student's Field\n";
    }

    if ($("#name_class_edit").val() == "" || $("#total_student_edit").val() == "")
    {
        alert(str_alert);
    }
    else {
        $.ajax({
            type: "POST",
            url: "/index.php?controller=class&action=editClass",
            data: $("#form_edit").serialize(),
            success: function () {
                $("#editClassModal").modal("hide");
                $("#table-class").load("/index.php?controller=class&action=listClassView");
            }
        });
    }
}

function deleteClass(id)
{
    $.ajax({
        url: "/index.php?controller=class&action=getDetailClass",
        type: "post",
        data: {
            'id' : id
        },
        dataType: "JSON",
        success: function(response) {
            if(response.status == true) {
                var info = response.data;
                $('#name_class_delete').val(info.ten_lop);
                $('#deleteClassModal').modal('show');
            } else {
                alert('Hoc sinh ko ton tai');
            }
        }
    });
}

function formDeleteClass()
{
    $.ajax({
        type: "POST",
        url: "/index.php?controller=class&action=deleteClass",
        data:  $("#name_class_delete").serialize(),
        success: function () {
            $("#deleteClassModal").modal("hide");
            $("#table-class").load("/index.php?controller=class&action=listClassView");
        }
    });
}

function viewStudentInClass(id)
{
    $.ajax({
        url: "/index.php?controller=class&action=getDetailClass",
        type: "POST",
        data: {
            'id' : id
        },
        dataType: "JSON",
        
    })
}