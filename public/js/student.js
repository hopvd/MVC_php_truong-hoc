$(function () {
    $("#table-student").load("/index.php?controller=student&action=listStudentView");
})

function editStudent(id) {
    $.ajax({
        url: "/index.php?controller=student&action=getDetailStudent",
        type: "post",
        data: {
            'id' : id
        },
        dataType: "JSON",
        success: function(response) {
            if(response.status == true) {
                var info = response.data;
                $('#id_edit').val(id);
                $('#name_edit').val(info.ho_ten);
                $('#birthday_edit').val(info.ngay_sinh);
                $('#gender_edit').val(info.gioi_tinh);
                $('#phone_edit').val(info.sdt);
                $('#address_edit').val(info.dia_chi);
                $('#editStudentModal').modal('show');
            } else {
                alert('Hoc sinh ko ton tai');
            }
        }
    });
}

function submitFormEdit()
{
    var str_alert = "";
    if($("#name_edit").val() == "")
    {
        str_alert += "Please Fill Name's Field\n";
    }
    if($("#birthday_edit").val() == "")
    {
        str_alert += "Please Fill Birthday's Field\n";
    }
    if($("#gender_edit").val() == "")
    {
        str_alert += "Please Fill Gender's Field\n";
    }
    if($("#phone_edit").val() == "")
    {
        str_alert += "Please Fill Phone's Field\n";
    }
    if($("#address_edit").val() == "")
    {
        str_alert += "Please Fill Address's Field\n";
    }

    if ($("#name_edit").val() == "" || $("#birthday_edit").val() == "" || $("#gender_edit").val() == ""
        || $("#phone_edit").val() == "" || $("#address_edit").val() == "")
    {
        alert(str_alert);
    }
    else {
        $.ajax({
            type: "POST",
            url: "/index.php?controller=student&action=edit",
            data: $("#form_edit").serialize(),
            success: function () {
                $("#editStudentModal").modal("hide");
                $("#table-student").load("/index.php?controller=student&action=listStudentView");
            }
        });
    }
}

function submitFormAdd()
{
    var str_alert = "";
    if($("#name_add").val() == "")
    {
        str_alert += "Please Fill Name's Field\n";
    }
    if($("#birthday_add").val() == "")
    {
        str_alert += "Please Fill Birthday's Field\n";
    }
    if($("#gender_add").val() == "")
    {
        str_alert += "Please Fill Gender's Field\n";
    }
    if($("#phone_add").val() == "")
    {
        str_alert += "Please Fill Phone's Field\n";
    }
    if($("#address_add").val() == "")
    {
        str_alert += "Please Fill Address's Field\n";
    }

    if ($("#name_add").val() == "" || $("#birthday_add").val() == "" || $("#gender_add").val() == ""
        || $("#phone_add").val() == "" || $("#address_add").val() == "")
    {
        alert(str_alert);
    }
    else {
        $.ajax({
            type: "POST",
            url: "/index.php?controller=student&action=addStudentAjax",
            data: $("#form_add").serialize(),  // get all form field value in serialize form
            dataType: "JSON",
            success: function (response) {
                console.log(response);
                if (response.status) {
                    $("#addStudentModal").modal("hide");
                    $("#table-student").load("/index.php?controller=student&action=listStudentView");
                }
                else {
                    alert("Name's Field Invalid!");
                }
            }
        });
    }
}

function deleteStudent(id)
{
    $.ajax({
        url: "/index.php?controller=student&action=getDetailStudent",
        type: "post",
        data: {
            'id' : id
        },
        dataType: "JSON",
        success: function(response) {
            // console.log(response.data);
            if(response.status == true) {
                var info = response.data;
                $('#name_del').val(info.ho_ten);
                $('#deleteStudentModal').modal('show');
            } else {
                alert('Hoc sinh ko ton tai');
            }
        }
    });
}

function confirmDelete()
{
    $.ajax({
        type: "POST",
        url: "/index.php?controller=student&action=deleteStudentAjax",
        data:  $("#name_del").serialize(),
        success: function () {
            $("#deleteStudentModal").modal("hide");
            $("#table-student").load("/index.php?controller=student&action=listStudentView");
        }
    });
}

