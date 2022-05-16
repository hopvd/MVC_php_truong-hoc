<?php
require_once $dir."/libs/database.php";

class ClassModel {

    public function getList() {
        $data = db_get_list("select * from infor_lop;");
        return $data;
    }

    public function add($data = array()) {
        $sql = 'INSERT INTO `infor_lop` ( `ten_lop`, `so_hoc_sinh`)
                VALUES ('.'"'. $data['name'] .'","'. $data['total_student'] .'");';
        $add = db_execute($sql);
        return $add;
    }

    public function update($id, $dataUpdate = array()) {
        $sql = "UPDATE `infor_lop`
                SET `ten_lop` = '" . $dataUpdate['name'] ."', 
                `so_hoc_sinh` = '" . $dataUpdate['total_student'] . "' WHERE (`id` = ". $id .")";
        $update = db_execute($sql);
        return $update;
    }

    public function get_row($id) {
        $class = db_get_row("select * from infor_lop where id = $id");
        return $class;
    }

    public function getListStudent($classId) {
        $data = db_get_list("select * from infor_hoc_sinh
                                    inner join hoc_sinh_lop
                                    on infor_hoc_sinh.id = hoc_sinh_lop.id_hs and hoc_sinh_lop.id_lop = $classId");
        return $data;
    }

    public function addStudentInClass($classId, $studentId) {
        $sql = 'INSERT INTO `quan_li_truong_hop`.`hoc_sinh_lop` (`id_lop`, `id_hs`) VALUES ('.$classId.',' .$studentId. ');';
        $add = db_execute($sql);
        return $add;
    }

    public function deleteClass($name) {
        $sql = "DELETE FROM `infor_lop` WHERE (`ten_lop` = '". $name ."');";
        $delete = db_execute($sql);
        return $delete;
    }
}